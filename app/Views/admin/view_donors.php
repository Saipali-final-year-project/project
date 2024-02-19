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
                <div id='empTable' class='display dataTable'>
                    <div class="profile-personal-info pt-4">
                        <h4 class="text-primary mb-4">donors Information</h4>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">First Name <span class="pull-right">:</span>
                                </h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['firstname'];?></span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Last Name<span class="pull-right">:</span>
                                </h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['lastname'];?></span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Email<span class="pull-right">:</span>
                                </h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['email'];?></span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Mobile<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['mobile'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">NIN<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['NIN'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">District<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['district'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Blood group<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['bg'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Subcounty<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['subcounty'];?>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href="<?= base_url('/donors') ?>" class="btn btn-primary">Back</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <!-- plugins:js -->

        <?= $this->endSection() ?>