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
                            <h1 class="m-0">Blog Anda</h1>
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



                    <form>
                        <div class="row">

                            <div class="navbar-buttons mbr-section-btn ml-5 mb-2">
                                <a href="<?php echo base_url("blog/tambah_blog") ?>"><button type="button"
                                        class="btn btn-success btn-sm">Tambah Blog</button></a>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <?php
                                        if ($this->session->flashdata('message')) { // Jika ada 
                                        ?>
                                        <div class="alert alert-info alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                            <h5><i class="far fa-check-circle"></i> Berhasil</h5>
                                            Data Berhasil di Ubah!
                                        </div>
                                        <?php  } ?>

                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Nomer</th>
                                                        <th>Nama Postingan</th>
                                                        <th>Tanggal</th>
                                                        <th>Gambar Blog</th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    $no = 1;
                                                    foreach ($data as $p) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <a><?php echo $no++; ?> </a>
                                                        </td>
                                                        <td>
                                                            <p><?php echo $p->judul_tutorial; ?>
                                                        </td>
                                                        <td>
                                                            <p><?php echo $p->tgl; ?>
                                                        </td>
                                                        <td>
                                                            <p><img src="<?php echo base_url() ?>/assets/Gambar/blog/<?php echo $p->gbr_tutorial; ?>"
                                                                    alt="" width="100px"> </p>

                                                        </td>

                                                        <td>
                                                            <a
                                                                href="<?php echo base_url("blog/delete_blog/$p->id_tutorial") ?>"><button
                                                                    type="button" class="btn btn-danger btn-sm"
                                                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">Hapus</button></a>
                                                            <a
                                                                href="<?php echo base_url("blog/tampil_edit_blog/$p->id_tutorial") ?>"><button
                                                                    type="button"
                                                                    class="btn btn-info btn-sm">Edit</button></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </form>




                    <!-- /Ini Akhir Konten -->



                    <!-- Main Footer -->

                    <?php $this->load->view('Backend/template/footer'); ?>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>
            </section>
        </div>
    </div>
</body>

</html>