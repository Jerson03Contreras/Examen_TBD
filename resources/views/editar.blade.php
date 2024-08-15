@extends('layout')

@section('title', 'Editar Cliente')

@section('content')
<table cellpadding="3" cellspacing="5">

    @include('partials.validation-errors')
    <form action="{{ route('clientes.update', $cliente) }}" method="post">
        @method('PATCH')
        @include('partials.form', ['btnText' => 'Actualizar'])
    </form>
</table>
@endsection
