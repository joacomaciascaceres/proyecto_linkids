@extends('layout')

@section('password')
<ul>
    @foreach($usuarios as $usuario)
    <li>{{ $usuario->email }}</li>
    @endforeach
  </ul>
@stop