<?php 
if(isset($desde)){
    $desde=$desde;
    $hasta=$hasta;
}else{
    $desde="";
    $hasta="";
}

if(isset($rep_id)){
    $rep_id=$rep_id;
}else{
    $rep_id="";

}

if(isset($cli_id)){
    $cli_id=$cli_id;
}else{
    $cli_id="";

}

if(isset($mec_id)){
    $mec_id=$mec_id;
}else{
    $mec_id="";

}
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark" style="color:black;">
                    <div class="row">
                <h2>
                    REPORTE
                </h2>

                    </div>
                </div>
            </div>
            <div class="card-body">

                <table class="table">
                    <table class="table table-striped  table-bordered table table-sm" style="margin-top: 1%;">
    <th style="text-align:center;font-size: 10pt;color:green;">Apellido</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Nombre</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Cédula</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Dirección</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Teléfono</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Matricula</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Descripcion</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Fecha</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Mecanico</th>
    <th style="text-align:center;font-size: 10pt;color:green;">Total</th>

                <?php
                $costo=0;
                ?>
                @isset($reporte)

                @foreach($reporte as $re)

                <?php
                $costo+=$re->rep_costo;
                ?> <tr> 
                        <td style="text-align:center;font-size: 9pt">{{$re->cli_apellido}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->cli_nombre}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->cli_cedula}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->cli_direccion}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->cli_telefono}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->veh_matricula}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->rep_descripcion}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->rep_fecha}}</td>
                        <td style="text-align:center;font-size: 9pt">{{$re->mec_apellido}} {{$re->name}}</td>
                        <td style="text-align:center;font-size: 9pt">{{number_format($re->rep_costo,2)}}$</td> 
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