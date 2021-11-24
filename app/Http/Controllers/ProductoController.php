<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::paginate(5);
        return view('productos.productoIndex', compact('productos'));
    }

    public function create()
    {
        return view('productos.productoCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required|min:5',
            'existencia' => 'required',
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->existencia = $request->existencia;
        $producto->save();

        return redirect()->route('productos.index')->with('info', 'Producto creado con éxito ');
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit(Producto $producto)
    {
        return view('productos.productoEdit', compact('producto'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required|min:5',
            'existencia' => 'required',
        ]);

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->existencia = $request->existencia;
        $producto->save();

        return redirect()->route('productos.index')->with('info', 'Producto editado con éxito ');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('info', 'Producto eliminado con éxito ');
    }
}
