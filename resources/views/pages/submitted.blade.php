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
    }
</style>
<div class="card-background"></div>
<main>
    <div class="div-container" style="margin-bottom: 100px;">
        <div class="card small base-card white z-depth-5">
            <div class="card-content">
                <div class="light-green lighten-4" style="width:100%; height:50px; padding:10px;">
                    <span class="green-text text-darken-4">{{$message}}<a href="/">&nbsp;&nbsp;Return</a></span>
                </div>
                {{-- @if(count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <div class="red lighten-4" style="width:100%; height:100px;">
                            <span class="black-text">{{$error}}</span>
                        </div>
                    @endforeach
                @endif
                @if(session('success'))
                    
                @endif
                @if (session('error'))
                    <div class="red lighten-4" style="width:100%; height:100px;">
                        <span class="black-text">{{$error}}</span>
                    </div>
                @endif --}}
            </div>
        </div>
        <div class="card z-depth-5">
            
        </div>
    </div>
</main>

<script>

</script>
@endsection