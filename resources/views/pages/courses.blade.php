@extends('layouts.app')

@section('content')
<style>
    p {
        font-weight: bold;
    }
</style>
<div id="form-card-background"></div>
<main>
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="card white z-depth-5">
                <div class="card-content" style="padding:0px !important;">
                    <div class="course-header purple darken-4" style="padding:20px;">
                        <span class="white-text"
                            style="font-size:3rem; line-height:3.4rem; font-family:'Bebas Neue', cursive;">Science</span>
                    </div>
                    <div class="card-image">
                        <img src="images/science_.jpg" style="height:400px; object-fit:cover;">
                        {{-- <span class="card-title">Junamoni Barman</span> --}}
                    </div>
                    <div style="padding:20px;">
                        <h3 style="font-family:'Bebas Neue', cursive;">Core Subjects:</h3>
                        <ul>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="purple darken-4 white-text">English</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="purple darken-4 white-text">Alternative Enlgish/MIL (Assamese)</li>
                        </ul>
                        <h3 style="font-family:'Bebas Neue', cursive;">Other Subjects:</h3>
                        <ul>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Physics</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Chemsitry</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Mathematics</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Biology</li>
                        </ul>
                        <div class="row">
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/bio-teacher.jpg">
                                        <span class="card-title">Deepshikha Bezbaruah</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Biology</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/phy-teacher.jpg">
                                        <span class="card-title">Sangita Medhi</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Physics</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/math-teacher.jpg">
                                        <span class="card-title">Antara Bhattacharya</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Mathematics</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/eng-1-teacher.jpg">
                                        <span class="card-title">Birju Paswan</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: English</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">

                </div>
            </div>
            <div class="card white z-depth-5">
                <div class="card-content" style="padding:0px !important">
                    <div class="course-header blue" style="padding:20px;">
                        <span class="white-text"
                            style="font-size:3rem; line-height:3.4rem; font-family:'Bebas Neue', cursive;">Arts</span>
                    </div>
                    <div class="card-image">
                        <img src="images/history_.jpg" style="height:400px; object-fit:cover;">
                        {{-- <span class="card-title">Junamoni Barman</span> --}}
                    </div>
                    <div style="padding:20px;">
                        <h3 style="font-family:'Bebas Neue', cursive;">Core Subjects:</h3>
                        <ul>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="blue white-text">English</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="blue white-text">Alternative Enlgish/MIL (Assamese)</li>
                        </ul>
                        <h3 style="font-family:'Bebas Neue', cursive;">Other Subjects:</h3>
                        <ul>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Economics</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Political Science</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Education</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Logic and Philosophy</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Geography</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Mathematics</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Anthropology</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Advance Assamese</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">History</li>
                        </ul>
                        <div class="row">
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/eco-teacher.jpg">
                                        <span class="card-title">Himakshi Kalita</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Economics</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/geo-teacher.jpg">
                                        <span class="card-title">Jumi Kuor</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Geography</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/pol-teacher.jpg">
                                        <span class="card-title">Sewali Keleng</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Political Science</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/edu-teacher.jpg">
                                        <span class="card-title">Anul Boro</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Education</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/ass-teacher.jpg">
                                        <span class="card-title">Shivani Chakraborty</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Assamese</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/hin-teacher.jpg">
                                        <span class="card-title">Junamoni Barman</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Hindi</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">

                </div>
            </div>
            <div class="card white z-depth-5">
                <div class="card-content" style="padding:0px !important">
                    <div class="course-header green darken-4" style="padding:20px;">
                        <span class="white-text"
                            style="font-size:3rem; line-height:3.4rem; font-family:'Bebas Neue', cursive;">Commerce</span>
                    </div>
                    <div class="card-image">
                        <img src="images/acc_.jpg" style="height:400px; object-fit:cover;">
                        {{-- <span class="card-title">Junamoni Barman</span> --}}
                    </div>
                    <div style="padding:20px;">
                        <h3 style="font-family:'Bebas Neue', cursive;">Core Subjects:</h3>
                        <ul>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="green darken-4 white-text">English</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="green darken-4 white-text">Alternative Enlgish/MIL (Assamese)</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="green darken-4 white-text">Business Studies</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="green darken-4 white-text">Accountancy</li>
                        </ul>
                        <h3 style="font-family:'Bebas Neue', cursive;">Other Subjects:</h3>
                        <ul>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Economics</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Mathematics</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Banking</li>
                            <li style="display:inline-block; margin:10px 10px 10px 0px; font-size:1.5rem; line-height:2rem; padding: 6px 14px;"
                                class="pink accent-3 white-text">Commercial Arithmetic & Elements of statistics</li>
                        </ul>
                        <div class="row">
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/eco-teacher.jpg">
                                        <span class="card-title">Jumi Kuor</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Economics</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/acc-teacher.jpg">
                                        <span class="card-title">Junali Rajbongshi</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Accountancy</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/math-teacher.jpg">
                                        <span class="card-title">Antara Bhattacharya</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: Mathematics</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col s12 l4 m4">
                                <div class="card hoverable">
                                    <div class="card-image">
                                        <img src="images/eng-2-teacher.jpg">
                                        <span class="card-title">Rashmita Deka</span>
                                    </div>
                                    <div class="card-content">
                                        <p>Subject: English</p>
                                    </div>
                                    {{-- <div class="card-action">
                                        <a href="#">This is a link</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">

                </div>
            </div>
        </div>
    </div>
</main>
@endsection