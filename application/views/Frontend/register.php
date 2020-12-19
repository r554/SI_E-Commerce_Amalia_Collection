<!DOCTYPE html>
<html>

<head>
    <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
    <meta name="description" content="">


    <!--
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/font-awesome/css/all.min.css"> 
-->

    <title>Login / Register</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend_mobi/assets/tether/tether.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend_mobi/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/Frontend_mobi/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/Frontend_mobi/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend_mobi/assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/Frontend_mobi/assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet"
        href="<?php echo base_url() ?>assets/Frontend_mobi/assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend_mobi/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend_mobi/assets/theme/css/style.css">
    <link rel="preload" as="style"
        href="<?php echo base_url() ?>assets/Frontend_mobi/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/Frontend_mobi/assets/mobirise/css/mbr-additional.css"
        type="text/css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>


    <style type="text/css">
    .mbr-section-head {
        color: #FF8B9A;
        text-align: center;
        font-size: 40px;
    }

    .AMALIA {
        color: #000000;
        text-align: center;
        font-size: 50px;
        margin: -160px;
    }

    img.amalialogo {
        margin: 160px;
        width: 300px;
        height: 300px;

    }
    </style>


</head>



<body>


    <div class="container-fluid form3 cid-secUY1vQCO">
        <br> <br>
        <div class="row">

            <div class="col-6 text-center">



                <img class="amalialogo" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/amalialogo.png">


                <div class="AMALIA">
                    <H3 class="text-center font-weight-bold ">AMALIA COLLECTION</H3>
                </div>

            </div>


            <div class="col-6">
                <div class="mbr-section-head">
                    <!--<h3 class="mbr-section-title align-center mb-0 display-2">  </h3>-->
                    <div class="col-lg-9 form-group">
                        <strong>Registration</strong>
                    </div>
                </div>

                <form action="<?php echo base_url('register/tambah_register') ?>" method="POST"
                    class="mbr-form form-with-styler mx-auto" data-form-title="Form Name"><input type="hidden"
                        name="email" data-form-email="true"
                        value="bPgovYoJ9FAAEe8R5AkakbTqdJQ3x8hi2TPalu2446gAeoNbPIxbWY1tJnsui43+y0dGp6bBe6eWWqrJv8WqRb7FkQ7bRqt16+QE7qqtqApQTHaU9i2q/2LWryT9+rR2">

                    <div class="">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">
                            Thanks for
                            filling
                            out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...!
                            some
                            problem!</div>
                    </div>


                    <div class="dragArea row">
                        <div class="col-lg-9  form-group" data-for="name">
                            <input type="text" name="name" placeholder="Nama" data-form-field="name"
                                class="form-control" value="" id="nama" required
                                oninvalid="this.setCustomValidity('Nama tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="col-lg-9  form-group" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email"
                                class="form-control" value="" id="email" required
                                oninvalid="this.setCustomValidity('Email tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="col-lg-9  form-group">
                            <div class="form-group" id="only-number">
                                <input type="text" name="phone" class="form-control" id="number"
                                    placeholder="No Telepon" minlength="9" maxlength="14" required>
                            </div>
                        </div>

                        <div class="col-lg-9 form-group">
                            <input type="text" name="alamat" placeholder="Alamat" data-form-field="alamat"
                                class="form-control" value="" id="alamat" required
                                oninvalid="this.setCustomValidity('Alamat tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="col-lg-9  form-group">
                            <input type="text" name="username" placeholder="Username" data-form-field="username"
                                class="form-control" value="" id="username" minlength="5" maxlength="30" required
                                oninvalid="this.setCustomValidity('Username tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="col-lg-9 form-group">
                            <input type="password" name="password" placeholder="Password" data-form-field="password"
                                class="form-control" value="" id="password" required
                                oninvalid="this.setCustomValidity('Password tidak boleh kosong')"
                                oninput="setCustomValidity('')">
                        </div>
                        <div class="col-9 mbr-section-btn align-center ">
                            <button type="submit" class="btn btn-secondary ">Register</button>
                        </div>
                    </div>

                    <div class="col-lg-9 form-group">
                        <div class="text-center ">
                            <h8> Sudah punya akun?</h8>
                            <a href="<?php echo base_url() ?>" class="text-decoration-none">Log-In </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <br><br>
    </div>






    <section class="footer3 cid-seeCeCy87Y" once="footers" id="footer3-e">
        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="row row-links">
                    <ul class="foot-menu">

                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a class="text-white" href="#" target="_blank">About us</a>
                        </li>
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a class="text-white" href="#" target="_blank">Services</a>
                        </li>
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a class="text-white" href="#" target="_blank">Contact Us</a>
                        </li>
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a class="text-white" href="#" target="_blank">Careers</a>
                        </li>
                        <li class="foot-menu-item mbr-fonts-style display-7">
                            <a class="text-white" href="#" target="_blank">Work</a>
                        </li>
                    </ul>
                </div>
                <div class="row social-row">
                    <div class="social-list align-right pb-2">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row row-copirayt">
                    <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                        © Copyright 2020 CV INDANAH GROUP.
                    </p>
                </div>
            </div>
        </div>
    </section>





    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/web/assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/popper/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/tether/tether.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/smoothscroll/smooth-scroll.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/formstyler/jquery.formstyler.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/formstyler/jquery.formstyler.min.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/datepicker/jquery.datetimepicker.full.js">
    </script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/sociallikes/social-likes.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/theme/js/script.js"></script>
    <script src="<?php echo base_url() ?>assets/Frontend_mobiassets/formoid/formoid.min.js"></script>

    <script>
    $(function() {
        $('#only-number').on('keydown', '#number', function(e) {
            -1 !== $
                .inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/
                .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) ||
                35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e
                    .keyCode) &&
                (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
        });
    })
    </script>



</body>

</html>