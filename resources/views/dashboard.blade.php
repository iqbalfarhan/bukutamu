@extends('layouts.app')

@section('content')
    @include('layouts.headers.basic')
    
    <div class="container-fluid mt--7">

    	<div class="row justify-content-center">
    		<div class="col-md-3">
    			<div class="card">
    				<div class="card-body text-center">
    					<h3 class="card-title mb-0">Jumlah tamu hari ini</h3>
    					<h1>{{ $today->count() }}</h1>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-3">
    			<div class="card">
    				<div class="card-body text-center">
    					<h3 class="card-title mb-0">Jumlah tamu bulan ini</h3>
    					<h1>{{ $thisMonth->count() }}</h1>
    				</div>
    			</div>
    		</div>
    	</div>

        @include('layouts.footers.auth')
    </div>
@endsection