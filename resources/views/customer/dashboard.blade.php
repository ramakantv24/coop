@extends('layouts.frontend')
@section('title', 'Customer Dashboard')
@section('content')

<!-- ======= Breadcrumbs ======= -->L
<section class="breadcrumbs">
  <div class="box">

    <div class="d-flex justify-content-between align-items-center">

      <ol>
        <li><a href="index.html">Home</a></li>
        <li>Dashboard</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<main class="inner-page bg-grey dashboard-ui">
  <div class="box">
    <div class="dashboard-options">
      <div class="dashboard-grid">

        @include('customer.left_side')

        <!--Grid column-->

        <!--Grid column-->
        <div class="dashboard-tab tab-results">

          <!-- Tab panels -->
          <div class="tab-content pt-0">

            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel11" role="tabpanel">
              <div class="py-3 px-4">
                @if(session()->has('success'))
                <div class="alert alert-success">
                  <strong>Success!</strong> {{ session()->get('success') }}
                </div>
                @endif
                @if(session()->has('error'))
                <div class="alert alert-danger">
                  <strong>Warning!</strong> {{ session()->get('error') }}
                </div>
                @endif
                <form id="logout-form" action="{{ url('customer/update_profile') }}" method="POST">
                  @csrf
                  <h3>User Profile</h3>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                      <h6> </h6>
                    </div>
                    <h6 class="text-right">Edit Profile</h6>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="Full name" value="{{ $profileInfo->name }}"></div>
                    <div class="col-md-6"><input type="text" name="email" class="form-control" placeholder="Email" value="{{ $profileInfo->email }}"></div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-md-6"><input type="text" name="mobile_no" class="form-control" value="{{ $profileInfo->mobile_no }}" placeholder="Mobile no"></div>
                    <div class="col-md-6"><input type="text" name="location" class="form-control" placeholder="Location" value="{{ $profileInfo->location }}"></div>
                  </div>

                  <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="submit">Save
                      Profile</button></div>
                </form>
              </div>
       
            </div>


            <!--/.Panel 3-->

            <!--Panel 4-->
            <!-- <div class="tab-pane fade" id="panel14" role="tabpanel">
                  <p>Option last</p>
                </div> -->
            <!--/.Panel 4-->

          </div>


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </div>
</main>


{{-- <main id="main">

  <section class="course-detailed">
    <div class="course-details row">
      <div class="course-info col-lg-8">
        <video class="video-play" controls>
          <source src="https://www.youtube.com/embed/tgbNymZ7vqY" type="video/mp4">
        </video>

        <!-- @if(isset($chapterFirst->video_link))
              		{!! $chapterFirst->video_link !!}
              	@endif -->
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <h2>Course Name</h2>
        </div>
        <p>
          courseinfo description
        </p>
      </div>

      <div class="course-lectures col-lg-4">
        <h3>Course Lectures</h3>
        <div class="course-detail-list">
          <div class="tab-accordian">

            <div class="titleWrapper active">
              <p class="title">Subject title </p>
              <a target="_blank" href="" class="btn-downlaod"> <i class='bx bxs-file-pdf'></i> </a>

            </div>

            <div id="descwrapper" class="desWrapper" style="display: block;">
              <ul>

                <li>
                  <a class="active-bg">
                    <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                    <p>
                      Chapter Name
                    </p>
                    <span class="lecture-duration"></span>
                  </a>
                </li>
                <li>
                  <a class="active-bg">
                    <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                    <p>
                      Chapter Name
                    </p>

                  </a>
                </li>

              </ul>
            </div>

          </div>
          <div class="tab-accordian">

            <div class="titleWrapper ">
              <p class="title">courseinfo title </p>
            </div>

            <div id="descwrapper" class="desWrapper">
              <ul>

                <li>
                  <a href="" class="active-bg">
                    <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                    <p>
                      Chapter Name
                    </p>
                    <span class="lecture-duration"></span>
                  </a>
                </li>
                <li>
                  <a href="" class="active-bg">
                    <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                    <p>
                      Chapter Name
                    </p>
                    <span class="lecture-duration"></span>
                  </a>
                </li>

              </ul>
            </div>

          </div>
          <div class="tab-accordian">

            <div class="titleWrapper ">
              <p class="title">courseinfo title </p>
            </div>

            <div id="descwrapper" class="desWrapper">
              <ul>

                <li>
                  <a href="" class="active-bg">
                    <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                    <p>
                      Chapter Name
                    </p>
                    <span class="lecture-duration"></span>
                  </a>
                </li>
                <li>
                  <a href="" class="active-bg">
                    <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                    <p>
                      Chapter Name
                    </p>
                    <span class="lecture-duration"></span>
                  </a>
                </li>

              </ul>
            </div>

          </div>
        </div>




      </div>
    </div>

  </section>

</main> --}}


@endsection