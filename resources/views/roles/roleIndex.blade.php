@extends('layouts.template')

@section('title', 'Role index')


@section('content')

    <h1>Vista desde role index</h1>
    <a href="{{ route('roles.create') }}">Crear role</a>
    <hr>

    <h2>Lista de roles</h2>
    <ul>
        @foreach ($roles as $role)
            <li><b>Nombre del role:</b> {{ $role->nombre }}  <b>Telefono del role: </b> {{ $role->telefono }}</li>
        @endforeach
    </ul>



@endsection

