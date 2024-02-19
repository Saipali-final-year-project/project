<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title.' | ' : "" ?><?= env('system_name') ?></title>


    <?= $this->renderSection('custom_css') ?> -->
    

<!-- Css Styles -->
<link href="<?= base_url();?>/assets/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/select2-bootstrap-5-theme.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/select2-bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/style.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/icons/font-awesome/css/font-awesome.min.css" type="text/css">


</head>
<body >
      <!--**********************************
            Header start
        ***********************************-->
        <div class="header" id="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link <?= isset($page_title) && $page_title == 'Home' ? 'active' : '' ?>" aria-current="page" href="<?= base_url('Main') ?>">Home</a>
            </li>
            <?php if($session->login_type == 1): ?>
            <li><a class="nav-link <?= isset($page_title) && $page_title == 'Categories' ? 'active' : '' ?>" href="<?= base_url('/Main_categories') ?>">Categories</a></li>
            <?php endif; ?>
            <li><a class="nav-link <?= isset($page_title) && $page_title == 'Posts' ? 'active' : '' ?>" href="<?= base_url('/Main_posts') ?>">Posts</a></li>
            <?php if($session->login_type == 1): ?>
            <li><a class="nav-link <?= isset($page_title) && $page_title == 'Users' ? 'active' : '' ?>" href="<?= base_url('/Main_users') ?>">Users</a></li>
            <?php endif; ?>
        </ul>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="<?= base_url();?>/assets/img/blog/details/profile.jpg" width="20" alt="">
                                    <?= $session->get('login_name') ?>
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
                                    <a href="<?= base_url('logout') ?>" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
   
    
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
        <?= $this->renderSection('content') ?>
    </div>
    <script src="<?= base_url();?>/assets/js/all.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>/assets/js/select2.full.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.bundle.js"></script>

    	<!-- Svganimation scripts -->
        <script src="<?= base_url();?>/assets/vendor/svganimation/vivus.min.js"></script>
    <script src="<?= base_url();?>/assets/vendor/svganimation/svg.animation.js"></script>

</body>
</html>