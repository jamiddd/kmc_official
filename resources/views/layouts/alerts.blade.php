@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="card red lighten-4 red-text text-darken-4" style="padding:20px; margin:20px;">
        {{$error}}
    </div>  
    @endforeach
@endif

@if (session('error'))
<div class="card" style="padding:20px;">
    {{session('error')}}
</div>
@endif
