<!DOCTYPE html>
<html lang="en">

@include('siswa.components.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper bg-dark">



        @include('siswa.components.navbar')

        @include('siswa.components.sidebar')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper bg-dark">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-warning">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#" class="text-warning">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content ">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row ">
                        <div class="col-lg-12 col-12 ">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $user_counts ?></h3>

                                    <p>Jumlah Siswa Diterima Di SMK Golden</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="/siswa/data_kelas" class="small-box-footer">Selengkapnya<i
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

        @include('siswa.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('siswa.components.js')

</body>

</html>
