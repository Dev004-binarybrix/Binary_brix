@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

@section('content')
    @include('includes.website.navbar')


    <main class="main">


        <section id="hero" class="hero section dark-background" style="min-height: 50vh !important;margin-bottom: 5%;">
            <div class="image-background">
                <img src="assets/img/hero-bg.jpg" alt="Hero Image" id="hero-image">
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                        <h1 class="fs-1"><span>Web Application</span></h1>
                        <p>
                            Designed to streamline expense management for businesses

                        </p>

                        <div class="d-flex mt-4">
                            <a href="#contact" class="btn-get-started fw-bold rounded-pill">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper init-swiper">

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

                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolioDetailed/webSpendsail/1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolioDetailed/webSpendsail/2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolioDetailed/webSpendsail/3.jpg" alt="">
                                </div>

                                {{-- <div class="swiper-slide">
                                    <img src="assets/img/portfolioDetailed/webSpendsail/4.jpg" alt="">
                                </div> --}}

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                            <h3>Spend Sail Web Application</h3>
                            <ul>
                                <li><strong>Category</strong>: Web Application Development</li>
                                <li><strong>Client</strong>: ASU Company</li>
                            </ul>
                        </div>
                        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                            <h2>Details </h2>

                                <p>
                                    SpendSail Web App is a powerful online platform designed to streamline expense management for businesses of all sizes.
                                    With features like real-time expense tracking, effortless
                                    budgeting, and AI-enhanced automation, the Web App provides users with a comprehensive view of their financial activities. The intuitive interface ensures that businesses can easily manage their finances from anywhere, reducing manual tasks and minimising errors, allowing for better financial control and more focus on growth.
                                </p>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Portfolio Details Section -->

        <section id="portfolio" class="portfolio section">


            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p><span>Check Our&nbsp;</span> <span class="description-title">Other Web Portfolios</span></p>
            </div>

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="100">

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
                    </div>
                </div>
            </div>
        </section>


        @include('includes.website.contact')

    </main>
@endsection



@section('admininsertjavascript')
@endsection
