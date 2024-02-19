<?= $this->extend('layouts/blog_base') ?>
<?= $this->section('content') ?>
<?php $validation =  \Config\Services::validation(); ?>
<?php $session = \Config\Services::session(); ?>

    <style>
    .error {
        color: red;
    }

    #container {
        max-width: 600px;
    }
    </style>
</head>

<body>
    <!-- Header Section End -->
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="assets/img/breadcrumb.jpg ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Contact Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>+2567770888088</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>P17 Kamokya Rd Bukoto. Nakawa</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>tooke@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <div class="container" id="container">
        <br>
        <?= \Config\Services::validation()->listErrors(); ?>
        <span class="d-none alert alert-success mb-3" id="res_message"></span>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body p-4">
                        <form action="javascript:void(0)" name="ajax_form" id="ajax_form" method="post"
                            accept-charset="utf-8">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Name</label>
                                <input type="text" name="name" class="form-control" id="formGroupExampleInput"
                                    placeholder="Please enter name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Id</label>
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Please enter email id">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <div class="form-group mt-4 mb-4 col-12 d-flex justify-content-center">
                                <button type="submit" id="send_form" class="btn btn-info">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
    if ($("#ajax_form").length > 0) {
        $("#ajax_form").validate({
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    maxlength: 50,
                    email: true,
                },
                message: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "Please enter name",
                },
                email: {
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
                message: {
                    required: "field is required",
                },
            },
            submitHandler: function(form) {
                $('#send_form').html('Sending..');
                $.ajax({
                    // url: "<?php //echo base_url('contact/create') ?>",
                    url : "create",
                    type: "POST",
                    data: $('#ajax_form').serialize(),
                    dataType: "json",
                    success: function(response) {

                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Record saved successfully',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        console.log(response);
                        console.log(response.success);
                        $('#send_form').html('Submit');
                        $('#res_message').html(response.msg);
                        $('#res_message').show();
                        $('#res_message').removeClass('d-none');
                        document.getElementById("ajax_form").reset();
                        setTimeout(function() {
                            $('#res_message').hide();
                            $('#res_message').html('');
                        }, 10000);
                    }
                });
            }
        })
    }
    </script>

<?= $this->endSection() ?>