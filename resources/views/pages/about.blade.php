@extends('layouts.app')

@section('content')
<main>
    <div id="introduction-about" style="height:700px; position:relative;" class="section scrollspy no-padding">
        <img src="/images/about-cover.jpg" style="object-fit:cover; height:700px; width:100%;" alt="">
        <div class="row" style="height:700px; width:100%; position:absolute; top:0%; left:0%;">
            <div class="col s12 l8 m12 offset-l2" style="position:absolute; bottom:0%;">
                <span class="hide-on-small-only"
                    style="font-size:7vw; margin:0%; padding:0%; line-height:6vw; color:white; font-family: 'Bebas Neue', cursive;">About Us</span>
                <span class="hide-on-med-and-up"
                    style="font-size:12vh; margin:0%; padding:0%; line-height:11vh; color:white; font-family: 'Bebas Neue', cursive;">About
                    Us</span>
            </div>
        </div>
    </div>
    {{-- <div class="about-header row">
        <div class="header-img-container col s12 m12 l12"> 
            <img class="header-img" src="images/IMG_5012.JPG">    
        </div>
        <div class="header-container col s12 m10 offset-m1 l10 offset-l1">
            <h1 class="heading-about white-text">About Us</h1>
        </div>
    </div> --}}
    <div class="about-the-college container">
    	<div class="row">
    		<div class="col s12 m12 l12 logo-container">
    			<img class="college-logo-about" src="images/logo.svg">
    		</div>
    		<div class="about-the-college-content">
    			<p class="about-the-college-text">Kamrup Metropolitan College is a very new College situated in the suburban
                area of Guwahati city. Its just 20kms from the Guwahati city. The colleges
                started with Higher Secondary classes 10+2 in Arts and Sciences in the year
                2018. This year the college is planning to start 10+2 in commerce along with
                undergraduate courses in Arts and Commerce and add on courses like UG and PG diploma in selected
                professional subjects. The college is determined to provide basic educational skills to prepare students
                to face all hurdles in their career avenues. The system of education in the insitute is designed to help
                students to achieve educational and career goals and develop skills necessary to achieve intellectual
                and personality development. The institute will provide appropriate academic environment and services
                that supplements support towards better teaching learning. The present thrust of the institution is to
                impart qualitative, performance oriented knowledge and training to the students by optimal management of
                time and energy with the help of qualified and experienced faculties. The main objective of the
                institute is to enable the students to achieve high performance in the course examination and in various
                competitive and entrance tests of the state as well as of the country, such as, IIT-JEE Main, Advance,
                NEET, Civil Service Examination and so on. We are providing appropriate personal attention to all our
                students. We are providing them a homely atmosphere outside their homes. We are providing hundred
                percent student freindly education and personality development counseling.</p>
            </div>
            
            <div class="about-the-princi purple lighten-5 row">
                <div class="sponsor-text-container col s12 m8 l8">
    				<h3 class="sponsor-name color-x-text text-dark">MD Abdul Hassen</h3>
    				<h5 class="color-x-text text-dark">(The Principal)</h5>
    				<p class="sponsor-about color-x-text text-dark">
    					"I believe that everyone deserves education in some way or the other. It's a matter of interest, that decides how far can you go with that energy. God provided us with a brain capable of doing miraculous things. If only we could tap into the true power of our brain, we will discover what is called Nirvana."
    				</p>
    			</div>
                <div class="sponsor-img-container col s12 m4 l4">
    				<img class="sponsor-img" src="images/princi.jpg">
    			</div>
    		</div>

    		<div class="about-the-sponsor row pink lighten-5">
    			<div class="sponsor-img-container col s12 m4 l4">
    				<img class="sponsor-img" src="images/sponsor.jpg">
    			</div>
    			<div class="sponsor-text-container col s12 m8 l8">
    				<h3 class="sponsor-name color-x-text text-dark">Biren Deka</h3>
    				<h5 class="color-x-text text-dark">(The Sponsor)</h5>
    				<p class="sponsor-about color-x-text text-dark">
    					Education & Research Foundation, Assam (ERFA) is an educational Trust
                        developed with
                        objectives to promote educational institutions in different disciplines and aspects, including
                        professional education and education in sports and performing arts and culture. The foundation
                        is formed
                        by eminent educationists and leading educational entrepreneur of the state. The foundation has
                        started
                        its first institution - Kamrup Metropolitan College.
    				</p>
    			</div>
    		</div>

    		<div class="mission-and-vision row blue lighten-5">
    			{{-- <div class="mission-and-vision-img-container col s12 m4 l4">
    				<img class="mission-and-vision-img" src="images/vision.jpg">
    			</div> --}}
    			<div class="mission-and-vision-text-container col s12 m12 l12">
    				<h3 class="mission-and-vision-header">Mission and Vision</h3>
    				<p class="mission-and-vision-text">
    					 At KMC our mission is always the welfare of our students. To make them better people and rise above
                    all in the society. To give them the education they always deserved. We believe that education can
                    change everything. Through proper guidance, we hope to create a better future for the children and
                    the next generation. To create an excellent center of Education and Training in Arts, Science, Commerce and various
                    important professional cources of class one standard with a view to equip the students to build
                    confidence and to realize their valued dreams transgressing the barriers in their path.
    				</p>
    			</div>
            </div>
            
            <div class="faculty row" style="height:700px;">
                <img src="/images/faculty.jpg" style="object-fit:cover; height:500px; width:100%;" alt="">
                <div>
                    <h5 style="font-family: 'Bebas Neue', cursive;">The Faculty</h5>
                    <p>Hi, Students! We cannot wait for you to enjoy the best learning adventures that we have set up for you, here at KMC. We do hope that, you chose to follow your dreams along with us. Together, we can endavour through the journey of life. </p>
                </div>
            </div>
    	</div>
    </div>
</main>
@endsection