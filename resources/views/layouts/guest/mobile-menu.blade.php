<!--==============================
    Mobile Menu
  ============================== -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo-indagkop3.png') }}" alt="Edura"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="">
                    <a href="{{ url('/') }}">Home</a>
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

                        <li class="menu-item-has-children">
                            <a href="#">Bidang dan UPTD</a>
                            <ul class="sub-menu">
                                @foreach ($divisions as $item)
                                    <li><a href="{{ route('division', $item->slug) }}">{{ $item->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Program dan Kegiatan</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('renstra.front.index')}}">Renstra</a></li>
                        <li><a href="{{route('renja.front.index')}}">Renja</a></li>
                        <li><a href="{{route('iku.front.index')}}">IKU</a></li>
                        <li><a href="{{route('iku.front.index')}}">LKJIP</a></li>
                        <li><a href="#">LPPD</a></li>
                        <li><a href="{{route('sop.front.index')}}">SOP</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Informasi</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('harga.komoditi')}}">Harga Komoditi</a></li>
                        <li><a href="{{route('semua.agenda')}}">Agenda</a></li>
                        <li><a href="#">Sidin (Sistem Informasi Industri)</a></li>
                        <li><a href="#">Data UKM & Koperasi</a></li>
                        <li><a href="#">Data Perdagangan Ekspor</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{route('semua.berita')}}">Berita</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Layanan</a>
                    <ul class="sub-menu">
                        <li><a href="#">Standar Pelayanan</a></li>
                        <li><a href="#">SP4N Lapor</a></li>
                        <li><a href="https://Bit.ly/SKMINDAGKOP" target="_blank">Survey Kepuasan Masyarakat</a></li>
                        <li><a href="#">WBS</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">PPID</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('profil.ppid')}}">Profil PPID</a></li>
                        <li><a href="{{route('struktur.ppid')}}">Struktur Organisasi PPID</a></li>
                        <li><a href="{{route('dasar.hukum.ppid')}}">Dasar Hukum</a></li>
                        <li><a href="{{route('maklumat.pelayanan.ppid')}}">Maklumat Pelayanan</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Panduan</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('tatacara.permohonan.ppid') }}">Tata Cara Permohonan</a></li>
                                <li><a href="{{ route('standar.biaya.ppid') }}">Biaya</a></li>
                                <li><a href="{{ route('waktu.layanan.ppid') }}">Waktu dan Layanan</a></li>
                            </ul>
                        </li>
                        {{-- <li><a href="{{route('permohonan.informasi.ppid')}}">Permohonan Informasi</a></li> --}}
                        <li><a href="{{route('permohonan.keberatan.informasi.ppid')}}">Permohonan Keberatan Informasi</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Info Publik</a>
                            <ul class="sub-menu">
                                <li><a href="#">Serta Merta</a></li>
                                <li><a href="#">Berkala</a></li>
                                <li><a href="#">Dikecualikan</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
