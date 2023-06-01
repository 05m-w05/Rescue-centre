
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
        <div class="fs-3 fw-light text-muted">Explore our range</div>


    </div>


    <div class="row" >
        <div class="col-12 ">

            <form action="{{ route("products.index", ["order" => "lowest"])  }}" method="GET">
                <button class="btn btn-danger ">
                    Lowest
                </button>
            </form>

            <form action="{{ route("products.index", ["order" => "highest"])  }}" method="GET">
                <button class="btn btn-danger mt-3">
                    Highest
                </button>
            </form>
<br>
            <form action="{{ route("products.index", ["order" => "category"])  }}" method="GET">
                <button class="btn btn-danger">
                    Category
                </button>
            </form>
            <br>
            <form action="{{ route("products.index", ["order" => "sale"])  }}" method="GET">
                <button class="btn btn-danger">
                    SALE
                </button>
            </form>


        </div>
    </div>
    <div class = "row justify-content-around">

        @foreach($products as $product)

            <div class="card" style="width: 18rem;">
                <div class="w-100 pt-2">
                    <form action="{{ route("favorite.store", ["id" => $product->id])  }}" method="POST">
                        @csrf
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-heart"></i>
                        </button>
                    </form>
                </div>
                <img src="{{asset($product->imagepath)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">£{{$product->price}}</li>


                </ul>
                <div class="card-body">
                    <form action="{{route("cart.store", ["ID" => $product->id])}}}" method="POST">
                        @csrf
                        <input value="{{$product->id}}" name="productID" type="hidden">
                        <button class = "btn btn-danger fa-pull-right" role = "button">
                            Add to cart
                        </button>
                    </form>

                </div>

            </div>


        @endforeach





    </div>

@endsection

@section("scripts")

    <script src='{{asset("js/navbar.js")}}'></script>

@endsection
