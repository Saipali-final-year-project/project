<?= $this->extend('layouts/master') ?>
<?= $this->section('contents') ?> 

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
                        <h4>Add Delivery </h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Delivery</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Delivery </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('/add_parcel'); ?>" method="post">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Driver Name</label>

                                        <select
                                            class="form-control"
                                            name="driver_name">
                                            <option value="">Select</option>
                                            <?php if (count($driver)) { ?>
                                            <?php foreach ($driver as $dri) { ?>
                                            <option value="<?= $dri['firstname'] ?> <?= $dri['lastname'] ?>">
                                                <?= $dri['firstname'] ?> <?= $dri['lastname'] ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Vechile Number Plate</label>
                                        <input type="text"
                                            class="form-control"
                                            value="UAA123J" id=" vechile_plate" name="vechile_plate" value="">

                                
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Driver Mobile Number</label>

                                        <select
                                            class="form-control "
                                            name="driver_mobile">
                                            <option value="">Select</option>
                                            <?php if (count($driver)) { ?>
                                            <?php foreach ($driver as $dri) { ?>
                                            <option value="<?= $dri['mobile'] ?>"><?= $dri['mobile'] ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>

                                    </div> 
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Req Number</label>
                                        <input type="text"
                                            class="form-control"
                                            placeholder="Ba454643" id=" invoice_no" name="invoice_no" value="">
                                    
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" value="blood" name="product_name" class="form-control"
                                        placeholder="" value="">
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('product_name') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Booking mode</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('booking_mode')) : ?>is-invalid<?php endif ?>"
                                            name="booking_mode" value="free">
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
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Price</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">UGX</span>

                                            </div>
                                            <input type="number" value="3000"
                                                class="form-control <?php if ($validation->getError('price')) : ?>is-invalid<?php endif ?>"
                                                placeholder="3000" id=" price" name="price" value="">
                                            <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('price') ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Quantity</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">QTY</span>

                                            </div>
                                            <input type="number"
                                                class="form-control <?php if ($validation->getError('qty')) : ?>is-invalid<?php endif ?>"
                                                placeholder="30" id=" qty" name="qty" value="">
                                            <?php if (isset($validation)) : ?>
                                            <small class="text-danger"><?= $validation->getError('qty') ?></small>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Transport mode</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('mode')) : ?>is-invalid<?php endif ?>"
                                            name="mode" value="amb">
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
                                        <label class="form-label">Delivery Date</label>
                                        <input 
                                            class="datepicker-default form-control <?php if ($validation->getError('dept_name')) : ?>is-invalid<?php endif ?>"
                                            id=" dept_name" name="dept_name"  >
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('dept_name') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Consignment Number</label>
                                        <input type="text" name="tracker_no" readonly="true" class="form-control"
                                            value="<?php $rand = uniqid(); echo strtoupper($rand);?>">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <select value="ready"
                                            class="form-control <?php if ($validation->getError('status')) : ?>is-invalid<?php endif ?>"
                                            name="status">
                                            <option value="In Transit">In Transit</option>
                                            <option value="Ready">Ready for Pickup</option>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('status') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Client Name</label>
                                        <input class="form-control"  name="sender_name" type="text"
                                            value=" ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Clients Number</label>
                                        <input class="form-control"  name="sender_mobile" type="text"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Pick Up Branch</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('sender_branch')) : ?>is-invalid<?php endif ?>"
                                            name="sender_branch" value="mulago">
                                            <option value="">Select Branch</option>
                                            <option value="Branch1 ">Branch1 </option>
                                            <option value="Branch2 ">Branch2 </option>
                                            <option value="Branch3 ">Branch3 </option>
                                            <option value="Branch4 ">Branch4 </option>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('sender_mode') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Reverse Staff</label>
                                        <input class="form-control"  name="rev_name" type="text"
                                            value="ndnd ">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Reverse Number</label>
                                        <input class="form-control"  name="rev_mobile" type="text"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Reverse Hospital</label>
                                        <select
                                            class="form-control <?php if ($validation->getError('rev_branch')) : ?>is-invalid<?php endif ?>"
                                            name="rev_branch">
                                            <option value="">Select Branch</option>
                                            <option value="Hospital1 ">Hospital1 </option>
                                            <option value="Hospital2 ">Hospital2 </option>
                                            <option value="Hospital3 ">Hospital3 </option>
                                            <option value="Hospital4 ">Hospital4 </option>
                                        </select>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('sender_mode') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label">Destination</label>
                                        <input type="text"
                                            class="form-control"
                                            placeholder="address" id="address" name="address" value="" required>
                                        <?php if (isset($validation)) : ?>
                                        <small class="text-danger"><?= $validation->getError('invoice_no') ?></small>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 d-none">
                                    <div class="form-group">
                                        <label class="form-label">Comment</label>
                                        <textarea name="comment" value="mdjdj" class="form-control" rows="5"></textarea>
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
        </div>
        <!-- pickdate -->
        <script src="<?= base_url();?>/assets/vendor/pickadate/picker.js"></script>
        <script src="<?= base_url();?>/assets/vendor/pickadate/picker.time.js"></script>
        <script src="<?= base_url();?>/assets/vendor/pickadate/picker.date.js"></script>
        <!-- Pickdate -->
        <script src="<?= base_url();?>/assets/js/plugins-init/pickadate-init.js"></script>
        <?= $this->endSection() ?>