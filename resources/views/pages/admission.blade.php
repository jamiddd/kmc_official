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
                           {!! Form::open(['url' => '/', 'mehtod' => 'post', 'files' => 'true'])!!}
                                {{Form::token()}}
                                {{Form::label('username', 'Username', ['class' => 'username'])}}
                                {{Form::text('username')}}
                                {{Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...'])}}
                                {{Form::submit('Submit', ['class' => 'btn blue'])}}
                           {{-- Attaching the CSRF token in route mehtod --}}
                           {{--
                                Route::post('profile',
                                    [
                                        'before' => 'csrf',
                                        function()
                                        {
                                            //
                                        }
                                    ]
                                );
                            --}}
                           {{-- Can pass controller mehtod as URL also. such as Controller@method --}}


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
