@extends('layouts.template')

@section('title', 'Seguro edit')


@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Editar Seguro</h3>
            <hr>


            <form action="{{ route('seguros.update', $seguro) }}" method="POST">
              @csrf
              @method('PATCH')
              <div class="mb-3 input-group-md">
                <div id="">Nombre del role</div>
                <input type="text" name="numero" class="form-control" placeholder="numero"
                value="{{ old('numero', $seguro->numero) }}">
                @error('numero')
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
                      <a href="{{ route('seguros.index') }}"  class="btn btn-outline-danger">
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

