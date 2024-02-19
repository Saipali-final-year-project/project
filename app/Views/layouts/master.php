<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?= base_url();?>/assets/vendor/fontawesome-free/css/all.min.css">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel='stylesheet' href='<?= base_url();?>/assets/css/font-awesome.min.css'>


    <link href="<?= base_url();?>/assets/css/styleD.css" rel="stylesheet">

    <link href="<?= base_url();?>/assets/css/style2.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/css/style3.css" rel="stylesheet">
   

    <link href="<?= base_url();?>/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <!-- <script src="<?= base_url();?>/assets/vendor/global/global.min.js"></script> -->
	<script src="<?= base_url();?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url();?>/assets/js/custom.min.js"></script>
    <script src="<?= base_url();?>/assets/js/dlabnav-init.js"></script>
   

    <!-- plugins:js -->
<script src="<?= base_url();?>/assets/vendor/base/vendor.bundle.base.js"></script>
<script src="<?= base_url();?>/assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url();?>/assets/js/off-canvas.js"></script>
<script src="<?= base_url();?>/assets/js/template.js"></script>

</head>


<body>
    <?php $validation =  \Config\Services::validation(); ?>
    <?php $session = \Config\Services::session(); ?>
    <div class="container-scroller">

        <?= $this->include('partials/dashboard/header') ?>
        <!-- body contents => Dynamic Page Content -->
        <?= $this->renderSection("contents") ?>

        <?= $this->include('partials/dashboard/footer') ?>


    </div>

 
    



</body>

</html>