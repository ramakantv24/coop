@extends('admin/layouts.backend')
@section('title', 'Download Reports')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Download Reports</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Download Reports</li>
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
					<div class="col-lg-12">
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
						
                      
                      <form role="form" action="{{ asset('admin/reports/download/excel') }}" method="GET" enctype='multipart/form-data'>
                          	@CSRF
                            <div class="form-row">
                              
                              <div class="form-group col-md-3">
                                <label for="pan">Start Date</label>
                                <input type="date" name="start_date" class="form-control" id="start_date" placeholder="start date" value="{{ app('request')->input('start_date') }}" >
                              </div>
                              <div class="form-group col-md-3">
                                <label for="aadhaar">End Date</label>
                                <input type="date" name="end_date" class="form-control" id="end_date" placeholder="end date" value="{{ app('request')->input('end_date') }}" >
                              </div>
                              <div class="form-group col-md-3">
                                <label for="aadhaar">Type</label>
                                <select name="type" class="form-control">
                                  	<option value="Cooperative">Cooperative</option>
                                  	<option value="User">User</option>
                                  	<option value="Loan">Loan</option>
                                  	<option value="Insurance">Insurance</option>
                                </select>
                              </div>
                              
                               	<div class="form-group col-md-3">
                                  <label for="aadhaar">&nbsp;</label><br>
                              	 <button type="submit" class="btn btn-primary">Download Csv</button>
                                 </div>
                            </div>
                        </form>
                      
                      
					</div>		
				</div>
					
			</div>
		</div>
		</div>
	</section>
@endsection
