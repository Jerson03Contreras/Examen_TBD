@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-6">
            <h2>Clientes</h2>
        </div>
        <div class="col-md-6 text-md-right">
            <a href="{{ route('clientes.create') }}" class="btn btn-primary">
                <i class="fas fa-user-plus"></i> Nuevo Cliente
            </a>
        </div>
    </div>

    @if ($clientes->isNotEmpty())
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->id }}</td>
                                    <td>
                                        <a href="{{ route('clientes.show', $cliente->id) }}">{{ $cliente->nombres }}</a>
                                    </td>
                                    <td>{{ $cliente->email ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Estás seguro de querer eliminar este cliente?')">
                                                <i class="fas fa-trash-alt"></i> Eliminar
                                            </button>



                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-4">
            {{ $clientes->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div class="alert alert-info" role="alert">
            No existe ningún cliente que mostrar.
        </div>
    @endif
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endpush
