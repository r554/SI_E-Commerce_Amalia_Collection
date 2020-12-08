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
            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Laporan</span>
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
                                <li class="breadcrumb-item active">Laporan Penjualan</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- alert -->
            <?php
    if (isset($_SESSION['ubah_sukses'])){ 
  ?>
            <div class="alert alert-success alert-dismissible fade show ubah_sukses" role="alert">
                Data berhasil diubah
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }
    if(isset($_SESSION['hapus_sukses'])){
  ?>
            <div class="alert alert-danger alert-dismissible fade show hapus_sukses" role="alert">
                Data berhasil dihapus
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } 
     if(isset($_SESSION['tambah_sukses'])){
      ?>
            <div class="alert alert-info alert-dismissible fade show hapus_sukses" role="alert">
                Data berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php } 
         if(isset($_SESSION['tambah_gagal'])){
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
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Laporan Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-link active"><a href="laporan/index">Semua</a></li>
                                    <li class="nav-link"><a href="laporan/penjualan">Terbayar</a></li>
                                    <li class="nav-link"><a href="laporan/dibatalkan">Dibatalkan</a></li>
                                    <li class="nav-link"><a href="laporan/diproses">DiProses</a></li>
                                </ul>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th>Warna</th>
                                                <th>Kategori</th>
                                                <th>Metode Pembayaran</th>
                                                <th>Rekening Bank</th>
                                                <th>Status</th>
                                                <th>Tanggal Pesan</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php 
                  if($laporan!=null){
                  $no = 1;
                  foreach($laporan as $u){ 
                    $tanggal_order = date('d-m-Y', strtotime($u->tanggal_order));
                    $u->id_produk 
                  ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $u->nama_produk ?></td>
                                                <td><?php echo $u->jumlah ?></td>
                                                <td><?php echo $u->warna?></td>
                                                <td><?php echo $u->nama_kategori?></td>
                                                <td><?php echo $u->metode_pembayaran ?></td>
                                                <td><?php echo $u->rekening_pembayaran ?></td>
                                                <td><?php if ($u->status == 1) {
                    echo "Dibatalkan";
                  } elseif ($u->status == 2) {
                    echo "Diproses";
                  } else {
                    echo "Terbayar";
                  } ?></td>
                                                <td><?php echo $tanggal_order ?></td>
                                            </tr>
                                            <?php }}else { ?>

                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th>Warma</th>
                                                <th>kategori</th>
                                                <th>Metode Pembayaran</th>
                                                <th>Rekening Bank</th>
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
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script>





</body>

</html>