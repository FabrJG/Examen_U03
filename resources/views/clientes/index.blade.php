@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
    <h1>Clientes</h1>
    <p>Examen Unidad 03 > Clientes</p>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-3">Crear Cliente</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombres</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombres }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->direccion }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>
                    <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-sm btn-primary">Editar</a>
                    <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este cliente?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection