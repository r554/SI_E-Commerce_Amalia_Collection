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



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/Admin/plugins/fontawesome-free/css/all.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="<?php echo base_url() ?>asset/Admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/Admin/plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/Admin/dist/css/adminlte.min.css">



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
                            <h1 class="m-0">Footer Setings</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
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

                    <?php
                    $no = 1;
                    foreach ($footer as $z) {
                    ?>

                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Alamat & Info Kontak</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <form action="<?php echo base_url('Admin/footer/editfooter/' . $z->id_footer); ?>"
                                    method="post" role="form" enctype="multipart/form-data">

                                    <div class="card-body">

                                        <div class="toastsDefaultWarning">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <input name="Alamat" class="form-control" value="<?php echo $z->Alamat; ?>">
                                            <input name="id_footer" type="hidden" class="form-control"
                                                value="<?php echo $z->id_footer; ?>">
                                        </div>
                                        <div class="form-group">

                                            <input name="link_map" class="form-control" type="hidden"
                                                value="<?php echo $z->link_map; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email</label>
                                            <input name="email" class="form-control" value="<?php echo $z->email; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">No Telepon</label>
                                            <input name="no_telepon" class="form-control" pattern=".{9,}" maxlength="14"
                                                onkeyup="this.value=this.value.replace(/[^0-9]/g,'')" required
                                                title="3 characters minimum"
                                                oninvalid="this.setCustomValidity('No HP Minimal 9 Karakter!')"
                                                oninput="setCustomValidity('')" value="<?php echo $z->no_telepon; ?> ">
                                        </div>

                                    </div>


                            </div>

                        </div>



                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Sosial Media</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Twiter</label>
                                        <input name="twiter" class="form-control" value="<?php echo $z->twiter; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Facebook</label>
                                        <input name="facebok" class="form-control" value="<?php echo $z->facebok; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Youtube</label>
                                        <input name="youtube" class="form-control" value="<?php echo $z->youtube; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Instagram</label>
                                        <input name="instagram" class="form-control "
                                            value="<?php echo $z->instagram; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Line</label>
                                        <input name="fax" class="form-control" value="<?php echo $z->fax; ?>">
                                    </div>

                                </div>


                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary toastsDefaultWarning">Update</button>

                        </div>

                        </form>
                    </div>
                    <?php } ?>
                    <!-- /Ini Akhir Konten -->



                    <!-- Main Footer -->

                    <?php $this->load->view('Backend/template/footer'); ?>
                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <?php $this->load->view('Backend/template/js'); ?>




                <!-- jQuery -->
                <script src="<?php echo base_url() ?>asset/Admin/plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="<?php echo base_url() ?>asset/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- SweetAlert2 -->
                <script src="<?php echo base_url() ?>asset/Admin/plugins/sweetalert2/sweetalert2.min.js"></script>
                <!-- Toastr -->
                <script src="<?php echo base_url() ?>asset/Admin/plugins/toastr/toastr.min.js"></script>
                <!-- AdminLTE App -->
                <script src="<?php echo base_url() ?>asset/Admin/dist/js/adminlte.min.js"></script>
                <!-- AdminLTE for demo purposes -->
                <script src="<?php echo base_url() ?>asset/Admin/dist/js/demo.js"></script>







                <script>
                $(function() {
                    var Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });

                    $('.toastsDefaultWarning').click(function() {
                        $(document).Toasts('create', {
                            class: 'bg-success',
                            title: 'Info',
                            subtitle: 'Update',
                            body: 'Data berhasil diubah.'
                        })
                    });

                });
                </script>
</body>




</html>