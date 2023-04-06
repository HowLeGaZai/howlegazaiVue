<template>

<navbar></navbar>
<main>
        
        <div class="center">
            <h1>忘記密碼</h1>
            <form>
              <div class="txt_field">
                <h5>身分證</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="請輸入身分證">
              </div>
              <div class="txt_field">
                <h5>電子郵件</h5>
                <input type="text" class="f-text label-left" id="name5" placeholder="請輸入電子信箱">
              </div>
              <div class="txt_field">
                <h5>驗證碼</h5>
                <input type="text" class="f-te0xt label-left" id="name5" placeholder="請輸入驗證碼">
              </div>
              <!-- 驗證碼 -->
              <div class="aaa">
              <div class="verification">           
                  <h1>8888</h1>
              </div>
              <button type="button" class="btn-10-s btn-color-green">   
                <i class="bi bi-arrow-clockwise"></i> 變更     
              </button>      </div>
        </form>
          <!-- 最後送出的編號 -->
          <div class="bbb">
           <a href="#/login.vue"><button type="button" class="btn-m btn-color-white">返回</button></a> 
           <a href="#/login.vue"><button type="button" class="btn-m btn-color-green">修改</button></a>
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