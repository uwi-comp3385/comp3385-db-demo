<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        // $products = DB::table('products')->get();
        $products = Product::all();
        // dd($products);
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(ProductRequest $request)
    {
        $validated = $request->validated();

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->brand = $request->input('brand');
        $product->sku = $request->input('sku');
        $product->price = $request->input('price');
        $product->featured = $request->input('featured');
        $product->stock = $request->input('stock');
        $product->save();

        return redirect('/products')->with('success', 'Product created!');
    }
}
