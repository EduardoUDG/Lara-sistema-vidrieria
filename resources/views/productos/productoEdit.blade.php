@extends('layouts.template')

@section('title', 'Producto edit')


@section('content')



<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Editar producto</h3>
            <hr>


            <form action="{{ route('productos.update', $producto) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="mb-3 input-group-md">
                <div id="">Nombre del producto</div>
                <input type="text" name="nombre" class="form-control" placeholder="nombre"
                value="{{ old('nombre', $producto->nombre) }}">
                @error('nombre')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Precio del producto</div>
                <input type="number" name="precio" class="form-control" placeholder="precio"
                value="{{ old('precio', $producto->precio) }}">
                @error('precio')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Descripcion del producto</div>
                <input type="text" name="descripcion" class="form-control" placeholder="descripcion"
                value="{{ old('descripcion', $producto->descripcion) }}">
                @error('descripcion')
                    <small class="text-danger tet-sm">
                        <p>{{ $message }}</p>
                    </small>
                @enderror
              </div>

              <div class="mb-3 input-group-md">
                <div id="">Existencia del producto</div>
                <input type="number" name="existencia" class="form-control" placeholder="existencia"
                value="{{ old('existencia', $producto->existencia) }}">
                @error('existencia')
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
                      <a href="{{ route('productos.index') }}"  class="btn btn-outline-danger">
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

