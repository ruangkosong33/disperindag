<section class="space" data-bg-src="assets/img/update1/bg/category_bg_1.jpg">
    <div class="container">
        <div class="row justify-content-center justify-content-xl-between align-items-center">
            <div class="col-xl-8 mb-n2 mb-xl-0">
                <div class="title-area text-center text-xl-start">
                    {{-- <span class="sub-title">Our Course Categories</span> --}}
                    <h2 class="sec-title fw-semibold">Pengumuman</h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="{{route('semua.pengumuman')}}" class="th-btn">Lihat Semua Pengumuman<i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            @forelse ($pengumuman as $item)
            <div class="col-lg-6 col-xl-4">
                <div class="category-list2">
                    {{-- <div class="category-list2_icon">
                        <img src="assets/img/update1/icon/category_2_1.svg" alt="icon">
                    </div> --}}
                    <div class="category-list2_content">
                        <h3 class="category-list2_title"><a href="{{route('detail.pengumuman', $item->slug)}}">{{$item->title}}</a></h3>
                        {{-- <span class="category-list2_text">256 Courses</span> --}}
                    </div>
                    <a href="course.html" class="icon-btn"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            @empty
                Tidak ada data
            @endforelse

        </div>
    </div>
</section>
