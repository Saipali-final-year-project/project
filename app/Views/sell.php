

<?= $this->extend('layouts/master') ?>
<?= $this->section('contents') ?>

<?php $validation =  \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>
<link href="<?= base_url();?>/assets/css/style3.css" rel="stylesheet">

<style>
.category1,
.category2,
.category3,
.location1,
.location2,
.location3,
.location4 {
    display: none;
}
</style>
<!--**********************************
            Content body start
        ***********************************-->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <?= view('nav'); ?>
    <!-- partial -->
    <div class="main-panel">
        <!-- <div class="content-wrapper">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi <?= $session->get('firstname'); ?> <?= $session->get('lastname'); ?>, </h4>
                        <p class="mb-0">Welcome back!</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
        </div> -->


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
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
                    <div class="card-body">
                        <!-- <h2 id="heading">Sign Up Your User Account</h2> -->
                        <form id="msform" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>Details</strong></li>
                                <li id="payment"><strong>Image</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Details:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 2</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <select
                                                    class="form-control  <?php if ($validation->getError('categories')) : ?>is-invalid<?php endif ?>"
                                                    name="categories" onchange="Category(this)">
                                                    <option value="" selected="">All Category*</option>
                                                    <option value="Matooke">Matooke</option>
                                                    <option value="Gonja">Gonja</option>
                                                    <option value="Bogoya">Bogoya</option>
                                                    <option value="Kivuvu">Kivuvu</option>
                                                    <option value="Ndiizi">Ndiizi</option>
                                                    <option value="Yellow">Yellow</option>
                                                    <?php if (isset($validation)) : ?>
                                                    <small
                                                        class="text-danger"><?= $validation->getError('categories') ?></small>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <select
                                                    class="form-control  <?php if ($validation->getError('region')) : ?>is-invalid<?php endif ?>"
                                                    name="region" onchange="Location(this)">
                                                    <option value="" selected="">Select Location(Region)*</option>
                                                    <option value="Central">Central</option>
                                                    <option value="Western">Western</option>
                                                    <option value="Eastern">Eastern</option>
                                                    <option value="Northern">Northern</option>
                                                    <?php if (isset($validation)) : ?>
                                                    <small
                                                        class="text-danger"><?= $validation->getError('region') ?></small>
                                                    <?php endif; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group category1" id="type1">
                                                <select
                                                     class="form-control" name="ctype1">
                                                    <option value="" selected="">Select Type*</option>
                                                    <option value="Matooke">Matooke</option>
                                                    <option value="Gonja">Gonja</option>
                                                    <option value="Bogoya">Bogoya</option>
                                                    <option value="Kivuvu">Kivuvu</option>
                                                    <option value="Ndiizi">Ndiizi</option>
                                                    <option value="Yellow">Yellow</option>
                                                </select>
                                            </div>
                                            <!-- <div class="form-group category2" id="type2">
                                                <select class="form-control" name="ctype2">
                                                    <option Required value="" selected="">Select Type*</option>
                                                    <option value="Soybean Meal">Soybean Meal</option>
                                                    <option value="Fodder & Forage">Fodder & Forage</option>
                                                    <option value="Fish Meal">Fish Meal</option>
                                                    <option value="Straw">Straw</option>
                                                </select>
                                            </div>
                                            <div class="form-group category3" id="type3">
                                                <select class="form-control" name="ctype3">
                                                    <option Required value="" selected="">Select Type*</option>
                                                    <option value="Tractor">Tractor</option>
                                                    <option value="Hoe, Rake & Sprayer">Hoe, Rake & Sprayer</option>
                                                    <option value="Seed drill & Cuiltipacker">Seed drill &
                                                        Cuiltipacker</option>
                                                </select>
                                            </div> -->
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group location1" id="district1">
                                                <select class="form-control" name="district1">
                                                    <option value="" selected="">Select District*</option>
                                                    <option value="kampala">kampala</option>
                                                    <option value="Buikwe">Buikwe</option>
                                                    <option value="Bukomansimbi">Bukomansimbi</option>
                                                    <option value="Butambala">Butambala</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Kalangala">Kalangala</option>
                                                    <option value="Kayunga">Kayunga</option>
                                                    <option value="Luwero">Luwero</option>
                                                    <option value="Lwengo">Lwengo</option>
                                                    <option value="Lyantonde">Lyantonde</option>
                                                    <option value="Masaka">Masaka</option>
                                                    <option value="Mityana">Mityana</option>
                                                    <option value="Mpigi">Mpigi</option>
                                                    <option value="Mubende">Mubende</option>
                                                    <option value="Mukono">Mukono</option>
                                                    <option value="Rakai">Rakai</option>
                                                    <option value="Wakiso">Wakiso</option>
                                                </select>
                                            </div>
                                            <div class="form-group location2" id="district2">
                                                <select class="form-control" name="district2">
                                                    <option Required value="" selected="">Select District*</option>
                                                    <option value="Hoima">Hoima</option>
                                                    <option value="Ibanda">Ibanda</option>
                                                    <option value="Isingiro">Isingiro</option>
                                                    <option value="Kabale">Kabale</option>
                                                    <option value="Kabarole">Kabarole</option>
                                                    <option value="Kasese">Kasese</option>
                                                    <option value="Kibaale">Kibaale</option>
                                                    <option value="Masindi">Masindi</option>
                                                    <option value="Mbarara">Mbarara</option>
                                                    <option value="Rukungiri">Rukungiri</option>
                                                </select>
                                            </div>
                                            <div class="form-group location3" id="district3">
                                                <select class="form-control" name="district3">
                                                    <option Required value="" selected="">Select District*</option>
                                                    <option value="Bududa">Bududa</option>
                                                    <option value="Kaberamaido">Kaberamaido</option>
                                                    <option value="Mayuge">Mayuge</option>
                                                    <option value="Sironko">Sironko</option>
                                                    <option value="Soroti">Soroti</option>
                                                    <option value="Serere">Serere</option>
                                                    <option value="Tororo">Tororo</option>
                                                </select>
                                            </div>
                                            <div class="form-group location4" id="district4">
                                                <select class="form-control" name="district4">
                                                    <option Required value="" selected="">Select District*</option>
                                                    <option value="AdJumani">AdJumani</option>
                                                    <option value="Apac">Apac</option>
                                                    <option value="Kitgum">Kitgum</option>
                                                    <option value="Gulu">Gulu</option>
                                                    <option value="Lira">Lira</option>
                                                    <option value="Moroto">Moroto</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group " id="ctype">
                                                <select
                                                     class="form-control" name="ctype">
                                                    <option value="" selected="">Select Type*</option>
                                                    <option value="Matooke">Matooke</option>
                                                    <option value="Gonja">Gonja</option>
                                                    <option value="Bogoya">Bogoya</option>
                                                    <option value="Kivuvu">Kivuvu</option>
                                                    <option value="Ndiizi">Ndiizi</option>
                                                    <option value="Yellow">Yellow</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group " id="">
                                                <select class="form-control" name="brand">
                                                    <option Required value="" selected="">Select Branch*</option>
                                                    <option value="branch1">branch1</option>
                                                    <option value="branch2">branch2</option>
                                                    <option value="branch5">branch5</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input class="form-control" name="description" type="text"
                                                    placeholder="Description*">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group " id="">
                                                <select class="form-control" name="color">
                                                    <option Required value="" selected="">Select Color*</option>
                                                    <option value="Red">Red</option>
                                                    <option value="Blue">Blue</option>
                                                    <option value="Green">Green</option>
                                                    <option value="Black">Black</option>
                                                    <option value="White">White</option>

                                                </select>
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group " id="">
                                                <select class="form-control" name="material">
                                                    <option Required value="" selected="">Select Material*</option>
                                                    <option value="Streel">Streel</option>
                                                    <option value="Zinc">Zinc</option>
                                                    <option value="Copper">Copper</option>
                                                    <option value="hen">Gulu</option>
                                                    <option value="hen">Lira</option>
                                                    <option value="hen">Moroto</option>

                                                </select>
                                            </div>
                                        </div> -->
                                    <!-- </div>  -->

                                </div> <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <!-- <h2 class="fs-title">Image Upload:</h2> -->
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 2</h2>
                                        </div>
                                    </div>
                                    <div class="upload__box">
                                        <div class="upload__btn-box">
                                            <label class="upload__btn">
                                                <p>Upload images</p>
                                                <input type="file" name="img[]" multiple="multiple" data-max_length="20"
                                                    class="upload__inputfile">
                                            </label>
                                        </div>
                                        <div class="upload__img-wrap"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Price</span>
                                                </div>
                                                <input type="number" class="form-control" name="price"
                                                    placeholder="UGX">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="input-group">
                                                <input type="number" name="qty" class="form-control">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">QTY/PCS</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group " id="">
                                                <select class="form-control" name="negotiable">
                                                    <option Required value="" selected="">Select Negotiabble*
                                                    </option>
                                                    <option value="1">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group " id="">
                                                <select class="form-control" name="delivery">
                                                    <option Required value="" selected="">Select Delivery*</option>
                                                    <option value="1">Yes</option>
                                                    <option value="">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input class="form-control" name="username" type="text"
                                                    value="<?= $session->get('firstname'); ?> <?= $session->get('lastname'); ?> ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <input class="form-control" name="email" type="text"
                                                    value="<?= $session->get('email'); ?> ">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <input type="submit" id="upload" name="next" class="next action-button"
                                    value="Submit" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                            </fieldset>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->

    <!-- plugins:js -->
    <script src="<?= base_url();?>/assets/vendor/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="<?= base_url();?>/assets/vendor/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?= base_url();?>/assets/js/off-canvas.js"></script>
    <script src="<?= base_url();?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?= base_url();?>/assets/js/template.js"></script>
    <script src="<?= base_url();?>/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?= base_url();?>/assets/js/dashboard.js"></script>

    
    <script src="<?= base_url();?>/assets/js/custom.min.js"></script>
    <script src="<?= base_url();?>/assets/js/dlabnav-init.js"></script>

    
<!-- partial -->
  <script src='<?= base_url();?>/assets/js/jquery.min.js'></script>
  <script  src="<?= base_url();?>/assets/js/script.js"></script>
<?= $this->endSection() ?>
