@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => $item->title])
@endsection

@section('content')
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="event-details-wrap">
                        <h3 class="h3 mt-n2">{{$item->title}}</h3>
                        {!! $item->description !!}
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info  ">
                            <a href="https://calendar.google.com/calendar/" class="th-btn">Add To Calendar</a>
                            <a href="contact.html" class="th-btn style4">Ical Export</a>
                            <h3 class="widget_title">Infomasi Kegiatan</h3>
                            <div class="info-list">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-calendar-days"></i>
                                        <strong>Tanggal: </strong>
                                        <span>{{$item->date}}</span>
                                    </li>
                                    {{-- <li>
                                        <i class="fa-light fa-clock"></i>
                                        <strong>Time: </strong>
                                        <span>8:00 am - 5:00 pm</span>
                                    </li> --}}
                                    <li>
                                        <i class="fa-light fa-location-dot"></i>
                                        <strong>Venue: </strong>
                                        <span>{{$item->place}}</span>
                                    </li>
                                    {{-- <li>
                                        <i class="fa-light fa-map"></i>
                                        <strong> Address: </strong>
                                        <span>256 SDY Oliva St.</span>
                                    </li> --}}
                                    <li>
                                        <i class="fa-light fa-user"></i>
                                        <strong>Name: </strong>
                                        <span>David Smith</span>
                                    </li>
                                    {{-- <li>
                                        <i class="fa-light fa-phone"></i>
                                        <strong>Phone: </strong>
                                        <span>(+256) 2152 2156</span>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="widget widget_banner p-0  ">
                            <div class="widget-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sth!5e0!3m2!1sen!2sbd!4v1658812932163!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div> --}}
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
