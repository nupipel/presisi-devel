  <!-- Footer Section -->
  <footer class="footer" data-aos="fade-up" data-aos-delay="150">
      <!-- Container Starts -->
      <div class="container">
          <!-- Row Starts -->
          <div class="row section">
              <!-- Footer Widget Starts -->
              <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
                  <h3 class="small-title">
                      About Us
                  </h3>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis veritatis eius porro modi hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                  </p>
                  <div class="social-footer">
                      <a href="#"><i class="fa fa-facebook icon-round"></i></a>
                      <a href="#"><i class="fa fa-twitter icon-round"></i></a>
                      <a href="#"><i class="fa fa-linkedin icon-round"></i></a>
                      <a href="#"><i class="fa fa-google-plus icon-round"></i></a>
                  </div>
              </div>
              <!-- Footer Widget Ends -->

              <!-- Footer Widget Starts -->
              <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".2s">
                  <h3 class="small-title">
                      Links
                  </h3>
                  <ul class="menu">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Works</a></li>
                      <li><a href="#">Pricing</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
              </div>
              <!-- Footer Widget Ends -->

              <!-- Footer Widget Starts -->
              <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
                  <h3 class="small-title">
                      GALLERY
                  </h3>
                  <div class="plain-flicker-gallery">
                      <a href="#"><img src="<?= base_url() ?>assets/img/flicker/img1.jpg" alt=""></a>
                      <a href="#"><img src="<?= base_url() ?>assets/img/flicker/img2.jpg" alt=""></a>
                      <a href="#"><img src="<?= base_url() ?>assets/img/flicker/img3.jpg" alt=""></a>
                      <a href="#"><img src="<?= base_url() ?>assets/img/flicker/img4.jpg" alt=""></a>
                      <a href="#"><img src="<?= base_url() ?>assets/img/flicker/img5.jpg" alt=""></a>
                      <a href="#"><img src="<?= base_url() ?>assets/img/flicker/img6.jpg" alt=""></a>
                  </div>
              </div>
              <!-- Footer Widget Ends -->

              <!-- Footer Widget Starts -->
              <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
                  <h3 class="small-title">
                      SUBSCRIBE US
                  </h3>
                  <div class="contact-us">
                      <form>
                          <div class="form-group">
                              <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
                          </div>
                          <div class="form-group">
                              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
                          </div>
                          <button type="submit" class="btn btn-common">Submit</button>
                      </form>
                  </div>
              </div>
              <!-- Footer Widget Ends -->
          </div>
          <!-- Row Ends -->
      </div>
      <!-- Container Ends -->

      <!-- Copyright -->
      <div id="copyright">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-xs-12">
                      <p class="copyright-text">All copyrights reserved © 2018 - <a rel="nofollow" href="https://google.com">NuPipeL</a>
                      </p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-xs-12">
                      <ul class="nav nav-inline  justify-content-end ">
                          <li class="nav-item">
                              <a class="nav-link active" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Sitemap</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Privacy Policy</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Terms of services</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- Copyright  End-->

  </footer>
  <!-- Footer Section End-->

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
      <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url() ?>assets/js/jquery-min.js"></script>
  <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.mixitup.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.countTo.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.nav.js"></script>
  <script src="<?= base_url() ?>assets/js/scrolling-nav.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.slicknav.js"></script>
  <script src="<?= base_url() ?>assets/js/form-validator.min.js"></script>
  <script src="<?= base_url() ?>assets/js/contact-form-script.js"></script>
  <script src="<?= base_url() ?>assets/js/main.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
      AOS.init();
      AOS.init({
          // Global settings:
          disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
          startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
          initClassName: 'aos-init', // class applied after initialization
          animatedClassName: 'aos-animate', // class applied on animation
          useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
          disableMutationObserver: false, // disables automatic mutations' detections (advanced)
          debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
          throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


          // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
          offset: 120, // offset (in px) from the original trigger point
          delay: 50, // values from 0 to 3000, with step 50ms
          duration: 1000, // values from 0 to 3000, with step 50ms
          easing: 'ease', // default easing for AOS animations
          once: true, // whether animation should happen only once - while scrolling down
          mirror: false, // whether elements should animate out while scrolling past them
          anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

      });
  </script>
  </body>

  </html>