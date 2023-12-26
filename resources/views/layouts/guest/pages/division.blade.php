@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => $item->title])
@endsection

@section('content')
    <!--==============================
                            Blog Area
                        ==============================-->
    <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-12 col-lg-12">
                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fa-light fa-calendar-days"></i>{{ $item->date }}</a>
                            </div>
                            <h2 class="blog-title">{{ $item->title }}</h2>
                            {!! $item->description !!}
                        </div>

                    </div>
                    <div class="container">
                        <div class="title-area text-center">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Pegawai</span>
                            <h2 class="sec-title">Bertemu Pegawai Kami</h2>
                        </div>
                        <div class="row th-carousel slider-shadow" data-slide-show="4" data-lg-slide-show="3"
                            data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1">
                            <!-- Single Item -->
                            @forelse($data_pegawai as $item)
                                <div class="col-lg-6">
                                    <div class="team-card style2">
                                        <div class="team-img-wrap">
                                            <svg class="team-shape" xmlns="http://www.w3.org/2000/svg" width="327"
                                                height="337" viewBox="0 0 327 337" fill="none">
                                                <path
                                                    d="M158.167 331C158.167 333.946 160.555 336.333 163.5 336.333C166.446 336.333 168.833 333.946 168.833 331C168.833 328.054 166.446 325.667 163.5 325.667C160.555 325.667 158.167 328.054 158.167 331ZM158.167 6C158.167 8.94552 160.555 11.3333 163.5 11.3333C166.446 11.3333 168.833 8.94552 168.833 6C168.833 3.05448 166.446 0.666667 163.5 0.666667C160.555 0.666667 158.167 3.05448 158.167 6ZM325 167.5C325 257.254 253.238 330 163.5 330V332C254.359 332 327 258.343 327 167.5H325ZM2.00012 167.5C2.00012 77.7618 73.7458 7 163.5 7V5C72.6574 5 0.00012207 76.6411 0.00012207 167.5H2.00012Z"
                                                    fill="#0D5EF4" />
                                            </svg>
                                            <div class="team-img">
                                                @if ($item->image)
                                                    <img src="{{ asset('storage/image-employee/'.$item->image) }}" alt="Team">
                                                @else
                                                    <img src="{{ asset('assets/img/team/team_2_1.jpg') }}" alt="Team">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h3 class="team-title"><a href="{{route('division.datapegawai', $item->slug)}}">{{$item->name}}</a></h3>
                                            <span class="team-desig">{{$item->position}}</span>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                Tidak ada data Pegawai
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
