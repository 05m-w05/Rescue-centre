<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;
use App\Models\Product;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $items = Cart::where("user_id", Auth::user()->id)->get();

        return view("cart.index")->with("items", $items);
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
        if(Product::where("id", $request->productID)->first())
        {
            if (!Cart::where("product_id", $request->productID)->where("user_id", Auth::user()->id)->first())
            {
                $cart = new Cart;

                $cart->product_id = $request->productID;
                $cart->user_id = Auth::user()->id;

                $cart->save();

                return redirect()->back()->with("message", "Product added to card.");
            }
        }

        return redirect()->back()->with("error", "Product doesn't exist.");
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
        Cart::where("id", $id)->where("user_id",Auth::user()->id)->delete();

        return redirect()->back();
    }
}
