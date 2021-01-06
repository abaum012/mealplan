<template>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h2 v-text="title" class="font-semibold text-xl text-gray-800 leading-tight align-middle"></h2>
                <slot></slot>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: 'PageHeader',
    props: ['title']
}
</script>
