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
                            <h1 class="m-0">Data Customer</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data Customer</a></li>
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
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Customer</h3>
                                </div>
                                <div class="mx-3 mt-3 ">
                                    <!-- <a class="btn btn-primary btn-sm center-block"
                                        href="<?php echo base_url() ?>Admin/data_karyawan/tambah_karyawan"><i
                                            class="fa fa-plus ">Tambah Data</i>
                                    </a> -->
                                </div>
                                <!-- /.card-header -->

                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Nama Customer</th>
                                                <th>No HP</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>Status</th>
                                                <th>Tanggal Daftar</th>
                                                <th style="width: 40px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no = 1;
                                            foreach ($customer as $a) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no++ ?>

                                                </td>

                                                <td>
                                                    <p><?php echo $a['nama_pelanggan']; ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a['no_pelanggan']; ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a['email_pelanggan']; ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a['alamat_pelanggan']; ?></p>
                                                </td>
                                                <td>
                                                    <p>
                                                        <?php
                                                            if ($a['status'] == "1") {
                                                                echo "Aktif";
                                                            } else {
                                                                echo "Non Aktif";
                                                            }

                                                            ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p><?php echo $a['tanggal_daftar']; ?></p>
                                                </td>

                                                <td>
                                                    <a
                                                        href="<?= base_url('Admin/data_customer/tampil_detail/' . $a['id_pelanggan']) ?>"><button
                                                            type="button"
                                                            class="btn btn-primary btn-sm ">Detail</button></a>
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