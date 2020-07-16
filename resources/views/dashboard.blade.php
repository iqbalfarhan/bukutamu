@extends('layouts.app')

@section('content')
    @include('layouts.headers.basic')
    
    <div class="container-fluid mt--7">

    	<div class="row justify-content-center">
    		<div class="col-md-3">
    			<div class="card">
    				<div class="card-body text-center">
    					<h3 class="card-title mb-0">Jumlah tamu hari ini</h3>
    					<h1 class="display-1">{{ $today->count() }}</h1>
                        <a href="{{ route('tamu.index') }}" class="btn btn-primary btn-sm">Lihat tamu hari ini</a>
    				</div>
    			</div>
    		</div>
    		<div class="col-md-3">
    			<div class="card">
    				<div class="card-body text-center">
    					<h3 class="card-title mb-0">Jumlah semua tamu</h3>
    					<h1 class="display-1">{{ $thisMonth->count() }}</h1>
                        <a href="{{ route('tamu.getall') }}" class="btn btn-primary btn-sm">Lihat tamu hari ini</a>
    				</div>
    			</div>
    		</div>
    	</div>

        @include('layouts.footers.auth')
    </div>
@endsection