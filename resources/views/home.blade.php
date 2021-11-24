@extends('layouts.template')

@section('title', 'Sistema vidríeria')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <h1>Bienvenido al home</h1>
            <hr class="my-3">
            {{--  sidebar  --}}
            <div class="col-2">
                <div class="card">
                    <div class="card-header ">
                        <h5>Sucursales</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">An item</li>
                      <li class="list-group-item">A second item</li>
                      <li class="list-group-item">A third item</li>
                    </ul>
                </div>
            </div>

            {{--  content  --}}
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                      Dashboard
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Porro consectetur enim accusantium sint, nisi, iure quisquam
                        nemo similique doloremque beatae error eum, rem maxime ullam
                        odio vel aut culpa ducimus.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
