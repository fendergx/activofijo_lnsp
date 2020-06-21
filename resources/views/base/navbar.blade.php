    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <img class="navbar-brand" src="{{ asset('img/logo.png') }}" width="3%">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('inicio.admin')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <!--<a class="nav-link" href="#">test</a>-->
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administración</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('usuario.index')}}">Registrar usuarios</a>
              <a class="dropdown-item" href="{{ route('coordinacion.index') }}">Coordinaciones</a>
              <a class="dropdown-item" href="{{ route('area.index') }}">Áreas</a>
            </div>
          </li>
            <li class="nav-item">
              <!--<a class="nav-link disabled" href="#">LinkDeshabilitado</a>-->
            </li>
          </ul>
          @auth
          <form class="form-inline mt-2 mt-md-0" method="POST" action="{{route('logout')}}">
            {{ csrf_field() }}
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cerrar Sesión</button>
          </form>
          @endauth
          @guest
          <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      <span class="caret"></span>
                                Opciones</a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                                    <!--<a class="btn btn-outline-success my-2 my-sm-0" href="{{route('login')}}">Iniciar Sesion</a>-->

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
          @endguest
        </div>
      </nav>
    </header>
