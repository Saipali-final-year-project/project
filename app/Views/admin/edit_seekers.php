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
<!-- Pick date -->
<link rel="stylesheet" href="<?= base_url();?>/assets/vendor/pickadate/themes/default.css">
<link rel="stylesheet" href="<?= base_url();?>/assets/vendor/pickadate/themes/default.date.css">



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
                    <h4 class="text-primary mb-4">Parcel / Seekers Update</h4>
                    <form action="<?= base_url("/seekers/update".$seekers['id']) ?>" method="get">
                    <div class="form-row">
                    <input type="hidden" name="id" class="form-control"  value="<?=$seekers['id'];?>">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input name="firstname" type="text" class="form-control " required placeholder="FirstName" value="<?=$seekers['firstname'];?>">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input required name="lastname" type="text" class="form-control " placeholder="LastName" value="<?=$seekers['lastname'];?>">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input required name="email" type="email" class="form-control " placeholder="example@gmail.com" value="<?=$seekers['email'];?>">

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mobile</label>
                                    <input required name="mobile" type="text" class="form-control " placeholder="07087865671" value="<?=$seekers['mobile'];?>">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>NIN</label>
                                    <input required name="NIN" type="text" class="form-control" value="<?=$seekers['NIN'];?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Region</label>
                                    <select class="form-select" name="region" aria-label="Default select example">
                                        <option selected>Select</option>
                                        <option value="Central">Central</option>
                                        <option value="Northern">Northern</option>
                                        <option value="Western">Western</option>
                                        <option value="Eastern">Eastern</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>District</label>
                                    <input required name="district" type="text" class="form-control" value="<?=$seekers['district'];?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Town</label>
                                    <input required name="town" type="text" class="form-control" value="<?=$seekers['town'];?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Blood Needed</label>
                                    <input required name="subcounty" type="text" class="form-control" value="<?=$seekers['firstname'];?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Collection Area</label>
                                    <select class="form-select" name="collection" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <?php if (count($branches)) {
                                            foreach ($branches as $branch) {
                                                echo '<option value="' . $branch['Bname'] . '">' . $branch['Bname'] . '</option>';
                                            }
                                        } ?>
                                    </select>

                                </div>

                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input required name="password" type="password" class="form-control" required>
                                </div>
                                <input name="status" type="hidden" class="form-control" value="Inactive">
                            </div>
                            <input type="submit" value="update" class="btn btn-primary">
                </div>
                    </form>



            </div>
        </div>

        <!-- plugins:js -->
       <!-- pickdate -->
       <script src="<?= base_url();?>/assets/vendor/pickadate/picker.js"></script>
        <script src="<?= base_url();?>/assets/vendor/pickadate/picker.time.js"></script>
        <script src="<?= base_url();?>/assets/vendor/pickadate/picker.date.js"></script>
        <!-- Pickdate -->
        <script src="<?= base_url();?>/assets/js/plugins-init/pickadate-init.js"></script>
        <?= $this->endSection() ?>