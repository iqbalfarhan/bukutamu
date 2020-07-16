@if (Auth::User()->role == 1)
	@include('layouts.sidebars.admin')
@elseif(Auth::User()->role == 2)
	@include('layouts.sidebars.guru')
@elseif(Auth::User()->role == 3)
	@include('layouts.sidebars.siswa')
@endif