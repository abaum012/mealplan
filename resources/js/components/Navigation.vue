<template>
    <nav class="bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <router-link to="/">
                            <logo></logo>
                        </router-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <router-link class="nav-link" to="/">
                            Home
                        </router-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <router-link class="nav-link" to="/recipes">
                            Recipes
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
import Logo from "./Logo"

export default {
    name: "Navigation",
    components: {
        Logo,
    },
}
</script>
