<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use App\Models\User;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $cantidad = User::where('rol', '=', 1)->count();
        
        //Genera un numero aleatorio para la asignacion de la solicitud a un técnico
        $numero_aleatorio = rand(1,$cantidad);
        
        //Busca un tecnico que tenga dicho numero como id
        $tecnico = User::find($numero_aleatorio);

        //Valida que la solicitud con dicho id de técnico no exista en la base datos
        $solicitudesPorTecnico = Solicitud::where('id_tecnico',$numero_aleatorio)->get()->count();

        //Valida que no hayan mas de 5 solicitudes por tecnico
        if($solicitudesPorTecnico > 5 && $tecnico != null) {
            $solicitud = Solicitud::create([
            'asunto' => $request->asunto,
            'motivo' => $request->motivo,
            'trabajo' => $request->trabajo,
            'equipo' => $request->equipo,
            'id_tecnico' => $tecnico->id
            ]);
            //En caso de que no exista un tecnico con el id dada, se asigna la solicitud
            // a un super usuario (rol 0)
        } else if($tecnico == null){
            $user = User::where('rol', '=', 0)->first();
            $solicitud = Solicitud::create([
                'asunto' => $request->asunto,
                'motivo' => $request->motivo,
                'trabajo' => $request->trabajo,
                'equipo' => $request->equipo,
                'id_tecnico' => $user->id
                
                ]);
        }
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitud $solicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $solicitud = Solicitud::find($id);
        return view('panelEncargado-editar', ['solicitud' => $solicitud]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::find($id);

        //Update para resolver una solicitud
        //Actualiza los mismos datos excepto la columna "descripcion"
        $solicitud->asunto = $solicitud->asunto;
        $solicitud->motivo = $solicitud->motivo;
        $solicitud->trabajo = $solicitud->trabajo;
        $solicitud->equipo = $solicitud->equipo;
        $solicitud->descripcion = $request->descripcion;
        //Cambia el estado a resuelta
        $solicitud->estado = "Resuelta";
        $solicitud->save();

        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitud)
    {
        //Metodo "delete()" elimina registros de la tabla solicituds
        $solicitud->delete();

        return back();
    }
}
