<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Collection</title>

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
                            <h1>Flash Sale</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Atur Flash Sale</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- alert -->
            <?php
            if (isset($_SESSION['ubah_sukses'])) {
            ?>
            <div class="alert alert-success alert-dismissible fade show ubah_sukses" role="alert">
                Data berhasil diubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }
            if (isset($_SESSION['hapus_sukses'])) {
            ?>
            <div class="alert alert-danger alert-dismissible fade show hapus_sukses" role="alert">
                Data berhasil dihapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }
            if (isset($_SESSION['tambah_sukses'])) {
            ?>
            <div class="alert alert-info alert-dismissible fade show hapus_sukses" role="alert">
                Data berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }
            if (isset($_SESSION['tambah_gagal'])) {
            ?>
            <div class="alert alert-danger alert-dismissible fade show hapus_sukses" role="alert">
                Data gagal ditambahkan, ID Surat tidak boleh sama
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }
            unset($_SESSION['ubah_sukses']);
            unset($_SESSION['hapus_sukses']);
            unset($_SESSION['tambah_sukses']);
            unset($_SESSION['tambah_gagal']);
            ?>
            <!-- alert -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">                          

                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">Promo Flash Sale</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Promo</th>
                                                <th>Waktu Berakhir</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($tbl_promo != null) {
                                                $noP = 1;
                                                $statuspromo = 0;
                                                foreach ($tbl_promo as $p) {
                                                    $p->id_promo

                                            ?>
                                            <tr>
                                                <td><?php echo $p->nama_promo ?></td>
                                                <td><?php echo $p->durasi_promo ?></td>
                                                <td><?php if ($p->status_promo == 0) {
                                                                echo "Non Aktif";
                                                            } else {
                                                                echo "Aktif";
                                                            } ?></td>
                                                <td>                                                    
                                                    <a href="<?php echo site_url('admin/Flashsale/updatestatus1/' . $p->id_promo); ?>" class="btn btn-success btn-sm">Aktifkan</a>
                                                    <a href="<?php echo site_url('admin/Flashsale/updatestatus0/' . $p->id_promo); ?>" class="btn btn-danger btn-sm">Non Aktifkan</a>
                                                    <!-- <a class="btn btn-danger btn-sm"
                                                     <?php echo anchor('admin/Flashsale/hapuspromo/' . $p->id_promo, 'Hapus Promo'); ?></a> -->
                                                     <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal">Edit</button>
                                                </td>
                                            </tr>
                                            <?php }                                                                                                                                                                                                                                                                                                                                                                                                                                                } else { ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div> <!-- /.card-body -->
                            </div>
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Produk Promo</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Harga Lama</th>
                                                <th>Harga Diskon</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                                <th>Aksi 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($produkpromo != null) {
                                                $no = 1;
                                                foreach ($produkpromo as $pp) {
                                                   
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $pp->nama_produk ?></td>
                                                <td>Rp.<?php echo $pp->harga ?></td>
                                                <td>Rp.<?php echo $pp->hargadiskon ?></td>
                                                <td>
                                                    <?php if ($pp->status_promo == 0) {
                                                                echo "Tidak Promo";
                                                            } else {
                                                                echo "Sedang Promo";
                                                            } ?>
                                                </td>
                                                <td> 
                                                <a href="<?php echo site_url('admin/Flashsale/detailProduk/' . $pp->id_produk); ?>" class="btn btn-info btn-sm">Edit Produk</a>   
                                                </td>
                                                <td>                                                
                                                <a href="<?php echo site_url('admin/Flashsale/updatestatus3/' . $pp->id_produk); ?>" class="btn btn-danger btn-sm">Non Aktifkan</a>                                                       
                                                
                                                </td>
                                            </tr>
                                            <?php }
                                                                                                                                                                                                                                                                                                                        } else { ?>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Tanggal</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                                <th>Aksi 2</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example3" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Harga Lama</th>
                                                <th>Harga Diskon</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                                <th>Aksi 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($tbl_produk != null) {
                                                $no = 1;
                                                foreach ($tbl_produk as $u) {
                                                    $u->id_produk
                                            ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $u->nama_produk ?></td>
                                                <td>Rp.<?php echo $u->harga ?></td>
                                                <td>Rp.<?php echo $u->hargadiskon ?></td>
                                                <td>
                                                    <?php if ($u->status_promo == 0) {
                                                                echo "Tidak Promo";
                                                            } else {
                                                                echo "Sedang Promo";
                                                            } ?>
                                                </td>
                                                <td>
                                                <a href="<?php echo site_url('admin/Flashsale/detailProduk/' . $u->id_produk); ?>" class="btn btn-info btn-sm">Edit Produk</a>
                                                </td>
                                                <td>                                                
                                                <a href="<?php echo site_url('admin/Flashsale/updatestatus2/' . $u->id_produk); ?>" class="btn btn-success btn-sm">Aktifkan</a>                                                 
                                                        
                                                </td>
                                            </tr>
                                            <?php }
                                                                                                                                                                                                                                                                                                                        } else { ?>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Tanggal</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                                <th>Aksi 2</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            
                             

                            <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ubah Waktu Promo</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>          
                </div>
                <div class="modal-body">
                <form role="form" action="<?php echo base_url('admin/flashsale/updatepromo/')?><?php echo $p->id_promo ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="namaPromo">Nama Promo</label>
                            <input type="hidden" class="form-control" id="status"
                                name="status_promo" value="0">
                            <input type="text" class="form-control" id="nama" name="nama_promo"
                                placeholder="Masukan Nama Promo" required>
                        </div>
                        <div class="form-group">
                            <label for="durasi">Durasi Promo</label>
                            <input type="datetime-local" class="form-control" id="fasilitas"
                                 name="durasi_promo" placeholder="Tanggal Berakhir Promo" required>
                        </div>
                        
                                            <!-- /.card-body -->
                 
                              
                </div>
                    <div class="modal-footer">
                    <button type="Tambah" class="btn btn-primary">Tambah</button>
                    </div>        
            </div>
                    </form>
        </div>
    </div>
    </div>

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
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $("#example3").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');

        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    });
    $("#setstatus1").change(function() {
        document.location.href = $(this).val();
    });
    $("#setstatus2").change(function() {
        document.location.href = $(this).val();
    });
    </script>

</body>

</html>