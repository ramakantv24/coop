@extends('admin/layouts.backend')
@section('title', 'Chapter')
@section('content')

	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Course</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Chapter</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


	
	<div class="bg-white  mt-4 mb-5">
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
	
        
        
        <form role="form" action="{{ asset('admin/add_chapter_action') }}" method="POST" enctype='multipart/form-data'>
        @CSRF
            <input type="hidden" name="type" value="chapter">
           <div class="form-group col-md-6">
                <label for="loan-amount">Course</label>
              	<select name="course_id" id="selector1" class="form-control" required>
                    <option value="nance">-Select-</option>
                    @if(isset($courselist))
                      @foreach($courselist as $list)
                      	<option value="{{ $list->id }}">{{ $list->title }}</option>
                      @endforeach
                    @endif
                </select>
                @error('course_id')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
            </div>
            
            <div class="form-group col-md-6" id="subtopic1">
                <label for="inputEmail3" class="col-sm-2 control-label">Subject</label>
                <select name="subject_id" id="selector2" name="selector2" class="form-control" >
                  
                </select>
            </div>
            
            
            
            <div class="form-group col-md-6">
                <label for="loan-amount" id="change_label">Chapter Name</label>
                <input type="text" name="chapter_name" class="form-control @error('chapter_name') is-invalid @enderror" id="title" placeholder="" value="{{ old('chapter_name') }}" required>
				@error('chapter_name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
            </div>
            
            
           <!--  <div class="form-group col-md-6">
                <label for="loan-amount">Upload Subject Pdf</label>
                <input id="pdf" type="file" class="form-control @error('pdf') is-invalid @enderror" name="pdf" required>
				@error('pdf')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
            </div>
           
            
            <div class="form-group col-md-6">
            <div class="col-sm-2"></div>
              <label> <input type="checkbox" id="sub" name="sub" value="sub"> Is Sub Topic ? </label>
           </div> -->
            
            
            
           <div class="form-group col-md-6" id="subtopic2">
                <label for="loan-amount">Video Link</label>
                
                <input type="text" name="video_link" class="form-control @error('video_link') is-invalid @enderror" id="title" placeholder="Video Link" value="{{ old('video_link') }}" >
    			@error('video_link')
    				<span class="invalid-feedback" role="alert">
    					<strong>{{ $message }}</strong>
    				</span>
    			@enderror
            </div>
           <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    
<script type="text/javascript">
  document.getElementById('selector1').onchange = function(){
     
    if(document.getElementById('selector1').value=='nance'){
      alert('Please select course name');
      //document.getElementById('sub').checked=false;
    }else{
      //if(document.getElementById('sub').checked==true){
          
        //document.getElementById('change_label').innerHTML = 'Chapter name';
        //document.getElementById('subtopic1').style.display = 'block';
        //document.getElementById('subtopic2').style.display = 'block';
        
        var course_id = document.getElementById('selector1').value;
        var url = "{{url('admin/getcoursesubject')}}"+"/"+course_id;
        
		$.get(url, function (dataResult) {
			dataResult = JSON.parse(dataResult);
			var htm = '';
		    $.each(dataResult,function(index,row){
			    htm += '<option value="'+ row.id +'" >'+ row.chapter_name +'</option>';
			});
            document.getElementById('selector2').innerHTML = htm;
		});
        
        
      /* }else{
        console.log('no');
        document.getElementById('subtopic1').style.display = 'none';
        document.getElementById('subtopic2').style.display = 'none';
        document.getElementById('change_label').innerHTML = 'Subject';
      } */
    }
  }
</script>
	
@endsection
