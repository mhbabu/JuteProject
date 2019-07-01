<!DOCTYPE html>
<html lang="en">
<head>
    <title>OneTech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('assets/front/styles/bootstrap4/bootstrap.min.css') !!}
    {!! Html::style('assets/front/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') !!}
    {!! Html::style('assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}
    {!! Html::style('assets/front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}
    {!! Html::style('assets/front/plugins/OwlCarousel2-2.2.1/animate.css') !!}
    {!! Html::style('assets/front/plugins/slick-1.8.0/slick.css') !!}
    {!! Html::style('assets/front/styles/main_styles.css') !!}
    {!! Html::style('assets/front/styles/responsive.css') !!}

    @yield('front-style')

</head>

<body>

<div class="super_container">
    <!-- Header -->
    <header class="header">
        <!-- Top Bar -->
            @include('parts.front.front-headerTop')
        <!-- Header Main -->
            @include('parts.front.front-headerMiddle')
        <!-- Main Navigation -->
            @include('parts.front.front-headerBottom')
        <!-- Menu -->
            @include('parts.front.front-headerPageMenu')
    </header>

    <!-- Banner -->
        @yield('banner')
    <!-- Characteristics -->
        <div class="container-fluid">
            @yield('content')
        </div>

    <!-- Newsletter -->
        @include('parts.front.newsLetter')
    <!-- Footer -->
    @include('parts.front.front-footer')
</div>
{!! Html::script('assets/front/js/jquery-3.3.1.min.js') !!}
{!! Html::script('assets/front/styles/bootstrap4/popper.js') !!}
{!! Html::script('assets/front/styles/bootstrap4/bootstrap.min.js') !!}
{!! Html::script('assets/front/plugins/greensock/TweenMax.min.js') !!}
{!! Html::script('assets/front/plugins/greensock/TimelineMax.min.js') !!}
{!! Html::script('assets/front/plugins/scrollmagic/ScrollMagic.min.js') !!}
{!! Html::script('assets/front/plugins/greensock/animation.gsap.min.js') !!}
{!! Html::script('assets/front/plugins/greensock/ScrollToPlugin.min.js') !!}
{!! Html::script('assets/front/plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}
{!! Html::script('assets/front/plugins/slick-1.8.0/slick.js') !!}
{!! Html::script('assets/front/plugins/easing/easing.js') !!}
{!! Html::script('assets/front/js/custom.js') !!}

@yield('front-script')

</body>

</html>