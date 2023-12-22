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
                    <img src="images/image-indagkop-tv.jpg" alt="course">
                    @if($video && !$video->link)
                    <a href="{{$video->link}}" class="play-btn popup-video"><i
                            class="fas fa-play"></i></a>
                    @else
                    <a href="https://www.youtube.com/watch?v=nPzLvVOWSEg" class="play-btn popup-video"><i
                        class="fas fa-play"></i></a>
                    @endif
                </div>
                <div class="course-content">
                    <h3 class="course-title"><a href="course-details.html">INDAGKOP TV</a></h3>
                    {{-- <a href="course.html" class="course-author">by David Anfle Smith</a>
                    <div class="course-meta">
                        <div class="meta-box">
                            <i class="fas fa-file"></i>
                            <div>
                                <span class="text">Total Lesson:</span>
                                <span class="number">328</span>
                            </div>
                        </div>
                        <div class="meta-box">
                            <i class="fas fa-user"></i>
                            <div>
                                <span class="text">Total Students:</span>
                                <span class="number">25,869</span>
                            </div>
                        </div>
                        <div class="meta-box">
                            <i class="fas fa-eye"></i>
                            <div>
                                <span class="text">Total Views:</span>
                                <span class="number">1256k</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-bottom="0%" data-right="0%"><img src="assets/img/update1/shape/line_5.png"
                alt="shapes"></div>
    </div>
    <div class="shape-mockup jump" data-top="0%" data-left="0%"><img src="assets/img/update1/shape/dot_shape_5.png"
            alt="shapes"></div>
</section>
