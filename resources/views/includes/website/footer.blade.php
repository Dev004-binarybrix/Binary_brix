<footer id="footer" class="footer bg-transparent">

    {{-- <div class="footer-newsletter">
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
    </div> --}}

    <div class="container footer-top light-background">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ url('/') }}" class="d-flex align-items-center">
                    <img src="./assets/img/brixBlue.png" height="35px">
                </a>
                <div class="footer-contact pt-3">
                    <p><strong>Address:</strong>
                        <a href="https://maps.app.goo.gl/buWUT8aBCGZGg171A" target="_blank">
                            <span class="span">55th Avenue</span>, <span>Thokar Niaz Baig</span>
                            <span>Lahore,</span><br><span> Punjab 53700, Pakistan</span>
                        </a>
                    </p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+92-4235963555</span></p>
                    <p><strong>Email:</strong>
                        <a href="mailto:info@binarybrix.com">
                            <span>info@binarybrix.com</span>
                        </a>
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#about">About us</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#portfolio">Portfolio</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#services">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a
                            href="https://binarybrix.com/hrm/web/index.php/recruitmentApply/jobs.html?v=1.0"
                            target="_blank">Careers</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('custom-software') }}">Custom Software
                            Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('web-application') }}">Web App
                            Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('mobile-application') }}">Mobile App
                            Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('high-tech-game') }}">Game
                            Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('services') }}">More</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-4">
                <h4>Follow Us</h4>

                <div class="social-links d-flex">
                    {{-- <a href="https://www.facebook.com/binarybrix" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/binarybrix/" target="blank"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/binarybrix/" target="blank"><i class="bi bi-linkedin"></i></a>
            <a href="https://wa.me/923122166633" target="_blank"><i class="bi bi-whatsapp"></i></a> --}}

                    {{-- <li>
                        <a href="https://www.facebook.com/binarybrix" target="_blank" data-toggle="tooltip" title="Follow us on Facebook">
                            <img src="./assets/img/facebook.png" alt="Facebook" style="width: 40px; height: 40px;">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/binarybrix/" target="_blank" data-toggle="tooltip" title="Follow us on Instagram">
                            <img src="./assets/img/instagram.png" alt="Instagram" style="width: 45px; height: 45px;">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/binarybrix/mycompany/" target="_blank" data-toggle="tooltip" title="Connect with us on LinkedIn">
                            <img src="./assets/img/linkedin.png" alt="Linked In" style="width: 40px; height: 40px;">
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/923122166633" target="_blank" data-toggle="tooltip" title="+92-4235963555">
                            <img src="./assets/img/whatsapp.png" alt="Whatsapp" style="width: 40px; height: 40px">
                        </a>
                    </li> --}}

                    <a href="https://www.facebook.com/binarybrix" target="_blank" class="facebook"><i
                            class="bi bi-facebook"
                            style="font-size: 22px; padding-right: 10px;"></i></a>
                    <a href="https://www.instagram.com/binarybrix/" target="blank" class="instagram"><i
                            class="bi bi-instagram"
                            style="font-size: 22px;padding-right: 10px;"></i></a>
                    <a href="https://www.linkedin.com/company/binarybrix/mycompany/" target="blank" class="linkedin"><i
                            class="bi bi-linkedin"
                            style="font-size: 22px; padding-right: 10px;"></i></a>
                    <a href="https://wa.me/923122166633" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"
                            style="font-size: 22px;padding-right: 10px;"></i></a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> <!-- Make sure jQuery is loaded first -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> <!-- Bootstrap JS should be loaded after jQuery -->

<script>
    $(document).ready(function() {
        $('[data-bs-toggle="tooltip"]').tooltip({
            delay: {
                "show": 0,
                "hide": 0
            }
        });
    });
    $(document).on('click', '.ancher', function() {
        $('this').removeClass('active');
        $(this).addClass('active');
    });
</script>

<script>
    document.addEventListener('scroll', function() {
        const header = document.querySelector('.header');
        const navmenu = document.querySelector('.navmenu');
        const logo = document.getElementById('brand-logo');

        if (window.scrollY > 50) {
            header.classList.add('scrolled');
            navmenu.classList.add('scrolled');
            logo.src = "./assets/img/brixBlue.png";
        } else {
            header.classList.remove('scrolled');
            navmenu.classList.remove('scrolled');
            logo.src = "./assets/img/brixLogo.png";
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip({
            delay: {
                "show": 0,
                "hide": 0
            }
        });

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 0) {
                $('.mobile-nav-toggle').removeClass('text-white');
            } else {
                $('.mobile-nav-toggle').addClass('text-white');
            }
        });
    });
</script>
