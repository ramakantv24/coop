@extends('admin/layouts.backend')
@section('title', 'Edit Testimonial')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Testimonial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Testimonial</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

	<section class="content">
		<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				
				<div class="row mt-3">
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							
							<!-- /.box-header -->
							<!-- form start -->
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
							<form role="form" action="{{ asset('admin/testimonial/edit_testimonial_action') }}" method="POST" enctype='multipart/form-data'>
							    @CSRF
								<input type="hidden" name="id" value="{{ $testimonialInfo->id }}" required>
								<div class="box-body"> 
								    <div class="form-group">
										<label for="exampleInputEmail1">Name <span style="color:red;">*</span></label>
										<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Name" value="{{ $testimonialInfo->name }}" required> 
										@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Designation <span style="color:red;">*</span></label>
										<input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" id="exampleInputEmail1" placeholder="Designation" value="{{ $testimonialInfo->designation }}" required>
										@error('designation')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Description <span style="color:red;">*</span></label>
										<textarea name="description" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" placeholder="Description" required>{{ $testimonialInfo->description }}</textarea>
										@error('description')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="exampleInputFile">Image <span style="color:red;"></span></label>
										<input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputFile" >
										@error('image')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										<img src="{{ asset('public/uploads/testimonial/'.$testimonialInfo->image) }}" alt="Testimonial Image" style="width: 100px; height: 100px; margin-top: 10px;">	
									</div>
									
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>
				</div>
					
			</div>
		</div>
		</div>
	</section>
@endsection
