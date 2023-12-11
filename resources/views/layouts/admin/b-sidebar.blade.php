<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-primary">
      <img src="{{asset('bk/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sysadmin-Web</span>
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

          <li class="nav-header">Menu</li>

          <li class="nav-item
          {{request()->is('profile*') ? 'menu-open' : ''}}
          {{request()->is('history*') ? 'menu-open' : ''}}
          {{request()->is('task*') ? 'menu-open' : ''}}
          {{request()->is('regulation*') ? 'menu-open' : ''}}
          {{request()->is('vision*') ? 'menu-open' : ''}}
          {{request()->is('policy*') ? 'menu-open' : ''}}
                                                                                            ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
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
                <a href="" class="nav-link">
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
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Program & Kinerja</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan & Capaian</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Monitoring & Evaluasi</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Neraca Keuangan</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOP</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Bidang & UPTD
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('division.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Unit Kerja</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pegawai</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Artikel
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('post.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Informasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Harga Komoditi</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('category.index')}}" class="nav-link {{request()->is('category*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('banner.index')}}" class="nav-link {{request()->is('banner*') ? 'active' : ''}}">
              <i class="nav-icon fas fa-draw-polygon"></i>
              <p>
                Banner
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
