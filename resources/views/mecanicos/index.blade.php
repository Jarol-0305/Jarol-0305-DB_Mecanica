@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-95px">
			<div class="container">
				<div class="card-header">
					<div class="row ml-auto">
						
						<h1 style="font-family:Optima;font-size: 30px;">Lista de mecanicos</h1>

						<div style="margin-left: 72%;">
							<a href="{{route('mecanicos.create')}}" style="height:38px;" name="btn_nuevo" class="btn btn-outline-success">Nuevo</a>
						</div>

						<div style="margin-left: -3.2%;" class="row card-body">
							<table class="table">
								<thead class="table-dark">
									<th>#</th>
									<th>Apellido</th>
									<th>Nombre</th>
									<th>Fecha de nacimiento</th>
									<th>Cédula</th>
									<th>Correo</th>
									<th>Dirección</th>
									<th>Teléfono</th>
									<th>Acciones</th>
								</thead>
								@foreach($mecanicos as $mec)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$mec->mec_apellido}}</td>
									<td>{{$mec->name}}</td>
									<td>{{$mec->mec_fecha_nacimiento}}</td>
									<td>{{$mec->mec_cedula}}</td>
									<td>{{$mec->email}}</td>
									<td>{{$mec->mec_direccion}}</td>
									<td>{{$mec->mec_telefono}}</td>
									<td>

										<div class="row">
											
											<a class="btn btn-outline-info" style="color: #217AC6; margin-left: 2%" href="{{route('mecanicos.edit',$mec->mec_id)}}" class="btn btn-primary">Editar</a>
											
											<form style="margin-left: 2%" action="{{route('mecanicos.destroy',$mec->mec_id)}}" method="POST" onsubmit="return confirm('Desea eliminar?')">
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
