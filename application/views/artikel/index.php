

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:cs.akusehat@gmail.com">cs.akusehat@gmail.com</a>
        <i class="bi bi-phone"></i> +62 812 3456 789
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://www.linkedin.com/in/arif-supriyanto-028baa179?original_referer=" class="twitter" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="https://facebook.com/asepnr20" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://instagram.com/anr20_" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="#" class="tiktok" target="_blank"><i class="bi bi-tiktok"></i></a>
      </div>
    </div>
  </div>
  <!-- ======= End Top Bar ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- logo brand -->
      <a href="<?= base_url('user') ?>" class="logo me-auto"><img src="<?= base_url() ?>assets/img/logo.png" alt="+Aku Sehat" class="img-fluid"></a>

      <!-- .navbar -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="<?= base_url('user') ?>#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('user') ?>#services">Konsultasi</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('user/obat') ?>">Obat & Vitamin</a></li>
          <li><a class="nav-link scrollto active" href="<?= base_url('user/artikel') ?>">Artikel</a></li>
          <li class="dropdown"><a href=""><span>Tentang Kami</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="<?= base_url('user/team') ?>">Team</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('user') ?>#map">Site Map</a></li>
              <li><a class="nav-link scrollto" href="<?= base_url('user/kebijakan') ?>">Kebijakan & Privasi</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
      <a href="<?= base_url('user/login') ?>" class="login-btn"><span class="d-none d-md-inline"></span>Login</a>

    </div>
  </header>
  <!-- ======= End Header ======= -->
    <main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">
                            <strong>Trending now</strong>
                            <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                            <div class="trending-animated">
                                <ul id="js-news" class="js-hidden">
                                    <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                    <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                    <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img src="<?= base_url() ?>assets/artikel/img/trending/trending_top.jpg" alt="">
                                <div class="trend-top-cap">
                                    <span>Appetizers</span>
                                    <h2><a href="details.html">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="<?= base_url() ?>assets/artikel/img/trending/trending_bottom1.jpg" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">Lifestyple</span>
                                        <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?= base_url() ?>assets/artikel/img/trending/trending_bottom2.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color2">Sports</span>
                                            <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img src="<?= base_url() ?>assets/artikel/img/trending/trending_bottom3.jpg" alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            <span class="color3">Travels</span>
                                            <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= base_url() ?>assets/artikel/img/trending/right1.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Concert</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= base_url() ?>assets/artikel/img/trending/right2.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color3">sea beach</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= base_url() ?>assets/artikel/img/trending/right3.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color2">Bike Show</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= base_url() ?>assets/artikel/img/trending/right4.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color4">See beach</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="<?= base_url() ?>assets/artikel/img/trending/right5.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Skeping</span>
                                <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->

    <!--   Weekly2-News start -->
    <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="<?= base_url() ?>assets/artikel/img/news/weekly2News1.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="<?= base_url() ?>assets/artikel/img/news/weekly2News2.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event night</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="<?= base_url() ?>assets/artikel/img/news/weekly2News3.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="<?= base_url() ?>assets/artikel/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event time</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                             <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="<?= base_url() ?>assets/artikel/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model  Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy;<strong><span><a href="<?= base_url('user') ?>">Aku Sehat</a></span></strong>, 2022. All Rights Reserved
          </div>
          <div class="credits">
            Made with ❤️
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="tiktok"><i class="bx bxl-tiktok"></i></a>
        </div>
      </div>
    </footer>
    <!-- ======= End Footer ======= -->

    <!-- ======= Preloader ======= -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- ======= End Preloader ======= -->

  <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
        <script src="<?= base_url() ?>./assets/artikel/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url() ?>./assets/artikel/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/popper.min.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/bootstrap.min.js"></script>
      <!-- Jquery Mobile Menu -->
        <script src="<?= base_url() ?>./assets/artikel/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="<?= base_url() ?>./assets/artikel/js/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="<?= base_url() ?>./assets/artikel/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
        <script src="<?= base_url() ?>./assets/artikel/js/wow.min.js"></script>
    <script src="<?= base_url() ?>./assets/artikel/js/animated.headline.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/jquery.magnific-popup.js"></script>

        <!-- Breaking New Pluging -->
        <script src="<?= base_url() ?>./assets/artikel/js/jquery.ticker.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
        <!-- <script src="<?= base_url() ?>./assets/artikel/js/jquery.scrollUp.min.js"></script> -->
        <script src="<?= base_url() ?>./assets/artikel/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>./assets/artikel/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="<?= base_url() ?>./assets/artikel/js/contact.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/jquery.form.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/jquery.validate.min.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/mail-script.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
        <script src="<?= base_url() ?>./assets/artikel/js/plugins.js"></script>
        <script src="<?= base_url() ?>./assets/artikel/js/main.js"></script>
