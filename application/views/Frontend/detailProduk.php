<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('tambahan/assets/images/logo5.png');?>" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>detail barang</title>
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/web/assets/mobirise-icons2/mobirise2.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/tether/tether.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/bootstrap/css/bootstrap-grid.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/bootstrap/css/bootstrap-reboot.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/dropdown/css/style.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/socicon/css/styles.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/theme/css/style.css');?>">
  <link rel="preload" as="style" href="<?php echo base_url('tambahan/assets/mobirise/css/mbr-additional.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/mobirise/css/mbr-additional.css');?>" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="menu menu2 cid-sedrvk8C2S" once="menu" id="menu2-d">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://mobiri.se">
                        <img src="<?php echo base_url('tambahan/assets/images/logo.png');?>" alt="Mobirise" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary display-7" href="https://mobiri.se">Mobirise</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-secondary display-4" href="https://mobiri.se">
                            About us</a></li>
                    <li class="nav-item"><a class="nav-link link text-secondary display-4" href="https://mobiri.se">
                            Services</a></li>
                    <li class="nav-item"><a class="nav-link link text-secondary display-4" href="https://mobiri.se">Contacts</a>
                    </li></ul>
                
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-secondary display-4" href="https://mobiri.se">
                        Login</a></div>
            </div>
        </div>
    </nav>
</section>

<section class="features6 cid-seeDk1E6He" id="features7-h">
    <!---->
    

    
    <div class="container">
        <div class="card-wrapper">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="image-wrapper">
                        <img src="<?php echo base_url('tambahan/assets/images/product2.jpg');?>" alt="Mobirise">
                    </div>
                </div>
                <div class="col-12 col-lg">
                <?php 
                //$no = 1;
                foreach($detailProduk as $u){ 
                $u->id_produk 
                    ?>
                    <div class="text-box">
                        <h5 class="mbr-title mbr-fonts-style display-2">
                            <strong><?php echo $u->nama_produk ?></strong></h5>
                        <p class="mbr-text mbr-fonts-style display-7">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4" style="background-color:lavender;">Kategori</div>
                                <div class="col-sm-8" style="background-color:lavenderblush;"><?php echo $u->nama_kategori ?></div>
                                <div class="col-sm-4" style="background-color:lavender;">Warna</div>
                                <div class="col-sm-8" style="background-color:lavenderblush;"><?php echo $u->warna ?></div>
                                <div class="col-sm-4" style="background-color:lavender;">Barang Tersisa</div>
                                <div class="col-sm-8" style="background-color:lavenderblush;"><?php echo $u->jumlah_produk ?></div>
                                <div class="col-sm-4" style="background-color:lavender;">Berat Produk</div>
                                <div class="col-sm-8" style="background-color:lavenderblush;"><?php echo $u->berat_produk ?></div>                                
                            </div>
                            </div>
                            
                        <div class="cost">
                            <span class="currentcost mbr-fonts-style pr-2 display-2">Rp.<?php echo $u->harga ?></span>
                            <span class="oldcost mbr-fonts-style display-2">Rp.55000</span>
                        </div>
                        <div class="mbr-section-btn pt-3"><a href="https://mobiri.se" class="btn btn-primary display-4">Tambah Keranjang</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <?php } ?>
</section>

<section class="gallery6 mbr-gallery cid-seeCLfDvn1" id="gallery6-g">
    

    

    <div class="container">
        
        <div class="row mbr-gallery mt-4">
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sehycWYUBW-modal">
                    <img class="w-100" src="<?php echo base_url('tambahan/assets/images/features1.jpg');?>" alt="" data-slide-to="0" data-target="#lb-sehycWYUBW">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sehycWYUBW-modal">
                    <img class="w-100" src="<?php echo base_url('tambahan/assets/images/features2.jpg');?>" alt="" data-slide-to="1" data-target="#lb-sehycWYUBW">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sehycWYUBW-modal">
                    <img class="w-100" src="<?php echo base_url('tambahan/assets/images/features3.jpg');?>" alt="" data-slide-to="2" data-target="#lb-sehycWYUBW">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sehycWYUBW-modal">
                    <img class="w-100" src="<?php echo base_url('tambahan/assets/images/features4.jpg');?>" alt="" data-slide-to="3" data-target="#lb-sehycWYUBW">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="sehycWYUBW-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-sehycWYUBW" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="<?php echo base_url('tambahan/assets/images/features1.jpg');?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('tambahan/assets/images/features2.jpg');?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('tambahan/assets/images/features3.jpg');?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?php echo base_url('tambahan/assets/images/features4.jpg');?>" alt="">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" class="active" data-target="#lb-sehycWYUBW"></li>
                                <li data-slide-to="1" data-target="#lb-sehycWYUBW"></li>
                                <li data-slide-to="2" data-target="#lb-sehycWYUBW"></li>
                                <li data-slide-to="3" data-target="#lb-sehycWYUBW"></li>
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" aria-label="Close">
                            </a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" href="#lb-sehycWYUBW">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" href="#lb-sehycWYUBW">
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

<section class="content5 cid-seeOxtIONJ" id="content5-k">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                
                <h4 class="mbr-section-subtitle mbr-fonts-style mb-4 display-5">Deskripsi</h4>
                <p class="mbr-text mbr-fonts-style display-7">
                    You can use content blocks to arrange your articles, large texts, instructions. Combine these blocks with media blocks to add illustrations and video tutorials. You can use various content blocks to work with your text. Add quotations, lists, buttons. Select your text to change its formatting or add links. Mobirise is a simple website builder that helps you create amazing web pages without knowing any code.</p>
            </div>
        </div>
    </div>
</section>

<section class="footer3 cid-seeCeCy87Y" once="footers" id="footer3-e">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
                <ul class="foot-menu">
                    
                    
                    
                    
                    
                <li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">About us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Services</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Contact Us</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Careers</a>
                    </li><li class="foot-menu-item mbr-fonts-style display-7">
                        <a class="text-white" href="#" target="_blank">Work</a>
                    </li></ul>
            </div>
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    
                    
                    
                    
                    
                    
                <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                            <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">
                            <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://instagram.com/mobirise" target="_blank">
                            <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                            <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div><div class="soc-item">
                        <a href="https://www.behance.net/Mobirise" target="_blank">
                            <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                    </div></div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2025 Mobirise. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/z" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a>
    <p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Website was 
    <a href="https://mobirise.site/g" style="color:#aaa;">created</a> with Mobirise</p>
</section>
<script src="<?php echo base_url('tambahan/assets/web/assets/jquery/jquery.min.js');?>"></script>  
<script src="<?php echo base_url('tambahan/assets/popper/popper.min.js');?>"></script>  
<script src="<?php echo base_url('tambahan/assets/tether/tether.min.js');?>"></script>  
<script src="<?php echo base_url('tambahan/assets/bootstrap/js/bootstrap.min.js');?>"></script>  
<script src="<?php echo base_url('tambahan/assets/smoothscroll/smooth-scroll.js');?>"></script>  
<script src="<?php echo base_url('tambahan/assets/dropdown/js/nav-dropdown.js');?>"></script> 
<script src="<?php echo base_url('tambahan/assets/dropdown/js/navbar-dropdown.js');?>"></script>  
<script src="<?php echo base_url('tambahan/assets/touchswipe/jquery.touch-swipe.min.js');?>"></script>  
<script src="<?php echo base_url('tambahan/assets/theme/js/script.js');?>"></script>  
  
  
</body>
</html>