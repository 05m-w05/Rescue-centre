@extends('layouts.app')


@section('title')

    Our Dogs

@endsection

@section('style')

    <!-- add your style files links here -->

@endsection



@section('content')




    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Our dogs</h1>
        <div class="fs-3 fw-light text-muted">Have a look at all our dogs available for adoption and foster</div>

    </div>

    <div class = "row justify-content-around">



        @foreach($dogs as $dog)

            <div class="card" style="width: 18rem;">
                <br>
                <img src="{{asset($dog->imagepath)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$dog->name}}</h5>
                    <p class="card-text">{{$dog->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Breed: {{$dog->breed}}</li>
                    <li class="list-group-item">Age: {{$dog->age}}</li>
                </ul>
                <div class="card-body">

                    <button class = "btn btn-danger fa-pull-right" role = "button">
                        Enquires in store
                    </button>
                </div>
            </div>


        @endforeach

    </div>

@endsection


@section("scripts")

    <script src='{{asset("js/navbar.js")}}'></script>

@endsection
