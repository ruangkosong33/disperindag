@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Maklumat Pelayanan'])
@endsection

@section('content')
    <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        @if ($item)
                            <div class="blog-img">
                                @if ($item->image)
                                    <img src="{{ asset('assets/img/blog/blog-s-1-5.jpg') }}" alt="Blog Image">
                                @endif
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">{{ $item->title }}</h2>
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
