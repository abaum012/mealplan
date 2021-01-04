import Welcome from "./pages/Welcome"
import Recipes from "./pages/recipes/Recipes"
import Recipe from "./pages/recipes/Recipe"
import NotFound from "./pages/NotFound"

export default [
    {
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        component: NotFound
    },

    {
        path: '/',
        component: Welcome
    },

    {
        path: '/recipes',
        component: Recipes
    },

    {
        path: '/recipes/:slug',
        component: Recipe
    }
]
