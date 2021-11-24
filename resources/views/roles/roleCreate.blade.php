@extends('layouts.template')

@section('title', 'Role create')


@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Registrar Rol</h3>
            <hr>


            <form action="{{ route('roles.store') }}" method="POST">
              @csrf
              <div class="mb-3 input-group-md">
                <div id="">Nombre del role</div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre">
                @error('nombre')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Telefono del role</div>
                <input type="text" name="telefono" class="form-control" placeholder="33 3322 5478 66">
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
                          Registrar
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

