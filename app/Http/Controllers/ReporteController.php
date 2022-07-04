<?php

namespace App\Http\Controllers;
use App\Reparacion;
use App\Vehiculo;
use App\Mecanicos;
use App\Clientes;
use Auth;
use DB;
use PDF;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Clientes::all();
        $mecanicos=Mecanicos::all();
        return view('reporte.index')->with('clientes',$clientes)->with('mecanicos',$mecanicos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function reporte(Request $request)
    {
        $reparacion=reparacion::all();
        $clientes=Clientes::all();
        $mecanicos=Mecanicos::all();
        $mec_id="";
        $cli_id="";
        $sql_rep="";
        $sql_cli="";
        $sql_mec="";
        $data=$request->all();
        // dd($mecanicos);

        if(isset($data['desde'])){
            $desde=$data['desde'];
            $hasta=$data['hasta'];
        }

        if(isset($data['mec_id'])){
            $mec_id=$data['mec_id'];
            $sql_mec="AND rep.mec_id=$mec_id";
        }

        if(isset($data['cli_id'])){
            $cli_id=$data['cli_id'];
            $sql_cli="AND veh.cli_id=$cli_id";
        }

        $reporte=DB::select("SELECT * FROM reparacion rep
           JOIN vehiculo veh ON rep.veh_id=veh.veh_id 
           JOIN mecanicos mec ON rep.mec_id=mec.mec_id
           JOIN clientes cli ON veh.cli_id=cli.cli_id
           AND rep.rep_fecha BETWEEN '$desde' AND '$hasta'
           $sql_mec
           $sql_cli 
           ");

        if(isset($data['btn_pdf'])){
            $data=['reporte'=>$reporte];
            $pdf=PDF::loadView('reporte.pdf',$data);
            return $pdf->stream('reporte.pdf');
        }

            return view('reporte.index')
            ->with('reporte',$reporte)
            ->with('reparacion',$reparacion)
            ->with('clientes',$clientes)
            ->with('mecanicos',$mecanicos)
            ->with('desde',$desde)
            ->with('hasta',$hasta)
            ->with('mec_id',$mec_id)
            ->with('cli_id',$cli_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
