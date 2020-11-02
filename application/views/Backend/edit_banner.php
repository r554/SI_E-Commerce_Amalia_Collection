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
                                <li class="breadcrumb-item"><a href="#">Banner</a></li>
                                <li class="breadcrumb-item active">Banner</li>
                                <li class="breadcrumb-item active">Edit Banner</li>
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
                            <form action="<?php echo base_url('Admin/Banner/edit_banner/')?>" method="POST" role="form"
                                enctype="multipart/form-data">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Banner</h3>
                                    </div>
                                    <?php
                                            foreach ($edit_banner as $a) {
                                            ?>
                                    <div class="card-body">
                                        <!-- <label for="">ID Banner</label> -->
                                        <!-- <input class="form-control" type="text" placeholder="Default input" -->
                                        <!-- name="id_banner"> -->
                                        <!-- <br> -->
                                        <label for="">Sub Tittle</label>
                                        <input class="form-control" type="text" placeholder="Default input"
                                            name="sub_tittle" value="<?php echo $a['sub_tittle']?>">
                                        <br>
                                        <label for="">Tittle</label>
                                        <input class=" form-control" type="text" placeholder="Default input"
                                            name="tittle_banner" value="<?php echo $a['tittle_banner']?>">
                                        <br>
                                        <label for="">Deskripsi</label>
                                        <input class="form-control" type="text" placeholder="Default input"
                                            name="deskripsi_banner" value="<?php echo $a['deskripsi_banner']?>">
                                        <br>
                                        <label for="">Link</label>
                                        <input class="form-control" type="text" placeholder="Default input"
                                            name="link_banner" value="<?php echo $a['link_banner']?>">
                                        <br>
                                        <label>Foto</label>
                                        <input name="foto_banner" type="file">
                                        <img src="<?php echo base_url() ?>assets/Gambar/foto_banner/<?php echo $a['foto_banner']; ?> "
                                            alt="" width="200px" hight="200px">
                                    </div>
                                    <?php } ?>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
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
    <footer class=" main-footer text-sm">
        <strong>Copyright &copy; INDANAH GROUP</strong>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>

</body>

</html>