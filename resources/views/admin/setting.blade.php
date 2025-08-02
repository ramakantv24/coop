@extends('admin/layouts.backend')
@section('title', 'Setting')
@section('content')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	
	 <!-- Main content -->
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
							<form role="form" action="{{ asset('admin/global_setting_action') }}" method="POST"  enctype="multipart/form-data" > 
							    @CSRF
								@if(isset($settingInfo->id))
								   <input type="hidden" name="setting_id" value="{{ $settingInfo->id }}" required>
								@endif
								<div class="box-body">
								    <div class="form-group">
										<label for="exampleInputEmail1">loan search price</label>
										@if(isset($settingInfo->loan_search_price))
										   <input type="text" name="loan_search_price" class="form-control" id="exampleInputEmail1" placeholder="Enter loan search price.." value="{{ $settingInfo->loan_search_price }}">
									    @else
											<input type="text" name="loan_search_price" class="form-control" id="exampleInputEmail1" placeholder="Enter loan search price..">
										@endif
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
