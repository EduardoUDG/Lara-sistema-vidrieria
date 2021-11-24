<?php

namespace App\Http\Controllers;

use App\Models\Seguro;
use Illuminate\Http\Request;

class SeguroController extends Controller
{
    public function index()
    {
        $seguros = Seguro::paginate(5);
        return view('seguros.seguroIndex', compact('seguros'));
    }

    public function create()
    {
        return view('seguros.seguroCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|min:12',
        ]);

        $seguro = new Seguro();
        $seguro->numero = $request->numero;
        $seguro->save();
        return redirect()->route('seguros.index')->with('info', 'Seguro creado con éxito ');
    }

    public function show(Seguro $seguro)
    {
        //
    }

    public function edit(Seguro $seguro)
    {
        return view('seguros.seguroEdit', compact('seguro'));
    }

    public function update(Request $request, Seguro $seguro)
    {
        $request->validate([
            'numero' => 'required|min:12',
        ]);

        $seguro->numero = $request->numero;

        $seguro->update();
        return redirect()->route('seguros.index')->with('info', 'Seguro actualizado con éxito ');
    }

    public function destroy(Seguro $seguro)
    {
        $seguro->delete();
        return redirect()->route('seguros.index')->with('info', 'Seguro eliminado correctamente');
    }
}
