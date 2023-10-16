<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }
    public function add()
    {
        return view('admin.category.add');
    }
    public function insert(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->metaTitle = $request->input('metaTitle');
        $category->metaDescription = $request->input('metaDescription');
        $category->metaKeywords = $request->input('metaKeywords');
        $category->save();
        return redirect('categories')->with('status', "Category Added Successfully");
    }

    function edit($id) 
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }
    function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->metaTitle = $request->input('metaTitle');
        $category->metaDescription = $request->input('metaDescription');
        $category->metaKeywords = $request->input('metaKeywords');
        $category->update();
        return redirect('categories')->with('status', "Category Updated Successfully");
    }
    function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories')->with('status', "Category Deleted Successfully");
    }
}
