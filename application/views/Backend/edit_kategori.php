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
                            <form action="<?php echo base_url('Admin/kategori/edit_kategori') ?>" method="POST"
                                role="form" enctype="multipart/form-data">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Banner</h3>
                                    </div>

                                    <div class="card-body">
                                        <!-- <label for="">ID Banner</label> -->
                                        <input class="form-control" type="hidden" placeholder="Default input"
                                            name="id_kategori" value="<?php echo $edit_kategori['0']->id_kategori ?>">
                                        <!-- <br> -->
                                        <label for="">Nama Kategori</label>
                                        <input class="form-control" type="text" placeholder="Default input"
                                            name="nama_kategori"
                                            value="<?php echo $edit_kategori['0']->nama_kategori ?>">
                                        <br>
                                        <!-- <label for="" class="mr-4"> Gambar Kategori </label>
                                        <img src="<?php echo base_url() ?>assets/Frontend/images/<?php echo $edit_kategori['0']->gambar_kategori ?>"
                                            alt="" width="200px" hight="200px" name="gambar_kategori">
                                        <br>
                                        <input type="file" name="gambar_kategori" class="mt-4"> -->

                                        <label>Gambar Kategori</label>
                                        <input name="gambar_kategori" type="file" multiple accept='image/*'
                                            id="menu_images" value="<?php echo $edit_kategori['0']->gambar_kategori ?>">
                                        <input name="gambar_kategori" type="hidden"
                                            value="<?php echo $edit_kategori['0']->gambar_kategori ?>">

                                        <img src="<?php echo base_url() ?>assets/Frontend/images/<?php echo $edit_kategori['0']->gambar_kategori ?>"
                                            alt="" width="200px" hight="200px">
                                    </div>


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
                                        <a href="<?= base_url('Admin/kategori/tampil_kategori') ?>"><button
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