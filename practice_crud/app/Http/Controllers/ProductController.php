<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::get();
        return view('products.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'price'=> 'required'
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()
            ->route('products.create')
            ->withInput()
            ->withErrors($validator);
        }

        // $request->validate(['name' => 'required', 'price' => 'required']);
        $product = new product();
        $product->name = $request->name;
        $product->price = $request->price; 
        $product->save();
        // Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate(['name' => 'required', 'price' => 'required']);
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');;
    }
}
