<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;


class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $solicitud = Solicitud::paginate(10);
        //Cargando y paginando las solicitudes para interfaz de encargado
        return view('panelEncargado', ['solicitudes' => $solicitud]);
        
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
    public function edit(Request $request)
    {
        //La solicitud se carga en los campos de la interfaz
        return view('panelEncargado-editar', ['solicitud' => $request]);
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
        //A través de Eloquent encuentra la solicitud con la id pasada
        $solicitud = Solicitud::find($id);

        //Actualizar los campos de la solicitud editada
        $solicitud->asunto = $request->asunto;
        $solicitud->motivo = $request->motivo;
        $solicitud->trabajo = $request->trabajo;
        $solicitud->equipo = $request->equipo;
        
        //Metodo para guardar los cambios
        $solicitud->save();

        return back();
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
