<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php base_url() ?>assets/login/style.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?php echo base_url('login0/aksi_login'); ?>" method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <?php
                    if (isset($_SESSION["logingagal"])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <strong>Login Gagal</strong> username atau password salah.
                        <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php }
                    $this->session->unset_userdata('logingagal');
                    ?>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="USERNAME_PELANGGAN" placeholder="Username" maxlength="25" required />

                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="PASSWORD_PELANGGAN" placeholder="Password" required />
                    </div>
                    <a href="<?php echo base_url('Lupa_Password/forgotPassword'); ?>">
                        <p style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Forgot Password</p>
                    </a>
                    <input type="submit" value="Login" class="btn solid" />
                </form>


                <!-- ini sign up -->
                <form action="<?php echo base_url('register/tambah_register') ?>" method="POST" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    <?php
                    if (isset($_SESSION["sama_nim"])) { ?>
                    <div class="alert alert-info alert-dismissible fade show">
                        <i class="fa fa-check-circle text-success"></i>
                        NIM yang anda masukkan telah Terdaftar, tolong daftarkan NIM asli anda sendiri
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php }

                    if (isset($_SESSION["sama_password"])) { //tinggal cara hilangkan session 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show">
                        <i class="fa fa-check-circle text-success"></i>
                        Password yang anda masukkan tidak sama, tolong periksa kembali password dan konfirmasi password
                        anda
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>
                    <!-- alert jika nim sama atau password tidak sama -->
                    <input type="hidden" value="<?php echo $id_pelanggan ?>" name="id_pelanggan" required>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />

                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Selamat Datang Di Amalia</h3>
                    <p>
                        Jika Kamu Belum Punya Akun Silahkan Mendaftar Pada Sign Up
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Selamat Datang Di Amalia</h3>
                    <p>
                        Jika Kamu Sudah Memiliki Akun Silahkan Login
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="<?php base_url() ?>assets/login/app.js"></script>
</body>

</html>