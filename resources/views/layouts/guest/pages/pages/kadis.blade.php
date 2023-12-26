@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Kepala Dinas'])
@endsection

@section('content')
    <!--==============================
                Blog Area
            ==============================-->
    <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        @if($item)
                        <div class="blog-img">
                            @if ($item->image)
                                <img src="{{ asset('storage/image-kadis/'.$item->image) }}" alt="Blog Image">
                            @endif
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fa-light fa-calendar-days"></i>{{$item->date}}</a>
                            </div>
                            <h2 class="blog-title">{{$item->title}}</h2>
                            {!! $item->description !!}
                        </div>
                        @else
                        Tidak ada data
                        @endif
                    </div>

                </div>
                @include('layouts.guest.article-sidebar')
            </div>
        </div>
    </section>
@endsection
