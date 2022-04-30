<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $search = request()->query('search');
        $products = Products::where('name', 'like', '%' . $search . '%')->latest()->paginate(4);
        return view('users.index', compact('products'));
    }

    public function admin()
    {
        // get count product with pivot table
        $user = User::find(Auth::user()->id);
        $total_products = $user->products()->count();
        return view('admin.home', compact('total_products'));
    }

    public function detailProduct(Products $product, $id)
    {
        $product = Products::find($id);
        return view('users.detail', compact('product'));
    }
}
