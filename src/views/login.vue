<template>

<navbar :isLoggedIn="isLoggedIn"></navbar>
<div class="bgc">
<main>
    <div class="center">
        <h2>里民 / 居民登入</h2>
        <form>
          <div class="txt_field">
            <h5>帳號</h5>
            <input ref="account" type="text" class="f-text label-left" id="account" placeholder="請輸入帳號" required>
        
            <label></label>
          </div>
          <div class="txt_field">
            <h5>密碼</h5>
            <input ref="pwd" type="password" class="f-text label-left" id="pwd" placeholder="請輸入密碼" required>
            <label>   <div class="pass"><a href="#/forgetpassword">忘記密碼</a> </div> </label>
          </div>
        
         
        </form>

       
          <!-- <div class="login_btn"> -->
        
          <div class="logo_center">
            <button type="button" class="btn-m btn-color-green" @click="doSubmit">登入</button>
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
import axios from 'axios';
import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
    components: {
    Footer,
    navbar,
  },
  data() {
    return {
      isLoggedIn: false,
    };
  },
  methods:{
    doSubmit() {
        if (this.$refs.account.value == '') {
          
            alert("請填寫[帳號]");
            return false;
        }
        if (this.$refs.pwd.value == '') {
            alert("請填寫[密碼]");
            return false;
        }

        
        axios
        .post('http://localhost/howlegazaiVue/public/API/login.php', {
            account: this.$refs.account.value,
            pwd: this.$refs.pwd.value
        })
        .then(function (response) {
          // console.log(response.data)
            if (response.data === 'Y') {
                alert('登入成功');
                // console.log(response.data);
                location.href = '#/';
            } else {
                alert('帳號或密碼錯誤');
                // console.log('錯誤',response.data);
            }
        })
        .catch(function (error) {
            alert("發生錯誤: " + error.response.status);
        });
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