<x-mantenimiento-component>
    <head>
        <title>Detalles del mantenimiento - {{ $mantenimiento->nombre_producto }}  </title>
    </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-4">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container py-24 ">
                            <div id="description" class="section-content">
                                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                    <div class="lg:w-full w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                        <div class="flex justify-center mb-4">
                                            <img src="https://cat.americana.edu.co/polonuevo/administracionvirtual/images/sin_logo.png" alt="logo demo" style="width:253px;height:101px;">
                                        </div>
                                        <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalles del mantenimiento</h2>
                                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $mantenimiento->nombre_producto }}</h1>
                                        <div class="flex mb-4">
                                            <button onclick="funcionCambiante(1)" id="primer1" class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1" style="text-decoration: none;">Descripción</button>
                                            <button onclick="funcionCambiante(3)" id="tercero1" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Técnico</button>
                                            <button onclick="funcionCambiante(2)" id="segundo1" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Imágenes</button>
                                        </div>
                                        <p class="leading-relaxed mb-4"><strong>Motivo:</strong> {{$mantenimiento->motivo}}</p>
                                        <div class="flex border-t border-gray-200 py-2">
                                            <span class="text-gray-500">Versión</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->version }}</span>
                                        </div>
                                        <div class="flex border-t border-gray-200 py-2">
                                            <span class="text-gray-500">Fecha de Última Actualización:</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->fecha_ultima_actualizacion }}</span>
                                        </div>
                                        <div class="flex border-t mb-6 border-gray-200 py-2">
                                            <span class="text-gray-500">Fecha de Mantenimiento:</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->fecha_mantenimiento }}</span>
                                        </div>
                                        <div class="flex border-t border-gray-200 py-2">
                                            <span class="text-gray-500">Responsable:</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->responsable }}</span>
                                        </div>
                                        <div class="flex border-t mb-6 border-gray-200 py-2">
                                            <span class="text-gray-500">Unidad:</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->unidad }}</span>
                                        </div>
                                        <div class="flex justify-center space-x-1">
                                            <a class="flex text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="text-decoration:none;" href="{{ route('mantenimiento.pdf', ['id' => $mantenimiento->id]) }}">Generar PDF</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="images" class="section-content hidden">
                                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                    <div class="lg:w-full w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                        <div class="flex justify-center mb-4">
                                            <img src="https://cat.americana.edu.co/polonuevo/administracionvirtual/images/sin_logo.png" alt="logo demo" style="width:253px;height:101px;">
                                        </div>
                                        <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalles del mantenimiento</h2>
                                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $mantenimiento->nombre_producto }}</h1>
                                        <div class="flex mb-4">
                                            <button onclick="funcionCambiante(1)" id="primer2" class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1" style="text-decoration: none;">Descripción</button>
                                            <button onclick="funcionCambiante(3)" id="tercero2" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Técnico</button>
                                            <button onclick="funcionCambiante(2)" id="segundo2" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Imágenes</button>
                                        </div>
                                        <p class="text-center">Foto antes del mantenimiento:</p>
                                        <div class="flex justify-center py-2">
                                            @if ($mantenimiento->foto_antes)
                                                <img src="{{ asset('storage/' . $mantenimiento->foto_antes) }}" alt="Foto Antes" class="img-thumbnail" style="height: 300px;">
                                            @else
                                                No hay imagen
                                            @endif
                                        </div>
                                        <p class="text-center">Foto después del mantenimiento:</p>
                                        <div class="flex justify-center py-2">
                                            @if ($mantenimiento->foto_despues)
                                                <img src="{{ asset('storage/' . $mantenimiento->foto_despues) }}" alt="Foto después" class="img-thumbnail" style="height: 300px;">
                                            @else
                                                No hay imagen
                                            @endif
                                        </div>




                                    </div>

                                </div>
                                <div class="flex justify-center space-x-1">
                                    <a class="flex text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="text-decoration:none;" href="{{ route('mantenimiento.pdf', ['id' => $mantenimiento->id]) }}">Generar PDF</a>
                                </div>

                            </div>

                            <div id="details" class="section-content hidden">
                                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                    <div class="lg:w-full w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0 ">
                                        <div class="flex justify-center mb-4">
                                            <img src="https://cat.americana.edu.co/polonuevo/administracionvirtual/images/sin_logo.png" alt="logo demo" style="width:253px;height:101px;">
                                        </div>
                                        <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalles del mantenimiento</h2>
                                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $mantenimiento->nombre_producto }}</h1>
                                        <div class="flex mb-4">
                                            <button onclick="funcionCambiante(1)" id="primer3" class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1" style="text-decoration: none;">Descripción</button>
                                            <button onclick="funcionCambiante(3)" id="tercero3" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Técnico</button>
                                            <button onclick="funcionCambiante(2)" id="segundo3" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Imágenes</button>
                                        </div>
                                        <div class="flex py-2">
                                            <span class="text-gray-500">Nombre del técnico</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->tecnico_nombre }}</span>
                                        </div>
                                        <div class="flex border-t border-gray-200 py-2">
                                            <span class="text-gray-500">Rut del técnico:</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->tecnico_rut }}</span>
                                        </div>
                                        <div class="flex border-t mb-6 border-gray-200 py-2">
                                            <span class="text-gray-500">Empresa:</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->empresa }}</span>
                                        </div>
                                        <div class="flex border-t border-gray-200 py-2">
                                            <span class="text-gray-500">Tipo de visita:</span>
                                            <span class="ml-auto text-gray-900">{{ $mantenimiento->tipo_visita }}</span>
                                        </div>
                                        <div class="flex  py-2">
                                            <span class="text-gray-500">&nbsp;</span>
                                            <span class="ml-auto text-gray-900">&nbsp;</span>
                                        </div>
                                        <div class="flex justify-center space-x-1">
                                            <a class="flex text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="text-decoration:none;" href="{{ route('mantenimiento.pdf', ['id' => $mantenimiento->id]) }}">Generar PDF</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                function funcionCambiante(opcion) {
                                    // Ocultar todas las secciones
                                    var sections = document.querySelectorAll('.section-content');
                                    sections.forEach(function(section) {
                                        section.classList.add('hidden');
                                    });

                                    // Eliminar la clase active de todos los botones
                                    var buttons = document.querySelectorAll('button');
                                    buttons.forEach(function(button) {
                                        button.classList.remove('text-indigo-500', 'border-indigo-500');
                                        button.classList.add('border-gray-300');
                                    });
                                    console.log(opcion);

                                    // Mostrar la sección correspondiente
                                    if (opcion === 1) {
                                        console.log('entro1');
                                        document.getElementById('description').classList.remove('hidden');
                                        document.getElementById('primer1').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('primer1').classList.remove('border-gray-300');
                                        document.getElementById('primer2').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('primer2').classList.remove('border-gray-300');
                                        document.getElementById('primer3').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('primer3').classList.remove('border-gray-300');


                                    } else if (opcion === 2) {
                                        console.log('entro2');
                                        document.getElementById('images').classList.remove('hidden');
                                        document.getElementById('segundo1').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('segundo1').classList.remove('border-gray-300');
                                        document.getElementById('segundo2').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('segundo2').classList.remove('border-gray-300');
                                        document.getElementById('segundo3').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('segundo3').classList.remove('border-gray-300');
                                    } else if (opcion === 3) {
                                        console.log('entro3');
                                        document.getElementById('details').classList.remove('hidden');
                                        document.getElementById('tercero1').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('tercero1').classList.remove('border-gray-300');
                                        document.getElementById('tercero2').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('tercero2').classList.remove('border-gray-300');
                                        document.getElementById('tercero3').classList.add('text-indigo-500', 'border-indigo-500');
                                        document.getElementById('tercero3').classList.remove('border-gray-300');
                                    }
                                }

                                // Mostrar la primera sección al cargar la página
                                document.addEventListener('DOMContentLoaded', function() {
                                    funcionCambiante(1);
                                });
                            </script>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-mantenimiento-component>
