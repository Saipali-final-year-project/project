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
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="<?= base_url();?>/">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </section>

      <!-- Checkout Section Begin -->
      <section class="checkout spad">
      <div class="container">
        <div class="checkout__form">
          <h4>Billing Details</h4>
          <form action="<?= base_url('/order'); ?>" method="post">
          <?= csrf_field() ?>
            <div class="row"> 
              <div class="col-lg-7 col-md-6"> 
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>First Name<span>*</span></p>
                      <input type="text"  class=" <?php if ($validation->getError('firstname')) : ?>is-invalid<?php endif ?>" placeholder="<?= $session->get('firstname'); ?>" id=" firstname" name="firstname" value="<?= $session->get('firstname'); ?>" readonly>
                                <?php if (isset($validation)) : ?>
                                    <small class="text-danger"><?= $validation->getError('firstname') ?></small>
                                <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Last Name<span>*</span></p>
                      <input type="text"  class=" <?php if ($validation->getError('lastname')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your First Name" id=" lastname" name="lastname" value="<?= $session->get('lastname'); ?>" readonly>
                          <?php if (isset($validation)) : ?>
                               <small class="text-danger"><?= $validation->getError('lastname') ?></small>
                          <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Phone<span>*</span></p>
                      <input type="text"  class=" <?php if ($validation->getError('phone')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your Mobile Number" id=" phone" name="phone" value="">
                          <?php if (isset($validation)) : ?>
                               <small class="text-danger"><?= $validation->getError('phone') ?></small>
                          <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Email<span>*</span></p>
                      <input type="text"  class=" <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your Email" id=" email" name="email" value="<?= $session->get('email'); ?>" readonly>
                          <?php if (isset($validation)) : ?>
                               <small class="text-danger"><?= $validation->getError('email') ?></small>
                          <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>District<span>*</span></p>
                      <input type="text"  class="" placeholder="<?= $session->get('district'); ?>" id=" district" name="district" value="<?= $session->get('district'); ?>">
                          <?php if (isset($validation)) : ?>
                               <small class="text-danger"><?= $validation->getError('district') ?></small>
                          <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Town<span>*</span></p>
                      <input type="text"  class=" <?php if ($validation->getError('Town')) : ?>is-invalid<?php endif ?>" placeholder="<?= $session->get('town'); ?>" id=" town" name="town" value="<?= $session->get('town'); ?>" readonly>
                          <?php if (isset($validation)) : ?>
                               <small class="text-danger"><?= $validation->getError('town') ?></small>
                          <?php endif; ?>
                    </div>
                  </div>
                </div><div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Subcounty<span>*</span></p>
                      <input type="text"  class=" <?php if ($validation->getError('subcounty')) : ?>is-invalid<?php endif ?>" placeholder="<?= $session->get('subcounty'); ?>" id="subcounty" name="subcounty" value="<?= $session->get('subcounty'); ?>">
                          <?php if (isset($validation)) : ?>
                               <small class="text-danger"><?= $validation->getError('subcounty') ?></small>
                          <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="checkout__input">
                  <p>Specify DeliveryAddress<span>*</span></p>
                  <input type="text"  class=" <?php if ($validation->getError('address')) : ?>is-invalid<?php endif ?>" placeholder="Market/Stage/Shop/Nearby_school" id=" address" name="address" value="">
                          <?php if (isset($validation)) : ?>
                              <small class="text-danger"><?= $validation->getError('address') ?></small>
                          <?php endif; ?>                
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Postcode / NIN<span>*</span></p>
                      <input type="text"  class=" <?php if ($validation->getError('postcode')) : ?>is-invalid<?php endif ?>" placeholder="Enter Your National Id Number" id=" postcode" name="postcode" value="">
                              <?php if (isset($validation)) : ?>
                                  <small class="text-danger"><?= $validation->getError('postcode') ?></small>
                              <?php endif; ?>
                    </div> 
                  </div>
                  <div class="col-lg-6">
                      <div class="checkout__input">
                        <p class="form-label">Payment Method</p>
                        <select class=" <?php if ($validation->getError('postcode')) : ?>is-invalid<?php endif ?>" name="payment">
                            <option value="payment">Select</option>
                            <option value="Cash">Cash</option>
                            <option value="Wallet">Wallet</option>
                        </select>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Item<span></span></p>
                      <select class=" " name="item">
                    <?php $items=array_values(session('cart'));?> 
                    <?php if ($items):?>
                        <?php foreach($items as $item):?> 
                            <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                        <?php endforeach; ?> 
                    <?php endif; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Quantity<span></span></p>
                      <select class=" " name="qty">
                    <?php if ($items):?>
                        <?php foreach($items as $item):?> 
                            <option value="<?= $item['quantity'] ?>"><?= $item['quantity'] ?></option>
                        <?php endforeach; ?> 
                    <?php endif; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Price<span></span></p>
                      <select class=" " name="price">
                          <option value="<?= $Total ?>"><?= $Total ?></option>
                      </select>
                    </div>
                  </div>
                </div>
                
                <div class="checkout__input">
                  <p>Order notes<span>*</span></p>
                  <input
                    type="text" id="notes" name="notes" value=""
                    placeholder="Notes about your order, e.g. special notes for delivery."
                  />
                </div>
                <div class="col-lg-6">
                    <div class="checkout__input">
                      <p>Image<span>*</span></p>
                      <img name="image" src="<?php echo base_url('assets/upload/' . $session->get('photo')) ?>" value="<?= $session->get('photo') ?>" class="img-fluid" style="width:80%; height:100px;" />
                        
                    </div>
                  </div>
                
                <!-- <div class="row">
                  <div class="col-lg-6">
                    <div class="checkout__inpu">
                        <p>Image<span>*</span></p>
                        <input type="file" id="image" name="image" value="" />
                    </div> 
                  </div>
                  <div class="col-lg-6">   </div>
                </div>    -->
              </div>
              <div class="col-lg-5 col-md-6">
                <div class="checkout__order">
                  <h4>Your Order</h4>
                  <div class="checkout__order__products">
                    Products <span>Total</span>
                  </div>
                  <?php if ($items):?>
                        <?php foreach($items as $item):?>
                            <ul>
                                <li></li>
                                <li><?= $item['name'] ?> (<?= $item['quantity'] ?> x <?= $item['price'] ?>) <span name="price" value="price"> UGX <?= $item['price'] * $item['quantity']?></span></li>
                            </ul>
                        <?php endforeach; ?> 
                    <?php endif; ?> 
                  <!-- <div class="checkout__order__subtotal">
                    Subtotal <span>$750.99</span>
                  </div> -->
                  <div class="checkout__order__total">
                    Total <span>UGX <?= $Total ?></span>
                  </div>
                  <!-- <div class="checkout__input__checkbox">
                    <label for="payment">
                      Check Payment
                      <input type="checkbox" id="payment" />
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="checkout__input__checkbox">
                    <label for="paypal">
                      Paypal
                      <input type="checkbox" id="paypal" />
                      <span class="checkmark"></span>
                    </label>
                  </div> -->
                  <button type="submit" class="site-btn">PLACE ORDER</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- Checkout Section End -->
      

<?= $this->endSection() ?>