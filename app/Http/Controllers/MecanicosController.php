<?php

namespace App\Http\Controllers;
use App\Mecanicos;
use Illuminate\Http\Request;

class MecanicosController extends Controller
{
    public function index()
    {
       $mecanicos=Mecanicos::all();
       return view('mecanicos.index')->with('mecanicos',$mecanicos);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mecanicos.create');
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
        mecanicos::create($data);
        return redirect(route('mecanicos'));
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
        $mecanicos=Mecanicos::find($id);
        return view('mecanicos.edit')->with('mecanicos',$mecanicos);
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
        $mecanicos=Mecanicos::find($id);
        $mecanicos->update($request->all());
        return redirect(route('mecanicos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mecanicos::destroy($id);
        return redirect(route('mecanicos'));
    }

}

