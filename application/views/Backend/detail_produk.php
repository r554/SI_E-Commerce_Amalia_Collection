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
                            <h1>Detail Produk</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data Produk</a></li>
                                <li class="breadcrumb-item active">Detail Produk</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="card mb-3" style="">
                        <div class="row no-gutters">

                            <div class="col-md-3 text-center mt-4">
                                <?php
                                //$no = 1;
                                foreach ($detailProduk as $u) {
                                    // $u->id_produk
                                ?>
                                <img width="230px" height="230px"
                                    src="<?php echo base_url() ?>assets/Gambar/foto_produk/<?php echo $u->gambar_produk ?>">
                            </div>
                            <div class=" col-md-9">
                                <div class="card-body">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Detail Produk</h3>
                                        </div>
                                        <!-- /.card-header -->

                                        <!-- form start -->
                                        <form action="<?php echo base_url() . 'data_produk/edit'; ?>" method="post">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <input type="text" class="form-control" name="nama_kategori"
                                                        disabled value="<?php echo $u->nama_kategori ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nama Produk</label>
                                                    <input type="text" class="form-control" name="nama_produk" disabled
                                                        value="<?php echo $u->nama_produk ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Jumlah Produk</label>
                                                    <input type="number" class="form-control" name="jumlah_produk"
                                                        disabled value="<?php echo $u->jumlah_produk ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Warna</label>
                                                    <input type="text" class="form-control" name="warna" disabled
                                                        value="<?php echo $u->warna ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Harga</label>
                                                    <input type="text" class="form-control" name="harga" disabled
                                                        value="<?php echo $u->harga ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Deskripsi</label>
                                                    <input type="text" class="form-control" name="deskripsi" disabled
                                                        value="<?php echo $u->deskripsi ?>">
                                                </div>
                                                <div class="form-group">
                                                    <label>Berat Produk</label>
                                                    <input type="text" class="form-control" name="berat_produk" disabled
                                                        value="<?php echo $u->berat_produk ?>">
                                                </div>

                                                <!-- <div class="form-group">
                                            <label>Status Produk</label>
                                            <input type="text" class="form-control" name="statusProduk"
                                                placeholder="Enter email" disabled
                                                value="<?php //echo $u->status_produk 
                                                        ?>">
                                        </div> -->

                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <!-- left column -->


                            <div class="col-md-6">

                            </div>
                            <div class="col-md-6">
                                <!-- general form elements -->

                                <!-- /.card-body -->
                                <?php } ?>

                                <div class="card-footer">
                                    <a href="<?= base_url('data_produk/tampil') ?>"><button type="button"
                                            class="btn btn-success">Kembali</button></a>
                                    <a href="<?= base_url('data_produk/edit/' . $u->id_produk) ?>"><button type="button"
                                            class="btn btn-primary">Edit</button></a>



                                </div>
                                </form>
                            </div>
                            <!-- /.card -->




                        </div>
                        <!--/.col (right) -->
                    </div>
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
</body>

</html>