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
                <ul class="list-disc ml-5">
                    @foreach($recipe->ingredients as $i)
                        <li class="mb-1">
                            {{ $i['amount'] }} {{ $i['ingredient'] }} {{ $i['unit'] ?? '' }} {{ $i['memo'] ?? '' }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2>Steps</h2>
                <ol class="list-decimal ml-5">
                    @foreach($recipe->steps as $step)
                        <li class="mb-2">{{ $step }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</x-app-layout>
