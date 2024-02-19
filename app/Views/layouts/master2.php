<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
    <link rel="icon" href="images/giphy.gif">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/open-iconic-bootstrap.min.css" type="text/css">
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/animate.css" type="text/css">

     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/owl.carousel.min.css" type="text/css">
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/owl.theme.default.min.css" type="text/css">
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/magnific-popup.css" type="text/css">

     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/aos.css" type="text/css">

     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/ionicons.min.css" type="text/css">

     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/bootstrap-datepicker.css" type="text/css">
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/jquery.timepicker.css" type="text/css">


     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/flaticon.css" type="text/css">
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/icomoon.css" type="text/css">
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/style.css" type="text/css">`

    <!-- icons for the Biz -->
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" type="text/css"> 

     <!-- Bizland css bossman  -->
     <link rel="stylesheet" href="<?= base_url();?>/public/assets/css/style_biz.css" type="text/css"> 
     

     <link rel="stylesheet" href="<?= base_url();?>/assets/css/font-awesome.min.css" type="text/css">
</head>



<?= $this->include('partials/index/header') ?>
    <div class="container py-4">
            <?php if($session->getFlashdata('main_error')): ?>
                <div class="alert alert-danger rounded-0">
                    <?= $session->getFlashdata('main_error') ?>
                </div>
            <?php endif; ?>
            <?php if($session->getFlashdata('main_success')): ?>
                <div class="alert alert-success rounded-0">
                    <?= $session->getFlashdata('main_success') ?>
                </div>
            <?php endif; ?>
        
    </div>
<body>

  <!-- ======= Header ======= -->
     <!-- NAVBAR -->
  
    <!-- END nav -->






        <!-- <h1>This is Raymond's test.</h1> -->

        <?=$this->renderSection('body-contents')?>







        <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Blood Bank <i class="icon-heart" aria-hidden="true"></i></h2>
                        <p>We solve the problem of blood emergencies by connecting blood donors directly with people in blood need.</p>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-5">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Home</a></li>
                            <li><a href="#" class="py-2 d-block">About</a></li>
                            <li><a href="#" class="py-2 d-block">Posts</a></li>
                            <li><a href="#" class="py-2 d-block">Contact</a></li>
                            <li><a href="#" class="py-2 d-block">Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contact Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Kampala, Uganda.</a></li>
                            <li><a href="#" class="py-2 d-block">+256 754361393</a></li>
                            <li><a href="#" class="py-2 d-block">atriffol@gmail.com</a></li>
                            <li><a href="#" class="py-2 d-block">albertmuuhwezi7@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">


                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER ---------------------------------------------------------------->


    <!-- loader -->
    <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" /></svg></div> -->


   <script src="<?= base_url();?>/public/assets/js/jquery.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/jquery-migrate-3.0.1.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/popper.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/bootstrap.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/jquery.easing.1.3.js"></script>
   <script src="<?= base_url();?>/public/assets/js/jquery.waypoints.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/jquery.stellar.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/owl.carousel.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/jquery.magnific-popup.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/aos.js"></script>
   <script src="<?= base_url();?>/public/assets/js/jquery.animateNumber.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/bootstrap-datepicker.js"></script>
   <script src="<?= base_url();?>/public/assets/js/jquery.timepicker.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/particles.min.js"></script>
   <script src="<?= base_url();?>/public/assets/js/particle.js"></script>
   <script src="<?= base_url();?>/public/assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
   <script src="<?= base_url();?>/public/assets/js/google-map.js"></script>
   <script src="<?= base_url();?>/public/assets/js/main.js"></script>

</body>

</html>




