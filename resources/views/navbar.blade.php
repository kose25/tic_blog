<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light py-4">
        <div class="container-fluid px-5">
            <div class="d-flex flex-column">
                <a class="navbar-brand" href="#">
                <img
        src="{{ asset('/images/Logo-Monica-fonseca-cropped.png') }}"
        class="me-2"
        alt="Logo"
        loading="lazy"
      />               
              </a>
              {{-- <small>Ingeniera de Sistemas</small>--}}                
            </div>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#quiensoy') }}">¿Quien soy?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#contacto') }}">Contacto</a>
                    </li>
                    @if (Auth::check())
                    <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
        {{ Auth::user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="{{ url('/new-post') }}">Agregar un nuevo post</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/user/'.Auth::id().'/posts') }}">Mis Posts</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/user/'.Auth::id()) }}">Mi Perfil</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ url('/logout') }}">Cerrar Sesion</a>
          </li>
        </ul>
      </li>
      @endif
                </ul>
            </div>
        </div>
    </nav>