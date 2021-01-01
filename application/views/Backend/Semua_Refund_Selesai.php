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
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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
                <img src="<?= base_url() ?>assets/Frontend_mobi/assets/images/amalialogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
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
                            <h1 class="m-0">Refund Selesai</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url('Manager/Dashboard_Manager/tampil_manager') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Refund Selesai</li>
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
                        <div class="col-md-12">
                            <div class="card card-outline card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Pengembalian Pemesanan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="semua_pesanan" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Nomor Pesanan</th>
                                                <th>Tanggal Pemesanan</th>
                                                <th class="text-center">Status Refund</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $no = 1;
                                            foreach ($data_refund_selesai as $data_refund) {


                                            ?>

                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?></td>
                                                    <td><?php echo $data_refund['nama_penerima']; ?></td>
                                                    <td><?php echo $data_refund['id_order']; ?></td>
                                                    <td><?php echo $data_refund['tgl_order']; ?></td>
                                                    <?php if ($data_refund['status_refund'] == 12) { ?>
                                                        <td class="text-center">
                                                            <span class="btn btn-info btn-sm rounded-pill">
                                                                Produk Diterima Pelanggan
                                                            </span>
                                                        </td>
                                                    <?php } elseif ($data_refund['status_refund'] == 13) { ?>
                                                        <td class="text-center">
                                                            <span class="btn btn-danger btn-sm rounded-pill">
                                                                Pengembalian Barang Ditolak
                                                            </span>
                                                        </td>
                                                    <?php }  ?>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href=" <?= base_url('Admin/Pengembalian_Barang/tampil_detail_refund_selesai/' . $data_refund['id_refund'] . '/' . $data_refund['id_order']) ?>"><button class="btn btn-info btn-xs ml-3">Detail</button></a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- row -->


                    <!-- /Ini Akhir Konten -->

                    <!-- Footer -->
                    <?php $this->load->view('Backend/template/footer'); ?>
                    <!-- End Footer -->

                </div>
                <!-- ./wrapper -->

                <!-- Bagian JS -->
                <?php $this->load->view('Backend/template/js'); ?>

                <!-- DataTables  & Plugins -->
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"> </script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
                </script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/jszip/jszip.min.js"></script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/pdfmake/pdfmake.min.js"></script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/pdfmake/vfs_fonts.js"></script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.html5.min.js">
                </script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.print.min.js">
                </script>
                <script src="<?php echo base_url() ?>assets/Admin/plugins/datatables-buttons/js/buttons.colVis.min.js">
                </script>


                <!-- Page specific script -->
                <script>
                    $(function() {
                        $("#semua_pesanan").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            // "buttons": ["excel", "pdf", "print"]
                        }).buttons().container().appendTo('#semua_pesanan_wrapper .col-md-6:eq(0)');
                        $('#example2').DataTable({
                            "paging": true,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "responsive": true,
                        });
                    });
                </script>



            </section>
        </div>
</body>

</html>