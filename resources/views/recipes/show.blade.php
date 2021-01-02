<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle">
                {{ $recipe->title }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mb-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2>Ingredients</h2>
                <ul class="list-disc list-inside">
                    @foreach($recipe->ingredients as $ingredient => $quantity)
                        <li>{{ $ingredient }}: {{ $quantity }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2>Steps</h2>
                <ol class="list-decimal list-inside">
                    @foreach($recipe->steps as $step)
                        <li>{{ $step }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</x-app-layout>
