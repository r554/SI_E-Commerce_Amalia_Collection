<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Collection</title>

    <?php $this->load->view('Backend/template/head'); ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>">
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
                                    <li class="breadcrumb-item"><a href="#">Data Produk</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
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
                        // Cek apakah terdapat session nama message
                        if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Data Berhasil Di Tambahkan</h5>
                        </div>
                        <?php }
                        ?>
                        <?php
                        // Cek apakah terdapat session nama message
                        if ($this->session->flashdata('hapus')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Data Berhasil Di Hapus</h5>
                        </div>
                        <?php }
                        ?>
                        <div class="row">
                            <div class="col">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Data Produk</h3>
                                    </div>
                                    <div class="mx-3 mt-3 ">
                                        <a class="btn btn-primary btn-sm center-block"
                                            href="<?php echo base_url(); ?>data_produk/tambah_produk"><i
                                                class="fa fa-plus "> Tambah Data</i>
                                        </a>
                                    </div>
                                    <!-- /.card-header -->

                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">No</th>
                                                    <th>Nama Produk</th>
                                                    <th>Gambar Produk</th>
                                                    <th>Harga</th>
                                                    <th class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $no = 1;
                                                foreach ($produk as $a) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $no++ ?>

                                                    </td>


                                                    <td>
                                                        <p><?php echo $a['nama_produk']; ?></p>
                                                    </td>
                                                    <td>
                                                        <img width="150px"
                                                            src="<?php echo base_url() ?>assets/Gambar/foto_produk/<?php echo $a['gambar_produk']; ?>"
                                                            alt="">
                                                    </td>
                                                    <td>
                                                        <p><?php echo $a['harga']; ?></p>
                                                    </td>
                                                    <td class="text-center">
                                                        <a
                                                            href="<?= base_url('data_produk/tampil_foto/' . $a['id_produk']) ?>"><button
                                                                class="btn btn-primary btn-xs" type="button "><i
                                                                    class="fa fa-plus">
                                                                    Tambah Foto</i></button></a>
                                                        <a
                                                            href="<?= base_url('data_produk/tampil_detail/' . $a['id_produk']) ?>"><button
                                                                class="btn btn-info btn-xs" type="button"><i
                                                                    class="fas fa-info-circle"> Detail</i></button></a>
                                                        <a
                                                            href="<?= base_url('data_produk/edit/' . $a['id_produk']) ?>"><button
                                                                class="btn btn-success btn-xs" type="button"><i
                                                                    class="far fa-edit"> Edit</i></button></a>
                                                        <a
                                                            href="<?= base_url('data_produk/delete/' . $a['id_produk']) ?>"><button
                                                                class="btn btn-danger btn-xs" type="button "><i
                                                                    class="fas fa-trash-alt">
                                                                    Hapus</i></button></a>

                                                    </td>

                                                </tr>
                                                <?php
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-right">
                                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- /Ini Akhir Konten -->



                        <!-- Main Footer -->
                        <?php $this->load->view("Backend/template/footer"); ?>
                    </div>
                </section>
            </div>
        </div>
        <script>
        // const flashData = $('.flash-data').data('flashdata');

        // if (flashData) {
        //     Swal.fire(
        //         'Berhasil',
        //         'Produk Dihapus Dari Keranjang',
        //         'success'
        //     )
        // }
        </script>
        <?php $this->load->view('Backend/template/js'); ?>
</body>

</html>