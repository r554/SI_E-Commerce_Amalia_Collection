<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Collection</title>

    <?php $this->load->view('Backend/template/head'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php $this->load->view('Backend/template/navbar'); ?>
        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="assets/Frontend_mobi/assets/images/amalialogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Amalia</b> Collection</span>
            </a>

            <!-- Sidebar -->
            <?php $this->load->view('Backend/template/sidebar'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Produk</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data Produk</a></li>
                                <li class="breadcrumb-item active">Edit Produk</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">

                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <?php


                                ?>
                                <!-- form start -->
                                <form action="<?php echo base_url('data_produk/edit'); ?>" method="post" role="form"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <input type="text" class="form-control" name="id_produk"
                                            value="<?php echo $edit[0]->id_produk ?>">

                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <input type="text" class="form-control" name="nama_kategori"
                                                value="<?php echo $edit[0]->nama_kategori ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Produk</label>
                                            <input type="text" class="form-control" name="nama_produk"
                                                value="<?php echo $edit[0]->nama_produk ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Produk</label>
                                            <input type="number" class="form-control" name="jumlah_produk"
                                                value="<?php echo $edit[0]->jumlah_produk ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Warna</label>
                                            <input type="text" class="form-control" name="warna"
                                                value="<?php echo $edit[0]->warna ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="Number" class="form-control" name="harga"
                                                value="<?php echo $edit[0]->harga ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi"
                                                value="<?php echo $edit[0]->deskripsi ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Berat Produk</label>
                                            <input type="text" class="form-control" name="berat_produk"
                                                value="<?php echo $edit[0]->berat_produk ?>">
                                        </div>
                                        <div class="form-group">
                                            <input name="gambar_produk" type="file"
                                                value="<?php echo $edit[0]->gambar_produk ?>">
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('data_produk/tampil') ?>"><button type="button"
                                                    class="btn btn-success">Kembali</button></a>




                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!--/.col (right) -->
                                </form>
                                <!-- /.row -->
                            </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0-pre
            </div>
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    </div>
    </div>
    </section>



    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
    </div>
    </div>

</body>

</html>