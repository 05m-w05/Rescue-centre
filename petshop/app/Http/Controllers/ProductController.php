<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //fetch products
        $products = array();

        if($request->order == "lowest"){
            $products = Product::orderBy('price', 'ASC')->get();
        }
        else if($request->order == "highest"){
            $products = Product::orderBy('price', 'DESC')->get();
        }
        else if($request->order == "category"){
            $products = Product::orderBy('category', 'ASC')->get();
        }
        else if($request->order == "sale"){
            $products = Product::orderBy('sale', 'DESC')->get();
        }

        return view('shop/index')->with("products", $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::where("id", $id)->delete();

        return redirect()->back()->with("message", "Product is deleted");
    }
}
