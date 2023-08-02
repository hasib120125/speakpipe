<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Speakpipe - Admin') }}</title>
    @include('admin.partials.header-assets')
    @yield('additionalCSS')
</head>

<body>
    <div id="wrapper">
        <div class="mobile_overlay below_mobile open"></div>
        @include('admin.partials.header')
        @include('admin.partials.sidebar')
        <div id="content_wrap">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.partials.footer-assets')
    @yield('additionalJS')
</body>

</html>