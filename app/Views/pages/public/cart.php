<?= $this->extend('layouts/blog_base') ?>
<?= $this->section('content') ?>
<?php $validation =  \Config\Services::validation(); ?>
    <?php $session = \Config\Services::session(); ?>

 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="<?= base_url();?>/assets/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="<?= base_url();?>/">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Shoping Cart Section Begin -->
        <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <form action="<?= base_url('/updatecart')?>" id="cart" name="cart" method="post">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr> 
                            </thead>
                            <tbody>
                                <?php if ($items):?>
                                    <?php foreach($items as $item):?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?=base_url()?>/assets/upload/<?= $item['photo'] ?>" height="100px" width="100px" alt="">
                                        <h5><?= $item['name'] ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        UGX <?= $item['price'] ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="number" min="1" value="<?= $item['quantity'] ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        UGX <?= ($item['price'] * $item['quantity'])?> 
                                    </td>
                                    <td class="shoping__cart__item__close">
                                       <a href="<?= base_url('cart/remove/'.$item['id']) ?>"> <span class="icon_close"></span></a>
                                    </td>
                                </tr>     
                                <?php endforeach; ?>
                                <?php endif; ?>  
                                <?php if( $items <= 0): ?>
                                    <tr>
                                        <td colspan='5'>
                                        Cart is Empty  
                                        <a href="<?php echo base_url('/'); ?>" class="btn btn-dark">Go Shopping</a>
                                        </td>
                                    </tr>
                                <?php endif; ?>                  
                            </tbody>
                            
                        </table>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="<?php echo base_url('/'); ?>" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="<?php echo base_url('cart/update'); ?>" id="update" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>Update Cart</a>
                        <!-- <input type="submit" name="submit" value="Update shopping cart" class="btn btn-upper btn-primary pull-right outer-right-xs"> -->
                    </div>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>UGX <?= $Total ?>   </span></li>
                            <li>Total <span>UGX <?= $Total ?></span></li>
                        </ul>
                        <a href="<?php echo base_url('/cart/checkout'); ?>" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->


<?= $this->endSection() ?>