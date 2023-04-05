<template>

<navbar></navbar>

    <main class="front-space front-space-confirm">
        <section>
          <h2 class="title_space">預約空間</h2>
        </section>
        <img src="../assets/img/CheckCircle.svg" alt="">
        <h6>預約成功，待二至三日工作天審核成功後，即完成預約。</h6>
        <h6>查看進度請至個人帳戶>空間預約紀錄</h6>
        <div class="popup">
          <div class="popup_l">
            <button type="button" class="btn-cir-s btn-color-green"><i class="bi bi-caret-left-fill i-s"></i></button>
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
                <h4>地址：台北市中山區南京東路三段219號4樓</h4>
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
        <button type="button" class="btn-m btn-color-green" onclick="location.href='./index.html'">返回首頁</button>
      </div>
    </main>
</template>

<script>

import navbar from './navbar.vue';

export default {
  components: {
      navbar,
    },
}
</script>