@extends('layouts/layout')

@section('title')
	Tenants
@stop

@section('libraries')
	
	<!-- Foundation JavaScript -->
	<script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>
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
	<div class="small-8 medium-6 large-10 small-centered columns">
		<div class="panel">
			<div class="panel-heading small-centered ">
				<h2>Empresas</h2>
			</div>
			<div class="panel-body">
				<table>
					<thead>
						<tr>
							<th>Código</th>
							<th>Nombre</th>
							<th>Fecha creación</th>
							<th>Fecha Actualización</th>
							<th>Usuario Modificador</th>
						</tr>
					</thead>
					<tbody data-bind="foreach: tenants">
						<tr>
							<td><p data-bind="text: code_tenant"></p></td>
							<td><p data-bind="text: label_tenant"></p></td>
							<td><p data-bind="text: created_at">> </td>
							<td><p data-bind="text: updated_at">> </td>
							<td><p data-bind="text: user_id">> </td>
						</tr>
					</tbody>
				</table>
               
           	</div>
			<div>
		</div>
	</div>
</div>
@stop

@section('footer')
	patalabs 2016 - todos los derechos reservados
@stop