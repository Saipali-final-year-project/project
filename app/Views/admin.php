<?= $this->extend('AdminMaster/master.php'); ?>
<?= $this->section('body'); ?>

<div class="container mt-5">
    <?php $security = \Config\Services::security(); ?>
    <?php $validation = \Config\Services::validation(); ?>
    <?php
    if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show my-3">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php elseif (session()->getFlashdata('failed')): ?>
        <div class="alert alert-danger alert-dismissible fade show my-3">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <?= session()->getFlashdata('failed') ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-sm-12 w-25">
            <form method="post" action="<?php echo base_url('/admin_login') ?>">
                <h1>Admin login</h1>
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <?= csrf_field() ?>
                    <label for="exampleInputText1" class="form-label">Email</label>
                    <input type="email" name="email"
                        class="form-control <?php if ($validation->getError('email_err')): ?>is-invalid<?php endif ?>"
                        id="email" autofocus aria-describedby="textHelp">
                    <?php if ($validation->getError('email_err')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('email_err') ?>
                        </div>

                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Password</label>
                    <input type="Password" name="password"
                        class="form-control <?php if ($validation->getError('password_err')): ?>is-invalid<?php endif ?>"
                        id="password" aria-describedby="textHelp">
                    <?php if ($validation->getError('password_err')): ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password_err') ?>
                        </div>

                    <?php endif; ?>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



<script src=" https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="https: //cdn.jsdelivr.net/npm/sweetalert2@11">
</script>
<script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
<script>
    $(function () {
        $('#password').password().on('show.bs.password', function (e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function (e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function () {
            $('#password').password('toggle');
        });
    });

    <?= $this->endSection(); ?>