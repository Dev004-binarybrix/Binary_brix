@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
@include('includes.website.navbar')


<main class="main">




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
                        <i class="bi bi-activity"></i>
                    </div>
                    <a href="{{ route('custom-software') }}" class="stretched-link">
                        <h3 class="color-blue">Custom Software Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="{{ route('web-application') }}" class="stretched-link">
                        <h3>Web Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="{{ route('mobile-application') }}" class="stretched-link">
                        <h3>Mobile Application Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-bounding-box-circles"></i>
                    </div>
                    <a href="{{ route('cloud-based') }}" class="stretched-link">
                        <h3>Cloud Based Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="{{ route('dev-ops') }}" class="stretched-link">
                        <h3>Devops Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="{{ route('e-commerce') }}" class="stretched-link">
                        <h3>E-commerce Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="{{ route('ui-ux-design') }}" class="stretched-link">
                        <h3>UI/UX Design and Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="{{ route('iot-development') }}" class="stretched-link">
                        <h3>IOT Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="{{ route('high-tech-game') }}" class="stretched-link">
                        <h3>Games Development</h3>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="{{ route('expert-qa-testing') }}" class="stretched-link">
                        <h3>QA and Testing</h3>
                    </a>
                </div>
            </div>

        </div>

    </div>

    </section>

    @include('includes.website.contact')

  </main>

@endsection
@section('admininsertjavascript')
@endsection
