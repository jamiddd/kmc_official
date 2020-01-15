@extends('layouts.app')

@section('content')
<style>
    .collapsible-header:hover {
        background-color: #0d47a1 !important;
        transition: 500ms;
    }
</style>
<main>
    <div class="sticky-news hide-on-small-only" style="z-index:3;" id="news-section">
        <ul class="collapsible z-depth-5" style="border: none;">
            <li>
                <div class="collapsible-header blue accent-3" style="border-bottom: 1px solid white;"><i class="white-text material-icons">whatshot</i><span
                        class="white-text sticky-bold">NEWS</span></div>
                <div class="collapsible-body no-padding" style="overflow:hidden;">
                    <div class="inner-collapsible" style="max-height:300px; width:100%; overflow:auto;">
                        @if (count($news) > 0)
                        @foreach ($news as $newsitem)
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" src="/storage/uploads/{{$newsitem->photo}}"
                                    style="width:150px; height:100%; object-fit:cover">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <span class="card-title">{{$newsitem->title}}</span>
                                    <p>{{$newsitem->content}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="card z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img style="object-fit:cover; height:200px;" src="/images/empty.jpg" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">No news at the moment</span>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </li>
            <li>
                <div class="collapsible-header blue accent-3" style="border: none;"><i class="white-text material-icons">place</i><span
                        class="white-text sticky-bold">UPCOMING EVENTS</span></div>
                <div class="collapsible-body no-padding">
                    <div style="max-height:300px; width:100%; overflow-y: scroll;">
                        <div class="card small z-depth-3" style="margin:8px;">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator lazy" src="/images/welcome.jpg" style="object-fit:cover">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4">Orientation Day 10th April,
                                    2020<i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Welcome Students<i
                                        class="material-icons right">close</i></span>
                                <p>Heartful welcoming event for all the students that will be joining for the session
                                    2020-2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            {{-- <li>
                <div class="collapsible-header blue accent-3"><i class="white-text material-icons">filter_drama</i><span
                        class="white-text sticky-bold">CONTACT</span></div>
                <div class="collapsible-body no-padding">
                    <div style="height:270px; width:100%; overflow-y: scroll;" class="xxx">
                        <div class="card horizontal z-depth-3" style="margin:8px;">
                            <div class="card-image">
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover"
                                    src="../images/christmas.jpg">
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
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover"
                                    src="../images/friends.jpg">
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
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover"
                                    src="../images/dating.jpg">
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
                                <img class="lazy" style="width:150px; height:100%; object-fit:cover"
                                    src="../images/books.jpg">
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
            </li> --}}
        </ul>
    </div>
    <div class="cover-img-container row" id="coverImg">
        <img class="cover-img" src="images/college.jpg">

        <div class="cover-header col s10 offset-s1 m10 offset-m1 l8 offset-l2">
            <div class="hide-on-med-and-up header-text-container">
                <span class="white-text header-text-small">KAMRUP METRO-POLITAN COLLEGE</span>
            </div>
            <div class="hide-on-small-only hide-on-large-only header-text-container">
                <span class="white-text header-text-med">KAMRUP METRO-POLITAN
                    COLLEGE</span>
            </div>
            <div class="hide-on-med-and-down header-text-container">
                <span class="white-text header-text-large">KAMRUP METROPOLITAN COLLEGE</span>
            </div>
            <div class="header-navigation row">
                <div class="col s12 m12 l4 header-navigation-button-container">
                    <a class="white-text header-navigation-button-small hide-on-med-and-up" href="/courses">COURSES</a>
                    <a class="white-text header-navigation-button-med hide-on-small-only hide-on-large-only"
                        href="/courses">COURSES</a>
                    <a class="white-text header-navigation-button-large hide-on-med-and-down"
                        href="/courses">COURSES</a>
                </div>
                <div class="col s12 m12 l4 header-navigation-button-container">
                    <a class="white-text header-navigation-button-small hide-on-med-and-up"
                        href="/application_requests/create">APPLY NOW</a>
                    <a class="white-text header-navigation-button-med hide-on-small-only hide-on-large-only"
                        href="/application_requests/create">APPLY NOW</a>
                    <a class="white-text header-navigation-button-large hide-on-med-and-down"
                        href="/application_requests/create">APPLY NOW</a>
                </div>
                <div class="col s12 m12 l4 header-navigation-button-container">
                    <a class="white-text header-navigation-button-small hide-on-med-and-up" href="#lastEventSection">GET
                        STARTED</a>
                    <a class="white-text header-navigation-button-med hide-on-small-only hide-on-large-only"
                        href="#lastEventSection">GET STARTED</a>
                    <a class="white-text header-navigation-button-large hide-on-med-and-down"
                        href="#lastEventSection">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
    <div class="last-event row" id="lastEventSection">
        <div class="col s12 m10 offset-m1 l4 offset-l2 last-event-first" style="border-right: 2px solid #f1f1f1;">
            <div class="last-event-first-container" class="row">
                <div class="last-event-first-image-container col s12 m5 l5">
                    <img class="materialboxed hoverable last-event-first-image" src="images/b.jpg">
                </div>
                <div class="last-event-first-content-container col s12 m7 l7">
                    <h3 class="last-event-first-heading">INDEPENDENCE DAY AT A GLANCE</h3>
                    <p class="last-event-first-content">At KMC, our whole family becomes one patriotic family to
                        celebrate the auspicious Independence Day. From our heart we believe that the fire of Indian
                        will lies in each one of us. We have to contribute to this beautiful country, as the country has
                        provided us with this amazing and safe life to us.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m10 offset-m1 l4 last-event-second">
            <div class="last-event-second-container" class="row">
                <div class="last-event-second-image-container col s12 m5 l5">
                    <img class="materialboxed hoverable last-event-second-image" src="images/cc.jpg">
                </div>
                <div class="last-event-second-content-container col s12 m7 l7">
                    <h3 class="last-event-second-heading">DIWALI AT KMC</h3>
                    <p class="last-event-second-content">The beautiful KMC building shines brighter than ever in the
                        festival of lights. An event you cannot miss.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="border-top:2px solid #f1f1f1;">
        <div class="col s12 m5 offset-m1 l4 offset-l2" style="padding:20px;">
            <img class="materialboxed" src="/images/fac-header.jpg" style="object-fit:cover; height:400px; width:100%;"
                alt="">
        </div>
        <div class="col s12 m5 l4 hide-on-med-and-down"
            style="height:440px; border-right:2px solid #f1f1f1; border-bottom:2px solid #f1f1f1;">
            <h2 style="font-family: 'Bebas Neue', cursive;">Fun Learning</h2>
            <p>Moden education requires modern attention. We know what you need. The teacher that teach you in a way
                that you understand. We've got it all.</p>
            <a href="/courses" class="btn wave-effect">Learn More</a>
        </div>
        <div class="col s12 m5 l4 hide-on-large-only">
            <h2 style="font-family: 'Bebas Neue', cursive;">Fun Learning</h2>
            <p>Moden education requires modern attention. We know what you need. The teacher that teach you in a way
                that you understand. We've got it all.</p>
            <a href="/courses" class="btn-flat wave-effect">Learn More</a>
        </div>
    </div>
    <div class="row" style="margin:0% !important; height:400px; padding:0% !important; position:relative; ">
        <img src="/images/boys-talking.jpg" style="height:400px; margin:0%; width:100%; object-fit:cover;" alt="">
        <div style="background-color:rgba(0, 0, 0, 0.5); position:absolute; top:0px; left:0px; height:400px; width:100%;"
            class="valign-wrapper">
            <a href="{{route('application_requests.create')}}" class="btn-flat white-text btn-large"
                style="font-family: 'Bebas Neue', cursive; font-size:2rem; display:block; margin:auto; border:1px solid white">Join
                Us Now</a>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
        $('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
    });
</script>
@endsection