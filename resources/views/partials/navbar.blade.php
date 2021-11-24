<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    {{--  Logo  --}}

    <!-- Button collapse -->
    <a class="navbar-brand" href="{{ route('home') }}">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{--  Links navbar  --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Sedes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sucursales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Producto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
        </li>
      </ul>

      {{--  search navbar  --}}
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar...">
        <button class="btn btn-outline-success" type="submit">Busqueda</button>
      </form>
    </div>
  </div>
</nav>
