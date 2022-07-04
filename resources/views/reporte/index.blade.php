@extends('layouts.app')

@section('content')
<?php 
if(isset($desde)){
    $desde=$desde;
    $hasta=$hasta;
}else{
    $desde="";
    $hasta="";
}
if(isset($hab_id)){
    $hab_id=$hab_id;

}else{
    $hab_id="";

}
if(isset($cli_id)){
    $cli_id=$cli_id;

}else{
    $cli_id="";

}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background: #BDC3C7;color:white">
                    <div class="row">
                        <form class="col-md-6" action="{{route('reporte.reporte')}}" method="POST">
                            @csrf

                            <div class="col-md-12 pt-2">
                                <h3 style="font-family:Optima;font-size: 30px;">
                                    Reportes

                                </h3>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <h6>Desde:</h6>
                            </div>
                            <div class="col-md-2">
                                <h6>Hasta:</h6>
                            </div>
                            <div class="col-md-3">
                                <h6>Cliente:</h6>
                            </div>
                            <div class="col-md-3">
                                <h6>Mecanico:</h6>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-2">
                                <input type="date" value="{{$desde}}" class="form-control" name="desde" id="desde" id="validationCustom04" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="date" value="{{$hasta}}" class="form-control" name="hasta" id="hasta" id="validationCustom04" required>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">

                                <select class="form-control " id="buscador_clientes" name="cli_id" id="validationCustom04" >
                                    <!-- <option value="todo">Todas las Habitaciones</option> -->
                                    <option disabled selected value="">Seleccione un Cliente</option>

                                    @foreach($clientes as $cli)
                                    <option  value="{{$cli->cli_id}}">{{$cli->cli_cedula}} - {{$cli->cli_nombre}} {{$cli->cli_apellido}}</option>

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
                                <select class="form-control " id="buscador_mecanicos" name="mec_id" id="validationCustom04" >
                                    <!-- <option value="todo">Todas las Habitaciones</option> -->
                                    <option disabled selected value="">Seleccione un Mecanico</option>

                                    @foreach($mecanicos as $mec)

                                    <option value="{{$mec->mec_id}}">{{$mec->mec_apellido}} - {{$mec->name}} {{$mec->r_apellido}}</option>

                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                                <script>
                                    $("#buscador_mecanicos").select2({

                                        tags: true
                                    });
                                </script>
                            </div>

                            <div class="col-md-1">
                                <button type="submit"  class="btn btn-primary"  style="border:solid #000 1px;" >
                                    Buscar
                                </button>
                            </div>
                            <div class="col-md-1">
                                <button type="submit" class="btn btn-danger" name="btn_pdf" value="1" style="border:solid #000 1px;" >
                                    PDF
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Cédula</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Matricula</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Mecanico</th>
                    <th>Costo</th>

                    <?php
                    $costo=0;
                    ?>

                    @isset($reporte)
                    @foreach($reporte as $re)

                    <?php
                    $costo+=$re->rep_costo;
                    ?>

                    <tr>
                        <td>{{$re->cli_apellido}}</td>
                        <td>{{$re->cli_nombre}}</td>
                        <td>{{$re->cli_cedula}}</td>
                        <td>{{$re->cli_direccion}}</td>
                        <td>{{$re->cli_telefono}}</td>
                        <td>{{$re->veh_matricula}}</td>
                        <td>{{$re->rep_descripcion}}</td>
                        <td>{{$re->rep_fecha}}</td>
                        <td>{{$re->mec_apellido}} {{$re->name}}</td>
                        <td style="text-align: right;">{{number_format($re->rep_costo,2)}}$</td>
                    </tr>
                    @endforeach

                    <tr>
                        <th colspan="10">

                            <h5 class="text-align" style="margin-left: 85%;">
                            Costo total: {{number_format($costo,2)}}
                            </h5>    

                        </th>
                    </tr>

                    @endisset

                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection