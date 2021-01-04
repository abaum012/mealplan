import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router'
import App from './App.vue'
import routes from './routes'
import axios from 'axios'

window.axios = axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

const router = createRouter({
    history: createWebHistory(),
    routes,
    linkActiveClass: 'nav-link-active',
})

createApp(App)
    .use(router)
    .mount('#app')
