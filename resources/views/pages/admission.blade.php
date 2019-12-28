@extends('layouts.app')

@section('content')
<style>
</style>
<div id="form-card-background"></div>
<main>
    <div class="container">
        <div class="row" style="margin-top:170px;">
            <div class="card">
                <div class="card-content">
                    <span class="card-title" style="margin-left:10px;">Application Form</span>
                    <p style="margin:0px 0px 50px 10px;">This is the application form for class XI. Students from class X can apply here.</p>
                    <div class="row">
                        <form class="col s12">
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="first_name" type="text" class="validate">
                              <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                              <input id="last_name" type="text" class="validate">
                              <label for="last_name">Last Name</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s6">
                              <input id="fathers_name" type="text" class="validate">
                              <label for="fathers_name">Father's Name</label>
                            </div>
                            <div class="input-field col s6">
                              <input id="mothers_name" type="text" class="validate">
                              <label for="mothers_name">Mother's Name</label>
                            </div>
                          </div>
                          <div class="input-field col s12 m6 l6" style="margin-left:-10px; margin-right:40px;">
                            <select>
                              <option value="" disabled selected>Choose a stream ...</option>
                              <option value="1">Arts</option>
                              <option value="2">Commerce</option>
                              <option value="3">Science</option>
                            </select>
                            <label>Stream</label>
                          </div>
                          <div class="input-field col s12 m6 l6" style="margin-left:-10px; margin-right:40px;">
                            <select>
                              <option value="" disabled selected>Choose your gender ...</option>
                              <option value="1">Male</option>
                              <option value="2">Female</option>
                              <option value="3">Other</option>
                            </select>
                            <label>Gender</label>
                          </div>
                          <div class="col s12 m6 l6" style="margin-left:-10px; margin-bottom:20px;">
                            <label for="datep">Date Of Birth</label>
                            <input type="text" id="datep" class="datepicker">
                          </div>
                          <div class="row">
                            <div class="input-field col s6 m12 l12">
                              <input id="last_school_name" type="text" class="validate">
                              <label for="last_school_name">Name of the last school</label>
                            </div>
                          </div>
                          {{-- <div class="row">
                            <div class="input-field col s12">
                              <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                              <label for="disabled">Disabled</label>
                            </div>
                          </div> --}}
                          {{-- <div class="row">
                            <div class="input-field col s12">
                              <input id="password" type="password" class="validate">
                              <label for="password">Password</label>
                            </div>
                          </div> --}}
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="email" type="email" class="validate">
                              <label for="email">Email</label>
                            </div>
                          </div>
                          <div class="file-field input-field">
                            <div class="btn">
                              <span>Your photo</span>
                              <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text">
                            </div>
                          </div>
                          <div class="file-field input-field">
                            <div class="btn">
                              <span>Admit Card</span>
                              <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text">
                            </div>
                          </div>
                          <div class="file-field input-field">
                            <div class="btn">
                              <span>Marksheet</span>
                              <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                              <input class="file-path validate" type="text">
                            </div>
                          </div>
                          <p>
                            <label>
                              <input type="checkbox" class="filled-in" checked="checked" />
                              <span>By clicking here you accept the <b class="blue-text">Declaration by the Applicant</b>.</span>
                            </label>
                            <a href="/">Read More</a>
                          </p>
                          <p>
                            <label>
                              <input type="checkbox" class="filled-in" checked="checked" />
                              <span>By clicking here you accept the <b class="blue-text">Declaration by the Parents/Guardian</b>.</span>
                            </label>
                            <a href="/">Read More</a>
                          </p>

                          {{-- <div class="row">
                            <div class="col s12">
                              This is an inline input field:
                              <div class="input-field inline">
                                <input id="email_inline" type="email" class="validate">
                                <label for="email_inline">Email</label>
                                <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                              </div>
                            </div>
                          </div> --}}
                          <a href="" class="white-text waves-effect waves-default pink btn no-padding" style="width:100%; height:56px; line-height:56px; font-family: 'Montserrat', sans-serif; margin-top:30px;">Submit</a>
                        </form>
                      </div>
                    {{-- <div class="row" style="margin-top:100px;">
                        <div class="col s12 m12 l12">
                           {!! Form::open(['url' => '/', 'method' => 'post', 'files' => 'true'])!!}
                                {{Form::token()}}
                                <div class="col s12 m6 l6 input-field">
                                    {{Form::label('firstname', 'First Name', ['class' => 'username validate'])}}
                                    {{Form::text('firstname')}}
                                </div>
                                <div class="col s12 m6 l6 input-field">
                                    {{Form::label('lastname', 'Last Name', ['class' => 'username validate'])}}
                                    {{Form::text('lastname')}}
                                </div>
                                <div class="col s12 m6 l6">
                                    {{Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...'])}}
                                </div>
                                {{Form::submit('Submit', ['class' => 'btn blue'])}}
                           {!! Form::close() !!}
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="card-action center-align no-padding">
                    
                </div> --}}
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });

    document.addEventListener('DOMContentLoaded', function() {
        var d = new Date(1990, 0, 1);
        var minD = new Date(1985, 0, 1);
        var maxD = new Date();
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, {
            defaultDate: d,
            minDate: minD,
            maxDate: maxD
        });
    });
</script>
@endsection
