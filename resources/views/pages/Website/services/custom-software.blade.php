@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
@include('includes.website.navbar')

<main class="main">
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3>Custom Software Development
                    </h3>
                    <p>
                        <strong>BinaryBrix provides</strong> cutting-edge software development solutions designed to meet
                        your unique business needs. With over 12 years of experience in custom software
                        development, we offer next-generation solutions that cater to the demands of both startups and established enterprises.
                    </p>
                    <p>
                        We specialise in delivering comprehensive software development services tailored
                        to businesses of all sizes. Unlock your company's potential with our robust and
                        scalable software solutions. Partner with BinaryBrix to elevate your startup's growth and enhance your enterprise's capabilities, ensuring you stay ahead of the competition.

                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Dedicated to meet the specific needs of your business.
                        </span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Designed to support your growth and adapt to changing requirements.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Over 12 years of experience in delivering high-quality software development.
                        </span>
                        </li>
                    </ul>
                    <p>
                        BinaryBrix offers innovative and customised solutions to help your
                        startup soar and your enterprise evolve. Get ahead of the competition with our
                        expert software development services.
                    </p>
                    <p>
                        <strong>Contact us today!</strong> We're just a click away. Request a quote and discover
                        how we can transform your software needs into reality.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

    @include('includes.website.contact')

</main>
@endsection
@section('admininsertjavascript')
@endsection
