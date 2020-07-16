<div class="row mb-4">
	<div class="col">
		<a href="{{ route('gkelas.show', $code) }}" class="btn btn-primary"><i class="ni ni-circle-08 mr-2"></i>Siswa</a>
		<a href="{{ route('gkelas.forum', $code) }}" class="btn btn-primary"><i class="ni ni-chat-round mr-2"></i>Forum</a>
		<a href="{{ route('gkelas.tugas', $code) }}" class="btn btn-primary"><i class="fa fa-edit mr-2"></i>Tugas</a>
		<a href="{{ route('gkelas.livestream', $code) }}" class="btn btn-primary"><i class="ni ni-button-play mr-2"></i>Live Streaming</a>
		<a href="{{ route('gkelas.materi', $code) }}" class="btn btn-primary"><i class="ni ni-books mr-2"></i>Materi</a>
	</div>
</div>