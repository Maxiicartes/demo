<x-app-layout>
    <x-mantenimiento-component>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="m-4">
                        <section class="text-gray-600 body-font overflow-hidden">
                            <div class="container py-24 ">
                                <div id="description" class="section-content">
                                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                        <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                            <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalles del mantenimiento</h2>
                                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $mantenimiento->nombre_producto }}</h1>
                                            <div class="flex mb-4">
                                                <button onclick="funcionCambiante(1)" id="primer1" class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1" style="text-decoration: none;">Descripción</button>
                                                <button onclick="funcionCambiante(3)" id="tercero1" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Técnico</button>
                                                <button onclick="funcionCambiante(2)" id="segundo1" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Imágenes</button>
                                            </div>
                                            <p class="leading-relaxed mb-4"><strong>Motivo:</strong> {{$mantenimiento->motivo}}</p>
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
                                        </div>
                                        <div class="flex flex-col justify-end">
                                            <div class="flex-grow">
                                                <!-- Otros contenidos aquí -->
                                            </div>
                                            <div class="mb-4">
                                                {!! QrCode::size(400)->generate('http://127.0.0.1:8000/revisar-mantenimiento/'.$mantenimiento->id) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="images" class="section-content hidden">
                                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                        <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                            <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalles del mantenimiento</h2>
                                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $mantenimiento->nombre_producto }}</h1>
                                            <div class="flex mb-4">
                                                <button onclick="funcionCambiante(1)" id="primer2" class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1" style="text-decoration: none;">Descripción</button>
                                                <button onclick="funcionCambiante(3)" id="tercero2" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Técnico</button>
                                                <button onclick="funcionCambiante(2)" id="segundo2" class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">Imágenes</button>
                                            </div>
                                            <p>Foto antes del mantenimiento:</p>
                                            <div class="flex py-2">

                                                @if ($mantenimiento->foto_antes)
                                                    <img src="{{ asset('storage/' . $mantenimiento->foto_antes) }}" alt="Foto Antes" class="img-thumbnail" style="max-width: 300px;">
                                                @else
                                                    No hay imagen
                                                @endif
                                            </div>




                                        </div>
                                        <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                            <h2 class="text-sm title-font text-gray-500 tracking-widest">&nbsp;</h2>
                                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">&nbsp;</h1>
                                            <div class="flex mb-3">
                                                <p  class="flex-grow text-indigo-500 border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">&nbsp;</p>
                                                <p  class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">&nbsp;</p>
                                                <p  class="flex-grow border-b-2 border-gray-300 py-2 text-lg px-1" style="text-decoration: none;">&nbsp;</p>
                                            </div>
                                            <p>Foto después del mantenimiento:</p>
                                            <div class="flex py-2">

                                                @if ($mantenimiento->foto_despues)
                                                    <img src="{{ asset('storage/' . $mantenimiento->foto_despues) }}" alt="Foto despues" class="img-thumbnail" style="max-width: 300px;">
                                                @else
                                                    No hay imagen
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div id="details" class="section-content hidden">
                                    <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                        <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0 ">
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

                                        </div>
                                        <div class="flex flex-col justify-end">
                                            <div class="flex-grow">
                                                <!-- Otros contenidos aquí -->
                                            </div>
                                            <div class="mb-4">
                                                {!! QrCode::size(400)->generate('http://127.0.0.1:8000/revisar-mantenimiento/'.$mantenimiento->id) !!}
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
                            <div class="inline-flex justify-center" style="display: flex; justify-content: center;">
                                <a href="{{ route('mantenimiento.index') }}" style="text-decoration:none;" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                    <i class="fa-solid fa-arrow-left-long"></i> Volver
                                </a>
                                <a href="{{ route('mantenimiento.edit', ['id' => $mantenimiento->id]) }}" style="text-decoration:none;" class="bg-amber-500 hover:bg-amber-700 text-gray-800 font-bold py-2 px-4">
                                    <i class="fa-solid fa-pencil"></i> Editar
                                </a>
                                <a href="{{ route('mantenimiento.pdf', ['id' => $mantenimiento->id]) }}" style="text-decoration:none;" class="bg-red-600 hover:bg-red-800 text-gray-800 font-bold py-2 px-4">
                                    <i class="fa-solid fa-file-pdf"></i> PDF
                                </a>
                                <a href="{{ route('qr.show', ['tipo' => 'mantenimiento', 'id' => $mantenimiento->id]) }}" style="text-decoration:none;" class="bg-green-500 hover:bg-green-600 text-gray-800 font-bold py-2 px-4 rounded-r">
                                    <i class="fa-solid fa-qrcode"></i> QR
                                </a>
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </x-mantenimiento-component>
</x-app-layout>
