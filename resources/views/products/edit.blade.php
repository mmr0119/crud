@extends('layouts.app')

@section('title', 'Editar un producto')

@section('contenido')

    <div class="container">

        @if ($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <h1>Editar producto</h1>

        

        <form action="{{route('products.update', $product->id)}}" method="POST">
            @csrf
            @method('PATCH')

            <div>
                <b>ID</b> {{$product->id}}
            </div>

            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$product->name}}">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="price" value="{{$product->price}}">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$product->description}}</textarea>
            
            <button type="submit">Submit</button>
            <a href="{{route('products.index')}}">Volver</a>

        </form>

    </div>

@endsection