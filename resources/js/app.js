import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import routes from './routes'
import axios from 'axios'

window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

const router = createRouter({
    history: createWebHistory(),
    routes,
    linkActiveClass: 'nav-link-active',
})

const app = createApp({})

app.use(router)

app.mount('#app')
