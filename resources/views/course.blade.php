@extends('layouts.frontend')
@section('title', 'Course')
@section('content')

 <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Coop Coure</h1>
          <p class="mt-3">
            Welcome to our online educational course. We're delighted to have you here. Here's some information
          </p>
        </div>
      </div>
    </div>

  </section>



  <main id="main">

    <section class="courses courses-main">
      <div class="container">
        <div class="section-title">
          <h2>Checkout Our Courses</h2>
        </div>
        <div class="row course">
          
		    @if(isset($courselist))
              @foreach($courselist as $list)
              <div class=" col-lg-4 col-md-6 col-12 ">
                <div class="card">
                  <img src="{{ asset('public/uploads/pdf/') }}/{{ $list->pdf }}" alt="">
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


  </main><!-- End #main -->

@endsection