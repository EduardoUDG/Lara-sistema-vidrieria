@extends('layouts.template')

@section('title', 'Role edit')


@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Editar cliente</h3>
            <hr>


            <form action="{{ route('clientes.update', $cliente) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="mb-3 input-group-md">
                <div id="">Nombre del cliente</div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre"
                value="{{ old('nombre', $cliente->nombre) }}">
                @error('nombre')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Apellido del cliente</div>
                <input type="text" name="apellido" class="form-control" placeholder="apellido"
                value="{{ old('apellido', $cliente->apellido) }}">
                @error('apellido')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>


              <div class="mb-3 input-group-md">
                <div id="">Sexo del cliente</div>
                <select class="form-select" name="sexo">
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
                @error('sexo')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Domicilio del cliente</div>
                <input type="text" name="domicilio" class="form-control" placeholder="domicilio"
                value="{{ old('domicilio', $cliente->domicilio) }}">
                @error('domicilio')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Telefono del cliente</div>
                <input type="text" name="telefono" class="form-control" placeholder="telefono"
                value="{{ old('telefono', $cliente->telefono) }}">
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
                      <a href="{{ route('clientes.index') }}"  class="btn btn-outline-danger">
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

