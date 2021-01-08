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
            @auth
            
            @if(Auth::user()->id_rol == 1)
            <!--Para administrador de sistema -->
            <li class="nav-item">
             <a class="nav-link" href="{{route('usuario.lista')}}">Usuarios</a> 
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('coordinacion.index')}}">Coordinaciones</a> 
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{route('area.index')}}">Áreas</a> 
           </li>
           @endif

           @if(Auth::user()->id_rol == 2)
           <!--Para encargado de activo fijo -->
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administración</a>
            <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('fuente.index') }}">Fuentes proveedoras</a>
              <a class="dropdown-item" href="{{ route('color.index') }}">Colores</a>
              <a class="dropdown-item" href="{{ route('estado.index') }}">Estados de A.F.</a>
              <a class="dropdown-item" href="{{ route('ubicacion.index') }}">Ubicaciones</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('activofijo.index')}}">Activo Fijo</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="tooltip" data-placement="bottom" title="De movimiento de activo fijo">Solicitudes</a> 
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Formularios</a>
            <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('form.a') }}">Formulario A</a>
              <a class="dropdown-item" href="{{ route('form.b') }}">Formulario B</a>
              <a class="dropdown-item" href="{{ route('form.c') }}">Formulario C</a>
              <a class="dropdown-item" href="{{ route('form.d') }}">Formulario D</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('acta') }}">Acta de entrega</a>
              <a class="dropdown-item" href="{{ route('salida') }}">Orden de salida</a>
              <a class="dropdown-item" href="{{ route('asignacion') }}">Asignación de Mobiliario</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('activofijo.depreciacion')}}">Depreciación</a> 
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Historial</a>
            <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Movimientos internos</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Acta de entrega</a>
              <a class="dropdown-item" href="#">Asignación de bienes</a>
              <a class="dropdown-item" href="#">Orden de salida</a>
            </div>
          </li> 
          @endif

          @if(Auth::user()->id_rol == 3)
          <!--Para encargado de preparaduría -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administración</a>
            <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{ route('reactivo.index') }}">Reactivos</a>
              <a class="dropdown-item" href="{{ route('cliente.index') }}">Clientes</a>
              <a class="dropdown-item" href="{{ route('persona.index') }}">Personas responsables</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ingresar pedido</a> 
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Informe de salida</a> 
          </li>
          @endif

          @if(Auth::user()->id_rol == 4)
          <!--Para jefe de laboratorio -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('af.usuarios') }}">Activos fijos</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('solicitud_af.index_usuario') }}"><i class="fas fa-list"></i>&nbsp;Mis solicitudes</a> 
          </li>
          <li class="nav-item"> 
            <a class="nav-link" href="{{ route('solicitud_af.formulario') }}">Solicitar activo fijo <i class="fas fa-external-link-alt"></i></a> 
          </li>
          @endif

          @if(Auth::user()->id_rol == 5)
          <!--Para jefe de area -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('af.usuarios') }}">Activos fijos</a> 
          </li>
          @endif

          @if(Auth::user()->id_rol == 6)
          <!--Para usuario de activo fijo -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('af.usuarios') }}">Activos fijos</a> 
          </li>
          @endif
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <span class="caret"></span>
              <span class="far fa-user"></span> </a>

              <div class="dropdown-menu dropdown-menu-right animate slideIn shadow" aria-labelledby="navbarDropdown">
                <i class="dropdown-item text-right">
                  {{head(explode(' ', trim(Auth::user()->nombres))) }}  {{head(explode(' ', trim(Auth::user()->apellidos))) }}
                </i>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-right" href="{{ route('usuario.perfil') }}">
                  Mi perfil &nbsp;<i class="fas fa-info"></i>
                </a>
                <a class="dropdown-item text-right" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Cerrar sesión <i class="fas fa-user-lock" aria-hidden="true"></i>
              </a>
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
