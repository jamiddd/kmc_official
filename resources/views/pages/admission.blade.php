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
                            <form action="">
                                <div class="row">
                                    <div class="input-field col s12 m7 l7">
                                        <select style="border: 1px solid #f2f2f2;">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1" style="font-family:Arial, Helvetica, sans-serif;">Science
                                            </option>
                                            <option value="2" style="font-family:Arial, Helvetica, sans-serif;">Arts
                                            </option>
                                            <option value="3" style="font-family:Arial, Helvetica, sans-serif;">Commerce
                                            </option>
                                        </select>
                                        <label class="black-text" style="margin-bottom:30px !important;">Select the
                                            course you want
                                            to apply for</label>
                                    </div>
                                    <div class="input-field col s12 m7 l7">
                                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div>
                                    <div class="input-field col s12 m7 l7">
                                        <input placeholder="Placeholder" id="last_name" type="text" class="validate">
                                        <label for="last_name">Last Name</label>
                                    </div>

                                    {{-- <div class="input-field col s6">
                                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                        <label for="first_name">First Name</label>
                                    </div> --}}
                                </div>
                            </form>
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