@extends('admin/layouts.backend')
@section('title', 'Transaction List')
@section('content')

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Transaction List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Transaction List</li>
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
                      
                      
                       <table class="table table-hover ">
                      <thead>
                        <tr>
                          <th scope="col">SN</th>
                          <th scope="col">User</th>
                          <th scope="col">User Mobile</th>
                          <th scope="col">transactionId</th>
                          <th scope="col">providerReferenceId</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Status Code</th>
                          <th scope="col">Created at</th>
                          <!-- <th scope="col">Action</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        @if(isset($transactionlist))
                            @php
                                $i=1;
                            @endphp
                            @foreach($transactionlist as $list)
                                @php
                                    if(empty($list->code)){
                                        continue;
                                    }
                                @endphp
                                <tr>
                                  <th scope="row">{{ $i }}</th>
                                  <td>{{ $list->user_name }}</td>
								   <td>{{ $list->user_mobile_no }}</td>
                                  <td>{{ $list->transactionId }}</td>
                                  <td>{{ $list->providerReferenceId }}</td>
                                  <td>{{ $list->amount }}</td>
                                  <td>{{ $list->code }}</td>
                                   <td>{{ $list->updated_at }}</td>
                                   <td>
                                       <a href="{{ url('/admin/download-loan-receipt') }}/{{ $list->id }}" ><button type="button" class="btn download-btn"> <i class="fa fa-download" aria-hidden="true"></i> Download Receipt</button></a>
                                   </td> 
                                </tr>
                            @php
                                $i++;
                            @endphp
                            @endforeach
                        @endif
                      </tbody>
                    </table>
                      
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
