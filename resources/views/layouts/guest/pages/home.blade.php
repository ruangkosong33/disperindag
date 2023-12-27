<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    <meta name="author" content="Test">
    <meta name="description" content="Indagkop Kaltim - Dinas Profil">
    <meta name="keywords" content="indagkop, kaltim, kalimantan timur">
    <meta name="robots" content="INDEX,FOLLOW">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    @vite('resources/sass/app-guest.scss')
    <style>
        #hero {
            width: 100%;
            height: 100vh;
            background: url({{ asset('images/portal4.jpg') }}) top center;
            background-size: cover;
            position: relative;
        }

        #hero .icon-box h3 a {
            color: #2a2929;
            transition: ease-in-out 0.3s;
            text-decoration: underline;
        }

        #hero .icon-box h3 a:hover {
            color: #ffc451;
        }

        .h3,
        h3 {
            font-size: 20px;
            line-height: 1.278;
        }
    </style>
</head>

<body class="antialiased">

</body>
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container text-center" data-aos="fade-up">

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-store-line"></i>
                    <h3><a href="{{ url('/beranda') }}">WEBSITE</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-bar-chart-box-line"></i>
                    <h3><a href="#">PPID</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line"></i>
                    <h3><a href="#">SIP KALTIM</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-paint-brush-line"></i>
                    <h3><a href="#">SI KOMENG</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4">
                <div class="icon-box">
                    <i class="ri-paint-brush-line"></i>
                    <h3><a href="#">SILAKAS</a></h3>
                </div>
            </div>
        </div>

    </div>

    @vite('resources/js/app-guest.js')

</html>
