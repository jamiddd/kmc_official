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

    .sticky-news {
        visibility: hidden;
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
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div style="align-content:center; margin: 40px 0px;">
                                <img style="width:100px; display:block; margin:auto; height:100px;"
                                    src="images/user.svg" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s12 text-div">
                                <div class="input-field col s12 mb">
                                    {{-- <input id="email_for_login" type="email" class="validate" required> --}}
                                    <input id="email_for_login" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <label for="email_for_login">Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="red-text">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- <span class="helper-text" data-error="wrong" data-success="right">Helper text</span> --}}
                                </div>
                                <div class="input-field col s12 mb">
                                    {{-- <input id="password_for_login" name="password_login" type="password" class="validate" required> --}}
                                    <input id="password_for_login" type="password" class="validate @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="password_for_login">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="red-text">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- <span class="helper-text" data-error="wrong" data-success="right">Helper text</span> --}}
                                </div>
                                <button style="margin-top:40px; margin-bottom:40px; font-family: 'Montserrat', sans-serif; width:100%; height:56px;" class="btn blue darken-1 waves-effect waves-light" type="submit"
                                    name="action">Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="register" class="col s12">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div style="align-content:center; margin: 40px 0px;">
                                <img style="width:100px; display:block; margin:auto; height:100px;"
                                    src="images/user.svg" alt="" class="circle responsive-img">
                            </div>
                            <div class="col s12 text-div">
                                <div class="input-field col s12 mb">
                                    {{-- <input id="fullname_for_register" name="name" type="text" class="validate" required> --}}
                                    <input id="fullname_for_register" type="text" class="validate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    <label for="fullname_for_register">Full Name</label>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="red-text">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-field col s12 mb">
                                    {{-- <input id="email_for_register" name="email" type="email" class="validate" required> --}}
                                    <input id="email_for_register" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label for="email_for_register">Email</label>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="red-text">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-field col s12 mb">
                                    {{-- <input id="password_for_register" type="password" name="password" class="validate" required> --}}
                                    <input id="password_for_register" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    <label for="password_for_register">Password</label>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="red-text">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-field col s12 mb">
                                    {{-- <input id="confirm_password_for_login" name="confirm_password" type="password" class="validate" required> --}}
                                    <input id="password-confirm" type="password" class="validate" name="password_confirmation" required autocomplete="new-password">
                                    <label for="password-confirm">Confirm Password</label>
                                </div>
                                <button style="margin:20px 0px; font-family: 'Montserrat', sans-serif; width:100%; height:56px;" class="btn blue darken-1 waves-effect waves-light" type="submit"
                                    name="action">Register
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