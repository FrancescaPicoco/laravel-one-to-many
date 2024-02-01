@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4 bg-my">
 	<div class="row justify-content-center">
 		<div class="col-md-8">
 			<div class="card  bg-dark text-light mb-5">
 				<div class="card-header">{{ __('Dashboard') }}</div>

 				<div class="card-body">
 					@if (session('status'))
 					<div class="alert alert-success" role="alert">
 						{{ session('status') }}
 					</div>
 					@endif

 					{{ __('You are logged in!') }}
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <div class="text-center">
	<h1 class="mytext">Benvenuto nel tuo profilo</h1>
 </div>
@endsection