<footer id="footer" class="footer bg-transparent">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>Join Our <span class="text-primary">Newsletter</span></h4>
            <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe">
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top light-background">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <img src="./assets/img/brixLogo.png" height="35px">
          </a>
          <div class="footer-contact pt-3">
            <p><strong>Address:</strong> 55th Avenue </p>
            <p>Thokar Niaz Baig</p>

            <p>Lahore,Punjab 53700, Pakistan</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+92-4235963555</span></p>
            <p><strong>Email:</strong> <span>info@binarybrix.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a
                href="https://binarybrix.com/hrm/web/index.php/recruitmentApply/jobs.html?v=1.0"
                target="_blank">Careers</a></li>




          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i><a href="{{ route('custom-software') }}">Custom Software Development</a></li>
            <li><i class="bi bi-chevron-right"></i><a href="{{ route('web-application') }}">Web App Development</a></li>
            <li><i class="bi bi-chevron-right"></i><a href="{{ route('mobile-application') }}">Mobile App Development</a></li>
            <li><i class="bi bi-chevron-right"></i><a href="{{ route('services') }}">More</a></li>
        </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>

          <div class="social-links d-flex">
            <a href="https://www.facebook.com/binarybrix" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/binarybrix/" target="blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/binarybrix/" target="blank"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">BinaryBrix Pvt Ltd</strong> <span>All Rights
          Reserved.</span></p>

    </div>

  </footer>


  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
