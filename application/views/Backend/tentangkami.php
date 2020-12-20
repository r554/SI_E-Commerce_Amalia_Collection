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
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Admin/plugins/summernote/summernote-bs4.min.css">

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
                            <h1 class="m-0">Tentang Kami</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"></li>
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

                    <!-- uji coba  -->
                    <div class="toastsDefaultWarning">
                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button> -->
                        <?php
                        if ($this->session->flashdata('message')) { // Jika ada 
                        ?>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-info"></i> Info!</h5>
                            Data Berhasil diubah.
                        </div>
                        <?php  } ?>
                    </div>

                    <form action="<?php echo base_url('blog/edit_tentangkami/' . $kirana[0]->kd_blog); ?>" method="post"
                        role="form" enctype="multipart/form-data">

                        <input name="kd_blog" type="hidden" class="form-control"
                            value="<?php echo $kirana[0]->kd_blog; ?>">




                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Keterangan Toko / Tentang anda
                                            </h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <textarea id="summernote" name="text_tentangkami"
                                                style="width:100px; height:500px; min-width:100px; min-height:500px">
                                                <?php echo $kirana[0]->text_tentangkami; ?>
                                                
                                                 </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Gambar</h3>
                                    </div>
                                    <div class="card ">

                                        <img
                                            src="<?php echo base_url() ?>assets/Gambar/blog/<?php echo $kirana[0]->gbr_tentangkami; ?>">
                                        <input name="gbr_tentangkami" type="file" class="form-control">
                                        <input name="gbr_tentangkami" type="hiden" class="form-control"
                                            value="<?php echo $kirana[0]->gbr_tentangkami; ?>">

                                    </div>
                                </div>
                            </div>

                            <div class=" card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>

                            </div>

                        </section>


                    </form>




                    <!-- /Ini Akhir Konten -->



                    <!-- Main Footer -->

                    <?php $this->load->view('Backend/template/footer'); ?>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>

                <script src="<?php echo base_url() ?>assets/Admin/plugins/summernote/summernote-bs4.min.js"></script>

                <script>
                $(function() {
                    // Summernote
                    $('#summernote').summernote()
                })
                </script>








            </section>
        </div>
    </div>
</body>

</html>