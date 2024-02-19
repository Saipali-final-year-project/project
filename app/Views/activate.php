<!doctype html>
<html lang="en">
<head>
    <title>Activation |</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Selling</title>
   
    <!-- Custom Stylesheet -->
    <link href="<?= base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    	<link href="<?= base_url();?>/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/css/style3.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/css/style2.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/css/style.css" rel="stylesheet">
   
<link rel='stylesheet' href='<?= base_url();?>/assets/css/font-awesome.min.css'>

</head>
<style>
    .category1, .category2, .category3, .location1, .location2, .location3, .location4{ 
        display: none;
    }
</style>
<body>
    

<?php $validation =  \Config\Services::validation(); ?>
    <?php $session = \Config\Services::session(); ?>
    <!-- Page Preloder -->
 <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

        <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" id="header">

<!-- Text Logo - Use this if you don't have a graphic logo -->
<!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Corso</a> -->

<!-- Image Logo -->
<!-- <a class="navbar-brand logo-image" href="index.html"><img src="<?= base_url();?>/assets/img/logo.png" alt=""></a>  -->

<!-- Mobile Menu Toggle Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-awesome fa fa-bars"></span>
</button>
<!-- end of mobile menu toggle button -->

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        </li>
        <li class="nav-item">
        <div class="header__top__right__language">
                                <a href="<?php echo base_url('/dashboard'); ?>"><i class="fa fa-shopping-bag"></i> SELL</a>
                            </div>
        </li>
        <li class="nav-item">
        <div class="header__top__right__auth" style="margin-top: -24px;">
               <?php if(empty(session()->get('isLoggedIn'))): ?>
            <div class="">
                <a href="<?= base_url('/login2') ?>" ><i class="fa fa-user"></i>Login</a>
            </div>
            <?php else: ?>
                <div class="header-profile">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="<?= base_url();?>/assets/img/blog/details/profile.jpg" width="20" alt="">
                                    <?= $session->get('firstname'); ?> <?= $session->get('lastname'); ?> 
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?= base_url('logout') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="<?= base_url('update_user') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Account Settings </span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="<?= base_url('logout2') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                </div>
            <?php endif; ?>
               </div>
        </li>
    </ul>
</div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->
<div style="margin-top: 5%; ">
<?php if(isset($error)):?>
    <div class="alert alert-danger alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
            <?=$error; ?>
        </div>
<?php endif;?>
</div>
<div style="margin-top: 5%; ">
<?php if(isset($success)):?>
    <div class="alert alert-success alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
            <?=$success; ?>
        </div>
<?php endif;?>
</div>

<!-- partial -->
  <script src='<?= base_url();?>/assets/js/jquery.min.js'></script>
  <script  src="<?= base_url();?>/assets/js/script.js"></script>


        <!-- Required vendors -->
    <script src="<?= base_url();?>/assets/vendor/global/global.min.js"></script>
	<script src="<?= base_url();?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url();?>/assets/js/custom.min.js"></script>
    <script src="<?= base_url();?>/assets/js/dlabnav-init.js"></script>
    

	<!-- Svganimation scripts -->
    <script src="<?= base_url();?>/assets/vendor/svganimation/vivus.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/svganimation/svg.animation.js"></script>
    
</body>
</html>