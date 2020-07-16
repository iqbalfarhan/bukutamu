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
							<h3 class="mb-0">Tambah Tamu baru</h3>
						</div>
						<div class="col text-right">
							<a href="{{ route('tamu.index') }}" class="btn btn-primary btn-sm">batal</a>
						</div>
					</div>
				</div>
				<form action="{{ route('tamu.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					
					<div class="card-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label class="form-control-label" for="name">Nama lengkap sesuai KTP</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<label class="form-control-label" for="phone">Nomor telpon yang bisa dihubungi</label>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="meet_who">Ingin bertemu</label>
							<input type="text" class="form-control" id="meet_who" name="meet_who" placeholder="">
						</div>
						<div class="form-group">
							<label class="form-control-label" for="purpose">Tujuan</label>
							<textarea class="form-control" id="purpose" name="purpose" required></textarea>
						</div>

						<div class="row">
							<div class="col text-center">
								<div id="my_camera" class="w-100 mb-3"></div>
								<button class="btn btn-secondary btn-sm" type="button" onclick="take_snapshot()"><i class="fa fa-camera mr-2"></i>span photo</button>
							</div>

							<div class="col">
								<div class="form-group">
									<label class="form-control-label" for="photo">Hasil Photo</label>
									<input type="hidden" name="snapphoto" id="snapphoto">
									<div id="prevBefUpload"></div>
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
	</div>

	@include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon/vendor/webcamjs/webcam.js') }}"></script>
<script>
	Webcam.set({
		width: 320,
		height: 240,
		image_format: 'jpeg',
		jpeg_quality: 100,
		class: 'w-100'
	});
	Webcam.attach('#my_camera');

	function take_snapshot() {
		Webcam.snap( function(data_uri) {
			$('#prevBefUpload').html('<img class="rounded mb-3" src="'+data_uri+'"/>');
			$("#snapphoto").val(data_uri);
		});
	}
</script>
@endpush