<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::paginate(5);
        return view('clientes.clienteIndex', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.clienteCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'sexo' => 'required',
            'domicilio' => 'required',
            'telefono' => 'required|min:10|max:10',
        ]);

        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->sexo = $request->sexo;
        $cliente->domicilio = $request->domicilio;
        $cliente->telefono = $request->telefono;
        $cliente->save();

        return redirect()->route('clientes.index')->with('info', 'Cliente creado con éxito ');
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.clienteEdit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'sexo' => 'required',
            'domicilio' => 'required',
            'telefono' => 'required|min:10|max:10',
        ]);

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->sexo = $request->sexo;
        $cliente->domicilio = $request->domicilio;
        $cliente->telefono = $request->telefono;
        $cliente->save();

        return redirect()->route('clientes.index')->with('info', 'Cliente editado con éxito ');

    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('info', 'Cliente eliminado correctamente');
    }
}
