@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-95px">
			<div class="card-header">
				<div class="row ml-auto" style="margin-top: 2px;">
					<h1 style="font-family:Optima;font-size: 30px;">Reparacion</h1>					
					<div style="margin-left: 75%;">
						<a href="{{route('reparacion.create',$vehiculo->veh_id)}}" style="height:36px;" name="btn_nuevo" class="btn btn-outline-success">Nuevo</a>
					</div>

					<div style="margin-left: -3.2%; margin-top: -15px;" class="row card-body">
						<table class="table">
							<thead class="table-dark">
								<th>#</th>
								<th>Descripcion</th>
								<th>Costo</th>
								<th>Fecha</th>
								<th>Vehiculo</th>
								<th>Mecanico</th>
								<th>Cliente</th>
								<th>Acciones</th>
							</thead>
							@foreach($reparacion as $rep)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$rep->rep_descripcion}}</td>
								<td>{{$rep->rep_costo}}</td>
								<td>{{$rep->rep_fecha}}</td>
								<td>{{$rep->veh_matricula}}</td>
								<td>{{$rep->name}}</td>
								<td>{{$rep->cli_nombre}}</td>
								<td>

									<div class="row">

										<a class="btn btn-outline-info" style="color: #217AC6; margin-left: 2%" href="{{route('reparacion.edit',$rep->rep_id)}}" class="btn btn-primary">Editar</a>

										<form style="margin-left: 2%" action="{{route('reparacion.destroy',$rep->rep_id)}}" method="POST" onsubmit="return confirm('Desea eliminar?')">
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
</div>
@endsection
