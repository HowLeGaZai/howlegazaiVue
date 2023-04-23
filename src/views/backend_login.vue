<template>
    <header class="backend-header">
    <nav class="main">
      <div class="leftnav">
        <!-- logo -->
        <a class="brand" href="/backend_index">
          <img src="../assets/img/logo_backend.svg" alt="" />
        </a>
      </div>
    </nav>
  </header>
  <div class="body-sec">
    <main class="backpadding">
      <!-- 後台登入 -->
      <div class="center">
        <h2>後台登入</h2>
        <form>
          <div class="txt_field">
            <h5>帳號</h5>
            <input
              ref="account"
              type="text"
              class="f-text label-left"       
              placeholder="請輸入帳號"
            />

            <label></label>
          </div>
          <div class="txt_field">
            <h5>密碼</h5>
            <input
              ref="pwd"
              type="password"
              class="f-text label-left"
              placeholder="請輸入密碼"
            />
            <label></label>
            <!-- <label>
              <div class="pass">
                <a href="./sass_forgetpassword.html">忘記密碼</a>
              </div>
            </label> -->
          </div>
          <div class="login_btn">
            <div class="logo_center">
              <a href="/backend_index">
                <button type="button" class="btn-m btn-color-green" @click="doSubmit">
                  登入
                </button></a
              >
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
  <Footer></Footer>
</template>

<script>

import Footer from "./Footer.vue";

export default {
  components: {
    Footer,
  },
  mounted() {

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

        const b_loginData = new FormData()
        b_loginData.append('account', this.$refs.account.value)
        b_loginData.append('password', this.$refs.pwd.value)

        axios
        .post('http://localhost/TGD104G1/public/API/b_login.php', b_loginData)
        .then((response) => {
          if (response.data === 'N') {
            alert('帳號或密碼錯誤');
          } else {
            alert('登入成功');
            location.href = '/backend_index';
            // this.jsonData = response.data;
  
            sessionStorage.setItem("login", "true");
          }
        })
         .catch(error => {
            console.log(error);
        });
    },
    

  },
};
</script>
