<footer id="footer" class="footer bg-transparent">
    <div class="container footer-top light-background">
        <div class="row mb-5">
            <div class="col text-center">
                <a href="{{ url('/') }}" class="d-flex align-items-center justify-content-center">
                    <img src="./assets/img/brixLogo.png" height="50px" alt="Logo" class="mb-3">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-about">
                <h4 class="text-uppercase">Contact</h4>
                <div class="border-bottom"></div>
                <div class="footer-contact pt-4">
                    <p>
                        <strong class="text-white pe-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </strong>
                        <a href="https://maps.app.goo.gl/buWUT8aBCGZGg171A" target="_blank" class="text-decoration-none text-white">
                            <span class="span">55th Avenue</span>, <span>Thokar Niaz Baig</span>
                            <span>Lahore,</span><br><span style="padding-left: 30px;"> Punjab 53700, Pakistan</span>
                        </a>
                    </p>
                    <p class="mt-3">
                        <strong class="text-white pe-3">
                            <i class="fas fa-phone-alt"></i>
                        </strong>
                        <span class="text-white">+92-4235963555</span>
                    </p>
                    <p class="mt-3">
                        <strong class="text-white pe-3">
                            <i class="fas fa-envelope"></i>
                        </strong>
                        <a href="mailto:info@binarybrix.com" class="text-decoration-none text-white">
                            <span>info@binarybrix.com</span>
                        </a>
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.facebook.com/binarybrix" target="_blank" class="facebook me-4 fs-5"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/binarybrix/" target="_blank" class="instagram me-4 fs-5"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/binarybrix/mycompany/" target="_blank" class="linkedin me-4 fs-5"><i class="bi bi-linkedin"></i></a>
                        <a href="https://wa.me/923122166633" target="_blank" class="whatsapp fs-5"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 footer-links small-use">
                <h4 class="text-uppercase">Useful Links</h4>
                <div class="border-bottom"></div>
                <ul class="list-unstyled pt-4">
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#about">About Us</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/') }}#portfolio">Portfolio</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/services') }}">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a
                            href="https://binarybrix.com/hrm/web/index.php/recruitmentApply/jobs.html?v=1.0"
                            target="_blank">Careers</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 footer-links">
                <h4 class="text-uppercase">Our Services</h4>
                <div class="border-bottom-service"></div>
                <ul class="list-unstyled pt-4">
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('custom-software') }}">Custom Software Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('web-application') }}">Web App Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('mobile-application') }}">Mobile App Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('high-tech-game') }}">Game Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('e-commerce') }}">E-commerce Development</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 footer-links lg:pt-6 lg:mt-4 mt-2 pt-4 small-service">
                <ul class="list-unstyled pt-4">
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('ui-ux-design') }}">UI/UX Design and Development </a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('iot-development') }}">IoT Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('expert-qa-testing') }}">Expert QA Testing</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('cloud-based') }}"> Cloud-Based Development </a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('dev-ops') }}">DevOps Development</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container copyright text-center text-white">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">BinaryBrix Pvt Ltd</strong> <span>All Rights Reserved.</span></p>
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
