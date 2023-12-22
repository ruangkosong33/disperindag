@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Semua Berita'])
@endsection

@section('content')


    <section class="th-blog-wrapper space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    @forelse($articles->items() as $article)
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href="{{route('detail.berita', $article->slug)}}"><img src="assets/img/blog/blog-s-1-1.jpg" alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                    <a href="{{route('detail.berita', $article->slug)}}"><i class="fa-light fa-clock"></i>{{ $article->date }}</a>
                                    <a href="{{route('detail.berita', $article->slug)}}"><i
                                            class="fa-light fa-book"></i>{{ $article->category->title }}</a>
                                </div>
                                <h2 class="blog-title"><a href="{{route('detail.berita', $article->slug)}}">{{ $article->title }}</a>
                                </h2>
                                {{-- <p class="blog-text">Uniquely pursue emerging experiences before liemerging content. Efficiently
                                underwhelm customer directed total linkage after B2C synergy. Dynamically simplify superior
                                human capital whereas efficient infrastructures generate business web-readiness after
                                wireless outsourcing.</p> --}}
                                <a href="{{route('detail.berita', $article->slug)}}" class="link-btn">Baca Selengkapnya<i
                                        class="fas fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    @empty
                        Tidak ada data
                    @endforelse

                    <div class="th-pagination ">
                        {{ $articles->links() }}
                    </div>
                </div>
                @include('layouts.guest.article-sidebar')
            </div>
        </div>
    </section>
@endsection
