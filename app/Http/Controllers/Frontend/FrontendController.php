<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class FrontendController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('feature', '1')->take(4)->get();
        $bestSellerProducts = Product::where('bestSeller', '1')->take(3)->get(); // Fetch best seller products
        $saleProducts = Product::where('saleProduct', '1')->take(4)->get();
        return view('frontend.index', compact('featuredProducts', 'bestSellerProducts', 'saleProducts'));
    }

    public function bestSeller()
    {
        $bestSellerProducts = Product::where('bestSeller', '1')->get(); // Fetch all best seller products
        return view('frontend.bestSeller', compact('bestSellerProducts'));
    }

    public function saleProduct()
    {
        $saleProducts = Product::where('saleProduct', '1')->get(); // 
        return view('frontend.sale', compact('saleProducts'));
    }

    function shop()
    {
        $allProducts = Product::all(); // Fetch all products
        return view('frontend.shop', compact('allProducts'));
    }

    function productView($productSlug)
    {
        $product = Product::where('slug', $productSlug)->first();

        if($product) {
            return view('frontend.shopView', compact('product'));
        } else {
            return redirect('/shop')->with('status', "The product was not found");
        }
    }
}
