@extends('layouts.plantilla')

@section('title', 'Formulario')

@section('content')
    <h1>Aquí podrás agregar los productos para el menú</h1> 
    
    <form action="{{route('cursos.store')}}" method="POST">

        @csrf

        <label>
            Nombre del producto: 
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Descripción: 
            <br>
            <textarea name="descripcion" rows="S"></textarea>
        </label>

        <br>
        <label>
            Precio: 
            <br>
            <input type="number" name="prize">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection

{{-- Aquí se agregarán los producto para el menú --}}