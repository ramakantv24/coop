@extends('layouts.frontend')
@section('title', 'Customer Dashboard')
@section('content')

@php
use App\Models\Coursechapter;
@endphp

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
              <div class="p-1 py-3">
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

              </div>
              <hr>

              <div class="course-details row w-100 pt-0 mt-0 p-0">
                <div class="course-info col-lg-8">

                  <div id="videoid">

                  </div>

                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h2>{{ $courseinfo->title }}</h2>
                  </div>
                  {!! $courseinfo->description !!}
                </div>

                <div class="course-lectures col-lg-4">
                  <h3>Course Lectures</h3>
                  <div class="course-detail-list">

                    @if(isset($coursePurchaseView))
                    @php
                    $i=1;
                    @endphp
                    @foreach($coursePurchaseView as $list)

                    @php
                    $Coursechapterlist = Coursechapter::select('course_chapter.*')->where('course_chapter.course_id', $list->course_id)->where('course_chapter.is_parent', $list->id)->orderBy('course_chapter.id', 'desc')->get();
                    @endphp

                    <div class="tab-accordian">

                      <div class="titleWrapper active">
                        <p class="title">{{ $list->chapter_name }} </p>
                        @if(!empty($list->pdf))
                        <a target="_blank" href="{{ asset('public/uploads/pdf/') }}/{{ $list->pdf }}" class="btn-downlaod"> <i class='bx bxs-file-pdf'></i> </a>
                        @endif
                      </div>

                      <div id="descwrapper{{ $i }}" class="desWrapper" style="display: block;">
                        <ul>
                          @if(isset($Coursechapterlist))
                          @foreach($Coursechapterlist as $list1)
                          <li>
                            <a class="active-bg clickData" data-value="{{ $list1->video_link }}">
                              <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                              <p>
                                {{ $list1->chapter_name }}
                              </p>
                              <span class="lecture-duration"></span>
                            </a>
                          </li>
                          @endforeach
                          @endif
                        </ul>
                      </div>
                    </div>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                    @endif

                  </div>

                </div>
              </div>

            </div>

          </div>


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </div>
</main>

<script>
  $(document).ready(function() {

    $(document).on("click", ".clickData", function() {
      var videoLink = $(this).attr("data-value");
      $("#videoid").html(videoLink);
    });

  });
</script>

@endsection