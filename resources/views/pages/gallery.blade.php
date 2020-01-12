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
        padding-top: 80px;
    }

    .col img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
    }
</style>
{{-- <div id="form-card-background"></div> --}}
<main>
   <div class="container row">
        <div class="col s6 l4 m4">
            <img src="/images/blank.jpg" data-caption="Our freshers day at college." class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/books.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/bio.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/dating.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/cc.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/a.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/b.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/principal.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
          </div>
          <div class="col s6 l4 m4">
            <img src="/images/front.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/z.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/physics.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/college.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/c.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/christmas.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/chem.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
          </div>  
          <div class="col s6 l4 m4">
            <img src="/images/books.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/boys-talking.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/vision.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/d.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/friends.jpg" class="materialboxed z-depth-3 hoverable" style="width:100%">
          </div>
   </div>
</main>

<script>
     $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
      
</script>
@endsection