
@extends('layouts.app')


@section('title')

    Our pets

@endsection

@section('style')

    <!-- add your style files links here -->

@endsection



@section('content')


    <div class = "row justify-content-around">

        @foreach($products as $product)

            <div class = "col-sm-6 col-md-3">

                <div class = "thumbnail">
                    <img src = "{{$product->imagepath}}" alt = "Generic placeholder thumbnail" style = "max-height: 150px">
                </div>

                <div class = "caption">
                    <h3>{{$product->title}}</h3>
                    <p class="description">{{$product->description}}</p>

                    <div class="clearfix">
                        <div>£{{$product->price}}</div>
                        <a href = "#" class = "btn btn-danger fa-pull-right" role = "button">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>

        @endforeach





    </div>

@endsection

@section("scripts")


@endsection
