@extends('layouts.app')

@section('title', 'Lista de productos')

@section('contenido')

<div class="container">

    <h1>Listado de productos</h1>

    <a href="{{route('products.create')}}">Create</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Descripcion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>

                        <a href="{{route('products.show', $product->id)}}">View</a>
                        <a href="{{route('products.edit', $product->id)}}">Edit</a>
                        <form action="{{route('products.destroy', $product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Estas seguro de que quieres borrarla?')">DELETE</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
    

@endsection