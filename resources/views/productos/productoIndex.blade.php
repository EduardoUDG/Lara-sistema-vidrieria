@extends('layouts.template')

@section('title', 'Productos')


@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">


                <div class="d-flex justify-content-between align-items-baseline">
                    <h2>Lista de productos</h2>
                    <a href="{{ route('productos.create') }}" class="btn btn-primary shadow">
                        <i class="fas fa-folder-plus"></i>
                        Crear nuevo producto
                    </a>
                </div>
                <hr>

                {{--  Alert  --}}
                @if ( session('info') )
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif


                @if ( $productos->count() > 0 )
                    {{--  Table  --}}
                    <table class="table table-hover shadow mt-5 ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>precio</th>
                            <th>descripcion</th>
                            <th>existencia</th>
                            <th>acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <th>{{ $producto->id }}</th>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>${{ $producto->precio }}</td>
                                    <td>{{ $producto->descripcion }}</td>
                                    <td>{{ $producto->existencia }}</td>
                                    <td  class="d-flex align-items-baseline gap-2">
                                        {{--  editar  --}}
                                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-outline-primary btn-sm mr-3">Editar</a>

                                        {{--  Eliminar  --}}
                                        <form action="{{ route('productos.destroy', $producto) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                  <br>
                  <br>
                  {{--  Panginate  --}}
                  <div class="container p-0">
                      <div class="row">
                          <div class="d-flex justify-content-end">
                              {{ $productos->links() }}
                          </div>
                      </div>
                  </div>

            </div>
        </div>
    </div>



@endsection

