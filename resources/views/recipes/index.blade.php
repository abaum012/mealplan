<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle">
                {{ __('Recipes') }}
            </h2>
            <a href="/recipes/create" class="flex items-center rounded-md bg-blue-500 text-white px-2 py-1">Add</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach($recipes as $recipe)
                        <div class="border-b-2 border-gray-100 mb-3 flex justify-between">
                            <h2 class="mb-2"><a href="{{ $recipe->path() }}">{{ $recipe->title }}</a></h2>
                            <a href="{{ $recipe->path() }}/edit" class="flex items-center rounded-md bg-green-500 text-white px-2 py-1 mb-2">Edit</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
