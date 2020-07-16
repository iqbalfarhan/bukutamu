@extends('layouts.app')

@section('content')
@include('layouts.headers.basic')

<div class="container-fluid mt--7">
	<div class="card">
		<div class="card-header">
			<div class="row align-item-center">
				<div class="col">
					<h3 class="mb-0"></h3>
				</div>
				<div class="col text-right">
					<a href="" class="btn btn-primary btn-sm">create</a>
				</div>
			</div>
		</div>
	</div>

	@include('layouts.footers.auth')
</div>
@endsection