<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', ['personas' => $personas]);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'documento' => 'required|unique:personas|max:10',
            'nombre' => 'required',
            'correo' => 'required|unique:personas',
            'direccionResidencia' => 'required|max:255',
            'estrato' => 'required'
            
            
        ]);
        //operario->NombredecampoTabla = .......(el name del input)
        $persona = new Persona();
        $persona->documento = $request->input('documento');
        $persona->nombre = $request->input('nombre');
        $persona->correo = $request->input('correo');
        $persona->direccionResidencia = $request->input('direccionResidencia');
        $persona->estrato = $request->input('estrato');
        $persona->save();

        return view("personas.message",['msg'=>"Registro guardado" ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
