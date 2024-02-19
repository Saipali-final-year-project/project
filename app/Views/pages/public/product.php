<?= $this->extend('layouts/blog_base') ?>
<?= $this->section('custom_css') ?>
<meta name="author" content="<?= $post['author_full'] ?>">
<meta property="og:title" content="<?= $post['categories'] ?>" />
<meta property="og:url" content="<?= base_url("/Product".$post['id']) ?>" />
<?= $this->endSection() ?>
<?= $this->section('content') ?>


<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="assets/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?= $post['categories'] ?> - <?= $post['ctype'] ?> </h2>
                    <div class="breadcrumb__option">
                        <a href="<?= base_url("/") ?>">Home</a>
                        <a href="#"><?= $post['categories'] ?></a>
                        <span><?= $post['ctype'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="assets/upload/<?= $post['image'] ?>"
                            style="max-height:560px; min-height: 560px;" alt="">
                    </div>

                    <div class="product__details__pic__slider owl-carousel">
                        <?php foreach($photos as $row):?>
                        <img data-imgbigurl="assets/upload/<?= $row['name'] ?>" src="assets/upload/<?= $row['name'] ?>"
                            alt="">
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?= $post['categories'] ?> - <?= $post['ctype'] ?> </h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">UGX <?= $post['price'] ?></div>
                    <p><?= $post['description'] ?></p>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="<?= $post['qty'] ?>">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Quantity of product</a>
                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                    <ul>
                        <li><b>Brand</b>
                            <span><?php if(empty($post['brand'])){echo"NULL";}else{echo $post['brand'];}  ?></span></li>
                        <li><b>Delivery</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                        <li><b>Material</b>
                            <span><?php if(empty($post['material'])){echo"NULL";}else{echo $post['material'];}  ?></span>
                        </li>
                        <li><b>Color</b>
                            <span><?php if(empty($post['color'])){echo"NULL";}else{echo $post['color'];}  ?></span></li>
                        <li><b>Share on</b>
                            <div class="share">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </li>
                        <li>
                            <div class="blog__details__author" style="padding-top: 15px;">
                                <div class="blog__details__author__pic">
                                    <img src="assets/img/blog/details/details-author.jpg" alt="">
                                </div>
                                <div class="blog__details__author__text">
                                    <h6><?= $post['username'] ?></h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="blog__item__text" style="padding-top: 0px;">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> <?= date("M d, Y", strtotime($post['updated_at'])) ?>
                            </li>
                            <li><i class="fa fa-map-marker"></i> <?= $post['district'] ?>, <?= $post['region'] ?> </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Related Product</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">

            <?php foreach($sell as $row):?>

            <div class="col-lg-3 col-md-4 col-sm-6 mix <?= $row['categories'] ?>">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="assets/upload/<?= $row['image'] ?>">
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="<?= base_url("/Product".$row['id']) ?>"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="<?= base_url('cart/buy/'.$row['id']) ?>"><i
                                        class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> <?= date("M d, Y", strtotime($row['updated_at'])) ?>
                            </li>
                            <li><i class="fa fa-map-marker"></i> <?= $row['district'] ?>, <?= $row['region'] ?> </li>
                        </ul>
                        <h5><a href="<?= base_url("/Product".$row['id']) ?>"><?= $row['ctype'] ?></a></h5>
                        <h5>UGX <?= $row['price'] ?></h5>
                    </div>

                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php if(isset($sell) && count($sell) <= 0): ?>
        <center><small class="text-muted"><i>No post has been published yet.</i></small></center>
        <?php endif; ?>
        <div class="bg-light pt-4 px-3 my-3">
            <?= $pager->makeLinks($page, $perPage, $total2, 'custom_view3') ?>
        </div>
    </div>
</section>
<!-- Related Product Section End -->

<?= $this->endSection() ?>