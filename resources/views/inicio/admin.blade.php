@extends('base.base')
@section('title')
Inicio
@endsection
@section('extraJS')
@endsection
@section('contenido')
<a href="{{route('excel.export.af')}}" title="" class="btn btn-primary">Para descargar excel</a>
<br><h1 class="text-center text-shadow">SIL</h1><br>
<img class="img-fluid rounded mx-auto d-block" src="http://www.salud.gob.sv/archivos/pdf/plantillas_institucionales/logos-minsal-062019/header_transparente-MINSAL-062019_membrete.png" width="500px" height="232px" alt="logo"><br>
<h2 class="text-center text-shadow">Sistema Integrado del <br> Laboratorio Nacional de Salud Pública</h2>

@endsection
