<template>
    <div class="mb-4">
        <label v-text="name" class="block font-medium text-sm text-gray-700 capitalize"></label>
        <input
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"

            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            type="text"
            :required="!!required"
            autofocus="!!autofocus">
    </div>
</template>

<script>
export default {
    name: 'TextInput',
    props: ['name', 'required', 'autofocus', 'modelValue'],
    emits: ['update:modelValue'],
}
</script>
