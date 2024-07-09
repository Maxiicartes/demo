<x-app-layout>
    <x-software-component>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="m-4">

        <h1>Editar Software</h1>
        <form action="{{ route('software.update', $software->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="{{ $software->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="version">Versión:</label>
                <input type="text" name="version" class="form-control" value="{{ $software->version }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_instalacion">Fecha de Instalación:</label>
                <input type="date" name="fecha_instalacion" class="form-control" value="{{ $software->fecha_instalacion }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_ultima_actualizacion">Fecha de Última Actualización:</label>
                <input type="date" name="fecha_ultima_actualizacion" class="form-control" value="{{ $software->fecha_ultima_actualizacion }}" required>
            </div>
            <div class="form-group">
                <label for="responsable">Responsable:</label>
                <input type="text" name="responsable" class="form-control" value="{{ $software->responsable }}" required>
            </div>
            <div class="form-group">
                <label for="unidad">Unidad:</label>
                <input type="text" name="unidad" class="form-control" value="{{ $software->unidad }}" required>
            </div>
            <br>
            <a class="btn btn-primary" href="{{ route('software.index') }}">Volver</a>
            <button type="submit" class="btn btn-success">Actualizar</button>

        </form>


                    </div>

                </div>
            </div>
    </x-software-component>
</x-app-layout>
