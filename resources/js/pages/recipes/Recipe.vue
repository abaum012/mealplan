<template>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle">
                    {{ recipe.title }}
                </h2>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 mb-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2>Ingredients:</h2>
                    <ul class="list-disc ml-5">
                        <li v-for="ingredient in recipe.ingredients" class="mb-1">
                            {{ ingredient.amount }} {{ ingredient.name }} {{ ingredient.unit }} {{ ingredient.memo }}
                        </li>
                    </ul>
                </div>

                <div class="p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2>Directions:</h2>
                    <ol class="list-decimal ml-5">
                        <li v-for="step in recipe.steps" class="mb-1">
                           {{ step }}
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            recipe: {}
        }
    },

    created() {
        axios
            .get('/api/recipes/' + this.$route.params.slug)
            .then(response => response.data)
            .then(data => {
                this.recipe = data
            })
    }
}
</script>
