@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-95px">
			<div class="card-header">
				<div class="row ml-auto">
					
					<h1 style="font-family:Optima;font-size: 30px;">Lista de clientes</h1>

					<div style="margin-left: 81%;margin-top: -4%;">
						<a href="{{route('clientes.create')}}" style="height:38px;" name="btn_nuevo" class="btn btn-outline-success">Nuevo</a>
					</div>

					<div style="margin-left: -2.9%;" class="row card-body">
						<table class="table">
							<thead class="table-dark">
								<th>#</th>
								<th>Apellido</th>
								<th>Nombre</th>
								<th>Cédula</th>
								<th>Correo</th>
								<th>Dirección</th>
								<th>Teléfono</th>
								<th>Acciones</th>
							</thead>
							@foreach($clientes as $cli)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$cli->cli_apellido}}</td>
								<td>{{$cli->cli_nombre}}</td>
								<td>{{$cli->cli_cedula}}</td>
								<td>{{$cli->email}}</td>
								<td>{{$cli->cli_direccion}}</td>
								<td>{{$cli->cli_telefono}}</td>
								@if($cli->cli_estado==1)
								<td>

									<div class="row">
										
										<a class="btn btn-outline-info" style="color: #217AC6; margin-left: 2%" href="{{route('clientes.edit',$cli->cli_id)}}" class="btn btn-primary">Editar</a>

										<a class="btn btn-outline-secondary" style="margin-left: 2%;" href=" {{route('vehiculo',$cli->cli_id)}} ">Vehiculo</a>
										
										<a href="{{route('clientes.anular',$cli->cli_id)}}" class="btn btn-sm" style="background-color:#FF7043; margin-left: 2%"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
      <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
      </svg>  Anular</a>
      @else
    <td>Anulado</td>
    <td>
    	<a class="btn btn-outline-secondary" style="margin-left: -180%" href="{{route('vehiculo',$cli->cli_id)}}">Vehiculo</a>
    </td>
    @endif
									</div>

								</td>
							</tr>
							@endforeach
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
