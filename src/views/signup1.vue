<template>
    <navbar></navbar>
    <div class="bgc">
      <main>
        <div class="center">
          <h2 class="p-10">戶長註冊</h2>
          <div class="step_2">
            <div class="threesteps">
              <div class="steps">
                <div class="steps-circle">1</div>
                <h5>填寫資料</h5>
              </div>
              <div class="line notyet"></div>
              <div class="steps">
                <div class="steps-circle">2</div>
                <h5>報名完成</h5>
              </div>
            </div>
          </div>

          <div class="signup1">

          <div class="row">
            <!-- 選擇縣市 -->
            <div class="txt_field col-sm-12 col-sm-4">
              <label for="selecte" class="f-label">縣/市</label>
              <select name="" id="selecte" class="f-select" v-model="input1" >
                  <option value="">{{ input1  }}花蓮縣</option>
              </select>
            </div>
      
            <div class="txt_field col-sm-12 col-sm-4">
              <label for="selecte" class="f-label">鄉/鎮/市/區</label>
              <select name="" id="selecte" class="f-select" v-model="input2">
                  <option value="">{{ input2 }}國安鄉</option>
              </select>
            </div>
          
            <div class="txt_field col-sm-12 col-sm-4">
              <label for="selecte" class="f-label">村里</label>
              <select name="" id="selecte" class="f-select" v-model="input3">
                  <option value="">{{ input3 }}大湖里</option>
              </select>
            </div>

          </div>

            <!-- 輸入地址 -->
            <div class="txt_field">
              <label>地址</label>
              <input
                type="text"
                class="f-text label-left"
                id="name5"
                required
                :value="inputValue"
                 @input="inputValue = $event.target.value; add = $event.target.value"
              />
              <p v-if="showError" style="color: red;">{{ errorMessage }}</p>
              <!-- <h6 style="color: red; text-align: center"> -->
              <h6 class="alert">
                您輸入的住址已進行註冊，請嘗試聯繫註冊地址戶長。謝謝！
              </h6>
            </div>

          </div>
          <!-- 最後送出的編號 -->
          <div class="bbb">
         <router-link to="./login">
              <button type="button" class="btn-m btn-color-white">
                返回
              </button>
            </router-link>   
          <router-link to="./signup2">
              <button type="button" 
              class="btn-m btn-color-green" 
              @click.prevent="submitForm">
              註冊
            </button>
          </router-link>
            
          </div>
        </div>
      </main>
    </div>
    <Footer></Footer>
  </template>

  <script>
  import navbar from "./navbar.vue";
  import Footer from "./Footer.vue";
  // import { ref } from 'vue';


  export default {
    components: {
      Footer,
      navbar,
    },
    data() {
      return {
       
        showError: false,
        errorMessage: '不能空白',
        input1: '',
        input2: '',
        input3: '',
        inputValue: '',
      }
    },
    setup() {
      return {};
    },
    methods: {
   //不能輸入空值的函式
   submitForm() {
  let formData = new FormData();
  if (this.inputValue.trim() === '') {
    this.showError = true;
    return false;
  } else {
    this.showError = false;
    formData.append('input1', this.input1);
    formData.append('input2', this.input2);
    formData.append('input3', this.input3);
    formData.append('input4', this.inputValue);
    this.$router.push({ name: 'signup2', state: formData });
  }
},
},

watch: {
  // 可以使用 watch 來監聽數據的更改並將它們存儲在 localStorage中，
    // 當 input1, input2, input3 或 inputValue 發生更改時
    input1(val) {
      localStorage.setItem('input1', val);
    },
    input2(val) {
      localStorage.setItem('input2', val);
    },
    input3(val) {
      localStorage.setItem('input3', val);
    },
    inputValue(val) {
      localStorage.setItem('inputValue', val);
    },
  },
    mounted() {
      let labels = document.querySelectorAll(".collapsible-item-label");
      let contents = document.querySelectorAll(".collapsible-item-content");

      labels.forEach((label, index) => {
        label.addEventListener("click", () => {
          // 檢查是否已經打開
          const isOpen = label.classList.contains("open-item-label");
          const content = contents[index];
          const isContentOpen = content.classList.contains("open-item-content");

          // 移除所有元素上已經打開的樣式
          labels.forEach((label) => label.classList.remove("open-item-label"));
          contents.forEach((content) =>
            content.classList.remove("open-item-content")
          );

          // 添加或移除打開的樣式
          if (!isOpen && !isContentOpen) {
            label.classList.add("open-item-label");
            content.classList.add("open-item-content");
          }
        });
      });
    },
  };


  // localStorage.setItem('myData', this.myData);
  </script>