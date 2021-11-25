<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Producto;


class HomeController extends Controller
{


    public function index()
    {
        $sucursales = Store::all();
        $productos = Producto::all();
        return view('home', compact('sucursales', 'productos'));
    }

}
