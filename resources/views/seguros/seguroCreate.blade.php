@extends('layouts.template')

@section('title', 'Role create')


@section('content')


<div class="container mt-5">
    <div class="row justify-content-center">
          <div class="col-md-6">
            <h3 class="mt-4">Registrar seguro</h3>
            <hr>


            <form action="{{ route('seguros.store') }}" method="POST">
              @csrf
              <div class="mb-3 input-group-md">
                <div id="">Numero del seguro</div>
                <input type="text" name="numero" class="form-control" placeholder="12 digitos">
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
                          Registrar
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

