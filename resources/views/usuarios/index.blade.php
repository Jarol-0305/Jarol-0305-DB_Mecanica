@extends('layouts.app')
@section('content')


@isset($msg)
     <div class="bg-danger"><strong>{{$msg}}</strong></div>
     @endisset

<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-95px">
			<div class="card-header">
				<div class="row ml-auto">
					
					<h1 style="font-family:Optima;font-size: 30px;">Lista de usuarios</h1>

					<div style="margin-left: 76%;">
						<a href="{{route('usuarios.create')}}" style="height:38px;" name="btn_nuevo" class="btn btn-outline-success">Nuevo</a>
					</div>

					<div style="margin-left: -2.9%;"  class="row card-body">
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
							@foreach($users as $usu)
							<tr>
								<td>{{$loop->iteration}}</td>
								<td>{{$usu->usu_apellido}}</td>
								<td>{{$usu->name}}</td>
								<td>{{$usu->usu_fecha_nacimiento}}</td>
								<td>{{$usu->usu_cedula}}</td>
								<td>{{$usu->email}}</td>
								<td>{{$usu->usu_direccion}}</td>
								<td>{{$usu->usu_telefono}}</td>
								<td>

									<div class="row">
										
										<a class="btn btn-outline-info" style="color: #217AC6; margin-left: 2%" href="{{route('usuarios.edit',$usu->usu_id)}}" class="btn btn-primary">Editar</a>
										
										<form style="margin-left: 2%" action="{{route('usuarios.destroy',$usu->usu_id)}}" method="POST" onsubmit="return confirm('Desea eliminar?')">
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
