<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light text-warning">SMK - Golden</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->email ? Auth::user()->email : 'Siswa' }}</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/siswa" class="nav-link">
            <i class="nav-icon fas fa-circle text-warning"></i>
            <p class="text text-warning">Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/siswa/formulir" class="nav-link">
            <i class="nav-icon fas fa-user text-warning"></i>
            <p class="text text-warning">Formulir Pendaftaran</p>
          </a>
        </li>

        <li class="nav-item" style="<?php echo session()->get('id_status_verifikasi') == '1' ? 'display:none;' : ' '; ?>">
          <a href="/siswa/cetak_kwitansi/{{ session()->get('id') }}" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p class="text-warning">Cetak Kwitansi</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/siswa/data_pengumuman" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p class="text-warning">Pengumuman</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="/siswa/data_kelas" class="nav-link">
            <i class="nav-icon far fa-circle text-warning"></i>
            <p class="text-warning">Data Pembagian Kelas</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
