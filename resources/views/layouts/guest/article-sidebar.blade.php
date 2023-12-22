<div class="col-xxl-4 col-lg-5">
    <aside class="sidebar-area">
        <div class="widget widget_search  ">
            <form class="search-form">
                <input type="text" placeholder="Cari Berita...">
                <button type="submit"><i class="far fa-search"></i></button>
            </form>
        </div>
        <div class="widget widget_categories  ">
            <h3 class="widget_title">Kategori</h3>
            <ul>
                @forelse($categories as $category)
                    <li><a href="{{route('semua.berita')}}">{{ $category->title }}</a><span>({{ $category->posts->count() }})</span></li>
                @empty
                    <li>Tidak ada kategori</li>
                @endforelse
            </ul>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">Berita Terbaru</h3>
            <div class="recent-post-wrap">
                @forelse($recent_posts as $recent)
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html">
                                @if ($recent->image)
                                    {{-- <img src="{{ asset('assets/img/blog/recent-post-1-1.jpg') }}" alt="Blog Image"></a> --}}
                                @else
                                    <img src="{{ asset('assets/img/blog/recent-post-1-1.jpg') }}" alt="Blog Image">
                            </a>
                @endif
                </a>
            </div>
            <div class="media-body">
                <h4 class="post-title"><a class="text-inherit" href="{{route('detail.berita', $recent->slug)}}">{{ $recent->title }}</a></h4>
                <div class="recent-post-meta">
                    <a href="{{route('detail.berita', $recent->slug)}}"><i class="fal fa-calendar"></i>{{ $recent->date }}</a>
                </div>
            </div>
        </div>
    @empty
        Tidak ada data
        @endforelse
</div>
</div>

{{-- <div class="widget widget_banner  " data-overlay="theme" data-opacity="9"
            data-bg-src="assets/img/widget/widget-banner-bg.png">
            <div class="widget-banner">
                <h4 class="title">Need Help? We Are Here
                    To Help You</h4>
                <div class="logo"><img src="assets/img/logo.svg" alt="img"></div>
                <h5 class="subtitle">You Get Online Courses</h5>
                <a href="tel:+11156456825" class="link">+256 214 203 215</a>
                <a href="contact.html" class="th-btn style7">Contact Us Now <i
                        class="far fa-arrow-right ms-1"></i></a>
            </div>
        </div> --}}
</aside>
</div>
