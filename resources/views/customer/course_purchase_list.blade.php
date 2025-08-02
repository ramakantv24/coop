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


              <div class="course-tabel mt-0 mb-5 px-4">
                <center>
                  <h3 class="mb-5">Your Courses</h3>
                </center>
                <div class="row mt-4">
                @if(isset($coursePurchaselist))
                    @foreach($coursePurchaselist as $list)
                          <div class="col-lg-4 col-lg-6 col-sm-12 ">
                            <div class="card">
                              <a href="{{ url('/customer/course-chapter-view') }}/{{ $list->id  }}" title="Click to access the course">
                                <img src="{{ asset('public/uploads/pdf/') }}/{{ $list->pdf }}" alt="">
                                <span class="title">{{ $list->title }}</span>
        
                                <div class="info">
                                  <div class="disc">
                                    {!! $list->description !!}
                                  </div>
                                  <a href="{{ url('/customer/course-chapter-view') }}/{{ $list->id  }}" class="see-detail">Course Details</a>
                                </div>
                              </a>
        
                            </div>
                          </div>
                    @endforeach
                @endif  
                  
                
                  
                </div>
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




@endsection