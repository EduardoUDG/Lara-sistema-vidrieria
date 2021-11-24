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
            'sexo' => 'required',
            'role_id' => 'required',
            'seguro_id' => 'required'
        ]);

        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->curp = $request->curp;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->sexo = $request->sexo;
        $empleado->role_id = $request->role_id;
        $empleado->seguro_id = $request->seguro_id;
        $empleado->save();

        return redirect()->route('empleados.index')->with('info', 'Empleado creado con éxito ');
    }

    public function show(Empleado $empleado)
    {
        //
    }

    public function edit(Empleado $empleado)
    {
        $seguros = Seguro::all();
        $roles = Role::all();
        return view('empleados.empleadoEdit', compact('empleado', 'seguros', 'roles'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'curp' => 'required',
            'fecha_nacimiento' => 'required',
            'sexo' => 'required',
            'role_id' => 'required',
            'seguro_id' => 'required'
        ]);

        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->curp = $request->curp;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->sexo = $request->sexo;
        $empleado->role_id = $request->role_id;
        $empleado->seguro_id = $request->seguro_id;
        $empleado->update();

        return redirect()->route('empleados.index')->with('info', 'Empleado editado con éxito ');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('info', 'Empleado eliminado correctamente');
    }
}
