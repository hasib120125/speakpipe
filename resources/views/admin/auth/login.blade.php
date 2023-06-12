<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Speakpipe - Login') }}</title>
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('themes/admin/fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/admin/css/main.css') }}">
</head>

<body>
    <div id="wrapper">
        <form method="post" action="{{ route('login_admin_post') }}">
            @csrf
            <div class="login_container">
                <div class="login_wrap">
                    <img src="{{ asset('themes/admin/media/images/speakpipe-logo.svg') }}" alt="">
                    <div class="has-danger">
                        <div class="form-control-feedback">{{ session('message') }}</div>
                    </div>

                    <div class="login_input">
                        <label>Email</label>
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
                            required>
                    </div>
                    <div class="login_input">
                        <label>Password</label>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <button type="submit" class="form__button button_submit">Login</button>
                </div>
            </div>
        <form>
    </div>

    <script src="{{ asset('themes/admin/js/vendor/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('themes/admin/js/plugin/jquery-ui/jquery-ui.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="{{ asset('themes/admin/js/leftnav.js') }}"></script>
    <script src="{{ asset('themes/admin/js/main.js') }}"></script>
</body>

</html>
