<?php $validation =  \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>
<?= $ids = $session->get('id'); ?>
    <style>
        .navbar .d-flex a{
            color: #1ba70c;
        }
        
    </style>
 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row ">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center" >
                <a class="navbar-brand brand-logo mr-5" href="index.html">BDMS</a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url();?>/assets/img/logo.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="ti-view-list"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="ti-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <?php if(($session->get('profile')) ==''):?>
                            <img src="<?= base_url()?>/assets/upload/<?= $session->get('photo'); ?>" width="20" alt="">
                            <?php else  : ?>
                            <img src="<?= $session->get('profile'); ?>" width="20"> 
                            <?php endif; ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a href="#" class="dropdown-item">
                                <!-- <i class="ti-user text-primary"></i> -->
                                <h4>Hello, <?= $session->get('firstname'); ?> <?= $session->get('lastname'); ?></h4>
                            </a>
                            <a href="<?= base_url("/admins/change_pwd".$ids) ?>" class="dropdown-item">
                                <i class="ti-key text-primary"></i>
                                Profile
                            </a>
                            <a href="<?= base_url("/admins/edit".$ids) ?>" class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a href="<?= base_url('logout2') ?>" class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="ti-view-list"></span>
                </button>
            </div>
        </nav>
<style>
    body{
        background-color: red;
    }
    .main-panel{
        background-color: red;
    }
    .content-wrapper{
        background-color: red;
    }
</style>