@extends('admin/layouts.backend')

@section('title', 'Course')

@section('content')

<style>
	.accordion .card-header {
		/* background: #f3f4f6; */
		padding: 7px;
	}

	.accordion .card {
		box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
		margin-bottom: 10px;
	}

	.accordion .btn-link {
		color: #111;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.card-body .btn-danger {
		background-color: #ef4444;
	}
	.card-body .table td, 
	.card-body .table th {
		font-size: 16px;
	}
</style>

<div class="content-header">

	<div class="container-fluid">

		<div class="row mb-2">

			<div class="col-sm-6">

				<h1 class="m-0">All Course</h1>

			</div><!-- /.col -->

			<div class="col-sm-6">

				<ol class="breadcrumb float-sm-right">

					<li class="breadcrumb-item"><a href="{{ asset('admin/dashboard') }}">Home</a></li>

					<li class="breadcrumb-item active">All Course1</li>

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

						<a href="{{ asset('admin/course/add')}}"><button type="button" class="btn btn-success">Add Course</button></a>

						<table id="example" class="table table-striped table-bordered mt-4" style="width:100%">

							<thead>

								<tr>

									<th>SN</th>

									<th>Title</th>

									<th>Video Link</th>

									<th>Status</th>

									<th>Date</th>

									<th>Action</th>

								</tr>

							</thead>

							<tbody>

								@if(isset($courselist))
								
                                @php
							            $i=1;
							        @endphp
								@foreach($courselist as $list)

								<tr>

									<td>{{ $i }}</td>

									<td>{{ $list->title }}</td>

									<td>{{ $list->video_link }}</td>

									<td>@if($list->status == 'E') {{ 'Enable' }} @else {{ 'Disable' }} @endif</td>

									<td>{{ $list->created_at }}</td>

									<td>

										<a href="{{ url('/admin/course/edit') }}/{{ $list->id }}"><button type="button" class="btn btn-success">Edit</button></a>

										<a href="{{ url('/admin/course/delete') }}/{{ $list->id }}" onclick="return validateDelete(this);"><button type="button" class="btn btn-danger">Delete</button></a>

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

									<th>Title</th>

									<th>Video Link</th>

									<th>Status</th>

									<th>Date</th>

									<th>Action</th>

								</tr>

							</tfoot>

						</table>
						{!! $courselist->links('vendor.pagination.bootstrap-5') !!}
						

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

	<!-- <div class="accordion" id="accordionExample">
		<div class="card">
			<div class="card-header" id="headingOne">
				<div class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					<span>Title 1</span>
					<span><button type="button" class="btn btn-danger">Delete</button></span>
				</div>
			</div>

			<div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<table class="table ">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Course Name</th>
								<th scope="col">Manage</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Chapter 1 Name</td>
								<td>
									<button type="button" class="btn btn-success"><i class="fas fa-edit"></i> EDIT CHAPTER </button>
									<button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> DELTE</button>
								</td>
							</tr>
							<tr>
								<th scope="row">1</th>
								<td>Chapter 1 Name</td>
								<td>
									<button type="button" class="btn btn-success"><i class="fas fa-edit"></i> EDIT CHAPTER </button>
									<button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> DELTE</button>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingTwo">
				<div class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					<span>Title 1</span>
					<span><button type="button" class="btn btn-danger">Delete</button></span>
				</div>
			</div>
			<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
				<div class="card-body">
					<table class="table ">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Course Name</th>
								<th scope="col">Manage</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Chapter 1 Name</td>
								<td>
									<button type="button" class="btn btn-success"><i class="fas fa-edit"></i> EDIT CHAPTER </button>
									<button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> DELTE</button>
								</td>
							</tr>
							<tr>
								<th scope="row">1</th>
								<td>Chapter 1 Name</td>
								<td>
									<button type="button" class="btn btn-success"><i class="fas fa-edit"></i> EDIT CHAPTER </button>
									<button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> DELTE</button>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header" id="headingThree">
				<div class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					<span>Title 1</span>
					<span><button type="button" class="btn btn-danger">Delete</button></span>
				</div>
			</div>
			<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
				<div class="card-body">
					<table class="table ">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Course Name</th>
								<th scope="col">Manage</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Chapter 1 Name</td>
								<td>
									<button type="button" class="btn btn-success"><i class="fas fa-edit"></i> EDIT CHAPTER </button>
									<button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> DELTE</button>
								</td>
							</tr>
							<tr>
								<th scope="row">1</th>
								<td>Chapter 1 Name</td>
								<td>
									<button type="button" class="btn btn-success"><i class="fas fa-edit"></i> EDIT CHAPTER </button>
									<button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i> DELTE</button>
								</td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div> -->

</section>

@endsection