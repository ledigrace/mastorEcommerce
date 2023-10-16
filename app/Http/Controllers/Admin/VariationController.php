<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variation;

class VariationController extends Controller
{
    public function index()
    {
        $variations = Variation::all();
        return view('admin.variations.index', compact('variations'));
    }

    public function add()
    {
        return view('admin.variations.add');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', 
            'bestSellerVar' => 'boolean',
            'outOfStock' => 'boolean',
            'variationCode' => 'required|string|max:50',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move('assets/uploads/variations', $imageName); // Store image in public/assets/uploads/variations
            $imagePath = 'assets/uploads/variations/' . $imageName; // Image path for database
        }

        // Create a new Variation instance and save the data
        Variation::create([
            'name' => $request->input('name'),
            'image' => $imagePath, // Store the image path in the database
            'bestSellerVar' => $request->input('bestSellerVar', false), // Default to false if not provided
            'outOfStock' => $request->input('outOfStock', false), // Default to false if not provided
            'variationCode' => $request->input('variationCode'),
        ]);

        return redirect('variations')->with('status', 'Variation Added Successfully');
    }

    public function edit($id)
    {
        $variation = Variation::findOrFail($id);
        return view('admin.variations.edit', compact('variation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048', 
            'bestSellerVar' => 'boolean',
            'outOfStock' => 'boolean',
            'variationCode' => 'required|string|max:50',
        ]);

        $variation = Variation::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move('assets/uploads/variations', $imageName);
            $variation->image = 'assets/uploads/variations/' . $imageName;
        }

        // Update variation data
        $variation->name = $request->input('name');
        $variation->bestSellerVar = $request->input('bestSellerVar', false);
        $variation->outOfStock = $request->input('outOfStock', false);
        $variation->variationCode = $request->input('variationCode');
        $variation->save();

        return redirect('variations')->with('status', 'Variation Updated Successfully');
    }

    public function destroy($id)
    {
        $variation = Variation::findOrFail($id);

        // Delete the image from storage if it exists
        if ($variation->image && file_exists(public_path($variation->image))) {
            unlink(public_path($variation->image));
        }

        // Delete the variation from the database
        $variation->delete();

        return redirect('variations')->with('status', 'Variation Deleted Successfully');
    }

}