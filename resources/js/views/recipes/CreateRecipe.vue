<template>
    <page-header title="Create Recipe"></page-header>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mb-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2 class="mb-6">Recipe Info</h2>
                <text-input v-model="form.title" name="title"></text-input>
                <text-input v-model="form.url" name="url"></text-input>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 mb-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2>Ingredients:</h2>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <h2>Directions:</h2>
                <text-area-input v-model="form.directions" name="steps"></text-area-input>
            </div>
        </div>
    </div>
</template>

<script>
import PageHeader from "../../components/PageHeader"
import Form from "../../objects/form"
import TextInput from "../../components/inputs/TextInput"
import TextAreaInput from "../../components/inputs/TextAreaInput"

export default {
    name: 'CreateRecipe',

    data() {
        return {
            form: new Form({
                title: '',
                url: '',
                ingredients: '',
                steps: '',
            })
        }
    },

    components: {
        PageHeader,
        TextInput,
        TextAreaInput
    },
}
</script>
