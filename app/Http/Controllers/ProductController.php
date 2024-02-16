<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'brand' => 'required',
            'sku' => 'required',
            'price' => 'required|decimal:2',
            'featured' => 'required',
            'stock' => 'required|numeric',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->brand = $request->input('brand');
        $product->sku = $request->input('sku');
        $product->price = $request->input('price');
        $product->featured = $request->input('featured');
        $product->stock = $request->input('stock');
        $product->save();

        return redirect('/products');
    }
}
