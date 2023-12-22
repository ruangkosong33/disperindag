<section class="overflow-hidden space" id="blog-sec">
    <div class="container">
        <div class="mb-35 text-center text-md-start">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8">
                    <div class="title-area mb-md-0">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> Berita, Artikel, dan Info Publik</span>
                        <h2 class="sec-title">Seputar Indagkop</h2>
                    </div>
                </div>
                {{-- <div class="col-md-auto">
                    <a href="blog.html" class="th-btn">View All Posts<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div> --}}
            </div>
        </div>
        <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
            data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            @forelse($seputar as $item)
                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="{{ route('detail.berita', $item->slug) }}"><img
                                    src="{{ asset('images/default-lanskap.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="{{ route('detail.berita', $item->slug) }}"><i
                                        class="fa-light fa-user"></i>by David Smith</a>
                                <a href="{{ route('detail.berita', $item->slug) }}"><i class="fa-light fa-clock"></i>05
                                    Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a
                                    href="{{ route('detail.berita', $item->slug) }}">{{ $item->title }}</a>
                            </h4>
                            <a href="{{ route('detail.berita', $item->slug) }}" class="link-btn">Lihat detail<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                Tidak ada data
            @endforelse
        </div>
    </div>
    <div class="container mt-5">
        <div class="mb-35 text-center text-md-start">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8">
                    <div class="title-area mb-md-0">
                        {{-- <span class="sub-title"><i class="fal fa-book me-2"></i> Berita, Artikel, dan Info Publik</span> --}}
                        <h2 class="sec-title">Artikel Indagkop</h2>
                    </div>
                </div>
                {{-- <div class="col-md-auto">
                    <a href="blog.html" class="th-btn">View All Posts<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div> --}}
            </div>
        </div>
        <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
            data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            @forelse($articles as $item)
                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="{{ route('detail.berita', $item->slug) }}"><img
                                    src="{{ asset('images/default-lanskap.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="{{ route('detail.berita', $item->slug) }}"><i
                                        class="fa-light fa-user"></i>by David Smith</a>
                                <a href="{{ route('detail.berita', $item->slug) }}"><i class="fa-light fa-clock"></i>05
                                    Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a
                                    href="{{ route('detail.berita', $item->slug) }}">{{ $item->title }}</a>
                            </h4>
                            <a href="{{ route('detail.berita', $item->slug) }}" class="link-btn">Lihat detail<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                Tidak ada data
            @endforelse

        </div>
    </div>
    <div class="container mt-5">
        <div class="mb-35 text-center text-md-start">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-8">
                    <div class="title-area mb-md-0">
                        {{-- <span class="sub-title"><i class="fal fa-book me-2"></i> Berita, Artikel, dan Info Publik</span> --}}
                        <h2 class="sec-title">Info Publik</h2>
                    </div>
                </div>
                {{-- <div class="col-md-auto">
                    <a href="blog.html" class="th-btn">View All Posts<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div> --}}
            </div>
        </div>
        <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
            data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
            @forelse($info_public as $item)
                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="{{ route('detail.berita', $item->slug) }}"><img
                                    src="{{ asset('images/default-lanskap.jpg') }}" alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="{{ route('detail.berita', $item->slug) }}"><i
                                        class="fa-light fa-user"></i>by David Smith</a>
                                <a href="{{ route('detail.berita', $item->slug) }}"><i class="fa-light fa-clock"></i>05
                                    Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a
                                    href="{{ route('detail.berita', $item->slug) }}">{{ $item->title }}</a>
                            </h4>
                            <a href="{{ route('detail.berita', $item->slug) }}" class="link-btn">Lihat detail<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                Tidak ada data
            @endforelse
        </div>
    </div>
</section>
