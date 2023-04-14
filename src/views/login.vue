<template>

<navbar></navbar>
<div class="bgc">
<main>
    <div class="center">
        <h2>里民 / 居民登入</h2>
        <form>
          <div class="txt_field">
            <h5>帳號</h5>
            <input type="text" class="f-text label-left" id="name5" placeholder="請輸入帳號" required  v-model="username">
        
            <label></label>
          </div>
          <div class="txt_field">
            <h5>密碼</h5>
            <input type="password" class="f-text label-left" id="name5" placeholder="請輸入密碼" required v-model="password
">
            <label>   <div class="pass"><a href="#/forgetpassword">忘記密碼</a> </div> </label>
          </div>
        
         
        </form>

       
          <!-- <div class="login_btn"> -->
        
          <div class="logo_center">
          <button type="button" class="btn-m btn-color-green" @click="login">登入</button>
          </div>

          <!-- </div> -->
        
        <div class="signup_link">
          尚未加入大湖里?<a href="#/signup1">  馬上註冊</a>
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
  data() {
    return {
      username : '',
      password : '',
    }
  },
  setup() {
    return {

    };
  },
  methods: {
    login() {
      if (this.username === '' || this.password === '') {
        alert('帳號密碼不得為空');
        this.$router.push('./login')
        return;
      }else{  
        alert("登入成功")
        this.$router.push('./#')
      }
    }
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