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
        z-index: -1;
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
</style>
<main>
    <div class="side-div">
        <div class="card" style="padding:20px; margin:20px;">
            <div style="display:block;">
                <img src="/storage/uploads/{{Auth::user()->photo_url}}" class="circle responsive-img" style="margin:auto; height:100px; width:100%;" alt="">
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
    </div>
    <div class="main-div">
        <div style="height:500px;">
            <div class="blue accent-3" style="width:100%; height:64px;">
                <span style="font-size:1.5rem; line-height:64px; margin-left:20px;" class="white-text">Application
                    Requests</span>
                <div class="right valign-wrapper" style="height:64px;">
                    <form>
                        <input class="black-text" onblur="revertBg(this)" onclick="changeBg(this)"
                            onkeyup="showTable(this.value)" id="search" type="text" name="search"
                            style="font-family:Arial, Helvetica, sans-serif; margin: 2px 10px 0px 0px; border-radius:20px; padding: 0px 20px; height:40px; width:300px; border:2px solid white;">
                    </form>
                </div>
            </div>
            <div id="vanishing-table">

            </div>
            <div>

            </div>
        </div>
        <div style="height:500px;">
            <table>
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
                    @if ($app_request->request_status == "processing")
                    <td class="orange darken-2 white-text">{{$app_request->request_status}}</td>
                    @endif
                    @if ($app_request->request_status == "accepted")
                    <td class="light-green accent-3 black-text">{{$app_request->request_status}}</td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>
        <div style="background-color:#bbbbbb; height:500px;">

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

    function changeBg(el){
        el.style.backgroundColor = "#FFFFFF";
    }

    function revertBg(el){
        el.style.backgroundColor = "#2979ff";
    }
</script>
@endsection