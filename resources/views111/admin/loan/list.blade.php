@extends('admin/layouts.backend')
@section('title', 'Loan')
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
					<li class="breadcrumb-item active">All Loan</li>
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
					<div class="col-lg-12 ">
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
						<div class="bg-white">

							<form role="form"  action="{{ asset('admin/loan/list') }}" method="GET" enctype='multipart/form-data'>
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

									<div class="form-group col-md-3">
										<label for="loan-amount">Loan Status</label>
										<select name="status" class="form-control" id="status">
											<option value="">--Select--</option>
											<option value="P" @if((app('request')->input('status') != '') && (app('request')->input('status') == 'P')) {{ 'Selected' }} @endif >Pending</option>
											<option value="C" @if((app('request')->input('status') != '') && (app('request')->input('status') == 'C')) {{ 'Selected' }} @endif >Complete</option>
											<option value="D" @if((app('request')->input('status') != '') && (app('request')->input('status') == 'D')) {{ 'Selected' }} @endif >Deleted</option>
										</select>
									</div>

									<div class="form-group col-md-3">
										<label for="pan">PAN CARD</label>
										<input type="text" name="pan_no" class="form-control" id="pan_no" placeholder="PAN CARD" value="{{ app('request')->input('pan_no') }}">

									</div>
									<div class="form-group col-md-3">
										<label for="aadhaar">Aadhaar CARD</label>
										<input type="text" name="aadhaar_no" class="form-control" id="aadhaar_no" placeholder="Aadhaar CARD" value="{{ app('request')->input('aadhaar_no') }}">
									</div>
									<div class="form-group col-md-3">
										<label for="aadhaar">&nbsp;</label><br>
										<button type="submit" class="btn btn-primary">Search</button>
										<a href="{{ url('/admin/loan/list') }}" class="btn btn-primary">Clear Search</a>
									</div>
								</div>
							</form>



							<a href="{{ asset('admin/loan/add')}}"><button type="button" class="btn btn-success">Add Loan</button></a>
							<a href="{{ asset('admin/loan/import')}}"><button type="button" class="btn btn-success">Upload Data</button></a>

						</div>
						<hr>
						<table id="example" class="table table-striped table-bordered mt-4 mb-3" style="width:100%">
							<thead>
								<tr>
									<th>SN</th>
									<th>Cooperative Number</th>
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
									<th>Status</th>
									<th>Date</th>
									<th>Update Date</th>
									<th class="w-20">Action</th>
								</tr>
							</thead>
							<tbody>
								@if(isset($loanlist))
								@php
								$i=1;
								@endphp
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
									<td>@if($list->status=='P'){{ 'Pending' }}@elseif($list->status=='C'){{ 'Complete' }}@else{{ 'Deleted' }} @endif</td>
									<td>{{ $list->created_at }}</td>
									<td>{{ $list->updated_at }}</td>
									<td>
										<a href="{{ url('/admin/loan/edit') }}/{{ $list->id }}"><button type="button" class="btn btn-success">Edit</button></a>
										<a href="{{ url('/admin/loan/delete') }}/{{ $list->id }}" onclick="return validateDelete(this);"><button type="button" class="btn btn-danger">Delete</button></a>

										@php
										if(!empty($list->aadhaar_no)){
										$search = $list->aadhaar_no;
										}else{
										$search = $list->pan_no;
										}
										@endphp

										<a href="{{ url('/admin/loan/download') }}/{{ $search }}"><button type="button" class="btn download-btn"> <i class="fa fa-download" aria-hidden="true"></i>
												Download Loan</button></a>
									</td>
								</tr>
								@php
								$i++;
								@endphp
								@endforeach
								@endif

							</tbody>
							<tfoot>
								<tr>
									<th>SN</th>
									<th>Loan Type</th>
									<th>Loan Amount</th>
									<th>Name</th>
									<th>Dob</th>
									<th>Gender</th>
									<th>Mobile No</th>
									<th>City</th>
									<th>State</th>
									<th>Loan Status</th>
									<th>Status</th>
									<th>Date</th>
									<th>Update Date</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
						{!! $loanlist->links() !!}
						<script>
							function validateDelete() {
								var confirms = confirm('Do you want to delete ?.');
								if (confirms == false) {
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