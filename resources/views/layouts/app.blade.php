<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Kamrup Metropolitan College</title>

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
        integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY=" crossorigin="anonymous" />
    <link href="{{asset('css/materialize.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Montserrat:700|Shadows+Into+Light&display=swap"
        rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<script src="{{asset('js/materialize.js')}}"></script>

<body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.fixedactionbutton')
    @include('layouts.footer')
</body>

<script>
    function showNewsToast(){
        M.toast({html: 'News uploaded successfully!'})
    }
</script>
<script src="{{asset('js/script.js')}}"></script>

</html>