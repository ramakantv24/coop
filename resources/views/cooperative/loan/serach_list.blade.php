@extends('cooperative/layouts.backend')
@section('title', 'Search List')
@section('content')
@php
    use App\Models\Loanpurchase;
@endphp
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Search List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('cooperative/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Search List</li>
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
                      
                      	<form role="form" action="{{ asset('cooperative/loan/search/list') }}" method="GET" enctype='multipart/form-data'>
                          	@CSRF
                            <div class="form-row">
                              
                              	<div class="form-group col-md-3">
                                    <label for="pan">PAN/ADAHAR</label>
                                    <input type="text" name="search" class="form-control" id="search" placeholder="Enter Adhar or Pan Number" value="{{ app('request')->input('search') }}" >
                                </div>
                               
                              	<div class="form-group col-md-3">
                                  <label for="pan">&nbsp;</label><br>
                              	 <button type="submit" class="btn btn-primary">Search</button>
                              	 <a href="{{ url('/cooperative/loan/search/list') }}" class="btn btn-primary">Clear Search</a>
                                </div>
                            </div>
                        </form>
                      	@if(!empty(app('request')->input('search')))
                            @if(isset($loanlist))
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Dob</th>
                                        <th>Gender</th>
                                        <th>Mobile No</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Date</th>                                  	
                                        <th>Loan Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach($loanlist as $list)
                                            
                                             @php
                                                $loanpurchase = Loanpurchase::select('loan_purchase.*')->where('user_id', Auth::user()->id)->where('loan_id', $list->id)->first();
                                            @endphp
                                        
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $list->name }}</td>
                                                <td>{{ $list->dob }}</td>
                                                <td>{{ $list->gender }}</td>
                                                <td>{{ $list->mobile_no }}</td>
                                                <td>{{ $list->city }}</td>
                                                <td>{{ $list->state }}</td>                                          	
                                                <td>{{ $list->created_at }}</td>                                            
                                                <td>{{ $list->loan_status }}</td>
                                                <td>
                                                 @if(isset($loanpurchase) && ($loanpurchase->payment_status == 'C') && ($loanpurchase->code == 'PAYMENT_SUCCESS'))
                                                 
                                                        @php
                                                          	if(!empty($list->aadhaar_no)){
                                                          		$search = $list->aadhaar_no;
                                                          	}else{
                                                          		$search = $list->pan_no;
                                                            }
                                                        @endphp
                                                        <a href="{{ url('/cooperative/loan/download') }}/{{ $search }}" ><button type="button" class="btn download-btn"> <i class="fa fa-download" aria-hidden="true"></i> Download Loan</button></a>
            									@else
                                                        <form method="POST" action="{{ url('/phonepe') }}">
                                                        @csrf
                                                        
                                                            <input type="hidden" name="loan_id" value="{{ $list->id }}" >
                                                            <input type="hidden" name="search_data" value="{{ app('request')->input('search') }}" >
                                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                                                            <input type="hidden" name="email" value="{{ Auth::user()->email }}" >
                                                            <input type="hidden" name="mobile_no" value="{{ Auth::user()->mobile_no }}" >
                                                            
                                                            <button type="submit" class="btn view" >Pay</button>
                                                        </form>
                                                @endif
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>
                                        <th>Dob</th>
                                        <th>Gender</th>
                                        <th>Mobile No</th>
                                        <th>City</th>
                                        <th>State</th>
                                        <th>Date</th>                                  	
                                        <th>Loan Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            @endif
                      	@endif
						<script>
						  function validateDelete(){ 
							var confirms = confirm('Do you want to delete ?.');
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
