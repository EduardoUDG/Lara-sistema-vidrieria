@extends('layouts.template')

@section('title', 'Crear empleado')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Crear empleado</h1>

            <hr class="my-3">
            <form action="" method="POST">
                @csrf

                <label>
                    Nombre completo del profesor <br>
                    <input type="text" name="nombre" placeholder="Nombre"
                    value="{{ old('nombre') }}">
                    @error('nombre')
                        <br><small class="text-danger">{{ $message }}</small>
                    @enderror
                </label><br>

                <label>
                    Centro universitario:<br>
                    <input type="text" name="universidad" placeholder="Universidad"
                    value="{{ old('universidad') }}">
                    @error('universidad')
                        <br><small class="text-danger">{{ $message }}</small>
                    @enderror
                </label><br>

                <label>
                    Departamento de la carrera:<br>
                    <input type="text" name="departamento" placeholder="Departamento"
                    value="{{ old('departamento') }}">
                    @error('departamento')
                        <br><small class="text-danger">{{ $message }}</small>
                    @enderror
                </label><br>

                <label>
                    Campus: <br>
                    <input type="text" name="campus" placeholder="UDG, UTM etc."
                    value="{{ old('campus') }}">
                    @error('campus')
                        <br><small class="text-danger">{{ $message }}</small>
                    @enderror
                </label><br>

                <button type="submit">Crear profeso</button>
            </form>
        </div>
    </div>

@endsection
