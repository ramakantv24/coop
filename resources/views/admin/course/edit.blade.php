@extends('admin/layouts.backend')
@section('title', 'Edit Course')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Course</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Course</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

	<div class="container mt-4 mb-5">
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
		<form role="form" action="{{ asset('admin/course/edit_course_action') }}" method="POST" enctype='multipart/form-data'>
			@CSRF
			<input type="hidden" name="id" value="{{ $courseinfo->id }}">
            
            <div class="form-row">
               
               
                <div class="form-group col-md-6">
                    <label for="loan-amount">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Title" value="{{ $courseinfo->title }}" required>
					@error('title')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                
                 <div class="form-group col-md-6">
                    <label for="loan-amount">Price</label>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="price" value="{{ $courseinfo->price }}" required>
					@error('price')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
				
              	<div class="form-group col-md-6">
                    <label for="loan-amount">Upload Image</label>
                    <input id="pdf" type="file" class="form-control @error('pdf') is-invalid @enderror" name="pdf" >
					@error('pdf')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                
                <div class="form-group col-md-12">
                    <label for="loan-amount">Description</label>
                    <textarea name="description" class="form-control ckeditor @error('pdf') is-invalid @enderror">{{ $courseinfo->description }}</textarea>
                    @error('description')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				
            </div>
                
          
            <button type="submit" class="btn btn-primary">Save & Change</button>
        </form>
    </div>
@endsection
