@extends('layouts.guest.master')

@section('breadcrum')
    @include('components.guest.breadcumb', ['title' => $item->name])
@endsection

@section('content')
    <section class="space">
        <div class="container">
            <div class="team-details-about-info">
                <div class="row gx-40">
                    <div class="col-lg-6 position-relative">
                        <div class="team-details-thumb">
                            @if ($item->image)
                                <img src="{{ asset('storage/image-employee/' . $item->image) }}" alt="{{ $item->name }}">
                            @else
                                <img src="{{ asset('assets/img/team/team-details.png') }}" alt="team image">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-box">
                            <div class="about-info">
                                <h2 class="title">{{ $item->name }}</h2>
                                <p class="desig">{{ $item->pim }}</p>
                            </div>
                            {{-- <div class="th-social style2">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div> --}}
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>NIP</th>
                                    <td>{{ $item->nip }}</td>
                                </tr>
                                <tr>
                                    <th>Level</th>
                                    <td>
                                        @if ($item->level == 1)
                                            Tenaga Alih Daya
                                        @elseif($item->level == 2)
                                            Staf
                                        @elseif($item->level == 3)
                                            Kepala Seksi
                                        @elseif($item->level == 4)
                                            Kepala Bidang
                                        @elseif($item->level == 5)
                                            Kepala UPTD
                                        @endif

                                    </td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>{{ $item->position }}</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan</th>
                                    <td>{{ $item->education }}</td>
                                </tr>
                                <tr>
                                    <th>Diklat PIM</th>
                                    <td>{{ $item->pim }}</td>
                                </tr>
                            </table>
                        </div>
                        {{-- <p>I’m Web Developer. I’m a English and all Teacher with a serious love for teaching. Leverage agile
                            frameworks provide robust synopsis higher leveler overviewed. Iterative and approaches to
                            corporate and strategy's foster collaborative thinking.</p> --}}
                        {{-- <div class="about-quality">
                            <div class="quality-box">
                                <span class="quality-text">Course: 4</span>
                                <span class="quality-text">Students: 50</span>
                            </div>
                            <div class="quality-box">
                                <span class="quality-text">Reviews:</span>
                                <div class="course-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                        <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                    </div>
                                    4.00 (70)
                                </div>
                            </div>
                            <div class="quality-box">
                                <span class="quality-text">Experiance:</span>
                                <span class="quality-text">10 Years</span>
                            </div>
                        </div>
                        <div class="about-contact-wrap">
                            <div class="about-contact">
                                <div class="about-contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="about-contact-details">
                                    <span class="about-contact-subtitle">Call Any Time:</span>
                                    <h6 class="about-contact-title">+(963) 2145 3654</h6>
                                </div>
                            </div>
                            <div class="about-contact">
                                <div class="about-contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="about-contact-details">
                                    <span class="about-contact-subtitle">Mail Any Time:</span>
                                    <h6 class="about-contact-title">hirmarubunti@gmail.com</h6>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
