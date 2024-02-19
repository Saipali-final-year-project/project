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
                    <form action="<?= base_url("/parcel/update".$cargo['id']) ?>" method="post">
                            <?= csrf_field() ?>
                            <input type="hidden" name="id" class="form-control" 
                value="<?=$cargo['id'];?>">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Vechile Number Plate</label>
                                        <input type="text"
                                            class="form-control <?php if ($validation->getError('vechile_plate')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?=$cargo['vechile_plate'];?>"
                                        value="<?=$cargo['vechile_plate'];?>"id=" vechile_plate" name="vechile_plate" value="">
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('vechile_plate') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Driver Name</label>

                                        <select
                                            class="form-control <?php if ($validation->getError('driver_name')) : ?>is-invalid<?php endif ?>"
                                            name="driver_name" >
                                            <option value="">Select</option>
                                            <?php if (count($driver)) { ?>
                                            <?php foreach ($driver as $dri) { ?>
                                            <option value="<?= $dri['firstname'] ?> <?= $dri['lastname'] ?>">
                                                <?= $dri['firstname'] ?> <?= $dri['lastname'] ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>

                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('driver_name') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Driver Mobile Number</label>

                                        <select
                                            class="form-control <?php if ($validation->getError('driver_mobile')) : ?>is-invalid<?php endif ?>"
                                            name="driver_mobile">
                                            <option value="">Select</option>
                                            <?php if (count($driver)) { ?>
                                            <?php foreach ($driver as $dri) { ?>
                                            <option value="<?= $dri['mobile'] ?>"><?= $dri['mobile'] ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>

                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('driver_mobile') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Invoice Number</label>
                                        <input type="text"
                                            class="form-control <?php if ($validation->getError('invoice_no')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?=$cargo['invoice_no'];?>"
                                        value="<?=$cargo['invoice_no'];?>" id=" invoice_no" name="invoice_no" value="">
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('invoice_no') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Product Name</label>
                                        <input type="text"
                                            class="form-control <?php if ($validation->getError('product_name')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?=$cargo['product_name'];?>"
                                        value="<?=$cargo['product_name'];?>" id=" product_name" name="product_name" value="">
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('product_name') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Price</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">UGX</span>

                                            </div>
                                            <input type="number"
                                                class="form-control <?php if ($validation->getError('price')) : ?>is-invalid<?php endif ?>"
                                                    placeholder="<?=$cargo['price'];?>"
                                        value="<?=$cargo['price'];?>" id=" price" name="price" value="">
                                            <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('price') ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Price</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">QTY</span>

                                            </div>
                                            <input type="number"
                                                class="form-control <?php if ($validation->getError('qty')) : ?>is-invalid<?php endif ?>"
                                                    placeholder="<?=$cargo['qty'];?>"
                                        value="<?=$cargo['qty'];?>" id=" qty" name="qty" value="">
                                            <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('qty') ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Booking mode</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('booking_mode')) : ?>is-invalid<?php endif ?>"
                                            name="booking_mode">
                                            <option value="">Select </option>
                                            <option value="Paid">Paid</option>
                                            <option value="To Pay">To Pay</option>
                                            <option value="TBB">TBB</option>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('booking_mode') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Transport mode</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('mode')) : ?>is-invalid<?php endif ?>"
                                            name="mode">
                                            <option value="">Select </option>
                                            <option value="Truck">Truck</option>
                                            <option value="Lorry">Lorry</option>
                                            <option value="Bus">Bus</option>
                                            <option value="Taxis">Taxis</option>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('mode') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Departure Date</label>
                                        <input 
                                            class="datepicker-default form-control <?php if ($validation->getError('dept_name')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?=$cargo['dept_time'];?>"
                                        value="<?=$cargo['dept_time'];?>" id=" dept_name" name="dept_name"  >
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('dept_name') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                              
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('status')) : ?>is-invalid<?php endif ?>"
                                            name="status">
                                            <option value="In Transit">In Transit</option>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('status') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Your Branch</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('sender_branch')) : ?>is-invalid<?php endif ?>"
                                            name="sender_branch">
                                            <option value="">Select Branch</option>
                                            <?php if (count($branch)) { ?>
                                            <?php foreach ($branch as $bra) { ?>
                                            <option value="<?= $bra['Bname'] ?>"><?= $bra['Bname'] ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('sender_mode') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" readonly="true" name="sender_name" type="text"
                                            value="<?= $session->get('firstname'); ?> <?= $session->get('lastname'); ?> ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" readonly="true" name="sender_mobile" type="text"
                                            value="<?= $session->get('mobile'); ?> ">
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