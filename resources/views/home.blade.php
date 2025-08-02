@extends('layouts.frontend')
@section('title', 'About Us ')
@section('content')

<style>
  #hero {
  min-height: 60vh; /* Or reduce it further to something like 50vh */
  padding-top: 40px;
  padding-bottom: 40px;
}
.hero-img img {
  max-height: 300px; /* or any smaller value */
  width: auto;
}

  </style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>Let’s Build a Better Cooperative System!</h1>
        <p class="mt-4 mb-4">
          Join hands to build a transparent<br>
cooperative members credit reporting </p>
         <div class="mt-3">
          <!-- <a href="{{ url('/signup') }}" class="btn-get-started scrollto">Sign Up</a> -->
          <a href="" class="btn-get-quote">Get Started</a> 
        </div> 
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img">
        <img src="{{ asset('public/frontend/assets/img/hero.png') }}" class="img-fluid" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->



<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">
    <div class="row content">
      <div class="col-lg-6">
        <h2>Know Exactly How Verifive Cooperative Credit Report Works</h2>
        <p>| Credit Utilization</p>
        <p>| Missed Payments</p>
        <p>| Errors & Fake Loans</p>
        <p>| Legal Actions</p>
        <p>| Guarantor Loans</p>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <img src="{{ asset('public/frontend/assets/img/about-1.png') }}" alt="" />
      </div>
    </div>
  </div>
</section>
 <section class="about-more">
  <div class="container">
    <h3 class="title">
      WHY CHOOSE COOP ?
    </h3>
    <div class="about-grid">
      <div class="row">
        <div class="col-lg-6">
          <img src="
                {{ asset('public/frontend/assets/img/f3.png') }} " alt="" />
        </div>
        <div class="col-lg-6">
          <div class="content">
            <h3>Comprehensive Approach</h3>
            <p>
              We take a comprehensive approach to empower individuals and organizations in their financial journey. We understand that financial well-being is not achieved through a single solution, but rather through a combination of services that cater to various aspects of your financial life. Our mission is to provide a seamless and integrated platform that offers Cooperative Customer Credit Report, Loan Insurance, and Online Education services, all designed to equip you with the knowledge and tools you need to thrive.
            </p>
          </div>
        </div>
      </div>
      <div class="row revrse">
        <div class="col-lg-6">
          <div class="content">
            <h3>Transparent and Honest </h3>
            <p>
              We believe in transparency in everything we do. Our credit report service provides a comprehensive overview of your credit history, empowering you to understand your financial standing. With our educational resources, we help you to enhancing your financial literacy, knowledge and skills. With our loan insurance services, we offer clear coverage options, so you know precisely what you are protected against.
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="
                {{ asset('public/frontend/assets/img/f2.png') }} " alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <img src="
                {{ asset('public/frontend/assets/img/f1.png') }} " alt="" />
        </div>
        <div class="col-lg-6">
          <div class="content">
            <h3>Data Privacy and Protection</h3>
            <p>
              We prioritize the security and privacy of your personal information. Our encryption technologies ensure that your data is safeguarded from unauthorized access and identity theft. You can trust us to handle your sensitive information with the utmost care and confidentiality.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">
    <div class="row content">
      <div class="col-lg-12">        
        <h2 class="text-center">Helping Cooperative Societies Improve Credit Utilization</h2> 
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card custom-card">
          <div class="card-body">
            <div class="stat-number orange">6,000 +</div>
            <div class="stat-label">Souharda Cooperatives</div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card custom-card">
          <div class="card-body">
            <div class="stat-number blue">₹ 34,000 Cr +</div>
            <div class="stat-label">Loans & Advances</div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card custom-card">
          <div class="card-body">
            <div class="stat-number green">72 Lakh +</div>
            <div class="stat-label">Souharda Members</div>
          </div>
        </div>
      </div>
    </div>

    <div class="row content">
      <div class="col-lg-12">        
        <h2 class="text-center">100% secure and reliable</h2> 
      </div>
    </div>


    
  </div>
</section>
<!-- End Services Section -->



<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">
    <div class="section-title ">
      <h2 class="">Our Services</h2>
    </div>

    <div class="service-grid home-grid">
      <div class="row   revrse">

        <div class="col-lg-6">
          <div class="content">
            <h3>
              Credit Report
            </h3>
            <h4> Know Your Financial Health </h4>
            <p>
              Credit report is a powerful tool that provides insights into your financial health. With our credit report service, you can access your detailed credit report in just a few clicks. Gain valuable insights into your credit history, including credit accounts, payment history, inquiries, and public records.
            </p>
            <p>Understanding your creditworthiness is essential for securing loans, and other financial opportunities. </p>
            <p>Get instant access to your credit report and take control of your financial journey today!</p>
            <a href="{{ url('/customer/credit-report') }}" class="btn">Check Your Credit Report</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="
                {{ asset('public/frontend/assets/img/1.png') }} " alt="" />
        </div>
      </div>
      <div class="row ">
        <div class="col-lg-6">
          <img src="
                {{ asset('public/frontend/assets/img/2.png') }} " alt="" />
        </div>
        <div class="col-lg-6">
          <div class="content">
            <h3>Loan Insurance
            </h3>
            <h4>
              Safeguard Your Loan Future
            </h4>
            <p>
              Our Loan Insurance service provides comprehensive coverage for various loans, including mortgages, personal loans, and business loans. Safeguard against critical illness, disability, unemployment, and unfortunate loss of life. With Loan Insurance, you can have peace of mind, knowing that you're protected during challenging times.
            </p>
            <a href="{{ url('/insurance') }}" class="btn">Apply Now</a>
          </div>
        </div>

      </div>
      <div class="row revrse">
        <div class="col-lg-6">
          <div class="content">
            <h3>Online Education
            </h3>
            <h4>
              Unlock Your Potential
            </h4>
            <p>
              Our Online Education platform offers a wide range of courses to cater your learning needs. Whether you want to acquire new skills, explore new interests, or enhance your academic knowledge, we have courses that align with your goals. Study at your own pace, access interactive learning tools, and stay ahead in today's fast-paced world.
            </p>
            <a href="{{ url('/education') }}" class="btn">Join Now</a>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="
                {{ asset('public/frontend/assets/img/3.png') }} " alt="" />
        </div>

      </div>
    </div>
  </div>
</section>
<!-- End Services Section -->


<section class="courses">
  <div class="container">
    <div class="section-title">
      <h2>Checkout Our Courses</h2>
    </div>
    <div class="course courseSlider">
      @if(isset($courselist))
      @foreach($courselist as $list)
      <div class="p-2">
        <div class="card">
          <img src="{{ asset('public/uploads/pdf/') }}/{{ $list->pdf }}" alt="">
          <a href="{{ url('/customer/course/view') }}/{{ $list->id  }}" title="Click to access the course">
            <span class="">
              <span class="title">{{ $list->title }}</span>
            </span>
          </a>
            <div class="info">
              <div class="disc">
                <!-- {!! $list->description !!} -->
                {!! Str::limit($list->description, 60) !!}
              </div>
              <a href="{{ url('/customer/course/view') }}/{{ $list->id  }}" class="see-detail">Course Details</a>
            </div>

        </div>
      </div>
      @endforeach
      @endif

      {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="card">
          <a href="#" title="Click to access the course">
            <span class="cover">
              <span class="title">Programming basic CNC milling ISO / DIN language</span>
              <span class="img" style="background-image: url('http://study.com/cimages/course-image/praxis-ii-business-education-test_118084_large.jpg');"></span>
            </span>
            <div class="info">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus quidem voluptatibus, cum
                aut repudiandae repellendus impedit molestiae unde consequatur explicabo quia reiciendis corrupti.
                Alias perferendis exercitationem asperiores fuga perspiciatis!</p>
              <a class="see-detail">Course Details</a>
            </div>
          </a>

        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
        <div class="card">
          <a href="#" title="Click to access the course">
            <span class="cover">
              <span class="title">Programming basic CNC milling ISO / DIN language</span>
              <span class="img" style="background-image: url('http://study.com/cimages/course-image/praxis-ii-business-education-test_118084_large.jpg');"></span>
            </span>
            <div class="info">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus quidem voluptatibus, cum
                aut repudiandae repellendus impedit molestiae unde consequatur explicabo quia reiciendis corrupti.
                Alias perferendis exercitationem asperiores fuga perspiciatis!</p>
              <a class="see-detail">Course Details</a>
            </div>
          </a>

        </div>
      </div> --}}


    </div>

  </div>
</section>


<section class="testimonial-section">
  <div class="testimonial">

    <h2>Our Testimonial</h2>
    <div class="box">
      <div class="testimonial__inner">
        <div class="testimonial-slider">
          <div class="testimonial-slide">
            <div class="testimonial_box">
              <div class="testimonial_box-inner">
                <div class="testimonial_box-top">
                  <div class="testimonial_box-icon">
                    <i class='bx bxs-quote-right'></i>
                  </div>
                  <div class="testimonial_box-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                      optio facilis beatae.</p>
                    <div class="rating">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                    </div>
                  </div>
                  <div class="testimonial_box-shape"></div>
                </div>
                <div class="testimonial_box-bottom">
                  <div class="testimonial_box-profile">
                    <div class="testimonial_box-img">
                      <img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="profile">
                    </div>
                    <div class="testimonial_box-info">
                      <div class="testimonial_box-name">
                        <h4>John Doe</h4>
                      </div>
                      <div class="testimonial_box-job">
                        <p>MANAGER</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide">
            <div class="testimonial_box">
              <div class="testimonial_box-inner">
                <div class="testimonial_box-top">
                  <div class="testimonial_box-icon">
                    <i class='bx bxs-quote-right'></i>
                  </div>
                  <div class="testimonial_box-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                      optio facilis beatae.</p>
                    <div class="rating">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                    </div>
                  </div>
                  <div class="testimonial_box-shape"></div>
                </div>
                <div class="testimonial_box-bottom">
                  <div class="testimonial_box-profile">
                    <div class="testimonial_box-img">
                      <img src="https://i.ibb.co/JQ18QKW/asd.jpg" alt="profile">
                    </div>
                    <div class="testimonial_box-info">
                      <div class="testimonial_box-name">
                        <h4>John Doe</h4>
                      </div>
                      <div class="testimonial_box-job">
                        <p>CEO</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide">
            <div class="testimonial_box">
              <div class="testimonial_box-inner">
                <div class="testimonial_box-top">
                  <div class="testimonial_box-icon">
                    <i class='bx bxs-quote-right'></i>
                  </div>
                  <div class="testimonial_box-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                      optio facilis beatae.</p>
                    <div class="rating">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                    </div>
                  </div>
                  <div class="testimonial_box-shape"></div>
                </div>
                <div class="testimonial_box-bottom">
                  <div class="testimonial_box-profile">
                    <div class="testimonial_box-img">
                      <img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="profile">
                    </div>
                    <div class="testimonial_box-info">
                      <div class="testimonial_box-name">
                        <h4>John Doe</h4>
                      </div>
                      <div class="testimonial_box-job">
                        <p>MANAGER</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide">
            <div class="testimonial_box">
              <div class="testimonial_box-inner">
                <div class="testimonial_box-top">
                  <div class="testimonial_box-icon">
                    <i class='bx bxs-quote-right'></i>
                  </div>
                  <div class="testimonial_box-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                      optio facilis beatae.</p>
                    <div class="rating">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                    </div>
                  </div>
                  <div class="testimonial_box-shape"></div>
                </div>
                <div class="testimonial_box-bottom">
                  <div class="testimonial_box-profile">
                    <div class="testimonial_box-img">
                      <img src="https://i.ibb.co/JQ18QKW/asd.jpg" alt="profile">
                    </div>
                    <div class="testimonial_box-info">
                      <div class="testimonial_box-name">
                        <h4>John Doe</h4>
                      </div>
                      <div class="testimonial_box-job">
                        <p>CEO</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="testimonial-slide">
            <div class="testimonial_box">
              <div class="testimonial_box-inner">
                <div class="testimonial_box-top">
                  <div class="testimonial_box-icon">
                    <i class='bx bxs-quote-right'></i>
                  </div>
                  <div class="testimonial_box-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus
                      optio facilis beatae.</p>
                    <div class="rating">
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                      <i class='bx bxs-star'></i>
                    </div>
                  </div>
                  <div class="testimonial_box-shape"></div>
                </div>
                <div class="testimonial_box-bottom">
                  <div class="testimonial_box-profile">
                    <div class="testimonial_box-img">
                      <img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="profile">
                    </div>
                    <div class="testimonial_box-info">
                      <div class="testimonial_box-name">
                        <h4>John Doe</h4>
                      </div>
                      <div class="testimonial_box-job">
                        <p>MANAGER</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>


<style>
  .banner-container {
      background-color: #fff;
      color: #000;
      border-radius: 12px;
      padding: 10px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      margin: 0px auto;
      max-width: 900px;
    }
    .left-section h3 {
      font-size: 1.8rem;
      font-weight: 600;
    }
    .left-section p {
      font-size: 1.2rem;
    }
    .badge-box {
      background-color: #0c2d4a;
      color: #fff;
      padding: 10px 20px;
      border-radius: 20px;
      font-size: 0.9rem;
      display: inline-block;
      margin-bottom: 20px;
    }
    .search-image {
      max-width: 100%;
      height: auto;
    }
    .download-btn {
      margin-top: 30px;
      background-color: #0c2d4a;
      color: #fff;
      padding: 12px 25px;
      border: none;
      border-radius: 5px;
      font-weight: bold;
    }
  </style>

<section class="courses">
  <div class="container">
    <div class="banner-container row align-items-center">
      <div class="col-md-6 left-section">
        <div class="badge-box mb-3">
          ✅ 100% Secured &amp; Most Reliable Website
        </div>
        <h3>Manage Loan Approvals With Simple Clicks!</h3>
        <p>Credit Reports &amp; Loan Approvals</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{ asset('public/frontend/assets/img/verifivecomputer.png') }}" alt="Laptop with Verifiv" class="search-image" />
      </div>
      <div class="col-md-12 text-center">
        <button class="download-btn">Download Report Now</button>
      </div>
    </div>

  </div>
</section>





<script>
</script>

@endsection