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
                            <h1 class="m-0">Data Karyawan</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
                                <li class="breadcrumb-item active">Tambah Karyawan</li>
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
                        <div class="col">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Data Karyawan</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="<?php echo base_url('Admin/data_karyawan/save') ?> " method="POST"
                                    enctype="multipart/form-data">

                                    <div class="card-body">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- <div class="form-group">
                                                        <label>ID Karyawan</label>
                                                        <input name="id_admin" type="teks" class="form-control"
                                                            value="<?php echo $invoice ?>">
                                                        <input name="status_produk" type="hidden" class="form-control"
                                                            value="1">
                                                        <input name="status_promo" type="hidden" class="form-control"
                                                            value="0">

                                                    </div> -->
                                                    <!-- <div class="form-group">
                                                        <label>Pilih Kategori</label>
                                                        <select id="cars" name="id_kategori" class="form-control">>
                                                            <?php
                                                            foreach ($kategori as $hasil) {
                                                            ?>
                                                            <option value="<?php echo $hasil['id_kategori']; ?>">
                                                                <?php echo $hasil['nama_kategori']; ?> </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div> -->

                                                    <div class="form-group">
                                                        <label>Nama Karyawan</label>
                                                        <input name="nama_admin" type="teks" class="form-control"
                                                            placeholder="Enter Nama Karyawan">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input name="alamat_admin" type="teks" class="form-control"
                                                            placeholder="Enter Alamat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>No HP</label>
                                                        <input name="no_admin" type="number" class="form-control"
                                                            placeholder="Enter No HP">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input name="email_admin" type="teks" class="form-control"
                                                            placeholder="Enter Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input name="username_admin" type="teks" class="form-control"
                                                            placeholder="Enter Deskripsi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input name="password_admin" type="teks" class="form-control"
                                                            placeholder="Enter Password Admin">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="foto_admin" type="file">
                                                    </div>

                                                    <!-- /.card-body -->

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </form>
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
                <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>


</body>

</html>