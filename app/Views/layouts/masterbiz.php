<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Blood Bank Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <link rel="stylesheet" href="<?= base_url();?>public/assets/img/ubts.png', 'icon'); ?>
 <link rel="stylesheet" href="<?= base_url();?>public/assets/img/apple-touch-icon.png', 'apple-touch-icon'); ?>

  <!-- Google Fonts -->
 <link rel="stylesheet" href="<?= base_url();?>https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" type="text/css">
  <!-- Vendor CSS Files -->
 <link rel="stylesheet" href="<?= base_url();?>public/assets/vendor/aos/aos.css" type="text/css"> <link rel="stylesheet" href="<?= base_url();?>public/assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css"> <link rel="stylesheet" href="<?= base_url();?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" type="text/css"> <link rel="stylesheet" href="<?= base_url();?>public/assets/vendor/boxicons/css/boxicons.min.css" type="text/css"> 
 <link rel="stylesheet" href="<?= base_url();?>public/assets/vendor/glightbox/css/glightbox.min.css" type="text/css"> <link rel="stylesheet" href="<?= base_url();?>public/assets/vendor/swiper/swiper-bundle.min.css" type="text/css">
  <!-- Template Main CSS File -->
 <link rel="stylesheet" href="<?= base_url();?>public/assets/css/style.css" type="text/css">

<!-- Css Styles -->
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/style.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/public/biz/assets/css/style.css" type="text/css">



</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?= base_URL('/'); ?>"><img src="<?= base_URL('public/assets/img/ubts.png'); ?>" alt=""><span style="color: #d62a24" ;></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="public/assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="<?= base_URL('/'); ?>" style="color: #d62a24" ;>Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_URL('contactus'); ?>" style="color: #d62a24" ;>Contact</a></li>
          <!-- <li><a class="nav-link scrollto" href="">About</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="">Services</a></li>
          <li><a class="nav-link scrollto " href="">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="">Team</a></li> -->
          <li>
               <div class="header__top__right__auth" style="">
                   <?php if(empty(session()->get('isLoggedIn'))): ?>
                   
                       <!-- <a href="<?= base_url('/login2') ?>"><i class="fa fa-user"></i>Login</a> -->
                       <!-- ##################### -->
                       <div class="header-profile" style="color: #d62a24" ;>
                           <a class="nav-link scrollto" href="#" role="button" data-toggle="dropdown" >Login</a>
                           <div class="dropdown-menu dropdown-menu-right">
                               <a href="<?= base_url('/login1') ?>" class="dropdown-item ai-icon" style="background-color:white">
                                   <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                       viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                       stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                       <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                       <polyline points="16 17 21 12 16 7"></polyline>
                                       <line x1="21" y1="12" x2="9" y2="12"></line>
                                   </svg>
                                   <span class="ml-2">Admin </span>
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="<?= base_url('/login2'); ?>" class="dropdown-item ai-icon" style="background-color:white">
                                   <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                       viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                       stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                       <path
                                           d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                       </path>
                                       <polyline points="22,6 12,13 2,6"></polyline>
                                   </svg>
                                   <span class="ml-2">Donor</span>
                               </a>
                               <div class="dropdown-divider"></div>
                               <a href="<?= base_url('/login3'); ?>" class="dropdown-item ai-icon" style="background-color:white">
                                   <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                       viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                       stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                       <path
                                           d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                       </path>
                                       <polyline points="22,6 12,13 2,6"></polyline>
                                   </svg>
                                   <span class="ml-2">Hospital</span>
                               </a>
                           </div>
                       </div>
                       <!-- ####################### -->
                   
                   <?php else: ?>
                   <div class="header-profile" style ="background-color: rgb(219, 61, 61); color: white;">
                       <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                           <?php if((session()->get('profile')) ==''):?>
                           <img src="<?=base_url()?>/assets/upload/<?= session()->get('photo'); ?>" width="20" alt="">
                           <?php else  : ?>
                           <img src="<?= session()->get('profile'); ?>" width="20">
                           <?php endif; ?>
                           <?= session()->get('firstname'); ?> <?= session()->get('lastname'); ?>

                       </a>
                       <div class="dropdown-menu dropdown-menu-right" >
                           <a href="<?= base_url('/personal'); ?>" class="dropdown-item ai-icon">
                               <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                   viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail" >
                                   <path
                                       d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                   </path>
                                   <polyline points="22,6 12,13 2,6"></polyline>
                               </svg>
                               <span class="ml-2">Account Settings </span>
                           </a>
                           <div class="dropdown-divider"></div>
                           <a href="<?= base_url('logout2') ?>" class="dropdown-item ai-icon">
                               <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                   viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                   stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                   <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                   <polyline points="16 17 21 12 16 7"></polyline>
                                   <line x1="21" y1="12" x2="9" y2="12"></line>
                               </svg>
                               <span class="ml-2">Logout </span>
                           </a>
                       </div>
                       <?php endif; ?>
                   </div>
                </div>
          </li>
       
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <?= $this->renderSection('body-contents'); ?>


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to get all Updates</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe" style="background-color: #d62a24;">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h1 class="logo"><a href="<?= base_URL('/'); ?>"><img src="<?= base_URL('public/assets/img/ubts.png'); ?>" alt=""><span style="color: #d62a24" ;></span></a></h1>
            <p>
              P.O Box 1772 Nakasero Hill Rd, Kampala<br>
              Located in: Uganda red Cross Nakasero Blood bank <br>
              <strong>Phone:</strong>+256 708 141 903<br>
              <strong>Email:</strong> ubts@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hospitals</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Donors</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hospitals</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Reach us Out On the platforms below</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter" style="background-color: #d62a24;"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook" style="background-color: #d62a24;"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram" style="background-color: #d62a24;"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus" style="background-color: #d62a24;"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin" style="background-color: #d62a24;"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Online Blood Bank management System</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="#" style="color: #d62a24;">Batch two</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="background-color: #d62a24;"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url();?>/public/biz/assets/js/jquery.min.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="<?= base_url();?>/public/biz/assets/js/main.js"></script>
  <script src="<?= base_url();?>/public/biz/assets/js/nav.js"></script>

  <script src="<?= base_url();?>/public/biz/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url();?>/public/biz/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/public/biz/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url();?>/public/biz/assets/js/jquery-ui.min.js"></script>
    <script src="<?= base_url();?>/public/biz/assets/js/jquery.slicknav.js"></script>
    <script src="<?= base_url();?>/public/biz/assets/js/mixitup.min.js"></script>
    <script src="<?= base_url();?>/public/biz/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/public/biz/assets/js/main.js"></script>


</body>

</html>