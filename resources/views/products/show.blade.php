@extends('layouts.app')

@section('title', 'Producto')

@section('contenido')

<h1>Producto: </h1>

    <div>
        <b>ID</b> {{$product->id}}
    </div>

    <div>
        <b>Name</b> {{$product->name}}
    </div>

    <div>
        <b>Descripcion</b> {{$product->description}}
    </div>

    <div>
        <b>Precio</b> {{$product->price}}
    </div>

<a href="{{route('products.index')}}">Volver</a>

@endsection