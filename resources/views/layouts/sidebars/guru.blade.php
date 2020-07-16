<ul class="navbar-nav">
	<li class="nav-item">
		<a class="nav-link" href="{{ route('home') }}">
			<i class="ni ni-tv-2 text-primary"></i>
			<span class="nav-link-text">{{ __('Dashboard') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('gkelas.index') }}">
			<i class="ni ni-archive-2 text-info"></i>
			<span class="nav-link-text">{{ __('Kelas Saya') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('gmateri.index') }}">
			<i class="ni ni-books text-success"></i>
			<span class="nav-link-text">{{ __('Bank Materi') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('gvideo.index') }}">
			<i class="fab fa-youtube text-danger"></i>
			<span class="nav-link-text">{{ __('Video pembelajaran') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('gbanksoal.index') }}">
			<i class="fa fa-briefcase text-pink"></i>
			<span class="nav-link-text">{{ __('Bank Soal') }}</span>
		</a>
	</li>
</ul>