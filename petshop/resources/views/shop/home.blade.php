
@extends('layouts.app')


@section('title')

Jacks Pet Shop

@endsection

@section('style')

    <!-- add your style files links here -->

@endsection



@section('content')


    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Our products</h1>
        <h2 class="mb-3">Subheading</h2>
    </div>



    <div class = "row justify-content-around">

        @foreach($products as $product)

            <div class = "col-sm-6 col-md-3">

            <div class = "thumbnail">
                <img src = "{{asset($product->imagepath)}}" alt = "Generic placeholder thumbnail" style = "max-height: 150px">
            </div>

            <div class = "caption">
                <h3>{{$product->title}}</h3>
                <p class="description">{{$product->description}}</p>

                <div class="clearfix">
                    <div>£{{$product->price}}</div>
                    <form action="{{route("cart.store", ["ID" => $product->id])}}}" method="POST">
                        @csrf
                        <input value="{{$product->id}}" name="productID" type="hidden">
                        <button class = "btn btn-danger fa-pull-right" role = "button">
                            Add to cart
                        </button>
                    </form>
                </div>
            </div>
        </div>

        @endforeach





    </div>

@endsection

@section("scripts")

    <script src='{{asset("js/navbar.js")}}'></script>

@endsection
