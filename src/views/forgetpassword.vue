<template>

<navbar></navbar>
<div class="bgc">
<main>
        
        <div class="center">
            <h1>忘記密碼</h1>
            <form>
              <div class="txt_field">
                <h5>身分證</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="請輸入身分證">
              </div>
              <div class="txt_field">
                <h5>電子郵件</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="請輸入電子信箱">
              </div>
              <div class="txt_field">
                <h5>驗證碼</h5>
                <input type="text" class="f-te0xt label-left" id="name5" placeholder="請輸入驗證碼">
              </div>
              <!-- 驗證碼 -->
              <div class="aaa">
              <div class="verification">           
                  <h1>{{ number }}</h1>
              </div>
              <button type="button" class="btn-10-s btn-color-green" @click="generateNumber()">   
                <i class="bi bi-arrow-clockwise"></i> 變更     
              </button>      </div>
        </form>
          <!-- 最後送出的編號 -->
          <div class="bbb">
           <a href="#/login"><button type="button" class="btn-m btn-color-white">返回</button></a> 
           <a href="#/login"><button type="button" class="btn-m btn-color-green">修改</button></a>
          </div>
          </div>
          
        </main>
      </div>
    
<Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  data() {
    return {
      number : "0002"  //這個是驗證碼的預設值
    }
  },
    components: {
    Footer,
    navbar,
  },
  setup() {
   
  },
  methods: {
    // 這個是驗證碼的函式
    generateNumber() {
      // 產生四位數的亂數
      const randomNum = Math.floor(Math.random() * 10000);
      // 補齊前面的零
      const formattedNum = ("000" + randomNum).slice(-4);
      // 將產生的亂數顯示在網頁上
      this.number = formattedNum;
    },
  
  },
  mounted() {
      let labels = document.querySelectorAll('.collapsible-item-label');
      let contents = document.querySelectorAll('.collapsible-item-content');

      labels.forEach((label, index) => {
          label.addEventListener('click', () => {

              // 檢查是否已經打開
              const isOpen = label.classList.contains('open-item-label');
              const content = contents[index];
              const isContentOpen = content.classList.contains('open-item-content');

              // 移除所有元素上已經打開的樣式
              labels.forEach(label => label.classList.remove('open-item-label'));
              contents.forEach(content => content.classList.remove('open-item-content'));

              // 添加或移除打開的樣式
              if (!isOpen && !isContentOpen) {
              label.classList.add('open-item-label');
              content.classList.add('open-item-content');
              }
          });
      });


   
  },
};



</script>