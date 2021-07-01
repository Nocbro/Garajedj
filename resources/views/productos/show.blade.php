@extends('layouts.plantilla')

@section('title', 'Pedido')

@section('content')
    <h1>Listado de productos</h1>
    <ul>
        @foreach ($productos as $producto)
             <li>{{$producto}}</li>
         @endforeach
    </ul>
@endsection