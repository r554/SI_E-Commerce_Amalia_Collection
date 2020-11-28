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
  
  
  <title>Login / Register</title>
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/tether/tether.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/bootstrap/css/bootstrap-grid.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/bootstrap/css/bootstrap-reboot.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/formstyler/jquery.formstyler.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/formstyler/jquery.formstyler.theme.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/datepicker/jquery.datetimepicker.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/socicon/css/styles.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/theme/css/style.css');?>">
  <link rel="preload" as="style" href="<?php echo base_url('tambahan/assets/mobirise/css/mbr-additional.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('tambahan/assets/mobirise/css/mbr-additional.css');?>" type="text/css">
  
  
  
  
</head>
<body> 


<section class="form4 cid-secUYvj1Zp mbr-fullscreen">
    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form">
            <?php 
	if (isset($_SESSION["logingagal"])){ ?>
	<div class="alert alert-danger alert-dismissible fade show">
		<strong>Login Gagal</strong> username atau password salah.
		<button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
  <?php } 
	  $this->session->unset_userdata('logingagal');
  ?>
                <form action="<?php echo base_url('login0/aksi_login'); ?>" method="post" class="mbr-form form-with-styler">                    
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2"><strong>Login</strong></h1>
                        </div>                        
                        <div class="col-lg-12 col-md col-12 form-group">
                            <input type="text" name="USERNAME_PELANGGAN" placeholder="Username" class="form-control" >
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group">
                            <input type="password" name="PASSWORD_PELANGGAN" placeholder="Password" class="form-control">
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn">
                            <button type="submit" value="Login" class="btn btn-secondary display-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="<?php echo base_url('tambahan/assets/images/logo amalia.jpg');?>" alt="BP">
                </div>
            </div>                  
        </div>       
    </div>
</section>


<section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;">
    <a href="https://mobirise.site/y"></a>
    </section>
        <script src="<?php echo base_url('tambahan/assets/web/assets/jquery/jquery.min.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/popper/popper.min.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/tether/tether.min.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/bootstrap/js/bootstrap.min.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/smoothscroll/smooth-scroll.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/formstyler/jquery.formstyler.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/formstyler/jquery.formstyler.min.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/datepicker/jquery.datetimepicker.full.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/sociallikes/social-likes.js');?>"></script>  
        <script src="<?php echo base_url('tambahan/assets/theme/js/script.js');?>"></script> 
        <script src="<?php  echo base_url('tambahan/assets/formoid/formoid.min.js');?>"></script>  
  
  
</body>
</html>