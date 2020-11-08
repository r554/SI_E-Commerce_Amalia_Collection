<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/amalialogo.png"
        type="image/x-icon">
    <meta name="description" content="">

    <title>Amalia Collection</title>

    <?php $this->load->view('Frontend/template/head'); ?>

</head>

<body>


    <section class="menu menu2 cid-sedrvk8C2S" once="menu" id="menu2-6">
        <!-- ini Bagian Navbar -->
        <?php $this->load->view('Frontend/template/navbar') ?>
    </section>





    <!-- ini Bagian Slider -->
    <section class="slider1 cid-sedrWHeeAh" id="slider1-8">

        <div class="carousel slide carousel-fade" id="sehycMm2yg" data-ride="carousel" data-interval="7000">
            <ol class="carousel-indicators">
                <li data-slide-to="0" class="active" data-target="#sehycMm2yg"></li>
                <li data-slide-to="1" data-target="#sehycMm2yg"></li>
                <li data-slide-to="2" data-target="#sehycMm2yg"></li>
            </ol>

            <div class="carousel-inner">
                <?php foreach ($tbl_banner as $a) {  ?>
                <div class="carousel-item slider-image item 
                <?php if ($a->id_banner == 5) {
                        echo ("active");
                    } else {
                        echo ("");
                    }
                ?>
                    ">
                    <div class="item-wrapper">
                        <img class="d-block w-100"
                            src="<?php echo base_url() ?>assets/Gambar/foto_banner/<?php echo $a->foto_banner; ?>">
                    </div>
                </div>
                <?php }; ?>
            </div>

            <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#sehycMm2yg">
                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#sehycMm2yg">
                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>






    <!-- ini Bagian Atasnya Flashsale -->
    <section class="gallery5 mbr-gallery cid-sedzVq948u" id="gallery5-b">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>PRODUK TERBARU</strong>
                </h3>
                <div class="container-fluid">
                    <p> </p>
                    <p> </p>
                    <div class="row">
                        <div class="col-sm-3">
                            <center><a href="#">AKSESORIS</a></center>
                        </div>
                        <div class="col-sm-3">
                            <center><a href="#">PASHMINA</a></center>
                        </div>
                        <div class="col-sm-3">
                            <center><a href="#">SEGI EMPAT</a></center>
                        </div>
                        <div class="col-sm-3">
                            <center><a href="#">INER INSTAN</a></center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mbr-gallery mt-4">
                <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal">
                        <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/hijab1.jpg"
                            alt="" data-slide-to="0" data-target="#lb-sehycNc2tp">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>

                    <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>PASHMINA ZIG ZAG</center>
                        </a>
                    </h4>
                    <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>Rp.40.000</center>
                        </a>
                    </h5>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal">
                        <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/hijab2.jpg"
                            alt="" data-slide-to="1" data-target="#lb-sehycNc2tp">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>INNER INSTAN ZIG ZAG</center>
                        </a>
                    </h4>
                    <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>Rp.35.000</center>
                        </a>
                    </h5>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal">
                        <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/katalog4.png"
                            alt="" data-slide-to="2" data-target="#lb-sehycNc2tp">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>PASHMINA CRICKLE</center>
                        </a>
                    </h4>
                    <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>Rp.25.000</center>
                        </a>
                    </h5>
                </div>
                <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal">
                        <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/hijab4.jpg"
                            alt="" data-slide-to="3" data-target="#lb-sehycNc2tp">
                        <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                            <a href="#" class="text-primary">
                                <center>CIPUT</center>
                            </a>
                        </h4>
                        <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                            <a href="#" class="text-primary">
                                <center>Rp.20.000</center>
                            </a>
                        </h5>
                    </div>

                </div>
            </div>
            <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="sehycNc2tp-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel slide carousel-fade" id="lb-sehycNc2tp" data-ride="carousel"
                                data-interval="5000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                            src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/features1.jpg"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/features2.jpg"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/features3.jpg"
                                            alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                            src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/features4.jpg"
                                            alt="">
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" class="active" data-target="#lb-sehycNc2tp"></li>
                                    <li data-slide-to="1" data-target="#lb-sehycNc2tp"></li>
                                    <li data-slide-to="2" data-target="#lb-sehycNc2tp"></li>
                                    <li data-slide-to="3" data-target="#lb-sehycNc2tp"></li>
                                </ol>
                                <a role="button" href="" class="close" data-dismiss="modal" aria-label="Close">
                                </a>
                                <a class="carousel-control-prev carousel-control" role="button" data-slide="prev"
                                    href="#lb-sehycNc2tp">
                                    <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next carousel-control" role="button" data-slide="next"
                                    href="#lb-sehycNc2tp">
                                    <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>







    <!-- ini Bagian countdown Flashsale -->

    <section class="countdown3 cid-sedA0RcNIB" id="countdown3-c">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h3 class="mbr-section-title mb-5 align-center mbr-fonts-style display-2"><strong>FLASH
                            SALE</strong></h3>

                    <div class="countdown-cont align-center mb-5">
                        <div class="daysCountdown col-xs-3 col-sm-3 col-md-3" title="Days"></div>
                        <div class="hoursCountdown col-xs-3 col-sm-3 col-md-3" title="Hours"></div>
                        <div class="minutesCountdown col-xs-3 col-sm-3 col-md-3" title="Minutes"></div>
                        <div class="secondsCountdown col-xs-3 col-sm-3 col-md-3" title="Seconds"></div>
                        <div class="countdown" data-due-date="2021/01/01"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="mbr-section-head">
            </div>
        </div>
        <div class="row mbr-gallery mt-4">
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal">
                    <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/hijab1.jpg"
                        alt="" data-slide-to="0" data-target="#lb-sehycNc2tp">

                </div>

                <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                    <a href="#" class="text-primary">
                        <center>PASHMINA ZIG ZAG</center>
                    </a>
                </h4>
                <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                    <a href="#" class="text-primary">
                        <center>Rp.40.000</center>
                    </a>
                </h5>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal">
                    <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/hijab2.jpg"
                        alt="" data-slide-to="1" data-target="#lb-sehycNc2tp">

                </div>
                <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                    <a href="#" class="text-primary">
                        <center>INNER INSTAN ZIG ZAG</center>
                    </a>
                </h4>
                <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                    <a href="#" class="text-primary">
                        <center>Rp.35.000</center>
                    </a>
                </h5>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal">
                    <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/katalog4.png"
                        alt="" data-slide-to="2" data-target="#lb-sehycNc2tp">

                </div>
                <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                    <a href="#" class="text-primary">
                        <center>PASHMINA CRICKLE</center>
                    </a>
                </h4>
                <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                    <a href="#" class="text-primary">
                        <center>Rp.25.000</center>
                    </a>
                </h5>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal">
                    <img class="w-100" src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/hijab4.jpg"
                        alt="" data-slide-to="3" data-target="#lb-sehycNc2tp">
                    <h4 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>CIPUT</center>
                        </a>
                    </h4>
                    <h5 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <a href="#" class="text-primary">
                            <center>Rp.20.000</center>
                        </a>
                    </h5>
                </div>

            </div>
        </div>
    </section>







    <!-- ini Bagian Katalog -->

    <section class="content2 cid-sedsoQuNg9" id="content2-a">
        <div class="container-fluid">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>KATALOG</strong></h4>
                <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Fashion Hijab</h5>
            </div>
            <div class="row mt-4">
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/katalog1.png" alt=""
                                title="" data-slide-to="3">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">Pashmina Plisket</h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Rp. 50.000</strong></h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Bahan = Bubble chiffon original
                                <br>
                            </p>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Ukuran = 180 x 85 cm
                                <br>
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href=""
                                class="btn btn-primary item-btn display-7" target="_blank">Tambah ke Keranjang</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/katalog2.png" alt=""
                                title="" data-slide-to="0">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">Scrunchie</h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Rp. 10.000</strong></h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Bahan = Diamond
                                menggunakan kualitas terbaik, melarnya bagus dan awet, ukuran cukup di kepala tidak
                                besar ataupun kecil (untuk pakai helm nyaman gak sakit)
                                <br>
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href=""
                                class="btn btn-primary item-btn display-7" target="_blank">Tambah ke Keranjang</a></div>
                    </div>
                </div>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="<?php echo base_url() ?>assets/Frontend_mobi/assets/images/katalog3.png" alt=""
                                title="" data-slide-to="1">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5">Nura Scarf</h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-7"><strong>Rp.25.000</strong></h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Bahan = pollycotton
                            </p>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7">Ukuran = 115 x 115 cm
                            </p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href=""
                                class="btn item-btn btn-primary display-7" target="_blank">Tambah ke Keranjang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- ini Bagian Footer -->
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
                        © Copyright 2025 Mobirise. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section
        style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
        <a href="https://mobirise.site/n" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
        <!-- <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Website was <a href="https://mobirise.site/g" style="color:#aaa;">created</a> with Mobirise</p> -->
    </section>

    <!-- Bagian JS -->
    <?php $this->load->view('Frontend/template/js'); ?>

</body>

</html>