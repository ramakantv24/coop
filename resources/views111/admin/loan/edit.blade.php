@extends('admin/layouts.backend')
@section('title', 'Edit User')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

	<div class="bg-white mt-4 mb-5">
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
		<form role="form" action="{{ asset('admin/edit_loan_action') }}" method="POST" enctype='multipart/form-data'>
			@CSRF
			<input type="hidden" name="id" value="{{ $loaninfo->id }}">
            <h3 class="mb-4">Loan Details</h3>
            <div class="form-row">
              
              	<div class="form-group col-md-6">
                    <label for="loan-amount">Society No</label>
                    <input type="text" name="society_number" class="form-control @error('society_number') is-invalid @enderror" id="society_number" placeholder="Society No" value="{{ $loaninfo->society_number }}" required>
					@error('society_number')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
               
                <div class="form-group col-md-6">
                    <label>Loan Type</label>
                    <select name="loan_type" class="form-control @error('name') is-invalid @enderror" id="loan_type" required>
                        <option value="">--Select--</option>
                        <option value="AGRICULTURE" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'AGRICULTURE')) {{ 'Selected' }} @endif >AGRICULTURE</option>
                        <option value="BUSINESS" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'BUSINESS')) {{ 'Selected' }} @endif >BUSINESS</option>
                        <option value="EDUCATION" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'EDUCATION')) {{ 'Selected' }} @endif >EDUCATION</option>
                        <option value="GOLD" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'GOLD')) {{ 'Selected' }} @endif >GOLD</option>
                        <option value="HOUSING" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'HOUSING')) {{ 'Selected' }} @endif >HOUSING</option>
                        <option value="MICROFINANCE" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'MICROFINANCE')) {{ 'Selected' }} @endif >MICROFINANCE</option>
                        <option value="MORTGAGE" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'MORTGAGE')) {{ 'Selected' }} @endif >MORTGAGE</option>
                        <option value="PERSONAL" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'PERSONAL')) {{ 'Selected' }} @endif >PERSONAL</option>
                        <option value="VECHICLE" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'VECHICLE')) {{ 'Selected' }} @endif >VECHICLE</option>
                        <option value="UNSECURED LOAN" @if(!empty($loaninfo->loan_type) && ($loaninfo->loan_type == 'UNSECURED LOAN')) {{ 'Selected' }} @endif >UNSECURED LOAN</option>
                    </select>
					@error('loan_type')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>

                <div class="form-group col-md-6">
                    <label for="loan-amount">Total Loan Amount</label>
                    <input type="text" name="loan_amount" class="form-control @error('loan_amount') is-invalid @enderror" id="loan_amount" placeholder="Total Loan Amount" value="{{ $loaninfo->loan_amount }}" required>
					@error('loan_amount')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
              	@php
                    if(!empty($loaninfo->loan_date)){
              			$loan_date = date("Y-m-d", strtotime($loaninfo->loan_date));
              		}else{
              			$loan_date = '';
              		}
              	@endphp
                <div class="form-group col-md-6">
                    <label for="loan-date">Loan Date </label>
                    <input type="date" name="loan_date" class="form-control @error('loan_date') is-invalid @enderror" id="loan-date" value="{{ $loan_date }}">
					@error('loan_date')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="loan-balance">Loan Balance Amount </label>
                    <input type="text" name="loan_balance_amount" class="form-control @error('loan_balance_amount') is-invalid @enderror" id="loan_balance_amount" placeholder="Loan Balance Amount" value="{{ $loaninfo->loan_balance_amount }}" >
					@error('loan_balance_amount')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
              	@php
                    if(!empty($loaninfo->loan_balance_as_date)){
              			$loan_balance_as_date = date("Y-m-d", strtotime($loaninfo->loan_balance_as_date));
              		}else{
              			$loan_balance_as_date = '';
              		}
              	@endphp
                <div class="form-group col-md-6">
                    <label for="loan-balance-amt">Loan Balance Amount AS on Date </label>
                    <input type="date" name="loan_balance_as_date" class="form-control @error('loan_balance_as_date') is-invalid @enderror" id="loan_balance_as_date" value="{{ $loan_balance_as_date }}">
					@error('loan_balance_as_date')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
              
              	<div class="form-group col-md-6">
                    <label for="loan-balance">Loan Account Number </label>
                    <input type="text" name="loan_account_number" class="form-control @error('loan_account_number') is-invalid @enderror" id="loan_account_number" placeholder="Loan Account Number" value="{{ $loaninfo->loan_account_number }}" >
					@error('loan_account_number')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
              
              	<div class="form-group col-md-6">
                    <label for="loan-amount">No of months due</label>
                    <input type="text" name="no_of_months_due" class="form-control @error('no_of_months_due') is-invalid @enderror" id="no_of_months_due" placeholder="No of months due" value="{{ $loaninfo->no_of_months_due }}" required>
					@error('no_of_months_due')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
              
                <div class="form-group col-md-6">
                    <label for="">Loan Status</label>
                    <br>
                    <div class="form-check  form-check-inline">
                        <input class="form-check-input" type="radio" name="loan_status" id="open" value="ACTIVE"
                            @if(!empty($loaninfo->loan_status) && ($loaninfo->loan_status == 'ACTIVE')) {{ 'Checked' }} @endif >
                        <label class="form-check-label" for="open">
                            ACTIVE
                        </label>
                    </div>
                    <div class="form-check  form-check-inline">
                        <input class="form-check-input" type="radio" name="loan_status" id="close" value="CLOSE" @if(!empty($loaninfo->loan_status) && ($loaninfo->loan_status == 'CLOSE')) {{ 'Checked' }} @endif >
                        <label class="form-check-label" for="close">
                            CLOSE
                        </label>
                    </div>
					
					<div class="form-check  form-check-inline">
                        <input class="form-check-input" type="radio" name="loan_status" id="on_hold" value="On Hold" @if(!empty($loaninfo->loan_status) && ($loaninfo->loan_status == 'On Hold')) {{ 'Checked' }} @endif >
                        <label class="form-check-label" for="close">
                            On Hold
                        </label>
                    </div>
                </div>

            </div>
            <hr>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ $loaninfo->name }}" >
					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
               @php
              		if(!empty($loaninfo->dob)){
              			$dob = date("Y-m-d", strtotime($loaninfo->dob));
              		}else{
              			$dob = '';
              		}
              	@endphp
                <div class="form-group col-md-6">
                    <label for="dob">Date Of Birth </label>
                    <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" value="{{ $dob }}">
					@error('dob')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Gender</label>
                    <select name="gender" class="form-control @error('gender') is-invalid @enderror" id="gender">
                        <option value="">--Select-- </option>
                        <option value="Male" @if(!empty($loaninfo->gender) && ($loaninfo->gender == 'Male')) {{ 'Selected' }} @endif >Male </option>
                        <option value="Female" @if(!empty($loaninfo->gender) && ($loaninfo->gender == 'Female')) {{ 'Selected' }} @endif>Female </option>
                    </select>
					@error('gender')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pan">PAN CARD</label>
                    <input type="text" name="pan_no" class="form-control @error('pan_no') is-invalid @enderror" id="pan_no" placeholder="PAN CARD" value="{{ $loaninfo->pan_no }}" >
					@error('pan_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="aadhaar">Aadhaar CARD</label>
                    <input type="text" name="aadhaar_no" class="form-control @error('aadhaar_no') is-invalid @enderror" id="aadhaar_no" placeholder="Aadhaar CARD" value="{{ $loaninfo->aadhaar_no }}" >
					@error('aadhaar_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" name="mobile_no" oninput="validatePhoneNumber(this);" maxlength="10" class="form-control @error('mobile_no') is-invalid @enderror" id="mobile_no" placeholder="MOBILE CARD" value="{{ $loaninfo->mobile_no }}" >
					@error('mobile_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="add">Address</label>
                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Address" value="{{ $loaninfo->address }}" >
					@error('address')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pin">Pin code</label>
                    <input type="text" name="pin_code" class="form-control @error('pin_code') is-invalid @enderror" id="pin_code" placeholder="Pin Code" value="{{ $loaninfo->pin_code }}" >
					@error('pin_code')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                     <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" id="city" placeholder="City" value="{{ $loaninfo->city }}" >
					@error('city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="taluka">Taluka</label>
                    <input type="text" name="taluka" class="form-control @error('taluka') is-invalid @enderror" id="taluka" placeholder="Taluka" value="{{ $loaninfo->taluka }}" >
					@error('city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="dist">District</label>
                    <input type="text" name="district" class="form-control @error('district') is-invalid @enderror" id="district" placeholder="District" value="{{ $loaninfo->district }}" >
					@error('district')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <input type="text" name="state" class="form-control @error('state') is-invalid @enderror" id="state" placeholder="State" value="{{ $loaninfo->state }}" >
					@error('state')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>


            </div>
            <hr>
            <h4 class="mb-4">Coborrower Details
            </h4>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="coborrower_name" class="form-control @error('coborrower_name') is-invalid @enderror" id="coborrower_name" placeholder="Name" value="{{ $loaninfo->coborrower_name }}" >
					@error('coborrower_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
               @php
                    if(!empty($loaninfo->coborrower_dob)){
              			$coborrower_dob = date("Y-m-d", strtotime($loaninfo->coborrower_dob));
              		}else{
              			$coborrower_dob = '';
              		}
              	@endphp
                <div class="form-group col-md-6">
                    <label for="dob">Date Of Birth </label>
                    <input type="date" name="coborrower_dob" class="form-control @error('coborrower_dob') is-invalid @enderror" id="coborrower_dob" value="{{ $coborrower_dob }}">
					@error('coborrower_dob')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Gender</label>
                    <select name="coborrower_gender" class="form-control @error('coborrower_gender') is-invalid @enderror" id="coborrower_gender">
                        <option value="">--Select-- </option>
                        <option value="Male" @if(!empty($loaninfo->coborrower_gender) && ($loaninfo->coborrower_gender == 'Male')) {{ 'Selected' }} @endif >Male </option>
                        <option value="Female" @if(!empty($loaninfo->coborrower_gender) && ($loaninfo->coborrower_gender == 'Female')) {{ 'Selected' }} @endif>Female </option>
                    </select>
					@error('coborrower_gender')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pan">PAN CARD</label>
                    <input type="text" name="coborrower_pan_no" class="form-control @error('coborrower_pan_no') is-invalid @enderror" id="coborrower_pan_no" placeholder="PAN CARD" value="{{ $loaninfo->coborrower_pan_no }}" >
					@error('coborrower_pan_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="aadhaar">Aadhaar CARD</label>
                    <input type="text" name="coborrower_aadhaar_no" class="form-control @error('coborrower_aadhaar_no') is-invalid @enderror" id="coborrower_aadhaar_no" placeholder="Aadhaar CARD" value="{{ $loaninfo->coborrower_aadhaar_no }}" >
					@error('coborrower_aadhaar_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" name="coborrower_mobile_no" oninput="validatePhoneNumber(this);" maxlength="10" class="form-control @error('coborrower_mobile_no') is-invalid @enderror" id="coborrower_mobile_no" placeholder="MOBILE CARD" value="{{ $loaninfo->coborrower_mobile_no }}" >
					@error('coborrower_mobile_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="add">Address</label>
                    <input type="text" name="coborrower_address" class="form-control @error('coborrower_address') is-invalid @enderror" id="coborrower_address" placeholder="Address" value="{{ $loaninfo->coborrower_address }}" >
					@error('coborrower_address')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pin">Pin code</label>
                    <input type="text" name="coborrower_pin_code" class="form-control @error('coborrower_pin_code') is-invalid @enderror" id="coborrower_pin_code" placeholder="Pin Code" value="{{ $loaninfo->coborrower_pin_code }}" >
					@error('coborrower_pin_code')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                     <input type="text" name="coborrower_city" class="form-control @error('coborrower_city') is-invalid @enderror" id="coborrower_city" placeholder="City" value="{{ $loaninfo->coborrower_city }}" >
					@error('coborrower_city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="taluka">Taluka</label>
                    <input type="text" name="coborrower_taluka" class="form-control @error('coborrower_taluka') is-invalid @enderror" id="coborrower_taluka" placeholder="Taluka" value="{{ $loaninfo->coborrower_taluka }}" >
					@error('coborrower_city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="dist">District</label>
                    <input type="text" name="coborrower_district" class="form-control @error('coborrower_district') is-invalid @enderror" id="coborrower_district" placeholder="District" value="{{ $loaninfo->district }}" >
					@error('coborrower_district')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <input type="text" name="coborrower_state" class="form-control @error('coborrower_state') is-invalid @enderror" id="coborrower_state" placeholder="State" value="{{ $loaninfo->coborrower_state }}" >
					@error('coborrower_state')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
            </div>

            <hr>
            <h4 class="mb-4">Guarantor-1 Details </h4>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="guarantor1_name" class="form-control @error('guarantor1_name') is-invalid @enderror" id="guarantor1_name" placeholder="Name" value="{{ $loaninfo->guarantor1_name }}" >
					@error('guarantor1_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                @php
              		if(!empty($loaninfo->guarantor1_dob)){
              			$guarantor1_dob = date("Y-m-d", strtotime($loaninfo->guarantor1_dob));
              		}else{
              			$guarantor1_dob = '';
              		}
              	@endphp
                <div class="form-group col-md-6">
                    <label for="dob">Date Of Birth </label>
                    <input type="date" name="guarantor1_dob" class="form-control @error('guarantor1_dob') is-invalid @enderror" id="guarantor1_dob" value="{{ $guarantor1_dob }}">
					@error('guarantor1_dob')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Gender</label>
                    <select name="guarantor1_gender" class="form-control @error('guarantor1_gender') is-invalid @enderror" id="guarantor1_gender">
                        <option value="">--Select-- </option>
                        <option value="Male" @if(!empty($loaninfo->guarantor1_gender) && ($loaninfo->guarantor1_gender == 'Male')) {{ 'Selected' }} @endif >Male </option>
                        <option value="Female" @if(!empty($loaninfo->guarantor1_gender) && ($loaninfo->guarantor1_gender == 'Female')) {{ 'Selected' }} @endif>Female </option>
                    </select>
					@error('guarantor1_gender')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pan">PAN CARD</label>
                    <input type="text" name="guarantor1_pan_no" class="form-control @error('guarantor1_pan_no') is-invalid @enderror" id="guarantor1_pan_no" placeholder="PAN CARD" value="{{ $loaninfo->guarantor1_pan_no }}" >
					@error('guarantor1_pan_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="aadhaar">Aadhaar CARD</label>
                    <input type="text" name="guarantor1_aadhaar_no" class="form-control @error('guarantor1_aadhaar_no') is-invalid @enderror" id="guarantor1_aadhaar_no" placeholder="Aadhaar CARD" value="{{ $loaninfo->guarantor1_aadhaar_no }}" >
					@error('guarantor1_aadhaar_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" name="guarantor1_mobile_no" oninput="validatePhoneNumber(this);" maxlength="10" class="form-control @error('guarantor1_mobile_no') is-invalid @enderror" id="guarantor1_mobile_no" placeholder="MOBILE CARD" value="{{ $loaninfo->guarantor1_mobile_no }}" >
					@error('guarantor1_mobile_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="add">Address</label>
                    <input type="text" name="guarantor1_address" class="form-control @error('guarantor1_address') is-invalid @enderror" id="guarantor1_address" placeholder="Address" value="{{ $loaninfo->guarantor1_address }}" >
					@error('guarantor1_address')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pin">Pin code</label>
                    <input type="text" name="guarantor1_pin_code" class="form-control @error('guarantor1_pin_code') is-invalid @enderror" id="guarantor1_pin_code" placeholder="Pin Code" value="{{ $loaninfo->guarantor1_pin_code }}" >
					@error('guarantor1_pin_code')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                     <input type="text" name="guarantor1_city" class="form-control @error('guarantor1_city') is-invalid @enderror" id="guarantor1_city" placeholder="City" value="{{ $loaninfo->guarantor1_city }}" >
					@error('guarantor1_city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="taluka">Taluka</label>
                    <input type="text" name="guarantor1_taluka" class="form-control @error('guarantor1_taluka') is-invalid @enderror" id="guarantor1_taluka" placeholder="Taluka" value="{{ $loaninfo->guarantor1_taluka }}" >
					@error('guarantor1_taluka')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="dist">District</label>
                    <input type="text" name="guarantor1_district" class="form-control @error('guarantor1_district') is-invalid @enderror" id="guarantor1_district" placeholder="District" value="{{ $loaninfo->guarantor1_district }}" >
					@error('guarantor1_district')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <input type="text" name="guarantor1_state" class="form-control @error('guarantor1_state') is-invalid @enderror" id="guarantor1_state" placeholder="State" value="{{ $loaninfo->guarantor1_state }}" >
					@error('guarantor1_state')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
            </div>
            <hr>
            <h4 class="mb-4">Guarantor-2 Details </h4>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="guarantor2_name" class="form-control @error('guarantor2_name') is-invalid @enderror" id="guarantor2_name" placeholder="Name" value="{{ $loaninfo->guarantor2_name }}" >
					@error('guarantor2_name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                @php
              		if(!empty($loaninfo->guarantor2_dob)){
              			$guarantor2_dob = date("Y-m-d", strtotime($loaninfo->guarantor2_dob));
              		}else{
              			$guarantor2_dob = '';
              		}
              		
              	@endphp
                <div class="form-group col-md-6">
                    <label for="dob">Date Of Birth </label>
                    <input type="date" name="guarantor2_dob" class="form-control @error('guarantor2_dob') is-invalid @enderror" id="guarantor2_dob" value="{{ $guarantor2_dob }}">
					@error('guarantor2_dob')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label>Gender</label>
                    <select name="guarantor2_gender" class="form-control @error('guarantor2_gender') is-invalid @enderror" id="guarantor2_gender">
                        <option value="">--Select-- </option>
                        <option value="Male" @if(!empty($loaninfo->guarantor2_gender) && ($loaninfo->guarantor2_gender == 'Male')) {{ 'Selected' }} @endif >Male </option>
                        <option value="Female" @if(!empty($loaninfo->guarantor2_gender) && ($loaninfo->guarantor2_gender == 'Female')) {{ 'Selected' }} @endif>Female </option>
                    </select>
					@error('guarantor2_gender')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pan">PAN CARD</label>
                    <input type="text" name="guarantor2_pan_no" class="form-control @error('guarantor2_pan_no') is-invalid @enderror" id="guarantor1_pan_no" placeholder="PAN CARD" value="{{ $loaninfo->guarantor1_pan_no }}" >
					@error('guarantor1_pan_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="aadhaar">Aadhaar CARD</label>
                    <input type="text" name="guarantor2_aadhaar_no" class="form-control @error('guarantor2_aadhaar_no') is-invalid @enderror" id="guarantor2_aadhaar_no" placeholder="Aadhaar CARD" value="{{ $loaninfo->guarantor2_aadhaar_no }}" >
					@error('guarantor2_aadhaar_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="mobile">Mobile Number</label>
                    <input type="tel" name="guarantor2_mobile_no" oninput="validatePhoneNumber(this);" maxlength="10" class="form-control @error('guarantor2_mobile_no') is-invalid @enderror" id="guarantor2_mobile_no" placeholder="MOBILE CARD" value="{{ $loaninfo->guarantor2_mobile_no }}" >
					@error('guarantor2_mobile_no')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="add">Address</label>
                    <input type="text" name="guarantor2_address" class="form-control @error('guarantor2_address') is-invalid @enderror" id="guarantor2_address" placeholder="Address" value="{{ $loaninfo->guarantor2_address }}" >
					@error('guarantor2_address')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="pin">Pin code</label>
                    <input type="text" name="guarantor2_pin_code" class="form-control @error('guarantor2_pin_code') is-invalid @enderror" id="guarantor2_pin_code" placeholder="Pin Code" value="{{ $loaninfo->guarantor2_pin_code }}" >
					@error('guarantor2_pin_code')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                     <input type="text" name="guarantor2_city" class="form-control @error('guarantor2_city') is-invalid @enderror" id="guarantor2_city" placeholder="City" value="{{ $loaninfo->guarantor2_city }}" >
					@error('guarantor2_city')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="taluka">Taluka</label>
                    <input type="text" name="guarantor2_taluka" class="form-control @error('guarantor2_taluka') is-invalid @enderror" id="guarantor2_taluka" placeholder="Taluka" value="{{ $loaninfo->guarantor2_taluka }}" >
					@error('guarantor2_taluka')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="dist">District</label>
                    <input type="text" name="guarantor2_district" class="form-control @error('guarantor2_district') is-invalid @enderror" id="guarantor2_district" placeholder="District" value="{{ $loaninfo->guarantor2_district }}" >
					@error('guarantor2_district')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="state">State</label>
                    <input type="text" name="guarantor2_state" class="form-control @error('guarantor2_state') is-invalid @enderror" id="guarantor2_state" placeholder="State" value="{{ $loaninfo->guarantor2_state }}" >
					@error('guarantor2_state')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>

            </div>
            <hr>
            <h4 class="mb-4">Case Details </h4>
            <div class="form-row">
                @php
              		if(!empty($loaninfo->case_filed_on)){
              			$case_filed_on = date("Y-m-d", strtotime($loaninfo->case_filed_on));
              		}else{
              			$case_filed_on = '';
              		}
              		
              	@endphp
                <div class="form-group col-md-6">
                    <label for="filed">Case Filed On </label>
                    <input type="date" name="case_filed_on" class="form-control @error('case_filed_on') is-invalid @enderror" id="case_filed_on" placeholder="Case Filed On" value="{{ $case_filed_on }}" >
					@error('case_filed_on')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="order_no">Recovery Order Number </label>
                    <input type="text" name="recovery_order_number" class="form-control @error('recovery_order_number') is-invalid @enderror" id="recovery_order_number" placeholder="Recovery Order Number" value="{{ $loaninfo->recovery_order_number }}" >
					@error('recovery_order_number')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                @php
              		if(!empty($loaninfo->recovery_order_date)){
              			$recovery_order_date = date("Y-m-d", strtotime($loaninfo->recovery_order_date));
              		}else{
              			$recovery_order_date = '';
              		}
              		
              	@endphp
                <div class="form-group col-md-6">
                    <label for="order-date">Recovery Order Date </label>
					<input type="date" name="recovery_order_date" class="form-control @error('recovery_order_date') is-invalid @enderror" id="recovery_order_date" placeholder="Recovery Order Date" value="{{ $recovery_order_date }}" >
					@error('recovery_order_date')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="authority">Recovery Order Authority </label>
                    <input type="text" name="recovery_order_authority" class="form-control @error('recovery_order_authority') is-invalid @enderror" id="recovery_order_authority" placeholder="Recovery Order Authority" value="{{ $loaninfo->recovery_order_authority }}" >
					@error('recovery_order_authority')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="order-amount">Recovery Order Amount </label>
                    <input type="text" name="recovery_order_amount" class="form-control @error('recovery_order_amount') is-invalid @enderror" id="recovery_order_amount" placeholder="Recovery Order Amount" value="{{ $loaninfo->recovery_order_amount }}" >
					@error('recovery_order_amount')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
                </div>             
            </div>
          	 <div class="form-group col-md-6">
                    <label for="order-amount">Status </label>
          			<select name="status" class="form-control @error('status') is-invalid @enderror" id="status" >
                        <option value="">--Select--</option>
                        <option value="P" @if(!empty($loaninfo->status) && ($loaninfo->status == 'P')) {{ 'Selected' }} @endif >Pending</option>
                        <option value="C" @if(!empty($loaninfo->status) && ($loaninfo->status == 'C')) {{ 'Selected' }} @endif >Complete</option>
                    </select>
					@error('status')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
            </div>
            <button type="submit" class="btn btn-primary">Save & Change</button>
        </form>
    </div>
@endsection
