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
                    <!-- Ini Bagian Konten -->
                    <div class="card mb-3" style="">
                        <div class="row no-gutters">

                            <div class="col-md-3 text-center mt-4">
                                <?php
                                //$no = 1;
                                foreach ($detailCustomer as $u) {
                                    // $u->id_produk
                                ?>
                                <img width="230px" height="230px"
                                    src="<?php echo base_url() ?>assets/Gambar/foto_customer/<?php echo $u->foto_pelanggan ?>">
                            </div>
                            <div class=" col-md-9">
                                <div class="card-body">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Detail Customer</h3>
                                        </div>
                                        <!-- /.card-header -->

                                        <!-- form start -->
                                        <form action="<?php echo base_url() . 'Admin/data_customer/edit' ?>"
                                            method="POST" role="form">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Nama Pelanggan</label>
                                                    <input type="text" class="form-control" name="nama_pelanggan"
                                                        value="<?php echo $u->nama_pelanggan ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>No HP</label>
                                                    <input type="text" class="form-control" name="no_pelanggan"
                                                        value="<?php echo $u->no_pelanggan ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email_pelanggan"
                                                        disabled value="<?php echo $u->email_pelanggan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="text" class="form-control" name="alamat_pelanggan"
                                                        disabled value="<?php echo $u->alamat_pelanggan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kode Pos</label>
                                                    <input type="text" class="form-control" name="kode_pos" disabled
                                                        value="<?php echo $u->kode_pos ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Kabupaten</label>
                                                    <input type="text" class="form-control" name="kabupaten" disabled
                                                        value="<?php echo $u->kabupaten ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Provinsi</label>
                                                    <input type="text" class="form-control" name="provinsi" disabled
                                                        value="<?php echo $u->provinsi ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" name="username_pelanggan"
                                                        disabled value="<?php echo $u->username_pelanggan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" name="password_pelanggan"
                                                        disabled value="<?php echo $u->password_pelanggan ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Daftar</label>
                                                    <input type="text" class="form-control" name="tanggal_daftar"
                                                        disabled value="<?php echo $u->tanggal_daftar ?>">
                                                </div>

                                                <div class="form-group">
                                                    <input type="hidden" name="Status" value="1">
                                                </div>


                                            </div>
                                            <?php } ?>

                                    </div>
                                    <div class="form-group">
                                        <a href="<?= base_url('Admin/data_customer/tampil') ?>"><button type="button"
                                                class="btn btn-success">Kembali</button></a>
                                        <button type="submit" class="btn btn-danger">Non-aktifkan
                                            Akun</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /Ini Akhir Konten -->



                    <!-- Main Footer -->
                    <footer class="main-footer">
                        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
                        All rights reserved.
                        <div class="float-right d-none d-sm-inline-block">
                            <b>Version</b> 3.1.0-pre
                        </div>
                    </footer>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>

</body>

</html>