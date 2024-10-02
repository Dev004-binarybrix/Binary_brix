<section id="contact" class="contact section light-background">


    <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
        <p><span>How Can We</span> <span class="description-title">Help You?</span></p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-5">

                <div class="info-wrap h-100">
                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h3>Address</h3>
                            <a href="https://maps.app.goo.gl/buWUT8aBCGZGg171A" target="_blank">
                                <p>55th Avenue, Thokar Niaz Baig, Lahore, Punjab 53700</p>
                            </a>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>+92-4235-963-555</p>
                        </div>
                    </div>

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <a href="mailto:info@binarybrix.com">
                                <p>info@binarybrix.com</p>
                            </a>
                        </div>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.112967547972!2d74.24024341061055!3d31.46607847413144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa954c17141afb01f%3A0x5fc41976168a1943!2sBinaryBrix%20Pvt.%20Ltd.!5e0!3m2!1sen!2sus!4v1719926967696!5m2!1sen!2sus"
                        frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-7">
                <form id="contactForm" action="{{ route('contact.send') }}" method="post" class="php-email-form"
                    data-aos="fade-up" data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <label for="name-field" class="pb-2"><strong>Your Name</strong></label>
                            <input type="text" name="name" id="name-field" class="form-control required"
                                required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2"><strong>Your Email</strong></label>
                            <input type="email" class="form-control required" name="email" id="email-field"
                                required="">
                        </div>
                        <div class="col-md-6">
                            <label for="subject-field" class="pb-2"><strong>Phone Number</strong></label>
                            <input type="text" class="form-control required" name="phone" id="phone"
                                required="" oninput="validateNumber(this)">
                        </div>
                        <div class="col-md-6">
                            <label for="name-field" class="pb-2"><strong>Company</strong></label>
                            <input type="text" name="company" id="company" class="form-control required"
                                required="">

                        </div>
                        <div class="col-md-6">
                            <label for="subject-field" class="pb-2"><strong>Job Title</strong></label>
                            <input type="text" class="form-control required" name="job" id="job"
                                required="">
                        </div>

                        <div class="col-md-6">
                            <label for="subject-field" class="pb-2"><strong>How did you hear about Binary
                                    Brix?</strong></label>
                            <select class="form-control required" name="hear_about_us" id="hear_about_us"
                                required="">
                                <option value="" disabled selected><strong>Choose an option</strong></option>
                                <option value="bank">Bank</option>
                                <option value="network">Network</option>
                                <option value="partner-company">Partner Company</option>
                                <option value="conference-tradeshow">Conference/Tradeshow</option>
                                <option value="email-received">Email Received</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2"><strong>Additional Information you would like us
                                    to know</strong></label>
                            <textarea class="form-control required" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            {{-- <div class="error-message"></div> --}}
                            <div class="sent-message">Your Message has been sent successfully</div>

                            <button type="submit">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>

    </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(e) {
            e.preventDefault();

            var form = $(this);
            var loadingElement = $('.loading');
            loadingElement.addClass('d-block');

            var recaptchaResponse = grecaptcha.getResponse();
            var formData = form.serialize() + '&recaptcha=' + recaptchaResponse;

            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: formData,
                success: function(response) {
                    loadingElement.removeClass('d-block');

                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                            timer: 2000,
                            showConfirmButton: false
                        }).then(function() {
                            window.location
                        .reload(); // Reload the page after the alert
                        });
                    } else if (response.errors) {
                        let errorMessages = '';
                        $.each(response.errors, function(field, messages) {
                            errorMessages += messages.join('<br>') + '<br>';
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            html: errorMessages,
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: response.message,
                        });
                    }
                },
                error: function(xhr) {
                    loadingElement.removeClass('d-block');

                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        let errorMessages = '';

                        $.each(errors, function(field, messages) {
                            errorMessages += messages.join('<br>') + '<br>';
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            html: errorMessages,
                        });
                    } else {

                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred. Please try again later.',
                        });
                    }
                }
            });
        });
    });
</script>


<script>
    function validateNumber(input) {
        const value = input.value;
        const validValue = value.replace(/[^0-9]/g, '');
        if (value !== validValue) {
            input.value = validValue;
        }
    }
</script>
