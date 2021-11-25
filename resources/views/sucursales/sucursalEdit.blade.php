@extends('layouts.template')

@section('title', 'Sucursal edit')


@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Editar sucursal</h3>
            <hr>


            <form action="{{ route('stores.update', $store) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="mb-3 input-group-md">
                <div id="">Nombre de sucursal</div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre"
                value="{{ old('nombre', $store->nombre) }}">
                @error('nombre')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Domicilio de sucursal</div>
                <input type="text" name="domicilio" class="form-control" placeholder="domicilio"
                value="{{ old('domicilio', $store->domicilio) }}">
                @error('domicilio')
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
                      <a href="{{ route('stores.index') }}"  class="btn btn-outline-danger">
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

