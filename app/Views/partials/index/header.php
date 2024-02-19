<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<style>
    .fa-bars{color: black;}
</style>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-light navbar-custom fixed-top" id="header" >

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fa fa-bars"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <div class="header__top">
            <div class="container">
            </div>
        </div>
        <div class="container" id=" header__topmi">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <!-- <a href="./"><img src="<?= base_url();?>/assets/img/logo.png" alt=""></a> -->
                        <!-- <h3 class="text-bold text-dark" style="font-size: xxx-large;">DBMS</h3> -->
                        <img src="<?= base_url();?>/assets/img/ubts.png" alt="" style="width: 50px; height: 50gin-top: -7px;">
                    </div>
                </div>
            </div>
        </div>
        <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
                <div class="header__top__right__auth" style="margin-top: -24px;">
                    <?php if(empty(session()->get('isLoggedIn'))): ?>
                    <div class="">
                        <!-- <a href="<?= base_url('/login2') ?>"><i class="fa fa-user"></i>Login</a> -->
                        <!-- ##################### -->
                        <div class="header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown"><i
                                    class="fa fa-user text-danger text-bold">Login</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?= base_url('/login1') ?>" class="dropdown-item ai-icon">
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
                                <a href="<?= base_url('/login2'); ?>" class="dropdown-item ai-icon">
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
                                <a href="<?= base_url('/login3'); ?>" class="dropdown-item ai-icon">
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
                    </div>
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
            </li>
        </ul>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->


<!-- Header Section Begin -->
<header class="header" style="margin-top:60px;">
    <div class="header__top">
        <div class="container">
        </div>
    </div>
    <div class="container" id=" header__topmi">

    </div>
</header>
<!-- Header Section End -->