<?php

namespace App\Http\Requests;

use App\Models\Products;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;

class UpdateProductsRequest extends FormRequest
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
        return [
            'name' => 'required|string|min:6|max:255',
            'sell_price' => 'required',
            'buy_price' => 'required',
            'stock' => 'required|',
        ];
    }

    public function execute()
    {

        $product = new Products();
        $product->name = $this->name;
        $product->sell_price = $this->sell_price;
        $product->buy_price = $this->buy_price;
        $newImage = $this->file('image');
        $product->stock = $this->stock;

        if ($newImage) {
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            $newImageStore = $newImage->store('products', 'public');
            $product->image = $newImageStore;
        }

        $product->save();
    }
}
