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
        padding-top: 100px;
    }

    @media only screen and (max-width: 600px) {
        .x-card {
            margin: 0px 10px !important;
        }
    }

    .text-div {
        padding: 10px 20px !important;
    }

    .mb {
        margin-bottom: 10px;
    }
</style>
<main>
    <img src="/images/cover.jpg"
        style="position:fixed; top:0px; left:0px; object-fit:cover; z-index:-1; height:100%; filter:blur(20px); width:100%;"
        alt="">
    <div class="row">
        <div class="col s12 l4 m6 offset-l4 offset-m3">
            <div class="card x-card" style="max-width:400px; display:block; margin:auto;" >
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab tabs-fixed-width col s3" style="width:50%;"><a class="active"
                                    href="#login">Login</a></li>
                            <li class="tab tabs-fixed-width col s3" style="width:50%;"><a href="#register">Register</a>
                            </li>
                        </ul>
                    </div>
                    <div id="login" class="col s12">
                        <form action="/" method="post">
                            <div style="align-content:center; margin: 40px 0px;">
                                <img style="width:100px; display:block; margin:auto; height:100px;"
                                    src="images/user.svg" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s12 text-div">
                                <div class="input-field col s12 mb">
                                    <input id="email_for_login" type="email" class="validate">
                                    <label for="email_for_login">Email</label>
                                </div>
                                <div class="input-field col s12 mb">
                                    <input id="password_for_login" name="password_login" type="password" class="validate">
                                    <label for="password_for_login">Password</label>
                                </div>
                                <button style="margin:20px 10px;" class="btn pink darken-4 waves-effect waves-light" type="submit"
                                    name="action">Sign in
                                    <i class="material-icons right">done</i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="register" class="col s12">
                        <form action="/" method="post">
                            <div style="align-content:center; margin: 40px 0px;">
                                <img style="width:100px; display:block; margin:auto; height:100px;"
                                    src="images/user.svg" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s12 text-div">
                                <div class="input-field col s12 mb">
                                    <input id="fullname_for_register" name="full_name_register" type="text" class="validate">
                                    <label for="fullname_for_register">Full Name</label>
                                </div>
                                <div class="input-field col s12 mb">
                                    <input id="email_for_register" name="email_register" type="email" class="validate">
                                    <label for="email_for_register">Email</label>
                                </div>
                                <div class="input-field col s12 mb">
                                    <input id="password_for_register" type="password" name="password_register" class="validate">
                                    <label for="password_for_register">Password</label>
                                </div>
                                <div class="input-field col s12 mb">
                                    <input id="confirm_password_for_login" name="confirm_password_login" type="password" class="validate">
                                    <label for="confirm_password_for_login">Confirm Password</label>
                                </div>
                                <button style="margin:20px 10px;" class="btn pink darken-4 waves-effect waves-light" type="submit"
                                    name="action">Sign in
                                    <i class="material-icons right">done</i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('.tabs').tabs();
    });
</script>
@endsection