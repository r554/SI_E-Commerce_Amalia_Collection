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
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
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
                            <h1 class="m-0">Home</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profil</li>
                                <li class="breadcrumb-item active">Ubah Password</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <!-- Main content Ini Bagian Content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-2"> </div>
                        <div class="col-8">
                            <div class="card card-primary">
                                <?php $id_user = $this->session->userdata('kd_pengguna')?>
                                <form action="<?php echo base_url('Admin/profil/edit_ubahpw/'.$id_user)?>" method="POST"
                                    role="form" class="form-horizontal">
                                    <input name="id_admin" value="<?php echo $user->id_admin; ?>" type="hidden">
                                    <input name="nama_admin" value="<?php echo $user->nama_admin; ?>" type="hidden">
                                    <input name="alamat_admin" value="<?php echo $user->alamat_admin; ?>" type="hidden">
                                    <input name="no_admin" value="<?php echo $user->no_admin; ?>" type="hidden">
                                    <input name="email_admin" value="<?php echo $user->email_admin; ?>" type="hidden">
                                    <input name="foto_admin" value="<?php echo $user->foto_admin; ?>" type="hidden">
                                    <input name="username_admin" value="<?php echo $user->username_admin; ?>"
                                        type="hidden">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="inputpasswordlama1" class="col-sm-2 col-form-label">Password
                                                Lama</label>
                                            <div class="col-sm-10">
                                                <input value="<?php echo $user->password_admin; ?>" type="password"
                                                    disabled class="form-control" id="inputpasswordlama1">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputpasswordbaru1" class="col-sm-2 col-form-label">Password
                                                Baru</label>
                                            <div class="col-sm-10">
                                                <input name="password_admin" type="password" class="form-control"
                                                    id="inputpasswordbaru1">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
                                        <!-- /.card-footer -->
                                </form>
                            </div>
                        </div>
                        <div class="col-2"> </div>
                    </div>
                </div>

                <!-- Ini bagian Content -->


        </div>
        <!--/. container-fluid -->
        </section>
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; INDANAH GROUP</strong>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>

</body>

</html>