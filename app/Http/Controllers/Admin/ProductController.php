<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    function add()
    {
        $categories = Category::all();
        $variations = Variation::all(); // Retrieve all variations
        return view('admin.products.add', compact('categories', 'variations'));
    }

    public function insert(Request $request)
    {
        $product = new Product(); 
            // Handle multiple image upload
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move('assets/uploads/products', $filename);
                $images[] = 'assets/uploads/products/' . $filename;
            }
        }
        $product->images = $images;

        $product->categoryId = $request->input('categoryId');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->smallDescription = $request->input('smallDescription');
        $product->description = $request->input('description');
        $product->originalPrice = $request->input('originalPrice');
        $product->salePrice = $request->input('salePrice');
        $product->qty = $request->input('qty');
        $product->bestSeller = $request->input('bestSeller') == TRUE ? '1':'0';
        $product->feature = $request->input('feature') == TRUE ? '1':'0';
        $product->saleProduct = $request->input('saleProduct') == TRUE ? '1':'0';
        $product->metaTitle = $request->input('metaTitle');
        $product->metaDescription = $request->input('metaDescription');
        $product->metaKeywords = $request->input('metaKeywords');
        $product->save();
        return redirect('products')->with('status',"Product added successfully");
    }

    public function edit($id)
    {
        $products = Product::find($id);
        $categories = Category::all(); // Retrieve all categories
        return view('admin.products.edit', compact('products', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
    
        // Handle multiple image update
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move('assets/uploads/products', $filename);
                $images[] = 'assets/uploads/products/' . $filename;
            }
            // Delete old images if necessary
            if ($product->images) {
                foreach ($product->images as $oldImage) {
                    if (File::exists($oldImage)) {
                        File::delete($oldImage);
                    }
                }
            }
        }
    
        // Ensure $product->images is an array
        $product->images = $images ?? [];
    
        if (!$product) {
            return redirect('products')->with('status', "Product not found");
        }
    
        // Update other fields
        $product->categoryId = $request->input('categoryId');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->smallDescription = $request->input('smallDescription');
        $product->description = $request->input('description');
        $product->originalPrice = $request->input('originalPrice');
        $product->salePrice = $request->input('salePrice');
        $product->qty = $request->input('qty');
        $product->bestSeller = $request->input('bestSeller') ? '1' : '0';
        $product->feature = $request->input('feature') ? '1' : '0';
        $product->saleProduct = $request->input('saleProduct') ? '1' : '0';
        $product->metaTitle = $request->input('metaTitle');
        $product->metaKeywords = $request->input('metaKeywords');
        $product->metaDescription = $request->input('metaDescription');
    
        $product->save();
    
        return redirect('products')->with('status', "Product Updated successfully");
    }
    

    public function destroy($id)
    {
        $product = Product::find($id);

        // Delete images if they exist
        $images = $product->images ?? [];
        foreach ($images as $image) {
            $imagePath = public_path($image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        // Delete product record from the database
        $product->delete();

        return redirect('products')->with('status', "Product Deleted successfully");
    }

}
