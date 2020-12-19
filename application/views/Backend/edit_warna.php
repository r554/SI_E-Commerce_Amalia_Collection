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

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                                <li class="breadcrumb-item active">Kategori</li>
                                <li class="breadcrumb-item active">Edit Kategori</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <!-- Form Element sizes -->
                            <form
                                action="<?php echo base_url('data_produk/edit_warna_stok/' . $warnastok['0']->id_attribut) ?>"
                                method="POST" role="form" enctype="multipart/form-data">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Warna dan Stok Produk</h3>
                                    </div>

                                    <div class="card-body">
                                        <!-- <label for="">ID Attribut</label> -->
                                        <input class="form-control" type="hidden" placeholder="Default input"
                                            name="id_attribut" value="<?php echo $warnastok['0']->id_attribut ?>">
                                        <!-- <br> -->
                                        <!-- <label for="">ID Produk</label> -->
                                        <input class="form-control" type="hidden" placeholder="Default input"
                                            name="id_produk" value="<?php echo $warnastok['0']->id_produk  ?>">
                                        <!-- <br> -->
                                        <label for="">Warna</label>
                                        <input class="form-control" type="text" placeholder="Default input" name="warna"
                                            value="<?php echo $warnastok['0']->warna ?>">
                                        <br>
                                        <label for="">Stok</label>
                                        <input class="form-control" type="number" placeholder="Default input" name="qty"
                                            onkeyup="this.value=this.value.replace(/[^0-9]/g,'')"
                                            value="<?php echo $warnastok['0']->qty ?>">
                                        <br>

                                    </div>


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>

                                        <a
                                            href="<?= base_url('data_produk/edit/') ?><?php echo $warnastok['0']->id_produk ?>"><button
                                                type="button" class="btn btn-primary">Kembali</button></a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Main Footer -->

    <?php $this->load->view('Backend/template/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>

</body>

</html>