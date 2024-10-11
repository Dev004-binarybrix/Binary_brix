@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
    @include('includes.website.navbar')


    <main class="main">
        <section id="hero" class="hero section dark-background">
            <div class="video-background">
                <video autoplay loop muted id="hero-video">
                    <source src="assets/img/hero.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h4>Binary Brix Technologies</h4>
                        <h1 class="fs-1"><span>Software Development Company</span></h1>

                        <p>
                            Blending strategic insights and designs<span class="d-none d-sm-inline"> with brilliant
                                engineering.</span>
                        </p>
                        <div class="d-flex mt-4">
                            <a href="#contact" class="btn-get-started fw-bold rounded-pill">Let’s Work Together</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id=" services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p class="text-capitalize"><span>What Would You Like to </span> <span class="description-title">get
                        done?</span>
                </p>
            </div>
            <div class="container">
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-gear"></i>
                            </div>
                            <a href="{{ route('custom-software') }}" class="stretched-link">
                                <h3>Custom Software Development</h3>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-browser-chrome"></i>
                            </div>
                            <a href="{{ route('web-application') }}" class="stretched-link">
                                <h3>Web Application Development</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-phone"></i>
                            </div>
                            <a href="{{ route('mobile-application') }}" class="stretched-link">
                                <h3>Mobile Application Development</h3>
                            </a>
                        </div>
                    </div>
                    <a href="{{ route('services') }}"
                        class="btn btn-primary btn-get-started rounded-pill px-5 w-auto bg-color-blue">All
                        Services</a>
                </div>
            </div>
        </section>
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="50">
                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-emoji-smile"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="80" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-journal-richtext"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-headset"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                        <i class="bi bi-people"></i>
                        <div class="stats-item">
                            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Smart Workers</p>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <div class="container section-title" data-aos="fade-up">
            <h2>Our Projects</h2>
        </div>
        <section id="clients" class="clients section light-background">
            <div class="container" style="height: 120px">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid small-screen"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid small-screen"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png"
                                class="img-fluid small-screen" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png"
                                class="img-fluid small-screen" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png"
                                class="img-fluid small-screen" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png"
                                class="img-fluid small-screen" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png"
                                class="img-fluid small-screen" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png"
                                class="img-fluid small-screen" alt=""></div>
                    </div>
                </div>

            </div>

        </section>

        <section id="portfolio" class="portfolio section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p><span>Check Our&nbsp;</span> <span class="description-title">Portfolio</span></p>
            </div>
            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">

                        <!-- .filter-app is mobile -->
                        <!-- filter product is web -->
                        <!-- filter branding design -->
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Mobile</li>
                        <li data-filter=".filter-product">Web</li>
                        <li data-filter=".filter-branding">Design</li>
                    </ul>
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="100">
                        <!-- Mobile -->
                        <a href="{{ route('mobile-tropical') }}">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <img src="assets/img/portfolios/mobileTropicalBound.png" class="img-fluid"
                                    alt="">

                                <div class="portfolio-info">
                                    <h4>Tropical Bound Mobile Application</h4>

                                    <a href="{{ route('mobile-tropical') }}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </a>
                        <!-- Web -->
                        <a href="{{ route('web-tropical') }}">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                <img src="assets/img/portfolios/webTropicalBound.png" class="img-fluid" alt="">

                                <div class="portfolio-info">
                                    <h4>Tropical Bound Web Application</h4>

                                    <a href="{{ route('web-tropical') }}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </a>

                        <!-- Mobile -->
                        <a href="{{ route('mobile-spendsail') }}">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                                <img src="assets/img/portfolios/mobileSpendSail.png" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>SpendSail Mobile Application</h4>

                                    <a href="{{ route('mobile-spendsail') }}" title="More Details"
                                        class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </a>
                        <!-- Web -->
                        <a href="{{ route('web-spendsail') }}">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                                <img src="assets/img/portfolios/webSpendsail.png" class="img-fluid" alt="">

                                <div class="portfolio-info">
                                    <h4>SpendSail Web Application </h4>
                                    <a href="{{ route('web-spendsail') }}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </a>
                        {{-- Design --}}
                        <a href="{{ route('design-almmaz') }}">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <img src="assets/img/designPortfolios/almmaz/7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Almmaz</h4>
                                    <p>Branding Project</p>
                                    <a href="assets/img/designPortfolios/almmaz/7.jpg" title="Almmaz: Branding Project"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('design-almmaz') }}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('design-coffee') }}">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <img src="assets/img/designPortfolios/crackedOutCoffee/8.jpg" class="img-fluid"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>Cracked Out Coffee</h4>
                                    <p>Branding Project</p>
                                    <a href="assets/img/designPortfolios/crackedOutCoffee/8.jpg"
                                        title="Cracked Out Coffee: Branding Project"
                                        data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('design-coffee') }}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('design-devwave') }}">
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                                <img src="assets/img/designPortfolios/devWave/10.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Dev Wave</h4>
                                    <p>Branding Project</p>
                                    <a href="assets/img/designPortfolios/devWave/10.jpg"
                                        title="Dev Wave: Branding Project" data-gallery="portfolio-gallery-branding"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('design-devwave') }}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
        </div>

        <section id="testimonials" class="testimonials section dark-background">

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>United Kingdom</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>BinaryBrix delivered EXCEPTIONAL work with keen attention to detail and unmatched
                                        professionalism in software development. Working with the BinaryBrix Team was a
                                        breeze; proactive communication, politeness, and cooperation were top-notch. Highly
                                        recommend!</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Johnson</h3>
                                <h4>United States</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Outstanding work from BinaryBrix Team! They managed the custom knowledge base
                                        feature with great output.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Michael Brown</h3>
                                <h4>United Kingdom</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fantastic work. Will not hesitate to work with them again.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Kevin Taylor</h3>
                                <h4>United States</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Everything was great! Thanks to BinaryBrix for their excellent work.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>David Garcia</h3>
                                <h4>Belgium</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Thanks for the excellent integration of the API in my software. It works very
                                        well. We will surely work together again on the next project. Meanwhile, I recommend
                                        BinaryBrix for any other job related to working with API integrations.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        @include('includes.website.contact')

        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us</h2>
                <p><span>Find Out More</span> <span class="description-title">About Us</span></p>
            </div>
            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="about-content ps-0 ps-lg-3">
                            <h3>About BinaryBrix</h3>
                            <p class="fst-italic">
                                At BinaryBrix Pvt Ltd, we provide top-notch software solutions tailored to your business
                                needs.
                                Our services include custom software development, web and mobile applications, and advanced
                                AI technology.
                            </p>
                            <ul>
                                <li>
                                    <i class="bi bi-diagram-3"></i>
                                    <div>
                                        <h4>What We Do</h4>
                                        <p>Our team of experts focuses on creating innovative and effective solutions to
                                            help your business grow and succeed. From developing custom software to
                                            integrating mobile apps, we deliver high-quality results that make a difference.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <i class="bi bi-fullscreen-exit"></i>
                                    <div>
                                        <h4>Why Choose Us</h4>
                                        <p>We are dedicated to understanding your challenges and providing solutions that
                                            exceed your expectations. With a proven track record of successful projects, we
                                            are committed to being your trusted technology partner.</p>
                                    </div>
                                </li>
                            </ul>
                            <p>
                                <a href="{{ url('/') }}#contact">Contact us</a> to learn more about our services and
                                how we can assist you in achieving your goals.
                            </p>

                        </div>

                    </div>
                </div>

            </div>

        </section>
        <section id="faq" class="faq section">
            <div class="container section-title" data-aos="fade-up">
                <h2>F.A.Q</h2>
                <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="accordion" id="accordionFAQ">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <strong>How can I get in touch with your team?</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Want to chat about a project or just have a question? You can reach us through the
                                        contact form on our website or by emailing us at info@binarybrix.com. We're always
                                        happy to help!
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>How do you keep my information safe?</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Your data is very important to us! We use top-notch security measures to protect it,
                                        like encryption and strict access controls. We regularly check our systems to make
                                        sure everything is safe and sound.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <strong>Can I see what you’ve done before?</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Absolutely! Check out our website for examples of our work. We’ve got case studies
                                        and a portfolio to show you what we can do.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <strong>How much will my project cost?</strong>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        To get a price for your project, just tell us what you need. We'll set up a chat to
                                        learn more about your ideas and give you a detailed estimate.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        <strong>Will you help me after the project is finished?</strong>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        Yep, we're here to help after your project is live. We'll keep things running
                                        smoothly with updates, fixes, and whatever else you need.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <strong>What makes you different from other companies?</strong>
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionFAQ">
                                    <div class="accordion-body">
                                        We’re all about understanding our clients and creating amazing custom software.
                                        We’re committed to top-notch customer service and always strive to go above and
                                        beyond. Plus, we love trying new things and making sure our software is super
                                        reliable.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- blog section --}}


        <section id="blog" class="blog section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Blog</h2>
                <p><span>Discover Insights on Our </span> <span class="description-title">Blog!</span></p>
            </div>
            <div class="container">

                <div class="row">
                    <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
                        <!-- Carousel Inner -->
                        <div class="carousel-inner">
                            <div class="carousel-item active mb-5">
                                <div class="row justify-content-center">
                                    <!-- Blog Card 1 -->
                                    <div class="col-md-4">
                                        <a href="{{ route('pink-ribbon') }}" class="card-link">
                                            <div class="card">

                                                <img src="assets/img/blog/2.jpg" class="card-img-top p-3"
                                                    alt="Blog image 1">

                                                <div class="card-body">
                                                    <p class="text-muted">By <strong>Admin</strong></p>
                                                    <h5 class="card-title">Tech Women, Stronger Together Against Breast Cancer!</h5>
                                                    <p class="card-text">For women in tech, balancing health and a demanding career adds an extra layer of complexity. Here's how you can navigate this journey with strength and support....</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <!-- Blog Card 2 -->
                                    {{-- <div class="col-md-4">
                                    <a href="{{ route('pink-ribbon') }}" class="card-link">
                                        <div class="card">

                                            <img src="assets/img/blog/1.jpg" class="card-img-top p-3" alt="Blog image 2">

                                            <div class="card-body">
                                                <p class="text-muted">By <strong>Admin</strong></p>
                                                <h5 class="card-title">What is OpenAI? ChatGPT Technology Manufacturing Company</h5>
                                                <p class="card-text">Discussing the world of today’s technology seems more important than ever...</p>
                                            </div>
                                        </div>
                                    </a>
                                </div> --}}

                                    <!-- Blog Card 3 -->
                                    {{-- <div class="col-md-4">
                                    <a href="your-link-3.html" class="card-link">
                                        <div class="card">
                                            <img src="path_to_image_3.jpg" class="card-img-top" alt="Blog image 3">
                                            <div class="card-body">
                                                <p class="text-muted">By <strong>Admin</strong></p>
                                                <h5 class="card-title">The Role of Artificial Intelligence in the Business World</h5>
                                                <p class="card-text">The development of artificial intelligence (AI) technology will make it increasingly easy...</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                                    <!-- Additional carousel-item blocks for more slides can go here -->
                                    <!-- Carousel Controls -->
                                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button> --}}
                                </div>
                            </div>
                        </div>
        </section>


        <br>
    </main>
@endsection
@section('admininsertjavascript')
@endsection
