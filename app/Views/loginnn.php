<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login |</title>
    <!-- Favicon icon -->
    <link href="<?= base_url();?>/assets/css/style2.css" rel="stylesheet">

</head>
<?php $security = \Config\Services::security(); ?>
<?php $validation =  \Config\Services::validation(); ?>

<body class="h-100 bg-danger">

    <div class="authincation h-100" data-setbg="public/assets/img/featured/feature-5.jpg>
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div style="margin-top: 5%; ">
                        <?php if(isset($error)):?>
                        <div class="alert alert-danger alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 24%;">
                            <?=$error; ?>
                        </div>
                        <?php endif;?>
                    </div>
                    <div style="margin-top: 5%; ">
                        <?php if(isset($success)):?>
                        <div class="alert alert-success alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 24%;">
                            <?=$success; ?>
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in Hospital account</h4>
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
                                    <form action="<?php echo base_url('/login3'); ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" style="height: 50px;"
                                                class="form-control  <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>"
                                                id="email" name="email">

                                            <?php if ($validation->getError('email')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('email') ?>
                                            </div>

                                            <?php endif; ?>

                                        </div>


                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" style="height: 50px;"
                                                class="form-control <?php if ($validation->getError('password')) : ?>is-invalid<?php endif ?>"
                                                id="password" name="password">
                                            <?php if ($validation->getError('password')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('password') ?>
                                            </div>

                                            <?php endif; ?>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-info"
                                                href="<?php echo base_url('/register2'); ?>">Sign up</a></p>
                                    </div>
                                    <div class="new-account mt-3">
                                        <p>Back to <a class="text-info" href="<?php echo base_url('/'); ?>">Home</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?= base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
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