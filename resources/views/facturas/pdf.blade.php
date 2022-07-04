<style>
	*{
		font-family:sans-serif ;
		font-size:12px;
	}
</style>
<h3>Factura No:{{$factura->fac_id}}</h3>
<h3>Cliente:{{$factura->cli_nombre}}</h3>
<h3>Ruc:{{$factura->cli_cedula}}</h3>
<h3>Direccion:Quito</h3>
<div style="background:#2BA0CC; text-align:center ;" >Detalle Factura</div>
<table style="width:85%">
	<tr>
		<th>#</th>
		<th>Vehiculo</th>
		<th>Reparacion</th>
		<th>Valor total</th>
	</tr>
	<?php 
	$subt=0;
	?>

	@foreach($detalle as $d)
	<?php $subt+=$d->rep_costo;?>

	<tr>
		<td>{{$loop->iteration}}</td>
		<td>Matricula de vehiculo: {{$d->veh_id}} - {{$d->veh_matricula}}</td>
		<td>Reparacion: {{$d->rep_id}} - {{$d->rep_descripcion}}</td>
		
		<td class="text-right">{{number_format($d->rep_costo,2)}}$</td>
	</tr>
	@endforeach	
	<?php
	$vt=$subt;
	?>
	<tr>
		<td colspan="3" style="text-align:right;">Subt:{{$vt}}</td>
	</tr>
	
	<tr>
		<td colspan="3" style="text-align:right;">Total:{{$vt}}</td>
	</tr>
</table>
