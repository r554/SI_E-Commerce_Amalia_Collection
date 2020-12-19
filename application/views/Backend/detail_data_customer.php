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
                                <img width="230px" height="230px" class="img-circle"
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
                                        <form action="<?php echo base_url('Admin/data_customer/edit'); ?>" method="POST"
                                            role="form">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Nama Pelanggan</label>
                                                    <input type="hidden" name="id_pelanggan"
                                                        value="<?php echo $u->id_pelanggan ?>">
                                                    <input type="hidden" name="foto_pelanggan"
                                                        value="<?php echo $u->foto_pelanggan ?>">
                                                    <input type="hidden" name="nama_pelanggan"
                                                        value="<?php echo $u->nama_pelanggan ?>">
                                                    <p class="form-control"><?php echo $u->nama_pelanggan ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>No HP</label>
                                                    <input type="hidden" name="no_pelanggan"
                                                        value="<?php echo $u->no_pelanggan ?>">
                                                    <p class="form-control"><?php echo $u->no_pelanggan ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="hidden" name="email_pelanggan"
                                                        value="<?php echo $u->email_pelanggan ?>">
                                                    <p class="form-control"><?php echo $u->email_pelanggan ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <input type="hidden" name="alamat_pelanggan"
                                                        value="<?php echo $u->alamat_pelanggan ?>">
                                                    <p class="form-control"><?php echo $u->alamat_pelanggan ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kode Pos</label>
                                                    <input type="hidden" name="kode_pos"
                                                        value="<?php echo $u->kode_pos_pelanggan ?>">
                                                    <p class="form-control"><?php echo $u->kode_pos_pelanggan ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Kabupaten</label>
                                                    <input type="hidden" name="kabupaten"
                                                        value="<?php echo $u->kabupaten ?>">
                                                    <p class="form-control"><?php echo $u->kabupaten ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Provinsi</label>
                                                    <input type="hidden" name="provinsi"
                                                        value="<?php echo $u->provinsi ?>">
                                                    <p class="form-control"><?php echo $u->provinsi ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="hidden" name="username_pelanggan"
                                                        value="<?php echo $u->username_pelanggan ?>">
                                                    <p class="form-control"><?php echo $u->username_pelanggan ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="hidden" name="password_pelanggan"
                                                        value="<?php echo $u->password_pelanggan ?>">
                                                    <p class="form-control"><?php echo $u->password_pelanggan ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Daftar</label>
                                                    <input type="hidden" name="tanggal_daftar"
                                                        value="<?php echo $u->tanggal_daftar ?>">
                                                    <p class="form-control"><?php echo $u->tanggal_daftar ?></p>
                                                </div>

                                                <div class="form-group">
                                                    <input type="hidden" name="Status" value="0">
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
                    </div><!-- /Ini Akhir Konten -->



                    <!-- Main Footer -->
                    <?php $this->load->view('Backend/template/footer'); ?>

                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>

            </section>
        </div>
    </div>
</body>

</html>