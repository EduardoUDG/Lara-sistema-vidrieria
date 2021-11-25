<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::paginate(5);
        return view('sucursales.sucursalIndex', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursales.sucursalCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'domicilio' => 'required'
        ]);


        $store = new Store();
        $store->nombre = $request->nombre;
        $store->domicilio = $request->domicilio;

        $store->save();
        return redirect()->route('stores.index')->with('info', 'Sucursal creado con éxito ');

    }

    public function show(Store $store)
    {
        //
    }

    public function edit(Store $store)
    {
        return view('sucursales.sucursalEdit', compact('store'));
    }

    public function update(Request $request, Store $store)
    {
        $request->validate([
            'nombre' => 'required',
            'domicilio' => 'required'
        ]);

        $store->nombre = $request->nombre;
        $store->domicilio = $request->domicilio;

        $store->update();
        return redirect()->route('stores.index')->with('info', 'Sucursal actualizada con éxito ');
    }

    public function destroy(Store $store)
    {
        $store->delete();
        return redirect()->route('stores.index')->with('info', 'Sucursal eliminada con éxito ');
    }
}
