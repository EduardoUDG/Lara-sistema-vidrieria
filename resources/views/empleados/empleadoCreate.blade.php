@extends('layouts.template')

@section('title', 'Role create')


@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Registrar Empleado</h3>
            <hr>


            <form action="{{ route('empleados.store') }}" method="POST">
              @csrf

              <div class="mb-3 input-group-md">
                <div id="">Nombre del empleado</div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
                @error('nombre')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Apellido del empleado</div>
                <input type="text" name="apellido" class="form-control" placeholder="apellido">
                @error('apellido')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">curp del empleado</div>
                <input type="text" name="curp" class="form-control" placeholder="curp">
                @error('curp')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Fecha de nacimiento del empleado</div>
                <input type="date" name="fecha_nacimiento" class="form-control" placeholder="fecha nacimiento">
                @error('fecha_nacimiento')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Sexo del empleado</div>
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
                <div id="">Role del empleado</div>
                <select class="form-select" name="sexo">
                    <option value=""></option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->nombre }}</option>
                    @endforeach
                </select>
                @error('sexo')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Seguro social del empleado</div>
                <select class="form-select" name="sexo">
                    <option value=""></option>
                    @foreach ($seguros as $seguro)
                        <option value="{{ $seguro->id }}">{{ $seguro->numero }}</option>
                    @endforeach
                </select>
                @error('sexo')
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
                          Registrar
                       </button>
                      <a href="{{ route('empleados.index') }}"  class="btn btn-outline-danger">
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

