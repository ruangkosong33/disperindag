<section class="space" data-bg-src="assets/img/bg/event-bg_1.png">
    <div class="shape-mockup event-shape1 jump" data-top="0" data-left="-60px">
        <img src="assets/img/team/team-shape_1_1.png" alt="img">
    </div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title"><i class="fal fa-book me-2"></i> Events</span>
            <h2 class="sec-title">Agenda Kegiatan</h2>
        </div>
        <div class="row slider-shadow event-slider-1 th-carousel gx-70" data-slide-show="3" data-lg-slide-show="3"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
            @forelse($events as $item)
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="{{asset('assets/img/event/event_img-shape.png')}}">
                            <img src="{{asset('images/event-big.png')}}" alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="{{asset('images/event.png')}}" alt="avater">
                                </div>
                                <div class="details">
                                    {{-- <span class="author-name">David Smith</span>
                                    <p class="author-desig">Chief - Executive</p> --}}
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>{{$item->place}}</p>
                                <p><i class="fal fa-clock"></i>{{$item->date}}</p>
                            </div>
                            <h3 class="event-card_title"><a href="#">{{$item->title}}</a></h3>
                            <div class="event-card_bottom">
                                <a href="{{route('detail.agenda', $item->slug)}}" class="th-btn">Lihat Kegiatan <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="{{asset('assets/img/event/event-box-shape1.png')}}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                Tidak ada data
            @endforelse
        </div>
    </div>
</section>
