<?php 
if(isset($factura)){
	$fac_id=$factura->fac_id;
	$cli_id=$factura->cli_id;
	$fac_fecha=$factura->fac_fecha;
	$fac_tipo_pago=$factura->fac_tipo_pago;
	$fac_observaciones=$factura->fac_observaciones;

}else{

	$fac_id="";
	$cli_id="";
	$fac_fecha=date('Y-m-d');
	$fac_tipo_pago="EFECTIVO";
	$fac_observaciones="";
}
?>
<form action="{{route('facturas.store')}}" method="POST">
	@csrf
	<div class="row">
		
<div style="width:250px; margin-top: 0.5%; margin-left: 35px;" name="cli_id">
	<label for="fac_fecha">Cliente:</label>
    <select name="cli_id" class="form-control" id="buscador_clientes" id="validationCustom04" required>
      <option selected disabled value="">Elija una opcion</option>
          @foreach($clientes as $cli)
				@if($cli->cli_id==$cli_id)
				<option selected value="{{$cli->cli_id}}">{{$cli->cli_cedula}} - {{$cli->cli_nombre}} {{$cli->cli_apellido}}</option>
				@else
				<option  value="{{$cli->cli_id}}">{{$cli->cli_cedula}} - {{$cli->cli_nombre}} {{$cli->cli_apellido}}</option>
				@endif
				@endforeach
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
<script>
							$("#buscador_clientes").select2({

								tags: true
							});
						</script>
</div>

		<div class="col-md-3">
			<label for="fac_fecha" style="margin-left: 9%; margin-top: 3.5%;">Fecha:</label>
			<input type="date" style="width: 80%; margin-left: 8%; margin-top: -3%;" id="fac_fecha" value="{{$fac_fecha}}" required name="fac_fecha" class="form-control">
		</div>

		<div class="col-md-3">
			<label for="fac_fecha" style="margin-left: -9%; margin-top: 3.5%;">Tipo Pago:</label>
			<select style="width: 80%; margin-left: -10%; margin-top: -3%;" name="fac_tipo_pago" id="fac_tipo_pago" class="form-control">
				<option value="EFECTIVO">EFECTIVO</option>
				<option value="TRANSFERENCIA">TRANSFERENCIA</option>
				<option value="TARJETA">TARJETA</option>
			</select>
		</div>

		<div class="col-md-3">
			<label for="fac_observaciones" style="margin-left: -26%; margin-top: 3.5%;">Observaciones:</label>
			<input style="width: 80%; margin-left: -27%; margin-top: -3%;" type="text" id="fac_observaciones" value="{{$fac_observaciones}}" name="fac_observaciones" class="form-control">
		</div>
	</div>

	<div class="row mt-3" style="margin-left: 12px;">
		<div class="col-md-3">
			<button type="submit" class="btn btn-success">Guardar</button>
		</div>
	</div>
</form>

<form action="{{route('facturas.detalle')}}" method="POST" >
	@csrf
	<table class="table">
		<div style="margin-top: 8px;">
			
			<tr>
				<th colspan="6" class="bg-primary text-white text-center">DETALLE DE LA FACTURA</th>
				<tr>
					<th>#</th>
					<th>Vehiculo:</th>
					<th>Reparacion:</th>
					<th>Valor total:</th>
					<th>Acciones:</th>
				</tr>
				<tr>
					<td></td>
					<td>
							<div style="width:350px" name="veh_id">
    <select name="veh_id" class="form-control" id="buscador_vehiculo">
      <option selected disabled value="">Elija una opcion</option>
          @foreach($vehiculo as $v)
								<option value="{{$v->veh_id}}">Matricula: {{$v->veh_matricula}}</option>
								@endforeach
    </select>
<script>
							$("#buscador_vehiculo").select2({

								tags: true
							});
						</script>
</div>
					</td>
					<td>
						<div style="width:350px" name="rep_id">
    <select name="rep_id" class="form-control" id="buscador_reparacion" >
      <option selected disabled value="">Elija una opcion</option>
          @foreach($reparacion as $p)
							<option value="{{$p->rep_id}}">{{$p->rep_descripcion}}-Fecha: {{$p->rep_fecha}}</option>
							@endforeach
    </select>
<script>
							$("#buscador_reparacion").select2({

								tags: true
							});
						</script>
</div>
					</td>
					<td>
						<input type="hidden" id="fac_id" name="fac_id" value="{{$fac_id}}" />
						<input type="number" readonly name="fad_cantidad" id="fad_cantidad" class="form-control">

					</td>
					
					<td>
						<input type="text" id="fad_vt" name="fad_vt" readonly class="form-control">
					</td>
					<td>
						<button class="btn btn-success" name="btn_detalle" value="btn_detalle" >+</button>
					</td>
				</tr>
				@isset($detalle)
				<?php 
				$subt=0;
				?>
				@foreach($detalle as $dt)
				<?php $subt+=$dt->rep_costo;?>
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>Vehiculo: {{$dt->veh_id}} - {{$dt->rep_descripcion}} </td>
					<td></td>
					
					<td class="text-right">{{number_format($dt->rep_costo,2)}}$</td>
					<td>
						<button class="btn btn-danger btn-sm" name="btn_eliminar" value="{{$dt->fad_id}}"	>Del</button>
					</td>
				</tr>
				@endforeach
				<?php 
				$vt=$subt;
				?>
				<tr>
					<td colspan="4" class="text-right">Subt:</td>
					<td class="text-right">{{number_format($subt,2)}}$</td>
				</tr>
				
				
				<tr>
					<td colspan="4" class="text-right">VT:</td>
					<td class="text-right">{{number_format($vt,2)}}$</td>
				</tr>
				@else
				<tr><th colspan="5" class="alert alert-warning">No existen datos</th></tr>
				@endisset

			</table>
			<a href="{{route('facturas.index')}}" class="btn btn-dark">Guardar Factura</a>
		</form>
		<script>
			window.onload = function(){
				const obj_cant=document.querySelector("#fad_cantidad");
				const obj_vu=document.querySelector("#fad_vu");
				obj_cant.addEventListener("change",()=>{
					calculos();
				});
				obj_vu.addEventListener("change",()=>{
					calculos();
				});
			}
			const calculos=()=>{
				const vc=document.querySelector("#fad_cantidad");
				const vu=document.querySelector("#fad_vu");
				const vt=vc.value*vu.value;
				document.querySelector("#fad_vt").value=vt;
			}
		</script>