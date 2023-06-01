
@extends('layouts.app')


@section('title')

    Orders

@endsection

@section('style')

    <!-- add your style files links here -->

@endsection



@section('content')


    @if(session()->has('message'))
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Thumbnaiil</th>
            <th scope="col">Item</th>
            <th scope="col">Price</th>
            <th scope="col">Ordered At</th>
            <th scope="col">Refund</th>
        </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>
                    <img src="{{asset($order->product()->imagepath)}}" class="thumbnail " style="width: 100px"/>
                </td>
                <td>{{$order->product()->title}}</td>
                <td>{{$order->product()->price}}</td>
                <td>{{$order->created_at->diffForHumans()}}</td>
                <td>
                    <form action="{{ route("order.delete", ["ID" => $order->id])  }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">Refund</button>
                    </form>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>










@endsection

@section("scripts")


@endsection
