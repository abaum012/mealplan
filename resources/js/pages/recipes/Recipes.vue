<template>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle">
                    Recipes
                </h2>
                <router-link to="/recipes/create" class="flex items-center rounded-md bg-blue-500 text-white px-2 py-1">Add</router-link>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div v-for="recipe in recipes" class="border-b-2 border-gray-100 mb-3 flex justify-between">
                            <h2 class="mb-2">
                                <router-link :to="'/recipes/' + recipe.slug">
                                    {{ recipe.title }}
                                </router-link>
                            </h2>
                            <router-link :to="'/recipes/'+ recipe.slug +'/edit'" class="flex items-center rounded-md bg-green-500 text-white px-2 py-1 mb-2">Edit</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    data() {
        return {
            recipes: {}
        }
    },

    created() {
        axios
            .get('/api/recipes')
            .then(response => response.data)
            .then(data => {
                this.recipes = data
            })
    }
}
</script>
