<template>
    <label v-text="name" class="block font-medium text-sm text-gray-700 capitalize"></label>
    <div class="inline-flex">
        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"></svg>
        <select
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 mt-1 hover:border-gray-400 focus:outline-none appearance-none"
            name="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            >
            <option
                v-for="option in options"
                :key="option.id"
                :value="option.value"
                v-text="option.label"></option>
        </select>
    </div>
</template>

<script>
export default {
    name: 'DropdownInput',
    props: ['name', 'options', 'required', 'modelValue'],
    emits: ['update:modelValue']
}
</script>
