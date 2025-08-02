@extends('layouts.frontend')
@section('title', 'About Us ')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-10 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 class="m-0">About Us</h1>
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about about-main">
    <div class="container">

      <div class="row content align-items-center">
        <div class="col-lg-6 pt-4 pt-lg-0">
          <img src="{{ asset('public/frontend/assets/img/about-1.png') }}" alt="">
        </div>
        <div class="col-lg-6">
          <div class="box mt-2 mb-3 mt-md-5">
            <h3>About us</h3>
            <h4>Helping Individuals and Businesses through the power of Financial Literacy!</h4>
            <p>COOP Services is financial, education and insurance services provided by The Cooperatives Trust.</p>

            <p>We believe that everyone deserves a chance to understand and improve their financial health while unlocking their full potential through continuous learning. We are dedicated to providing user-friendly, reliable, and comprehensive services that enable individuals to take control of their financial future.</p>
            <p>We are passionate about empowering individuals to take control of their financial future and personal growth. Our platform offers a comprehensive range of services, including credit reports, loan insurance, and online education, designed to equip you with the knowledge and protection you need to thrive in today's dynamic world. </p>
          </div>

        </div>

      </div>

    </div>
  </section><!-- End About Section -->



  <secction class="about-text">
    <div class="container">
      <div class="text-box">
        <h3>Our Mission
        </h3>
        <h4>
          Empower, Protect, Educate
        </h4>
        <p>
          Our mission is to provide accessible and innovative financial and
          educational solutions that enable individuals to make informed
          decisions, protect their financial interests, and unlock their
          full potential through continuous learning.
        </p>
      </div>
      <div class="text-box">
        <h3>
          Our Vision
        </h3>
        <h4>
          A Future of Financial Stability and Lifelong Learning
        </h4>
        <p>
          We envision a future where every individual has access to the
          resources and opportunities needed to achieve financial stability
          and success. Through our services, we aim to become a trusted
          partner in our clients' financial journeys, guiding them towards a
          brighter and more secure tomorrow. We also see a world where
          learning knows no bounds, where individuals can continuously
          improve themselves and thrive in both their personal and
          professional lives.
        </p>
      </div>
      <div class="text-box">
        <h3>Our Purpose
        </h3>
        <h4>
          Your Partner in Financial Well-Being
        </h4>
        <p>
          Our purpose is deeply rooted in the belief that knowledge,
          security, and growth are the cornerstones of a fulfilling life. We
          are committed to:
        </p>
        <div class="sub-text">
          <h4>Empowering Financial Literacy</h4>
          <p>
            We believe that financial literacy is a fundamental skill for
            achieving financial well-being. Through our credit report
            service, we provide individuals with insights into their credit
            health, helping them make informed financial decisions.
          </p>
        </div>
        <div class="sub-text">
          <h4>Ensuring Financial Security</h4>
          <p>
            Life is unpredictable, but financial security doesn't have to
            be. Our loan insurance service offers protection and peace of
            mind, ensuring that individuals and their loved ones are covered
            during challenging times.
          </p>
        </div>
        <div class="sub-text">
          <h4>Promoting Lifelong Learning</h4>
          <p>
            Learning is a continuous journey, and we are dedicated to
            providing a diverse range of online educational courses. Our
            platform aims to inspire and facilitate self-improvement,
            personal growth, and career advancement.
          </p>
        </div>
        <h6 class="mt-5">

        </h6>
      </div>
    </div>
  </secction>

  <section class="mb-xl-5 mb-5 mx-2 mx-lg-0">
    <div class="container bgBlue p-xl-5 px-5 py-5 py-md-5 readyToFallBg bg-norepeat">
      <div class="row mx-xl-5">
        <div class="col-xl-12 col-md-12">
          <h4 class="text-white ">
            We are driven by the values of integrity, innovation, and
            customer-centricity. We continuously strive to exceed
            expectations, offer exceptional service, and create a positive
            impact on the lives of our users. Join us on this journey of
            financial empowerment and lifelong learning, and let us help you
            build a brighter and more secure future.
          </h4>

        </div>

      </div>
    </div>
  </section>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services mt-4">
    <div class="container">

      <div class="section-title">
        <h2>Our Services</h2>

      </div>

      <div class="row">
        <!-- <div class="content col-xl-5 d-flex flex-column justify-content-center">
            <img src="assets/img/services.png" class="img-fluid" alt="">
          </div> -->
        <div class="col-xl-12">
          <div class="line-box d-flex flex-column justify-content-center ">
            <div class="row">
              <div class="col-lg-4 d-flex " data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box iconbox-blue">
                  <!-- <div class="img">
                      <img src="./assets/img/services-5.png" alt="">
                    </div> -->
                  <div class="icon">
                    <i class='bx bxs-report'></i>
                  </div>
                  <div class="text">
                    <h4><a href="">Credit Reporting</a></h4>
                    <p>We offer credit reports that provide a detailed summary of an individual's
                      credit history, including payment patterns, credit utilization, and public records such as
                      bankruptcies or liens. These scores help lenders assess the creditworthiness of individuals and
                      determine their likelihood of repaying debts. </p>
                  </div>
                  <a href="">
                    <button>Learn More</button>
                  </a>
                </div>
              </div>



              <div class="col-lg-4 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box ">
                  <div class="icon">
                    <i class='bx bx-plus-medical'></i>
                  </div>
                  <div class="text">

                    <h4><a href="">Coop Insurance</a></h4>
                    <p>We actively work to detect and prevent fraudulent activities related to
                      credit. Through advanced monitoring systems and data analysis, we help identify suspicious
                      patterns and alert cooperatives and individuals to potential fraud risks.
                    </p>
                    <br>
                  </div>
                  <a href="">
                    <button>Learn More</button>
                  </a>
                </div>
              </div>

              <div class="col-lg-4 d-flex align-items-stretch " data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box ">
                  <div class="icon">
                    <i class='bx bxs-graduation'></i>
                  </div>
                  <div class="text">

                    <h4><a href="">Coop Education</a></h4>
                    <p>We actively work to detect and prevent fraudulent activities related to
                      credit. Through advanced monitoring systems and data analysis, we help identify suspicious
                      patterns and alert cooperatives and individuals to potential fraud risks.

                    </p>
                    <br>
                  </div>
                  <a href="">
                    <button>Learn More</button>
                  </a>
                </div>
              </div>



            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
        <p class="d-inline-block border rounded text-primary fw-semi-bold py-1 px-3">
          Our Team
        </p>
        <h1 class="display-5 mb-5">Exclusive Team</h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <img class="img-fluid rounded" src="assets/img/team-1.jpg" alt="" />
            <div class="team-text">
              <h4 class="mb-0">Raghuram Yendakurthi</h4>
              <h6 class="mt-3">Chairman</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <img class="img-fluid rounded" src="assets/img/team-1.jpg" alt="" />
            <div class="team-text">
              <h4 class="mb-0">Brahmaji Y</h4>
              <h6 class="mt-3">Vice Chairman</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <img class="img-fluid rounded" src="assets/img/team-1.jpg" alt="" />
            <div class="team-text">
              <h4 class="mb-0">Naveen Nekkanti</h4>
              <h6 class="mt-3">Finance Lead</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <img class="img-fluid rounded" src="assets/img/team-1.jpg" alt="" />
            <div class="team-text">
              <h4 class="mb-0">Basavaraj Hiremath</h4>
              <h6 class="mt-3">Project Manager</h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <img class="img-fluid rounded" src="assets/img/team-1.jpg" alt="" />
            <div class="team-text">
              <h4 class="mb-0">Rohit Kumar</h4>
              <h6 class="mt-3">Tech Team </h6>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item">
            <img class="img-fluid rounded" src="assets/img/team-1.jpg" alt="" />
            <div class="team-text">
              <h4 class="mb-0">Ramesh Chilukuri</h4>
              <h6 class="mt-3">Legal Advisor </h6>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="texts mt-4 mb-5 container text-center">
    <small class="text-underline text-bold">REGISTERED ADDRESS
      </small>
      <br>
      <small>
        Coop Services (Formerly Managed By Maitri India Corporation) with a GST No.29BFROPR5804K1ZQ.
        Registered office: 12/15, Near Renuka Temple, Ward No.05, Vaddarahatti Camp, Gangavathi, Koppal, KARNATAKA-583227 www.coopindia.org
      </small>
  </div>
</main><!-- End #main -->

@endsection