<template>
  <backendNavbar></backendNavbar>

  // 缺 html 原始碼

  <Footer></Footer>  
</template>

<script>
import backendNavbar from "./backendNavbar.vue";
import Footer from './Footer.vue';

import ClassicEditor from "@ckeditor/ckeditor5-build-classic";
import CKEditor from "@ckeditor/ckeditor5-vue";

export default {
  components: {
    backendNavbar,
    Footer,
    ckeditor: CKEditor.component,
  },
   data() {
    return {
      editor: ClassicEditor,
      content: "<p></p>",
    };
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
