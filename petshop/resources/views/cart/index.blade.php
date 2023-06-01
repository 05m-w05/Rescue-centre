

@extends('layouts.app')


@section('title')

    Jacks Pet Shop

@endsection

@section('style')

    <!-- add your style files links here -->

@endsection



@section('content')

    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Shopping cart</h1>

    </div>
    <div class="container">
        @if(session()->has('message'))
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif

        <div class = "row justify-content-around">

            @php $totalCost = 0; @endphp
            @php $shippingCost = 15; @endphp
            @foreach($items as $item)
                @php $product = $item->product(); @endphp
                @php $totalCost = $totalCost + $item->product()->price @endphp
                <div class = "col-sm-6 col-md-3">
                    <div class = "thumbnail">
                        <img src = "{{asset($product->imagepath)}}" alt = "Generic placeholder thumbnail" style = "max-height: 150px">
                    </div>

                    <div class = "caption">
                        <h3>{{$product->title}}</h3>
                        <p class="description">{{$product->description}}</p>

                        <div class="clearfix">
                            <div>£{{$product->price}}</div>
                            <form action="{{route("cart.destroy", ["ID" => $item->id])}}" method="POST">
                                @csrf
                                <button class = "btn btn-danger fa-pull-right justify-content-around" role = "button">
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            @endforeach





        </div>
        <div class="row">
            <div class="col">


<br><br>
                    <table class="table table-light ">
                        <thead>
                        <tr>
                            <th scope="col">Cart</th>
                            <th scope="col">Shipping</th>
                            <th scope="col">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>£{{$totalCost}}</td>
                            <td>£{{$shippingCost}}</td>
                            <td>£{{$totalCost+$shippingCost}}</td>
                        </tr>

                        </tbody>
                    </table>

                <form action="{{route("order.store")}}" method="POST">
                    @csrf
                    <button  class="btn btn-success justify-content-around">Order Now</button>
                </form>
            </div>

        </div>
    </div>

@endsection

@section("scripts")

    <script src='{{asset("js/navbar.js")}}'></script>

@endsection
