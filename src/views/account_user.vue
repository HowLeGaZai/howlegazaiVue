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
                <h4>{{ ADDRESS }}</h4>
              </div>
              <div class="account_row">
                <h4>帳號</h4>
                <h4 class="changelineheight">{{ ACCOUNT }}</h4>
              </div>
              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>姓名</h4>
                  <h4>{{ FULL_NAME }}</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" v-model="name" placeholder="王大明"> -->
                </div>

                <div class="col-md-6 col-12 input2">
                  <h4>暱稱</h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="nickname"
                    v-model="nickname"
                    placeholder="{{ NICKNAME }}"
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
                      v-model="GENDER"
                      value="male"
                    />
                    <span class="checkmark"></span>
                  </label>
                  <label class="f-checkbox"
                    >女
                    <input
                      type="radio"
                      name="singlechoice"
                      v-model="GENDER"
                      value="female"
                    />
                    <span class="checkmark"></span>
                  </label>
                  <label class="f-checkbox"
                    >不願回答
                    <input
                      type="radio"
                      name="singlechoice"
                      v-model="GENDER"
                      value="noanswer"
                    />
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>

              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>身份證字號*</h4>
                  <h4>{{ ID_NUMBER }}</h4>
                  <!-- <input type="text" class="f-text nomargin" id="name" v-model="IDnumber" placeholder="身份證字號"> -->
                </div>
              </div>

              <div class="row account_row">
                <div class="col-md-6 col-12">
                  <h4>出生 年/月/日</h4>
                  <h4>{{ BIRTHDATE }}</h4>
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
                    placeholder="{{ EMAIL }}"
                  />
                </div>

                <div class="col-md-6 col-12 input2">
                  <h4>手機號碼</h4>
                  <input
                    type="text"
                    class="f-text nomargin"
                    id="name"
                    v-model="PHONE"
                    placeholder="{{ PHONE }}"
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
import navbar from "./navbar.vue";
import axios from 'axios';
import PortraitCrop from "../components/PortraitCrop.vue";
// import Address from "ipaddr.js";

export default {
  data() {
    return {
      userId:"",
      ADDRESS: "",
      ACCOUNT:"",
      FULL_NAME: "",
      NICKNAME:"",
      GENDER:"",
      BIRTHDATE:"",
      EMAIL:"",
      PHONE:"",
      PORTRAIT:"",
      jsonData: [],

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
    const userId = this.getCookieValue("id");
    console.log(userId);
    
    const getUserData = () => {
    const url = "http://localhost/TGD104G1/public/API/account_user.php";
    const data = { user_id: userId };
    axios
      .post(url, data)
      .then((response) => {
        this.jsonData = response.data;
        this.accountInfo();
      })
      .catch((error) => {
        console.error(error);
      });
    };

    getUserData();

  },
  methods: {
      getCookieValue(cookieName) {
        const cookies = document.cookie.split("; ");
        for (let i = 0; i < cookies.length; i++) {
          const cookie = cookies[i].split("=");
          if (cookie[0] === cookieName) {
            return cookie[1];
          }
        }
        return null;
      },

      accountInfo() {
        this.userId = this.jsonData[this.jsonData.length - 1].ID;
        this.ADDRESS = this.jsonData[this.jsonData.length - 1].ADDRESS;
        this.ACCOUNT = this.jsonData[this.jsonData.length - 1].ACCOUNT;
        this.FULL_NAME = this.jsonData[this.jsonData.length - 1].FULL_NAME;
        this.NICKNAME = this.jsonData[this.jsonData.length - 1].NICKNAME;
        this.GENDER = this.jsonData[this.jsonData.length - 1].GENDER;
        this.BIRTHDATE = this.jsonData[this.jsonData.length - 1].BIRTHDATE;
        this.EMAIL = this.jsonData[this.jsonData.length - 1].EMAIL;
        this.PHONE = this.jsonData[this.jsonData.length - 1].PHONE;
        this.PORTRAIT = this.jsonData[this.jsonData.length - 1].PORTRAIT;
      },


      // 登出功能清除 cookie
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