@extends('layouts.app')

@section('content')
@include('layouts.headers.basic')
@php
$no =1;
@endphp

@push('css')
<style>
	td{
		vertical-align: middle!important;
	}
</style>
@endpush

<div class="container-fluid mt--7">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-header">
					<div class="row">
						<div class="col">
							<h3 class="mb-0">List Tamu tanggal ({{ $tanggal }})</h3>
						</div>
						<div class="col text-right">
							<a href="{{ route('tamu.getall') }}" class="btn btn-primary btn-sm"><i class="fa fa-list-alt mr-2"></i>Semua tamu</a>
							<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#filter"><i class="fa fa-search mr-2"></i>Cari tanggal</button>
							<a href="{{ route('tamu.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus mr-2"></i>Tamu Baru</a>
						</div>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-sm">
						<thead class="table-light">
							<th>No</th>
							<th>Photo</th>
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
								<td class="p-2 text-center">
									<a href="{{ route('tamu.show', $data) }}" class="avatar rounded mr-3">
										<img src="{{ Storage::url($data->photo) }}" class="h-100">
									</a>
								</td>
								<td>{{ date('H:i', strtotime($data->created_at)) }}</td>
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
		</div>
	</div>

	@include('layouts.footers.auth')
</div>
@endsection

@push('modal')
	<div class="modal fade" tabindex="-1" role="" id="filter">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Cari tamu berdasarkan tanggal</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="" method="GET">
					<div class="modal-body">
						<div class="form-group">
							<label class="form-control-label" for="tanggal">Tanggal</label>
							<input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="max 100 characters" value="{{ $tanggal ?? date('Y-m-d', strtotime(now())) }}">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Filter</button>
					</div>
				</form>
			</div>
		</div>
	</div>
		
@endpush