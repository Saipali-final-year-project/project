<?= $this->extend('layouts/master') ?>
<?= $this->section('contents') ?>

<!-- Datatable CSS -->
<link href='<?= base_url();?>/assets/vendor/datatables/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='<?= base_url();?>/assets/vendor/datatables/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

<style type="text/css">
.dt-buttons {
    width: 100%;
}
</style>

<!-- Datatable -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<?php $validation =  \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?= view('nav'); ?>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi <?= $session->get('firstname'); ?> <?= $session->get('lastname'); ?>, </h4>
                        <p class="mb-0">Welcome back! </p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Registered Donors</p>
                        <div
                            class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php //echo count($staff); ?></h3>
                            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-danger">1130 <span class="text-black ml-1"><small>(30
                                    days)</small></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Registered Hospitals</p>
                        <div
                            class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php 
                            // echo count($branch); 
                            ?></h3>
                            <i class="ti-id-badge icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-danger">10 <span class="text-black ml-1"><small>(300
                                    days)</small></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Blood Collected</p>
                        <div
                            class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php 
                            // echo count($cargo); 
                            ?></h3>
                            <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-success">64 ML<span class="text-black ml-1"><small>(30
                                    days)</small></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title text-md-center text-xl-left">Request Fulfilled</p>
                        <div
                            class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"><?php 
                            // echo count($cargo); 
                            ?></h3>
                            <i class="ti-shopping-cart icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                        </div>
                        <p class="mb-0 mt-2 text-success">143<span class="text-black ml-1"><small>(30
                                    days)</small></span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card position-relative">
                    <div class="card-body">
                        <p class="card-title">Detailed Reports</p>
                        <div class="row">
                            <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                                <div class="ml-xl-4">
                                    <h1>33500</h1>
                                    <h3 class="font-weight-light mb-xl-4">Blood Donations from each hospitals</h3>
                                    <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date
                                        range. It is the period time a user is actively engaged with your website, page
                                        or app, etc</p>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-9">
                                <div class="row">
                                    <div class="col-md-6 mt-3 col-xl-5">
                                        <canvas id="north-america-chart"></canvas>
                                        <div id="north-america-legend"></div>
                                    </div>
                                    <div class="col-md-6 col-xl-7">
                                        <div class="table-responsive mb-3 mb-md-0">
                                            <table class="table table-borderless report-table">
                                                <tr>
                                                    <td class="text-muted">Hospital 1</td>
                                                    <td class="w-100 px-0">
                                                        <div class="progress progress-md mx-4">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-weight-bold mb-0">524</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Hospital 2</td>
                                                    <td class="w-100 px-0">
                                                        <div class="progress progress-md mx-4">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-weight-bold mb-0">722</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Hospital 3</td>
                                                    <td class="w-100 px-0">
                                                        <div class="progress progress-md mx-4">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 95%" aria-valuenow="95" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-weight-bold mb-0">173</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Hospital 4</td>
                                                    <td class="w-100 px-0">
                                                        <div class="progress progress-md mx-4">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-weight-bold mb-0">945</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Hospital 5</td>
                                                    <td class="w-100 px-0">
                                                        <div class="progress progress-md mx-4">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-weight-bold mb-0">553</h5>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Hospital 6</td>
                                                    <td class="w-100 px-0">
                                                        <div class="progress progress-md mx-4">
                                                            <div class="progress-bar bg-primary" role="progressbar"
                                                                style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-weight-bold mb-0">912</h5>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div>
                                <img class="cover-photo" src="<?= base_url();?>/assets/img/breadcrumb.jpg" alt="">
                            </div>

                        </div>
                        <div class="profile-info">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="profile-photo">
                                        <?php if(($session->get('profile')) ==''):?>
                                        <img src="<?= base_url();?>/assets/img/blog/details/profile.jpg"
                                            class="img-fluid rounded-circle" alt="">
                                        <?php else  : ?>
                                        <img src="<?= $session->get('profile'); ?>" class="img-fluid rounded-circle">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-sm-9 col-12">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 border-right-1">
                                            <div class="profile-name">
                                                <h4 class="text-primary mb-0"><?= $session->get('firstname'); ?>
                                                    <?= $session->get('lastname'); ?></h4>
                                                <p>UX / UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6 border-right-1">
                                            <div class="profile-email">
                                                <h4 class="text-muted mb-0"><?= $session->get('email'); ?> </h4>
                                                <p>+256<?= $session->get('mobile'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- <div class="card">
            <div class="card-body">
                <div class="profile-tab">
                    <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a href="#about-me" data-toggle="tab"
                                    class="nav-link active show">About Me</a>
                            </li>
                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab"
                                    class="nav-link">Setting</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="about-me" class="tab-pane fade active show">
                                <div class="profile-about-me">
                                    <div class="pt-4 border-bottom-1 pb-4">
                                        <h4 class="text-primary">About Me</h4>
                                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet
                                            mornings of spring which I enjoy with my whole heart. I am alone, and feel
                                            the charm of existence was created for the
                                            bliss of souls like mine.I am so happy, my dear friend, so absorbed in the
                                            exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                        <p>A collection of textile samples lay spread out on the table - Samsa was a
                                            travelling salesman - and above it there hung a picture that he had recently
                                            cut out of an illustrated magazine and housed
                                            in a nice, gilded frame.</p>
                                    </div>
                                </div>
                                <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                    <h4 class="text-primary mb-4">Skills</h4>
                                    <a href="javascript:void()"
                                        class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Admin</a>
                                    <a href="javascript:void()"
                                        class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Dashboard</a>
                                    <a href="javascript:void()"
                                        class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Photoshop</a>
                                    <a href="javascript:void()"
                                        class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Bootstrap</a>
                                    <a href="javascript:void()"
                                        class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Responsive</a>
                                    <a href="javascript:void()"
                                        class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-2 mb-1 m-b-10">Crypto</a>
                                </div>
                               <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                    <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()"
                                        class="text-muted pr-3 f-s-16"><i class="flag-icon flag-icon-us"></i>
                                        English</a> <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                            class="flag-icon flag-icon-fr"></i> French</a>
                                    <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                            class="flag-icon flag-icon-bd"></i> Bangla</a>
                                </div>


                                <div class="profile-personal-info">
                                    <h4 class="text-primary mb-4">Personal Information</h4>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-9"><span>Mitchell C.Shay</span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-9"><span>example@examplel.com</span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Availability <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-9"><span>Full Time (Free Lancer)</span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Age <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-9"><span>27</span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Location <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-9"><span>Rosemont Avenue Melbourne,
                                                Florida</span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Year Experience <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-9"><span>07 Year Experiences</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="profile-settings" class="tab-pane fade">
                                <div class="pt-3">
                                    <div class="settings-form">
                                        <h4 class="text-primary">Account Setting</h4>
                                        <form>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Email</label>
                                                    <input type="email" placeholder="Email" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Password</label>
                                                    <input type="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" placeholder="1234 Main St" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Address 2</label>
                                                <input type="text" placeholder="Apartment, studio, or floor"
                                                    class="form-control">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label>State</label>
                                                    <select class="form-control" id="inputState">
                                                        <option selected="">Choose...</option>
                                                        <option>Option 1</option>
                                                        <option>Option 2</option>
                                                        <option>Option 3</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Zip</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="gridCheck">
                                                    <label class="custom-control-label" for="gridCheck"> Check me
                                                        out</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Sign
                                                in</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
   
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- endinject -->

    
    <script src="<?= base_url();?>/assets/js/custom.min.js"></script>
    <script src="<?= base_url();?>/assets/js/dlabnav-init.js"></script>

    
<!-- partial -->
  <script src='<?= base_url();?>/assets/js/jquery.min.js'></script>
  <script  src="<?= base_url();?>/assets/js/script.js"></script>
        <?= $this->endSection() ?>