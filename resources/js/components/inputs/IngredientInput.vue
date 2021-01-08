<template>
    <div class="mb-2 flex">
        <div class="flex flex-1">
            <div class="w-1/12 pr-6">
                <text-input
                    v-model="modelValue.amount"
                    name="amount"
                    required="true"
                    @input="$emit('update:modelValue.amount', $event.target.value)">
                </text-input>
            </div>

            <div class="pr-6">
                <dropdown-input
                    v-model="modelValue.unit"
                    name="unit"
                    :options="units"
                    @input="$emit('update:modelValue.unit', $event.target.value)">
                </dropdown-input>
            </div>

            <div class="w-1/4 pr-6">
                <text-input
                    v-model="modelValue.name"
                    name="name"
                    required="true"
                    @input="$emit('update:modelValue.name', $event.target.value)">
                </text-input>
            </div>

            <div class="w-1/6 pr-6">
                <text-input
                    v-model="modelValue.memo"
                    name="memo"
                    @input="$emit('update:modelValue.memo', $event.target.value)">
                </text-input>
            </div>

            <div class="pr-6">
                <dropdown-input
                    v-model="modelValue.category"
                    name="category"
                    :options="categories"
                    @input="$emit('update:modelValue.category', $event.target.value)">
                </dropdown-input>
            </div>

        </div>
        <div class="flex">
            <button
                class="rounded-md shadow-sm bg-red-500 text-white h-8 w-8 mt-6 disabled:opacity-50"
                type="button"
                tabindex="-1"
                @click="$emit('removeIngredient')">
                &times
            </button>
        </div>
    </div>
</template>

<script>
import TextInput from "./TextInput";
import DropdownInput from "./DropdownInput";

export default {
    name: 'IngredientInput',
    props: ['modelValue'],
    emits: [
        'update:modelValue.amount',
        'update:modelValue.unit',
        'update:modelValue.name',
        'update:modelValue.memo',
        'update:modelValue.category',
        'removeIngredient'
    ],
    components: {
        TextInput,
        DropdownInput
    },

    data () {
        return {
            units: [
                { value: '', label: '' },
                { value: 'tsp', label: 'teaspoon' },
                { value: 'Tbsp', label: 'tablespoon' },
                { value: 'oz', label: 'ounce' },
                { value: 'cup', label: 'cup' },
                { value: 'pint', label: 'pint' },
                { value: 'quart', label: 'quart' },
                { value: 'lb', label: 'pounds' },
                { value: 'clove', label: 'clove' },
                { value: 'stalk', label: 'stalk' },
                { value: 'dash', label: 'dash' },
            ],

            categories: [
                { value:'produce', label: 'Produce' },
                { value:'meats', label: 'Deli/Meats' },
                { value:'aisles', label: 'Aisles' },
                { value:'frozen', label: 'Frozen' },
                { value:'dairy', label: 'Dairy' },
                { value:'snacks', label: 'Snacks' },
                { value:'household', label: 'Household' },
            ]
        }
    }
}
</script>
