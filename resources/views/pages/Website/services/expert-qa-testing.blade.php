@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
@include('includes.website.navbar')
<main class="main">

    <section id="hero" class="hero section dark-background" style="min-height: 30vh; padding: 40px 0;">
        <div class="image-background">
            <img src="assets/img/services-img/QA-Testing.jpg" alt="Hero Image" id="hero-image">
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1 class="fs-1"><span class="text-white">Quality Assurance And Testing</span></h1>
                    <p>
                        We meticulously
                        examine every system to ensure thorough testing
                    </p>
                    <div class="d-flex mt-5">
                        <a href="#contact" class="btn-get-started fw-bold rounded-pill">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/serviceDetailed/QA/1.jpg" alt="" class="img-fluid services-img">
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3>Quality Assurance And Testing
                    </h3>
                    <p>
                        <strong>Maximize customer experience</strong> and satisfaction with comprehensive software
                            quality assurance and testing from our team of experts. We meticulously
                        examine every system to ensure thorough testing of all software aspects.
                        BinaryBrix’s QA team evaluates systems for usability, compatibility, security, and overall performance, guaranteeing optimization and a glitch-free workflow.
                    </p>
                    <p>
                        <strong>Our Quality Assurance & Testing Services Include:
                        </strong>
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Thorough usability checks to ensure intuitive and user-friendly interfaces.
                        </span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Compatibility testing to verify smooth performance across various devices and platforms.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Security assessments to identify and address potential vulnerabilities.</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Performance evaluations to ensure optimal functionality and efficiency.
                        </span>
                        </li>
                    </ul>
                    <p>

                            Enhance your software’s reliability with our expert QA and testing services.
                             Partner with BinaryBrix to ensure your systems are optimized and glitch-free.

                    </p>
                    <p>
                        <strong>Contact us today!</strong> We're ready to help you achieve top-quality software. Request a quote now and start your journey with BinaryBrix.

                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

    {{-- other services --}}

    <section id="services" class="services section ">
        <div class="container section-title" data-aos="fade-up">
          <h2>All Services</h2>
          <p><span>How Can We Empower </span> <span class="description-title">Your Business ?</span></p>


        </div>

        <div class="container">

          <div class="row gy-4 justify-content-center">

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-gear"></i>
                      </div>
                      <a href="{{ route('custom-software') }}" class="stretched-link">
                          <h3 class="color-blue">Custom Software Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-browser-chrome"></i>
                      </div>
                      <a href="{{ route('web-application') }}" class="stretched-link">
                          <h3>Web Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-phone"></i>
                      </div>
                      <a href="{{ route('mobile-application') }}" class="stretched-link">
                          <h3>Mobile Application Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-cloud"></i>
                      </div>
                      <a href="{{ route('cloud-based') }}" class="stretched-link">
                          <h3>Cloud Based Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-tools"></i>
                      </div>
                      <a href="{{ route('dev-ops') }}" class="stretched-link">
                          <h3>Devops Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-cart"></i> <!-- Icon for E-commerce Development -->
                      </div>
                      <a href="{{ route('e-commerce') }}" class="stretched-link">
                          <h3>E-commerce Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-palette"></i> <!-- Icon for UI/UX Design and Development -->
                      </div>
                      <a href="{{ route('ui-ux-design') }}" class="stretched-link">
                          <h3>UI/UX Design and Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-wifi"></i> <!-- Icon for IoT Development -->
                      </div>
                      <a href="{{ route('iot-development') }}" class="stretched-link">
                          <h3>IoT Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-controller"></i> <!-- Icon for Games Development -->
                      </div>
                      <a href="{{ route('high-tech-game') }}" class="stretched-link">
                          <h3>Games Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-robot"></i> <!-- Icon for Games Development -->
                      </div>
                      <a href="{{ route('machine-learning') }}" class="stretched-link">
                          <h3>AI and Machine Learning</h3>
                      </a>
                  </div>
              </div>

              {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-check-circle"></i> <!-- Icon for QA and Testing -->
                      </div>
                      <a href="{{ route('expert-qa-testing') }}" class="stretched-link">
                          <h3>QA and Testing</h3>
                      </a>
                  </div>
              </div> --}}
          </div>

      </div>
    <br>
    @include('includes.website.contact')

</main>
@endsection

@section('admininsertjavascript')
@endsection
