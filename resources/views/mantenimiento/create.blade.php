<x-app-layout>
    <x-mantenimiento-component>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="text-2xl">
                        Crear Mantenimiento
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('mantenimiento.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-4">
                            <label for="nombre_producto" class="block font-medium text-sm text-gray-700">Nombre del Producto</label>
                            <input type="text" name="nombre_producto" id="nombre_producto" class="form-control" value="{{ old('nombre_producto') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="foto_antes" class="block font-medium text-sm text-gray-700">Foto Antes</label>
                            <input type="file" name="foto_antes" id="foto_antes" class="form-control-file">
                        </div>

                        <div class="mt-4">
                            <label for="foto_despues" class="block font-medium text-sm text-gray-700">Foto Después</label>
                            <input type="file" name="foto_despues" id="foto_despues" class="form-control-file">
                        </div>

                        <div class="mt-4">
                            <label for="motivo" class="block font-medium text-sm text-gray-700">Motivo</label>
                            <textarea name="motivo" id="motivo" class="form-control">{{ old('motivo') }}</textarea>
                        </div>

                        <div class="mt-4">
                            <label for="fecha_ultima_actualizacion" class="block font-medium text-sm text-gray-700">Fecha de Última Actualización</label>
                            <input type="date" name="fecha_ultima_actualizacion" id="fecha_ultima_actualizacion" class="form-control" value="{{ old('fecha_ultima_actualizacion') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="fecha_mantenimiento" class="block font-medium text-sm text-gray-700">Fecha de Mantenimiento</label>
                            <input type="date" name="fecha_mantenimiento" id="fecha_mantenimiento" class="form-control" value="{{ old('fecha_mantenimiento') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="responsable" class="block font-medium text-sm text-gray-700">Responsable</label>
                            <input type="text" name="responsable" id="responsable" class="form-control" value="{{ old('responsable') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="unidad" class="block font-medium text-sm text-gray-700">Unidad</label>
                            <input type="text" name="unidad" id="unidad" class="form-control" value="{{ old('unidad') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="tecnico_nombre" class="block font-medium text-sm text-gray-700">Nombre del Técnico</label>
                            <input type="text" name="tecnico_nombre" id="tecnico_nombre" class="form-control" value="{{ old('tecnico_nombre') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="tecnico_rut" class="block font-medium text-sm text-gray-700">RUT del Técnico</label>
                            <input type="text" name="tecnico_rut" id="tecnico_rut" class="form-control" value="{{ old('tecnico_rut') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="empresa" class="block font-medium text-sm text-gray-700">Empresa</label>
                            <input type="text" name="empresa" id="empresa" class="form-control" value="{{ old('empresa') }}" />
                        </div>

                        <div class="mt-4">
                            <label for="tipo_visita" class="block font-medium text-sm text-gray-700">Tipo de Visita</label>
                            <input type="text" name="tipo_visita" id="tipo_visita" class="form-control" value="{{ old('tipo_visita') }}" />
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="btn btn-primary">Crear Mantenimiento</button>
                            <a href="{{ route('mantenimiento.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </x-mantenimiento-component>
</x-app-layout>
