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
            <label>   <div class="pass"><router-link :to="{name:'forgetpassword'}">忘記密碼</router-link></div></label>
          </div>
        
         
        </form>

       
          <!-- <div class="login_btn"> -->
        
          <div class="logo_center">
            <button type="button" class="btn-m btn-color-green" @click="doSubmit">登入</button>
          </div>

          <!-- </div> -->
        
        <div class="signup_link">
          尚未加入大湖里?<a href="/signup1">  馬上註冊</a>
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
      jsonData: null,
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
        };

        const loginData = new FormData()
        loginData.append('account', this.$refs.account.value)
        loginData.append('password', this.$refs.pwd.value)

        axios
        .post('http://localhost/TGD104G1/public/API/login.php', loginData)
        .then((response) => {
          if (response.data === 'N') {
            alert('帳號或密碼錯誤');
          } else {
            alert('登入成功');
            this.$router.back(-2);
            // this.jsonData = response.data;
            let login_id = response.data[0][0]; 
            let login_name = response.data[0][3]; 
            let login_account = response.data[0][6]; 
            let login_nickname = response.data[0][11]; 
            let login_pic = response.data[0][4]; 
            document.cookie="id=" + login_id;
            document.cookie="name=" + login_name;
            document.cookie="account=" + login_account;
            document.cookie="nickname=" + login_nickname;
            // document.cookie="portrait=" + login_pic;
            localStorage.setItem("portrait", login_pic);
          }
        })
         .catch(error => {
            console.log(error);
        });
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