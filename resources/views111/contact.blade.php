@extends('layouts.frontend')
@section('title', 'Contact us')
@section('content')

<!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Feel Free to Contact us</h1>

                </div>
                <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/hero.jpg" class="img-fluid" alt="">
        </div> -->
            </div>
        </div>

    </section>

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact ">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Thank you for visiting our website. We value your time and interest in our services. Our team is committed to providing exceptional service and we eagerly await the opportunity to assist you.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>12/15, Near Renuka Temple, Ward No.05, Vaddarahatti Camp, Gangavathi, Koppal, KARNATAKA-583227</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>thecooperativestrust@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+91 94916 94926<br>+91 99644 03666</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
 
@endsection