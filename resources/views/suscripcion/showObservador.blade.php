<x-suscripcion-component>
    <head>
        <title>Detalles de la suscripción - {{ $suscripcion->nombre }}  </title>
    </head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-4">
                    <section class="text-gray-600 body-font overflow-hidden">
                        <div class="container py-24 mx-auto flex justify-center items-center">
                            <div class="lg:w-4/5 flex flex-wrap justify-center">
                                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                    <div class="flex justify-center mb-4">
                                        <img src="https://cat.americana.edu.co/polonuevo/administracionvirtual/images/sin_logo.png" alt="logo demo" style="width:253px;height:101px;">
                                    </div>
                                    <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalles del suscripcion</h2>
                                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $suscripcion->nombre }}</h1>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Versión</span>
                                        <span class="ml-auto text-gray-900">{{ $suscripcion->version }}</span>
                                    </div>
                                    <div class="flex border-t border-gray-200 py-2">
                                        <span class="text-gray-500">Fecha de Instalación:</span>
                                        <span class="ml-auto text-gray-900">{{ $suscripcion->fecha_instalacion }}</span>
                                    </div>
                                    <div class="flex border-t mb-6 border-gray-200 py-2">
                                        <span class="text-gray-500">Fecha de Última Actualización:</span>
                                        <span class="ml-auto text-gray-900">{{ $suscripcion->fecha_ultima_actualizacion }}</span>
                                    </div>
                                    <div class="flex border-t mb-6 border-gray-200 py-2">
                                        <span class="text-gray-500">Fecha de expiración:</span>
                                        <span class="ml-auto text-gray-900">{{ $suscripcion->fecha_expiracion }}</span>
                                    </div>
                                    <div class="flex border-t mb-6 border-gray-200 py-2">
                                        <span class="text-gray-500">Unidad:</span>
                                        <span class="ml-auto text-gray-900">{{ $suscripcion->unidad }}</span>
                                    </div>
                                    <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                                        <span class="text-gray-500">Responsable:</span>
                                        <span class="ml-auto text-gray-900">{{ $suscripcion->responsable }}</span>
                                    </div>
                                    <div class="flex space-x-1">
                                        <a class="flex w-100 ml-auto justify-center items-center text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" style="text-decoration:none;" href="{{ route('suscripcion.pdf', ['id' => $suscripcion->id]) }}">Generar PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-suscripcion-component>
