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
        <i class="ni ni-planet text-blue"></i> Personal de Contactos TSe
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ url('categorias') }}">
        <i class="ni ni-pin-3 text-orange"></i> Categorías
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link " href="#">
        <i class="ni ni-bullet-list-67 text-red"></i> Genero
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-key-25 text-info"></i> Login
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
      <a class="nav-link" href="#">
        <i class="ni ni-spaceship"></i> Getting started
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-palette"></i> Foundation
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="ni ni-ui-04"></i> Components
      </a>
    </li>
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item active active-pro">
      <a class="nav-link" href="#">
        <i class="ni ni-send text-dark"></i> Upgrade to PRO
      </a>
    </li>
  </ul>
