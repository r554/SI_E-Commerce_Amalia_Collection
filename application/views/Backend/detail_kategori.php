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
                        <h5><i class="icon fas fa-check"></i> Data Berhasil Dihapus</h5>
                    </div>
                    <?php }
                    ?>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Detail Jenis Kategori</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Kategori</a></li>
                                <li class="breadcrumb-item active">Kategori</li>
                                <li class="breadcrumb-item active">Detail Kategori</li>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Kategori</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal">
                                    <div class="card-body">
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Id Kategori</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $kategori2['0']->id_kategori ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Nama Kategori</label>
                                            <div class="col-sm-8">
                                                <p>: <?php echo $kategori2['0']->nama_kategori ?></p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <label for="inputEmail3" class="col-sm-4 ">Foto Kategori</label>
                                            <div class="col-sm-8">
                                                <p> <img src="<?php echo base_url()?>/assets/Frontend/images/<?php echo $kategori2['0']->gambar_kategori ?>"
                                                        alt="" width="200px"></p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                        </div>
                        <!--col-->

                        <div class="col-6">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Jenis Kategri</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Jenis</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            foreach ($kategori as $kategori) {
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $kategori->nama_jenis; ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo base_url("Admin/kategori/delete_kategori/". $kategori->id_jenis .'/'.$kategori->id_kategori)?>"><button
                                                            type="button"
                                                            class="btn btn-danger btn-sm">Hapus</button></a>
                                                </td>

                                            </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-default">
                                        Tambah Jenis
                                    </button>

                                </div>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!--Row-->
                </div> <!-- /Ini Akhir Konten /wrapper -->
            </section>
        </div>


        <?php $this->load->view('Backend/template/footer'); ?>
    </div>


    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Jenis</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url("Admin/kategori/save_kategori_jenis/".$kategori2['0']->id_kategori)?>"
                    method="post">
                    <div class="modal-body">
                        <p>Nama Jenis</p>

                        <input type="hidden" name="id_kategori" value="<?php echo $kategori2['0']->id_kategori?>">
                        <input type="text" name="nama_jenis">

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