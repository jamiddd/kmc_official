@extends('layouts.app')

@section('content')
<style>
    body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        background-image: url('/images/yy.jpg');
        background-repeat: repeat;
        background-attachment: fixed;
    }

    main {
        flex: 1 0 auto;
        padding-top: 80px;
    }

    .cc {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
    }
</style>
{{-- <div id="form-card-background"></div> --}}
<main>
   <div class="container row">
        <div class="card pink accent-3 white-text z-depth-4" style="padding:5px 50px; margin:10px;">
            <h1 style="font-family: 'Bebas Neue', cursive;">Gallery</h1>
        </div>
        <div class="col s6 l4 m4">
            <img src="/images/blank.jpg" data-caption="Our freshers day at college." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/books.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/bio.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/dating.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/cc.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/a.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/b.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/principal.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
          </div>
          <div class="col s6 l4 m4">
            <img src="/images/front.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/z.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/physics.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/college.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/c.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/christmas.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/chem.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
          </div>  
          <div class="col s6 l4 m4">
            <img src="/images/books.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/boys-talking.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/vision.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/d.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/friends.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
          </div>
   </div>
</main>

<script>
     $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
      
</script>
@endsection