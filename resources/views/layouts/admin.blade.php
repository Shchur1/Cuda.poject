<!DOCTYPE html>
<html lang="eng">
<head>
    @if(Request::is('/'))
        <style>html, body {
                height: 100%;
                min-height: 100%;
                height: 100vh;
                min-height: 100vh
            }</style>
    @endif
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $siteTitle }}</title>

    <!-- Styles -->
    <link href="{{ asset('/admin_assets/css/compiled.min.css') }}" rel="stylesheet">
</head>
<body class="is-admin">
<div class="sidenav">
    <a href="/" class="sidenav__open-website" target="_blank">
        <img src="/admin_assets/images/icons/icon-open-website.svg" alt="" class="svg">
    </a>
    <div class="sidenav__content">
        <div class="sidenav__item">
            <a href="/admin/" class="sidenav__link {{ Request::segment(1) == 'admin' && Request::segment(2) != true ? 'sidenav__link--active' : '' }}">
                <i class="el el-dashboard sidenav__icon sidenav__icon--dashboard"></i>
            </a>
        </div>
        <div class="sidenav__item">
            <div class="sidenav__link js-toggle-content">
                <i class="el el-edit sidenav__icon sidenav__icon--content"></i>
            </div>
        </div>
        <div class="sidenav__item">
            <a href="/admin/settings/" class="sidenav__link {{ Request::segment(1) == 'admin' && Request::segment(2) == 'settings' ? 'sidenav__link--active' : '' }}">
                <i class="el el-cog sidenav__icon sidenav__icon--settings"></i>
            </a>
        </div>
    </div>
</div>
<div class="header">
    <div class="header__nav">
        <div class="header__nav-item">
            <a href="/admin/profile/" class="header__profile-dropdown">
                <img src="{{ $avatar }}" alt="" class="header__profile-avatar svg" />
                <div class="header__profile-name">{{ Auth::user()->name }}</div>
            </a>
        </div>
        <div class="header__nav-item">
            <a href="{{ route('logout') }}" class="header__nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img src="/admin_assets/images/icons/icon-shut-down.svg" alt="" class="header__nav-icon svg" />
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
<div class="container">
    @include('admin.messages')
    @yield('content')
</div>
@yield('modals')
<div id="overlay" class="overlay"></div>
<script src="{{ asset('/admin_assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('/admin_assets/js/vendor/lightswitch/lc_switch.min.js') }}"></script>
<script src="{{ asset('/admin_assets/js/compiled.min.js') }}"></script>
@yield('scripts')
</body>
</html>
