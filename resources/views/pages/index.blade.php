<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Scholar - Online School HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">






    <!-- Additional CSS Files -->
   <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/templatemo-scholar.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <!-- Header -->
<header class="header-area header-sticky bg-dark bg-opacity-75 fixed-top shadow-sm">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark">
          
          <!-- Logo -->
          <a class="navbar-brand fw-bold fs-3 text-warning" href="index.html">
            <img src="assets/images/logo.png" alt="iWaiter Logo" style="height: 90px; width: auto;">
          </a>

          <!-- Mobile Toggle -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Menu -->
          <div class="collapse navbar-collapse justify-content-end" id="navMenu">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="Features.html">Features</a></li>
              <li class="nav-item"><a class="nav-link" href="Services.html">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="Testimonials.html">Testimonials</a></li>
              <li class="nav-item"><a class="nav-link" href="Contact.html">Contact Us</a></li>
            </ul>
          </div>

        </nav>
      </div>
    </div>
  </div>
</header>

<!-- Add some CSS -->
<style>
.header-area .nav-link {
  font-weight: 500;
  transition: color 0.3s ease;
}
.header-area .nav-link:hover,
.header-area .nav-link.active {
  color: #ffc107 !important; /* Bootstrap warning color */
}
.hero-banner {
  padding-top: 80px; /* To prevent navbar overlap */
}
</style>


<section class="hero-banner position-relative d-flex align-items-center text-center text-white" style="height: 100vh; overflow: hidden;">

  <!-- Background Video -->
  <video autoplay muted loop playsinline class="position-absolute w-100 h-100 object-fit-cover" style="z-index:-1; object-fit:cover;">
    <source src="your-video.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <!-- Overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.55); z-index:-1;"></div>

  <!-- Content -->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <!-- Small tagline -->
        <span class="badge bg-light text-dark mb-3 px-3 py-2 fs-6 shadow-sm rounded-pill animate__animated animate__fadeInDown">🚀 Smarter Dining Starts Here</span>

        <!-- Main Title -->
        <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInUp">
          With <span class="text-warning">IWaiter</span>, Dining Is Effortless
        </h1>

        <!-- Subtitle -->
        <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">
          Say goodbye to traditional waiters – order faster, easier, and smarter with our iPad-powered service.
        </p>

        <!-- Buttons -->
        <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeInUp animate__delay-2s">
          <a href="#features" class="btn btn-warning btn-lg px-4 rounded-pill shadow">Explore Features</a>
          <a href="#demo" class="btn btn-outline-light btn-lg px-4 rounded-pill shadow"><i class="fa fa-play me-2"></i> Watch Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Extra Styling -->
<style>
.hero-banner h1 span {
  text-shadow: 2px 2px 10px rgba(0,0,0,0.6);
}
.hero-banner p {
  text-shadow: 1px 1px 8px rgba(0,0,0,0.5);
}
.object-fit-cover {
  object-fit: cover;
}
</style>

<!-- Animate.css for smooth entrance effects -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>



  <!-- ***** Main Banner Area End ***** -->


<!-- Ultimate How It Works Section -->
<section class="how-it-works py-5 position-relative">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">Get Started in 3 Easy Steps</h2>
      <p class="text-muted">Manage your restaurant efficiently with our Smart iPad system—fast, easy, and professional.</p>
    </div>

    <!-- Timeline / Steps -->
    <div class="timeline d-flex justify-content-between align-items-start position-relative">
      <!-- Line -->
      <div class="timeline-line position-absolute top-50 start-0 w-100 translate-middle-y"></div>

      <!-- Step 1 -->
      <div class="timeline-step text-center">
        <div class="step-circle bg-primary text-white mx-auto mb-3">
          <i class="bi bi-person-plus-fill"></i>
        </div>
        <div class="step-card p-4 bg-white shadow-lg rounded">
          <h5 class="fw-bold mb-2">Sign Up & Setup</h5>
          <p>Create your account, configure settings, and set up your restaurant in minutes.</p>
          <img src="images/ipad-setup.png" alt="iPad Setup" class="step-ipad mt-3">
        </div>
      </div>

      <!-- Step 2 -->
      <div class="timeline-step text-center">
        <div class="step-circle bg-success text-white mx-auto mb-3">
          <i class="bi bi-layout-text-sidebar-reverse"></i>
        </div>
        <div class="step-card p-4 bg-white shadow-lg rounded">
          <h5 class="fw-bold mb-2">Manage Your Restaurant</h5>
          <p>Handle orders, inventory, staff schedules, and menus efficiently from one dashboard.</p>
          <img src="images/ipad-manage.png" alt="iPad Manage" class="step-ipad mt-3">
        </div>
      </div>

      <!-- Step 3 -->
      <div class="timeline-step text-center">
        <div class="step-circle bg-warning text-dark mx-auto mb-3">
          <i class="bi bi-graph-up"></i>
        </div>
        <div class="step-card p-4 bg-white shadow-lg rounded">
          <h5 class="fw-bold mb-2">Grow & Optimize</h5>
          <p>Analyze reports, optimize operations, increase efficiency, and delight your customers.</p>
          <img src="images/ipad-optimize.png" alt="iPad Optimize" class="step-ipad mt-3">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS -->
<style>
.how-it-works {
  background: linear-gradient(135deg, #f0f4f8 0%, #ffffff 100%);
  position: relative;
}

.timeline {
  position: relative;
  gap: 2rem;
}

.timeline-line {
  height: 4px;
  background-color: #ddd;
  top: 50%;
  left: 0;
  z-index: 1;
}

.timeline-step {
  width: 30%;
  position: relative;
  z-index: 2;
}

.step-circle {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.8rem;
  margin: 0 auto;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}

.timeline-step:hover .step-circle {
  transform: scale(1.2);
}

.step-card {
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  padding: 1.5rem;
  transition: transform 0.4s, box-shadow 0.4s;
  overflow: hidden;
}

.step-card:hover {
  transform: translateY(-15px);
  box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}

.step-ipad {
  width: 100%;
  max-width: 180px;
  margin-top: 1rem;
  border-radius: 15px;
  transition: transform 0.3s, box-shadow 0.3s;
}

.step-card:hover .step-ipad {
  transform: scale(1.05);
  box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

/* Responsive */
@media (max-width: 991px) {
  .timeline {
    flex-direction: column;
    align-items: center;
  }
  .timeline-step {
    width: 80%;
    margin-bottom: 3rem;
  }
  .timeline-line {
    top: 0;
    left: 50%;
    width: 4px;
    height: 100%;
    transform: translateX(-50%);
  }
}
</style>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">






<section class="py-5 bg-dark text-white">
  <div class="container">
    
    <!-- Section Heading -->
    <div class="row mb-4">
      <div class="col text-center">
        <h6 class="text-warning">Our Courses</h6>
        <h2 class="fw-bold">Latest Courses</h2>
      </div>
    </div>

    <!-- Filter Menu -->
    <div class="row mb-5">
      <div class="col text-center">
        <ul class="nav justify-content-center gap-3">
          <li class="nav-item">
            <a class="btn btn-warning btn-sm active" href="#!" data-filter="*">Show All</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-warning btn-sm" href="#!" data-filter=".design">Webdesign</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-warning btn-sm" href="#!" data-filter=".development">Development</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-warning btn-sm" href="#!" data-filter=".wordpress">Wordpress</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Courses Grid -->
    <div class="row g-4">
      <!-- Course Card -->
      <div class="col-lg-4 col-md-6 design">
        <div class="card h-100 shadow bg-dark border-0">
          <img src="assets/images/course-01.jpg" class="card-img-top" alt="Course">
          <div class="card-body">
            <span class="badge bg-warning text-dark">Webdesign</span>
            <h5 class="card-title mt-3 text-white">Learn Web Design</h5>
            <p class="text-muted mb-1">by Stella Blair</p>
            <p class="fw-bold text-warning">$160</p>
          </div>
        </div>
      </div>

      <!-- Repeat for other courses -->
      <div class="col-lg-4 col-md-6 development">
        <div class="card h-100 shadow bg-dark border-0">
          <img src="assets/images/course-02.jpg" class="card-img-top" alt="Course">
          <div class="card-body">
            <span class="badge bg-warning text-dark">Development</span>
            <h5 class="card-title mt-3 text-white">Web Development Tips</h5>
            <p class="text-muted mb-1">by Cindy Walker</p>
            <p class="fw-bold text-warning">$340</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 wordpress">
        <div class="card h-100 shadow bg-dark border-0">
          <img src="assets/images/course-03.jpg" class="card-img-top" alt="Course">
          <div class="card-body">
            <span class="badge bg-warning text-dark">WordPress</span>
            <h5 class="card-title mt-3 text-white">Latest Web Trends</h5>
            <p class="text-muted mb-1">by David Hutson</p>
            <p class="fw-bold text-warning">$640</p>
          </div>
        </div>
      </div>

      <!-- add other 3 courses here (same pattern) -->

    </div>
  </div>
</section>


<section class="py-5 bg-dark text-white">
  <div class="container">
    <div class="row text-center g-4">
      
      <!-- Happy Students -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-dark border rounded shadow">
          <h2 class="text-warning fw-bold timer" data-to="150" data-speed="1000">150</h2>
          <p class="mb-0 text-white-50">Happy Students</p>
        </div>
      </div>

      <!-- Course Hours -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-dark border rounded shadow">
          <h2 class="text-warning fw-bold timer" data-to="804" data-speed="1000">804</h2>
          <p class="mb-0 text-white-50">Course Hours</p>
        </div>
      </div>

      <!-- Employed Students -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-dark border rounded shadow">
          <h2 class="text-warning fw-bold timer" data-to="50" data-speed="1000">50</h2>
          <p class="mb-0 text-white-50">Employed Students</p>
        </div>
      </div>

      <!-- Years Experience -->
      <div class="col-lg-3 col-md-6">
        <div class="p-4 bg-dark border rounded shadow">
          <h2 class="text-warning fw-bold timer" data-to="15" data-speed="1000">15</h2>
          <p class="mb-0 text-white-50">Years Experience</p>
        </div>
      </div>

    </div>
  </div>
</section>


<div class="team section bg-dark py-5" id="team">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="card bg-secondary text-center border-0 h-100">
          <img src="assets/images/member-01.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <span class="text-warning fw-bold">UX Teacher</span>
            <h4 class="text-white mt-2">Sophia Rose</h4>
            <ul class="list-inline mt-2">
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card bg-secondary text-center border-0 h-100">
          <img src="assets/images/member-02.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <span class="text-warning fw-bold">Graphic Teacher</span>
            <h4 class="text-white mt-2">Cindy Walker</h4>
            <ul class="list-inline mt-2">
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card bg-secondary text-center border-0 h-100">
          <img src="assets/images/member-03.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <span class="text-warning fw-bold">Full Stack Master</span>
            <h4 class="text-white mt-2">David Hutson</h4>
            <ul class="list-inline mt-2">
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card bg-secondary text-center border-0 h-100">
          <img src="assets/images/member-04.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <span class="text-warning fw-bold">Digital Animator</span>
            <h4 class="text-white mt-2">Stella Blair</h4>
            <ul class="list-inline mt-2">
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="text-warning fs-5"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<div class="section events bg-dark py-5" id="events">
  <div class="container">
    <!-- Section Header -->
    <div class="row ">
      <div class="col text-center">
        <div class="section-heading text-warning">
          <h6 class="fw-bold">Schedule</h6>
          <h2 class="text-white">Upcoming Events</h2>
          <p class="text-white">Join our carefully curated events designed to sharpen your skills and enhance your knowledge.</p>
        </div>
      </div>
    </div>
    <!-- Events Cards -->
    <div class="row g-4">
      <!-- Event 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card bg-secondary text-white h-100 border-warning shadow">
          <img src="assets/images/event-01.jpg" class="card-img-top rounded-top" alt="">
          <div class="card-body">
            <span class="text-warning fw-bold">Web Design</span>
            <h5 class="card-title text-white mt-2">UI Best Practices</h5>
            <ul class="list-unstyled mt-2 mb-3">
              <li><strong>Date:</strong> 16 Feb 2036</li>
              <li><strong>Duration:</strong> 22 Hours</li>
              <li><strong>Price:</strong> $120</li>
            </ul>
            <a href="#" class="btn btn-warning text-dark fw-bold">Join Now <i class="fa fa-angle-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <!-- Event 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card bg-secondary text-white h-100 border-warning shadow">
          <img src="assets/images/event-02.jpg" class="card-img-top rounded-top" alt="">
          <div class="card-body">
            <span class="text-warning fw-bold">Front End</span>
            <h5 class="card-title text-white mt-2">New Design Trend</h5>
            <ul class="list-unstyled mt-2 mb-3">
              <li><strong>Date:</strong> 24 Feb 2036</li>
              <li><strong>Duration:</strong> 30 Hours</li>
              <li><strong>Price:</strong> $320</li>
            </ul>
            <a href="#" class="btn btn-warning text-dark fw-bold">Join Now <i class="fa fa-angle-right ms-1"></i></a>
          </div>
        </div>
      </div>
      <!-- Event 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card bg-secondary text-white h-100 border-warning shadow">
          <img src="assets/images/event-03.jpg" class="card-img-top rounded-top" alt="">
          <div class="card-body">
            <span class="text-warning fw-bold">Full Stack</span>
            <h5 class="card-title text-white mt-2">Web Programming</h5>
            <ul class="list-unstyled mt-2 mb-3">
              <li><strong>Date:</strong> 12 Mar 2036</li>
              <li><strong>Duration:</strong> 48 Hours</li>
              <li><strong>Price:</strong> $440</li>
            </ul>
            <a href="#" class="btn btn-warning text-dark fw-bold">Join Now <i class="fa fa-angle-right ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<footer class="footer bg-dark text-white pt-5 pb-3 ">
  <div class="container">
    <div class="row gy-4">
      
      <!-- Brand / About -->
      <div class="col-lg-4 col-md-6 pb-5">
        <div class="footer-logo mb-3">
          <a href="index.html">
            <img src="assets/images/logo.png" alt="iWaiter Logo" style="height: 80px; width: auto;">
          </a>
        </div>
        <p>
          Smarter dining starts here. With iWaiter, customers enjoy faster, easier, and smarter ordering powered by iPad technology.
        </p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" class="text-white fs-5"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
          <a href="#" class="text-white fs-5"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-6">
        <h5 class="fw-bold mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.html" class="text-white-50 text-decoration-none">Home</a></li>
          <li><a href="about.html" class="text-white-50 text-decoration-none">About Us</a></li>
          <li><a href="features.html" class="text-white-50 text-decoration-none">Features</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Services</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Testimonials</a></li>
          <li><a href="#" class="text-white-50 text-decoration-none">Contact Us</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold mb-3">Contact</h5>
        <p class="mb-2"><i class="fa fa-map-marker-alt me-2 text-warning"></i> Dubai, UAE</p>
        <p class="mb-2"><i class="fa fa-envelope me-2 text-warning"></i> support@iwaiter.com</p>
        <p><i class="fa fa-phone me-2 text-warning"></i> +971 55 123 4567</p>
      </div>

      <!-- Newsletter -->
      <div class="col-lg-3 col-md-6">
        <h5 class="fw-bold mb-3">Stay Updated</h5>
        <p class="mb-3">Subscribe to get the latest updates & offers from iWaiter.</p>
        <form class="d-flex">
          <input type="email" class="form-control rounded-start-pill" placeholder="Your email">
          <button class="btn btn-warning rounded-end-pill px-3">Go</button>
        </form>
      </div>

    </div>

    <hr class="border-light mt-4">

    <!-- Bottom -->
    <div class="row">
      <div class="col text-center">
        <p class="mb-0 small text-white-50">© <span id="year"></span> iWaiter. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>

<!-- Auto Year Script -->
<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>


<!-- Auto Year Script -->
<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>


<!-- Bootstrap CSS + JS + Icons (include if not already in your project) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"> 





  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/js/counter.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


  </body>
</html>