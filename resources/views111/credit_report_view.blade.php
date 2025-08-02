@extends('layouts.frontend')
@section('title', 'Credit Report View')
@section('content')

<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 class="m-0">Credit Report View</h1>
            </div>

        </div>
    </div>

</section>
<main id="main">
    <section class="user-view">
        <div class="container">
            <center>
                <h4 class="mb-5">Credit Report View</h4>
            </center>
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="card-item">

                            <div class="card-heading">
                                <h3>Loan Details</h3>
                            </div>
                            <div class="grid-3">
                                <!-- <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Loan Type : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->loan_type }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Total Loan Amount : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->loan_amount }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Loan Date : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->loan_date }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Loan Balance Amount : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->loan_balance_amount }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Loan Balance Amount AS on Date : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->loan_balance_as_date }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Loan Account Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->loan_account_number }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Loan Status : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->loan_status }}
                                    </div>
                                </div> -->
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->name }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Date Of Birth : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->dob }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Gender : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->gender }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">PAN CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->pan_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Aadhaar CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->aadhaar_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Mobile Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->mobile_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Address : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->address }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Pin code : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->pin_code }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">City : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->city }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Taluka : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->taluka }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">District : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->district }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">State : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->state }}
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- <div class="card-item mt-5">

                            <div class="card-heading">
                                <h3>Coborrower Details</h3>
                            </div>
                            <div class="grid-3">
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_name }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Date Of Birth : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_dob }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Gender : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_gender }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">PAN CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_pan_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Aadhaar CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_aadhaar_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Mobile Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_mobile_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Address : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_address }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Pin code : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_pin_code }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">City : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_city }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Taluka : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_taluka }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">District : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_district }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">State : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->coborrower_state }}
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-item mt-5">

                            <div class="card-heading">
                                <h3>Guarantor-1 Details</h3>
                            </div>
                            <div class="grid-3">
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_name }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Date Of Birth : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_dob }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Gender : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_gender }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">PAN CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_pan_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Aadhaar CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_aadhaar_no }}
                                    </div>
                                </div>

                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Mobile Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_mobile_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Address : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_address }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Pin code : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_pin_code }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">City : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_city }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Taluka : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_taluka }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">District : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_district }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">State : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor1_state }}
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="card-item mt-5">

                            <div class="card-heading">
                                <h3>Guarantor-2 Details</h3>
                            </div>
                            <div class="grid-3">
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Name : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_name }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Date Of Birth : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_dob }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Gender : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_gender }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">PAN CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_pan_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Aadhaar CARD : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_aadhaar_no }}
                                    </div>
                                </div>

                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Mobile Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_mobile_no }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Address : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_address }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Pin code : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_pin_code }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">City : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_city }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Taluka : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_taluka }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">District : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_district }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">State : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->guarantor2_state }}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-item mt-5">

                            <div class="card-heading">
                                <h3>Case Details</h3>
                            </div>
                            <div class="grid-3">
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Case Filed On : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->case_filed_on }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Recovery Order Number : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->recovery_order_number }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Recovery Order Date : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->recovery_order_date }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Recovery Order Authority : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->recovery_order_authority }}
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="label">
                                        <h6 class="mb-0">Recovery Order Amount : </h6>
                                    </div>
                                    <div class="text-secondary">
                                        {{ $loaninfo->recovery_order_amount }}
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
</main>

@endsection