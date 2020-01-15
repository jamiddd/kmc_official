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
            <img src="/images/1.jpg" data-caption="Boys during their break, talking about their day." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/9.jpg" data-caption="The people who make things better for all of us at KMC." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/cd.jpg" data-caption="Children's day event." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/2.jpg" data-caption="We love posing for the camera. Don't you?" class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/cc.jpg" data-caption="Epic diwali celebration in KMC." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            {{-- <img src="/images/a.jpg" data-caption="" class="cc materialboxed z-depth-3 hoverable" style="width:100%"> --}}
            <img src="/images/b.jpg" data-caption="Salute. Jai Hind. To the country and for the country." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/principal.jpg" data-caption="Our beloved principal while working." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
          </div>
          <div class="col s6 l4 m4">
            <img src="/images/8.jpg" data-caption="The fierce working ladies who decided to take on the mantle of responsibility to teach the best way possible." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/z.jpg" data-caption="The whole KMC Family on Independence day. Except the people who did not show up that day." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/3.jpg" data-caption="The room of requirement from Harry Potter right to KMC." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/college.jpg" data-caption="Panoramic view of our College." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/c.jpg" data-caption="The proud flag of our country." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            {{-- <img src="/images/4.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%"> --}}
            <img src="/images/pl.jpg" data-caption="The best way to learn physics is to practice it. Physics practical Lab." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
          </div>  
          <div class="col s6 l4 m4">
            <img src="/images/7.jpg" data-caption="Teacher explaining the parts of a human body in biology lab." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            {{-- <img src="/images/boys-talking.jpg" class="cc materialboxed z-depth-3 hoverable" style="width:100%"> --}}
            <img src="/images/5.jpg" data-caption="Sometimes not paying attention gives you the benefit of being different from the rest of the people." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/d.jpg" data-caption="Flag hoisting ceremony on Independence day." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
            <img src="/images/6.jpg" data-caption="Teachers having a casual talk." class="cc materialboxed z-depth-3 hoverable" style="width:100%">
          </div>
   </div>
</main>

<script>
     $(document).ready(function(){
        $('.materialboxed').materialbox();
    });
      
</script>
@endsection