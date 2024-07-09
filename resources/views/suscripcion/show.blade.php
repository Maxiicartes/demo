<x-app-layout>
    <x-suscripcion-component>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="m-4">
                        <section class="text-gray-600 body-font overflow-hidden">
                            <div class="container py-24 ">
                              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                                <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                                  <h2 class="text-sm title-font text-gray-500 tracking-widest">Detalles de la suscripción</h2>
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
                                  <div class="flex border-t border-gray-200 py-2">
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
                                    <div class="inline-flex">
                                        <a href="{{ route('suscripcion.index') }}" style="text-decoration:none;" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
                                            <i class="fa-solid fa-arrow-left-long"></i> Volver
                                        </a>
                                        <a href="{{ route('suscripcion.edit', ['id' => $suscripcion->id]) }}" style="text-decoration:none;" class="bg-amber-500 hover:bg-amber-700 text-gray-800 font-bold py-2 px-4">
                                            <i class="fa-solid fa-pencil"></i> Editar
                                          </a>
                                          <a href="{{ route('suscripcion.pdf', ['id' => $suscripcion->id]) }}" style="text-decoration:none;" class="bg-red-600 hover:bg-red-800 text-gray-800 font-bold py-2 px-4">
                                            <i class="fa-solid fa-file-pdf"></i> PDF
                                          </a>
                                        <a href="{{ route('qr.show', ['tipo' => 'suscripcion', 'id' => $suscripcion->id]) }}" style="text-decoration:none;" class="bg-green-500 hover:bg-green-600 text-gray-800 font-bold py-2 px-4 rounded-r">
                                            <i class="fa-solid fa-qrcode"></i> QR
                                        </a>
                                      </div>
                                </div>
                                {!!QrCode::size(400)->generate('http://127.0.0.1:8000/revisar-suscripcion/'.$suscripcion->id) !!}
                              </div>
                            </div>
                          </section>
                    </div>
                </div>
            </div>
        </div>
    </x-suscripcion-component>
</x-app-layout>
