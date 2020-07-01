@extends('base.base')
@section('jsFooter')
<script src="https://code.jquery.com/jquery-2.2.4.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
{{-- <script type="text/javascript" src="{{ asset('toastr/toastr.min.js') }}"></script> --}}
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script type="text/javascript" src="{{ asset('toastr/configtoast.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
@endsection()
@section('title') Iniciar sesión @endsection
@section('navbar')
@endsection
@section('extraHead')
<link href="{{ asset('css/floating-labels.css') }}" rel="stylesheet">
@endsection
@section('contenido')
@auth 
<h1 class="text-center text-light">Sesión iniciada</h1>
<h2 class="text-center"><a class="btn btn-outline-light my-2 my-sm-0" href="{{route('inicio.admin')}}">Inicio</a></h2>

@endauth
@guest
@section('container')
@endsection
<div class="">
  <form class="form-signin test-radius" method="POST" action="{{ route('login')}}" id="myForm">
    {{ csrf_field() }}
    <div class="text-center mb-4">
      <h1 class="h1 mb-3 font-weight-normal text-shadow"><b>SIL</b></h1>
      <img class="mb-4" src="http://www.salud.gob.sv/archivos/pdf/plantillas_institucionales/logos-minsal-062019/header_transparente-MINSAL-062019_membrete.png" alt="" width="300" height="150">
      <h1 class="h3 mb-3 font-weight-normal text-shadow"><b>Iniciar sesión</b></h1>
    </div>

    <div class="form-label-group {{ $errors->has('nombre_usuario') ? 'has-error': '' }}">
      <input type="text" id="nombre_usuario" class="form-control"  name="nombre_usuario" value="{{ old('nombre_usuario')}}" required autofocus pattern="[a-z.]+$" ><!-- title="Ingrese su nombre de usuario sin espacios y en minúscula"-->
      <label for="nombre_usuario"><i>Usuario</i></label>
      {!! $errors->first('usuario','<h5 class="text-center"><br><span class="badge badge-warning"><i>:message</i></span></h5>') !!}
    </div>

    <div class="form-label-group {{ $errors->has('password') ? 'has-error': '' }}">
      <input type="password" id="inputPassword" class="form-control" placeholder="contraseña" name="password"  required><!-- title="escriba su contraseña"-->
      <label for="inputPassword"><i>Contraseña</i></label>
      {!! $errors->first('password','<h5 class="text-center"><br><span class="badge badge-warning"><i>:message</i></span></h5>') !!}
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="hi()">Ingresar</button><br>
  </form>
</div>
@endguest
@endsection
@section('footer')
@endsection