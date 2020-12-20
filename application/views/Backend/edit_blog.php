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
                            <h1 class="m-0">Edit Blog</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>

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


                    <?php
                    $no = 1;
                    foreach ($semongko as $duren) {
                    ?>
                    <form action="<?php echo base_url('blog/edit_blog') ?> " method="POST"
                        enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input name="id_tutorial" type="hidden" class="form-control"
                                                value="<?php echo $duren->id_tutorial; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Judul Postingan / Blog</label>
                                            <input name="judul_tutorial" type="teks" class="form-control"
                                                value="<?php echo $duren->judul_tutorial; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Posting</label>
                                            <input name="tgl" type="date" class="form-control"
                                                value="<?php echo $duren->tgl; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Link Vidio </label>
                                            <input name="link_vidio" type="teks" class="form-control"
                                                value="<?php echo $duren->link_vidio; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card">

                                            <div class="card card-danger card-outline">
                                                <div class="card-header text-center">
                                                    <h3 class="card-title">Gambar Blog</h3>
                                                </div>

                                                <input class="form-control" type='file' multiple accept='image/*'
                                                    id="menu_images" name="gbr_tutorial" required
                                                    oninvalid="this.setCustomValidity('Gambar Tidak Boleh Kosong!')"
                                                    oninput="setCustomValidity('')" />
                                                <img class="img-fluid" id="gambar" src="#" alt="Pilih Gambar"
                                                    OnError=" $(this).hide();" height="250px" width="250px" />
                                                <br>

                                                <img src="<?php echo base_url() ?>assets/Gambar/blog/<?php echo $duren->gbr_tutorial ?>"
                                                    alt="" width="200px" height="200px">

                                                <input name="gbr_tutorial" type="hidden" class="form-control"
                                                    value="<?php echo $duren->gbr_tutorial; ?>">


                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-info">
                                                <h3 class="card-title">
                                                    Deskripsi Blog / Postingan
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <textarea id="summernote" name="deskripsi_tutorial"
                                                    style="width:100px; height:500px; min-width:100px; min-height:500px">
                                                    <?php echo $duren->deskripsi_tutorial; ?>
                                                 </textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                    </form>
                    <?php
                    } ?>

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

                $("#menu_images").change(function() {
                    $('#gambar').show();
                    readURL(this);
                });
                </script>



            </section>
        </div>
    </div>
</body>

</html>