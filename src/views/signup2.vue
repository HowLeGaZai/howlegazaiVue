<template>
  <navbar></navbar>
  <div class="bgc">

    <main>

      <div class="center">
        <div class="container">
          <h2 class="p-10">註冊</h2>

          <section class="content">
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

            <form action="#" class="signup2">
              <!-- 只有一個元素 -->
              <div>
                <label>住址</label>
                <input
                  type="text"
                  class="f-text"
                  id="tad"
                  disabled
                  v-model="outputValue"
                />
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">帳號</label>
                  <input
                    type="text"
                    class="f-text"
                    id="tad"
                    placeholder="請輸入帳號"
                  />
                </div>

                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">密碼</label>
                  <input
                    type="password"
                    class="f-text"
                    id="tad"
                    placeholder="請輸入密碼"
                  />
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">姓</label>
                  <input type="text" class="f-text" id="tad" placeholder="王"/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">名</label>
                  <input type="text" class="f-text" id="tad" placeholder="小明"/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">暱稱</label>
                  <input type="text" class="f-text" id="tad" placeholder="大軒哥"/>
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">身分證字號</label>
                  <input type="text" class="f-text" id="tad" placeholder="A123456"/>
                </div>
                <div class="gender-details col-sm-12 col-sm-6">
                  <!-- <input type="radio" name="gender" id="dot-1">
                  <input type="radio" name="gender" id="dot-2">
                  <input type="radio" name="gender" id="dot-3"> -->
                  <label class="details">性別</label>
                  <div class="category">
                    <label class="f-checkbox"
                      >男
                      <input type="radio" name="singlechoice" />
                      <span class="checkmark"></span>
                    </label>
                    <label class="f-checkbox"
                      >女
                      <input type="radio" name="singlechoice" />
                      <span class="checkmark"></span>
                    </label>
                    <label class="f-checkbox"
                      >不願回答
                      <input type="radio" name="singlechoice" />
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">電子信箱</label>
                  <input type="text" class="f-text" id="tad" placeholder="123@abc.com"/>
                </div>
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">手機號碼</label>
                  <input type="number" class="f-text" id="tad" placeholder="0912345678"/>
                </div>
              </div>

                <!-- 上傳圖片 -->
                <div>
                  <label>身分證正反面上傳</label>
                  <section class="section_right">

                      <!-- 身分證正面 -->
                      <div class="pic-upload">
                        <div id="dropzone">
                          <input id="customFileInput" type="file" />
                          <i class="bi bi-cloud-arrow-up"></i>
                          <label class="uploadpic" for="customFileInput">上傳圖片</label>
                          <p>點選上傳，或拖曳至此</p>
                          <!-- <p>設計最佳建議：1440 x 400 像素，且大小不得超過 100 KB 的圖檔</p> -->
                        </div>
                      </div>
              
                      <!-- 身分證背面 -->
                      <div class="pic-upload">
                        <div id="dropzone">
                          <input id="customFileInput" type="file" />
                          <i class="bi bi-cloud-arrow-up"></i>
                          <label class="uploadpic" for="customFileInput">上傳圖片</label>
                          <p>點選上傳，或拖曳至此</p>
                          <!-- <p>設計最佳建議：1440 x 400 像素，且大小不得超過 100 KB 的圖檔</p> -->
                        </div>
                      </div>

                    </section>
                </div>
              </form>

              <div class="agree">
                <input
                  type="checkbox"
                  name="gender"
                  style="width: 20px; height: 20px"
                /><p>我已經詳閱並同意<a href="#/privacy" target="_black">隱私權保護政策</a></p>
              </div>
              <!-- 包住兩個按鈕 -->
              <div class="submit">
                <!-- <div class="button"> -->
                <a href="#/signup1"
                  ><button type="button" class="btn-m btn-color-white">
                    返回
                  </button></a
                >
                <a href="#/login"
                  ><button type="button" class="btn-m btn-color-green">
                    送出
                  </button></a
                >
              </div>
              <!-- --------------------------------------- -->
          </section>
        </div>
      </div>

    </main>
  </div>

  <Footer></Footer>
</template>

<script>
import navbar from "./navbar.vue";
import Footer from "./Footer.vue";

export default {
  components: {
    Footer,
    navbar,
  },
  data(){
    return {
      
    };
  },
  setup() {
    return {};
  },
  mounted() {

    
    let labels = document.querySelectorAll(".collapsible-item-label");
    let contents = document.querySelectorAll(".collapsible-item-content");

    labels.forEach((label, index) => {
      label.addEventListener("click", () => {
        // 檢查是否已經打開
        const isOpen = label.classList.contains("open-item-label");
        const content = contents[index];
        const isContentOpen = content.classList.contains("open-item-content");

        // 移除所有元素上已經打開的樣式
        labels.forEach((label) => label.classList.remove("open-item-label"));
        contents.forEach((content) =>
          content.classList.remove("open-item-content")
        );

        // 添加或移除打開的樣式
        if (!isOpen && !isContentOpen) {
          label.classList.add("open-item-label");
          content.classList.add("open-item-content");
        }
      });
    });
  },
};

// let myData = localStorage.getItem('myData');
// document.getElementById('myInput').value = myData;

</script>
