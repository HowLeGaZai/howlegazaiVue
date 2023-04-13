<template>
  <navbar></navbar>
  <main class="new-chat">
    <h1 class="title_space">發起討論</h1>
    <div class="row">
      <div class="col-md-9 col-12">
        <label for="name" class="f-label">討論標題</label>
        <input
          type="text"
          class="f-text"
          id="name"
          placeholder="請輸入討論標題"
        />
      </div>
      <div class="col-md-3 col-12">
        <label for="chat-type" class="f-label">討論分類</label>
        <select name="" id="chat-type" class="f-select">
          <option value="1">-選擇-</option>
          <option value="2">藝文</option>
          <option value="3">旅遊</option>
          <option value="4">美食</option>
        </select>
      </div>
    </div>
    
    <div id="container">
      <Tinymce></Tinymce>      
    </div>

    <div class="confirm-btn">
      <!-- <router-link to="/chat" custom v-slot="{ navigate }">
                  <button class="btn-m btn-color-white" @click="navigate" role="link">取消</button>
              </router-link>
              <router-link to="/chat_info" custom v-slot="{ navigate }">
                  <button class="btn-m btn-color-green" @click="navigate" role="link">發布</button>
              </router-link> -->
      <button type="button" class="btn-m btn-color-white" onclick="location.href='#/chat'">取消</button>
      <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='#/chat_info'">發布</button> -->
      <button type="button" class="btn-m btn-color-green" @click="exportContent">預覽</button>

    </div>
  </main>
  <Footer></Footer>
</template>


<script>
console.log('ditorNew page');
import navbar from "./navbar.vue";
import Footer from "./Footer.vue";
import Tinymce from "@/components/Tinymce.vue";


export default {
  components: {
    navbar,
    Footer,
    Tinymce,

  },
  data() {
    return {
      editorValue: '',
    };
  },
  mounted() {
    
  },
  methods: {

  },
};
</script>