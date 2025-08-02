@extends('layouts.frontend')
@section('title', 'Credit Report')
@section('content')

@php
use App\Models\Loanpurchase;
@endphp

<section id="hero" class="d-flex align-items-center pb-5">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Welcome to Your Credit Report Landing Page!</h1>
                <h4 class="mt-3 text-white">Unlock Your Financial Potential with Your Credit Report</h4>

                <p class="mt-4 mb-4">
                    Your credit report is a crucial tool that helps you understand your creditworthiness. Here, you can access your credit report and gain valuable insights into your financial history. Knowing your credit standing is essential for making informed decisions when it comes to loans, credit cards, mortgages, and other financial opportunities.
                </p>

            </div>

            <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="{{ asset('public/frontend/assets/img/hero.png') }}" class="img-fluid" alt="">
              </div> -->
        </div>
        <div class="hero-form mt-5 pt-1">

            @if (Auth::user())
            <form role="form" action="{{ asset('customer/credit-report') }}" method="GET">
                @CSRF
                <div class="input-box">
                    <i class='bx bx-search-alt-2'></i>
                    <input type="search" name="search" placeholder="Enter Adhar or Pan Number" value="{{ app('request')->input('search') }}" />
                    <button type="submit" class="button">Search</button>
                </div>
            </form>
            @else
            <a href="{{ url('/customer/credit-report') }}" class="mt-3">
                <span class="btn getFreetrialBtn  btn-light bgYellow px-xl-5 px-lg-5 px-md-4 py-xl-2 py-2 px-4 bold">Check Credit Report</span>
            </a>
            @endif

        </div>
    </div>

</section><!-- End Hero -->


<main id="main">
    <section class="credit-report">
        <div class="container">
            <h3 class="text-center">Credit Report</h3>

            <!-- <div class="search-results">
                <div class="reults">
                    <div class="list-group-items">
                        <p>John Doe</p>
                        <div class="action-btns">
                            <button type="" class="view" title="View">
                                <i class="ri-eye-line"></i>
                            </button>
                            <button type="" class="downlaod" title="Download">
                                <i class="ri-folder-download-fill"></i>
                            </button>
                        </div>
                    </div>
                    <div class="list-group-items">
                        <p>John Doe</p>
                        <div class="action-btns">
                            <button type="" class="view" title="View">
                                <i class="ri-eye-line"></i>
                            </button>
                            <button type="" class="downlaod" title="Download">
                                <i class="ri-folder-download-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <!-- <div class="card-body">
                                <h5 class="card-title text-uppercase mb-2"> Users</h5>
                            </div> -->
                            <div class="table-responsive resutls-search">
                                @if(isset($loanlist))
                                <table class="table no-wrap user-table mb-0 table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="border-0 text-uppercase font-medium pl-4">#</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Loan Type</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Name</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Mobile Number</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Adhar Number</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Pan Number</th>
                                            <th scope="col" class="border-0 text-uppercase font-medium">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($loanlist as $list)
                                        @php
                                        $loanpurchase = Loanpurchase::select('loan_purchase.*')->where('user_id', Auth::user()->id)->where('loan_id', $list->id)->first();
                                        @endphp
                                        <tr>
                                            <td class="pl-4">{{ $i }}</td>
                                            <td>
                                                <h6 class="font-medium mb-0">{{ $list->loan_type }}</h6>
                                            </td>
                                            <td>
                                                <span class="text-muted">{{ $list->name }}</span><br>
                                            </td>
                                            <td>
                                                <span class="text-muted">{{ $list->mobile_no }}</span><br>
                                            </td>
                                            <td>
                                                <span class="text-muted">{{ $list->aadhaar_no }}</span><br>
                                            </td>
                                            <td>
                                                <span class="text-muted">{{ $list->pan_no }}</span><br>
                                            </td>
                                            <td>
                                                <div class="action-btns">

                                                    @if(isset($loanpurchase) && ($loanpurchase->payment_status == 'C') && ($loanpurchase->code == 'PAYMENT_SUCCESS'))

                                                    <a href="{{ url('/customer/credit-report/view') }}/{{ $list->id }}" class="view" title="View">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                    @php
                                                    if(!empty($list->aadhaar_no)){
                                                    $search = $list->aadhaar_no;
                                                    }else{
                                                    $search = $list->pan_no;
                                                    }
                                                    @endphp
                                                    <a href="{{ url('/customer/credit-report/download') }}/{{ app('request')->input('search') }}" class="downlaod" title="Download">
                                                        <i class="ri-folder-download-fill"></i>
                                                    </a>

                                                    @else
                                                    <form method="POST" action="{{ url('/phonepe') }}">
                                                        @csrf

                                                        <input type="hidden" name="loan_id" value="{{ $list->id }}">
                                                        <input type="hidden" name="search_data" value="{{ app('request')->input('search') }}">
                                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                                                        <input type="hidden" name="mobile_no" value="{{ Auth::user()->mobile_no }}">
                                                        <input type="hidden" name="amount" value="{{ $settinginfo->loan_search_price }}">

                                                        <button type="submit" class="btn view">Pay</button>
                                                    </form>
                                                    @endif
                                                </div>
                                            </td>

                                        </tr>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 
    <section class="user-view">
        <div class="container">
            <center>
                <h4 class="mb-5">Detail View</h4>
            </center>
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-item">

                            <div class="card-heading">
                                <h3>User Profile</h3>
                            </div>
                            <div class="grid-3">
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Full Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        PRASHANTH KUMAR H
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">DOB/AGE : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        02/12/2001
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Gender : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        MALE
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Father Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        PRASHANTH KUMAR H
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Spouse : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        Name
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Mother Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        Name
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Phone Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        9986000318
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Id : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        <span class="pan">AHRPJ8873A [PAN]</span> <br>
                                        <span class="pan">551353499683 [Other]</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-item mt-5">
    
                            <div class="card-heading">
                                <h3>User Profile</h3>
                            </div>
                            <div class="grid-3">
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Full Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        PRASHANTH KUMAR H
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">DOB/AGE : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        02/12/2001
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Gender : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        MALE
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Father Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        PRASHANTH KUMAR H
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Spouse : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        Name
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Mother Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        Name
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Phone Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        9986000318
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Id : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        <span class="pan">AHRPJ8873A [PAN]</span> <br>
                                        <span class="pan">551353499683 [Other]</span>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section> -->



    <section class="choose-us pb-0 pt-0">
        <div class="container">
            <section id="services" class="services pb-0 pt-1">
                <div class="container">
                    <div class="section-title">
                        <h2>Why Choose Our Education Platform?</h2>
                    </div>

                    <div class="service-grid">
                        <div class="row mt-0">
                            <div class="col-lg-6">
                                <!-- <img src="./assets/img/courses.jpg" alt="" /> -->
                                <img src="{{ asset('public/frontend/assets/img/courses.png') }}" alt="" />
                            </div>
                            <div class="col-lg-6">
                                <div class="content">
                                    <h3>
                                        Instant Access
                                    </h3>
                                    <p>
                                        Get instant access to your credit report with just a few simple steps. No waiting, no delays – your credit information at your fingertips.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row revrse mt-0">
                            <div class="col-lg-6">
                                <div class="content">
                                    <h3>
                                        Comprehensive Overview:
                                    </h3>
                                    <p>
                                        Our credit reports provide a comprehensive overview of your credit history, including credit accounts, payment history, credit inquiries, and public records. See the bigger picture of your financial standing.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('public/frontend/assets/img/learn.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-lg-6">
                                <img src="{{ asset('public/frontend/assets/img/certificate.png') }}" alt="" />
                            </div>
                            <div class="col-lg-6">
                                <div class="content">
                                    <h3>
                                        Monitor Your Loans
                                    </h3>
                                    <p>
                                        Keep track of your Loans and monitor changes over time. Understanding your creditworthiness is the first step towards improving it.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0 revrse">

                            <div class="col-lg-6">
                                <div class="content">
                                    <h3>
                                        Detect Errors and Fraud
                                    </h3>
                                    <p>
                                        Detecting errors or unauthorized activities early is crucial. Review your credit report for inaccuracies or signs of identity theft, and take action if necessary.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('public/frontend/assets/img/certificate.png') }}" alt="" />
                            </div>
                        </div>
                        <div class="row mt-0">
                            <div class="col-lg-6">
                                <img src="{{ asset('public/frontend/assets/img/certificate.png') }}" alt="" />
                            </div>
                            <div class="col-lg-6">
                                <div class="content">
                                    <h3>
                                        Better Financial Planning
                                    </h3>
                                    <p>
                                        Your credit report is a roadmap to better financial planning. Identify areas for improvement and take steps towards achieving your financial goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-0 revrse">

                            <div class="col-lg-6">
                                <div class="content">
                                    <h3>
                                        Privacy and Security
                                    </h3>
                                    <p>
                                        We take your data privacy seriously. Rest assured that your information is encrypted and kept secure at all times.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('public/frontend/assets/img/certificate.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <section class="about-text">
        <div class="container">
            <div class="text-box mt-0">
                <h2>How It Works</h2>
            </div>
            <div class="row">

                <div class="text-box col-md-4">
                    <div class="icons">
                        <i class="bi bi-person-check"></i>
                    </div>
                    <h3>
                        1. Sign Up
                    </h3>
                    <p>
                        Create an account with us to access your credit report. We only require basic information to get started. </p>
                </div>

                <div class="text-box col-md-4">
                    <div class="icons">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <h3>
                        2. Verify Your Identity
                    </h3>
                    <p>
                        To ensure security, we'll ask you to verify your identity. Don't worry; this is a standard procedure to protect your information.

                    </p>
                </div>

                <div class="text-box col-md-4">
                    <div class="icons">
                        <i class="bi bi-file-earmark-spreadsheet"></i>
                    </div>
                    <h3>
                        3. View Your Credit Report
                    </h3>
                    <p>
                        Once verified, you'll have immediate access to your credit report. Review it, understand it, and take control of your financial future.
                    </p>
                </div>


                <div class="text-box col-md-4">
                    <div class="icons">
                        <i class="bi bi-clipboard-data"></i>
                    </div>
                    <h3>
                        4. Receive Insights
                    </h3>
                    <p>
                        Our credit report comes with valuable insights and tips on how to improve your credit score and maintain a healthy financial profile.
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
</main>

@endsection