<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Centros Turísticos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-20xl mx-auto sm:px-2 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--<x-jet-welcome />--}}
               <a type="button" href="{{route('centros.create')}}"class="bg-indigo-500 px-10 py-2 rounded text-gray-200 font-semibold hover:bg-indigo-800 transition duration-200 each-in-out">Crear</a>
               <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th style="display: none;">ID</th>
                        <th class="border px-2 py-2">Nombre</th>
                        <th class="border px-4 py-2">Descripción</th>
                        <th class="border px-4 py-2">Ubicación</th>
                        <th class="border px-4 py-2">¿Cómo llegar?</th>
                        <th class="border px-1 py-2">Recomendación</th>
                        <th class="border px-4 py-2">Horario</th>
                        <th class="border px-4 py-2">Restricciones</th>
                        <th class="border px-4 py-2">Costo</th>
                        <th class="border px-4 py-2">URL de video</th>
                        <th class="border px-4 py-2">Imagen</th>
                        <th class="border px-4 py-2">Acciones</th>
                    </tr>  
                </thead>    
                <tbody>
                    @foreach ($centros as $centro)
                    <tr>
                        <td style="display: none;">{{$centro->id}}</td>
                        <td>{{$centro->nombre}}</td>
                        <td>{{$centro->descripcion}}</td>
                        <td>{{$centro->ubicacion}}</td>
                        <td>{{$centro->comollegar}}</td>
                        <td>{{$centro->recomendacion}}</td>
                        <td>{{$centro->horario}}</td>
                        <td>{{$centro->restriccion}}</td>
                        <td>{{$centro->costo}}</td>
                        <td>{{$centro->video}}</td>
                        <td  class="border px-14 py-1">
                            <img src="/imagen/{{$centro->imagen}}" width="60%">
                        </td>                        
                        <td class="border px-4 py-2">
                            <div class="flex justify-center rounded-lg text-lg" role="group">
                                 <!-- botón mostrar -->
                                 <a href="{{ route('centros.show', $centro->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Mostrar</a>
            
                                <!-- botón editar -->
                                <a href="{{ route('centros.edit', $centro->id) }}" class="rounded bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4">Editar</a>
            
                                <!-- botón borrar -->
                                <form action="{{ route('centros.destroy', $centro->id) }}" method="POST" class="formEliminar">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach   
                </tbody>  
                     
            </table>   
                <div>
                    {!! $centros->links() !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    (function () {
  'use strict'
  var forms = document.querySelectorAll('.formEliminar')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {        
          event.preventDefault()
          event.stopPropagation()        
          Swal.fire({
                title: '¿Confirma la eliminación del registro?',        
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#20c997',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Confirmar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
                }
            })                      
      }, false)
    })
})()
</script>
