import { createApp } from 'vue'
import App from './App.vue'
import router from './router'


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




