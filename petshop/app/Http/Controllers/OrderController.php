<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::where("user_id", Auth::user()->id)->get();

        return view("shop.orders")->with("orders", $orders);
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

        $cartItems = Cart::where("user_id", Auth::user()->id)->get();

        foreach($cartItems as $item) {
            $order = new Order();

            $order->user_id = Auth::user()->id;
            $order->product_id = $item->product_id;

            $order->save();
        }

        Cart::where("user_id", Auth::user()->id)->delete();

        return redirect()->back()->with("message", "Your order has been submitted. Thanks!");


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
        Order::where("id", $id)->delete();

        return redirect()->back()->with("message", "Order has been refunded");
    }
}
