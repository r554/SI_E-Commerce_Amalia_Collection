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
                            <h1 class="m-0">Dashboard Manager</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard Manager</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!--  Ini Bagian Content -->








            <section class="content">
                <div class="container-fluid">
                    <!-- Card di atas  -->
                    <div class="row">
                        <div class="col-md-2 ">
                            <div class="info-box bg-danger">
                                <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>

                                <div class="info-box-content text-dark">
                                    <span class="info-box-text">Pesanan Hari ini</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <a href="#" class="small-box-footer text-light">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="info-box bg-warning">
                                <span class="info-box-icon"><i class="fas fa-shopping-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Produk Terjual</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 60%"></div>
                                    </div>
                                    <a href="#" class="small-box-footer text-light">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="info-box mb-3 bg-success ">
                                <span class="info-box-icon "><i class="fas fa-chart-pie"></i></span>

                                <div class="info-box-content text-dark">
                                    <span class="info-box-text">Stok Produk</span>
                                    <span class="info-box-number">2,000</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                    <a href="#" class="small-box-footer text-light">
                                        info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="info-box mb-3 bg-info">
                                <span class="info-box-icon"><i class="fas fa-user-plus"></i></span>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text">Customer</span>
                                    <span class="info-box-number">92,050</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <a href="#" class="small-box-footer text-light">
                                        info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="info-box mb-3 bg-primary">
                                <span class="info-box-icon"><i class="fas fa-users"></i></span>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text">Karyawan</span>
                                    <span class="info-box-number">92,050</span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <a href="#" class="small-box-footer text-light">
                                        info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--Akhir Card di atas  -->

                        <br> <br>



                        <!--Grafik penjualan  -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
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

                                            <div class="col-md-4">
                                            </div>

                                            <div class="col-md-12">
                                                <p class="text-center">
                                                    <strong>Penjualan: 1 Jan, 2014 - 30 Jul, 2020</strong>
                                                </p>

                                                <div class="chart">
                                                    <canvas id="salesChart" height="180"
                                                        style="height: 180px;"></canvas>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Akhir Grafik penjualan  -->


                        <br> <br>


                        <!--Tablel Laporan Pesanan Hari ini-->

                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h3 class="card-title">Pesanan Hari Ini </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body bg-light">
                                    <table id="pesananhari2"
                                        class="table table-bordered table-striped bg-light text-center">
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
                                            foreach ($ronaldo as $a) {
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
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                        <!-- Tablel Laporan Pesanan Hari ini-->


                        <br><br><br>

                        <!-- Tablel Laporan Stok Produk-->

                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header bg-secondary">
                                    <h3 class="card-title">Stok Produk </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="card-body  bg-light">
                                    <table id="stok2" class="table table-bordered table-striped bg-light text-center"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID Produk</th>
                                                <th> Nama Produk</th>
                                                <th>ID Kategori </th>
                                                <th>Nama Kategori</th>
                                                <th>Stok Tersedia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                                                      
		                                        $no = 1;
		                                        foreach ($messi as $d) {
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
                                                    <p><?php echo $d->id_kategori; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_kategori; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->jumlah_produk; ?> </p>
                                                </td>

                                            </tr>
                                            <?php } ?>
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Tablel Laporan Stok Produk-->



                    </div>
                </div>
            </section>















            <!--  Ini Akhir Bagian Content -->





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

    <script src="<?php echo base_url() ?>assets/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

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

    <script src="<?php echo base_url() ?>assets/Admin/dist/js/adminlte.min.js"></script>

    <script src="<?php echo base_url() ?>assets/Admin/dist/js/demo.js"></script>


    <!-- Data Table-->

    <script>
    $(document).ready(function() {
        $('#pesananhari2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#stok2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>


</body>

</html>