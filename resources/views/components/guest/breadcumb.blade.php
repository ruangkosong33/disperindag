@php
$banners = ['l99.png', 'stop_pngli.jpg', 'banner-2.jpg', 'p5IBG7Haj.jpg'];
// $banner = $banners[rand(0,3)];
@endphp

<div class="breadcumb-wrapper " data-bg-src="{{asset('images/banners/'.$banners[1])}}" data-overlay="title" data-opacity="8">
    <div class="breadcumb-shape" data-bg-src="{{asset('assets/img/bg/breadcumb_shape_1_1.png')}}">
    </div>
    <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
        <img src="assets/img/bg/breadcumb_shape_1_2.png" alt="shape">
    </div>
    <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
        <img src="{{asset('assets/img/bg/breadcumb_shape_1_3.png')}}" alt="shape">
    </div>
    <div class="container">
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">{{$title}}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>{{$title}}</li>
            </ul>
        </div>
    </div>
</div>
