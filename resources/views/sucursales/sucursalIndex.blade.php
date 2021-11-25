@extends('layouts.template')

@section('title', 'Index cliente')


@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">


                <div class="d-flex justify-content-between align-items-baseline">
                    <h2>Lista de sucursales</h2>
                    <a href="{{ route('stores.create') }}" class="btn btn-primary shadow">
                        <i class="fas fa-folder-plus"></i>
                        Crear nueva sucursal
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


                @if ( $stores->count() > 0 )
                    {{--  Table  --}}
                    <table class="table table-hover shadow mt-5 ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>dirección</th>
                            <th>acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                                <tr>
                                    <th>{{ $store->id }}</th>
                                    <td>{{ $store->nombre }}</td>
                                    <td>{{ $store->domicilio }}</td>
                                    <td  class="d-flex align-items-baseline gap-2">
                                        {{--  editar  --}}
                                        <a href="{{ route('stores.edit', $store) }}" class="btn btn-outline-primary btn-sm mr-3">Editar</a>

                                        {{--  Eliminar  --}}
                                        <form action="{{ route('stores.destroy', $store) }}" method="POST">
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
                  {{--  Panitate  --}}
                  <div class="container p-0">
                      <div class="row">
                          <div class="d-flex justify-content-end">
                              @if ( $stores->count() > 0 )
                                  {{ $stores->links() }}
                              @endif
                          </div>
                      </div>
                  </div>

            </div>
        </div>
    </div>



@endsection

