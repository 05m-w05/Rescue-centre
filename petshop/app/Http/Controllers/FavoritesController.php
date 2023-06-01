<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use Illuminate\Http\Request;
use Auth;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $favorites = Auth::user()->favorites();

        return view("favorites.index")->with("favorites", $favorites);
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
        $validate = $request->validate([
            "id" => 'required|exists:products,id',
        ]);


        if (!Favorites::where("user_id", Auth::user()->id)->where("product_id", $request->id)->first()){
            $favorite = new Favorites;

            $favorite->user_id = Auth::user()->id;
            $favorite->product_id = $request->id;

            $favorite->save();
        }

        return redirect()->back();
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
        //
        Favorites::where("user_id", Auth::user()->id)->where("product_id", $id)->delete();

        return redirect()->back();
    }
}
