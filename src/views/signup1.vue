<template>

<navbar></navbar>
<main>
        <div class="center">
          
            <h1>註冊</h1>
            <form>
                <div class="step_2">
                <div class="threesteps">
        <div class="steps">
            <div class="steps-circle">1</div>
            <h5>填寫資料</h5>
        </div>
        <div class="line notyet"></div>
        <div class="steps notyet">
            <div class="steps-circle">2</div>
            <h5>報名完成</h5>
        </div>
      </div>
      </div>
              <div class="txt_field">
                <h5>縣/市</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="花蓮市" disabled>
              </div>
              <div class="txt_field">
                <h5>鄉/鎮/市/區</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="" disabled>
              </div>
              <div class="txt_field">
                <h5>里</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="大湖里" disabled>
              </div>
              <div class="txt_field">
                <h5>地址</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="地址">
              </div>

              <h6 style="color: red; text-align: center;">您輸入的住址已註冊為會員，請嘗試聯繫該戶戶長。謝謝。</h6>
            </form> 
          <!-- 最後送出的編號 -->
          <div class="bbb">
           <a href="#/login"><button type="button" class="btn-m btn-color-white">返回</button></a> 
           <a href="#/signup2"><button type="button" class="btn-m btn-color-green">註冊</button></a> 

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