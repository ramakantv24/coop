@extends('cooperative/layouts.backend')
@section('title', 'Import')
@section('content')
	<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Import</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('cooperative/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Import</li>
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
							
							
							 <div class="tab-content" id="pills-tabContent p-3">								
							   <form role="form" action="{{ asset('cooperative/loan_import_action') }}" method="POST" enctype='multipart/form-data'>
								@CSRF
									
									<div class="col-12">
										<div class="stadium-gallery-container pt-0">
											<fieldset class="form-group">
												<label for="pro-image">Loan File</label>
												<input type="file" id="pro-image" class="form-control" name="loan_file" required  />
											</fieldset>												
										</div>
									</div>
									
									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Upload</button>
                                      	<a href="{{ asset('public/uploads/csv_file/Sample_CSV_file.csv') }}" class="btn btn-primary">Download Sample CSV File </a>
									</div>
								</form>	
                               
                               
                               <table id="example" class="table table-striped table-bordered mt-4" style="width:100%">
							<thead>
								<tr>
									<th>SN</th>
									<th>Loan File</th>
                                    <th>Status</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							   @if(isset($loanfile))
                              		@php
                              			$i=1;
                              		@endphp
								    @foreach($loanfile as $list)
										<tr>
											<td>{{ $i }}</td>
											<td><a  href="{{ asset('public/uploads/csv_file') }}/{{ $list->loan_file }}">{{ $list->loan_file }}</a></td>
                                          	<td>
                                              @if($list->status=='1')
                                                {{ 'Complete' }}
                                              @else
                                              	{{ 'Pending' }}
                                              @endif
                                          	</td>
											<td>{{ $list->created_at }}</td>
											<td>
                                              <a href="{{ url('/cooperative/loan/import/delete') }}/{{ $list->id }}" onclick="return validateDelete(this);"><button type="button" class="btn btn-danger">Delete</button></a>
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
									<th>Loan File</th>
                                    <th>Status</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</tfoot>
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
						<!-- /.box -->
					</div>
				</div>
					
			</div>
		</div>
		</div>
	</section>
	
@endsection
