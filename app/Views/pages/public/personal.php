<?= $this->extend('layouts/blog_base') ?>
<?= $this->section('content') ?>
<!-- Datatable CSS -->
<link href='<?= base_url();?>/assets/vendor/datatables/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='<?= base_url();?>/assets/vendor/datatables/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

<style type="text/css">
.dt-buttons {
    width: 100%;
}
.card-header{
    text-align: center;
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
        <?php
    if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
            <?= session()->getFlashdata('success') ?>
        </div>
        <?php elseif (session()->getFlashdata('failed')) : ?>
        <div class="alert alert-danger alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
            <?= session()->getFlashdata('failed') ?>
        </div>
        <?php endif; ?>
        <div class="content-wrapper">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4><?=$page_title?> </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)"><?=$page_title?></a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?=$page_title?></h4>

            </div>

            <div class="card-body">
                <div class="container-fluid">
                    <form action="<?= base_url('update_user') ?>" method="POST">
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
                        <div class="mb-3 col-md-6">
                            <label for="email" class="control-label">Name</label>
                            <div class="input-group rounded-0">
                                <input type="text" class="form-control rounded-0" id="name" name="name" autofocus placeholder="<?= session()->get('firstname'); ?> <?= session()->get('lastname'); ?>" value="<?= !empty($user['name']) ? $user['name'] : '' ?>" required="required">
                                <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-user"></i></div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="email" class="control-label">Email</label>
                            <div class="input-group rounded-0">
                                <input type="email" class="form-control rounded-0" id="email" name="email" placeholder="<?= session()->get('email'); ?>" value="<?= !empty($user['email']) ? $user['email'] : '' ?>" required="required">
                                <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-at"></i></div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="password" class="control-label">New Password</label>
                            <div class="input-group rounded-0">
                                <input type="password" class="form-control rounded-0" id="password" name="password" placeholder="**********">
                                <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-key"></i></div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="password" class="control-label">Confirm New Password</label>
                            <div class="input-group rounded-0">
                                <input type="password" class="form-control rounded-0" id="cpassword" name="cpassword" placeholder="**********">
                                <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-key"></i></div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="password" class="control-label">Current Password</label>
                            <div class="input-group rounded-0">
                                <input type="password" class="form-control rounded-0" id="current_password" name="current_password" placeholder="**********" required>
                                <div class="input-group-text bg-light bg-gradient rounded-0"><i class="fa fa-key"></i></div>
                            </div>
                        </div>
                        <div class="d-grid gap-1">
                            <button class="btn rounded-0 btn-primary bg-gradient">Update</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>

        <!-- plugins:js -->

        <?= $this->endSection() ?>