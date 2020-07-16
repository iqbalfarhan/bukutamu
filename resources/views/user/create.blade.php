@extends('layouts.app')

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col">
			<div class="card shadow">
				<div class="card-header bg-transparent">
					<div class="row align-items-center">
						<div class="col">
							<h6 class="text-uppercase text-muted ls-1 mb-1">User</h6>
							<h2 class="mb-0">Create new User</h2>
						</div>
						<div class="col text-right">
							<a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">Back</a>
						</div>
					</div>
				</div>
				<form action="{{ route('user.store') }}" method="POST">
					@csrf
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Full Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="">
								</div>
								<div class="form-group">
									<label for="username">Username / NIK</label>
									<input type="text" class="form-control" name="username" id="username" placeholder="">
								</div>
								<div class="form-group">
									<label for="jenis">Account type</label>
									<div class="custom-control custom-radio">
										<input type="radio" id="jenis1" name="jenis" class="custom-control-input" value="local" checked>
										<label class="custom-control-label" for="jenis1">Local User</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" id="jenis2" name="jenis" class="custom-control-input" value="ldap">
										<label class="custom-control-label" for="jenis2">Ldap Account</label>
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" name="password" id="password">
								</div>
							</div>
							<div class="col-md-6">
								<h4>Group settings</h4>
								<div class="form-group">
									<label for="group_id">Group</label>
									<select name="group_id" id="group_id" class="form-control">
										@foreach($groups as $group):
										<option value="{{ $group->id }}">{{ $group->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary"><i class="fa fa-check mr-2"></i>Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	@include('layouts.footers.auth')
</div>
@endsection