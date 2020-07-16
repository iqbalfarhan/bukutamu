<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
	<div class="scrollbar-inner">
		<!-- Brand -->
		<div class="sidenav-header d-flex align-items-center">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
			</a>
			<div class="ml-auto">
				<div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
					<div class="sidenav-toggler-inner">
						<i class="sidenav-toggler-line"></i>
						<i class="sidenav-toggler-line"></i>
						<i class="sidenav-toggler-line"></i>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar-inner">
			<div class="collapse navbar-collapse" id="sidenav-collapse-main">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">
							<i class="ni ni-tv-2 text-primary"></i>
							<span class="nav-link-text">{{ __('Dashboard') }}</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('tamu.index') }}">
							<i class="ni ni-circle-08 text-primary"></i>
							<span class="nav-link-text">{{ __('Daftar tamu') }}</span>
						</a>
					</li>
				</ul>

				<hr class="my-3">
				<!-- Heading -->
				<h6 class="navbar-heading p-0 text-muted">
					<span class="docs-normal">Documentation</span>
				</h6>

				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">
							<i class="ni ni-atom text-yellow"></i>
							<span class="nav-link-text">{{ __('Dokumentasi') }}</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
