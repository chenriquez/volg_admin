@extends('layouts/layout')

@section('title')
	Detalle de Empresa
@stop

@section('header')
	<a href="../tenants">empresas</a>
@stop

@section('content')

<div class="row">
	<div class="panel">
		<div class="panel-heading">
			<h2>Empresa</h2>
		</div>
		<div class="panel-body">
			<p>ID: {{ $tenant->id_tenant }} </p>
			<p>Empresa: {{ $tenant->label_tenant }} </p>
			<!-- <p>ID: <strong data-bind="text: id_tenant"></strong></p>
				<p>Nombre: <strong data-bind="text: label_tenant"></strong></p>
				-->
		</div>
	</div>
</div>
@stop

@section('footer')
	patalabs 2016 - todos los derechos reservados
@stop