<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin panel login') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/admin-favicon.png"/>
    <link rel="stylesheet" href="/css/login.css"/>
</head>
<body>
<div class="login">
    <a href="/" title="Back to website">
        <img src="/images/login.svg" class="login__logotype" alt="">
    </a>
    <h1 class="login__title">Sign Up</h1>
    <div class="login__errors">
        @if ($errors->has('email'))
            <p>{{ $errors->first('email') }}</p>
        @endif

        @if ($errors->has('password'))
            <p>{{ $errors->first('password') }}</p>
        @endif
    </div>
    <form method="POST" action="{{ route('admin.login') }}" class="login__form">
        @csrf
        <div class="login__form-group">
            <input id="email" type="email" class="login__input {{ $errors->has('email') ? ' invalid' : '' }}"
                   name="email" value="{{ old('email') }}" required/>
            <div class="login__floating-label">{{ __('E-Mail') }}</div>
        </div>
        <div class="login__form-group">
            <input id="password" type="password" class="login__input {{ $errors->has('password') ? ' invalid' : '' }}"
                   name="password" required/>
            <div class="login__floating-label">{{ __('Password') }}</div>
        </div>
        <div class="login__form-group">
            <div class="login__remember">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                <label class="login__label" for="remember">{{ __('Remember Me') }}</label>
            </div>
        </div>
        <button class="login__submit">{{ __('Log in to admin panel') }}</button>
        <div class="login__forgot">Can't log in? <a href="{{ route('password.request') }}" class="login__forgot-link">{{ __('Reset your password') }}</a></div>
    </form>
</div>
<div class="login__copy">This website created and maintained by <a href="http://chimney.agency" class="login__copy-link" target="_blank">Chimney Agency</a></div>
</body>
</html>
