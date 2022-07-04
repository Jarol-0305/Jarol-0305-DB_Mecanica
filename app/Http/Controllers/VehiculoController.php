<?php

namespace App\Http\Controllers;
use App\Vehiculo;
use App\Clientes;
use App\Reparacion;
use Auth;
use DB;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $clientes=Clientes::find($id);
        ///dd($clientes->cli_id);
       // $vehiculo=Vehiculo::all();
        $vehiculo=DB::select("SELECT * FROM vehiculo JOIN clientes on vehiculo.cli_id=clientes.cli_id WHERE vehiculo.cli_id=$id");       
        return view('vehiculo.index')->with('vehiculo',$vehiculo)->with('clientes',$clientes);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $clientes=Clientes::find($id);
        return view('vehiculo.create')->with('clientes',$clientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $data=$request->all();
        //dd($data);
        $cli_id=$data['cli_id'];

        Vehiculo::create($data);
        //$cli_id=Clientes::all();
        return redirect(route('vehiculo',$cli_id));
        //return redirect(route ('vehiculo',['cli_id'=>$cli_id]));
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
        $vehiculo=Vehiculo::find($id);
        //dd($vehiculo);
        return view('vehiculo.edit')->with('vehiculo',$vehiculo)->with('clientes',$clientes);
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
       $vehiculo=Vehiculo::find($id);
       $vehiculo->update($request->all());
       $cli_id=$vehiculo['cli_id'];

       //dd($request);
       return redirect(route('vehiculo',$cli_id));
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $vehiculo=DB::select("SELECT * FROM reparacion JOIN vehiculo on reparacion.veh_id=vehiculo.veh_id JOIN mecanicos ON reparacion.mec_id=mecanicos.mec_id JOIN clientes ON vehiculo.cli_id=clientes.cli_id WHERE reparacion.veh_id=$id");

        // $clientes=Clientes::find($id);
        
        // $cli_id=$clientes['cli_id'];     
        $veh=$vehiculo[0];    
        $cli_id=$veh->cli_id;    

        foreach($vehiculo as $v){
            Reparacion::destroy($v->rep_id);
        }

        Vehiculo::destroy($id);
        return redirect(route('vehiculo',$cli_id));
    }
}
