@extends('layouts.app')

@section('content')
@include('layouts.headers.basic')

<div class="container-fluid mt--7">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<div class="row align-item-center">
						<div class="col">
							<h3 class="mb-0">Edit detail Tamu</h3>
						</div>
						<div class="col text-right">
							<a href="{{ route('tamu.index') }}" class="btn btn-primary btn-sm">batal</a>
						</div>
					</div>
				</div>
				<form action="{{ route('tamu.update', $data) }}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label class="form-control-label" for="name">Nama lengkap sesuai KTP</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="" required value="{{ $data->name }}">
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label class="form-control-label" for="phone">Nomor telpon yang bisa dihubungi</label>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="" required value="{{ $data->phone }}">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="meet_who">Ingin bertemu</label>
							<input type="text" class="form-control" id="meet_who" name="meet_who" placeholder="" value="{{ $data->meet_who }}">
						</div>
						<div class="form-group">
							<label class="form-control-label" for="purpose">Tujuan</label>
							<textarea class="form-control" id="purpose" name="purpose" required>{{ $data->purpose }}</textarea>
						</div>

						<div class="row">
							<div class="col-md-8 text-center">
								<div id="my_camera" class="w-100 mb-3"></div>
								<button class="btn btn-secondary btn-sm" type="button" onclick="take_snapshot()"><i class="fa fa-camera mr-2"></i>span photo</button>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label class="form-control-label" for="photo">photo lama</label>
									<input type="hidden" name="snapphoto" id="snapphoto">
									<div id="prevBefUpload"><img src="{{ Storage::url($data->photo) }}" class="w-100"></div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="card-footer">
						<button class="btn btn-primary"><i class="fa fa-check mr-2"></i>Simpan</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card bg-secondary">
				<form action="{{ route('tamu.keluar', $data) }}" method="POST">
					@csrf
					@method('PUT')
					<div class="card-body">
						<div class="form-group mb-0">
							<label class="form-control-label" for="keluar">Jam Keluar (<em class="small text-muted">Terisi otomatis</em>)</label>
							<input type="time" class="form-control" id="keluar" name="keluar" placeholder="max 100 characters" value="{{ date("H:i") }}">
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary"><i class="fa fa-timer mr-2"></i>Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	@include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon/vendor/webcamjs/webcam.js') }}"></script>
<script>
	Webcam.set({
		width: 480,
		height: 360,
		image_format: 'jpeg',
		jpeg_quality: 100
	});
	Webcam.attach('#my_camera');

	function take_snapshot() {
		Webcam.snap( function(data_uri) {
			$('#prevBefUpload').html('<img class="rounded mb-3 w-100" src="'+data_uri+'"/>');
			$("#snapphoto").val(data_uri);
		});
	}
</script>
@endpush