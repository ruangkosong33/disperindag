@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => 'Indagkop TV'])
@endsection

@section('content')
    <section class="space">
        <div class="container">
            <div class="row gy-40 filter-active">
                @forelse($items as $item)
                    <div class="col-md-6 col-xl-4 filter-item cat1 cat3">
                        <div class="video-course">
                            <div class="course-img">
                                @if ($item->image)
                                    <img src="{{ asset('storage/image-video/' . $item->image) }}" alt="course">
                                @else
                                    <img src="{{ asset('assets/img/update1/course/video_1_1.jpg') }}" alt="">
                                @endif
                                <a href="{{ $item->link }}" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="course-content">
                                <h3 class="course-title">{{$item->title}}</h3>
                                {{-- <a href="course.html" class="author-name">by David Anfle Smith</a> --}}
                            </div>
                        </div>
                    </div>
                @empty
                    Tidak ada data
                @endforelse
            </div>
            {{ $items->links() }}
        </div>
    </section>
@endsection
