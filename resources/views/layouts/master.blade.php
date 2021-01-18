<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include All CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd/css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd/css/prettyPhoto.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontEnd/css/rticons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/settings.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/js-image-slider.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/preset.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/responsive.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/animate.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/new_style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/new_slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/bootstrap.min.css')}}"/>
    <link id="layout" rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/colorpreset/wide.css') }}"/>
    <link id="colorChem" rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/colorpreset/light.css') }}"/>
    <link id="colorsSet" rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/colorpreset/color1.css') }}"/>

    <link rel="stylesheet" href="{{asset('frontEnd/css/e1729ef61e96.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('frontEnd/css/c008b2786a19.css')}}" type="text/css"/>
<!-- For Techonology Logos  -->

<link rel='stylesheet' id='ep_portfolio_style-css'  href="{{asset('frontEnd/css/portfolio-style.css')}}" type='text/css' media='all' />
<script type="text/javascript" src="{{asset('js/slider.js')}}"></script>




{{--    <link rel="stylesheet" href="{{asset('frontEnd/css/main6176.css')}}" type="text/css"/>--}}
    <!--[if lt IE 9]>
    <script src="{{ asset('frontEnd/js/html5shiv.js')}}"></script>
    <![endif]-->

<style type="text/css">
   .nbr_approved {
    position: absolute;
    color: #ffffff;
    right: 100px;
    top: 50px;
    border: 1px solid #111e6c;
    padding: 10px;
    border-radius: 20px;
    box-sizing: border-box;
    box-shadow: 0px 0px 3px 3px #ffffff;
    }
    .banner_image{
        height: 400px; width: 100%;background: #111e6c;
    }
    .nbr_approved h1{
        text-align: center;
        font-size: 50px;
        color: #339AF0
    }
    .nbr_approved h2{
       color: greenyellow;
    }
    .nbr_approved h3{
       text-align: center;color: darkseagreen
    }
     .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0);
        }
        to {
            transform: rotate(360deg);
        }
    }

    .jssorb101 .i {
        position: absolute;
        cursor: pointer
    }

    .jssorb101 .i .ci {
        fill: #000
    }

    .jssorb101 .i .co {
        fill: #fff;
        opacity: .3
    }

    .jssorb101 .i:hover .co {
        fill: #f93;
        opacity: 1
    }

    .jssorb101 .i:hover .ci {
        fill: #fff
    }

    .jssorb101 .iav .ci {
        fill: #fff;
        stroke-width: 0
    }

    .jssorb101 .iav .co {
        fill: #46d1d3;
        opacity: 1
    }

    .jssorb101 .i.idn {
        opacity: .3
    }

    .jssora051 {
        display: block;
        position: absolute;
        cursor: pointer
    }

    .jssora051 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 360;
        stroke-miterlimit: 10
    }

    .jssora051:hover {
        opacity: .8
    }

    .jssora051.jssora051dn {
        opacity: .5
    }

    .jssora051.jssora051ds {
        opacity: .3;
        pointer-events: none
    }
    /* Mobile Styles */
@media only screen and (max-width: 400px) {
 .nbr_approved {
    position: absolute;
    color: #ffffff;
    right: 7px;
    top: 65px;
    border: 1px solid #111e6c;
    padding: 10px;
    border-radius: 20px;
    box-sizing: border-box;
    box-shadow: 0px 0px 3px 3px #ffffff;
    }
    .nbr_approved h1{
        text-align: center;
        font-size: 35px;
        color:#339AF0;
    }
    .nbr_approved h2{
        font-size: 17px;
    }
    .nbr_approved h3{
       text-align: center;
    color: #fff;
    font-size: 17px;
    }
}

/* Tablet Styles */
@media only screen and (min-width: 401px) and (max-width: 960px) {
 .nbr_approved {
   position: absolute;
    color: #ffffff;
    right: 7px;
    top: 65px;
    border: 1px solid #111e6c;
    padding: 10px;
    border-radius: 20px;
    box-sizing: border-box;
    box-shadow: 0px 0px 3px 3px #ffffff;
    }
   .nbr_approved h1{
        text-align: center;
        font-size: 35px;
        color: #339AF0;
    }
    .nbr_approved h2{
        font-size: 17px;
    }
    .nbr_approved h3{
       text-align: center;
    color: #fff;
    font-size: 17px;
    }
}


</style>
</head>
<body>

<!--================= Box Div Start ==================-->
<div class="boxWrapper">
    <!--================= Box Div Start ==================-->
    <!-- Header Area -->
@include('inc.header')
<!-- Slider Section -->
@yield('mainContent')
<!-- Footer Section -->
@include('inc.footer')
<!--================= Box Div End ==================-->
</div>
<!--================= Box Div End ==================-->

<!-- Include All JS -->
<script type="text/javascript" src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/jquery.prettyPhoto.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/mixer.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/appear.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/circle-progress.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/directionHover.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/js-image-slider.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/gmaps.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontEnd/js/theme.js')}}"></script>
<script type="text/javascript">jssor_1_slider_init();</script>

<script type="text/javascript">
    var x = "Total Width: " + screen.width;
    console.log(x);
</script>
</body>

</html>
