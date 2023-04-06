<template>
  <backendNavbar></backendNavbar>
  <main>
  

  <!-- 後台登入 -->
<div class="center">
    <h1>後台登入</h1>
    <form>
      <div class="txt_field">
        <h5>帳號</h5>
        <input type="text" class="f-text label-left" id="name5" placeholder="請輸入帳號">
    
        <label></label>
      </div>
      <div class="txt_field">
        <h5>密碼</h5>
        <input type="password" class="f-text label-left" id="name5" placeholder="請輸入密碼">
        <label></label>
        <label> <div class="pass"><a href="./sass_forgetpassword.html">忘記密碼</a> </div> </label>
      </div>
      <div class="login_btn">
      <div class="logo_center">
       
     <a href="./backend/index.html">   <button type="button" class="btn-m btn-color-green">登入</button></a>
    </div>

      </div>
    </form>
  </div>




        </main>
      
  <Footer></Footer>  
</template>

<script>
import backendNavbar from "./backendNavbar.vue";
import Footer from './Footer.vue';

export default {
  components: {
    backendNavbar,
    Footer,
  },
  mounted() {
    let openBtn = document.getElementById('openBtn');
    let hiddenRow = document.querySelector('.hidden-row');

    openBtn.addEventListener('click', () => {
        hiddenRow.classList.toggle('show-row');
    });
  },
};
</script>
