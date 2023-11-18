<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registros;
use Barryvdh\DomPDF\PDF;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Registros::all();
        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function eliminarUsuario(Request $request, $id)
    {
        Registros::destroy($id);

        return response()->json(['message' => 'Usuario eliminado con éxito']);
    }
    protected $pdf; 

    public function __construct(PDF $pdf) {
        $this->pdf = $pdf;
    }
    public function generarPDF()
    {
        $usuarios = Registros::all();
        $pdf = $this->pdf->loadView('usuarios', compact('usuarios'));

        return $pdf->download('listadoPersonasRegistradas.pdf');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
