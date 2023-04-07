<template>

<navbar></navbar>
<div class="bgc">
<main>
    <div class="center">
        <h1>登入</h1>
        <form>
          <div class="txt_field">
            <h5>帳號</h5>
            <input type="text" class="f-text label-left" id="name5" placeholder="請輸入帳號">
        
            <label></label>
          </div>
          <div class="txt_field">
            <h5>密碼</h5>
            <input type="password" class="f-text label-left" id="name5" placeholder="請輸入密碼">
            <label>   <div class="pass"><a href="#/forgetpassword">忘記密碼</a> </div> </label>
          </div>
        
         
        </form>

       
          <!-- <div class="login_btn"> -->
        
          <div class="logo_center">
            <a href="#/"> <button type="button" class="btn-m btn-color-green">登入</button></a>
          </div>

          <!-- </div> -->
        
        <div class="signup_link">
          尚未加入大湖里??<a href="#/signup1">  馬上註冊</a>
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
    components: {
    Footer,
    navbar,
  },
  setup() {
    return {

    };
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