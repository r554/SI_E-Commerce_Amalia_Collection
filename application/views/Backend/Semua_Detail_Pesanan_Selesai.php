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
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url() ?>assets/Frontend_mobi/assets/images/amalialogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                            <h1 class="m-0">Detail Pesanan <a href="<?php echo base_url('Admin/Pesanan/tampil_semua_pesanan_selesai') ?>"> <button class="btn btn-info btn-sm rounded-pill"><span class="fa fa-arrow-left"></span> kembali </button></a></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pemesanan Selesai</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Ini Bagian Konten -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-light">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Pemesanan</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Id Order</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->id_order ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Jumlah Produk</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->grand_qty ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Total Produk</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo "Rp. "   . number_format($pesanan['0']->grand_total) . ",-" ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Tanggal Order</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->tanggal_order; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Kurir Pengiriman</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->jasa_pengiriman; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Nomor Resi</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->nomor_resi; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4">Status</label>
                                            <div class="col-sm-7 text-sm">
                                                <div class="alert alert-success" role="alert">
                                                    Selesai
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card card-light">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Pengiriman</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Nama Penerima</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->nama_penerima; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Email </label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->email_penerima ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Nomor Telepon</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->no_penerima ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Alamat</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->alamat_penerima ?></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Kode POS</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $pesanan['0']->kode_pos ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                        </div>
                        <!--col-->
                    </div>
                    <!--Row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Warna</th>
                                                <th>Deskripsi</th>
                                                <th class="text-center">Jumlah</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($pesanan as $tampil_pesanan) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $tampil_pesanan->nama_produk; ?></td>
                                                    <td><?php echo $tampil_pesanan->warna; ?></td>
                                                    <td><?php echo $tampil_pesanan->deskripsi; ?></td>
                                                    <td class="text-center"><?php echo $tampil_pesanan->sub_qty; ?></td>

                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->

                </div> <!-- /Ini Akhir Konten /wrapper -->
            </section>
        </div>

        <!-- Footer -->
        <?php $this->load->view('Backend/template/footer'); ?>
        <!-- End Footer -->
    </div>
    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>
</body>

</html>