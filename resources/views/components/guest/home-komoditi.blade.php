<section class="space overflow-hidden" data-bg-src="assets/img/bg/course_bg_2.png" id="course-sec">
    <div class="container">
        <div class="title-area text-center mb-50">
            <span class="sub-title"><i class="fal fa-book me-2"></i> Update</span>
            <h2 class="sec-title">Harga Barang Pokok dan Penting</h2>
        </div>

        <div class="course-tab-1 tab-menu1 th-carousel row" data-slide-show="4" data-ml-slide-show="3"
            data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true" id="courseTab-1">
            @forelse($comodities as $comodity)
                <div class="col-lg-3">
                    <a class="tab-btn">
                        <span class="icon">
                            @if(!$comodity->image)
                            <img src="assets/img/icon/course-tab-icon1.svg" alt="img">
                            @endif
                        </span>
                        <span class="details">
                            <span class="box-title">{{ $comodity->title }}</span>
                            <span class="text">Rp. {{ number_format($comodity->price, 0, ',', '.') }}</span>
                        </span>
                    </a>
                </div>
            @empty
                Tidak ada data
            @endforelse
        </div>
        <div class="text-center">
            <a href="{{route('harga.komoditi')}}" class="th-btn">Lihat Semua Daftar Harga<i
                    class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
    </div>
</section>
