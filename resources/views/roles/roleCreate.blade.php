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
              <div class="mb-3 input-group-sm">
                <div id="emailHelp" class="form-text">Nombre del role</div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre"> {{--  is-invalid  --}}
                <div id="" class="invalid-feedback">
                  escoga una telefono.
              </div>

              <div class="mb-3 input-group-sm">
                <div id="emailHelp" class="form-text">Telefono del role</div>
                <input type="text" name="telefono" class="form-control" placeholder="33 3322 5478 66"> {{--  is-invalid  --}}
                <div id="" class="invalid-feedback">
                  escoga una telefono.
              </div>


              <!-- submit button -->
              <br>
              <button type="submit" class="btn btn-outline-primary">
                <i class="fas fa-paper-plane"></i>
                  Registrar
               </button>
              <a href="{{ route('roles.index') }}"  class="btn btn-outline-danger">
                <i class="far fa-trash-alt"></i>
                Cancelar
              </a>
            </form>
          </div>

        </div>
      </div>



@endsection

