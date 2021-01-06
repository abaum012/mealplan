import NotFound from "./views/NotFound"
import Welcome from "./views/Welcome"
import LayoutDefault from "./layouts/LayoutDefault";

import Recipes from "./views/recipes/Recipes"
import Recipe from "./views/recipes/Recipe"
import CreateRecipe from "./views/recipes/CreateRecipe"


export default [
    {
        path: '/:pathMatch(.*)*',
        name: 'not-found',
        component: NotFound,
        meta: { layout: LayoutDefault }
    },

    {
        path: '/',
        component: Welcome,
        meta: { layout: LayoutDefault }
    },

    {
        path: '/recipes',
        component: Recipes,
        meta: { layout: LayoutDefault }
    },

    {
        path: '/recipes/:slug',
        component: Recipe,
        meta: { layout: LayoutDefault }
    },

    {
        path: '/recipes/create',
        component: CreateRecipe,
        meta: { layout: LayoutDefault }
    },
]
