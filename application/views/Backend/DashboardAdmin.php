<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Collection</title>

    <?php $this->load->view('Backend/template/head'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('Backend/template/navbar'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?php echo base_url() ?>assets/Admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Amalia Collection</span>
            </a>

            <!-- Sidebar -->
            <?php $this->load->view('Backend/template/sidebar'); ?>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content ini Bagian Breadcom -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->

                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>Pesanan Hari Ini</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>730</h3>
                                    <p>Produk Terjual</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>213<sup style="font-size: 20px"></sup></h3>
                                    <p>Jumlah Stok</p>





                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <br>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-light">
                                    <h5 class="card-title">Grafik Penjualan</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="text-center">
                                                <strong>Penjualan: 1 Jan, 2014 - 30 Jul, 2020</strong>
                                            </p>
                                            <div class="chart">
                                                <!-- Sales Chart Canvas -->
                                                <canvas id="salesChart" height="200" style="height: 180px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- TABLE: STOK PRODUk -->

                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h3 class="card-title">DataTable - STOK PRODUK</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body text-center bg-light ">
                                    <table id="example1" class="table table-bordered table-striped bg-light">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Stok Tersedia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                                                      
		                                        $no = 1;
		                                        foreach ($user as $d) {
		                                    	?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->id_kategori; ?></p>

                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_produk; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_kategori; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->jumlah_produk; ?> </p>
                                                </td>

                                            </tr>


                                            <?php } ?>
                                    </table>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-info float-right">Tambah
                                        Stok</a>
                                </div>
                            </div>

                            <!-- TABLE: STOK PRODUk -->
                        </div>
                    </div>

                    <br>


                    <!-- Tablel Laporan Pesanan Hari ini-->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header bg-light">
                                    <h3 class="card-title">DataTable - Pesanan Hari Ini </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body text-center bg-light">
                                    <table id="example3" class="table table-bordered table-striped bg-light">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID Pemesanan</th>
                                                <th> Pembeli</th>
                                                <th>ID Produk </th>
                                                <th>Nama Produk</th>
                                                <th>ID Kategori</th>
                                                <th>Kategori</th>
                                                <th>Jumlah</th>
                                                <th>Total Harga</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php                                            
                                            $no = 1;
                                            foreach ($user2 as $a) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>
                                                </td>
                                                <td>
                                                    <p><?php echo $a->id_order; ?></p>

                                                </td>
                                                <td>
                                                    <p><?php echo $a->nama_pelanggan; ?></p>

                                                </td>

                                                <td>
                                                    <p><?php echo $a->id_produk; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $a->nama_produk; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $a->id_kategori; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a->nama_kategori; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a->jumlah; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a->grand_total; ?> </p>
                                                </td>
                                            </tr>


                                            <?php } ?>
                                    </table>
                                    <div class="card-footer clearfix">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-info float-right">Pesanan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tablel Laporan Pesanan Hari ini-->

                </div>

            </section>

        </div>






        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020 <a href="https://adminlte.io">Indanah Group</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0-pre
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>



    <!-- Data Table-->
    <script src="<?php echo base_url() ?>assets/Admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/Admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/Admin/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print", ]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,

            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>


    <script>
    $(function() {
        $("#example3").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print", ]
        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
        $('#example4').DataTable({
            "paging": true,
            "lengthChange": false,

            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>




    <!-- Data Table-->








</body>

</html>