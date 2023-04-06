<template>

<navbar></navbar>

    <main class="front-space">
       <section>
        <h1 class="title_space">預約空間</h1>
      </section>
        <div class="popup">
          <div class="popup_l">
            <!-- <button type="button" class="btn-cir-s btn-color-green"><i class="bi bi-caret-left-fill i-s"></i></button> -->
            <br>
            <h3 class="">預約單號 : 001</h3>
            <br>
            <div class="popup_l_s">
              <div class="popup-pad">
                <img src="../assets/img/s_1.png" alt="">
              </div>
              <div class="popup-pad">
                <h3>A102教室</h3>
                <br>
                <h4>藝文藝文活動及表演</h4>
                <br>
                <h4>空間大小：15坪</h4>
                <br>
                <h4>地址：花蓮縣大湖里南京東路三段219號4樓</h4>
                <h5 class="popup-pad">2023-03-05（日）
                  13:00 - 13:59</h5>
              </div>
              <!-- <br> -->
              <div>
      
              </div>
            </div>
            <br>
            <div class="popup_l_t">
              <h3>申請人資訊</h3>
              <br>
              <h4>姓名：張迪生 先生</h4>
              <br>
              <h4>聯絡電話：091231231232</h4>
              <br>
              <h4>電子信箱：qweasdzxc2er@gmail.com</h4>
              <br>
              <h4>申請用途：舉辦前端工程師讀書會與面試交流討論，並舉辦櫻桃派對</h4>
              <br>
            </div>
          </div>
        </div>
      <div class="confirm-btn">
         <router-link to="/space_reserve" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-gray" @click="navigate" role="link">返回上一步</button>
            </router-link>
             <router-link to="/space_reserve_confirm" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">確認送出</button>
            </router-link>
        <!-- <button type="button" class="btn-m btn-color-gray" onclick="location.href='/space_reserve'">返回上一步</button>
        <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_reserve_confirm'">填寫完成，送出申請</button> -->
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