<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VariationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontendController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','isAdmin']], function () {

    Route::get('/dashboard', function () {
       return "This is Admin";
    });

});

Route::get('/shop', [FrontendController::class, 'shop']);
Route::get('/product/{productSlug}', [FrontendController::class, 'productView']);



Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\Admin\FrontendController@index');
    
    // categories
    Route::get('categories', 'App\Http\Controllers\Admin\CategoryController@index');
    Route::get('add-category', 'App\Http\Controllers\Admin\CategoryController@add');
    Route::post('insert-category', 'App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    // products
    Route::get('products', [ProductController::class, 'index']);
    Route::get('add-products', [ProductController::class, 'add']);
    Route::post('insert-product', [ProductController::class, 'insert']);
    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);

     // variations
     Route::get('variations', [VariationController::class, 'index']);
     Route::get('add-variation', [VariationController::class, 'add']);
     Route::post('insert-variation', [VariationController::class, 'insert']);
     Route::get('edit-variation/{id}', [VariationController::class, 'edit']); // Show form to edit a variation
     Route::put('update-variation/{id}', [VariationController::class, 'update']); // Handle form submission to update a variation
     Route::get('delete-variation/{id}', [VariationController::class, 'destroy']); // Delete a variation
});