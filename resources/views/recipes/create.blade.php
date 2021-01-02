<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle">
                {{ __('Create Recipe') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/recipes">
                        @csrf
                        <div class="mb-6">
                            <h2 class="mb-6">Recipe Info</h2>
                            <div class="mb-4">
                                <label class="block font-medium text-sm text-gray-700" for="title">
                                    Title
                                </label>
                                <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="email" type="text" name="title" required="required" autofocus="autofocus">
                            </div>
                            <div class="mb-4">
                                <label class="block font-medium text-sm text-gray-700" for="url">
                                    URL <small class="text-gray-400">optional</small>
                                </label>
                                <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="email" type="url" name="url" value="https://google.com">
                            </div>
                        </div>

                        <div class="mb-6">
                            <h2 class="mb-6">Ingredients</h2>
                            <div class="flex">
                                <div class="w-1/12 mb-4 mr-6">
                                    <label class="block font-medium text-sm text-gray-700">
                                        Amount
                                    </label>
                                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="amount" type="text" name="ingredients[0][amount]">
                                </div>
                                <div class="mb-4 pr-6">
                                    <label class="block font-medium text-sm text-gray-700">
                                        Units <small class="text-gray-400">optional</small>
                                    </label>
                                    <div class="inline-flex">
                                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"></svg>
                                        <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 mt-1 hover:border-gray-400 focus:outline-none appearance-none" name="ingredients[0][unit]">
                                            <option value=""></option>
                                            <option value="tsp">teaspoon</option>
                                            <option value="Tbsp">tablespoon</option>
                                            <option value="oz">ounce</option>
                                            <option value="cup">cup</option>
                                            <option value="pint">pint</option>
                                            <option value="quart">quart</option>
                                            <option value="lb">pounds</option>
                                            <option value="clove">clove</option>
                                            <option value="stalk">stalk</option>
                                            <option value="dash">dash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-1/4 mb-4 pr-6">
                                    <label class="block font-medium text-sm text-gray-700">
                                        Ingredient
                                    </label>
                                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="ingredient" type="text" name="ingredients[0][ingredient]">
                                </div>
                                <div class="w-1/6 mb-4 pr-6">
                                    <label class="block font-medium text-sm text-gray-700">
                                        Memo <small class="text-gray-400">optional</small>
                                    </label>
                                    <input class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="memo" type="text" name="ingredients[0][memo]">
                                </div>
                                <div class="mb-4 flex items-end">
                                    <button class="rounded-md shadow-sm bg-red-500 text-white h-8 w-8 mb-2" type="button">&times</button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <h2 class="mb-6">Steps</h2>
                            <div class="mb-4">
                                <label class="block font-medium text-sm text-gray-700">
                                    Step 1
                                </label>
                                <textarea class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="step" name="steps[]"></textarea>
                            </div>
                        {{--                            dynamic inputs, but just a few right now--}}
                        </div>

                        <button class="rounded-md bg-green-500 text-white px-2 py-1 mb-2" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
