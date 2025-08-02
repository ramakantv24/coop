@extends('admin/layouts.backend')
@section('title', 'Testimonials List')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Testimonial</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">All Testimonial</li>
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
                      
                      	
                      
						<a href="{{ asset('admin/testimonial/add')}}"><button type="button" class="btn btn-success">Add Testimonial</button></a>
						<table id="example" class="table table-striped table-bordered mt-4" style="width:100%">
							<thead>
								<tr>
								    <th>SN</th>
									<th>Name</th>
									<th>Designation</th>
									<th>Description</th>
									<th>Image</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							   @if(isset($testimoniallist) && count($testimoniallist) > 0	)
							        @php
							            $i=1;
							        @endphp
								    @foreach($testimoniallist as $list)
										<tr>
										    <td>{{ $i }}</td>
											<td>{{ $list->name }}</td>
											<td>{{ $list->designation }}</td>
											<td>{{ $list->description }}</td>
											<td><img src="{{ asset('public/uploads/testimonial/'.$list->image) }}" alt="Testimonial Image" style="width: 100px; height: 100px;"></td>
											<td>{{ $list->created_at }}</td>
											<td><a href="{{ url('/admin/testimonial/edit') }}/{{ $list->id }}"><button type="button" class="btn btn-success">Edit</button></a>
												 <a href="{{ url('/admin/testimonial/delete') }}/{{ $list->id }}" onclick="return validateDelete(this);"><button type="button" class="btn btn-danger">Delete</button></a>
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
									<th>Name</th>
									<th>Designation</th>
									<th>Description</th>
									<th>Image</th>
									<th>Date</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
						{!! $testimoniallist->links('vendor.pagination.bootstrap-5') !!}
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
