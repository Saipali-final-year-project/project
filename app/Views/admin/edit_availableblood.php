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
                    <h4 class="text-primary mb-4">blood Update</h4>
                    <form action="<?= base_url("/availableblood/update".$branch['id']) ?>">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id" class="form-control" value="<?=$branch['id'];?>">
                        <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">firstname </label>
                                    <input type="text" name="firstname" class="form-control"
                                        placeholder="<?=$branch['firstname'];?>" value="<?=$branch['firstname'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">lastname</label>
                                    <input type="text" name="lastname" class="form-control"
                                        placeholder="<?=$branch['lastname'];?>" value="<?=$branch['lastname'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Blood group</label>
                                    <input type="text" name="bg" class="form-control"
                                        placeholder="<?=$branch['bg'];?>" value="<?=$branch['bg'];?>">
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                <div class="form-group">
                                    <label class="form-label">Type</label>
                                    <input type="text" name="ctype" class="form-control" 
                                        placeholder="<?=$branch['ctype'];?>" value="yellow">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">District</label>
                                    <input type="text" name="district" class="form-control"
                                        placeholder="<?=$branch['district'];?>" value="<?=$branch['district'];?>">
                                </div>
                            </div>
                           
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">exp</label>
                                    <input type="date" name="exp" class="form-control"
                                        placeholder="<?=$branch['exp'];?>" value="<?=$branch['exp'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                <div class="form-group">
                                    <label class="form-label">Price</label>
                                    <input type="text" name="price" class="form-control" value="5000"
                                        placeholder="<?=$branch['price'];?>" value="<?=$branch['price'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Quantity</label>
                                    <input type="text" name="qty" class="form-control"
                                        placeholder="<?=$branch['qty'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Delivery</label>
                                    <input type="text" name="delivery" class="form-control"  value="kampala"
                                        placeholder="<?=$branch['delivery'];?>" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control"
                                        placeholder="<?=$branch['username'];?>" value="<?=$branch['username'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="<?=$branch['email'];?>" value="<?=$branch['email'];?>">
                                </div>
                            </div>
                            
                            <!-- <?php if(($session->get('type')) =='1'):?>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option value=""><?=$branch['status'];?></option>
                                        <option value="active">active</option>
                                        <option value="inactive">inactive</option>
                                    </select>
                                </div>
                            </div>
                            <?php endif; ?> -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('/availableblood') ?>" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>



            </div>
        </div>

        <!-- plugins:js -->

        <?= $this->endSection() ?>