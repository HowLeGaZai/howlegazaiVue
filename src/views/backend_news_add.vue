<template>
  <backendNavbar></backendNavbar>

  // 缺 html 原始碼

  <Footer></Footer>  
</template>

<script>
import backendNavbar from "./backendNavbar.vue";
import Footer from './Footer.vue';

export default {
  components: {
    backendNavbar,
    Footer,
  },
  mounted() {
    let openBtn = document.getElementById('openBtn');
    let hiddenRow = document.querySelector('.hidden-row');

    openBtn.addEventListener('click', () => {
        hiddenRow.classList.toggle('show-row');
    });
  },
};
</script>
