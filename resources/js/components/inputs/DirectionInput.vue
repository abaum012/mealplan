<template>
    <div class="mb-4 flex">
        <div class="flex-1 mr-4">
            <label class="block font-medium text-sm text-gray-700 capitalize">
                Step {{ index + 1 }}
            </label>
            <textarea
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"

                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
            ></textarea>
        </div>
        <div class="mb-4 flex">
            <button class="rounded-md shadow-sm bg-red-500 text-white h-8 w-8 mt-6" @click="$emit('removeDirection')">&times</button>
        </div>
    </div>
</template>

<script>
export default {
    name: 'DirectionInput',
    props: ['index', 'modelValue'],
    emits: ['update:modelValue', 'removeDirection'],
}
</script>
