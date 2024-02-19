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
                    <h4 class="text-primary mb-4">Parcel / Cargo Update</h4>
                    <div class="card">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <tbody>
                                            <tr>
                                                <td>Driver Name : <?=$cargo['driver_name'];?><br><br>Driver Contact : <?=$cargo['driver_mobile'];?></td>
                                                <td>Client Name : <?=$cargo['sender_name'];?><br><br>Client Contact : <?=$cargo['sender_mobile'];?><br><br>PickUP Branch : <?=$cargo['sender_branch'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td">Tracker Number :</td>
                                                <td> <?=$cargo['tracker_no'];?>
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td>Invoice Number :</td>
                                                <td> <?=$cargo['invoice_no'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Vechile Plate Number :</td>
                                                <td> <?=$cargo['vechile_plate'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Product :</td>
                                                <td> <?=$cargo['product_name'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>QTY :</td>
                                                <td> <?=$cargo['qty'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price :</td>
                                                <td> <?=$cargo['price'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Transport Mode :</td>
                                                <td> <?=$cargo['mode'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status :</td>
                                                <td> <?=$cargo['status'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Booking Mode :</td>
                                                <td> <?=$cargo['mode'];?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Comment :</td>
                                                <td> <?=$cargo['comment'];?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <form action="<?= base_url("/transit/update".$cargo['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" class="form-control" 
                value="<?=$cargo['id'];?>">
                           
                            
                              
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('status')) : ?>is-invalid<?php endif ?>"
                                            name="status">
                                            <option value="In Transit">In Transit</option>
                                            <option value="Ready To Be picked">Ready To Be picked</option>
                                            <option value="Picked">Picked</option>
                                            <option value="Delivered">Delivered</option>
                                            <option value="Unsuccessful">Unsuccessful</option>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('status') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Comment</label>
                                        <textarea name="comment" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            
                        </form>
                </div>



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