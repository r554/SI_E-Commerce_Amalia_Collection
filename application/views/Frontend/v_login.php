<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Amalia Collection</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/Frontend/images/amalia.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/voler/dist/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/all.min.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <strong>
                                    <h1>LOGIN</h1>
                                </strong>
                                <a href="<?= base_url('Homepage') ?>">
                                    <img src="<?php echo base_url() ?>/assets/Frontend/images/amalia.png" height="80" class='mb-4'>
                                </a>
                                <a href="<?= base_url('Homepage') ?>">
                                    <h3>Amalia Collection</h3>
                                </a>
                                <p>Silahkan Login Untuk Melanjutkan Berbelanja</p>
                            </div>
                            <?php
                            if (isset($_SESSION["logingagal"])) { ?>
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <strong>Login Gagal</strong> Username dan Password salah <strong>Atau</strong> akun Non aktif.
                                    <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php }
                            $this->session->unset_userdata('logingagal');
                            ?>
                            <form action="<?php echo base_url('login0/aksi_login'); ?>" method="post">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" name="USERNAME_PELANGGAN" id="username" required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                        <a href="<?php echo base_url('Lupa_Password/forgotPassword'); ?>" class='float-right'>
                                            <small>Lupa Password?</small>
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" name="PASSWORD_PELANGGAN" id="password" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                        <div class="float-right">
                                            <button id="tombol_password" type="button" class="btn btn-default">
                                                <span class="fa fa-eye"> <small> Lihat Password</small></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search this blog">
                                    <div class="form-control-icon">
                                        <i data-feather="lock"></i>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div> -->
                                <div class='form-check clearfix my-4'>
                                    <div class="checkbox float-left">
                                        <!-- <input type="checkbox" id="checkbox1" class='form-check-input'>
                                        <label for="checkbox1">Remember me</label> -->
                                        <!-- <a href="auth-register.html">Belum Punya Akun? Daftar</a> -->
                                    </div>
                                    <div class="float-right">
                                        <!-- <a href="auth-register.html">Belum Punya Akun? Daftar</a> -->
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <a href="<?= base_url('register/tambah_register') ?>" class="float-left">Belum Punya Akun? Daftar</a>
                                    <!-- <button type="button" class="btn btn-secondary float-left">Example Button floated left</button> -->
                                    <button class="btn btn-primary float-right">Masuk</button>
                                </div>
                            </form>
                            <!-- <div class="divider">
                                <div class="divider-text">OR</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="<?= base_url() ?>assets/voler/dist/assets/js/feather-icons/feather.min.js"></script>
    <script src="<?= base_url() ?>assets/voler/dist/assets/js/app.js"></script>

    <script src="<?= base_url() ?>assets/voler/dist/assets/js/main.js"></script>

    <script type="text/javascript">
        var b = document.getElementById("tombol_password");
        var pass2 = document.getElementById("password");
        b.onclick = function() {
            if (pass2.type === "password") {
                pass2.type = 'text';
                b.innerHTML = '<span class="fa fa-eye-slash"> <small> Sembunyikan Password</small></span>';
            } else {
                pass2.type = 'password'
                b.innerHTML = '<span class="fa fa-eye"> <small> Lihat Password</small></span>';
            }
        }
    </script>
</body>

</html>