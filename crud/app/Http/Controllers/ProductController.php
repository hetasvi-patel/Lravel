<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index()
    {
        $data  = Product::all();
        return view('products.list',compact('data')); 
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ensure valid image file
        ];
        
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()
                ->route('product.create')
                ->withInput()
                ->withErrors($validator);
        }

        // Handle image upload
        $imagename = time() . '.' . $request->image->extension(); // Correct method name
        $request->image->move(public_path('product'), $imagename);

        // Save product data
        $product = new Product();
        $product->image = $imagename;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();

        return redirect()
            ->route('product.index')
            ->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id); // Fetch the product by ID
        return view('products.edit', compact('product')); // Pass product to the view
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Update product details
        $product->name = $request->name;
        $product->description = $request->description;
    
        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            $imagename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('product'), $imagename);
            $product->image = $imagename; // Update image
        }
    
        $product->save();
    
        return redirect()
            ->route('product.index')
            ->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $isDeleted = product::destroy($id);
        if($isDeleted){
            return redirect()->route('product.index');
        }
    
    }
}
