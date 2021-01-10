<template>
    <page-header title="Recipes">
        <router-link
            to="/recipes/create"
            class="button bg-white border border-blue-700 text-gray-700 hover:bg-blue-500 hover:text-white">
            Add
        </router-link>
    </page-header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div v-for="recipe in recipes" class="border-b-2 border-gray-100 mb-3 flex justify-between">
                        <h2 class="mb-2">
                            {{ recipe.title }}
                        </h2>
                        <div class="flex">
                            <router-link
                                :to="'/recipes/' + recipe.slug"
                                class="button bg-white border border-green-600 text-gray-700 hover:bg-green-500 hover:text-white mr-4">
                                View
                            </router-link>

                            <router-link
                                :to="'/recipes/'+ recipe.slug +'/edit'"
                                class="button bg-white border-yellow-500 border text-gray-700 hover:bg-yellow-400 hover:text-white mr-4">
                                Edit
                            </router-link>

                            <button
                                v-on:click="deleteRecipe(recipe)"
                                class="button bg-white border border-red-700 text-gray-600 hover:bg-red-500 hover:text-white">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PageHeader from "../../components/PageHeader"

export default {
    name: 'Recipes',

    components: {
        PageHeader
    },

    data() {
        return {
            recipes: {},
        }
    },

    created() {
        axios
            .get('/api/recipes')
            .then(response => response.data)
            .then(data => {
                this.recipes = data
            })
    },

    methods: {
        deleteRecipe(recipe) {
            if (confirm('Do you really want to delete ' + recipe.title + '?')) {
                axios.delete('api/recipes/' + recipe.slug)
                    .then(this.recipes.splice(recipe.index, 1))
                    .catch(error => console.log(error))
            }
        },
    }
}
</script>
