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
                            <h1 class="m-0">Data Kategori</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                                <li class="breadcrumb-item active">Kategori</li>

                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container">
                    <form action="<?php echo base_url('Admin/profil/edit/')?>" method="POST" role="form"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>

                                        <div class="navbar-buttons mbr-section-btn float-right">
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#modal-default">
                                                Tambah Data
                                            </button>

                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Kategori</th>
                                                        <th>Foto Kategori
                                                        </th>
                                                        <th>Aksi</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                            $no = 1;
                                            foreach ($kategori as $kategori) {
                                            ?>
                                                    <tr>
                                                        <td>
                                                            <p><?php echo $kategori['nama_kategori']; ?></p>
                                                        </td>
                                                        <td>
                                                            <img src="<?php echo base_url()?>/assets/Frontend/images/<?php echo $kategori['gambar_kategori']?>"
                                                                alt="" width="100px">
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="<?php echo base_url("Admin/kategori/tampil_detail_kategori/".$kategori['id_kategori'])?>"><button
                                                                    type="button"
                                                                    class="btn btn-success btn-sm">Detail</button></a>
                                                            <a
                                                                href="<?php echo base_url("Admin/kategori/edit_kategori/".$kategori['id_kategori'])?>"><button
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
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url("Admin/kategori/save_kategori/")?>" method="post"
                    enctype="multipart/form-data">
                    <div class="container">
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nama Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_kategori" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Foto Kategori</label>
                            <div class="col-sm-10">
                                <input type="file" name="gambar_kategori" multiple accept='image/*' id="menu_images">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>

                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</body>
<!-- REQUIRED SCRIPTS -->
<?php $this->load->view('Backend/template/js'); ?>

</html>