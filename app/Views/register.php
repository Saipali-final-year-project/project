<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Registration |</title>
    <!-- Favicon icon -->
    <link href="<?= base_url();?>/assets/css/style2.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="<?= base_url();?>/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
</head>

<style>
    .error {
        color: #dc3545;
    }

    /* The message box is shown when the user clicks on the password field */
    #message {
        display: none;
        background: #f1f1f1;
        color: #000;
        position: relative;
        padding: 20px;
        margin-top: 10px;
    }

    #message p {
        padding: 10px 35px;
        font-size: 18px;
    }

    /* Add a green text color and a checkmark when the requirements are right */
    .valid {
        color: green;
    }

    .valid:before {
        position: relative;
        left: -35px;
        content: "✔";
    }

    /* Add a red text color and an "x" when the requirements are wrong */
    .invalid {
        color: red;
    }

    .invalid:before {
        position: relative;
        left: -35px;
        content: "✖";
    }
</style>


<body class="h-100 bg-danger bg-gradient">
    <?php $validation =  \Config\Services::validation(); ?>
    <div class="authincation h-100 ">
        <div class="container h-80">
            <div class="row justify-content-center h-80 align-items-center">
                <div class="col-md-8">
                    <div class="authincation-content mt-5 mb-5">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Create your account</h4>
                                        <?php
                                        if (session()->getFlashdata('success')) : ?>
                                            <div class="alert alert-success ">
                                                <?= session()->getFlashdata('success') ?>
                                            </div>
                                        <?php elseif (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger ">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                        <?php endif; ?>
                                    <form action="<?php echo base_url('/register2'); ?>" method="post" enctype="multipart/form-data">
                                             <?= csrf_field() ?> 
                                        <div class="form-group">
                                            <label><strong>First Name</strong></label>
                                            <input type="text" Required class="form-control <?php if ($validation->getError('firstname')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your First Name" id=" firstname" name="firstname" value="<?= set_value('firstname') ?>">
                                                <?php if (isset($validation)) : ?>
                                                    <small class="text-danger"><?= $validation->getError('firstname') ?></small>
                                                <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Last Name</strong></label>
                                            <input type="text" Required class="form-control <?php if ($validation->getError('lastname')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your Last Name" id="lastname" name="lastname" value="<?= set_value('lastname') ?>">
                                                <?php if (isset($validation)) : ?>
                                                    <small class="text-danger"><?= $validation->getError('lastname') ?></small>
                                                <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" Required class="form-control  <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your Email" id="email" name="email" value="<?= set_value('email') ?>">
                                                <?php if (isset($validation)) : ?>
                                                    <small class="text-danger"><?= $validation->getError('email') ?></small>
                                                <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Mobile</strong></label>
                                            <input type="number" Required class="form-control  <?php if ($validation->getError('mobile')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your Mobile Number" id="mobile" name="mobile" value="<?= set_value('mobile') ?>">
                                                <?php if (isset($validation)) : ?>
                                                    <small class="text-danger"><?= $validation->getError('mobile') ?></small>
                                                <?php endif; ?>
                                        </div>
                                        <div class="form-group d-none">
                                            <label><strong>NIN</strong></label>
                                            <input type="text" Required class="form-control"  placeholder="Enter National ID Number" value="CM000G464748HJ"" id="NIN" name="NIN">
                                        </div>
                                        <div class="form-group d-none">
                                            <label>Region</label>
                                            <select class="form-select" name="region" aria-label="Default select example">
                                                <option selected="Central">Central</option>
                                                <option value="Northern">Northern</option>
                                                <option value="Western">Western</option>
                                                <option value="Eastern">Eastern</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>District</label>
                                            <input required name="district" type="text" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Donor Blood Group</label>
                                            <input required name="town" type="text" class="form-control">
                                        </div>

                                        <div class="form-group d-none">
                                            <label>Sub-county</label>
                                            <input required name="subcounty" value="Katabi" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" Required class="form-control <?php if ($validation->getError('firstname')) : ?>is-invalid<?php endif ?>" placeholder="Enter Password" id="password" name="password">
                                                <?php if (isset($validation)) : ?>
                                                    <small class="text-danger"><?= $validation->getError('password') ?></small>
                                                <?php endif; ?>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Confirm Password</strong></label>
                                            <input type="password" Required class="form-control <?php if ($validation->getError('firstname')) : ?>is-invalid<?php endif ?>" placeholder="Enter confirm password" id="confirm_password" name="confirm_password">
                                <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                                <?php endif; ?>
                                        </div> 
                                        <div class="form-group">
                                            <label><strong>Upload Your Photo</strong></label>
                                            <input type="file" Required class="form-controll"  id="photo" name="photo" multiple>
                                        </div> 
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-dark btn-block">Sign up</button>
                                        </div>
                                        <div id="message">
                                <h3>Password must contain the following:</h3>
                                <p id="letter" class="invalid">A <b>lowercase</b> letter</p> 
                                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                <p id="number" class="invalid">A <b>number</b></p>
                                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                            </div>

                            <div class="response-message ms-5" style="font-size: 25px;"></div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="<?php echo base_url('/login2'); ?>">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    $(function() {
        $('#password').password().on('show.bs.password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function(e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function() {
            $('#password').password('toggle');
        });
    });

    $(function() {
        $('#confirm_password').password().on('show.bs.confirm_password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.confirm_password', function(e) {
            $('#eventLog').text('On hide event');
            $('#methods').prop('checked', false);
        });
        $('#methods').click(function() {
            $('#confirm_password').password('toggle');
        });
    });
</script>

<script>
    var myInput = document.getElementById("password");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function() {
        document.getElementById("message").style.display = "block";
    }

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function() {
        document.getElementById("message").style.display = "none";
    }

    // When the user starts to type something inside the password field
    myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    }
</script>


<script src="<?= base_url();?>/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="<?= base_url();?>/assets/js/plugins-init/sweetalert.init.js"></script>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url();?>/assets/vendor/global/global.min.js"></script>
	<script src="<?= base_url();?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url();?>/assets/js/dlabnav-init.js"></script>
    <!--endRemoveIf(production)-->
</body>

</html>