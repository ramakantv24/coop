@extends('layouts.frontend')
@section('title', 'Course View')
@section('content')

@php
    use App\Models\Coursechapter;
    $id 		= $courseinfo->id; 
    $chapterFirst 	= Coursechapter::where('course_id',$id)->where('is_parent', '>', 0)->first();
    $chapterSubject 	= Coursechapter::where('course_id',$id)->where('is_parent', '=', 0)->get(); 
@endphp
<main id="main">

    <section class="course-detailed">
        <div class="course-details row">
            <div class="course-info col-lg-6">
                {{-- <video class="video-play" controls>
                    <source src="https://www.youtube.com/embed/tgbNymZ7vqY" type="video/mp4">
                </video> --}}
               
              	<!-- @if(isset($chapterFirst->video_link))
              		{!! $chapterFirst->video_link !!}
              	@endif -->
                  <img src="http://study.com/cimages/course-image/praxis-ii-business-education-test_118084_large.jpg" alt="">

             
                
            </div>

            <div class="course-lectures col-lg-6">
                <!-- <h3>Course Lectures</h3> -->
                <!-- <div class="course-detail-list">
                    <div class="tab-accordian">

                        <div class="titleWrapper active">
                            <p class="title">{{ $courseinfo->title }}</p>
                            <div class="collapse-icon">
                                <div class="acc-close"></div>
                                <div class="acc-open"></div>
                            </div>
                        </div>

                        <div id="descwrapper" class="desWrapper" style="display: block;">
                            <ul>
                              @if(isset($chapterSubject))
                              	@foreach($chapterSubject as $list)
                                    <li>
                                        <a href="{{ url('/course/view/') }}/{{ $courseinfo->id }}?chapter={{ $list->id }}" class="active-bg">
                                            <span class="lecture-title"> <i class='bx bx-play'></i> </span>
                                            <p>
                                                {{ $list->chapter_name }}
                                            </p>
                                            <span class="lecture-duration"></span>
                                        </a>
                                    </li>
                              	@endforeach
                              @endif
                                
                            </ul>
                        </div>

                    </div>                   
                </div> -->
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <h2 class="mt-0">{{ $courseinfo->title }}</h2>
                    <a target="_blank" href="{{ asset('public/uploads/pdf') }}/{{ $courseinfo->pdf }}" class="btn-downlaod"> <i class='bx bxs-file-pdf'></i> Download pdf</a>
                </div>
                
                <p>
                  Rs. {{ number_format((float)$courseinfo->price, 2, '.', '');  }} 
                </p>
                
                <p>
                   {!! $courseinfo->description !!} 
                </p>
                
                <form method="POST" action="{{ url('/phonepe') }}">
                    @csrf
                
                    <input type="hidden" name="course_id" value="{{ $courseinfo->id }}" >  
                    <input type="hidden" name="type" value="course" >
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                    <input type="hidden" name="email" value="{{ Auth::user()->email }}" >
                    <input type="hidden" name="mobile_no" value="{{ Auth::user()->mobile_no }}" >
                    <input type="hidden" name="amount" value="{{ number_format((float)$courseinfo->price, 2, '.', ''); }}" >
                    
                    <button type="submit" class=" btn-enroll" >Enroll Now</button>
                </form>

            </div>
        </div>

    </section>

</main><!-- End #main -->

@endsection