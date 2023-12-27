@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => $item->title])
@endsection

@section('content')
    <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fa-light fa-calendar-days"></i>{{$item->date}}</a>
                            </div>
                            <h2 class="blog-title">{{$item->title}}</h2>
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
                @include('layouts.guest.article-sidebar')
            </div>
        </div>
    </section>
@endsection
