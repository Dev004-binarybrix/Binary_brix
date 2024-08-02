@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
@include('includes.website.navbar')
<main class="main">
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                    <h3>Cloud Based Development
                    </h3>
                    <p>
                        <strong>Experience a wide range of cloud-based solutions at BinaryBrix, designed to
                            optimize your business performance.</strong>
                            Our services encompass Software as a
                        Service (SaaS), Platform as a Service (PaaS), and complete or partial
                        migration to public, private, or hybrid cloud networks. Our task-oriented team of experts is dedicated to providing consultation, design, development, secure deployment, and ongoing monitoring for all your cloud computing needs.
                    </p>
                    <p>
                        <strong>
                            Our Cloud-Based Solutions Include:

                        </strong>
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Scalable and flexible SaaS and PaaS implementations to enhance business operations.</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Smooth migration to public, private, or hybrid cloud environments tailored to your needs.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Comprehensive support from design and development to secure deployment and monitoring.</span>
                        </li>
                    </ul>
                    <p>
                        Optimize your business with our expert cloud-based solutions. Partner with BinaryBrix to achieve seamless cloud integration and enhanced performance.
                    </p>
                    <p>
                        <strong>Contact us today!</strong> We're here to help you leverage the power of cloud technology. Request a quote now and start your journey with BinaryBrix.
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
