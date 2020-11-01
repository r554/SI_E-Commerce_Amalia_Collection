<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <?php $this->load->view('Backend/template/head'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php $this->load->view('Backend/template/navbar'); ?>
  <!-- /.navbar -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
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
              <li class="breadcrumb-item active">Edit Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="container-fluid">
        
        <div class="row"> 
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Produk</h3>
              </div>
              <!-- /.card-header -->
              <?php 
                //$no = 1;
                foreach($detailProduk as $u){ 
                $u->id_produk 
                    ?>
              <!-- form start -->
              <form action="<?php echo base_url('Flashsale/updatehargaDiskon/'.$u->id_produk); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="hidden" class="form-control" name="idp" placeholder="Enter email" disabled value="<?php echo $u->id_produk ?>">
                    <input type="text" class="form-control" name="namaProduk" placeholder="Enter email" disabled value="<?php echo $u->nama_produk ?>">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Produk</label>
                    <input type="number" class="form-control" name="jumlahProduk" laceholder="Enter email" disabled value="<?php echo $u->jumlah_produk ?>">
                  </div>
                  <div class="form-group">
                    <label>Warna</label>
                    <input type="text" class="form-control" name="warna" placeholder="Enter email" disabled value="<?php echo $u->warna ?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="desk" placeholder="Enter email" disabled value="<?php echo $u->deskripsi ?>">
                  </div>
                  <div class="form-group">
                    <label>Berat Produk</label>
                    <input type="text" class="form-control" name="beratProduk" placeholder="Enter email" disabled value="<?php echo $u->berat_produk ?>">
                  </div>
                  <div class="form-group">
                    <label>Dibuat Tanggal</label>
                    <input type="text" class="form-control" name="dibuattanggal" placeholder="Enter email" disabled value="<?php echo $u->dibuat_tanggal ?>">
                  </div>
                  <div class="form-group">
                    <label>Status Produk</label>
                    <input type="text" class="form-control" name="statusProduk" placeholder="Enter email" disabled value="<?php echo $u->status_produk ?>">
                  </div>
                  <div class="form-group">
                    <label>Status Promo</label>
                    <input type="text" class="form-control" name="statusPromo" placeholder="Enter email" disabled value="<?php echo $u->status_promo ?>">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="Number" class="form-control" name="harga" placeholder="Enter email" disabled value="<?php echo $u->harga ?>">
                  </div>
                  <div class="form-group">
                    <label>Harga Diskon</label>
                    <input type="number" min="1" max="<?php echo $u->harga ?>" class="form-control" name="hargaDiskon" placeholder="Masukan Harga Diskon">
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <?php } ?>
            
            
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
