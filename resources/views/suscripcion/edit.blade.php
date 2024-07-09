<x-app-layout>
    <x-suscripcion-component>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="m-4">
                        <h1>Editar Suscripción</h1>
                        <form action="{{ route('suscripcion.update', $suscripcion->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" value="{{ $suscripcion->nombre }}" required>
                            </div>
                            <div class="form-group">
                                <label for="version">Versión:</label>
                                <input type="text" name="version" class="form-control" value="{{ $suscripcion->version }}" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_instalacion">Fecha de Instalación:</label>
                                <input type="date" name="fecha_instalacion" class="form-control" value="{{ $suscripcion->fecha_instalacion }}" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_ultima_actualizacion">Fecha de Última Actualización:</label>
                                <input type="date" name="fecha_ultima_actualizacion" class="form-control" value="{{ $suscripcion->fecha_ultima_actualizacion }}" required>
                            </div>
                            <div class="form-group">
                                <label for="fecha_expiracion">Fecha de Expiración:</label>
                                <input type="date" name="fecha_expiracion" class="form-control" value="{{ $suscripcion->fecha_expiracion }}" required>
                            </div>
                            <div class="form-group">
                                <label for="responsable">Responsable:</label>
                                <input type="text" name="responsable" class="form-control" value="{{ $suscripcion->responsable }}" required>
                            </div>
                            <div class="form-group">
                                <label for="unidad">Unidad:</label>
                                <input type="text" name="unidad" class="form-control" value="{{ $suscripcion->unidad }}" required>
                            </div>
                            <br>
                            <a class="btn btn-primary" href="{{ route('suscripcion.index') }}">Volver</a>
                            <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </x-suscripcion-component>
</x-app-layout>
