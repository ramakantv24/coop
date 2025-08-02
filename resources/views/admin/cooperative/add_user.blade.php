@extends('admin/layouts.backend')
@section('title', 'Add cooperative')
@section('content')

	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add cooperative</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Add cooperative</li>
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
							<form role="form" action="{{ asset('admin/add_cooperative_action') }}" method="POST" enctype='multipart/form-data'>
							    @CSRF
								<div class="box-body"> 
								    <div class="form-group">
										<label for="exampleInputEmail1">Name <span style="color:red;">*</span></label>
										<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Name" value="{{ old('name') }}" required>
										@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email <span style="color:red;">*</span></label>
										<input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email"  value="{{ old('email') }}" required>
										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Mobile  <span style="color:red;">*</span></label>
										<input type="tel" name="mobile_no" oninput="validatePhoneNumber(this);" maxlength="10" class="form-control @error('mobile_no') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter mobile number"  value="{{ old('mobile_no') }}" required>
										@error('mobile_no')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Location <span style="color:red;">*</span></label>
										<input type="text" name="location" class="form-control @error('location') is-invalid @enderror" id="exampleInputEmail1" placeholder="Location" value="{{ old('location') }}" required> 
										@error('location')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Society Details <span style="color:red;">*</span></label>
										<input type="text" name="society_details" class="form-control @error('society_details') is-invalid @enderror" id="exampleInputEmail1" placeholder="Society Details" value="{{ old('society_details') }}" required> 
										@error('society_details')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
                                  
                                  	<div class="form-group">
										<label for="exampleInputEmail1">Society Number <span style="color:red;">*</span></label>
										<input type="text" name="society_number" class="form-control @error('society_number') is-invalid @enderror" id="exampleInputEmail1" placeholder="Society Number" value="{{ old('society_number') }}" required> 
										@error('society_number')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
                                  
                                  	<div class="form-group">
										<label for="exampleInputEmail1">Registration number <span style="color:red;">*</span></label>
										<input type="text" name="registration_number" class="form-control @error('registration_number') is-invalid @enderror" id="exampleInputEmail1" placeholder="Registration number" value="{{ old('registration_number') }}" required> 
										@error('registration_number')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">{{ __('Password') }} <span style="color:red;">*</span></label>
										<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="password-confirm">{{ __('Confirm Password') }} <span style="color:red;">*</span></label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" Placeholder="Confirm password" required autocomplete="new-password">
									</div>
									
									<input type="hidden" name="role" value="cooperative" >
									
									{{-- <div class="form-group">
										<label for="exampleInputEmail1">{{ __('Role') }} <span style="color:red;">*</span></label>
										<select name="role" class="form-control" required>
										    <option value="">-Select-</option>
										    <option value="admin" >Admin</option>
										    <option value="cooperative" >Cooperative</option>
										</select>
									</div> --}}
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
	</section><br>
@endsection
