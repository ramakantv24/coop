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
          Cooperative Members Credit Reporting </p>
        <!-- <div class="mt-3">
          <a href="{{ url('/signup') }}" class="btn-get-started scrollto">Sign Up</a>
          <a href="" class="btn-get-quote">Request a Quote</a> 
        </div> -->
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
<!-- <section class="about-more">
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
</section> -->
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

<style>
  .banner-container {
      background-color: #fff;
      color: #000;
      border-radius: 12px;
      padding: 40px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      margin: 50px auto;
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
        <img src="https://via.placeholder.com/300x200?text=www.verifiv" alt="Laptop with Verifiv" class="search-image" />
      </div>
      <div class="col-md-12 text-center">
        <button class="download-btn">Download Report Now</button>
      </div>
    </div>

  </div>
</section>


<section class="testimonial-section">
  <div class="testimonial">

    <h2>Our Testimonial</h2>
    <div class="box">
      <div class="testimonial__inner">
        <div class="testimonial-slider">

          @if(isset($testimonials))
          @foreach($testimonials as $testimonial) 
          <div class="testimonial-slide">
            <div class="testimonial_box">
              <div class="testimonial_box-inner">
                <div class="testimonial_box-top">
                  <div class="testimonial_box-icon">
                    <i class='bx bxs-quote-right'></i>
                  </div>
                  <div class="testimonial_box-text">
                    <p>{{ $testimonial->description }}</p>
                    <div class="rating">
                      @for($i = 0; $i < 5; $i++)
                        <i class='bx bxs-star'></i>
                      @endfor
                    </div>
                  </div>
                  <div class="testimonial_box-shape"></div>
                </div>
                <div class="testimonial_box-bottom">
                  <div class="testimonial_box-profile">
                    <div class="testimonial_box-img">
                      <img src="{{ asset('public/uploads/testimonial/'.$testimonial->image) }}" alt="profile">
                    </div>
                    <div class="testimonial_box-info">
                      <div class="testimonial_box-name">
                        <h4>{{ $testimonial->name }}</h4>
                      </div>
                      <div class="testimonial_box-job">
                        <p>{{ $testimonial->designation }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endif

          <!-- <div class="testimonial-slide">
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
          </div> -->

        </div>
      </div>
    </div>
  </div>
</section>

<section id="faq" class="faq">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">1. What is credit reporting?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Credit reporting refers to the process of collecting and maintaining information about individuals' credit activities, including borrowing, repayment history, and creditworthiness. This information is gathered by credit bureaus or credit reporting agencies, who compile credit reports that lenders and other authorized entities can use to assess an individual's creditworthiness.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title">2. What is included in a credit report?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            A credit report typically includes personal identifying information, such as name, address, and social security number. It also contains credit account information, such as details of loans, credit cards, and mortgages, including payment history, balances, and credit limits. Other information may include public records (such as bankruptcies or tax liens), inquiries made by lenders, and information on accounts in collection.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-3" aria-expanded="false">
                        <span class="accordion-title">3. How can I obtain a copy of my credit report?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            You can request a copy of your credit report from the credit reporting agencies. In many countries, individuals are entitled to one free credit report per year from each agency. You can typically request your credit report online, by mail, or by phone, following the process outlined by the specific credit reporting agency in your country.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false">
                        <span class="accordion-title">4. Why is my credit report important?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Your credit report plays a crucial role in your financial life. Lenders, such as banks, cooperatives or credit card issuers, use your credit report to assess your creditworthiness when you apply for credit. A positive credit report, indicating responsible borrowing and timely payments, can help you secure loans, obtain better interest rates, and access favorable financial opportunities.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">5. How long does information stay on my credit report?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            The duration that information stays on your credit report can vary depending on the country and the type of information. In many cases, negative information like late payments, defaults, or bankruptcies can remain on your credit report for several years, typically ranging from 7 to 10 years. Positive information, such as on-time payments and good credit behavior, can generally stay on your report for longer periods.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-6" aria-expanded="false">
                        <span class="accordion-title">6. Can I dispute errors on my credit report?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Yes, if you notice errors or inaccuracies on your credit report, you have the right to dispute them. You can contact the credit reporting agency and provide them with the necessary documentation or evidence to support your claim. The agency will investigate your dispute and make corrections if necessary. </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-7" aria-expanded="false">
                        <span class="accordion-title">7. How can I improve my credit score?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Improving your credit score involves maintaining healthy credit habits over time. This includes making payments on time, keeping credit card balances low, paying off debts, and avoiding excessive credit applications. Responsible financial behavior and consistent positive credit activities can help raise your credit score.
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-button-7" aria-expanded="false">
                        <span class="accordion-title">8. Does checking my own credit report impact my credit score?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            No, checking your own credit report, also known as a soft inquiry, does not typically impact your credit score. Soft inquiries are made when you check your own report or when companies perform background checks. On the other hand, hard inquiries, such as when you apply for credit, can have a temporary impact on your credit score.
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-7" aria-expanded="false">
                        <span class="accordion-title">9. What should I do if I suspect identity theft or fraud on my credit report?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            If you suspect identity theft or fraud, it is important to take immediate action. Contact the credit reporting agencies to place a fraud alert on your credit file and review your credit report for any unauthorized accounts or suspicious activities. You
                    </div>
                </div>


            </div>
        </div>
    </section>


<script>
</script>

@endsection