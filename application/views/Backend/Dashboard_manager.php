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
                                    <span class="info-box-text">Pesanan Masuk</span>
                                    <span class="info-box-number"><?php echo $maradona ?></span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan') ?>"
                                        class="small-box-footer text-light">
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
                                    <span class="info-box-number"><?php echo $dora ?></span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 60%"></div>
                                    </div>
                                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_selesai') ?>"
                                        class="small-box-footer text-light">
                                        More info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="info-box mb-3 bg-success ">
                                <span class="info-box-icon "><i class="fas fa-chart-pie"></i></span>

                                <?php
                                $total = 0;
                                $no = 1;
                                foreach ($upin as $rows) {
                                    $jmlh_stok[] = $rows->qty;
                                    $stok_total = array_sum($jmlh_stok);

                                ?>
                                <?php } ?>
                                <div class="info-box-content text-dark">
                                    <span class="info-box-text">Stok Produk</span>
                                    <span class="info-box-number"><?php echo $stok_total ?></span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 90%"></div>
                                    </div>
                                    <a href="<?php echo base_url('data_produk/tampil') ?>"
                                        class="small-box-footer text-light">
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
                                    <span class="info-box-number"><?php echo $ipin ?></span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                                    <a href="<?php echo base_url('Admin/data_customer/tampil') ?>"
                                        class="small-box-footer text-light">
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
                                    <span class="info-box-number"><?php echo $indah ?></span>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>
                                    <a href="<?php echo base_url('Admin/data_karyawan/tampil') ?>"
                                        class="small-box-footer text-light">
                                        info <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!--Akhir Card di atas  -->



                        <br> <br>


                        <!--Tablel Laporan Pesanan Hari ini-->

                        <div class="col-md-12">

                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="card-title">Pesanan Masuk </h3>
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
                                    <table id="pesanan2"
                                        class="table table-bordered table-striped bg-light text-center">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>ID Pemesanan</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th> Nama Pelanggan</th>
                                                <th>Jumlah Produk Dipesan</th>
                                                <th>Total Harga </th>
                                                <th>Status Pemesanan</th>
                                                <th>Aksi</th>
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
                                                    <p><?php echo $a->tanggal_order; ?></p>

                                                </td>
                                                <td>
                                                    <p><?php echo $a->nama_penerima; ?></p>

                                                </td>
                                                <td>
                                                    <p><?php echo $a->grand_qty; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a->grand_total; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a->status; ?> </p>
                                                </td>
                                                <td>

                                                    <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan') ?>"
                                                        class="btn btn-info btn-sm active" role="button"
                                                        aria-pressed="true">Detail</a>
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
                                <div class="card-header bg-info">
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
                                                <th>No</th>
                                                <th>ID Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Jenis</th>
                                                <th>Warna</th>
                                                <th>Stok Tersedia</th>
                                                <th>Aksi</th>
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
                                                    <p><?php echo $d->id_produk; ?></p>

                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_produk; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $d->nama_kategori; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_jenis; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->warna; ?> </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $d->qty; ?> </p>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('data_produk/tampil') ?>"
                                                        class="btn btn-info btn-sm active" role="button"
                                                        aria-pressed="true">Detail</a>
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

        <?php $this->load->view('Backend/template/footer'); ?>



    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>





    <script>
    $(function() {
        $("#pesanan2").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["pdf", "print", ]
        }).buttons().container().appendTo('#pesanan2_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
    <script>
    $(function() {
        $("#stok2").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["pdf", "print", ]
        }).buttons().container().appendTo('#stok2_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>


</body>

</html>