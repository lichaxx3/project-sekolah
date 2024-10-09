<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light text-color">SMK Golden</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar ">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image ">
        <img src="{{ asset('dist/img/user2-160x160.png') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info ">
        <a href="#" class="d-block text-color">{{ session()->get('username') }}</a>
      </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2 "  >
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/admin_utama" class="nav-link ">
            <i class="nav-icon fas fa-circle "></i>
            <p class="">Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_panitia" class="nav-link">
            <i class="nav-icon fas fa-user "></i>
            <p class="">Data Tata Usaha</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_request" class="nav-link">
            <i class="nav-icon fas fa-user "></i>
            <p class="">Data Siswa Lulus Tes</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_pendaftar" class="nav-link">
            <i class="nav-icon fas fa-user "></i>
            <p class="">Data Akun Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_siswa" class="nav-link">
            <i class="nav-icon fas fa-user "></i>
            <p class="">Data Formulir Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/halaman-report" class="nav-link">
            <i class="nav-icon fas fa-file "></i>
            <p class="">Report Data Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin_utama/data_pengumuman" class="nav-link">
            <i class="nav-icon far fa-circle "></i>
            <p class="">Data Pengumuman</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
