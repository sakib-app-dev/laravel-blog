<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Video Streamimg Website Template | Smarteyeapps.com</title>

        <!-- <link rel="stylesheet" type="text/css" href="asset{{'frontend/css/style.css'}}"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="root/public/frontend/css/style.css"/> -->
        
        
        <!-- <link rel="shortcut icon" href="assets/images/fav.jpg"> -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/fontawsom-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    </head>
    <body class="">
        @include('layouts.blog.header')
        @yield('content')
        @include('layouts.blog.footer')

        <script src="{{ asset('frontend/js/jquery.js')}}"></script>
        <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('frontend/js/script.js')}}"></script>
    </body>
</html>
