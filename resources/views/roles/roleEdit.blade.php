@extends('layouts.template')

@section('title', 'Role edit')


@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Editar Rol</h3>
            <hr>


            <form action="{{ route('roles.update', $role) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="mb-3 input-group-md">
                <div id="">Nombre del role</div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre"
                value="{{ old('nombre', $role->nombre) }}">
                @error('nombre')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Telefono del role</div>
                <input type="text" name="telefono" class="form-control" placeholder="33 3322 5478 66"
                value="{{ old('telefono', $role->telefono) }}">
                @error('telefono')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>


              <br>
              {{--  form send  --}}
              <div class="row">
                  <div class="d-flex justify-content-between">
                      <button type="submit" class="btn btn-outline-primary">
                        <i class="fas fa-paper-plane"></i>
                          Editar
                       </button>
                      <a href="{{ route('roles.index') }}"  class="btn btn-outline-danger">
                        <i class="far fa-trash-alt"></i>
                        Cancelar
                      </a>
                  </div>
              </div>
            </form>


        </div>
    </div>
</div>

@endsection

