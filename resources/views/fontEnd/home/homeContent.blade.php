@extends('fontEnd.master')
@section('content')

    <!-- header-menu-bar -->
    <div class="header-menu-bar header-sticky">

        @include('fontEnd.includes.menu')
    </div>
    </header>

    <!-- END HEADER -->

    <!-- MAIN -->
    <main class="site-main">
        {{--pop up--}}
        @include('fontEnd.includes.popup')
        {{-- end pop up--}}

        <div class="block-section-1">
            @include('fontEnd.includes.slider')
        </div>
        <div class="block-daily-deals style1">

            @include('fontEnd.products.product1')

        </div>
        <div class="block-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="promotion-banner style-1">
                            <a href="#" class="banner-img"><img src="{{asset('public/fontEnd/images/home1/banner-1.jpg')}}" alt="banner-1"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="promotion-banner style-1">
                            <a href="#" class="banner-img"><img src="{{asset('public/fontEnd/images/home1/banner-2.jpg')}}" alt="banner-2"></a>
                            <a href="#" class="shop-now hidden-mobile">Shop now<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-section-4">
            @include('fontEnd.products.product2')
        </div>
        <div class="block-section-5">
            <div class="full-width background-section-5">

                @include('fontEnd.products.product3')

            </div>
        </div>
        <div class="block-section-6">
            <div class="container">
                <div class="promotion-banner box-single style-2">
                    <a href="#" class="banner-img"><img src="{{asset('public/fontEnd/images/home1/banner-3.jpg')}}" alt="banner-3"></a>
                    <a href="#" class="shop-now hidden-mobile">Shop now</a>
                </div>
            </div>
        </div>
        <div class="block-recent-view">
            @include('fontEnd.products.product4')
        </div>
        <div class="block-section-brand">
            <div class="container">
                <div class="section-brand style1">
                    <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                        <a href="#" class="item-brand"><img src="{{asset('public/fontEnd/images/home1/brand1.jpg')}}" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="{{asset('public/fontEnd/images/home1/brand1.jpg')}}" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="{{asset('public/fontEnd/images/home1/brand1.jpg')}}" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="{{asset('public/fontEnd/images/home1/brand1.jpg')}}" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="{{asset('public/fontEnd/images/home1/brand1.jpg')}}" alt="brand1"></a>
                        <a href="#" class="item-brand"><img src="{{asset('public/fontEnd/images/home1/brand1.jpg')}}" alt="brand1"></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- end MAIN -->

@endsection