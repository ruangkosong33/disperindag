@extends('layouts.guest.master')

@section('content')
    @include('components.guest.slider', ['banners' => $banners])

    <div class="cta-area-1" data-bg-src="assets/img/bg/cta-bg1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="cta-wrap title-area mb-0">
                        <div class="cta-icon">
                            <img src="{{ asset('images/office.png') }}" width="70" alt="icon">
                        </div>
                        <div class="cta-content">
                            <h4 class="cta-title sec-title">Dinas Perindustrian, Perdagangan, Koperasi, Usaha Kecil dan
                                Menengah</h4>
                            <p class="cta-text">PROVINSI KALIMANTAN TIMUR</p>
                        </div>
                        {{-- <a href="about.html" class="th-btn style8">Kunjungi Halaman<i class="fas fa-arrow-right ms-1"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="cta-img-1" data-overlay="title" data-opacity="8">
            <img src="assets/img/normal/cta_1_1.png" alt="Image">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
        </div> --}}
    </div>

    @include('components.guest.home-recent-news', ['recent_posts' => $recent_posts])

    @include('components.guest.home-pengumuman', ['pengumuman' => $pengumuman])

    @include('components.guest.home-agenda', ['events' => $events])

    @include('components.guest.home-komoditi', ['comodities' => $comodities])

    @include('components.guest.home-tv', ['video' => $video])

    <div class="cta-area-1" data-bg-src="assets/img/bg/cta-bg1.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="cta-wrap title-area mb-0">
                        <div class="cta-icon">
                            <img src="{{ asset('images/folder-download.png') }}" width="70" alt="icon">
                        </div>
                        <div class="cta-content">
                            <h2 class="cta-title sec-title">Download File</h2>
                            {{-- <p class="cta-text">Met consectetur adipiscing sed eiustempore dolore</p> --}}
                        </div>
                        <a href="{{route('download.front.index')}}" class="th-btn style8">Kunjungi Halaman<i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="cta-img-1" data-overlay="title" data-opacity="8">
            <img src="assets/img/normal/cta_1_1.png" alt="Image">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
        </div> --}}
    </div>

    @include('components.guest.home-berita-artikel-infopublik', [
        'seputar' => $seputar,
        'articles' => $articles,
        'info_public' => $info_public,
    ])

    @include('components.guest.home-link')
@endsection
