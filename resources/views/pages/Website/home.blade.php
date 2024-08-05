@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
@include('includes.website.navbar')
<main class="main">
    <section id="hero" class="hero section light-background">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h4>We Are</h4>
            <h1 class="fs-1"> <span>Software Development Company</span></h1>
            <p>
                Blending strategic insights and thoughtful design with brilliant engineering,
                we create robust technical solutions that deliver digital transformation at scale.

            </p>
            <div class="d-flex mt-4">
              <a href="#contact" class="btn-get-started fw-bold rounded-pill" >Let’s Work Together</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- my code starts --}}

    {{-- <div class="container">
        <div class="card-deck">
        <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
          </div>
          <div class="card mt-3" style="width: 18rem; height: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
          </div>
          <div class="card mt-3" style="width: 18rem; height: 25rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

            </div>
          </div>

        </div>
    </div> --}}


{{-- my code end --}}

    <section id=" services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p class="text-capitalize"><span>What Would You Like to </span> <span class="description-title">get done?</span>
        </p>
      </div>
      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="{{ route('custom-software') }}" class="stretched-link">
                <h3>Custom Software Development</h3>
              </a>

            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="{{ route('web-application') }}" class="stretched-link">
                <h3>Web Application Development</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="{{ route('mobile-application') }}" class="stretched-link">
                <h3>Mobile Application Development</h3>
              </a>
            </div>
          </div>
          <a href="{{ route('services') }}" class="btn btn-primary btn-get-started rounded-pill px-5 w-auto bg-color-blue">All
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


    <section id="clients" class="clients section light-background">

      <div class="container" style="
      height: 120px;
  " >

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
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
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
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/portfolios/mobileSpendSail.png" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>SpendSail Mobile Application</h4>


                  <a href="{{ route('mobile-spendsail') }}" title="More Details"
                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>

              <!-- Web -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/portfolios/webTropicalBound.png" class="img-fluid" alt="">

                <div class="portfolio-info">
                  <h4>Tropical Bound Web Application</h4>


                  <a href="{{ route('web-tropical') }}" title="More Details"
                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>





              <!-- Mobile -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                <img src="assets/img/portfolios/mobileTropicalBound.png" class="img-fluid" alt="">

                <div class="portfolio-info">
                  <h4>Tropical Bound Mobile Application</h4>


                  <a href="{{ route('mobile-tropical') }}" title="More Details"
                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>



              <!-- Web -->
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                <img src="assets/img/portfolios/webSpendsail.png" class="img-fluid" alt="">

                <div class="portfolio-info">
                  <h4>SpendSail Web Application </h4>
                  <a href="{{ route('web-spendsail') }}" title="More Details"
                    class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>

              <!-- Design
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                <img src="assets/img/portfolios/web-spendsail.jpg" class="img-fluid" alt="">

                <div class="portfolio-info">
                  <h4>Branding 3</h4>
                  <p>Lorem ipsum, dolor sit</p>
                  <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2"
                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                      class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i
                      class="bi bi-link-45deg"></i></a>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </section>


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
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>United Kingdom</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>BinaryBrix delivered EXCEPTIONAL work with keen attention to detail and unmatched professionalism in software development. Working with the BinaryBrix Team was a breeze; proactive communication, politeness, and cooperation were top-notch. Highly recommend!</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Johnson</h3>
                <h4>United States</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Outstanding work from BinaryBrix Team! They managed the custom knowledge base feature with great output.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Michael Brown</h3>
                <h4>United Kingdom</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
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
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Kevin Taylor</h3>
                <h4>United States</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
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
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>David Garcia</h3>
                <h4>Belgium</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Thanks for the excellent integration of the API in my software. It works very well. We will surely work together again on the next project. Meanwhile, I recommend BinaryBrix for any other job related to working with API integrations.</span>
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


    <section id="about" class="about section  mt-5">


      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
        <p><span>Find Out More</span> <span class="description-title">About Us</span></p>
      </div>

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="about-content ps-0 ps-lg-3">
              <h3>About BinaryBrix</h3>
              <p class="fst-italic">
                At BinaryBrix Pvt Ltd, we provide top-notch software solutions tailored to your business needs.
                Our services include custom software development, web and mobile applications, and advanced AI technology.
              </p>
              <ul>
                <li>
                  <i class="bi bi-diagram-3"></i>
                  <div>
                    <h4>What We Do</h4>
                    <p>Our team of experts focuses on creating innovative and effective solutions to help your business grow and succeed. From developing custom software to integrating mobile apps, we deliver high-quality results that make a difference.
                    </p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Why Choose Us</h4>
                    <p>We are dedicated to understanding your challenges and providing solutions that exceed your expectations. With a proven track record of successful projects, we are committed to being your trusted technology partner.</p>
                  </div>
                </li>
              </ul>
              <p>
                Contact us to learn more about our services and how we can assist you in achieving your goals.
              </p>
            </div>

          </div>
        </div>

      </div>

    </section>

    <section id="team" class="team section light-background">


      <div class="container section-title" data-aos="fade-up">
        <h2> Our Team</h2>
        <p><span>Our Hardworking</span> <span class="description-title">Team</span></p>

      </div>

      <div class="container">

        <div class="row gy-4">


            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                  <div class="member-img">
                    <img src="assets/img/team/default.jpg" class="img-fluid" alt="">
                    {{-- <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div> --}}
                  </div>
                  <div class="member-info">
                    <h4>Muhammad Shahbaz Yousaf</h4>
                    <span>Chief Executive Officer</span>
                  </div>
                </div>
              </div>



            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="team-member">
                  <div class="member-img">
                    <img src="assets/img/team/default.jpg" class="img-fluid" alt="">
                    {{-- <div class="social">
                      <a href=""><i class="bi bi-twitter-x"></i></a>
                      <a href=""><i class="bi bi-facebook"></i></a>
                      <a href=""><i class="bi bi-instagram"></i></a>
                      <a href=""><i class="bi bi-linkedin"></i></a>
                    </div> --}}
                  </div>
                  <div class="member-info">
                    <h4>Umer Khaliq</h4>
                    <span>Chief Technical Officer</span>
                  </div>
                </div>
              </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/default.jpg" class="img-fluid" alt="">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>Shaukat Ali</h4>
                <span>Admin Officer</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>Shezil Khan</h4>
                <span>HR Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>Zumra Majeed</h4>
                <span>HR Executive</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                {{-- <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div> --}}
              </div>
              <div class="member-info">
                <h4>Hania Mazhar Dar</h4>
                <span>Project Manager</span>
              </div>
            </div>
          </div>




        </div>

      </div>

    </section>
    <section id="faq" class="faq section ">


      <div class="container section-title" data-aos="fade-up">
        <h2>F.A.Q</h2>
        <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
      </div>

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>How can I get in touch with your team?</h3>
                <div class="faq-content">
                  <p>Want to chat about a project or just have a question? You can reach us through
                    the contact form on our website or by emailing us at info@binarybrixcom. We're always happy to help!</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>How do you keep my information safe?</h3>
                <div class="faq-content">
                  <p>Your data is Very  important to us! We use top-notch security measures to protect it, like encryption and strict access controls. We regularly check our systems to make sure everything is safe and sound.
                </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Can I see what you’ve done before?</h3>
                <div class="faq-content">
                  <p>Absolutely! Check out our website for examples of our work. We’ve got case studies and a portfolio to show you what we can do.
                </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>How much will my project cost?</h3>
                <div class="faq-content">
                  <p>To get a price for your project, just tell us what you need. We'll set up a chat to learn more about your ideas and give you a detailed estimate.
                </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Will you help me after the project is finished?</h3>
                <div class="faq-content">
                  <p>Yep, we're here to help after your project is live. We'll keep things running smoothly with updates, fixes, and whatever else you need.
                </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>What makes you different from other companies?
                </h3>
                <div class="faq-content">
                  <p>We’re all about understanding our clients and creating amazing custom software. We’re committed to top-notch customer service and always strive to go above and beyond. Plus, we love trying new things and making sure our software is super reliable.
                </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>

        </div>

      </div>

    </section>
</main>
@endsection

@section('admininsertjavascript')
@endsection



