<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kamrup Metropolitan College</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
        integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
    <link href="{{asset('css/materialize.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat:700|Shadows+Into+Light&display=swap"
        rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>

<body>
    @include('layouts.nav')
    <div class="sticky-news hide-on-small-only z-depth-5" id="news-section">
        <ul class="collapsible z-depth-5">
            <li>
                <div class="collapsible-header blue darken-4"><i class="white-text material-icons">whatshot</i><span
                        class="white-text sticky-bold">NEWS</span></div>
                <div class="collapsible-body no-padding" style="overflow:hidden;">
                    <div class="inner-collapsible" style="height:270px; width:100%; overflow:auto;">
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" src="../images/christmas.jpg" style="width:150px; height:100%; object-fit:cover">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Merry christmas to all our students. May God bless you and keep you safe. Have a
                                        happy holiday and don't forget to enjoy the winter snow.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/friends.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>We are hosting this years biggest event on our campurs. Subscribe to our daily
                                        feeds and keep posting.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover"src="../images/dating.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/books.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header blue darken-4"><i class="white-text material-icons">place</i><span
                        class="white-text sticky-bold">UPCOMING EVENTS</span></div>
                <div class="collapsible-body no-padding">
                    <div style="height:350px; width:100%; overflow-y: scroll;">
                        <div class="card small z-depth-3" style="margin:8px;">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator lazy" src="../images/christmas.jpg" style="object-fit:cover">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Christmas Eve<i
                                        class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Card Title<i
                                        class="material-icons right">close</i></span>
                                <p>Here is some more information about this product that is only revealed once clicked
                                    on.</p>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/friends.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>We are hosting this years biggest event on our campurs. Subscribe to our daily
                                        feeds and keep posting.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/dating.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/books.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header blue darken-4"><i class="white-text material-icons">filter_drama</i><span
                        class="white-text sticky-bold">CONTACT</span></div>
                <div class="collapsible-body no-padding">
                    <div style="height:270px; width:100%; overflow-y: scroll;" class="xxx">
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/christmas.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>Merry christmas to all our students. May God bless you and keep you safe. Have a
                                        happy holiday and don't forget to enjoy the winter snow.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/friends.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>We are hosting this years biggest event on our campurs. Subscribe to our daily
                                        feeds and keep posting.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/dating.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover" src="../images/books.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                                </div>
                                <div class="card-action">
                                    <a href="#">This is a link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    @yield('content')
    @include('layouts.fixedactionbutton')
    @include('layouts.footer')
</body>
<script src="{{asset('js/materialize.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</html>
