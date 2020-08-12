@extends ('layout2')

@section('content')
<!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#">CLOUD BEANS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Types</a></li>
          <li><a href="#portfolio">Products</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="cart">Cart</a></li>
          <!-- <li><a href="new-login">Login</a></li>
          <li><a href="new-register">Register</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->
<div class="dropdown">
    <button class="get-started-btn scrollto   btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Get Started
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="new-register">Log In</a></li>
      <li><a href="/">Log Out</a></li>
      
    </ul>
  </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Mahasweta's Cloudy Beans Site</h1>
          <div class="d-lg-flex">
            <a href="new-register" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=vFcS080VYQ0" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/top_cover.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              In the year 2020, Our vouyage from the bean to the cup began. Our mission to give a genuinely global affair and bring a really international taste to our customers, drove us to make the brand "Cloud Beans". Leading the indian coffee culture "Cloud Beans" was a chance to find both the love for coffee and also the art of making it according to the preferred taste of our customers.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Love coffee, love people? Find out about working for Cloud Coffee. </li>
              <li><i class="ri-check-double-line"></i> live on visit my website Order and Pay.</li>
              <li><i class="ri-check-double-line"></i>  Digital Ordering and Takeaway</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              We make sure everything we do honors that connection – from our commitment to the highest quality coffee in the world, to the way we engage with our customers and communities to do business responsibly.

              From our beginnings as a single place, in every place that we’ve been, and every place that we touch, we've tried to make it a little better than we found it.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h2 style="font-family:customfe36a51f009e4e4f92fa0; font-size:50px;" class="h3 fontcolor02d7f2eaffa4154a fontalign-center">Let's make history!</h2>
              <p style="text-align: left;">We’ve been making history, now you could be part of it!</p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span></span> Our Partners<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                      We love Cloud Beans and we're pretty sure you will too! 
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span></span> Our Coffee <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      it always has been and will always be about quality. We’re passionate about ethically sourcing only the finest Arabica coffee beans and roasting them with great care. Our passion for coffee is rivaled only by our love of sharing it.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span></span> Our Culture  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
                      We are committed to upholding a culture where diversity is valued, respected and celebrated. Our endeavor is to create a culture of belongingness where our partners feel being part of something bigger and see our mission & values coming to life through every cup, every conversation and every day.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/cover_1.jfif");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/cloud.jfif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>We provide you cloud service</h3>
            <p class="font-italic">
              While our coffee brings people together, our free Wi-Fi service means you can stay connected. Learn how to surf while you sip at Cloud Beans.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Frappuccino <i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Latte <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Espresso<i class="val">75%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Iced-Coffee<i class="val">55%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TYPES</h2>
          <p>Different types of coffee beans</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-coffee"></i></div>
              <h4><a href="">Arabica coffee</a></h4>
              <p>Arabica is the most common (and certainly most heavily marketed) type of coffee in North America. That’s because it actually has a sweeter, more delicate flavor and the coffee itself tends to be less acidic.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-coffee"></i></div>
              <h4><a href=""> Robusta coffee</a></h4>
              <p>Robusta coffee beans are second on the list and the most popular in Europe, the Middle East and Africa. Its name does this bean justice, as it is known for its strong and often harsh flavor profile.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-coffee"></i></div>
              <h4><a href=""> Liberica coffee</a></h4>
              <p>Liberica coffee beans are a rare treat. They’re grown in very specific climates with production being far too scarce for farmers to scale their operations to truly satisfy a global marketplace. Even still, the beans are considered a pleasant surprise. </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-coffee"></i></div>
              <h4><a href="">Excelsa coffee</a></h4>
              <p>Excelsa does boast a tart, fruitier flavor and is known for showing attributes of both light and dark roast coffees to create a unique profile that is frequently sought out by coffee enthusiasts.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>LET US DELIGHT YOU</h3>
            <p>Delicious, handcrafted beverages and great-tasting food. The secret to making life better. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Join us </a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Products</h2>
          <p></p>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Frappe</li>
          <li data-filter=".filter-card">Espresso</li>
          <li data-filter=".filter-web">Latte</li>
         </ul>
         <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/1.jfif" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Frappe 1</h4>
              <p>Frappe</p>
              <a href="assets/img/1.jfif" data-gall="portfolioGallery" class="venobox preview-link" title="Frappe 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/2.jfif" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>latte 3</h4>
              <p>latte</p>
              <a href="assets/img/2.jfif" data-gall="portfolioGallery" class="venobox preview-link" title="latte 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/3.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Frappe 2</h4>
              <p>Frappe</p>
              <a href="assets/img/3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="iced-coffee 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/4.jfif" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Espresso 2</h4>
              <p>Espresso</p>
              <a href="assets/img/4.jfif" data-gall="portfolioGallery" class="venobox preview-link" title="iced-coffee 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/5.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>latte 2</h4>
              <p>latte</p>
              <a href="assets/img/5.webp" data-gall="portfolioGallery" class="venobox preview-link" title="latte 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="assets/img/6.jpg" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Frappe 3</h4>
              <p>Frappe</p>
              <a href="assets/img/6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Frappe 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/7.jfif" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Espresso 1</h4>
              <p>Espresso</p>
              <a href="assets/img/7.jfif" data-gall="portfolioGallery" class="venobox preview-link" title="iced-coffee 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="assets/img/8.jfif" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Espresso 3</h4>
              <p>Espresso</p>
              <a href="assets/img/8.jfif" data-gall="portfolioGallery" class="venobox preview-link" title="iced-coffee 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="assets/img/9.jfif" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>latte 3</h4>
              <p>latte</p>
              <a href="assets/img/9.jfif" data-gall="portfolioGallery" class="venobox preview-link" title="latte 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>We make our team to serve you the world best essence of beans</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mahasweta Bhowmick</h4>
                <span>Founder and Owner</span>
                <p>The founder and the owner of the Cloud Beans</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Rajanna Chottopadhayay</h4>
                <span>Product Manager</span>
                <p>Product Manager of Cloud Beans,responsible for the development of products for an organization</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Debojotee Dutta</h4>
                <span>Chief Executive Officer</span>
                <p>Chief Executive Officer of Cloud Beans,most senior corporate, executive, or administrative officer in charge of managing an organizatio.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Abhijit Bhowmick</h4>
                <span>Accountant</span>
                <p>Accountant of Cloud Beans, accountancy is the measurement, processing, and communication of financial and non financial information about economic entities such as businesses and corporations.</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Creame Frappuccino</h3>
              <h4><sup>₹</sup><span></span></h4>
              <ul>
                <li><a href="#Vanilla Cream Frappuccino">Vanilla Cream Frappuccino  ₹/-210</a></li>
                <li><a href="#Caramel Cream Frappuccino">Caramel Cream Frappuccino  ₹/-230</a></li>
                <li><a href="#Caramel Cream Frappuccino">Double Chocolate Cream Frappuccino  ₹/-250</a></li>
                <li><a href="#White Cream Frappuccino"> White Cream Frappuccino     ₹/-270</a></li>
                <li><a href="#Chocolate Cream Frappuccino">Chocolate Cream Frappuccino  ₹/-290</a></li>
                
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Espresso</h3>
              <h4><sup>₹</sup><span></span></h4>
              <ul>
                <li><a href="#Vanilla Velvet Latte">Vanilla Velvet Latte  ₹/-230</a></li>
                <li><a href="#Caramel Mocchiato">Caramel Mocchiato  ₹/-160</a></li>
                <li><a href="#Cocoa Cappuccino">Cocoa Cappuccino  ₹/-170</a></li>
                <li><a href="#White Chocolate Mocha">White Chocolate Mocha  ₹/-350</a></li>
                <li><a href="#Hazelnut Latte">Hazelnut Latte  ₹/-320</a></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Iced Shaken</h3>
              <h4><sup>₹</sup><span></span></h4>
              <ul>
                <li><a href="#Iced Shaken Black Tea">Iced Shaken Black Tea  ₹/-130</a></li>
                <li><a href="#Iced Shaken Green Tea">Iced Shaken Green Tea   ₹/-120</a></li>
                <li><a href="#Iced Shaken Hibiscus & Passion Lemonade">Iced Shaken Hibiscus & Passion Lemonade  ₹/-130</a></li>
                </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>you can ask us your choice of Cloud Beans</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">How much caffeine is in a cup of coffee? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Caffeine content in different types of coffee can vary. A standard cup of coffee (around 8oz) will contain an average of 94.8mg of caffeine. An Espresso on the other hand will have an average of 63mg of caffeine, and a standard latte will contain an average of 77mg of caffeine. The caffeine content depends on the size, strength and type of coffee you are consuming. 
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">How to make a latte/cappuccino etc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  If you’re bored of your regular morning cup of coffee, why not try mixing it up? There are lots of different types of coffees to try, from espressos to iced coffee – check out our list of 15 types of coffee to try before you die, and see if anything takes your fancy.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">What is fair trade coffee? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  Fair trade coffee is coffee that has been produced by a cooperative of farmers, importers, exporters and distributors that follow the standards set out by the FairTrade organisation.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Where does coffee come from? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Coffee is made from coffee beans, which are grown along the ‘Bean Belt’. This includes countries such as Brazil, Columbia, Vietnam, Indonesia and Mexico. Coffee beans are harvested from the coffee tree as cherries, before going through a wet or dry process to ensure the beans are the correct moisture. The beans are then milled before being exported to their destination. From there, beans are roasted, and are sold whole or are ground down to fine or coarse grinds to be sold in shops.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">What are the different types of coffee beans? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  There are two main types of coffee bean: Coffee Robusta and Coffee Arabica. Coffee Robusta are a lower grade of beans, and are grown at lower altitudes. They are easy to maintain and are more disease resistant, meaning that they produce more. They also contain a larger amount of caffeine. Coffee Arabica make up for more than three-quarters of beans sold worldwide. They are referred to as gourmet coffee beans but only have half the amount of caffeine that Coffee Robusta has.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>31/1. EAST POINT, INDIA, KOLKATA-700078</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>mahasweta08@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+91 8017847819</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d606.1748623701712!2d88.38126004643892!3d22.512192811689403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02713592269feb%3A0x691f74be887fbef6!2s31%2C%20E%20Point%20St%2C%20Ruby%20Park%20East%2C%20Kasba%2C%20Kolkata%2C%20West%20Bengal%20700039!5e0!3m2!1sen!2sin!4v1596569539527!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Cloud Beans</h4>
            <p>We are here to make your day special by brewing our cloud beans</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Mahasweta</h3>
            <p>
              31/1 EAST POINT <br>
              POST OFFICE HALTU<br>
              KOLKATA-INDIA<br><br>
              <strong>Phone:</strong> +1 8017847819<br>
              <strong>Email:</strong> mahasweta08@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Shraded Beans</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Roasted Beans</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Different flavours of coffee</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p></p>
            <div class="social-links mt-3">
              
              <a href="https://twitter.com/iammaaahi" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/mahasweta.bhowmick/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/b.h.o.w.m.i.c.k/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://google.com" class="google-plus"><i class="bx bxl-google"></i></a>
              <a href="https://www.linkedin.com/in/mahasweta-bhowmick-9957437a//" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Mahasweta</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        
        Designed by <a href="https://www.linkedin.com/in/mahasweta-bhowmick-9957437a//">Mahasweta</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  @endsection