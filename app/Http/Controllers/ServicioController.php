<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;
use MongoDB\Laravel\MongoDBServiceProvider;
use Illuminate\Support\Facades\View;
use Auth;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $data = Servicios::all();
       return view('servicios.index',compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('servicios.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $servicios = new Servicios;
        $servicios->tipo_servicio= $request->tipo_servicio;
        $servicios->descripcion_servicio = $request->descripcion_servicio;
        $servicios->precio_servicio = $request->precio_servicio;
        $servicios->duracion_servicio = $request->duracion_servicio;
        $servicios->created_at = date("Y-m-d h:m:s");
        $servicios->updated_at = date("Y-m-d h:m:s");
        $servicios->save();
        return redirect()->route('servicios.index');

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
        $servicios = Servicios::find($id);
        return view('servicios.edit',compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $servicios = Servicios::find($id);
        $servicios->tipo_servicio = $request->tipo_servicio;
        $servicios->descripcion_servicio = $request->descripcion_servicio;
        $servicios->precio_servicio = $request->precio_servicio;
        $servicios->duracion_servicio = $request->duracion_servicio;
        $servicios->save();
        return redirect()->route('servicios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $servicio = Servicios::find($id); 
        $servicio->delete(); 
        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado correctamente');
    }
}
