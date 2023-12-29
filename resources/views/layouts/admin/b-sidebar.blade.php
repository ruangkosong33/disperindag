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
            @php
            $splitName = explode(' ',Auth::user()->name);
            @endphp
            <img src="https://ui-avatars.com/api/?name={{$splitName[0]}}&background=random" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
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
            {{request()->is('admin/profile*') ? 'menu-open' : ''}}
            {{request()->is('admin/history*') ? 'menu-open' : ''}}
            {{request()->is('admin/task*') ? 'menu-open' : ''}}
            {{request()->is('admin/regulation*') ? 'menu-open' : ''}}
            {{request()->is('admin/vision*') ? 'menu-open' : ''}}
            {{request()->is('admin/policy*') ? 'menu-open' : ''}}
            {{request()->is('admin/structure*') ? 'menu-open' : ''}}
            {{request()->is('admin/kadis*') ? 'menu-open' : ''}}
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
                <a href="{{route('profile.index')}}" class="nav-link {{request()->is('admin/profile*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profil Dinas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('history.index')}}" class="nav-link {{request()->is('admin/history*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah Dinas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('vision.index')}}" class="nav-link {{request()->is('admin/vision*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi & Misi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('kadis.index')}}" class="nav-link {{request()->is('admin/kadis*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Kepala Dinas</p>
                  </a>
                </li>
              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('structure.index')}}" class="nav-link {{request()->is('admin/structure*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Struktur Organisasi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('task.index')}}" class="nav-link {{request()->is('admin/task*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas Pokok & Fungsi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('regulation.index')}}" class="nav-link {{request()->is('admin/regulation*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kebijakan Mutu</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('policy.index')}}" class="nav-link {{request()->is('admin/policy*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Peraturan & Kebijakan</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/renstra*') ? 'menu-open' : ''}}
            {{request()->is('admin/filerenstra*') ? 'menu-open' : ''}}
            {{request()->is('admin/iku*') ? 'menu-open' : ''}}
            {{request()->is('admin/fileiku*') ? 'menu-open' : ''}}
            {{request()->is('admin/perform*') ? 'menu-open' : ''}}
            {{request()->is('admin/fileperform*') ? 'menu-open' : ''}}
            {{request()->is('admin/achieve*') ? 'menu-open' : ''}}
            {{request()->is('admin/fileachieve*') ? 'menu-open' : ''}}
            {{request()->is('admin/evaluation*') ? 'menu-open' : ''}}
            {{request()->is('admin/fileevaluation*') ? 'menu-open' : ''}}
            {{request()->is('admin/neraca*') ? 'menu-open' : ''}}
            {{request()->is('admin/fileneraca*') ? 'menu-open' : ''}}
            {{request()->is('admin/sop*') ? 'menu-open' : ''}}
            {{request()->is('admin/filesop*') ? 'menu-open' : ''}}
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
                <a href="{{route('renstra.index')}}" class="nav-link {{ request()->is('admin/renstra*') || request()->is('admin/filerenstra*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rencana Strategis</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('iku.index') }}" class="nav-link {{ request()->is('admin/iku*') || request()->is('admin/fileiku*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Indikator Kinerja Utama</p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('perform.index')}}" class="nav-link {{request()->is('admin/perform*') || request()->is('admin/fileperform*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program & Kinerja</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('achieve.index')}}" class="nav-link {{request()->is('admin/achieve*') || request()->is('admin/fileachieve*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan & Capaian</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('evaluation.index')}}" class="nav-link {{request()->is('admin/evalution*') || request()->is('admin/fileevaluation*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitoring & Evaluasi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('neraca.index')}}" class="nav-link {{request()->is('admin/neraca*') || request()->is('admin/fileneraca*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca Keuangan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sop.index')}}" class="nav-link {{request()->is('admin/sop*') || request()->is('admin/filesop*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOP</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/division*') ? 'menu-open' : ''}}
            {{request()->is('admin/employee*') ? 'menu-open' : ''}}
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
                <a href="{{route('division.index')}}" class="nav-link {{request()->is('admin/division*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Kerja</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link {{request()->is('admin/employee*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/post*') ? 'menu-open' : ''}}
            {{request()->is('admin/info*') ? 'menu-open' : ''}}
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
                <a href="{{route('post.index')}}" class="nav-link {{request()->is('admin/post*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('info.index')}}" class="nav-link {{request()->is('admin/info*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pengumuman</p>
                  </a>
                </li>
              </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/commodity*') ? 'menu-open' : ''}}
            {{request()->is('admin/event*') ? 'menu-open' : ''}}
            {{request()->is('admin/download*') ? 'menu-open' : ''}}
            {{request()->is('admin/filedownload*') ? 'menu-open' : ''}}
            {{request()->is('admin/infographic*') ? 'menu-open' : ''}}
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
                <a href="{{route('commodity.index')}}" class="nav-link {{request()->is('admin/commodity*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Komoditi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('event.index')}}" class="nav-link {{request()->is('admin/event*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agenda Kegiatan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('download.index')}}" class="nav-link {{request()->is('admin/download*') || request()->is('admin/filedownload*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Unduhan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('infographic.index')}}" class="nav-link {{request()->is('admin/infographic*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Infografis</p>
                  </a>
                </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link
            {{request()->is('admin/video*') ? 'menu-open' : ''}}
            {{request()->is('admin/photo*') ? 'menu-open' : ''}}
            {{request()->is('admin/banner*') ? 'menu-open' : ''}}
                                                                    ">
              <i class="nav-icon fas fa-film"></i>
              <p>
                Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('photo.index')}}" class="nav-link {{request()->is('admin/photo*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Galeri Foto</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('video.index')}}" class="nav-link {{request()->is('admin/video*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Galeri Video</p>
                  </a>
                </li>
            </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('banner.index')}}" class="nav-link {{request()->is('admin/banner*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Slider Banner</p>
                  </a>
                </li>
            </ul>

          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link {{request()->is('admin/category*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <!-- -->
          <li class="nav-header"><strong>PPID</strong></li>

          <li class="nav-item
            {{request()->is('admin/dip*') ? 'menu-open' : ''}}
            {{request()->is('admin/filedip*') ? 'menu-open' : ''}}
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
                <a href="{{route('dip.index')}}" class="nav-link {{request()->is('admin/dip*') || request()->is('admin/filedip*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data & Kategori DIP</p>
                </a>
              </li>
            </ul>

          </li>

          <li class="nav-item
            {{request()->is('admin/profileppid*') ? 'menu-open' : ''}}
            {{request()->is('admin/visionppid*') ? 'menu-open' : ''}}
            {{request()->is('admin/lawppid*') ? 'menu-open' : ''}}
            {{request()->is('admin/maklumatppid*') ? 'menu-open' : ''}}
            {{request()->is('admin/serviceppid*') ? 'menu-open' : ''}}
            {{request()->is('admin/costppid*') ? 'menu-open' : ''}}
            {{request()->is('admin/structureppid*') ? 'menu-open' : ''}}
            {{request()->is('admin/guideinformation*') ? 'menu-open' : ''}}
            {{request()->is('admin/guidescruple*') ? 'menu-open' : ''}}
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
                <a href="{{route('profileppid.index')}}" class="nav-link {{request()->is('admin/profileppid*') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile PPID</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('visionppid.index')}}" class="nav-link {{request()->is('admin/visionppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Visi & Misi PPID</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('structureppid.index')}}" class="nav-link {{request()->is('admin/structureppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Struktur Organisasi PPID</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('lawppid.index')}}" class="nav-link {{request()->is('admin/lawppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dasar Hukum</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('maklumatppid.index')}}" class="nav-link {{request()->is('admin/maklumatppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Maklumat Pelayanan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('guideinformation.index')}}" class="nav-link {{request()->is('admin/guideinformation*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tata Cara Permohonan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('guidescruple.index')}}" class="nav-link {{request()->is('admin/guidescruple*') ? 'active' : ''}}">
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
                  <a href="{{route('serviceppid.index')}}" class="nav-link {{request()->is('admin/serviceppid*') ? 'active' : ''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Waktu & Layanan</p>
                  </a>
                </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('costppid.index')}}" class="nav-link {{request()->is('admin/costppid*') ? 'active' : ''}}">
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
            {{request()->is('admin/dip*') ? 'menu-open' : ''}}
            {{request()->is('admin/filedip*') ? 'menu-open' : ''}}
                                                                    ">
              <i class="nav-icon fas fa-universal-access"></i>
              <p>
                Data BPSK
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('dip.index')}}" class="nav-link {{request()->is('admin/dip*') ? 'active' : ''}}">
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
