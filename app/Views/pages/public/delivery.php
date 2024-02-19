<?= $this->extend('layouts/blog_base') ?>
<?= $this->section('content') ?>
<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<section class="breadcrumb-section set-bg" data-setbg="<?= base_url();?>/assets/img/delivery.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Delivery Information</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url();?>/">Home</a>
                        <span>delivery informationt</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <div class="row">
                <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card mb-3">
                        <img class="card-img-top img-fluid" src="<?= base_url();?>/assets/img/delivery.jpg" alt="Card image
                    cap">
                        <div class="card-body">
                            <h5 class="card-title">
Track and Trace your Cargo/Courier</h5>
                            <p class="card-text" style="margin-left:100px;">
                                Enter the Consignment no
                            </p>
                            <div class="card-body row" style="margin-left:40px;">
                                    <form action="">
                                        <input type="text">
                                        <input type="submit" value="Track now">
                                    </form>
                                </div>
                                <p class="card-text" style="margin-left:100px;">
                                Ex: IXM53533553
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card mb-3">
                        <img class="card-img-top img-fluid" src="<?= base_url();?>/assets/img/delivery.jpg" alt="Card image
                    cap">
                        <div class="card-body">
                            <h5 class="card-title">Truck Driver Login</h5>
                            <p class="card-text" style="margin-left:40px; padding-top:25px; padding-bottom:20px;">Note <br> This login is only truck drivera </p>
                            <a href="<?= base_url('/login2') ?>">Click here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?= $this->endSection() ?>