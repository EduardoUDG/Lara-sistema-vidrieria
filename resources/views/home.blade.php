@extends('layouts.template')

@section('title', 'Sistema vidríeria')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <h1>Bienvenido al home</h1>
            <hr class="my-3">
            {{--  sidebar  --}}
            <div class="col-2">
                <div class="card shadow">
                    <div class="card-header ">
                        <h5>Sucursales</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($sucursales as $sucursal)
                            <li class="list-group-item">
                                <span class="badge rounded-pill bg-primary">{{ $sucursal->nombre }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{--  content  --}}
            <div class="col-10 border">
                <h4 class="text-center my-5">Ultimos productos agregados</h4>
                {{--  Cartas  --}}

                <div class="row gap-5 justify-content-center">
                    @foreach ($productos as $producto)
                        <div class="card shadow-sm" style="width: 18rem;">
                            <img src="https://images.unsplash.com/photo-1462556791646-c201b8241a94?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1165&q=80" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p>Precio: <span class="badge bg-dark text-white">${{ $producto->precio }}</span></p>

                                <p>{{ $producto->descripcion }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection
