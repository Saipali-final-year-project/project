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
                <!-- Table -->

                <div class="profile-personal-info pt-4">
                    <h4 class="text-primary mb-4">Password Update</h4>
                    <form action="<?= base_url("/admins/update_pwd".$branch['id']) ?>">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id" class="form-control" 
                                        value="<?=$branch['id'];?>">
                        <div class="row ">
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="validationCustom03">Current Password</label>
                                    <input type="password" class="form-control" id="currentpassword" placeholder="Current Passsword" value="" name="currentpassword" required>
                                    <div class="invalid-feedback">Please provide  current password.</div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="validationCustom03">New Password</label>
                                    <input type="password" class="form-control" id="newpassword" placeholder="New Passsword" name="newpassword" required>
                                    <div class="invalid-feedback">Please provide  new password.</div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="validationCustom03">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Passsword" name="confirmpassword" required>
                                    <div class="invalid-feedback">Please provide  confirm password.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('/admins') ?>"  class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>



            </div>
        </div>

        <!-- plugins:js -->

        <?= $this->endSection() ?>