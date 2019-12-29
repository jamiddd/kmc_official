@extends('layouts.app')

@section('content')
<main>
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
                    <a class="white-text header-navigation-button-small hide-on-med-and-up" href="#">COURSES</a>
                    <a class="white-text header-navigation-button-med hide-on-small-only hide-on-large-only"
                        href="#">COURSES</a>
                    <a class="white-text header-navigation-button-large hide-on-med-and-down" href="#">COURSES</a>
                </div>
                <div class="col s12 m12 l4 header-navigation-button-container">
                    <a class="white-text header-navigation-button-small hide-on-med-and-up" href="/application_requests/create">APPLY NOW</a>
                    <a class="white-text header-navigation-button-med hide-on-small-only hide-on-large-only"
                        href="/application_requests/create">APPLY NOW</a>
                    <a class="white-text header-navigation-button-large hide-on-med-and-down" href="/application_requests/create">APPLY NOW</a>
                </div>
                <div class="col s12 m12 l4 header-navigation-button-container">
                    <a class="white-text header-navigation-button-small hide-on-med-and-up" href="#">GET STARTED</a>
                    <a class="white-text header-navigation-button-med hide-on-small-only hide-on-large-only"
                        href="#">GET STARTED</a>
                    <a class="white-text header-navigation-button-large hide-on-med-and-down" href="#">GET STARTED</a>
                </div>
            </div>
        </div>
    </div>
    <div class="last-event row" id="lastEventSection">
        <div class="col s12 m10 offset-m1 l5 offset-l1 last-event-first">
            <div class="last-event-first-container" class="row">
                <div class="last-event-first-image-container col s12 m4 l4">
                    <img class="materialboxed hoverable last-event-first-image" src="images/b.jpg">
                </div>
                <div class="last-event-first-content-container col s12 m8 l8">
                    <h3 class="last-event-first-heading">INDEPENDENCE DAY AT A GLANCE</h3>
                    <p class="last-event-first-content"> Kamrup Metropolitan College is a very new College
                        situated in the suburban
                        area of Guwahati city. Its just 20kms from the Guwahati city. The colleges
                        started with Higher Secondary classes 10+2 in Arts and Sciences in the year
                        2018. This year the college is planning to start 10+2 in commerce alongwith
                        undergraduate courses in Arts and Commerce and add on courses like UG and PG diploma in selected
                        professional subjects.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m10 offset-m1 l5 last-event-second">
            <div class="last-event-second-container" class="row">
                <div class="last-event-second-image-container col s12 m4 l4">
                    <img class="materialboxed hoverable last-event-second-image" src="images/cc.jpg">
                </div>
                <div class="last-event-second-content-container col s12 m8 l8">
                    <h3 class="last-event-second-heading">DIWALI AT KMC</h3>
                    <p class="last-event-second-content"> Kamrup Metropolitan College is a very new College
                        situated in the suburban
                        area of Guwahati city. Its just 20kms from the Guwahati city. The colleges
                        started with Higher Secondary classes 10+2 in Arts and Sciences in the year
                        2018. This year the college is planning to start 10+2 in commerce alongwith
                        undergraduate courses in Arts and Commerce and add on courses like UG and PG diploma in selected
                        professional subjects.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="aboutSection" class="about-section row">
        <div class="col s12 m10 offset-m1 l10 offset-l1">
            <div class="row">
                <div class="logo-container col s12 m4 l4 valign-wrapper">
                    <img class="college-logo" src="images/logo.svg" alt="">
                </div>
                <div class="kmc-about-container col s12 m8">
                    <h4 class="kmc-heading">About us</h4>
                    <p class="introduction-text">
                        Kamrup Metropolitan College is a very new College situated in the suburban
                        area of Guwahati city. Its just 20kms from the Guwahati city. The colleges
                        started with Higher Secondary classes 10+2 in Arts and Sciences in the year
                        2018. This year the college is planning to start 10+2 in commerce alongwith
                        undergraduate courses in Arts and Commerce and add on courses like UG and PG diploma in selected
                        professional subjects. The college is determined to provide basic educational skills to prepare
                        students to face all hurdles in their career avenues. The system of education in the insitute is designed
                        to help students to achieve educational and career goals and develop skills necessary to achieve
                        intellectual and personality development. The institute will provide appropriate academic environment and
                        services that supplements support towards better teaching learning. The present thrust of the institution
                        is to impart qualitative, performance oriented knowledge and training to the students by optimal
                        management of time and energy with the help of qualified and experienced faculties. The main objective of the
                        institute is to enable the students to achieve high performance in the course examination and in
                        various competitive and entrance tests of the state as well as of the country, such as, IIT-JEE Main,
                        Advance, NEET, Civil Service Examination and so on. We are providing appropriate personal attention to
                        all our students. We are providing them a homely atmosphere outside their homes. We are providing
                        hundred percent student freindly education and personality development counseling.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</main>
<script>
    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
</script>
@endsection