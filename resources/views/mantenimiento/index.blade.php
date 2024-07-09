<x-app-layout>
    <x-mantenimiento-component>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow-xl sm:rounded-lg">
                    <div class="m-4">
                        <h1 class="pt-4">Lista de Mantenimientos</h1>
        <a href="{{ route('mantenimiento.create') }}" class="btn btn-primary">Agregar Mantenimiento</a>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <style>
                        .menuColores {
                            text-decoration: none;
                            color: black;
                        }

                        .menuColores:hover {
                            font-weight: bold;
                        }

                        .menuColoresEliminar {
                            text-decoration: none;
                            color: black;
                        }

                        .menuColoresEliminar:hover {
                            color: red;
                            font-weight: bold;
                        }

                        .dropdown-divider {
                        height: 1px;
                        margin: 0.5rem 0;
                        overflow: hidden;
                        background-color: #e9ecef;
                    }
                    </style>

                    <table class="table table-bordered mt-4">
                        <tr>
                            <th>ID</th>
                            <th>Nombre del Producto</th>
                            <th>Foto Antes</th>
                            <th>Foto Después</th>
                            <th>Motivo</th>
                            <th>Acción</th>
                        </tr>
                        @foreach ($mantenimientos as $mantenimiento)
                            <tr>

                                <td>{{ $mantenimiento->id }}</td>
                                <td>{{ $mantenimiento->nombre_producto }}</td>
                                <td>
                                    @if ($mantenimiento->foto_antes)
                                        <img src="{{ asset('storage/' . $mantenimiento->foto_antes) }}" alt="Foto Antes" class="img-thumbnail" style="max-width: 100px;">
                                    @else
                                        No hay imagen
                                    @endif
                                </td>
                                <td>
                                    @if ($mantenimiento->foto_despues)
                                        <img src="{{ asset('storage/' . $mantenimiento->foto_despues) }}" alt="Foto Después" class="img-thumbnail" style="max-width: 100px;">
                                    @else
                                        No hay imagen
                                    @endif
                                </td>
                                <td>{{ $mantenimiento->motivo }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                          <li><a class="menuColores ml-3" href="{{ route('mantenimiento.show', $mantenimiento->id) }}"> <i class="fa-solid fa-eye"></i> Mostrar</a></li>
                                          <li><a class="menuColores ml-3" href="{{ route('mantenimiento.edit', ['id' => $mantenimiento->id]) }}"> <i class="fa-solid fa-pencil"></i> Editar</a></li>
                                          <li><a class="menuColores ml-3" href="{{ route('mantenimiento.pdf', ['tipo' => 'mantenimiento', 'id' => $mantenimiento->id]) }}"> <i class="fa-solid fa-file-pdf"></i> Generar PDF</a></li>
                                          <li><a class="menuColores ml-3" href="{{ route('qr.show', ['tipo' => 'mantenimiento', 'id' => $mantenimiento->id]) }}"><i class="fa-solid fa-qrcode"></i> Revisar QR</a></li>
                                          <li class="divider dropdown-divider"></li>
                                          <form action="{{ route('mantenimiento.destroy', $mantenimiento->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                          <li><button type="submit" class="menuColoresEliminar ml-3"> <i class="fa-solid fa-trash"></i> Eliminar</button></li>
                                        </form>
                                        </ul>
                                      </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
<br>

                </div>
            </div>
        </div>
    </div>
</x-mantenimiento-component>
</x-app-layout>

