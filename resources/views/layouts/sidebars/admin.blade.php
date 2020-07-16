<ul class="navbar-nav">
	<li class="nav-item">
		<a class="nav-link" href="{{ route('home') }}">
			<i class="ni ni-tv-2 text-primary"></i>
			<span class="nav-link-text">{{ __('Dashboard') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('guru.index') }}">
			<i class="ni ni-folder-17 text-info"></i>
			<span class="nav-link-text">{{ __('Data Guru') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('siswa.index') }}">
			<i class="ni ni-folder-17 text-danger"></i>
			<span class="nav-link-text">{{ __('Data Siswa') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('kelas.index') }}">
			<i class="ni ni-briefcase-24 text-pink"></i>
			<span class="nav-link-text">{{ __('Data Room') }}</span>
		</a>
	</li>

</ul>

<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading p-0 text-muted">
	<span class="docs-normal">Data Master</span>
</h6>

<ul class="navbar-nav">
	<li class="nav-item">
		<a class="nav-link" href="{{ route('jurusan.index') }}">
			<i class="ni ni-atom text-yellow"></i>
			<span class="nav-link-text">{{ __('Manajemen Jurusan') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('matapelajaran.index') }}">
			<i class="ni ni-spaceship text-primary"></i>
			<span class="nav-link-text">{{ __('Mata Pelajaran') }}</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
			<i class="ni ni-circle-08 text-success"></i>
			<span class="nav-link-text">{{ __('User Management') }}</span>
		</a>

		<div class="collapse" id="navbar-examples">
			<ul class="nav nav-sm flex-column">
				<li class="nav-item">
					<a class="nav-link" href="{{ route('profile.edit') }}">
						<span class="sidenav-normal"> {{ __('My profile') }} </span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('user.index') }}">
						<span class="sidenav-normal"> {{ __('User Management') }} </span>
					</a>
				</li>
			</ul>
		</div>
	</li>
</ul>