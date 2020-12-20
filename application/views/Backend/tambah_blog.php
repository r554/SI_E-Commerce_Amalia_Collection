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
                            <h1 class="m-0">Tambah Blog</h1>
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
                            Data Berhasil Disimpan.
                        </div>
                        <?php  } ?>
                    </div>

                    <form action="<?php echo base_url('blog/save_blog') ?> " method="POST"
                        enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">


                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Judul Postingan / Blog</label>
                                            <input name="judul_tutorial" type="teks" class="form-control"
                                                placeholder="Isikan Judul Postingan">
                                        </div>


                                        <div class="form-group">
                                            <label>Link Vidio </label>
                                            <input name="link_vidio" type="teks" class="form-control"
                                                placeholder="Isikan link Vidio">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal </label>
                                            <input name="tgl" type="text" class="form-control"
                                                value="<?php echo date("Y/m/d"); ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    Gambar Blog
                                                </div>
                                                <div class="card-body">
                                                    <img class="img-fluid ml-5" id="gambar" src="#" alt="Pilih Gambar"
                                                        OnError=" $(this).hide();" style="width:150px;" />
                                                    <input name="gbr_tutorial" type="file" class="form-control"
                                                        id="file">
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h3 class="card-title">
                                                    Deskripsi Blog / Postingan
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <textarea id="summernote" name="deskripsi_tutorial" style="width:150px;"
                                                    placeholder="Isikan Text Blog anda!">

                                                 </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>


                    <!-- Main Footer -->

                    <?php $this->load->view('Backend/template/footer'); ?>
                </div>


                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/summernote/summernote-bs4.min.js"></script>

                <script>
                $(function() {
                    // Summernote
                    $('#summernote').summernote()



                })
                </script>

                <script type="text/javascript">
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#gambar').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }

                $("#file").change(function() {
                    $('#gambar').show();
                    readURL(this);
                });
                </script>


            </section>
        </div>
    </div>
</body>

</html>