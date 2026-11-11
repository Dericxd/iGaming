<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
{{ __('Categorias') }}
</h2>
<a href="{{ route('categories.create') }}">
    crear
</a>
</div>
</x-slot>


<div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div
            class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <table class="w-full text-left table-auto min-w-max">
                <thead>
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Nombre
                        </p>
                    </th>

                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Acciones
                        </p>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $category->name }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <a href="{{route('categories.show',$category->id)}}" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                                Ver
                            </a>
                            @if( Auth::user()->role =='edit' )
                                <a href="{{route('categories.edit',$category->id)}}" class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                                    Edit
                                </a>
                            @endif
                            @if( Auth::user()->role =='admin' )
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
</x-app-layout>
<?php
