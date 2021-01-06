<template>
    <page-header title="Recipes">
        <router-link to="/recipes/create" class="button bg-blue-500">Add</router-link>
    </page-header>

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
                        <router-link :to="'/recipes/'+ recipe.slug +'/edit'" class="button">Edit</router-link>
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
    }
}
</script>
