@extends('layouts.app')
@section('content')



<div class="container px-5 pb-5">
    <div class="row gx-5 align-items-center">
        <div class="col-xxl-5">
            <!-- Header text content-->
            <div class="text-center text-xxl-start">
                <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">Design &middot; Development &middot; Marketing</div></div>
                <div class="fs-3 fw-light text-muted">Welcome to</div>
                <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Jacks Pet Supplies</span></h1>
                <div class="fs-3 fw-light text-muted">With your support, we're able to offer dogs a loving place to stay while they wait for their forever home.</div>
             <BR>   <div class="fs-3 fw-light text-muted">USE COUPON CODE: MEOW45 AT CHECKOUT FOR 45% OFF!</div>
            </div>
        </div>

        <div class="col-xxl-7">
            <!-- Header profile picture-->
            <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                <div class="profile bg-gradient-primary-to-secondary">
                    <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                    <!-- Watch a tutorial on how to do this on YouTube (link)-->
                    <img class="profile-img" src="{{asset("https://upload.wikimedia.org/wikipedia/commons/b/bc/Jacks_logo_2018.svg")}}" alt="..." />


@endsection

                    @section("scripts")

                        <script src='{{asset("js/navbar.js")}}'></script>

@endsection
