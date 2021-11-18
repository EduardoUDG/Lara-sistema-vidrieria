<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{

    public function index()
    {
        return view('empleados.empleadoIndex');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
