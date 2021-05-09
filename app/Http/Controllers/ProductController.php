<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();

        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*       $request->validate([
                   'name' => 'required',
                   'description' => 'required',
                   'price' => 'required',
                   'product_qty' => 'required'
               ]);*/

        $name = $request->product_name;
        $description = $request->product_description;
        $price = $request->product_price;
        $qty = $request->product_qty;


        DB::table('products')
            ->Insert(
                ['name' => $name,
                    'description' => $description,
                    'price' => $price,
                    'quantity' => $qty]
            );

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = DB::table('products')->find($product->id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $name = $request->product_name;
        $description = $request->product_description;
        $price = $request->product_price;
        $qty = $request->product_qty;

        DB::table('products')
            ->where('id', $product->id)
            ->update(['name' => $name, 'description' => $description, 'price' => $price, 'quantity' => $qty]);


        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $product = DB::table('products')->where('id',$product->id)->delete();

        if ($product) {
            return redirect()->route('products.index');
        } else {
            return redirect()->route('products.index');
        }

    }
}
