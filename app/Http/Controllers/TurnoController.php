<?php

namespace App\Http\Controllers;
use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public function index(Request $request)
    {
        $turnos = Turno::all();
        return view('turnos.index', compact('turnos'));
    }

    public function create()
    {
        return view('turnos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dueño' => 'required',
            'mascota' => 'required',
            'fecha' => 'required|date',
            'hora' => 'required',
        ]);
        Turno::create($request->all());
        return redirect()->route('turnos.index')->with('sucess', 'Turno creado correctamente');
    }

    public function buscar(Request $request)
    {
        $mascota = $request->input('mascota');
        $turnos = Turno::where('mascota', 'like', "%$mascota%")->get();
        return view('turnos.index', compact('turnos'));
    }
}
