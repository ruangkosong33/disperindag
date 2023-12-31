<div class="th-hero-wrapper hero-3 hero-6" id="hero">
    <div class="hero-slider-2 th-carousel" id="heroSlide6" data-fade="true" data-slide-show="1" data-md-slide-show="1"
        data-arrows="true">
        @forelse($banners as $item)
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="{{ asset('storage/image-banner/' . $item->image) }}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center slider-height">
                        <div class="col-lg-12">
                            <div class="hero-style3 text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="{{ asset('images/banners/p5IBG7Haj.jpg') }}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center slider-height" >
                        <div class="col-lg-12">
                            <div class="hero-style3 text-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforelse
    </div>
    <div class="hero-shape shape1 movingX d-md-block d-none">
        <img src="{{ asset('assets/img/hero/shape_3_1.png') }}" alt="shape">
    </div>
    <div class="hero-shape shape2 d-sm-block d-none">
        <img class="spin" src="{{ asset('assets/img/hero/shape_3_2.png') }}" alt="shape">
    </div>
    <div class="hero-shape shape3 spin d-sm-block d-none">
        <img src="{{ asset('assets/img/hero/shape_2_4.png') }}" alt="shape">
    </div>
    <div class="icon-box">
        <button data-slick-prev="#heroSlide6" class="slick-arrow default"><i class="far fa-chevron-left"></i></button>
        <button data-slick-next="#heroSlide6" class="slick-arrow default"><i class="far fa-chevron-right"></i></button>
    </div>
</div>
