<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-primary">
      <img src="{{asset('bk/dist/img/kaltim.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Sysadmin-Web</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('bk/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">???</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-header"><strong>Menu</strong></li>

          <li class="nav-item
            {{request()->is('profile*') ? 'menu-open' : ''}}
            {{request()->is('history*') ? 'menu-open' : ''}}
            {{request()->is('task*') ? 'menu-open' : ''}}
            {{request()->is('regulation*') ? 'menu-open' : ''}}
            {{request()->is('vision*') ? 'menu-open' : ''}}
            {{request()->is('policy*') ? 'menu-open' : ''}}
            {{request()->is('structure*') ? 'menu-open' : ''}}
                                                                        ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Tentang Kami
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profile.index')}}" class="nav-link {{request()->is('profile*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil Kepala Dinas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('history.index')}}" class="nav-link {{request()->is('history*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah Dinas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('vision.index')}}" class="nav-link {{request()->is('vision*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('structure.index')}}" class="nav-link {{request()->is('structure*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('task.index')}}" class="nav-link {{request()->is('task*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas Pokok & Fungsi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('regulation.index')}}" class="nav-link {{request()->is('regulation*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kebijakan Mutu</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('policy.index')}}" class="nav-link {{request()->is('policy*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peraturan & Kebijakan</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('renstra*') ? 'menu-open' : ''}}
            {{request()->is('filerenstra*') ? 'menu-open' : ''}}
            {{request()->is('iku*') ? 'menu-open' : ''}}
            {{request()->is('fileiku*') ? 'menu-open' : ''}}
            {{request()->is('perform*') ? 'menu-open' : ''}}
            {{request()->is('fileperform*') ? 'menu-open' : ''}}
            {{request()->is('achieve*') ? 'menu-open' : ''}}
            {{request()->is('fileachieve*') ? 'menu-open' : ''}}
            {{request()->is('evaluation*') ? 'menu-open' : ''}}
            {{request()->is('fileevaluation*') ? 'menu-open' : ''}}
            {{request()->is('neraca*') ? 'menu-open' : ''}}
            {{request()->is('fileneraca*') ? 'menu-open' : ''}}
            {{request()->is('sop*') ? 'menu-open' : ''}}
            {{request()->is('filesop*') ? 'menu-open' : ''}}
                                                                            ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Program & Kegiatan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('renstra.index')}}" class="nav-link {{ request()->is('renstra*') || request()->is('filerenstra*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rencana Strategis</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('iku.index') }}" class="nav-link {{ request()->is('iku*') || request()->is('fileiku*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Indikator Kinerja Utama</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('perform.index')}}" class="nav-link {{request()->is('perform*') || request()->is('fileperform*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program & Kinerja</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('achieve.index')}}" class="nav-link {{request()->is('achieve*') || request()->is('fileachieve*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan & Capaian</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('evaluation.index')}}" class="nav-link {{request()->is('evalution*') || request()->is('fileevaluation*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitoring & Evaluasi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('neraca.index')}}" class="nav-link {{request()->is('neraca*') || request()->is('fileneraca*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca Keuangan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sop.index')}}" class="nav-link {{request()->is('sop*') || request()->is('filesop*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOP</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('division*') ? 'menu-open' : ''}}
            {{request()->is('employee*') ? 'menu-open' : ''}}
                                                                        ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Bidang & UPTD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('division.index')}}" class="nav-link {{request()->is('division*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Kerja</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link {{request()->is('employee*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('post*') ? 'menu-open' : ''}}
            {{request()->is('info*') ? 'menu-open' : ''}}
                                                                ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link {{request()->is('post*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('info.index')}}" class="nav-link {{request()->is('info*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengumuman</p>
                  </a>
                </li>
              </ul>

          </li>

          <li class="nav-item
            {{request()->is('commodity*') ? 'menu-open' : ''}}
            {{request()->is('event*') ? 'menu-open' : ''}}
            {{request()->is('download*') ? 'menu-open' : ''}}
            {{request()->is('filedownload*') ? 'menu-open' : ''}}
            {{request()->is('infographic*') ? 'menu-open' : ''}}
                                                                    ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Informasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('commodity.index')}}" class="nav-link {{request()->is('commodity*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Komoditi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('event.index')}}" class="nav-link {{request()->is('event*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agenda Kegiatan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('download.index')}}" class="nav-link {{request()->is('download*') || request()->is('filedownload*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Unduhan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('infographic.index')}}" class="nav-link {{request()->is('infographic*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Infografis</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link
            {{request()->is('video*') ? 'menu-open' : ''}}
            {{request()->is('photo*') ? 'menu-open' : ''}}
            {{request()->is('banner*') ? 'menu-open' : ''}}
                                                                ">
              <i class="nav-icon fas fa-film"></i>
              <p>
                Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('photo.index')}}" class="nav-link {{request()->is('photo*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri Foto</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('video.index')}}" class="nav-link {{request()->is('video*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Galeri Video</p>
                  </a>
                </li>
            </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('banner.index')}}" class="nav-link {{request()->is('banner*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Slider Banner</p>
                  </a>
                </li>
            </ul>

          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link {{request()->is('category*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <!-- -->
          <li class="nav-header"><strong>PPID</strong></li>

          <li class="nav-item
            {{request()->is('dip*') ? 'menu-open' : ''}}
            {{request()->is('filedip*') ? 'menu-open' : ''}}
                                                            ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Info Publik
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dip.index')}}" class="nav-link {{request()->is('dip*') || request()->is('filedip*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data & Kategori DIP</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('profilppid*') ? 'menu-open' : ''}}
            {{request()->is('visionppid*') ? 'menu-open' : ''}}
            {{request()->is('lawppid*') ? 'menu-open' : ''}}
            {{request()->is('maklumatppid*') ? 'menu-open' : ''}}
            {{request()->is('serviceppid*') ? 'menu-open' : ''}}
            {{request()->is('costppid*') ? 'menu-open' : ''}}

                                                            ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Data PPID
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profilppid.index')}}" class="nav-link {{request()->is('profilppid*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil PPID</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('visionppid.index')}}" class="nav-link {{request()->is('visionppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Visi & Misi PPID</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Struktur Organisasi PPID</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('lawppid.index')}}" class="nav-link {{request()->is('lawppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dasar Hukum</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('maklumatppid.index')}}" class="nav-link {{request()->is('maklumatppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Maklumat Pelayanan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tata Cara Permohonan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tata Cara Pengajuan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tata Cara Sengketa Ke KI</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Formulir Permohonan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengajuan Keberatan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('serviceppid.index')}}" class="nav-link {{request()->is('serviceppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Waktu & Layanan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('costppid.index')}}" class="nav-link {{request()->is('costppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Standar Biaya</p>
                  </a>
                </li>
            </ul>

          </li>

          <!-- -->
          <li class="nav-header"><strong>BPSK</strong></li>

          <li class="nav-item">
            <a href="#" class="nav-link
            {{request()->is('dip*') ? 'menu-open' : ''}}
            {{request()->is('filedip*') ? 'menu-open' : ''}}
                                                                ">
              <i class="nav-icon fas fa-universal-access"></i>
              <p>
                Data BPSK
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dip.index')}}" class="nav-link {{request()->is('dip*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori DIP</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data DIP</p>
                  </a>
                </li>
            </ul>

          </li>
          <!-- -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
