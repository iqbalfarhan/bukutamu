<ul class="navbar-nav">
	<li class="nav-item">
		<a class="nav-link" href="{{ route('home') }}">
			<i class="ni ni-tv-2 text-primary"></i>
			<span class="nav-link-text">{{ __('Dashboard') }}</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="{{ route('skelas.index') }}">
			<i class="ni ni-archive-2 text-success"></i>
			<span class="nav-link-text">{{ __('Kelas saya') }}</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="{{ route('stugas.index') }}">
			<i class="ni ni-atom text-danger"></i>
			<span class="nav-link-text">{{ __('Tugas saya') }}</span>
		</a>
	</li>

</ul>