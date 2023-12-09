<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdukController extends Controller
{
    public function index()
    {
        $product = Product::get();
        return view('produk.index', compact('product'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);


        Product::create([
            'product' => $request->product,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

    
        return redirect()->route('produk.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
      
        $product = Product::findOrFail($id);

      
        return view('produk.edit', compact('product'));
    }

   
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'product' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);


        $product = Product::findOrFail($id);

   
        $product->update([
            'product' => $request->product,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

    
        return redirect()->route('produk.index')->with('success', 'Product updated successfully.');
    }
    public function show($id)
    {

        $product = Product::findOrFail($id);

        return view('produk.show', compact('product'));
    }
    public function destroy($id)
{
    $product = Product::findOrFail($id);

    // Hapus produk
    $product->delete();

    return redirect()->route('produk.index')->with('success', 'Product deleted successfully.');
}
}
