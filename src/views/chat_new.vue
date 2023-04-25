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

    <div class="chat_banner">
      <label class="f-label">討論區預覽圖（未上傳則為預設）</label>
      <PictureCropChatbanner @result-changed="onResultChanged"></PictureCropChatbanner>
      <img :src="dataURLBack" v-if="dataURLBack" alt="" style="width: 20%">
    </div>

    <div class="confirm-btn">
      <button type="button" class="btn-m btn-color-white" @click="cancle">取消</button>
      <button type="button" class="btn-m btn-color-green" @click="gotoPreview">預覽</button>
    </div>
    
  </main>
  <Footer></Footer>
</template>

<script>
import navbar from "../components/navbar.vue";
import Footer from "../components/Footer.vue";
import PictureCropChatbanner from "@/components/PictureCropChatbanner.vue";
import Tinymce from "@/components/Tinymce.vue";
import { ref } from "vue";
import { useRouter } from 'vue-router'


export default {
  created() {
    this.pathId = this.$route.params.Id;
  },
  components: {
    navbar,
    Footer,
    PictureCropChatbanner,
    Tinymce,

  },
  data() {
    return {
      editorHtml: '',
      tinymceContent:'',
      title: "",
      type: "",
      chatid:"",
      dataURL:"",
      dataURLBack:"",
    };
  },
  mounted() {
      if(sessionStorage.getItem('form-title') !== null) {

        this.title = sessionStorage.getItem('form-title');
        this.type = sessionStorage.getItem('form-type');
        this.tinymceContent = sessionStorage.getItem('form-tinymceContent');
        this.dataURLBack = sessionStorage.getItem('form-PictureCropChatbanner');
    
      }


    // 將已儲存的表單資料填入 input / select 欄位
  //   for (const el of document.querySelectorAll("[v-model-save]")) {
  //     const key = `form-${el.className}`;
  //     if (!sessionStorage[key]) {
  //       sessionStorage[key] = el.value;
  //     }
  //     el.value = sessionStorage[key];
  //     el.addEventListener("input", () => {
  //       sessionStorage[key] = el.value;
  //       this[el.className] = el.value;
  //     });
  //     el.addEventListener("SELECT", () => {
  //       sessionStorage[key] = el.tagName === "SELECT" ? el.selectedOptions[0].value : el.value;
  //       this[el.className] = el.tagName === "SELECT" ? el.selectedOptions[0].value : el.value;
  //     });
  //     el.addEventListener("change", () => {
  //       sessionStorage[key] = el.value;
  //       this[el.className] = el.value;
  //     });
  // }
},
  methods: {
      onResultChanged(result) {
          this.dataURL = result.dataURL;
          this.dataURLBack = "";
      },
      getpageid(){
        const router = useRouter();
        console.log(router);
      },
      cancle(){
        this.$router.push({ name: 'chat'});
        sessionStorage.clear();
      },
      
      gotoPreview() {
      
      // 檢查必填欄位是否已經填寫
      const requiredFields = document.querySelectorAll('[required]');
      for (const field of requiredFields) {
        if (field.tagName === 'SELECT' && field.selectedIndex === 0) {
            field.style.outline = '1px solid $red';
            const label = field.parentNode.querySelector('label');
            const asterisk = label.querySelector('.asterisk');
            if (!asterisk) {
              label.insertAdjacentHTML('beforeend', '<span class="asterisk" style="color:red;"> <i class="bi bi-asterisk" style="font-size:12px;"></i></span>');
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
              label.insertAdjacentHTML('beforeend', '<span class="asterisk" style="color:red;"> <i class="bi bi-asterisk" style="font-size:12px;"></i></span>');
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
      
      // 儲存表單資料至 localStorage
      sessionStorage.setItem('form-title', this.title);
      sessionStorage.setItem('form-type', this.type);
      sessionStorage.setItem('form-tinymceContent', this.tinymceContent);
      sessionStorage.setItem('form-PictureCropChatbanner', this.dataURL);

      // 導向預覽頁面
      const Id = this.$route.params.Id;
      this.$router.push({ name: 'chat_preview', params: { Id: Id } });
    },
    },

    watch: {
      editorValue(newValue) {
      this.result = this.$refs.Tinymce.updateEditorValue();
      this.result = tinymceContent;
    }
  },
    };
</script>