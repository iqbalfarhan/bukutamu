@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')

@php
	$no = 1;
@endphp

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header bg-transparent">
					<div class="row align-items-center">
						<div class="col">
							<h6 class="text-uppercase text-muted ls-1 mb-1">Users</h6>
							<h2 class="mb-0">Users Details</h2>
						</div>
						<div class="col text-right">
							<a href="#!" class="btn btn-sm btn-primary">See all</a>
						</div>
					</div>
				</div>
				<div class="card-header">
					<table border="0" cellpadding="10">
						<tr>
							<th>Name</th>
							<th>:</th>
							<td>{{ $data->name }}</td>
						</tr>
						<tr>
							<th>Userneme/NIK</th>
							<th>:</th>
							<td>{{ $data->username }}</td>
						</tr>
						<tr>
							<th>Account Type</th>
							<th>:</th>
							<td>{{ $data->jenis }}</td>
						</tr>
					</table>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col">
							<table class="table table-sm">
								<thead class="table-light">
									<th>No</th>
									<th>Application name</th>
									<th>Created@</th>
								</thead>
								<tbody>
									@foreach ($data->apps() as $app)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $app->name }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="col">
							<table class="table table-sm">
								<thead class="table-light">
									<th>No</th>
									<th>Groups</th>
									<th>Created@</th>
								</thead>
								<tbody>
									@foreach ($data->groups() as $group)
										<tr>
											<td>{{ $no++ }}</td>
											<td>{{ $group->group()->name }}</td>
											<td>{{ $group->created_at }}</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.footers.auth')
</div>
@endsection