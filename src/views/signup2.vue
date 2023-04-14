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
              <!-- 只有一個元素 -->
              <div>
                <label>住址</label>
                <input
                  type="text"
                  class="f-text"
                  id="tad"
                  disabled
                  required
                  v-model="localStorageValue"
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

<<<<<<< HEAD
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
                      onpaste="return false" ondragenter="return false"
                      style="ime-mode:disabled"
                      
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
                    <input type="text" class="f-text" id="tad" placeholder="王" required v-model="firstName"/>
                  </div>
                  <div class="input-box col-sm-12 col-sm-4">
                    <label class="details">名</label>
                    <input type="text" class="f-text" id="tad" placeholder="小明" required v-model="lastName"/>
                  </div>
                  <div class="input-box col-sm-12 col-sm-4">
                    <label class="details">暱稱</label>
                    <input type="text" class="f-text" id="tad" placeholder="大軒哥" required v-model="nickName"/>
                  </div>
                </div>

                <div class="row">
                  <div class="input-box col-sm-12 col-sm-6">
                    <label class="details">身分證字號</label>
                    <input type="text" class="f-text" id="tad" placeholder="A123456" required v-model="idNum"/>
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
                    <input type="text" class="f-text" id="tad" placeholder="123@abc.com" required v-model="email"/>
                  </div>
                  <div class="input-box col-sm-12 col-sm-6">
                    <label class="details">手機號碼</label>
                    <input type="number" class="f-text" id="tad" placeholder="0912345678" maxlength="10" mixlength="10" required v-model="phoneNum" />
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
=======
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">密碼</label>
>>>>>>> 18f89385cd55524f8b2b3a0e8a5d0cf71a6a0a94
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
                  <input type="text" class="f-text" id="tad" placeholder="王" required v-model="firstName"/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">名</label>
                  <input type="text" class="f-text" id="tad" placeholder="小明" required v-model="lastName"/>
                </div>
                <div class="input-box col-sm-12 col-sm-4">
                  <label class="details">暱稱</label>
                  <input type="text" class="f-text" id="tad" placeholder="大軒哥" required v-model="nickName"/>
                </div>
              </div>

              <div class="row">
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">身分證字號</label>
                  <input type="text" class="f-text" id="tad" placeholder="A123456" required v-model="idNum"/>
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
                  <input type="text" class="f-text" id="tad" placeholder="123@abc.com" required v-model="email"/>
                </div>
                <div class="input-box col-sm-12 col-sm-6">
                  <label class="details">手機號碼</label>
                  <input type="number" class="f-text" id="tad" placeholder="0912345678" maxlength="10" mixlength="10" required v-model="phoneNum" />
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
                  v-model="agree"
                /><p>我已經詳閱並同意<a href="#/privacy" target="_black">隱私權保護政策</a></p>
              </div>
              <!-- 包住兩個按鈕 -->
              <div class="submit">
                <!-- <div class="button"> -->
                
                  <button type="button" class="btn-m btn-color-white" @click="retunForm">
                    返回
                  </button>
              
                
                  
<<<<<<< HEAD
                    
                <!-- <router-link to="./login">  -->
                    <button type="button" class="btn-m btn-color-green" @click="submitForm" >
                      送出
                    </button>
                  <!-- </router-link> -->
                </div>
                <!-- --------------------------------------- -->
            </section>
          </div>
=======
              <!-- <router-link to="./login">  -->
                  <button type="button" class="btn-m btn-color-green" @click="submitForm">
                    送出
                  </button>
                <!-- </router-link> -->
              </div>
              <!-- --------------------------------------- -->
          </section>
>>>>>>> 18f89385cd55524f8b2b3a0e8a5d0cf71a6a0a94
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
      firstName: '',
      lastName: '',
      nickName: '',
      idNum: '',
      email: '',
      phoneNum: '',
      agree: '',
      input1 : '' ,
      input2 : '' ,
      input3 : '' ,
      localStorageValue: "",
    };
  },
  setup() {
    return {};
  },
  methods: {
    //返回按鈕
    retunForm(){
      this.$router.push('./signup1')
    },
    //不能有空值的按鈕
    submitForm() {
      if (this.account === '' || this.password === '' || this.lastName === '' || this.firstName === '' ||
      this.nickName === '' ||  this.idNum === '' || this.email === '' || this.phoneNum === '' || this.agree === '') {
        alert('你有少露填選資料 請全部慎重 重填');
        this.$router.push('./signup2')
        return;
      }else {
        this.$router.push('./login')
      }

      // 在這裡編寫提交表單的程式碼
      console.log('表單提交成功');  
    }
  },
  mounted() {
    //抓取signup1 的 localStorage data 資料
    
    this.input1 = localStorage.getItem("input1");
    this.input2 = localStorage.getItem("input2");
    this.input3 = localStorage.getItem("input3");
    this.localStorageValue = this.input1 +  this.input2 + this.input3  + localStorage.getItem("inputValue");
// ----------------------------------- navbar----------------------------------------------------------
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