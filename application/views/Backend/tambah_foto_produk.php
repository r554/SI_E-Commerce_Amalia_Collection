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
                            <h1 class="m-0">Data Produk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Produk</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">
                    <?php
                    // Cek apakah terdapat session nama message
                    if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Foto Produk Berhasil Di Tambahkan</h5>
                    </div>
                    <?php }
                    ?>
                    <?php
                    // Cek apakah terdapat session nama message
                    if ($this->session->flashdata('hapus')) { ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Foto Produk Berhasil Di Hapus</h5>
                    </div>
                    <?php }
                    ?>
                    <!-- Ini Bagian Konten -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Gambar Produk Pendukung</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <?php
                                        $no = 1;
                                        foreach ($foto_produk as $a) {
                                        ?>
                                        <div class="col-md-6">
                                            <img width="240px" height="300px"
                                                src="<?= base_url() ?>assets/Gambar/foto_produk/<?php echo $a->foto ?>"
                                                alt="">
                                            <a
                                                href="<?php echo base_url('data_produk/delete_foto/' . $a->id_foto . '/' . $a->id_produk) ?>">
                                                <button class="btn btn-danger">Hapus</button></a>
                                        </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Tambah Foto Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <form action="<?php echo base_url('data_produk/tambah_foto') ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="card-body">
                                        <input type="hidden" value="<?php echo $this->uri->segment("3") ?>"
                                            name="id_produk">
                                        <input type='file' multiple accept='image/*' id="menu_images"
                                            name="gambar_produk" />
                                        <img class="img-fluid" id="gambar" src="#" alt="Pilih Gambar"
                                            OnError=" $(this).hide();" height="500px" width="500px" />
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">
                                            Tambah
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- /Ini Akhir Konten -->



                    <!-- Main Footer -->

                    <?php $this->load->view('Backend/template/footer'); ?>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>
            </section>
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
        </div>
    </div>
</body>

</html>