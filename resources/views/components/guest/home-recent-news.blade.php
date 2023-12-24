<section class="space" id="blog-sec">
    <div class="container">
        <div class="title-area text-center">
            {{-- <span class="sub-title"><i class="fal fa-book me-2"></i>Our Blog Posts</span> --}}
            <h2 class="sec-title">Berita <span class="text-theme fw-light">Terbaru</span></h2>
        </div>
        <div class="blog-grid-wrap">
            @php
                $no = 1;
            @endphp
            @forelse($recent_posts as $post)
                @if ($no == 1)
                    <div class="blog-grid">
                        <div class="blog-img">
                            @if ($post->image)
                                <img src="{{ asset('storage/image-post/' . $post->image) }}" alt="{{$post->title}}">
                            @else
                                <img src="{{ asset('images/default-big.jpg') }}" alt="{{$post->title}}">
                            @endif
                        </div>
                        <div class="blog-content">
                            <a class="tag" href="{{ route('semua.berita') }}">{{ $post->category->title }}</a>
                            <h3 class="blog-title"><a
                                    href="{{ route('detail.berita', $post->slug) }}">{{ $post->title }}</a></h3>
                            <div class="blog-meta style2">
                                <a href="{{ route('detail.berita', $post->slug) }}"><i
                                        class="far fa-clock"></i>{{ $post->date }}</a>
                                {{-- <a href="blog.html"><i class="far fa-folder"></i>Marketing</a> --}}
                            </div>
                        </div>
                    </div>
                @elseif($no == 2)
                    <div class="blog-grid">
                        <div class="blog-img">
                            @if ($post->image)
                                <img src="{{asset('storage/image-post/' . $post->image)}}" alt="blog image">
                            @else
                                {{-- <img src="assets/img/update1/blog/blog_1_2.jpg" alt="blog image"> --}}
                                <img src="{{ asset('images/default-big.jpg') }}" alt="blog image">
                            @endif
                        </div>
                        <div class="blog-content">
                            <a class="tag" href="{{ route('semua.berita') }}">{{ $post->category->title }}</a>
                            <h3 class="blog-title"><a
                                    href="{{ route('detail.berita', $post->slug) }}">{{ $post->title }}</a></h3>
                            <div class="blog-meta style2">
                                <a href="{{ route('detail.berita', $post->slug) }}"><i
                                        class="far fa-clock"></i>{{ $post->date }}</a>
                                {{-- <a href="blog.html"><i class="far fa-folder"></i>Technology</a> --}}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="blog-grid">
                        <div class="blog-img">
                            @if ($post->image)
                                <img src="{{asset('storage/image-post/' . $post->image)}}" alt="blog image">
                            @else
                                <img src="{{ asset('images/default-big.jpg') }}" alt="blog image">
                            @endif
                        </div>
                        <div class="blog-content">
                            <a class="tag" href="{{ route('semua.berita') }}">{{ $post->category->title }}</a>
                            <h3 class="blog-title"><a
                                    href="{{ route('detail.berita', $post->slug) }}">{{ $post->title }}</a></h3>
                            <div class="blog-meta style2">
                                <a href="{{ route('detail.berita', $post->slug) }}"><i
                                        class="far fa-clock"></i>{{ $post->date }}</a>
                                {{-- <a href="blog.html"><i class="far fa-folder"></i>Programing</a> --}}
                            </div>
                        </div>
                    </div>
                @endif
                @php
                    $no++;
                @endphp
            @empty
                Tidak ada data
            @endforelse

        </div>
        <div class="text-center mt-40 mt-xl-5">
            <a href="{{ route('semua.berita') }}" class="th-btn">Lihat Semua Berita<i
                    class="fas fa-arrow-right ms-2"></i></a>
        </div>
    </div>
    <div class="shape-mockup jump-reverse d-none d-lg-block" data-bottom="28%" data-right="3%"><img
            src="assets/img/update1/shape/circle_3.png" alt="shapes"></div>
    <div class="shape-mockup jump d-none d-lg-block" data-top="44%" data-left="0%"><img
            src="assets/img/update1/shape/circle_4.png" alt="shapes"></div>
</section>
