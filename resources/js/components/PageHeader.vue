<template>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight align-middle">
                    {{ title }}
                </h2>
                <router-link to="/recipes/create" class="flex items-center rounded-md bg-blue-500 text-white px-2 py-1">Add</router-link>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "PageHeader",
}
</script>
