<template>
    <div class="mb-4">
        <label class="block font-medium text-sm text-gray-700 capitalize" :for="name" v-text="name">
        </label>
        <textarea
            :id="name"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
        ></textarea>
    </div>
</template>

<script>
export default {
    name: 'TextAreaInput',
    props: ['name', 'modelValue'],
    emits: ['update:modelValue'],
}
</script>
