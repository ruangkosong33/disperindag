<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-phone"></i><a href="tel:+11156456825">+111 (564) 568 25</a></li>
                            <li class="d-none d-xl-inline-block"><i class="far fa-envelope"></i><a
                                    href="mailto:info@Edura.com">indagkop@kaltimprov.go.id</a></li>
                            <li><i class="far fa-clock"></i>Sen - Jum: 8:00 - 16:30</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links header-right">
                        <ul>
                            <li>
                                <div class="header-social">
                                    <span class="social-title">Ikuti Kami:</span>
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-skype"></i></a>
                                </div>
                            </li>
                            {{-- <li class="d-none d-lg-inline-block">
                                <i class="far fa-user"></i><a href="contact.html">Login / Register</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('images/logo-indagkop3.png') }}"
                                    alt="Logo Indagkop" width="140"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                        <li class="hidden-lg">
                                            <a href="{{ route('beranda') }}">Beranda</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Profil</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('vision') }}">Visi dan Misi</a></li>
                                                <li><a href="{{ route('history') }}">Sejarah</a></li>
                                                <li><a href="{{ route('task') }}">Tupoksi</a></li>
                                                <li><a href="{{ route('structure') }}">Struktur Organisasi</a></li>
                                                <li><a href="{{ route('regulation') }}">Arah Kebijakan</a></li>
                                                <li><a href="{{ route('kepala.dinas') }}">Kepala Dinas</a></li>
                                                <li class="menu-item-has-children"><a href="#">Bidang dan UPTD</a>
                                                    <ul class="sub-menu">
                                                        @foreach ($divisions as $item)
                                                            <li><a
                                                                    href="{{ route('division', $item->slug) }}">{{ $item->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Program & Kegiatan</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('renstra.front.index') }}">Renstra</a></li>
                                                <li><a href="{{ route('renja.front.index') }}">Renja</a></li>
                                                <li><a href="{{ route('iku.front.index') }}">IKU</a></li>
                                                <li><a href="#">LKJIP</a></li>
                                                <li><a href="#">LPPD</a></li>
                                                <li><a href="{{ route('sop.front.index') }}">SOP</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Informasi</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('harga.komoditi') }}">Harga Komoditi</a></li>
                                                <li><a href="{{ route('semua.agenda') }}">Agenda</a></li>
                                                <li><a href="#">Sidin (Sistem informasi industry)</a></li>
                                                <li><a href="#">Data UKM & Koperasi</a></li>
                                                <li><a href="#">Data Perdagangan Ekspor</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('semua.berita') }}">Berita</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Layanan</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Standar Pelayanan</a></li>
                                                <li><a href="#">SP4N Lapor</a></li>
                                                <li><a href="https://Bit.ly/SKMINDAGKOP" target="_blank">Survey Kepuasan
                                                        Masyarakat</a></li>
                                                <li><a href="#">WBS</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">PPID</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('profil.ppid') }}">Profile PPID</a></li>
                                                <li><a href="{{ route('struktur.ppid') }}">Struktur organisasi <br>
                                                        PPID</a></li>
                                                <li><a href="{{ route('dasar.hukum.ppid') }}">Dasar Hukum</a></li>
                                                <li><a href="{{ route('maklumat.pelayanan.ppid') }}">Maklumat
                                                        pelayanan</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Panduan</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="{{ route('tatacara.permohonan.ppid') }}">Tata Cara <br> Permohonan</a></li>
                                                        {{-- <li><a href="{{ route('tatacara.pengajuan.ppid') }}">Tata Cara <br>Pengajuan</a></li> --}}
                                                        <li><a href="{{ route('standar.biaya.ppid') }}">Biaya</a></li>
                                                        <li><a href="{{ route('waktu.layanan.ppid') }}">Waktu dan <br> Layanan</a></li>
                                                    </ul>
                                                </li>
                                                {{-- <li><a href="{{ route('permohonan.informasi.ppid') }}">Permohonan
                                                        informasi</a></li> --}}
                                                <li><a href="{{ route('permohonan.keberatan.informasi.ppid') }}">Permohonan
                                                        Keberatan <br> Informasi</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="#">Info public</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Serta merta</a></li>
                                                        <li><a href="#">Berkala</a></li>
                                                        <li><a href="#">Dikecualikan</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                        class="far fa-bars"></i></button>
                            </div>
                            <div class="col-auto d-none d-xl-block">
                                <div class="header-button">
                                    {{-- <button type="button" class="icon-btn searchBoxToggler"><i
                                            class="far fa-search"></i></button>
                                    <a href="wishlist.html" class="icon-btn">
                                        <i class="far fa-heart"></i>
                                        <span class="badge">3</span>
                                    </a>
                                    <button type="button" class="icon-btn sideMenuToggler">
                                        <i class="far fa-shopping-cart"></i>
                                        <span class="badge">5</span>
                                    </button> --}}
                                    <a href="{{ route('indagkop.tv') }}" class="th-btn ml-25">Indagkop TV <i
                                            class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
