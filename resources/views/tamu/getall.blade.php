@extends('layouts.app')

@section('content')
@include('layouts.headers.basic')

@php
	$no = 1;
@endphp

@push('css')
<style>
	td{
		vertical-align: middle!important;
	}
</style>
@endpush

<div class="container-fluid mt--7">
	<div class="card">
		<div class="card-header">
			<div class="row align-item-center">
				<div class="col">
					<h3 class="mb-0">Semua tamu</h3>
				</div>
				<div class="col text-right">
					<a href="{{ route('tamu.index') }}" class="btn btn-primary btn-sm">kembali</a>
				</div>
			</div>
		</div>
		<div class="table-responsive">
			<table class="table table-sm">
				<thead class="table-light">
					<th>No</th>
					<th>Waktu</th>
					<th>Nama Tamu</th>
					<th>Ingin Bertemu</th>
					<th>Tujuan</th>
					<th class="text-center">Action</th>
				</thead>
				<tbody>
					@foreach ($datas as $data)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $data->created_at }}</td>
						<td><b>{{ $data->name }}</b><br>{{ $data->phone }}</td>
						<td>{{ $data->meet_who }}</td>
						<td>{{ substr($data->purpose, 0, 30) }}</td>
						<td class="p-2 text-center">
							<form action="{{ route('tamu.destroy', $data) }}" method="POST" onsubmit="return confirm('Yakin akan menghapus ini')">
								@csrf
								@method('DELETE')
								<a href="{{ route('tamu.edit', $data) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>         
		</div>
	</div>

	@include('layouts.footers.auth')
</div>
@endsection