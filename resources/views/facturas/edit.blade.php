@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-95px">
			<div class="card">
				<div class="card-header">{{ __('Formulario de facturacion') }}</div>

				@include('facturas.fields')
				
			</div>
		</div>
	</div>
</div>

@endsection