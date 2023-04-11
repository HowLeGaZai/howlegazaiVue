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

            <div class="signup2">
            <div class="signup2">
              <!-- 只有一個元素 -->
              <div>
                <label>住址</label>
                <input
                  type="text"
                  class="f-text"
                  id="tad"
                  disabled
                  required
                  :placeholder = "`${$route.query.input1}${$route.query.input2}${$route.query.input3}${$route.query.input4}`"
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
                    required
                    v-model="account"
                  />
                </div>

                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">密碼</label>
                  <input
                    type="password"
                    class="f-text"
                    id="tad"
                    placeholder="請輸入密碼"
                    required
                    v-model="password"
                  />
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">姓</label>
                  <input type="text" class="f-text" id="tad" placeholder="王" required/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">名</label>
                  <input type="text" class="f-text" id="tad" placeholder="小明" required/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">暱稱</label>
                  <input type="text" class="f-text" id="tad" placeholder="大軒哥" required/>
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">身分證字號</label>
                  <input type="text" class="f-text" id="tad" placeholder="A123456" required/>
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
                  <input type="text" class="f-text" id="tad" placeholder="123@abc.com" required/>
                </div>
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">手機號碼</label>
                  <input type="number" class="f-text" id="tad" placeholder="0912345678" required />
                </div>
              </div>

                <!-- 上傳圖片 -->
                <div>
                  <label>身分證影本</label>
                  <section class="section_right addflex">
                      <p>正面</p>
                      <picture-cropid></picture-cropid>
                      <p>反面</p>
                      <picture-cropid></picture-cropid>


                    </section>
                </div>
              </div>

              <div class="agree">
                <input
                  type="checkbox"
                  name="gender"
                  style="width: 20px; height: 20px"
                  required
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
                  ><button type="button" class="btn-m btn-color-green" @submit.prevent="submitForm">
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
import PictureCropid from '../components/PictureCropid.vue';


export default {
  components: {
    Footer,
    navbar,
    PictureCropid,
  },
  data(){
    return {
      account:'',
      password:'',

    };
  },
  setup() {
    return {};
  },
  methods: {
    submitForm() {
      if (this.account === null) {
        alert('請填寫所有必填欄位');
        return;
      }

      // 在這裡編寫提交表單的程式碼
      console.log('表單提交成功');
    }
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

</script>
