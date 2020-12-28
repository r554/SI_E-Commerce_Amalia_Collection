<?php

if (!$this->session->userdata('nama')) {
    redirect(base_url("Auth_Admin"));
}

?>

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
            <a href="<?= base_url('Homepage') ?>" class="brand-link">
                <img src="<?= base_url() ?>assets/Frontend_mobi/assets/images/amalialogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Amalia</b> Collection</span>
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
                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo $kaka ?></h3>
                                    <p>Pesanan Masuk</p>
                                </div>

                                <div class="icon">
                                    <i class="fas fa-cart-plus"></i>
                                </div>
                                <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan') ?>"
                                    class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-warning">
                                <div class="inner  text-white">
                                    <h3><?php echo $user3 ?></h3>
                                    <h6 class="text-white">Verifikasi Pembayaran</h6>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_verifikasi_pembayaran') ?>"
                                    class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?php echo $user4 ?></h3>
                                    <h6 class="text-white">Pesanan Perlu Dikirim</h6>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_perlu_dikirim') ?>"
                                    class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo $dora ?></h3>
                                    <p>Produk Terjual</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-people-carry"></i>
                                </div>
                                <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_selesai') ?>"
                                    class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small card -->
                            <div class="small-box bg-secondary">
                                <div class="inner">
                                    <h3><?php echo $user5 ?></h3>
                                    <p>Pesanan Dibatalkan</p>
                                </div>
                                <div class="icon">
                                    <i class="far fa-window-close"></i>
                                </div>
                                <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_dibatalkan') ?>"
                                    class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>




                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small card -->


                            <?php
                            $total = 0;
                            $no = 1;
                            foreach ($jarjit as $rows) {
                                $jmlh_stok[] = $rows->qty;
                                $stok_total = array_sum($jmlh_stok);

                            ?>
                            <?php } ?>
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3><?php echo $stok_total ?><sup style="font-size: 20px"></sup></h3>
                                    <p>Stok Produk</p>


                                </div>
                                <div class="icon">
                                    <i class="fas fa-cubes"></i>
                                </div>
                                <a href="<?php echo base_url('data_produk/tampil') ?>" class="small-box-footer">
                                    More info <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>


                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- TABLE: STOK PRODUk -->

                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 class="card-title">DATA STOK PRODUK</h3>
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
                                <div class="card-body  bg-light ">
                                    <table id="example1"
                                        class="table table-bordered table-striped bg-light text-center">

                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <!-- <th>Jenis</th> -->
                                                <th>Warna</th>
                                                <th>Stok Tersedia</th>
                                                <th>Aksi</th>
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
                                                    <p><?php echo $d->id_produk; ?></p>

                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_produk; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->nama_kategori; ?> </p>
                                                </td>

                                                <!-- <td>
                                                    <p><?php echo $d->nama_jenis; ?> </p>
                                                </td> -->

                                                <td>
                                                    <p><?php echo $d->warna; ?> </p>
                                                </td>

                                                <td>
                                                    <p><?php echo $d->qty; ?> </p>
                                                </td>
                                                <td>

                                                    <a href="<?php echo base_url('data_produk/edit/' . $d->id_produk) ?>"
                                                        class="btn btn-info btn-sm active" role="button"
                                                        aria-pressed="true">Edit Stok</a>
                                                </td>


                                            </tr>
                                            <?php } ?>
                                        </tbody>


                                    </table>

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
                                <div class="card-header bg-info">
                                    <h3 class="card-title">DATA PESANAN MASUK</h3>
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
                                <div class="card-body  bg-light">
                                    <table id="pesananhari" class="table table-bordered table-striped bg-light">
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
                                                    <p>Rp
                                                        <?= str_replace(",", ".", number_format($a->grand_total)); ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p><?php

                                                            if ($a->status == 1) {
                                                                echo "Pesanan Belum Dibayar";
                                                            } elseif ($a->status == 2) {
                                                                echo "Pembayaran Sedang diverifikasi ";
                                                            } elseif ($a->status == 3) {
                                                                echo "Pesanan sedang diproses ";
                                                            } elseif ($a->status == 4)


                                                            ?> </p>
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
                    </div>
                    <!-- Tablel Laporan Pesanan Hari ini-->

                </div>

            </section>


        </div>
        <?php $this->load->view('Backend/template/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>


    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["pdf", "print", ]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
        $("#pesananhari").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["pdf", "print", ]
        }).buttons().container().appendTo('#pesananhari_wrapper .col-md-6:eq(0)');
        $('#example4').DataTable({
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

    <!-- Data Table-->








</body>

</html>