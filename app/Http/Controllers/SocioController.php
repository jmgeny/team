<?php

namespace asif\Http\Controllers;

use Illuminate\Http\Request;
use asif\Socio;
use asif\http\Requests\SocioRequest;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios = Socio::orderBy('id','DESC')->paginate(5);

        return view('socio.index',compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('socio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocioRequest $request)
    {

        $socio = new Socio;

        $socio->user_id = 0;

        $socio->nombre = $request->nombre;
        $socio->apellido = $request->apellido;
        $socio->direccion = $request->direccion;
        $socio->email = $request->email;
        $socio->telefono = $request->telefono;
        $socio->dni = $request->dni;
        $socio->nacimiento = $request->nacimiento;
        $socio->estadoCivil = $request->estadoCivil;
        $socio->localidad_id = $request->localidad_id;
        $socio->genero = $request->genero;
        $socio->amputado = $request->amputado;
        $socio->equipado = $request->equipado;
        $socio->obraSocial = $request->obraSocial;
        $socio->deporte_id = $request->deporte_id;
        $socio->trabajo_id = $request->trabajo_id;

        $socio->save();

        return redirect()->route('socios.index')
                         ->with('info','El socio fue Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socio = Socio::find($id);

        return view('socio.show',compact('socio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socio = Socio::find($id);

        return view('socio.edit',compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocioRequest  $request, $id)
    {
        $socio = Socio::find($id);

        $socio->nombre = $request->nombre;
        $socio->apellido = $request->apellido;
        $socio->direccion = $request->direccion;
        $socio->email = $request->email;
        $socio->telefono = $request->telefono;
        $socio->dni = $request->dni;
        $socio->nacimiento = $request->nacimiento;
        $socio->estadoCivil = $request->estadoCivil;
        $socio->localidad_id = $request->localidad_id;
        $socio->genero = $request->genero;
        $socio->amputado = $request->amputado;
        $socio->equipado = $request->equipado;
        $socio->obraSocial = $request->obraSocial;
        $socio->deporte_id = $request->deporte_id;
        $socio->trabajo_id = $request->trabajo_id;

        $socio->save();

        return redirect()->route('socios.index')
                         ->with('info','El socio fue Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $socio = Socio::find($id);
        $socio->delete();

        return back()->with('info','El socio fue eliminado');
    }
}
