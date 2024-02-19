<?= $this->extend('layouts/master') ?>
<?= $this->section('contents') ?>
<!-- Datatable CSS -->
<link href='<?= base_url(); ?>/assets/vendor/datatables/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
<link href='<?= base_url(); ?>/assets/vendor/datatables/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

<style type="text/css">
    .dt-buttons {
        width: 100%;
    }
</style>

<!-- Datatable -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<script src="<?= base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/plugins-init/datatables.init.js"></script>
<!-- jQuery Library -->
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/jquery.min.js"></script>
<!-- Datatable JS -->
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/jszip.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/assets/vendor/datatables/button/buttons.html5.min.js"></script>
 

<?php $validation =  \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?= view('nav'); ?>
    <!-- partial -->
    <div class="main-panel">
        <?php
        if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show my-3" style="width: 90%;
    margin-left: 5%; padding-left: 34%;">
                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php elseif (session()->getFlashdata('failed')) : ?>
            <div class="alert alert-danger alert-dismissible fade show my-3" style="width: 90%;
                margin-left: 5%; padding-left: 34%;">
                <button type="button" class="btn-close" data-bs-dismiss="alert">&times;</button>
                <?= session()->getFlashdata('failed') ?>
            </div>
        <?php endif; ?>
        <div class="content-wrapper">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4 style="color:#1ba70c"> </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <!-- <li class="breadcrumb-item active"><a href="javascript:void(0)"><-?= $page_title ?></a></li> -->
                    </ol>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method="POST" action="<?= base_url('/updateimage3'.$bran['id']) ?>" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="card-title">Update Profile Image</h5>
                            </div>
                            <div class="card-body p-4">
                                <div class="form-group mb-3 has-validation">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control <?php if ($validation->getError('image')) : ?>is-invalid<?php endif ?>" name="image" />
                                    <?php if ($validation->getError('photo')) : ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('photo') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn" style="color:green; border:1px solid green;">Update</button>
                            <a href="<?= base_url('/show') ?>" class="btn" style="border:1px solid red; color:red;">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    </div>
        <!-- plugins:js -->

    <?= $this->endSection() ?>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
