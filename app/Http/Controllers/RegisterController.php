<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registros;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.principal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required|max:20',
            'cedula' => 'required|unique:registros|max:10',
            'numTelefono' => 'required|max:15',
            'Direccion'=>'required|max:15'
        ]);
        Registros::create([
            'nombre' => $request->nombre,
            'cedula' => $request->cedula,
            'numTelefono' => $request->numTelefono,
            'Direccion' => $request->Direccion
        ]);   

        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
