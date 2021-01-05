<template>
    <page-header :title="recipe.title"></page-header>
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
                    <li v-for="step in recipe.steps" v-text="step" class="mb-1"></li>
                </ol>
            </div>
        </div>
    </div>
</template>

<script>
import PageHeader from "../../components/PageHeader"

export default {
    name: 'Recipe',
    components: {
        PageHeader
    },
    
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
