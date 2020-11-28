    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-lg">
        <a href="{{route('inicio.admin')}}" class="navbar-brand d-flex align-items-center"><i class="fa fa-home" aria-hidden="true">&nbsp;</i> 
          <strong>Inicio</strong>
        </a>
        <img class="navbar-brand" src="{{asset('img/logoBlanco.png')}}" height="40px" width="65px" alt="logo">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <!--<a class="nav-link" href="#">test</a>-->
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administración</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{route('usuario.index')}}">Registrar usuario</a>
                <a class="dropdown-item" href="{{ route('usuario.lista') }}">Usuarios</a>
                <a class="dropdown-item" href="{{ route('coordinacion.index') }}">Coordinaciones</a>
                <a class="dropdown-item" href="{{ route('area.index') }}">Áreas</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Preparaduría</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('reactivo.index') }}">Reactivos</a>
                <a class="dropdown-item" href="{{ route('cliente.index') }}">Clientes</a>
                <a class="dropdown-item" href="{{ route('persona.index') }}">Personas responsables</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Activo Fijo</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('fuente.index') }}">Fuentes proveedoras</a>
                <a class="dropdown-item" href="{{ route('color.index') }}">Colores</a>
                <a class="dropdown-item" href="{{ route('estado.index') }}">Estados de A.F.</a>
                <a class="dropdown-item" href="{{ route('ubicacion.index') }}">Ubicaciones</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Reportes</a>
              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="{{ route('form.a') }}">Formulario A</a>
                <a class="dropdown-item" href="#">Formulario B</a>
                <a class="dropdown-item" href="#">Formulario C</a>
                <a class="dropdown-item" href="#">Formulario D</a>
              </div>
            </li>
            <li class="nav-item">
              <!--<a class="nav-link disabled" href="#">LinkDeshabilitado</a>-->
            </li>
          </ul>
          @auth
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="caret"></span>
                {{head(explode(' ', trim(Auth::user()->nombres))) }}  {{head(explode(' ', trim(Auth::user()->apellidos))) }} <span class="far fa-user"></span> </a>

                <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('usuario.perfil') }}">
                    Perfil &nbsp;<span class="badge badge-success">Nuevo!</span>
                  </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Cerrar sesión <i class="fas fa-user-lock" aria-hidden="true"></i>
                </a>
                <!--<a class="btn btn-outline-success my-2 my-sm-0" href="{{route('login')}}">Iniciar Sesion</a>-->

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
          @endauth
          @guest
          <!-- Código si hubiera invitado -->
          @endguest
        </div>
      </nav>
    </header>
