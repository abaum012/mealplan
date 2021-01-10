<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Meal Plan</title>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/recipes') }}" class="text-sm text-gray-700 underline">Recipes</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                    @endauth
                </div>
            @endif

            <div>
                <h1>Welcome Page</h1>
                <p>This page will eventually be the front end of a larger project. For now we'll just leave this here.</p>
                <small>By the way, this page is still a laravel blade template...</small>
            </div>

        </div>
    </body>
</html>
