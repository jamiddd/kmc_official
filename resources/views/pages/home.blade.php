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
        padding-top: 64px;
    }

    .side-div {
        min-height: 100vh;
        position: fixed;
        z-index: 1;
        width: 400px;
        background-color: #f1f1f1;
    }

    footer {
        margin-left: 400px;
    }

    .main-div {
        margin-left: 400px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:hover {
        background-color: #cccccc !important;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }

    .sticky-news {
        visibility: hidden;
    }

    .tab1:hover {
        cursor: pointer;
    }
</style>
<main>
    <div id="s-div" class="side-div">
        <div class="card" style="padding:20px; margin:20px;">
            <div style="display:block;">
                <img src="../images/user.svg" class="circle responsive-img"
                    style="margin:auto; height:100px; width:100%;" alt="">
            </div>
            <div style="display:block;">
                <span
                    style="display:block; width:100%; text-align:center; font-size:1.5rem;">{{Auth::user()->name}}</span>
                <span
                    style="display:block; width:100%; color:#555555; text-align:center; font-size:1rem;">{{Auth::user()->email}}</span>

                @if (Auth::user()->user_type == "admin")
                <div style="display:block;" class="row">
                    <div class="chip blue white-text col offset-l5">
                        Admin
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div style="margin: 20px 20px 0px 20px;">
            <div id="tab1" class="card waves-effect"
                style="display:block; width:100%; height:56px; margin:0px !important; cursor:pointer;">
                <span style="height:100%; padding-left:20px; line-height:56px; text-align:center;">Application Requests
                    1</span>
                <div class="right" style="height:56px;">
                    <i class="material-icons" style="line-height:56px; padding-right:16px;">arrow_forward</i>
                </div>
            </div>
        </div>
        <div style="margin: 0px 20px 0px 20px;">
            <div id="tab2" class="card waves-effect"
                style="display:block; width:100%; height:56px; margin:0px !important; cursor:pointer;">
                <span style="height:100%; padding-left:20px; line-height:56px; text-align:center;">Application Requests
                    2</span>
                <div class="right" style="height:56px;">
                    <i class="material-icons" style="line-height:56px; padding-right:16px;">arrow_forward</i>
                </div>
            </div>
        </div>
        <div style="margin: 0px 20px 0px 20px;">
            <div id="tab3" class="card waves-effect"
                style="display:block; width:100%; height:56px; margin:0px !important; cursor:pointer;">
                <span style="height:100%; padding-left:20px; line-height:56px; text-align:center;">Create New
                    News</span>
                <div class="right" style="height:56px;">
                    <i class="material-icons" style="line-height:56px; padding-right:16px;">arrow_forward</i>
                </div>
            </div>
        </div>
        <div style="margin: 0px 20px 0px 20px;">
            <div id="tab4" class="card waves-effect"
                style="display:block; width:100%; height:56px; margin:0px !important; cursor:pointer;">
                <span style="height:100%; padding-left:20px; line-height:56px; text-align:center;">Create New
                    Post</span>
                <div class="right" style="height:56px;">
                    <i class="material-icons" style="line-height:56px; padding-right:16px;">arrow_forward</i>
                </div>
            </div>
        </div>
        <div style="margin: 0px 20px 0px 20px;">
            <div id="tab5" class="card waves-effect"
                style="display:block; width:100%; height:56px; margin:0px !important; cursor:pointer;">
                <span style="height:100%; padding-left:20px; line-height:56px; color:red; text-align:center;">Log out</span>
                <div class="right" style="height:56px;">
                    <i class="material-icons" style="line-height:56px; padding-right:16px;">exit_to_app</i>
                </div>
            </div>
        </div>
    </div>
    <div class="main-div">
        <div id="welcome-page" style="min-height: 100vh;">
            <div class="card" style="margin:20px;">
                <div class="card-image">
                    <img src="images/back.jpg" class="responsive-img" style="object-fit:cover; height:400px;">
                    <span class="card-title" style="font-size:3rem;">Hi, {{Auth::user()->name}}</span>
                </div>
                <div class="card-content" style="height:300px;">

                </div>
                {{-- <h3>Hi, {{Auth::user()->name}}</h3>
                Welcome, You're Logged in. --}}
            </div>
        </div>
        <div id="searchable-requests" style="height:500px;">
            <div class="blue accent-3" style="width:100%; height:64px;">
                <span style="font-size:1.5rem; line-height:64px; margin-left:20px;" class="white-text">Application
                    Requests</span>
                <div class="right valign-wrapper" style="height:64px;">
                    <form>
                        <input class="black-text" onblur="revertBg(this)" onclick="changeBg(this)"
                            onkeyup="showTable(this.value)" id="search" type="text" name="search"
                            style="font-family:Arial, Helvetica, sans-serif; margin: 2px 10px 0px 0px; border-radius:20px; padding: 0px 20px; height:40px; width:250px; border:2px solid white;">
                    </form>
                </div>
            </div>
            <div id="vanishing-table">

            </div>
            <div>

            </div>
        </div>
        <div id="non-searchable-requests" style="height:500px;">
            <table class="responsive-table">
                <tr>
                    <th>Name</th>
                    <th>Mark Sheet</th>
                    <th>Admit Card</th>
                    <th>Stream</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Last School</th>
                    <th>Status</th>
                </tr>
                @foreach ($app_requests as $app_request)
                <tr>
                    <td>{{$app_request->fullname}}</td>
                    <td><a href="/storage/uploads/{{$app_request->mark_sheet}}">Mark Sheet</a></td>
                    <td><a href="/storage/uploads/{{$app_request->admit_card}}">Admit Card</a></td>
                    <td>{{$app_request->stream}}</td>
                    <td>{{$app_request->phone_number}}</td>
                    <td>{{$app_request->email}}</td>
                    <td>{{$app_request->gender}}</td>
                    <td>{{$app_request->dob}}</td>
                    <td>{{$app_request->fathers_name}}</td>
                    <td>{{$app_request->mothers_name}}</td>
                    <td>{{$app_request->last_school}}</td>
                    @if ($app_request->request_status == "Processing")
                    <td class="orange darken-2 white-text">{{$app_request->request_status}}</td>
                    @endif
                    @if ($app_request->request_status == "Accepted")
                    <td class="light-green accent-3 black-text">{{$app_request->request_status}}</td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>
        <div id="message-compose" style="background-color:white; height:500px;">
            <div class="purple darken-4 white-text" style="display:block; height:64px;">
                <span style="font-size:1.4rem; line-height:64px; padding-left:20px;">Compose A News</span>
                <div style="padding:30px;">
                    <form action="{{ route('news_posts.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-field col s6">
                            <input placeholder="Title of the News" id="news_title" name="title" type="text"
                                class="validate" required>
                            <label for="news_title">News Title</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea placeholder="Write something here ..." id="news-content" name="content"
                                data-length="1000" class="materialize-textarea" required></textarea>
                            <label for="news-content">Content</label>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn purple darken-4 waves-effect">
                                <span>Upload cover</span>
                                <input type="file" name="cover_photo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <button id="news-submit" class="btn purple darken-4 large waves-effect waves-light"
                            onclick="this.preventDefault()" type="submit" style="height:48px;" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    var q = "all";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('vanishing-table').innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "/getdata/"+q, true);
    xmlhttp.send();

    $(document).ready(function() {
        $('input#input_text, textarea#textarea1').characterCounter();
        $('#searchable-requests').css('display', 'none').animate(500);
        $('#message-compose').css('display', 'none').animate(500);
        $('#non-searchable-requests').css('display', 'none').animate(500);
    });

    

    $('#tab1').click(function(){
        // $('#s-div').addClass("blue").removeClass("purple");
        $('#welcome-page').css('display', 'none').animate(500);
        $('#searchable-requests').css('display', 'block').animate(500);
        $('#message-compose').css('display', 'none').animate(500);
        $('#non-searchable-requests').css('display', 'none').animate(500);
    })

    $('#tab2').click(function(){
        $('#welcome-page').css('display', 'none').animate(500);
        $('#non-searchable-requests').css('display', 'block').animate(500);
        $('#message-compose').css('display', 'none').animate(500);
        $('#searchable-requests').css('display', 'none').animate(500);
    })

    $('#tab3').click(function(){
        // $('#s-div').addClass("purple").removeClass("blue");
        $('#welcome-page').css('display', 'none').animate(500);
        $('#non-searchable-requests').css('display', 'none').animate(500);
        $('#message-compose').css('display', 'block').animate(500);
        $('#searchable-requests').css('display', 'none').animate(500);
    })


    function showTable(title){
        var x = title;
        if (title.length == 0) {
            var x = "all";
        }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('vanishing-table').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "/getdata/"+x, true);
        xmlhttp.send();
    }

    function showSuccess(){
        // var x = title;
        // if (title.length == 0) {
            // var x = "all";
        // }
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById('vanishing-table').innerHTML = this.responseText;
                M.toast({html: 'I am a toast!'})
            }
        };
        xmlhttp.open("POST", "/news_post/store"+x, true);
        xmlhttp.send();
    }

    function changeBg(el){
        el.style.borderBottomLeftRadius = "0px";
        el.style.borderBottomRightRadius = "0px";
        el.style.borderBottom = "4px solid white";
        el.style.backgroundColor = "#FFFFFF";
    }

    function revertBg(el){
        el.style.borderBottomLeftRadius = "20px";
        el.style.borderBottomRightRadius = "20px";
        el.style.borderBottom = "2px solid white";
        el.style.backgroundColor = "#2979ff";
    }

    
</script>
@endsection