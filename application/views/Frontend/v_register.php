<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Amalia Collection</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/voler/dist/assets/css/bootstrap.css">

    <link rel="shortcut icon" href="<?php echo base_url() ?>/assets/Frontend/images/amalia.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url() ?>assets/voler/dist/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/all.min.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <a href="<?= base_url('Homepage') ?>">
                                    <img src="<?php echo base_url() ?>/assets/Frontend/images/amalia.png" height="80" class='mb-4'>
                                </a>
                                <h3>Registrasi Akun Amalia Collection</h3>
                                <p>Silahkan Melengkapi Form Registrasi</p>
                            </div>
                            <form action="<?php echo base_url('register/tambah_register'); ?>" method="post">
                                <div class="row">
                                    <?php
                                    if (isset($_SESSION["message"])) { ?>
                                        <div class="alert alert-danger alert-dismissible fade show">
                                            <strong>Register Gagal</strong> Username Sudah Terdaftar
                                            <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    <?php }
                                    $this->session->unset_userdata('message');
                                    ?>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="first-name-column">Nama</label>
                                            <input type="text" id="first-name-column" class="form-control" name="nama_pelanggan" value="<?= set_value('nama_pelanggan') ?>" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                            <input type="hidden" name="id_pelanggan" id="" value="<?= $kd_pelanggan ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="last-name-column">No Telepon</label>
                                            <input type="text" id="last-name-column" class="form-control" name="no_pelanggan" value="<?= set_value('no_pelanggan') ?>" minlength="9" maxlength="14" onkeyup="this.value=this.value.replace(/[^0-9\-]+/g, '').replace(/(\..*)\./g, '$1');" required oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="username-column">Email</label>
                                            <input type="email" id="username-column" class="form-control" name="email_pelanggan" value="<?= set_value('email_pelanggan') ?>" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="input-group">
                                            <?php echo form_error('email_pelanggan', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="country-floating">Username</label>
                                            <input type="text" id="country-floating" class="form-control" name="username_pelanggan" value="<?= set_value('username_pelanggan') ?>" required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="form-group">
                                            <label for="company-column">Password</label>
                                            <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password') ?>" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="input-group">
                                            <?php echo form_error('password', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2">
                                        <div class="form-group">
                                            <label for="company-column"></label>
                                            <button id="tombol_password" type="button" class="btn btn-default form-control">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-10 col-10">
                                        <div class="form-group">
                                            <label for="email-id-column">Ulangi Password</label>
                                            <input type="password" class="form-control" name="password2" id="password2" value="<?= set_value('password2') ?>" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="input-group">
                                            <?php echo form_error('password2', '<small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-2">
                                        <div class="form-group">
                                            <label for="company-column"></label>
                                            <button id="tombol_password2" type="button" class="btn btn-default form-control">
                                                <span class="fa fa-eye"></span>
                                            </button>
                                        </div>
                                    </div>
                                </diV>

                                <a href="<?= base_url('Login0') ?>">Sudah Memiliki Akun? Login</a>
                                <div class="clearfix">
                                    <button type="submit" class="btn btn-primary float-right">Daftar</button>
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
                b.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else {
                pass2.type = 'password'
                b.innerHTML = '<i class="fa fa-eye"></i>';
            }
        }

        var h = document.getElementById("tombol_password2");
        var pass = document.getElementById("password2");
        h.onclick = function() {
            if (pass.type === "password") {
                pass.type = 'text';
                h.innerHTML = '<i class="fa fa-eye-slash"></i>';
            } else {
                pass.type = 'password'
                h.innerHTML = '<i class="fa fa-eye"></i>';
            }
        }
    </script>
</body>

</html>