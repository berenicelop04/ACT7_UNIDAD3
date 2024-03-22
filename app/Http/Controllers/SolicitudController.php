<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitudes;
use MongoDB\Laravel\MongoDBServiceProvider;
use Illuminate\Support\Facades\View;
use Auth;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Solicitudes::all();
        return view('solicitudes.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('solicitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $solicitud = new Solicitudes;
        $solicitud->fecha_solicitud = $request->fecha_solicitud;
        $solicitud->servicio_id = $request->servicio_id;
        $solicitud->fecha_servicio = $request->fecha_servicio;
        $solicitud->hora_servicio = $request->hora_servicio;
        $solicitud->ubicacion_servicio = $request->ubicacion_servicio;
        $solicitud->duracion_servicio = $request->duracion_servicio;
        $solicitud->created_at = date("Y-m-d h:m:s");
        $solicitud->updated_at = date("Y-m-d h:m:s");
        $solicitud->save();
        return redirect()->route('solicitudes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $solicitud = Solicitudes::find($id);
        return view('solicitudes.edit',compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $solicitud = Solicitudes::find($id);
        $solicitud->fecha_solicitud = $request->fecha_solicitud;
        $solicitud->servicio_id = $request->servicio_id;
        $solicitud->fecha_servicio = $request->fecha_servicio;
        $solicitud->hora_servicio = $request->hora_servicio;
        $solicitud->ubicacion_servicio = $request->ubicacion_servicio;
        $solicitud->duracion_servicio = $request->duracion_servicio;
        $solicitud->save();
        return redirect()->route('solicitudes.index');
    }

    public function destroy(string $id)
    {
        $solicitud = Solicitudes::find($id); 
        $solicitud->delete(); 
        return redirect()->route('solicitudes.index')->with('success', 'Solicitud eliminado correctamente');
    }
}
