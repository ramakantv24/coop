@extends('admin/layouts.backend')
@section('title', 'Insurance')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Loan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">All Insurance</li>
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
						
						    <form role="form"  action="{{ asset('admin/insurance/list') }}" method="GET" enctype='multipart/form-data'>
								@CSRF
								<div class="form-row ">

									<div class="form-group col-md-3">
										<label for="pan">Start Date</label>
										<input type="date" name="start_date" class="form-control" id="start_date" placeholder="start date" value="{{ app('request')->input('start_date') }}">

									</div>
									<div class="form-group col-md-3">
										<label for="aadhaar">End Date</label>
										<input type="date" name="end_date" class="form-control" id="end_date" placeholder="end date" value="{{ app('request')->input('end_date') }}">
									</div>

									
									<div class="form-group col-md-4">
										<label for="aadhaar">&nbsp;</label><br>
										<button type="submit" class="btn btn-primary">Search</button>
										<a href="{{ url('/admin/insurance/list') }}" class="btn btn-primary">Clear Search</a>
										<a href="{{ url('/admin/insurance/list') }}?status=C" class="btn btn-primary">Completed List</a>
									</div>
								</div>
							</form>
						
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>SN</th>
                                    <th>Cooperative</th>
                                    <th>Cooperative Mobile Number</th>
									<th>Loan Type</th>
									<th>Loan Amount</th>
									<th>Name</th>
									<th>Dob</th>
									<th>Gender</th>
									<th>Mobile No</th>
									<th>City</th>
									<th>State</th>									                                 	
									<th>Loan Status</th>
                                    <th>Date</th> 
                                    <th>Update Date</th> 
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							   @if(isset($loanlist))
							        <?php
							            $i=1;
							        ?>
								    @foreach($loanlist as $list)
										<tr>
											<td>{{ $i }}</td>
                                            <td>{{ $list->society_number }}</td>
                                            <td>{{ $list->user_mobile_no }}</td>
											<td>{{ $list->loan_type }}</td>
											<td>{{ $list->loan_amount }}</td>
											<td>{{ $list->name }}</td>
											<td>{{ $list->dob }}</td>
											<td>{{ $list->gender }}</td>
											<td>{{ $list->mobile_no }}</td>
											<td>{{ $list->city }}</td>
											<td>{{ $list->state }}</td>               
											<td>{{ $list->loan_status }}</td>
                                            <td>{{ $list->created_at }}</td> 
                                            <td>{{ $list->updated_at }}</td>
											<td>
											    @if($list->insurance == 'Y')
												    <a href="{{ url('/admin/insurance/update') }}/{{ $list->id }}" onclick="return validateDelete(this);" ><button type="button" class="btn btn-success">Complete</button></a>
											    @else
											        <button type="button" class="btn btn-success">Completed</button>
											    @endif
											</td>
										</tr>
										<?php
    							            $i++;
    							        ?>
									@endforeach
								@endif
								
							</tbody>
							<tfoot>
								<tr>
									<th>SN</th>
                                    <th>Cooperative</th>
									<th>Loan Type</th>
									<th>Loan Amount</th>
									<th>Name</th>
									<th>Dob</th>
									<th>Gender</th>
									<th>Mobile No</th>
									<th>City</th>
									<th>State</th>                                	
									<th>Loan Status</th>
									<th>Date</th>  
                                   	<th>Update Date</th> 
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
						{!! $loanlist->links() !!}
						<script>
						  function validateDelete(){ 
							var confirms = confirm('Are you sure you want to complete insurance?.');
							if(confirms==false){
								return false;
							}
						  }
						</script>
					</div>		
				</div>
					
			</div>
		</div>
		</div>
	</section>
@endsection
