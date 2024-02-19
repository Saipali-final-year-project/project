<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Forget-Password  |</title>
    <!-- Favicon icon -->
    <link href="<?= base_url();?>/assets/css/style2.css" rel="stylesheet">

</head>
<?php $security = \Config\Services::security(); ?>
    <?php $validation =  \Config\Services::validation(); ?>
  
    <body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                    <?php
                                        if (session()->getFlashdata('success')) : ?>
                                            <div class="alert alert-success">
                                                <?= session()->getFlashdata('success') ?>
                                            </div>
                                        <?php elseif (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                        <?php endif; ?>
                                    <form action="<?php echo base_url('/forget-password'); ?>" method="post">
                                    <?= csrf_field() ?>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" style="height: 50px;" class="form-control  <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" id="email" name="email">
                                                <?php if ($validation->getError('email')) : ?>
                                                    <div class="invalid-feedback">
                                                         <?= $validation->getError('email') ?>
                                                    </div>
                                                <?php endif; ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="<?= base_url();?>/assets/js/jquery-3.3.1.min.js" ></script>
<script src="<?= base_url();?>/assets/vendor/jquery-validation/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= base_url();?>/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="<?= base_url();?>/assets/js/plugins-init/sweetalert.init.js"></script>
<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
    <script>
    $(function() {
        $('#password').password().on('show.bs.password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function(e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function() {
            $('#password').password('toggle');
        });
    });
</script>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <!-- <script src="assets/vendor/global/global.min.js"></script> -->
	<script src="<?= base_url();?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url();?>/assets/js/dlabnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>