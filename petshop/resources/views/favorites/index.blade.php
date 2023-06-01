

@extends('layouts.app')


@section('title')

    Favorites

@endsection

@section('style')

    <!-- add your style files links here -->

@endsection



@section('content')


    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Favourites</h1>

    </div>
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif

        <div class = "row justify-content-around">

            @foreach($favorites as $f)
                @php $product = $f->product(); @endphp
                <div class = "col-sm-6 col-md-3">
{{--                    <form action="{{ route("favorite.delete", ["ID" => $product->id])  }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <button class="btn btn-danger">--}}
{{--                            <i class="fa-solid fa-trasn-can"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}
                    <div class = "thumbnail">
                        <img src = "{{asset($product->imagepath)}}" alt = "Generic placeholder thumbnail" style = "max-height: 150px">
                    </div>

                    <div class = "caption">
                        <h3>{{$product->title}}</h3>
                        <p class="description">{{$product->description}}</p>

                        <div class="clearfix">
                            <div>£{{$product->price}}</div>
                            <form action="{{route("favorite.delete", ["ID" => $product->id])}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class = "btn btn-danger fa-pull-right justify-content-around" role = "button">
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            @endforeach





        </div>

    </div>

@endsection

@section("scripts")

    <script src='{{asset("js/navbar.js")}}'></script>

@endsection
