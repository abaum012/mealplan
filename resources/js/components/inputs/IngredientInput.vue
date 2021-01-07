<template>
    <div class="mb-4 flex">
        <div class="flex flex-1 mr-4">
            <div class="w-1/12 mb-4 pr-6">
                <text-input v-model="modelValue.amount"
                            name="amount"
                            required="true"
                            @input="$emit('update:modelValue.amount', $event.target.value)"
                ></text-input>
            </div>

            <div class="mb-4 pr-6">
                TODO units dropdown
            </div>

            <div class="w-1/4 mb-4 pr-6">
                <text-input v-model="modelValue.name"
                            name="name"
                            required="true"
                            @input="$emit('update:modelValue.name', $event.target.value)"
                ></text-input>
            </div>

            <div class="w-1/6 mb-4 pr-6">
                <text-input v-model="modelValue.memo"
                            name="memo"
                            required="true"
                            @input="$emit('update:modelValue.memo', $event.target.value)"
                ></text-input>
            </div>

            <div class="mb-4 pr-6">
                TODO Category dropdown
            </div>

        </div>
        <div class="mb-4 flex">
            <button class="rounded-md shadow-sm bg-red-500 text-white h-8 w-8 mt-6 disabled:opacity-50"
                    @click="$emit('removeIngredient')">
                &times
            </button>
        </div>
    </div>
</template>

<script>
import TextInput from "./TextInput";

export default {
    name: 'IngredientInput',
    props: ['modelValue'],
    emits: ['update:modelValue', 'removeIngredient'],
    components: {
        TextInput
    }
}
</script>
