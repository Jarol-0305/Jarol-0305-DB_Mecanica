@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-95px">
			<div class="card-header">
				<div class="row" style="margin-top: -10px; height: 36px;">
					<a href="{{route('clientes')}}" style="text-decoration: none;">
						Clientes
						<img src="https://cdn-icons-png.flaticon.com/512/2/2249.png" style="width: 20px;">
					</a>	
				</div>

				<div class="row ml-auto" style="margin-top: 2px;">

					<h1 style="font-family:Optima;font-size: 30px;">Vehiculo</h1>

					<div style="margin-left: 75%;">
						<a href="{{route('vehiculo.create',$clientes->cli_id)}}" style="height:36px;" name="btn_nuevo" class="btn btn-outline-success">Nuevo</a>
					</div>

					<div style="margin-left: -3.2%; margin-top: -15px;" class="row card-body">
						<table class="table">
							<thead class="table-dark">
								<th>#</th>
								<th>Modelo</th>
								<th>Marca</th>
								<th>Color</th>
								<th>Matricula</th>
								<th>Fecha</th>
								<th>Cliente</th>
								<th>Acciones</th>
							</thead>
							@foreach($vehiculo as $veh)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$veh->veh_modelo}}</td>
								<td>{{$veh->veh_marca}}</td>
								<td>{{$veh->veh_color}}</td>
								<td>{{$veh->veh_matricula}}</td>
								<td>{{$veh->veh_fecha}}</td>
								
								<td>{{$veh->cli_nombre}}</td>

								<td>

									<div class="row">
										
										<a class="btn btn-outline-info" style="color: #217AC6; margin-left: 2%;" href="{{route('vehiculo.edit',$veh->veh_id)}}" class="btn btn-primary">Editar</a>

										<a class="btn btn-outline-dark" style="margin-left: 2%;" href=" {{route('reparacion',$veh->veh_id)}} ">Reparación</a>
										
										<form style="margin-left: 2%" action="{{route('vehiculo.destroy',$veh->veh_id)}}" method="POST" onsubmit="return confirm('Desea eliminar?')">
											@csrf     
											<button class="btn btn-outline-danger">Eliminar</button>
										</form>
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
