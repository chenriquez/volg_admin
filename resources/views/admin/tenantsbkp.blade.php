@extends('layouts/layout')

@section('title')
	Tenants
@stop

@section('libraries')
	<!--<script type="text/javascript" src='/public/js/jquery.min.js'></script>
	<script type="text/javascript" src='/public/js/knockout-3.4.1.js'></script>
	<script type="text/javascript" src='/public/js/app_ko.js'></script>
	<script type="text/javascript" src='/public/js/custom.js'></script>-->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/knockout-3.4.1.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/app_ko.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
	
@stop

@section('header')
	<a href="about">Acerca de nosotros</a>
@stop

@section('content')
<div class="row">
	<div class="panel">
		<div class="panel-heading">
			<h2>Empresas</h2>
		</div>
		<div class="panel-body">
			@foreach ($tenants as $tenant)
				<li> {{ $tenant->label_tenant }} </li>
			@endforeach
		</div>
		<div>
		<p databind=""
		</div>
	</div>
</div>
@stop

@section('footer')
	patalabs 2016 - todos los derechos reservados
@stop