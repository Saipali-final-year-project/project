<?=$this->extend('layouts/master2')?>
<?=$this->section('body-contents')?>





<style>
  #hero {
  width: 100%;
  height: 75vh;
  background: url("public/assets/img/hehe.jpg") top left;
  background-size: cover;
  position: relative;
}
#hero:before {
  content: "";
  background: rgba(255, 255, 255, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
.testimonials {
  padding: 80px 0;
  background: url("public/assets/img/back.jpg") no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
}

</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Your Trusted <span style="color: #d62a24";> Blood Partner</span></h1>
      <p style =" font-size: 25px;">Welcome to our Online Blood Bank Management System a platform dedicated 
         to saving lives through the power of community and compassion. Together, we strive to make a
         meaningful impact on healthcare by connecting donors, recipients, and healthcare institutions in 
          a seamless and efficient blood donation process. Your commitment to making a difference is at the
          heart of our mission. 
         Thank you for being a part of this lifesaving journey!</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto" style="background-color: #d62a24">Login Now</a>
        <a href="https://youtu.be/P4jjra1gc1c" class="glightbox btn-watch-video" ><i class="bi bi-play-circle" style="color: #d62a24"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= About Section ======= -->
    <section id="" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color: #d62a24">About</h2>
          <h3>Find Out More <span style="color: #d62a24">About Us</span></h3>
          <p>Giving blood saves lives. It's a simple, selfless act that can make a big difference in someone's life. One donation can save up to three lives, and it only takes about an hour of your time. 
            It's a small action that can make a big difference.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="public/assets/img/gwe.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Want To donate Blood?</h3>
            <p class="fst-italic">
            Blood donations can be made at blood banks and hospitals across the country. Check with your local hospital or
            blood bank to find out more about how to donate blood in your area.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt" style="color: #d62a24"></i>
                <div>
                  <h5>Purpose</h5>
                  <p> An Online Blood Bank Management System is a web-based platform designed to efficiently manage and streamline the processes related to blood donation and distribution. This digital solution serves as a centralized hub that connects donors, recipients, and healthcare institutions, providing a range of 
                                features to enhance the overall effectiveness of blood management!!</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images" style="color: #d62a24"></i>
                <div>
                  <h5>Make An Appointment</h5>
                  <p>Are you ready to make a difference? Schedule an appointment 
                    to donate blood today! Your donation could save a life</p>
                </div>
              </li>
            </ul>
            <p>
            Every two seconds, someone in Uganda needs blood. Yet, only about 3% of the population donates blood each year. 
            We need more people to donate blood, and every donation counts.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">
        <h2>Reason why you need to donate Blood </h2> <br> <br>
          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">Blood Type (A+ & A-)<i class="val" style="color: #d62a24;">40%</i></span>
              <div class="progress-bar-wrap" >
                <div style="background-color: #d62a24;" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Blood Type (B+ & B-) <i class="val"style="color: #d62a24;">50%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color: #d62a24;"class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Blood Type (AB+ & AB-) <i class="val"style="color: #d62a24;">75%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color: #d62a24;"class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Blood Type (O+ & O-) <i class="val"style="color: #d62a24;">60%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color: #d62a24;" class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">People that don't donate according to Statistics and facts <i class="val"style="color: #d62a24;">70%</i></span>
              <div class="progress-bar-wrap">
                <div style="background-color: #d62a24;"class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile" style="background-color: #d62a24;"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="background-color: #d62a24;"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset" style="background-color: #d62a24;"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people" style="background-color: #d62a24;"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="public/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color: #d62a24;">Donations</h2>
          <h3>Samples<span style="color: #d62a24;"> of work done</span></h3>
          <p> </p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/img/gwe1.jpg" class="img-fluid" alt="">
                <div class="social">
                <a href=""  style="background-color: #d62a24;"><i class="bi bi-twitter" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-facebook" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-instagram" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-linkedin" style="color: #fff;""></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Blood Donation</h4>
                <span>Mulago Hospita;</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/img/gwe2.jpg" class="img-fluid" alt="">
                <div class="social">
                <a href=""  style="background-color: #d62a24;"><i class="bi bi-twitter" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-facebook" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-instagram" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-linkedin" style="color: #fff;""></i></a>
                </div>
              </div>
              <div class="member-info">
              <h4>Blood Donation</h4>
                <span>Mulago Hospita;</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/img/gwe3.jpg" class="img-fluid" alt="">
                <div class="social">
                <a href=""  style="background-color: #d62a24;"><i class="bi bi-twitter" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-facebook" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-instagram" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-linkedin" style="color: #fff;""></i></a>
                </div>
              </div>
              <div class="member-info">
              <h4>Blood Donation</h4>
                <span>Mulago Hospita;</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="public/assets/img/gwe4.jpg" class="img-fluid" alt="">
                <div class="social"  >
                <a href=""  style="background-color: #d62a24;"><i class="bi bi-twitter" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-facebook" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-instagram" style="color: #fff;"></i></a>
                  <a href="" style="background-color: #d62a24;"><i class="bi bi-linkedin" style="color: #fff;""></i></a>
                </div>
              </div>
              <div class="member-info">
              <h4>Blood Donation</h4>
                <span>Mulago Hospita;</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color: #d62a24;">F.A.Q</h2>
          <h3>Frequently Asked <span style="color: #d62a24;">Questions</span></h3>
          <p>We believe that knowledge is power, and we want to empower our users with all the information they need. That's why we've created this FAQ page, where you can find answers to the most commonly asked questions about our website or organization. Whether you're curious about our policies, our history, or our mission, you'll find the answers you're looking for here. So please, 
            don't hesitate to ask! Our goal is to help you understand and navigate our site with ease</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Why Give Blood? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>

                  Blood donation is a simple yet powerful way to make a difference in the lives of others. When you donate blood, you're not only helping those in need, but you're also making a lasting impact on your community. Every donation has the potential to save up to three lives, and it only takes about an hour of your time. Giving blood is a rewarding and fulfilling experience, and it's one of the best things you can do to help others. So if you're able, 
                  consider donating today and make a difference in someone's life

                </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Who Can Give Blood? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  Not everyone is eligible to donate blood, but there are many people who are able to do so. To be eligible to donate, you must be in good general health, be at least 16 years of age (in some states, 17 years), and weigh at least 110 pounds. You must also meet certain other criteria, such as having a normal temperature and blood pressure, and not being pregnant or breastfeeding. If you're interested in donating, it's best to check with your local
                   blood bank to see if you're eligible. Together, we can make a difference!
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">The donation Process!! <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  The blood donation process is relatively simple and takes about an hour from start to finish. You'll first be asked to answer some questions about your health and medical history. Then, a small blood sample will be taken to check your hemoglobin levels and to screen for infections. Once you've been cleared to donate, you'll be asked to lie down on a donation bed and a phlebotomist will insert a needle into a vein in your arm. The blood will be collected into a bag, 
                  and you'll be given some juice and snacks afterwards.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Where to Donate? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                  You can donate blood at a variety of locations, including community blood drives, hospitals, and blood donation centers. Community blood drives are often held at schools, churches, and other public places. Hospitals and blood donation centers are permanent facilities that are open year-round. To find a blood donation location near you, you can check the website of your local blood bank or the American Red Cross. It's also a good idea to make an appointment in advance, 
                  as donation slots can fill up quickly. Let's give the gift of life!
                  </p>
                </div>
              </li>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    

  </main><!-- End #main -->

<?= $this->endSection(); ?>