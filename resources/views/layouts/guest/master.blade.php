<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <meta name="author" content="Test">
    <meta name="description" content="Indagkop Kaltim - Dinas Profil">
    <meta name="keywords" content="indagkop, kaltim, kalimantan timur">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    @vite('resources/sass/app-guest.scss')
    @stack('style')
</head>

<body>
    <div id="app">
        {{-- <div class="preloader ">
            <button class="th-btn style3 preloaderCls">Cancel Preloader </button>
            <div class="preloader-inner">
                <span class="loader"></span>
            </div>
        </div> --}}

        @include('layouts.guest.sidemenu')
        @include('layouts.guest.popup-search')
        @include('layouts.guest.mobile-menu')
        @include('layouts.guest.header')

        @yield('breadcrum')

        {{-- <main class="py-4"> --}}
        @yield('content')
        {{-- </main> --}}

        @include('layouts.guest.footer')

        <div class="scroll-top">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                    style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
                </path>
            </svg>
        </div>


    </div>

    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter Up -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <!-- Range Slider -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Tilt JS -->
    <script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
    <!-- Tweenmax JS -->
    <script src="{{ asset('assets/js/tweenmax.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @vite('resources/js/app-guest.js')
    @stack('script')
</body>

</html>
