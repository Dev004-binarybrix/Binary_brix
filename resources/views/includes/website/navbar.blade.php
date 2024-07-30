
<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a
              href="mailto:info@binarybrix.com">info@binarybrix.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+92-4235-963-555</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">

          <a href="https://www.facebook.com/binarybrix" target="_blank" class="facebook"><i
              class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/binarybrix/" target="blank" class="instagram"><i
              class="bi bi-instagram"></i></a>
          <a href="https://www.linkedin.com/company/binarybrix/mycompany/" target="blank" class="linkedin"><i
              class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
          <img src="./assets/img/brixLogo.png">
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ url('/') }}" class="active">Home</a></li>
            <li class="dropdown"><a href="{{ url('/services') }}"><span>Services</span> <i
                  class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('custom-software') }}">Custom Software Development</a></li>
                    <li><a href="{{ route('web-application') }}">Web Application Development</a></li>
                    <li><a href="{{ route('mobile-application') }}">Mobile Application Development</a></li>
                    <li><a href="{{ route('high-tech-game') }}">High-Tech Game Development</a></li>
                    <li><a href="{{ route('cloud-based') }}">Cloud-Based Development</a></li>
                    <li><a href="{{ route('dev-ops') }}">DevOps Development</a></li>
                    <li><a href="{{ route('e-commerce') }}">E-commerce Development</a></li>
                    <li><a href="{{ route('ui-ux-design') }}">UI/UX Design and Development</a></li>
                    <li><a href="{{ route('iot-development') }}">IoT Development</a></li>
                    <li><a href="{{ route('expert-qa-testing') }}">Expert QA Testing</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/') }}#portfolio">Portfolio</a></li>
            <li><a href="{{ url('/') }}#contact">Contact</a></li>
            <li><a href="{{ url('/') }}#about">About</a></li>

            <li><a href="#team">Team</a></li>


          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
