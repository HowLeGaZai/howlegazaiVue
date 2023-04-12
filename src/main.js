import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import '@/assets/sass/style.scss'
import axios from 'axios' 
window.axios = axios;



router.afterEach((to, from, next) => {
    window.scrollTo(0, 0);
   });

createApp(App).use(router).mount('#app')
