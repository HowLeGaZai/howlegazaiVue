<template>
  <navbar></navbar>

    <main class="news_info">
    <button class="btn-prepage font-green" onclick="location.href='./news.html'">
      <i class=" bi bi-caret-left-fill font-green"></i>返回【上一頁】</button>
    <div class="news_info_topic">
      <h1>花蓮市長者暨成人免費健康檢查</h1>
      <div class="add_inf">
        <div class="userbtn" id="">
          <img src="../assets/img/admin_icon.png" alt="" class="user_pic" />
        </div>
        <h4>鄭成功里長</h4>
        <h4>發布日期：2022.04.10</h4>
      </div>
      <div class="tag tag-orange">里民服務</div>
    </div>
    <div class="news-article">
      <!-- img的容器設定為原大小的95% -->
      <p class="news-article-content">
        花蓮縣衛生局李宏滿局長表示，為了全面照顧民眾的健康，鼓勵鄉親關心自己和家人，100年創全國之先推出「長者旗艦版免費健檢服務」，截至106年受惠長者高達66,060人次，受到長者們高度的肯定。107年持續辦理此項福利政策，即日起開始本縣13鄉鎮市衛生所安排共94場次的社區健檢活動，將醫療團隊帶進社區、部落做篩檢服務，就近為民眾健康把關。
        <br>
        <br>
        今年推出的整合式篩檢活動內容包含免費成人健康檢查（40至64歲，每3年1次；65歲以上，每年1次；55歲以上原住民，每年1次；35歲以上小兒麻痺患者，每年1次）、免費長者健康檢查（65歲以上長者及55歲以上原住民）、四大癌症篩檢（子宮頸癌、乳癌、大腸癌、口腔癌）等。
      </p>
      <div class="news-img">
        <img src="../assets/img/new_info_pic.png" alt="">
      </div>


    </div>


    <div class="news-btn-section">
      <button class="btn-news btn-color-white"><i class=" bi bi-caret-left-fill font-green"></i>上一則</button>
      <button class="btn-news btn-color-white">下一則<i class=" bi bi-caret-right-fill font-green"></i></button>
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