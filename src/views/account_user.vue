<template>
  <div class="backend">
    <navbar></navbar>
    <div class="background_image">
      <main>
        <section class="account-border">
          <div class="account">
            <section class="account-menu-pc">
              <h1>帳戶專區</h1>
              <div class="image user_pic">
                <img src="../assets/img/user_pic.png" alt="" />
              </div>
              <ul>
                <!-- <li v-for="accountNav in accountNavs"><a :href="accountNav.con">{{accountNav.nav}}</a></li> -->
                <li>
                  <router-link :to="{ name: 'account_user' }" class="a-select"
                    >個人資訊</router-link
                  >
                </li>
                <!-- <li><a href="#" class="a-select">個人資訊</a></li> -->
                <li>
                  <router-link :to="{ name: 'account_user_manage' }" class=""
                    >成員管理</router-link
                  >
                </li>

                <!-- <li><a href="#">成員管理</a></li> -->
                <!-- <li><a href="#">貼文刊登紀錄</a></li> -->
                <li>
                  <router-link :to="{ name: 'account_user_chat' }" class=""
                    >貼文刊登紀錄</router-link
                  >
                </li>

                <!-- <li><a href="#">空間預約紀錄</a></li> -->
                <li>
                  <router-link :to="{ name: 'account_user_space' }" class=""
                    >空間預約紀錄</router-link
                  >
                </li>

                <!-- <li><a href="#">活動報名紀錄</a></li> -->
                <li>
                  <router-link :to="{ name: 'account_user_activity' }" class=""
                    >活動報名紀錄</router-link
                  >
                </li>

                <!-- <li><a href="#">變更密碼</a></li> -->
                <li>
                  <router-link
                    :to="{ name: 'account_user_change_pwd' }"
                    class=""
                    >變更密碼</router-link
                  >
                </li>
                <li><router-link :to="{name:'home'}" class="" @click="clearCookies">登出</router-link></li>

              </ul>
            </section>
            <section class="account-content">
              <h1 class="marginbottom30">個人資訊</h1>

              <!-- <div class="row"></div> -->
              <!-- <div class="col-md-6 col-12"></div> -->
              <!-- <div class="col-12"></div> -->

              <div class="account_row">
                <h4>地址</h4>
                <h4>花蓮縣大湖里偉育里復興南路5樓</h4>
              </div>
              <div class="account_row">
                <h4>帳號</h4>
                <h4 class="changelineheight">myaccount123</h4>
              </div>
              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>姓名</h4>
                  <h4>王三明</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" v-model="name" placeholder="王大明"> -->
                </div>

                <div class="col-md-6 col-12 input2">
                  <h4>暱稱</h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="nickname"
                    v-model="nickname"
                    placeholder="阿水"
                  />
                </div>
              </div>

              <div class="account_row">
                <h4>性別</h4>
                <div class="row paddingleft10">
                  <label class="f-checkbox"
                    >男
                    <input
                      type="radio"
                      name="singlechoice"
                      v-model="gender"
                      value="male"
                    />
                    <span class="checkmark"></span>
                  </label>
                  <label class="f-checkbox"
                    >女
                    <input
                      type="radio"
                      name="singlechoice"
                      v-model="gender"
                      value="female"
                    />
                    <span class="checkmark"></span>
                  </label>
                  <label class="f-checkbox"
                    >不願回答
                    <input
                      type="radio"
                      name="singlechoice"
                      v-model="gender"
                      value="noanswer"
                    />
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>

              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>身份證字號*</h4>
                  <h4>A112234567</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" v-model="IDnumber" placeholder="身份證字號"> -->
                </div>
              </div>

              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>出生 年/月/日</h4>
                  <h4>1994/9/4</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" v-model="birthdate" placeholder="YYYY/MM/DD"> -->
                </div>
              </div>

              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>電子信箱</h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="name"
                    v-model="email"
                    placeholder="abc@a"
                  />
                </div>

                <div class="col-md-6 col-12 input2">
                  <h4>手機號碼</h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="name"
                    v-model="phonenumber"
                    placeholder="手機號碼"
                  />
                </div>
              </div>

              <div class="row account_row">
                <div class="col-12">
                  <h4>變更頭像</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" placeholder="大頭照.jpg"> -->
                  <portrait-crop></portrait-crop>
                </div>
              </div>

              <div class="account-row textalignright">
                <button type="button" class="btn-m btn-color-green">
                  儲存
                </button>
              </div>
            </section>
          </div>
        </section>
        <!-- </div>
        </section> -->
      </main>
    </div>
  </div>
</template>


<script>
import PortraitCrop from "../components/PortraitCrop.vue";
import navbar from "./navbar.vue";

export default {
  data() {
    return {
      name: "",
      nickname: "",
      gender: "",
      IDnumber: "",
      birthdate: "",
      email: "",
      phonenumber: "",

      accountNavs: [
        { nav: "個人資訊", con: "./account_user.html" },
        { nav: "成員管理", con: "./account_user_manage_3.html" },
        { nav: "貼文刊登紀錄", con: "./account_user_chat.html" },
        { nav: "瓦斯錶回報紀錄", con: "./account_user_gas.html" },
        { nav: "空間預約紀錄" },
        { nav: "活動報名紀錄" },
        { nav: "團購管理" },
        { nav: "變更密碼" },
      ],

      mainMenus: [
        { nav: "聯絡里辦", con: "./contact.html" },
        { nav: "最新消息", con: "./news.html" },
        { nav: "討論區", con: "./chat.html" },
        // {nav:'智慧里民',con:'#'},
      ],
    };
  },

  mounted() {
    // const uploadButtons = document.querySelectorAll('input[type="file"]');

    // uploadButtons.forEach((button) => {
    //   button.addEventListener("change", (event) => {
    //     const uploadGroup = button.closest(".uploading");

    //     const picArea = uploadGroup.querySelector(".pic-area-box");
        // const picImg = picArea.querySelector('img');
        // const picName = picArea.querySelector("span");

        // const file = event.target.files[0];

        // if (file.type.startsWith("image/")) {
        //   const reader = new FileReader();

        //   reader.onload = () => {
            // picImg.src = reader.result;
            // picName.textContent = file.name;

            // picImg.style.width = '100%'
            // picImg.style.height = '100%'
            // picImg.style.maxWidth = '300px'
            // picImg.style.maxHeight = '100px'
            // console.log(file.name);
        //   };

        //   reader.readAsDataURL(file);
        // } else {
        //   picImg.src = "";
        //   picName.textContent = file.name;
    //     // }
    //   });
    // });
  },
  methods: {
      clearCookies() {
      // 取得目前的 cookie 字串
      let cookies = document.cookie;
      // 將 cookie 字串分割成每個 cookie
      let cookieArr = cookies.split("; ");
      // 迭代 cookieArr，將每個 cookie 都設置過期時間為過去的日期，使其被刪除
      for (let i = 0; i < cookieArr.length; i++) {
        let cookie = cookieArr[i];
        let eqPos = cookie.indexOf("=");
        let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
      }
    },
  },
  computed: {},
  components: {
    navbar,
    PortraitCrop,
  },
};
</script>