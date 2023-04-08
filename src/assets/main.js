import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

import axios from 'axios'  // 主要 AJAX 套件
import VueAxios from 'vue-axios'  // 將它轉為 Vue 套件
 
Vue.use(VueAxios, axios)

export default {
    components: {
      // Swiper,
      // SwiperSlide,
    },
    setup() {
      return {
        // modules: [Navigation],
      };
    },
    mounted() {},
  };

createApp(App).use(router).mount('#app')




