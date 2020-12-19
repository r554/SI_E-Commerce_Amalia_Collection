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

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Profil</li>
                                <li class="breadcrumb-item active">Edit Profil</li>
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
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="<?php echo base_url() ?>assets/Gambar/foto_profil/<?php echo $user->foto_admin ?>"
                                            alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?php echo $user->nama_admin ?></h3>
                                    <?php if($user->role == "2"){?>
                                    <p class="text-muted text-center">Login sebagai <?php echo "admin" ?></p>
                                    <?php } else{?>
                                    <p class="text-muted text-center">Login sebagai <?php echo "manager" ?></p>
                                    <?php }?>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">


                            <div class="card card-primary">
                                <?php $id_user = $this->session->userdata('kd_pengguna') ?>
                                <form action="<?php echo base_url('Admin/profil/edit/' . $id_user) ?>" method="POST"
                                    role="form" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input name="id_admin" value="<?php echo $user->id_admin; ?>" type="hidden">
                                            <input name="password_admin" type="hidden">
                                            <input name="username_admin" value="<?php echo $user->username_admin; ?>"
                                                type="hidden" class="form-control" id="exampleInputUsername1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNama1">Nama</label>
                                            <input name="nama_admin" value="<?php echo $user->nama_admin; ?>"
                                                type="nama" class="form-control" id="exampleInputNama1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputAlamat1">Alamat</label>
                                            <input name="alamat_admin" value="<?php echo $user->alamat_admin; ?>"
                                                type="alamat" class="form-control" id="exampleInputAlamat1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputNomorTelepon1">Nomor Telepon</label>
                                            <input value="<?php echo $user->no_admin; ?>" name="no_admin" type="text" class="form-control" minlength="9"
                                                min="9" maxlength="14" placeholder="Enter No HP (Harus Angka)"
                                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required
                                                oninvalid="this.setCustomValidity('No HP Tidak Boleh Kosong!')"
                                                oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input name="email_admin" value="<?php echo $user->email_admin; ?>"
                                                type="email" class="form-control" id="exampleInputEmail1">
                                        </div>

                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input name="foto_admin" value="<?php echo $user->foto_admin; ?>"
                                                type="file" multiple accept='image/*' id="menu_images">
                                            <input name="foto_admin" type="hidden"
                                                value="<?php echo $user->foto_admin ?>">

                                            <img src="<?php echo base_url() ?>assets/Gambar/foto_profil/<?php echo $user->foto_admin ?>"
                                            alt="" width="200px" hight="200px">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-success float-right">
                                            Simpan</button>
                                    </div>

                                </form>
                            </div>

                        </div>


                    </div>
                    <!-- /.col -->
                </div>

                <!-- Ini bagian Content -->


        </div>
        <!--/. container-fluid -->
        </section>
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->

    <?php $this->load->view('Backend/template/footer'); ?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php $this->load->view('Backend/template/js'); ?>

</body>

</html>