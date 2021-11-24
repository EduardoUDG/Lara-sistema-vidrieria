<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();

        return view('roles.roleIndex', compact('roles'));
    }


    public function create()
    {
        // retorna la vista para crear un role
        return view('roles.roleCreate');
    }




    public function store(Request $request)
    {
        $role = new Role();
        $role->nombre = $request->nombre;
        $role->telefono = $request->telefono;

        $role->save();
        return redirect()->route('roles.index');
    }



    public function show(Role $role)
    {
        // retorna 1 solo role
        return view('roles.roleShow', compact('role'));
    }


    public function edit(Role $role)
    {
        // retorna la vista para editar 1 role
        return view('roles.roleEdit', compact('role'));
    }


    public function update(Request $request, Role $role)
    {
        // actualiza un role
    }


    public function destroy(Role $role)
    {
        // elimina un role
    }
}
