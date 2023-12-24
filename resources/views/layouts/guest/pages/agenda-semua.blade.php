@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Semua Agenda'])
@endsection

@section('content')
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-40 gx-70">
                @forelse ($items as $item)
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
                                <h3 class="event-card_title"><a href="{{route('detail.agenda', $item->slug)}}">{{ $item->title }}</a></h3>
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

                <div class="col-12 text-center">
                    <div class="th-pagination ">
                        {{ $items->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
