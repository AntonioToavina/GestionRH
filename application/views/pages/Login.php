<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RH</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet">
  

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>

<body>

    <section id="intro" class="clearfix">

        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-6 intro-info order-md-first order-last">
                    
                    <div class="box">
                        <h2>Login</h2>
                        <form action="<?php echo base_url('Home/toAnonce') ; ?>" method="POST"> 
                            <p>
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" id="email" style="width:300px">
                            </p>
                            <p>
                                <label>Password</label>
                                <input type="password" class="form-control" name="email" id="email" style="width:300px">
                            </p>
                            <p>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </p>
                        </form>
                        
                    </div>
                    
                </div>
            
                <div class="col-md-6 intro-img order-md-last order-first">
                    <img src="<?php echo base_url('assets/img/intro-img.svg'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </section>

    <script src="<?php echo site_url('assets/js/script.js') ?>" ></script>
    <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/jquery/jquery-migrate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/mobile-nav/mobile-nav.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/lightbox/js/lightbox.min.js'); ?>"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url('assets/contactform/contactform.js'); ?>"></script>

</body>
</html>
