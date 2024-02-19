<?= $this->extend('layouts/login_base') ?>

<?= $this->section('content') ?>
<h2 class="text-center py-5"><?= env('system_name') ?></h2>
<div class="col-lg-3 col-md-4 col-sm-10 col-xs-12">
    <div class="card rounded-0" id="card">
        <div class="card-header">
            <div class="card-title h4 mb-0 text-center">Login</div>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="<?= base_url('login') ?>" method="POST">
                <?= csrf_field() ?>
                    <?php if($session->getFlashdata('error')): ?>
                        <div class="alert alert-danger rounded-0">
                            <?= $session->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <?php if($session->getFlashdata('success')): ?>
                        <div class="alert alert-success rounded-0">
                            <?= $session->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="email" class="control-label">Email</label>
                        <div class="input-group rounded-0">
                            <input type="email" class="form-control rounded-0" id="email" name="email" autofocus placeholder="jsmith@mail.com" value="<?= !empty($data->getPost('email')) ? $data->getPost('email') : '' ?>" required="required">
                            <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-user"></i></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="control-label">Password</label>
                        <div class="input-group rounded-0">
                            <input type="password" class="form-control rounded-0" id="password" name="password" placeholder="**********" required="required">
                            <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-key"></i></div>
                        </div>
                    </div>
                    <div class="d-grid gap-1">
                        <button class="btn rounded-0 btn-primary bg-gradient">Loginn</button>
                    </div>
                    <div class="mb-3">
                        <div class="text-center">
                            <a href="<?= base_url('/register') ?>" class="text-decoration-none fw-bold">Create an Account</a><br>
                            <a href="<?= base_url('/Blog') ?>" class="text-decoration-none fw-bold">Back to Site</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>