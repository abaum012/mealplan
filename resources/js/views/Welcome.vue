<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
<!--        @if (Route::has('login'))-->
<!--        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">-->
<!--            @auth-->
<!--            <a href="{{ url('/recipes') }}" class="text-sm text-gray-700 underline">Recipes</a>-->
<!--            @else-->
<!--            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>-->
<!--            @endauth-->
<!--        </div>-->
<!--        @endif-->

        <div>
            <h1>Welcome Page</h1>
            <p>This page will eventually be the front end of a larger project. For now we'll just leave this here.</p>
        </div>

    </div>
</template>

<script>
export default {
    name: "Welcome"
}
</script>
