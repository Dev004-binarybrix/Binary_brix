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
                    <h3>E-commerce Development
                    </h3>
                    <p>
                        Blanditiis voluptate odit ex error ea sed officiis deserunt. Cupiditate non consequatur et
                        doloremque consequuntur. Accusantium labore reprehenderit error temporibus saepe perferendis
                        fuga doloribus vero. Qui omnis quo sit. Dolorem architecto eum et quos deleniti officia qui.
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt
                                voluptatibus.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span>
                        </li>
                    </ul>
                    <p>
                        Est reprehenderit voluptatem necessitatibus asperiores neque sed ea illo. Deleniti quam
                        sequi optio iste veniam repellat odit. Aut pariatur itaque nesciunt fuga.
                    </p>
                    <p>
                        Sunt rem odit accusantium omnis perspiciatis officia. Laboriosam aut consequuntur recusandae
                        mollitia doloremque est architecto cupiditate ullam. Quia est ut occaecati fuga. Distinctio
                        ex repellendus eveniet velit sint quia sapiente cumque. Et ipsa perferendis ut nihil.
                        Laboriosam vel voluptates tenetur nostrum. Eaque iusto cupiditate et totam et quia dolorum
                        in. Sunt molestiae ipsum at consequatur vero. Architecto ut pariatur autem ad non cumque
                        nesciunt qui maxime. Sunt eum quia impedit dolore alias explicabo ea.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->
    <section id="contact" class="contact section light-background">


        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p><span>Want</span> <span class="description-title">Quotation ?</span></p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>55th Avenue, Thokar Niaz Baig, Lahore, Punjab 53700, Pakistan</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>(042)-35963555</p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@binarybrix.com</p>
                            </div>
                        </div>



                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.112967547972!2d74.24024341061055!3d31.46607847413144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa954c17141afb01f%3A0x5fc41976168a1943!2sBinaryBrix%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1719926967696!5m2!1sen!2sus"
                            frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">Your Name</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="email-field" class="pb-2">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email-field" required="">
                            </div>

                            <div class="col-md-12">
                                <label for="subject-field" class="pb-2">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject-field"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <label for="message-field" class="pb-2">Message / Project Details</label>
                                <textarea class="form-control" name="message" rows="10" id="message-field"
                                    required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>

        </div>

    </section>

</main>
@endsection
@section('admininsertjavascript')
@endsection
