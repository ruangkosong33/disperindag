<section class="space-extra-top">
    <div class="container">
        <div class="title-area text-center">
            {{-- <span class="sub-title">Indagkop TV</span> --}}
            <h2 class="sec-title fw-medium">Indagkop TV</h2>
        </div>
    </div>
    <div class="course-sec space-bottom">
        <div class="bg-shape gr-bg1"></div>
        <div class="container">

            <div class="course-grid2">
                <div class="course-img">
                    @if ($video)
                        @if ($video->image)
                            <img src="{{ asset('storage/image-video/' . $video->image) }}" alt="course">
                        @else
                            <img src="images/image-indagkop-tv.jpg" alt="course">
                        @endif
                        @if ($video && !$video->link)
                            <a href="{{ $video->link }}" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                        @else
                            <a href="https://www.youtube.com/watch?v=nPzLvVOWSEg" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a>
                        @endif
                    @else
                        Tidak ada video
                    @endif
                </div>
                <div class="course-content">
                    <h3 class="course-title"><a href="course-details.html">INDAGKOP TV</a></h3>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0%" data-right="0%"><img src="assets/img/update1/shape/line_5.png"
                alt="shapes"></div>
    </div>
    <div class="shape-mockup jump" data-top="0%" data-left="0%"><img src="assets/img/update1/shape/dot_shape_5.png"
            alt="shapes"></div>
</section>
