@extends('base.base')
@section('title')
Usuario registrado
@endsection
@section('extraHead')
<meta http-equiv="refresh"
   content="3; url={{route('usuario.index')}}">
@endsection
@section('contenido')
<h1>Usuario registrado con éxito</h1>
@endsection