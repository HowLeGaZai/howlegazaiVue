<template>
  <navbar></navbar>

  <main>
        <div class="center">
            <h1>修改密碼</h1>
            <form>
              <div class="txt_field">
                <h5>密碼</h5>
                <input type="password" class="f-text label-left" id="name5" placeholder="請輸入帳號">
              </div>
              <div class="txt_field">
                <h5>確認密碼</h5>
                <input type="password" class="f-text label-left" id="name5" placeholder="請輸入密碼">
              </div>
            </form>
          <!-- 最後送出的編號 -->
          <div class="bbb">
          <a href="#/login.vue">  <button type="button" class="btn-m btn-color-white">取消</button></a>
          <a href="#/login.vue">  <button type="button" class="btn-m btn-color-green">修改</button></a>
          </div>
          </div>
        
     
        </main>

  <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  components: {
      navbar,Footer,
    },
}
</script>