@extends('layouts.app')

@section('content')
<style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
        padding-top: 56px;
    }


    .fixed-scrollspy {
        position: fixed;
        top: 30%;
        left: 0%;
        padding-left: 50px;
    }
</style>
<main>
    <div class="fixed-scrollspy hide-on-med-and-down">
        <ul class="section table-of-contents">
            <li><a href="#introduction">Introduction</a></li>
            <li><a href="#classroom">Classroom</a></li>
            <li><a href="#labs">Labs</a></li>
            <li><a href="#library">Library</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col hide-on-med-and-down l2">

        </div>
        <div class="col s12 l8 m12 no-padding">
            <div id="introduction" style="height:500px; position:relative;" class="section scrollspy no-padding">
                <img src="/images/lifeatkmc.jpg" style="object-fit:cover; height:500px; width:100%;" alt="">
                <div style="position:absolute; bottom:0%; left:5%;">
                    <span class="hide-on-small-only"
                        style="font-size:7vw; margin:0%; padding:0%; line-height:6vw; color:white; font-family: 'Bebas Neue', cursive;">Life
                        at KMC</span>
                    <span class="hide-on-med-and-up"
                        style="font-size:7vh; margin:0%; padding:0%; line-height:6vw; color:white; font-family: 'Bebas Neue', cursive;">Life
                        at KMC</span>
                </div>
            </div>
            <div class="slider" style="margin-top:10px; z-index:1;">
                <ul class="slides">
                    <li>
                        <img src="/images/class_.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="/images/labs_.jpg"> <!-- random image -->
                        <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="/images/class_.jpg"> <!-- random image -->
                        <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="/images/labs_.jpg"> <!-- random image -->
                        <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div>
                    </li>
                </ul>
            </div>

            <div id="classroom" class="section scrollspy">
                <div class="row" style="margin:0% !important;">
                    <div class="col s12 m6 l6 no-padding">
                        <img src="/images/class_.jpg" style="height:400px; object-fit:cover; width:100%;" alt="">
                    </div>
                    <div class="col s12 m6 l6" style="padding:30px;">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Intuitive Classroom</h4>
                        <p style="text-align:justify;">Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum
                            det corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det
                            corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det corundum.
                            Hostel is the lorem ipsum det corundum.</p>
                    </div>
                </div>
            </div>

            <div id="labs" style="height:500px;" class="section scrollspy">
                <div class="row" style="margin:0% !important; position:relative;">
                    <img src="/images/labs_.jpg" style="height:500px; object-fit:cover; width:100%;" alt="">
                    <div class="hide-on-med-and-down"
                        style="position:absolute; right:5%; left:50%; top:5%; padding:30px; background-color:rgba(255, 255, 255, 0.9)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Exclusive Labs</h4>
                        <p style="text-align:justify;">Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum
                            det corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det
                            corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det corundum.
                            Hostel is the lorem ipsum det corundum.</p>
                    </div>
                    <div class="hide-on-large-only"
                        style="position:absolute; left:2%; right:2%; bottom:2%; padding:10px; background-color:rgba(255, 255, 255, 0.9)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Book Haven</h4>
                        <p style="text-align:justify;">Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum
                            det corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det
                            corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det corundum.
                            Hostel is the lorem ipsum det corundum.</p>
                    </div>
                </div>
            </div>

            <div id="library" style="height:500px; margin-top:40px;" class="section scrollspy">
                <div class="row" style="margin:0% !important; position:relative;">
                    <div class="hide-on-med-and-down"
                        style="position:absolute; right:50%; left:5%; top:5%; color:white; padding:30px; background-color:rgba(0, 0, 0, 0.7)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Book Haven</h4>
                        <p style="text-align:justify;">Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum
                            det corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det
                            corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det corundum.
                            Hostel is the lorem ipsum det corundum.</p>
                    </div>
                    <div class="hide-on-large-only"
                        style="position:absolute; left:2%; right:2%; bottom:2%; color:white; padding:10px; background-color:rgba(0, 0, 0, 0.7)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Book Haven</h4>
                        <p style="text-align:justify;">Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum
                            det corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det
                            corundum. Hostel is the lorem ipsum det corundum. Hostel is the lorem ipsum det corundum.
                            Hostel is the lorem ipsum det corundum.</p>
                    </div>
                    <img src="/images/library_.jpg" style="height:500px; object-fit:cover; width:100%;" alt="">
                </div>
            </div>
        </div>
        <div class="col hide-on-med-and-down l2">

        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('.scrollspy').scrollSpy();
        $('.slider').slider();
    });
</script>
@endsection