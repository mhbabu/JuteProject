@extends('layout.front.front-layout')
@section('banner')
    <div class="banner">
        <div class="banner_background" style="background-image:url(assets/front/images/banner_background.jpg)"></div>
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="banner_product_image"><img src="assets/front/images/banner_product.png" alt=""></div>
                <div class="col-lg-5 offset-lg-4 fill_height">
                    <div class="banner_content">
                        <h1 class="banner_text">new era of smartphones</h1>
                        <div class="banner_price"><span>$530</span>$460</div>
                        <div class="banner_product_name">Apple Iphone 6s</div>
                        <div class="button banner_button"><a href="#">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Deals of the week -->
    @include('parts.front.featureItems')
    <!-- Popular Categories -->
    @include('parts.front.popularCategories')
    <!-- Banner -->
    @include('parts.front.banner')
    <!-- Hot New Arrivals -->
    @include('parts.front.newArrival')
    <!-- Best Sellers -->
    @include('parts.front.bestSellers')
    <!-- Adverts -->
    @include('parts.front.adverts')
    <!-- Trends -->
    @include('parts.front.trends')
    <!-- Reviews -->
    @include('parts.front.latestReview')
    <!-- Recently Viewed -->
    @include('parts.front.recentView')
    <!-- Brands -->
    @include('parts.front.brandSlider')
@endsection
