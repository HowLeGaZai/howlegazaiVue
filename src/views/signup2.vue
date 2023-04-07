<template>

<navbar></navbar>
<div class="bgc">
<main>
      
      <div class="center_2">
  
          <div class="container">
  
            <div class="title"><h1>註冊</h1></div>
        
        
            <div class="content">
        
              <div class="threesteps">
                <div class="steps">
                    <div class="steps-circle">1</div>
                    <h5>填寫資料</h5>
                </div>
                <div class="line"></div>
                <div class="steps">
                    <div class="steps-circle">2</div>
                    <h5>確認資料</h5>
                </div>
            </div>
            <h1>住址</h1>   <!-- 只有一個元素 -->
            <input type="text" class="f-text" id="tad" placeholder="花蓮市三重區大湖里立德路三段50號" disabled>
              <form action="#">
                <div class="user-details">
                  <div class="input-box">
                    <h3 class="details">帳號</h3>
                    <input type="text" class="f-text" id="tad" placeholder="請輸入帳號">
                  </div>
                  <div class="input-box">
                    <h3 class="details">密碼</h3>
                    <input type="password" class="f-text" id="tad" placeholder="請輸入密碼">
                  </div>
                  <div class="input-box">
                    <h3 class="details">姓</h3>
                    <input type="text" class="f-text" id="tad" >
                  </div>
                  <div class="input-box">
                    <h3 class="details">名</h3>
                    <input type="text" class="f-text" id="tad">
                  </div>
                  <div class="input-box">
                    <h3 class="details">身分證字號</h3>
                    <input type="text" class="f-text" id="tad">
                  </div>
                  <div class="input-box">
                    <h3 class="details">電子信箱</h3>
                    <input type="text" class="f-text" id="tad">
                  </div>
                  <div class="input-box">
                    <h3 class="details">手機號碼</h3>
                    <input type="number" class="f-text" id="tad">
                  </div>
                  <div class="input-box">
                    <h3 class="details">暱稱</h3>
                    <input type="text" class="f-text" id="tad">
                  </div>
                </div>
                <div class="gender-details">
                  <!-- <input type="radio" name="gender" id="dot-1">
                  <input type="radio" name="gender" id="dot-2">
                  <input type="radio" name="gender" id="dot-3"> -->
                  <h3 class="details ">性別</h3>
                  <br>
                  <div class="category">
                    <label class="f-checkbox">男
                      <input type="radio" name="singlechoice">
                      <span class="checkmark"></span>
                  </label>
                  <label class="f-checkbox">女
                      <input type="radio" name="singlechoice">
                      <span class="checkmark"></span>
                  </label>
                  <label class="f-checkbox">不願回答
                      <input type="radio" name="singlechoice">
                      <span class="checkmark"></span>
                  </label>
                  </div>
                  <br>
               
                  <!-- <h1 style="font-size: 24px;">身分證字號</h1> -->
                  
                  <!-- 上船圖片 -->
                  <h3>身分證正反面上傳</h3>
                  <br>
                  <div class="section_right">
                    
                    <section>
                        <div class="pic-upload">
                            <div id = "dropzone"> 
                                <label class="uploadpic" for="customFileInput">
                                    <input id="customFileInput" type="file"/>
                                    <div><i class="bi bi-cloud-arrow-up"></i></div>
                                </label>
                                <h5>上傳圖片</h5>
                                <h6>請點選圖片上傳，或直接拖曳圖片至此</h6>
                                <!-- <p>設計最佳建議：1440 x 400 像素，且大小不得超過 100 KB 的圖檔</p> -->
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="pic-upload">
                            <div id = "dropzone"> 
                                <label class="uploadpic" for="customFileInput">
                                    <input id="customFileInput" type="file"/>
                                    <div><i class="bi bi-cloud-arrow-up"></i></div>
                                </label>
                                <h5>上傳圖片</h5>
                                <h6>請點選圖片上傳，或直接拖曳圖片至此</h6>
                                <!-- <p>設計最佳建議：1440 x 400 像素，且大小不得超過 100 KB 的圖檔</p> -->
                            </div>
                        </div>
                    </section>
                  </div> 
                </div>
                <div class="agree">
                <input type="checkbox" name="gender" style="width: 20px; height: 20px;">
                <span>我已經詳閱並同意<a href="#/privacy">隱私權保護政策</a></span>
                </div>
                <!-- 包住兩個按鈕 -->
                <div class="submit">
                <!-- <div class="button"> -->
                  <a href="#/signup1"><button type="button" class="btn-m btn-color-white">返回</button></a> 
                  <a href="#/login"><button type="button" class="btn-m btn-color-green">送出</button></a> 
                <!-- </div> -->
              </div>
              <!-- --------------------------------------- -->
              </form>
            </div>
          </div>
          </div>
   </main>
            
  </div>
  
          
     
             
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