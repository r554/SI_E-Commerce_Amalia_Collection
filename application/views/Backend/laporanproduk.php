<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Penjualan</title>
    <?php

    if (!$this->session->userdata('nama')) {
        redirect(base_url("Auth_Admin"));
    }

    ?>

    <?php $this->load->view('Backend/template/head'); ?>
</head>

<body class="hold-transition sidebar-mini">
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

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Laporan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Laporan Produk</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Laporan Produk</h3>
                                </div>
                                <!-- /.card-header
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-link active"><a href="<?php echo base_url("Admin/Laporan/")?>">Semua</a></li>
                                    <li class="nav-link"><a href="<?php echo base_url("Admin/Laporan/penjualan")?>">Selesai</a></li>
                                    <li class="nav-link"><a href="<?php echo base_url("Admin/Laporan/dibatalkan")?>">Dibatalkan</a></li>
                                    <li class="nav-link"><a href="<?php echo base_url("Admin/Laporan/diproses")?>">DiProses</a></li>
                                </ul> -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th>Warna</th>                                                
                                                <th>Kategori</th>
                                                <th>Tanggal Masuk</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            if ($laporan != null) {
                                                $no = 1;
                                                foreach ($laporan as $u) {
                                                    $tanggal = date('d-m-Y', strtotime($u->tanggal));
                                                    $u->id_produk
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $u->nama_produk ?></td>
                                                <td><?php echo $u->qty ?></td>
                                                <td><?php echo $u->warna ?></td>
                                                <td><?php echo $u->nama_kategori ?></td>
                                                <td><?php echo $tanggal?></td>
                                            </tr>
                                            <?php }
                                            } else { ?>

                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th>Warma</th>                                                
                                                <th>Status</th>
                                                <th>Tanggal Pesan</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                </div>

                <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php $this->load->view('Backend/template/footer'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');        

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    });   
    
    </script>
</body>

</html>