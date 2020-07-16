@extends('layouts.app')

@section('content')
@include('layouts.headers.basic')

@push('css')
<style>
	table td, th{
		vertical-align: top
	}
</style>
@endpush

<div class="container-fluid mt--7">
	<div class="card">
		<div class="card-header">
			<div class="row align-item-center">
				<div class="col">
					<h3 class="mb-0">Detail</h3>
				</div>
				<div class="col text-right">
					<a href="{{ route('tamu.edit', $data) }}" class="btn btn-primary btn-sm">edit</a>
					<a href="{{ route('tamu.index') }}" class="btn btn-primary btn-sm">kembali</a>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-8">
					<div class="card-text mb-3">
						<h4 class="mb-0">Nama Tamu :</h4>
						{{ $data->name }}
					</div>
					<div class="card-text mb-3">
						<h4 class="mb-0">Nomor telepon :</h4>
						{{ $data->phone }}
					</div>
					<div class="card-text mb-3">
						<h4 class="mb-0">Tujuan :</h4>
						{{ $data->purpose }}
					</div>
					<div class="card-text mb-3">
						<h4 class="mb-0">Ingin bertemu :</h4>
						{{ $data->meet_who }}
					</div>
					<div class="card-text mb-3">
						<h4 class="mb-0">dibuat pada :</h4>
						{{ date('d M Y - H:i', strtotime($data->created_at)) }}
					</div>
				</div>
				<div class="col-md-4 text-center">
					<img src="{{ Storage::url($data->photo) }}" class="rounded">
				</div>
			</div>
		</div>
		<div class="card-footer">
			<a href="{{ route('tamu.index') }}" class="btn btn-primary"><i class="fa fa-return mr-2"></i>Kembali</a>
		</div>
	</div>

	@include('layouts.footers.auth')
</div>
@endsection