<x-app-layout>
    <x-software-component>


        <div class="py-12">
            <div class="max-w-7xl mx-auto  sm:px-6 lg:px-8">
                <div class="bg-white   shadow-xl sm:rounded-lg">
                    <div class="m-4">
                        <h1 class="pt-4">Lista de Software</h1>
        <a href="{{ route('software.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Agregar Software</a>
        <br>
<br>
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
        <table class="table table-bordered mb-5">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Versión</th>
                <th>Fecha de Instalación</th>
                <th>Fecha de Última Actualización</th>
                <th>Responsable</th>
                <th>Unidad</th>
                <th width="280px">Acciones</th>
            </tr>
            @foreach ($softwares as $software)
                <tr>
                    <td>{{ $software->id }}</td>
                    <td>{{ $software->nombre }}</td>
                    <td>{{ $software->version }}</td>
                    <td>{{ $software->fecha_instalacion }}</td>
                    <td>{{ $software->fecha_ultima_actualizacion }}</td>
                    <td>{{ $software->responsable }}</td>
                    <td>{{ $software->unidad }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Opciones
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a class="menuColores ml-3" href="{{ route('software.show', $software->id) }}"> <i class="fa-solid fa-eye"></i> Mostrar</a></li>
                              <li><a class="menuColores ml-3" href="{{ route('software.edit', ['id' => $software->id]) }}"> <i class="fa-solid fa-pencil"></i> Editar</a></li>
                              <li><a class="menuColores ml-3" href="{{ route('software.pdf', ['tipo' => 'software', 'id' => $software->id]) }}"> <i class="fa-solid fa-file-pdf"></i> Generar PDF</a></li>
                              <li><a class="menuColores ml-3" href="{{ route('qr.show', ['tipo' => 'software', 'id' => $software->id]) }}"><i class="fa-solid fa-qrcode"></i> Revisar QR</a></li>
                              <li class="divider dropdown-divider"></li>
                              <form action="{{ route('software.destroy', $software->id) }}" method="POST" style="display:inline">
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

                    </div>

                    <br>
                </div>
            </div>
        </div>
    </x-software-component>
</x-app-layout>
