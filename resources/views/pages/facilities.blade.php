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
        padding-left: 50px;
        /* position: fixed; */
    }

</style>
<main>
    <div id="introduction" style="height:500px; position:relative;" class="section scrollspy no-padding">
        <img src="/images/kmc-life.jpg" style="object-fit:cover; height:500px; width:100%;" alt="">
        <div class="row" style="height:500px; width:100%; position:absolute; top:0%; left:0%;">
            <div class="col s12 l8 m12 offset-l2 no-padding" style="position:absolute; bottom:5%;">
                <span class="hide-on-small-only"
                    style="font-size:7vw; margin:0%; padding:0% 4%; line-height:6vw; background-color:rgba(0, 0, 0, 0.5); color:white; font-family: 'Bebas Neue', cursive;">Life
                    at KMC</span>
                <span class="hide-on-med-and-up"
                    style="font-size:12vh; margin:0%; padding:0% 4%; line-height:11vh; background-color:rgba(0, 0, 0, 0.5); color:white; font-family: 'Bebas Neue', cursive;">Life
                    at KMC</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col hide-on-med-and-down l2">
            <div class="right fixed-scrollspy hide-on-med-and-down">
                <ul id="scr-spy" class="section table-of-contents">
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#classroom">Classroom</a></li>
                    <li><a href="#labs">Labs</a></li>
                    <li><a href="#library">Library</a></li>
                    <li><a href="#hostel">Hostel</a></li>
                </ul>
            </div>
        </div>
        <div class="col s12 l8 m12 no-padding">

            <div class="slider" style="margin-top:10px; z-index:1;">
                <ul class="slides">
                    <li>
                        <img src="/images/bio-lab.jpg"> <!-- random image -->
                        {{-- <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                    <li>
                        <img src="/images/bio-lab-1.jpg"> <!-- random image -->
                        {{-- <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                    <li>
                        <img src="/images/class_.jpg"> <!-- random image -->
                        {{-- <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                    <li>
                        <img src="/images/labs_.jpg"> <!-- random image -->
                        {{-- <div class="caption center-align">
                            <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                    <li>
                        <img src="/images/chem-lab-1.jpg"> <!-- random image -->
                        {{-- <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                    <li>
                        <img src="/images/phy-lab-1.jpg"> <!-- random image -->
                        {{-- <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                    <li>
                        <img src="/images/empty_class.jpg"> <!-- random image -->
                        {{-- <div class="caption right-align">
                            <h3>Right Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                    <li>
                        <img src="/images/hostel.jpg"> <!-- random image -->
                        {{-- <div class="caption left-align">
                            <h3>Left Aligned Caption</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                        </div> --}}
                    </li>
                </ul>
            </div>

            <div id="classroom" class="section scrollspy no-padding">
                <div class="row pink darken-4 no-padding" style="margin: 10px 0px; color:white;">
                    <div class="col s12 m6 l6" style="padding: 0% !important; height:400px;">
                        <div class="carousel carousel-slider">
                            <a class="carousel-item" href="#one!"><img style="height:400px; object-fit:cover; width:100%;" src="/images/class_.jpg"></a>
                            <a class="carousel-item" href="#two!"><img style="height:400px; object-fit:cover; width:100%;" src="/images/class_.jpg"></a>
                            <a class="carousel-item" href="#three!"><img style="height:400px; object-fit:cover; width:100%;" src="/images/class_.jpg"></a>
                            <a class="carousel-item" href="#four!"><img style="height:400px; object-fit:cover; width:100%;" src="/images/class_.jpg"></a>
                          </div>
                                
                        
                        {{-- <img src="/images/class_.jpg"  alt=""> --}}
                    </div>
                    <div class="col s12 m6 l6" style="padding:30px;">
                        <h4 style="font-family: 'Bebas Neue', cursive;">The Classrooms</h4>
                        <p style="text-align:justify;">We have classrooms at par with modern design standards. Classrooms are equipped with all modern teaching aids.</p>
                    </div>
                </div>
            </div>

            <div id="labs" style="height:500px;" class="section scrollspy no-padding">
                <div class="row" style="margin:0% !important; position:relative;">
                    <img src="/images/labs_.jpg" style="height:500px; object-fit:cover; width:100%;" alt="">
                    <div class="hide-on-med-and-down"
                        style="position:absolute; right:5%; left:50%; top:5%; padding:30px; background-color:rgba(255, 255, 255, 0.9)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Labs</h4>
                        <p style="text-align:justify;">Practical knowledge is a vital component of technical education. Arts, Science and Humanities has separate laboratories for all subjects in Science and professional courses. Laboratories are well equipped and regularly updated and upgraded.</p>
                    </div>
                    <div class="hide-on-large-only"
                        style="position:absolute; left:2%; right:2%; bottom:2%; padding:10px; background-color:rgba(255, 255, 255, 0.9)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Labs</h4>
                        <p style="text-align:justify;">Practical knowledge is a vital component of technical education. Arts, Science and Humanities has separate laboratories for all subjects in Science and professional courses. Laboratories are well equipped and regularly updated and upgraded.</p>
                    </div>
                </div>
            </div>

            <div id="library" style="height:500px; margin-top:40px;" class="section scrollspy no-padding">
                <div class="row" style="margin:0% !important; position:relative;">
                    <div class="hide-on-med-and-down"
                        style="position:absolute; right:50%; left:5%; top:5%; color:white; padding:30px; background-color:rgba(0, 0, 0, 0.7)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Library</h4>
                        <p style="text-align:justify;">We have a modern library with digital facilities and round the clock internet connection for the students. The students can issue the books and can study inside the library.</p>
                    </div>
                    <div class="hide-on-large-only"
                        style="position:absolute; left:2%; right:2%; bottom:2%; color:white; padding:10px; background-color:rgba(0, 0, 0, 0.7)">
                        <h4 style="font-family: 'Bebas Neue', cursive;">Library</h4>
                        <p style="text-align:justify;">We have a modern library with digital facilities and round the clock internet connection for the students. The students can issue the books and can study inside the library.</p>
                    </div>
                    <img src="/images/library_.jpg" style="height:500px; object-fit:cover; width:100%;" alt="">
                </div>
            </div>

            <div id="hostel" style="margin-top:40px;" class="section scrollspy no-padding">
                <img src="/images/hostel.jpg" style="height:500px; width:100%; object-fit:cover;" alt="">
                <div class="blue white-text darken-1" style="padding:20px;">
                    <h4 style="font-family: 'Bebas Neue', cursive;">The Hostel</h4>
                <span>Fully secured and modern residential facilities for outside students. Completely separate secured residential facilities for both girls and boys.</span>
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
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
    });
    
    
    $(window).scroll(function(e){ 
        var el = $('.fixed-scrollspy'); 
        // var pos = el.offset();
        // var isPositionFixed = ($el.css('position') == 'fixed');
        if ($(this).scrollTop() > 400){ 
            el.css({'position': 'fixed', 'top':'200px'}); 
        } else {
            el.css({'position': 'static'});
        }
    });
</script>
@endsection