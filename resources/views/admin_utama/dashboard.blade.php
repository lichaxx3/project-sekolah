<!DOCTYPE html>
<html lang="en">

@include('admin_utama.components.header')
{{-- @dd($get_all); --}}
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        @include('admin_utama.components.navbar')

        @include('admin_utama.components.sidebar')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-color">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item "><a href="#" class="text-color">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box">
                                <div class="inner">
                                    <h3 ><?= $user_countsbelum ?></h3>
                                    <p>Siswa belum mengisi formulir</p>
                                </div>
                                <a href="/admin_utama/data_request" class="text-color small-box-footer">Selengkapnya <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box">
                                <div class="inner">
                                    <h3><?= $user_counts ?></h3>
                                    <p>siswa telah dikonfirmasi</p>
                                </div>
                                <a href="/admin_utama/data_siswa" class="small-box-footer">Selengkapnya <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box">
                                <div class="inner">
                                    <h3><?= $panitia_counts ?></h3>
                                    <p>Jumlah Akun Tata Usaha</p>
                                </div>
                                <a href="/admin_utama/data_panitia" class="small-box-footer">Selengkapnya <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin_utama.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('admin_utama.components.js')

</body>

</html>
