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
                        <h4 class="text-primary mb-4">Products Information</h4>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Categories <span class="pull-right">:</span>
                                </h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['categories'];?></span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Region<span class="pull-right">:</span>
                                </h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['region'];?></span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Type<span class="pull-right">:</span>
                                </h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['ctype'];?></span>
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
                                <h5 class="f-w-500">Brand<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['brand'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Description<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['description'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Color<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['color'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Material<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['material'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Image<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><img src="<?=base_url()?>/assets/upload/<?= $branch['image']?>" alt="" width="100" height="100">
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Price<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['price'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Quantity<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['qty'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Delivery<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['delivery'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Username<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['username'];?>
                                </span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <h5 class="f-w-500">Email<span class="pull-right">:</span></h5>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span><?=$branch['email'];?>
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