<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('product.index',['products'=>$products]);
    }

    public function create()
{
    return view('product.create')->with('categories',category::all());
}

public function save(Request $request)

    {
        //dd($request);
        $request->validate([
            'product' => 'required|string|max:255',
            'category' => 'required|string|max:255'
        ]);

        $product= new Product();
        $product->name = $request->product;
        $product->category = $request->category;
        $product->save();

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route("product.create");

       
    
}

public function edit($product)
{
    return view('product.edit')->with([
        'categories' => Category::all(),
        'product' => Product::find($product),
    ]);
}

public function update(Request $request, $id)
{
    $request->validate([
        'product' => 'required|string|max:255',
        'category' => 'required|string|max:255'
    ]);

    // Find the product by its ID
    $product = Product::find($id);

    if (!$product) {
        return redirect()->route('product.index')->with('error', 'Product not found');
    }

    // Update the product with the new data
    $product->update([
        'name' => $request->input('product'),
        'category' => $request->input('category')
    ]);

    // Redirect to the product listing page or show page
    return redirect()->route('product.index')->with('success', 'Product updated successfully');
}



public function delete($productID)
{

    $product = Product::where('id', $productID)->first();

    if ($product !== null) {
        $product->delete();
    }

    $products = Product::all();
    return view('product.index',['products'=>$products]);
}
}
