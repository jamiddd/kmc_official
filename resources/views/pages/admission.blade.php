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
                    <span class="card-title">Application Form</span>
                    <p>This is the application form for class XI. Students from class X can apply here.</p>
                    <div class="row" style="margin-top:100px;">
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
                    </div>
                </div>
                <div class="card-action">
                    <a href="">Submit</a>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
@endsection
