<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalia Collection</title>

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
                <img src="assets/Frontend_mobi/assets/images/amalialogo.png" alt="AdminLTE Logo"
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
                            <h1>Edit Karyawan</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
                                <li class="breadcrumb-item active">Edit Karyawan</li>
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
                                    <h3 class="card-title">Edit Karyawan</h3>
                                </div>
                                <!-- /.card-header -->
                                <?php


                                ?>
                                <!-- form start -->
                                <form action="<?php echo base_url('Admin/data_karyawan/edit'); ?>" method="post"
                                    role="form" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <input type="hidden" class="form-control" name="id_admin"
                                            value="<?php echo $edit[0]->id_admin ?>">

                                        <div class="form-group">
                                            <label>Nama Karyawan</label>
                                            <input type="text" class="form-control" name="nama_admin"
                                                value="<?php echo $edit[0]->nama_admin ?>" required
                                                oninvalid="this.setCustomValidity('Nama Karyawan Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="alamat_admin"
                                                value="<?php echo $edit[0]->alamat_admin ?>" required
                                                oninvalid="this.setCustomValidity('Alamat Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>No HP</label>
                                            <input type="text" class="form-control" name="no_admin" pattern=".{9,}"
                                                maxlength="14" value="<?php echo $edit[0]->no_admin ?>"
                                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required
                                                title="3 characters minimum"
                                                oninvalid="this.setCustomValidity('No HP Minimal 9 Karakter!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email_admin"
                                                value="<?php echo $edit[0]->email_admin ?>" required>
                                            <div class="input-group">
                                                <?php echo form_error('email', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username_admin"
                                                value="<?php echo $edit[0]->username_admin ?>" required
                                                oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password_admin"
                                                value="<?php echo $edit[0]->password_admin ?>" required
                                                oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <!-- <div class="form-group">
                                            <input name="foto_admin" id="menu_images" type="hidden"
                                                value="<?php echo $edit[0]->foto_admin ?>">
                                            <input name="foto_admin" id="menu_images" type="hidden"
                                                value="<?php echo $edit[0]->foto_admin ?>">

                                            <img src="<?php echo base_url() ?>assets/Gambar/foto_profil/<?php echo $edit[0]->foto_admin ?>"
                                                alt="" width="200px" hight="200px">

                                        </div> -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <a href="<?= base_url('Admin/data_karyawan/tampil') ?>"><button
                                                    type="button" class="btn btn-success">Kembali</button></a>




                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!--/.col (right) -->
                                </form>
                                <!-- /.row -->
                            </div><!-- /.container-fluid -->
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
    </div>
    </div>
    </section>



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
    $(function() {
        bsCustomFileInput.init();
    });
    </script>
    </div>
    </div>

</body>

</html>