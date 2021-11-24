<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Seguro;
use App\Models\Role;

class EmpleadoController extends Controller
{

    public function index()
    {
        $empleados = Empleado::paginate(5);
        return view('empleados.empleadoIndex', compact('empleados'));
    }

    public function create()
    {
        $seguros = Seguro::all();
        $roles = Role::all();
        return view('empleados.empleadoCreate', compact('roles', 'seguros'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'curp' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required'

        ]);

        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;


        $empleado->save();
        return redirect()->route('empleados.index')->with('info', 'Empleado creado con éxito ');
    }

    public function show(Empleado $empleado)
    {
        //
    }

    public function edit(Empleado $empleado)
    {
        //
    }

    public function update(Request $request, Empleado $empleado)
    {
        //
    }

    public function destroy(Empleado $empleado)
    {
        //
    }
}
