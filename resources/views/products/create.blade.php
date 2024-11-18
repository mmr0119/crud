@extends('layouts.app')

@section('title', 'Crear un producto')

@section('contenido')

    <div class="container">

        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <h1>Crear producto</h1>

        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{old('name')}}">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="price" value="{{old('price')}}">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{old('description')}}</textarea>
            
            <button type="submit">Submit</button>
            <a href="{{route('products.index')}}">Volver</a>

        </form>

    </div>

@endsection