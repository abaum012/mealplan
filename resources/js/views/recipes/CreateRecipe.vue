<template>
    <page-header title="Create Recipe"></page-header>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mb-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="mb-6">Recipe Info</h2>
                <text-input v-model="title" name="title" required="true"></text-input>
                <text-input v-model="url" name="url"></text-input>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mb-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="mb-6">Ingredients:</h2>
                <IngredientInput
                    v-for="(ingredient, index) in ingredients"
                    v-model="ingredients[index]"
                    @remove-ingredient="removeIngredient(index)">
                </IngredientInput>
                <div class="flex">
                    <button class="button flex-grow justify-center py-2 mx-12 border-2 border-green-500 bg-white text-green-800" @click="addIngredient">Add Ingredient</button>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="mb-6">Directions:</h2>
                    <DirectionInput
                        v-for="(direction, index) in directions"
                        v-model="directions[index]"
                        :index="index"
                        @remove-direction="removeDirection(index)">
                    </DirectionInput>
                <div class="flex">
                    <button class="button flex-grow justify-center py-2 mx-12 border-2 border-green-500 bg-white text-green-800" @click="addDirection">Add Step</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PageHeader from "../../components/PageHeader"
import TextInput from "../../components/inputs/TextInput"
import DirectionInput from "../../components/inputs/DirectionInput"
import IngredientInput from "../../components/inputs/IngredientInput"

export default {
    name: 'CreateRecipe',

    data() {
        return {
            title: '',
            url: '',
            ingredients: [{
                amount: '',
                units: '',
                name: '',
                memo: '',
                category: '',
            }],
            directions: [''],
        }
    },

    components: {
        PageHeader,
        TextInput,
        DirectionInput,
        IngredientInput
    },

    methods: {
        // ripe for refactor
        addDirection() {
            this.directions.push('')
        },

        removeDirection(index) {
            this.directions.splice(index, 1);
        },

        addIngredient() {
            this.ingredients.push({
                amount: '',
                units: '',
                name: '',
                memo: '',
                category: '',
            })
        },

        removeIngredient(index) {
            this.ingredients.splice(index, 1);
        }
    }
}
</script>
