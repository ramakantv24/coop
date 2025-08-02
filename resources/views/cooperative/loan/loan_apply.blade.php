@extends('cooperative/layouts.backend')
@section('title', 'Loan Apply')
@section('content')

	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Loan Apply</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('cooperative/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Loan Apply</li>
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
		<form role="form" action="{{ asset('cooperative/loan/apply') }}/{{ $loaninfo->id }}" method="GET" enctype='multipart/form-data'>
			@CSRF
          	<input type="hidden" name="id" value="{{ $loaninfo->id }}">
            <h3 class="mb-4">Terms and condtion</h3>
            <input type="checkbox" name="term_condition" value="Y" required>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
	
@endsection
