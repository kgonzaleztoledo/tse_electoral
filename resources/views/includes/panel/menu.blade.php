<ul class="navbar-nav">
    <h6 class="navbar-heading text-muted">Gestión</h6>
    <li class="nav-item  active ">
      <a class="nav-link  active " href="{{ url('/home') }}">
        <i class="ni ni-tv-2 text-danger"></i> Dashboard
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="{{ url('participantes') }}">
        <i class="ni ni-single-02 text-yellow"></i> Participantes
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="ni ni-planet text-blue"></i>Contactos Instituto Electoral
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="ni ni-pin-3 text-orange"></i> Categorías
      </a>
    </li>



    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
      >
        <i class="fas fa-sign-in-alt"></i> Cerrar sesión
      </a>
      <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
      @csrf
    </form>

    </li>
  </ul>
  <!-- Divider -->
  <hr class="my-3">
  <!-- Heading -->
  <h6 class="navbar-heading text-muted">REPORTES</h6>
  <!-- Navigation -->
  <ul class="navbar-nav mb-md-3">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('reportes/participantes/line') }}">
        <i class="ni ni-spaceship"></i> Graficas de Estadisticas Generales
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-palette"></i>Soporte
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-ui-04"></i> Configuración
      </a>
    </li>
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item active active-pro">
      <a class="nav-link" href="#">
        <i class="ni ni-send text-dark"></i> Licencia hasta 31-08-2023
      </a>
    </li>
  </ul>
