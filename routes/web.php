<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProductController as Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// user
Auth::routes();

Route::middleware(['auth', 'verified', 'users'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});



// admin
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::prefix('admin')
        ->name('admin.')
        ->group(function () {
            Route::get('/', [HomeController::class, 'admin'])->name('home');

            // product
            Route::resource('product', Product::class);
        });
});
