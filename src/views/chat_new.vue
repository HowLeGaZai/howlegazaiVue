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
          v-model="title"
          v-model-save="title"
          required
        />
      </div>
      <div class="col-md-3 col-12">
        <label for="chat-type" class="f-label">討論分類</label>
        <select name="" id="chat-type" class="f-select" v-model="type"
          v-model-save="type" required>
          <option value="" disabled selected>-請選擇-</option>
          <option value="美食討論">美食討論</option>
          <option value="二手交易">二手交易</option>
          <option value="里民閒聊">里民閒聊</option>
          <option value="團購討論">團購討論</option>
          <option value="我要抱怨">我要抱怨</option>
          <option value="其他">其他</option>
        </select>
      </div>
    </div>
    
    <div id="container">
      <label for="content" class="f-label">討論內容</label>
      <Tinymce ref="Tinymce" v-model="tinymceContent" v-model-save="tinymceContent"></Tinymce>      
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
      <!-- <button type="button" class="btn-m btn-color-green" @click="gotoPreview">預覽</button> -->
      <button type="button" class="btn-m btn-color-green" @click="gotoPreview()">預覽</button>
        
    </div>
    <div v-html="editorHtml"></div>
  </main>
  <Footer></Footer>
</template>


<!-- checkForm() {
  // 取得表單元素
  const form = document.querySelector('#my-form');

  // 檢查必填欄位是否已經填寫
  const requiredFields = form.querySelectorAll('[required]');
  for (const field of requiredFields) {
    if (!field.value) {
      alert('請填寫必填欄位');
      return false;
    }
  }

  // 將表單資料儲存到 sessionStorage
  for (const field of form.elements) {
    if (field.name) {
      sessionStorage.setItem(field.name, field.value);
    }
  }

  // 提交表單
  form.submit();
} -->


<script>
import navbar from "./navbar.vue";
import Footer from "./Footer.vue";
import Tinymce from "@/components/Tinymce.vue";
import { ref } from "vue";



export default {
  components: {
    navbar,
    Footer,
    Tinymce,

  },
  data() {
    return {
      editorHtml: '',
      tinymceContent:'',
      title: "",
      type: "",
      chatid:"",
    };
  },
  mounted() {

    // 將已儲存的表單資料填入 input / select 欄位
    for (const el of document.querySelectorAll("[v-model-save]")) {
      const key = `form-${el.className}`;
      if (!sessionStorage[key]) {
        sessionStorage[key] = el.value;
      }
      el.value = sessionStorage[key];
      el.addEventListener("input", () => {
        sessionStorage[key] = el.value;
        this[el.className] = el.value;
      });
      el.addEventListener("SELECT", () => {
        sessionStorage[key] = el.tagName === "SELECT" ? el.selectedOptions[0].value : el.value;
        this[el.className] = el.tagName === "SELECT" ? el.selectedOptions[0].value : el.value;
      });
      el.addEventListener("change", () => {
        sessionStorage[key] = el.value;
        this[el.className] = el.value;
      });
  }
},
  methods: {
      
      gotoPreview() {
      
      // 檢查必填欄位是否已經填寫
      const requiredFields = document.querySelectorAll('[required]');
      for (const field of requiredFields) {
        if (field.tagName === 'SELECT' && field.selectedIndex === 0) {
            field.style.outline = '1px solid $red';
            const label = field.parentNode.querySelector('label');
            const asterisk = label.querySelector('.asterisk');
            if (!asterisk) {
              label.insertAdjacentHTML('beforeend', '<span class="asterisk" style="color:red">*</span>');
            }
            return false;
          }else {
            const label = field.parentNode.querySelector('label');
            const asterisk = label.querySelector('.asterisk');
            if (asterisk) {
            asterisk.remove();
            }
          }
          if (!field.value) {
            field.style.outline = '1px solid $red';
            const label = field.parentNode.querySelector('label');
            const asterisk = label.querySelector('.asterisk');
            if (!asterisk) {
              label.insertAdjacentHTML('beforeend', '<span class="asterisk" style="color:red">*</span>');
            }
            return false;
            // input{outline:$red};
            // required
          }else {
            const label = field.parentNode.querySelector('label');
            const asterisk = label.querySelector('.asterisk');
            if (asterisk) {
            asterisk.remove();
            }
          }
        }
        // if (tinymceContent = ''){
        //     const label = field.parentNode.querySelector('label');
        //     const asterisk = label.querySelector('.asterisk');
        //     if (!asterisk) {
        //       label.insertAdjacentHTML('beforeend', '<span class="asterisk" style="color:red">*</span>');
        //     }
        //     return false;
        //   }else {
        //     const label = field.parentNode.querySelector('label');
        //     const asterisk = label.querySelector('.asterisk');
        //     if (asterisk) {
        //     asterisk.remove();
        //     }
        //   }
          
        // }

      
      // 儲存表單資料至 localStorage
      sessionStorage.setItem('form-title', this.title);
      sessionStorage.setItem('form-type', this.type);
      sessionStorage.setItem('form-tinymceContent', this.tinymceContent);

      // 導向預覽頁面
      // this.$router.push('/chat_info/preview');
      // const Id = 123;
      const Id = this.$route.params.Id;
      this.$router.push({ name: 'chat_preview', params: { Id: Id } });
    },
  
      // previewChatinfo(){
      //   // 使用 $router.push 將路由導向預覽頁面，並傳遞編輯器頁面的資料到預覽頁面
      //   this.$router.push({
      //     path: '/tinymcecontent',
      //     query: {
      //       content: this.tinymceContent
      //   }
      // })}

    // handleButtonClick(){
    //   const result = this.$refs.Tinymce.sendEditorValue();
    //   this.editorHtml = result;
    // },
    // saveContent(){
    //   const content = {
    //     content: this.$refs.Tinymce.sendEditorValue().getContent()
    //   }
    },

    watch: {
      editorValue(newValue) {
      this.result = this.$refs.Tinymce.updateEditorValue();
      this.result = tinymceContent;
    }
  },
    // callChildMethod() {
    //   this.$refs.Tinymce.logEditorValue();
    //   console.log('news');
    // },
    // editorValueData(){
    //   // console.log('editorValueData')
    //   console.log('news');
    //   function getdata(text){
    //     console.log('getData');
    //     this.text = text;
    //   };
      // console.log(editorValue)
    };
</script>