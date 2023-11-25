<nav class="navbar navbar-expand-lg bg-primary  sticky-top">
  <div class="container-fluid ">
    <a class="navbar-brand" href="/">
      <span class=" fs-5 fw-bold texto-blanco">Sistema</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="{{route('productosIndex')}}"><span class="texto-blanco">Productos</span></a>
        </li>



        <li class="nav-item">

          <form action="{{ route('logoutStore') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary ">Cerrar
              sesión</button>
          </form>

        </li>

        <li class="nav-item">
          <a class="nav-link active " aria-current="page"><span class="text-warning">Usuario: {{ auth()->user()->username }}</span></a>
        </li>


      </ul>
    </div>
  </div>
</nav>