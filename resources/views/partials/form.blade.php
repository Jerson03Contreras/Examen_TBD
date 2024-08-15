<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">{{ isset($cliente->id) ? 'Editar Cliente' : 'Crear Cliente' }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ isset($cliente->id) ? route('clientes.update', $cliente) : route('clientes.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                @if(isset($cliente->id))
                    @method('PATCH')
                @endif

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombres" name="nombres" value="{{ old('nombres', $cliente->nombres) }}" required maxlength="100">
                        <div class="invalid-feedback">
                            @error('nombres')
                                {{ $message }}
                            @else
                                El nombre es requerido y no debe exceder los 100 caracteres.
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $cliente->email) }}" maxlength="35">
                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @else
                                El formato del correo electrónico no es válido o excede los 35 caracteres.
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" name="direccion" value="{{ old('direccion', $cliente->direccion) }}" required maxlength="50">
                        <div class="invalid-feedback">
                            @error('direccion')
                                {{ $message }}
                            @else
                                La dirección es requerida y no debe exceder los 50 caracteres.
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fono">Teléfono</label>
                        <input type="tel" class="form-control @error('fono') is-invalid @enderror" id="fono" name="fono" value="{{ old('fono', $cliente->fono) }}" maxlength="15">
                        <div class="invalid-feedback">
                            @error('fono')
                                {{ $message }}
                            @else
                                El número de teléfono no debe exceder los 15 caracteres.
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
