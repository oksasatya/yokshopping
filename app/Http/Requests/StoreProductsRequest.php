<?php

namespace App\Http\Requests;

use App\Models\Products;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StoreProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return Products::validationRules;
    }


    public function execute()
    {
        $product = new Products();
        $product->name = $this->name;
        $product->sell_price = $this->sell_price;
        $product->buy_price = $this->buy_price;
        $newImage = $this->file('image');
        $product->stock = $this->stock;


        // handle file image upload
        if ($newImage) {
            if ($product->image) {
                // delete old image
                Storage::delete($product->image);
            }
            $newImageStore = $newImage->store('products', 'public');
            $product->image = $newImageStore;
        }

        $product->save();
        // create pivot table user and product
        $user = User::find(Auth::user()->id);
        $user->products()->attach($product);
    }
}
