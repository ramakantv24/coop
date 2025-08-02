@extends('layouts.frontend')
@section('title', 'Coop Education')
@section('content')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Online Education</h1>
                <h4 class="mt-3 text-white">Unlock the Power of Knowledge and Learning</h4>

                <p class="mt-4 mb-4">
                    We believe that education is the key to personal and societal growth. Our platform is dedicated to providing a seamless and enriching learning experience for students, educators, and lifelong learners alike. Whether you're looking to enhance your skills, explore new subjects, or excel academically, we have something for everyone.
                </p>

                <a href="" class="d-block mt-3">
                            <button class="btn getFreetrialBtn  btn-light bgYellow px-xl-5 px-lg-5 px-md-4 py-xl-2 py-2 px-4 bold">Enroll Now</button>
                        </a>

            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{ asset('public/frontend/assets/img/edu-banner.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<main id="main">

    <section class="choose-us pb-0">
        <div class="container">
            <section id="services" class="services pb-0">
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
                                    <h3>Wide Range of Courses</h3>
                                    <p>
                                        We offer a diverse array of courses covering various
                                        subjects and disciplines. From academic subjects like
                                        mathematics, science, and history to practical skills
                                        like programming, language learning, and creative arts,
                                        we've got you covered.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row revrse mt-0">
                            <div class="col-lg-6">
                                <div class="content">
                                    <h3>Flexible Learning</h3>
                                    <p>
                                        Study at your own pace, whenever and wherever you want.
                                        Our platform allows you to access course materials from
                                        desktops, laptops, or mobile devices, giving you the
                                        freedom to learn on the go.
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
                                    <h3>Certification and Recognition</h3>
                                    <p>
                                        Earn certificates upon completion of courses to showcase
                                        your achievements to potential employers or educational
                                        institutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <section class="about-text">
        <div class="container">
            <div class="text-box">
                <h2>How It Works</h2>
            </div>
            <div class="row">

                <div class="text-box col-md-4">
                    <div class="icons">
                        <i class='bx bx-search-alt-2'></i>
                    </div>
                    <h3>
                        1. Browse Courses
                    </h3>
                    <p>
                        Explore our extensive course catalog and find the subjects that spark your curiosity or align with your learning goals.
                    </p>
                </div>

                <div class="text-box col-md-4">
                    <div class="icons">
                        <i class='bx bx-user-plus' style='color:#ffffff'></i>
                    </div>
                    <h3>
                        2. Enroll
                    </h3>
                    <p>
                        Enroll in your chosen course with just a few clicks and gain instant access to all the learning materials.
                    </p>
                </div>

                <!-- <div class="text-box col-md-4">
                    <div class="icons">
                        <i class='bx bx-chalkboard' style='color:#ffffff'></i>
                    </div>
                    <h3>
                        3. Learn and Engage
                    </h3>
                    <p>
                        Dive into the course content, interact with fellow learners, and participate in discussions to deepen your understanding.
                    </p>
                </div> -->


                <!-- <div class="text-box col-md-4">
                    <div class="icons">
                        <i class="ri-database-line"></i>
                    </div>
                    <h3>
                        4. Track Your Progress
                    </h3>
                    <p>
                        Monitor your progress through the course and stay motivated as you accomplish milestones. </p>
                </div> -->


                <div class="text-box col-md-4">
                    <div class="icons">
                        <img src="{{ asset('public/frontend/assets/img/diploma.png') }}" alt="">
                    </div>
                    <h3>
                        5. Get Certified
                    </h3>
                    <p>
                        Successfully complete the course and earn a certificate to add to your professional or academic portfolio.
                    </p>
                </div>

            </div>
        </div>


    </section>



<!-- 
    <section class="courses">
        <div class="container">
            <div class="section-title">
                <h2>Checkout Our Courses</h2>
            </div>
            <div class="row course">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="card">
                        <a href="#" title="Click to access the course">
                            <span class="cover">
                                <span class="title">Course: Product life cycle (versions, deadlines and
                                    projects)</span>
                                <span class="img" style="background-image: url('http://study.com/cimages/course-image/praxis-ii-business-education-test_118084_large.jpg');"></span>

                            </span>
                            <div class="info">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus quidem
                                    voluptatibus, cum
                                    aut repudiandae repellendus impedit molestiae unde consequatur explicabo quia
                                    reiciendis corrupti.
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus quidem
                                    voluptatibus, cum
                                    aut repudiandae repellendus impedit molestiae unde consequatur explicabo quia
                                    reiciendis corrupti.
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
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit doloribus quidem
                                    voluptatibus, cum
                                    aut repudiandae repellendus impedit molestiae unde consequatur explicabo quia
                                    reiciendis corrupti.
                                    Alias perferendis exercitationem asperiores fuga perspiciatis!</p>
                                <a class="see-detail">Course Details</a>
                            </div>
                        </a>

                    </div>
                </div>


            </div>

        </div>
    </section> -->
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
          <img src="http://study.com/cimages/course-image/praxis-ii-business-education-test_118084_large.jpg" alt="">
          <a href="{{ url('/customer/course/view') }}/{{ $list->id  }}" title="Click to access the course">
            <span class="">
              <span class="title">{{ $list->title }}</span>
            </span>
          </a>
            <div class="info">
                <div class="disc">
                    {!! $list->description !!}
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

    <section id="faq" class="faq">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-button-1" aria-expanded="false">
                        <span class="accordion-title">1. What is a cooperative online education course?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            A cooperative online education course combines the principles of cooperative learning with online education. It is a course where students work together in groups or teams, engaging in collaborative activities and projects through online platforms or tools. Cooperative learning promotes active participation, shared responsibility, and mutual support among students.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-2" aria-expanded="false">
                        <span class="accordion-title">2. How does cooperative online education work?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            In a cooperative online education course, students collaborate virtually through online platforms or tools. They engage in group discussions, work on shared assignments or projects, provide feedback to one another, and collectively learn and problem-solve. Cooperative learning strategies and techniques are adapted to the online environment to foster collaboration and peer-to-peer interaction.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-3" aria-expanded="false">
                        <span class="accordion-title">3. What are the benefits of cooperative online education courses?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Cooperative online education courses offer several benefits. They promote active learning and engagement, as students actively participate in group activities and discussions. Cooperative learning develops teamwork and communication skills, as students work together and learn from one another. Online platforms allow for flexible scheduling and remote collaboration, accommodating diverse student needs and locations.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-4" aria-expanded="false">
                        <span class="accordion-title">4. What are some examples of cooperative online learning activities?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Cooperative online learning activities can include virtual group discussions, collaborative document creation, peer review and feedback, group presentations, joint problem-solving tasks, and shared research projects. These activities encourage interaction, knowledge sharing, and joint exploration of course topics.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-5" aria-expanded="false">
                        <span class="accordion-title">5. How can students effectively collaborate in a cooperative online education course?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            To effectively collaborate in a cooperative online education course, students should establish clear communication channels, set common goals and expectations, and actively participate in group activities. They can use online collaboration tools such as video conferencing, shared document editing, messaging platforms, and discussion boards to facilitate communication and coordination.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-6" aria-expanded="false">
                        <span class="accordion-title">6. How do cooperative online education courses assess student learning?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Assessment in cooperative online education courses can be done through various methods. Individual and group assignments, projects, presentations, and online quizzes or exams may be used to assess students' understanding of the course material and their collaborative skills. Peer assessment and self-reflection can also be incorporated to evaluate individual contributions to group work.
                        </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-button-7" aria-expanded="false">
                        <span class="accordion-title">7. Can cooperative online education courses be offered in different subject areas?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Yes, cooperative online education courses can be offered in a wide range of subject areas. They can be adapted to suit different disciplines and learning objectives. Whether it is a humanities course, a science course, or a professional development course, cooperative online education can enhance student learning and collaboration. </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-button-8" aria-expanded="false">
                        <span class="accordion-title">8. Are cooperative online education courses suitable for all learners?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Cooperative online education courses can be beneficial for many learners, but individual preferences and learning styles may vary. Some students thrive in collaborative environments, while others prefer individual learning. It's important for educators to provide options for participation and accommodate diverse learning preferences within the cooperative online learning framework.
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-button-9" aria-expanded="false">
                        <span class="accordion-title">9. What technology is required for cooperative online education courses?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            The technology requirements for cooperative online education courses are similar to other online education courses. Students need a computer or mobile device with internet access. They may also require software applications or online platforms that support collaboration, such as video conferencing tools, shared document editing, and discussion boards.
                    </div>
                </div>
                <div class="accordion-item">
                    <button id="accordion-button-10" aria-expanded="false">
                        <span class="accordion-title">10. Can cooperative online education courses be combined with in-person cooperative learning?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div class="accordion-content">
                        <p>
                            Yes, it is possible to combine cooperative online education courses with in-person cooperative learning activities. Hybrid models can be created, where students engage in both virtual and face-to-face collaborative activities. This blended approach offers flexibility while still allowing for valuable in-person interaction and group work.
                    </div>
                </div>
            </div>
            <p class="mt-5">
                Remember to consult with course instructors or educational institutions for specific details and guidelines regarding cooperative online education courses.
            </p>
        </div>
    </section>

    <section class="mb-xl-5 mb-5 mx-2 mx-lg-0">
        <div class="container bgBlue p-xl-5 px-5 py-5 py-md-5 readyToFallBg bg-norepeat">
            <div class="row mx-xl-5">
                <div class="col-xl-8 col-md-7">
                    <h4 class="text-white ">
                        Are you ready to embark on a journey of knowledge and growth? Sign up today and join a community of lifelong learners. Education is the passport to a better future, and we're here to be your guide every step of the way. Let's start learning together!
                    </h4>

                </div>

                <div class="col-xl-4 col-md-5 my-md-auto mt-md-4 mt-0">
                    <div class="text-md-center">
                        <a href="">
                            <button class="btn getFreetrialBtn  btn-light bgYellow px-xl-5 px-lg-5 px-md-4 py-xl-2 py-2 px-4 bold">Enroll Now</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main><!-- End #main -->

@endsection