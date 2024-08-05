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
                <p>(042)-35963555</p>
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
          <form id="contactForm" action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up"
            data-aos-delay="200">
            @csrf
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name:</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email:</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Additional Information you would like us to know</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                {{-- <div class="error-message"></div> --}}
                <div class="sent-message">Your Message has been sent successfully</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div>

      </div>

    </div>

  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $('#contactForm').submit(function(e) {
    e.preventDefault();


    var form = $(this);
    var loadingElement = $('.loading');
    var errorMessageElement = $('.error-message');
    var sentMessageElement = $('.sent-message');

    loadingElement.show();
    errorMessageElement.hide();
    sentMessageElement.hide();

    $.ajax({
      type: form.attr('method'),
      url: form.attr('action'),
      data: form.serialize(),
      success: function(response) {

        $('.loading').removeClass('d-block');

        if (response.success) {
          sentMessageElement.text(response.message).show();

          setTimeout(function() {
            sentMessageElement.fadeOut();
          }, 2000);

          form[0].reset();
        } else {
          loadingElement.hide();
          errorMessageElement.text(response.message);
          errorMessageElement.show();
        }
      },
      error: function() {

        $('.loading').removeClass('d-block');

        errorMessageElement.text('An error occurred. Please try again later.').show();

      }
    });

  });
});
</script>
