<?php

namespace App\Http\Controllers;
use App\Clientes;
use Illuminate\Http\Request;
use App\Vehiculo;
use App\Reparacion;
use DB;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Clientes::all();
        return view('clientes.index')->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Clientes::create($data);
        return redirect(route('clientes'));
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
        $clientes=Clientes::find($id);
        return view('clientes.edit')->with('clientes',$clientes);
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
        $clientes=Clientes::find($id);
        $clientes->update($request->all());
        return redirect(route('clientes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // No se podra eliminar los clientes 


//         $vehiculo=DB::select("SELECT * FROM reparacion JOIN vehiculo on reparacion.rep_id=vehiculo.veh_id JOIN mecanicos ON reparacion.mec_id=mecanicos.mec_id JOIN clientes ON vehiculo.cli_id=clientes.cli_id WHERE vehiculo.cli_id=$id");
        
// //dd($vehiculo);
//         foreach($vehiculo as $v){
//             Reparacion::destroy($v->rep_id);
//             Vehiculo::destroy($v->veh_id);
//         }
//         Clientes::destroy($id);
//         return redirect(route('clientes'));
    }

     public function clientes_anular($cli_id)
    {
        DB::update("UPDATE clientes SET cli_estado=2 where cli_id=$cli_id");
        return redirect(route('clientes'));
    }
}
