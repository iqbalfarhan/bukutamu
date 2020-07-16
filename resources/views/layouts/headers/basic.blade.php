<div class="header bg-{{ $theme ?? "primary" }} pb-7">
	<div class="container-fluid">
		<div class="header-body">
			<div class="row align-items-center py-4">
				<div class="col-lg-6 col-7">
					<h6 class="h2 text-white d-inline-block mb-0">{{ $title ?? "Dashboard" }}</h6>
					<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
						<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
							<li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#">{{ $role ?? "Administrator" }}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{ Request::segment(1) }}</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>