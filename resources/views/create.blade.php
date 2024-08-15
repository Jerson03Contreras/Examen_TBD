@extends('layout')

@section('title', 'Crear Cliente')

@section('content')
<table cellpadding="3" cellspacing="5">


    @include('partials.validation-errors')
    <form action="{{ route('clientes.store') }}" method="post">
        @include('partials.form', ['btnText' => 'Guardar'])
    </form>
</table>
@endsection
