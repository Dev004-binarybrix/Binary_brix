@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">

@section('content')
@include('includes.website.navbar')


    <main class="main">



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
                                    <img src="assets/img/portfolioDetailed/mobileSpendSail/1.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolioDetailed/mobileSpendSail/2.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolioDetailed/mobileSpendSail/3.jpg" alt="">
                                </div>

                                {{-- <div class="swiper-slide">
                                    <img src="assets/img/portfolioDetailed/mobileSpendSail/4.png" alt="">
                                </div> --}}

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                            <h3>Spend Sail Mobile Application</h3>
                            <ul>
                                <li><strong>Category</strong>: Mobile Application Development</li>
                                <li><strong>Client</strong>: ASU Company</li>
                            </ul>
                        </div>
                        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                            <h2>Details </h2>

                                <p>
                                    SpendSail Mobile App brings the full power of SpendSail's expense management tools right to your fingertips. Designed for on-the-go efficiency, the Mobile App allows users to track expenses, manage budgets, and access real-time financial insights from their smartphones. With AI-powered features and a user-friendly interface, the Mobile App makes it easy for businesses to stay in control of their finances, no matter where they are, ensuring seamless financial management even when you're away from the office.
                                </p>


                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Portfolio Details Section -->


        @include('includes.website.contact')

    </main>
@endsection


@section('admininsertjavascript')
@endsection
