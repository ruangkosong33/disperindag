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
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="#"><i class="fa-light fa-calendar-days"></i>{{$item->date}}</a>
                            </div>
                            <h2 class="blog-title">{{$item->title}}</h2>
                            {!! $item->description !!}
                        </div>
                        <div class="share-links clearfix ">
                            <div class="row justify-content-between">
                                {{-- <div class="col-md-auto">
                                    <span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        <a href="blog.html">Education</a>
                                        <a href="blog.html">Online</a>
                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-auto text-xl-end">
                                    <span class="share-links-title">Share:</span>
                                    <ul class="social-links">
                                        <li><a href="https://facebook.com/" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://linkedin.com/" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="https://instagram.com/" target="_blank"><i
                                                    class="fab fa-instagram"></i></a></li>
                                    </ul><!-- End Social Share -->
                                </div> --}}
                                <!-- Share Links Area end -->
                            </div>
                        </div>
                    </div>

                </div>
                @include('layouts.guest.article-sidebar')
            </div>
        </div>
    </section>
@endsection
