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
                    <h4 class="text-primary mb-4">Update Driver's Information</h4>
                    <form action="<?= base_url("/Drivers/update".$drivers['id']) ?>">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id" class="form-control" value="<?=$drivers['id'];?>">
                        <div class="row ">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">First Name </label>
                                    <input type="text" name="firstname" class="form-control"
                                        placeholder="<?=$drivers['firstname'];?>" value="<?=$drivers['firstname'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Last Name </label>
                                    <input type="text" name="lastname" class="form-control"
                                        placeholder="<?=$drivers['lastname'];?>" value="<?=$drivers['lastname'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="<?=$drivers['email'];?>" value="<?=$drivers['email'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Mobile</label>
                                    <input type="text" name="mobile" class="form-control"
                                        placeholder="<?=$drivers['mobile'];?>" value="<?=$drivers['mobile'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">License Number</label>
                                    <input type="text" name="licenseNo" class="form-control"
                                        placeholder="<?=$drivers['licenseNo'];?>" value="<?=$drivers['licenseNo'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Plate Number</label>
                                    <input type="text" name="numberplate" class="form-control"
                                        placeholder="<?=$drivers['numberplate'];?>" value="<?=$drivers['numberplate'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">NIN</label>
                                    <input type="text" name="NIN" class="form-control"
                                        placeholder="<?=$drivers['NIN'];?>" value="<?=$drivers['NIN'];?>">
                                </div>
                            </div>
                           
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <input type="text" name="status" class="form-control"
                                        placeholder="<?=$drivers['status'];?>" value="<?=$drivers['status'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Delivery capacity</label>
                                    <input type="text" name="capacity" class="form-control"
                                        placeholder="<?=$drivers['capacity'];?>" value="<?=$drivers['capacity'];?>">
                                 </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Delivery price(per bunch)</label>
                                    <input type="text" name="deliveryprice" class="form-control"
                                        placeholder="<?=$drivers['deliveryprice'];?>" value="<?=$drivers['deliveryprice'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Location(Village)</label>
                                    <input type="text" name="location" class="form-control"
                                        placeholder="<?=$drivers['location'];?>" value="<?=$drivers['location'];?>">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                <label>Collection Area</label>
                                    <select class="form-select" name="collection" aria-label="Default select example">
                                        <option selected></option>
                                        <?php if (count($branches)) {
                                            foreach ($branches as $branch) {
                                                echo '<option value="' . $branch['Bname'] . '">' . $branch['Bname'] . '</option>';
                                            }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- <div class="col-lg-6 col-md-6 col-sm-12">
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
                            </div> -->

                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?= base_url('/Drivers') ?>" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>



            </div>
        </div>

        <!-- plugins:js -->

        <?= $this->endSection() ?>