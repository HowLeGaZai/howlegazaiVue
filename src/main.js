// console.log("Hello from main.js")

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import '@/assets/sass/style.scss'
// import store from '/store.js'
import axios from 'axios' 
window.axios = axios;

router.afterEach((to, from) => {
    window.scrollTo(0, 0);
});

createApp(App)
  .use(router)
  // .use(store)
  .mount('#app');