<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kamrup Metropolitan College</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
        integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
       
    </style>
</head>

<body>
    <div class="coverx row">
        <div class="pos-for-nav col s12 l10 offset-l1 m10 offset-m1">
            @include('layouts.nav')
        </div>
        <div class="heading-space col offset-l1 offset-m1 l3 m3">
            @include('layouts.card')
        </div>
        <div class="intro-section col l7 m7">
            <div class="slider z-depth-5" style="padding:0px; margin:0px;">
                <ul class="slides">
                    <li>
                        <img src="images/front.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="images/front.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="images/front.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="images/front.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div>

        </div>
        <div class="col s12 m10 offset-l1 offset-m1 l10 get-started">
            <div class="container">
                <div class="row">
                    <div class="col s12 m4 l4">
                        <a class="waves-effect waves-light my-color-palette sally btn-large" style="width:100%;">College</a>
                    </div>
                    <div class="col s12 m4 l4">
                        <a class="waves-effect waves-light my-color-palette sally btn-large" style="width:100%;">Admission</a>
                    </div>
                    <div class="col s12 m4 l4">
                        <a class="waves-effect waves-light my-color-palette sally btn-large" style="width:100%;">Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nothing">

    </div>
    
    {{-- <div class="row footer-space">
        @include('layouts.footer')
    </div> --}}
    @include('layouts.footer')
</body>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, {
            alignment: 'right',
            hover: true,
            constrainWidth: false,
            coverTrigger: false
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.slider');
        var instances = M.Slider.init(elems, {
            indicators: true,
            duration: 400
        });
    });

    var window_height = window.innerHeight

    $(document).ready(function() {
        $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
        console.log($(window).scrollTop())
        if ($(window).scrollTop() > 280) {
            $('#nav_bar').addClass('navbar-fixed');
        }
        if ($(window).scrollTop() < 281) {
            $('#nav_bar').removeClass('navbar-fixed');
        }
        });
    });
</script>

</html>