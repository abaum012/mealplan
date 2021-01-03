import Welcome from "./components/views/Welcome"
import Recipes from "./components/views/Recipes"

export default [
    {
        path: '/',
        component: Welcome
    },

    {
        path: '/recipes',
        component: Recipes
    }
]
