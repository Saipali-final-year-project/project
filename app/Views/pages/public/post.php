<?= $this->extend('layouts/blog_base') ?>
<?= $this->section('custom_css') ?>
<meta name="description" content="<?= $post['short_description'] ?>">
<meta name="keywords" content="<?= $post['tags'] ?>">
<meta name="author" content="<?= $post['author_full'] ?>">
<meta property="og:title" content="<?= $post['title'] ?>" />
<meta property="og:description" content="<?= $post['short_description'] ?>" />
<meta property="og:image" content="<?= $post['banner'] ?>" />
<meta property="og:url" content="<?= base_url("/All_view".$post['id']) ?>" />
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<!-- <div class="card rounded-0 shadow">
    <div class="card-header">
        <div class="text-end">
            <a href="<?= $_SERVER['HTTP_REFERER'] ?>" class="btn btn-sm rounded-0 btn-light border"><i class="fa fa-angle-left"></i> Back</a>
        </div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <center>
                <img src="<?= $post['banner'] ?>" alt="" class="img-thumbnail p-0" id="post-img">
            </center>
            <h3 class="fw-bolder mt-3"><?= $post['title'] ?></h3>
            <hr>
            <div class="d-flex w-100 justify-content-between">
                <div class="text-muted">
                    <small><i class="fa fa-th-list"></i> <?= $post['category'] ?></small>
                </div>
                <div class="text-muted">
                    <small class="me-3"><i class="fa fa-user"></i> <?= $post['author_name'] ?></small>
                    <small class=""><i class="far    fa-clock"></i> <?= date("M d, Y h:i A", strtotime($post['updated_at'])) ?></small>
                </div>
            </div> 
            <div class="py-3">
                <?= htmlspecialchars_decode($post['content']) ?>
            </div>
            <div>
                <?php 
                $tags = explode(",", $post['tags']);
                foreach($tags as $tag){
                    echo '<small class="badge bg-gradient bg-secondary px-3 me-2 rounded-pill">'.$tag.'</small>';
                }
                ?>
            </div>
        </div>
    </div>
</div> -->
 

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                        <form action="#">
                                <div class="hero__search__categories">
                                <a class="<?= isset($page_title) && $page_title == 'Categories' ? 'active' : '' ?>" href="<?= base_url('/All_Categories') ?>">
                                    All Categories
                                    </a>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                            <h5>+256777777777</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="assets/img/blog/details/details-hero.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2><?= $post['title'] ?></h2>
                        <ul>
                            <li>By <?= $post['author_name'] ?></li>
                            <li><?= date("d-M-Y", strtotime($post['updated_at'])) ?></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
                                <li><a href="#">Beauty (20)</a></li>
                                <li><a href="#">Food (5)</a></li>
                                <li><a href="#">Life Style (9)</a></li>
                                <li><a href="#">Travel (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="assets/img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="assets/img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="assets/img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                        <span>MAR 05, 2019</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Apple</a>
                                <a href="#">Beauty</a>
                                <a href="#">Vegetables</a>
                                <a href="#">Fruit</a>
                                <a href="#">Healthy Food</a>
                                <a href="#">Lifestyle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="<?= $post['banner'] ?>" alt="">
                        <p><?= $post['content'] ?> </p>
                        <!-- <p>Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                            dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit
                            aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur
                            sed, convallis at tellus. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada.
                            Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus.
                            Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis
                            quis ac lectus. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada
                            feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                        <h3>The corner window forms a place within a place that is a resting point within the large
                            space.</h3>
                        <p>The study area is located at the back with a view of the vast nature. Together with the other
                            buildings, a congruent story has been managed in which the whole has a reinforcing effect on
                            the components. The use of materials seeks connection to the main house, the adjacent
                            stables</p> -->
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="assets/img/blog/details/profile.jpg" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h6><?= $post['author_name'] ?></h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Categories:</span> <?= $post['category'] ?></li>
                                        <li><span>Tags:</span> <?php 
                $tags = explode(",", $post['tags']);
                foreach($tags as $tag){
                    echo $tag;
                }
                ?></li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
    
    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Post You May Like</h2>
                    </div>
                </div>
            </div>
            <div class="row ">
            <?php 
        foreach($posts as $row):
    ?>
            <a href="<?= base_url("/All_View".$row['id']) ?>" >
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?= $row['banner'] ?>" alt="<?= $row['title'] ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> <?= date("M d, Y", strtotime($row['updated_at'])) ?></li>
                                
                            </ul>
                            <h5><a href="<?= base_url("/All_View".$row['id']) ?>"><?= $row['title'] ?></a></h5>
                            <p><?= $row['short_description'] ?> </p>
                        </div>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
            </div>
            <?php if(isset($posts) && count($posts) <= 0): ?>
            <center><small class="text-muted"><i>No post has been published yet.</i></small></center>
            <?php endif; ?>
            <div class="bg-light pt-4 px-3 my-3">
            <?= $pager->makeLinks($page, $perPage, $total2, 'custom_view') ?>
            </div>
        </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

<?= $this->endSection() ?>