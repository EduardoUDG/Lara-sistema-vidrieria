@extends('layouts.template')

@section('title', 'Crear seguro')


@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">


                <div class="d-flex justify-content-between align-items-baseline">
                    <h2>Lista de seguros sociales</h2>
                    <a href="{{ route('seguros.create') }}" class="btn btn-primary shadow">
                        <i class="fas fa-folder-plus"></i>
                        Crear nuevo seguro
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

                {{--  Table  --}}
                @if ($seguros->count() > 0)
                    <table class="table table-hover shadow mt-5 ">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>nombre</th>
                            <th>telefono</th>
                            <th>acción</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($seguros as $seguro)
                                <tr>
                                    <th>{{ $seguro->id }}</th>
                                    <td>{{ $seguro->numero }}</td>
                                    <td  class="d-flex align-items-baseline gap-2">
                                        {{--  editar  --}}
                                        <a href="{{ route('seguros.edit', $seguro) }}" class="btn btn-outline-primary btn-sm mr-3">Editar</a>

                                        {{--  Eliminar  --}}
                                        <form action="{{ route('seguros.destroy', $seguro) }}" method="POST">
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
                              {{ $seguros->links() }}
                          </div>
                      </div>
                  </div>

            </div>
        </div>
    </div>



@endsection

