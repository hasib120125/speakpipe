<?php
    use App\Enumeration\Role;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="title" content="SpeakPipe">
        <meta name="description" content="SpeakPipe">
        <link rel="canonical" href="{{ url()->current() }}" />
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <title>SpeakPipe</title>
        <link rel="stylesheet" href="{{ asset('themes/front/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('themes/front/css/custom.css') }}">
        <link href="{{ asset('plugins/toastr/toastr.min.css') }}" rel="stylesheet"  rel="preload" as="style">
        @yield('additionalCSS')
    </head>

    <body class="wave-background">
        <div class="body-wrapper">
            @include('front.shared.header')

            @yield('content')

            @include('front.shared.footer')
        </div>

        <script src="{{ asset('themes/front/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('themes/front/js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
        @yield('additionalJS')
    </body>
</html>
