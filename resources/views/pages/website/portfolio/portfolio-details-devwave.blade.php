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
                                    <img src="assets/img/designPortfolios/devWave/10.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/designPortfolios/devWave/11.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/designPortfolios/devWave/8.jpg" alt="">
                                </div>

                                 <div class="swiper-slide">
                                    <img src="assets/img/designPortfolios/devWave/9.jpg" alt="">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                            <h3>DevWave</h3>
                            <ul>
                                <li><strong>Category</strong>: Design</li>
                                <li><strong>Client</strong>:client name </li>
                            </ul>
                        </div>
                        <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
                            <h2>Details </h2>
                            <p>
                               DevWave is the state of the art...
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
