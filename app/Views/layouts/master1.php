<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
     <!-- Google Font -->

<!-- Css Styles -->
<link rel="stylesheet" href="<?= base_url();?>/assets/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/style.css" type="text/css">
<link rel="stylesheet" href="<?= base_url();?>/assets/css/font-awesome.min.css" type="text/css">
</head>

<body>
    
   
<?= $this->include('partials/index/header') ?>

<!-- body contents => Dynamic Page Content -->
<?= $this->renderSection("body-contents") ?>

<?= $this->include('partials/index/footer') ?>
  

    

    <!-- Js Plugins -->
    <script src="<?= base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.slicknav.js"></script>
    <script src="<?= base_url();?>/assets/js/mixitup.min.js"></script>
    <script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/assets/js/main.js"></script>



</body>

</html>
