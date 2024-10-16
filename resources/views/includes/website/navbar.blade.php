<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:info@binarybrix.com">info@binarybrix.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+92-4235-963-555</span></i>
            </div>

            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://www.facebook.com/binarybrix" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/binarybrix/" target="blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/binarybrix/mycompany/" target="blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></a>
                <a href="https://wa.me/923122166633" target="_blank" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <div class="branding d-flex align-items-center">
        <div class="container-fluid position-relative d-flex justify-content-between align-items-center">
            <div class="ms-3">
                <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                    <img id="brand-logo" src="./assets/img/brixLogo.png" alt="Logo">
                </a>
            </div>
            <div class="margin-right ">
                <nav id="navmenu" class="navmenu">
                    <ul>
                        {{-- <li>
                            <a href="https://www.facebook.com/binarybrix" target="_blank" data-toggle="tooltip" title="Follow us on Facebook" data-placement="bottom">
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
                                <img src="./assets/img/linkedin.png" alt="LinkedIn" style="width: 40px; height: 40px;">
                            </a>
                        </li>
                        <li>
                            <a href="https://wa.me/923122166633" target="_blank" data-toggle="tooltip" title="+92-4235-963-555">
                                <img src="./assets/img/whatsapp.png" alt="WhatsApp" style="width: 40px; height: 40px;">
                            </a>
                        </li> --}}

                        <li><a href="{{ url('/') }}" class="active ancher">Home</a></li>
                        <li class="dropdown"><a href="{{ url('/services') }}"><span>Services</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                           <ul style="overflow-x:hidden">
                                <li class="nav-item"><a href="{{ route('custom-software') }}"><i class="bi bi-gear"></i>
                                        Custom Software &nbsp;<span class="d-none d-sm-inline">Development</span></a></li>
                                <li class="nav-item"><a href="{{ route('web-application') }}"><i
                                            class="bi bi-browser-chrome"></i> Web Application &nbsp;<span class="d-none d-sm-inline">Development </span></a></li>
                                <li class="nav-item"><a href="{{ route('mobile-application') }}"><i
                                            class="bi bi-phone"></i>
                                        Mobile Application &nbsp;<span class="d-none d-sm-inline">Development </span></a></li>
                                <li class="nav-item"><a href="{{ route('high-tech-game') }}"><i
                                            class="bi bi-controller"></i> High-Tech Game &nbsp;<span class="d-none d-sm-inline">Development </span></a></li>
                                <li class="nav-item"><a href="{{ route('cloud-based') }}"><i class="bi bi-cloud"></i>
                                        Cloud-Based &nbsp;<span class="d-none d-sm-inline">Development </span></a></li>
                                <li class="nav-item"><a href="{{ route('dev-ops') }}"><i class="bi bi-tools"></i> DevOps
                                         &nbsp;<span class="d-none d-sm-inline">Development</span></a></li>
                                <li class="nav-item"><a href="{{ route('e-commerce') }}"><i class="bi bi-cart"></i>
                                        E-commerce &nbsp;<span class="d-none d-sm-inline"> Development <span></a></li>
                                <li class="nav-item"><a href="{{ route('ui-ux-design') }}"><i
                                            class="bi bi-palette"></i>
                                        UI/UX Design and &nbsp;<span class="d-none d-sm-inline">Development </span></a></li>
                                <li class="nav-item"><a href="{{ route('iot-development') }}"><i
                                            class="bi bi-wifi"></i>
                                        IoT Development</a></li>
                                <li class="nav-item"><a href="{{ route('machine-learning') }}"><i
                                            class="bi bi-robot"></i>
                                        Artificial Intelligence &nbsp;<span class="d-none d-sm-inline">& Machine Learning</span></a></li>
                                <li class="nav-item"><a href="{{ route('expert-qa-testing') }}"><i
                                            class="bi bi-check-circle"></i>Expert QA Testing</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ url('/') }}#portfolio">Portfolio</a></li>
                        <li class="dropdown"><a href="{{ url('/') }}#about"><span>Company</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                          <ul style="overflow-x:hidden">
                                <li class="nav-item"><a
                                        href="https://binarybrix.com/hrm/web/index.php/recruitmentApply/jobs.html?v=1.0"><i
                                            class="bi bi-briefcase"></i>Career</a></li>
                                <li class="nav-item"><a href="{{ url('/') }}#faq"><i
                                            class="bi bi-question-circle"></i>
                                        F.A.Q</a></li>

                                <li class="nav-item"><a href="{{ url('/') }}#testimonials"><i
                                            class="bi bi-stars"></i>Testimonial</a></li>

                                <li class="nav-item"><a href="{{ url('/') }}#about"><i
                                            class="bi bi-info-circle"></i>
                                        About Us</a></li>

                                {{--<li class="nav-item"><a href="{{ url('/') }}#team"><i class="bi bi-people"></i>
                                        Higher Management</a></li>--}}
                                {{-- <li class="nav-item"><a href="{{ url('/') }}#contact"><i
                                    class="bi bi-envelope"></i>Contact Us</a></li> --}}
                            </ul>
                        </li>
                        <li><a href="{{ url('/') }}#blog">Blog</a></li>
                        <li><a href="{{ url('/') }}#contact">Contact Us</a></li>
                        {{-- <li><a href="{{ url('/') }}#team">Higher Management</a></li> --}}
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list text-white"></i>
                </nav>
            </div>
        </div>
    </div>
</header>
