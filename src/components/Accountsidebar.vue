<template>
        <section class="account-menu-pc">
              <h1>帳戶專區</h1>
              <div class="image user_pic">
                <img :src="localPORTRAIT" alt="" />
              </div>
              <ul>
                <li>
                  <router-link :to="{ name: 'account_user' }" class=""  :class="{active: $route.name === 'account_user'}"
                    >個人資訊</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'account_user_manage' }" class="" :class="{active: $route.name === 'account_user_manage'}"
                    >成員管理</router-link
                  >
                </li>
                <li>
                  <router-link :to="{ name: 'account_user_chat' }" class="" :class="{active: $route.name === 'account_user_chat'}"
                    >貼文刊登紀錄</router-link
                  >
                </li>
                <li>
                  <router-link :to="{ name: 'account_user_space' }" class="" :class="{active: $route.name === 'account_user_space'}"
                    >空間預約紀錄</router-link
                  >
                </li>
                <li>
                  <router-link :to="{ name: 'account_user_activity' }" class="" :class="{active: $route.name === 'account_user_activity'}"
                    >活動報名紀錄</router-link
                  >
                </li>
                <li>
                  <router-link
                    :to="{ name: 'account_user_change_pwd' }" :class="{active: $route.name === 'account_user_change_pwd'}"
                    class=""
                    >變更密碼</router-link
                  >
                </li>
                <li><router-link :to="{name:'home'}" class="" @click="clearCookies">登出</router-link></li>

              </ul>
            </section>
</template>

<script>

export default {
  props: ["localPORTRAIT"],

  data() {
    return {
        
    }
  },
  methods: {
    // 變換tag顏色與樣式
    addTagClass() {

    },

      // 登出功能清除 cookie
        clearCookies() {
          // 取得目前的 cookie 字串
          localStorage.removeItem("portrait")
          let cookies = document.cookie;
          // 將 cookie 字串分割成每個 cookie
          let cookieArr = cookies.split("; ");
          // 迭代 cookieArr，將每個 cookie 都設置過期時間為過去的日期，使其被刪除
          for (let i = 0; i < cookieArr.length; i++) {
            let cookie = cookieArr[i];
            let eqPos = cookie.indexOf("=");
            let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; domain=tibamef2e.com; path=/tgd104/g1/dist`;

          }
          this.$router.push('/');
        },

  },

  computed: {
    //點擊展開
    togglebutton() {
      let beMenu = document.querySelectorAll(".be-menu");
      let beMenuOn = document.querySelectorAll(".be-nav-on");
      // let beMenu = document.querySelectorAll("be-nav");
      // console.log(beMenu);

      for (let i = 0; i < beMenu.length; i++) {
        beMenu[i].addEventListener("click", function () {
          beMenuOn[i].classList.toggle('be-nav-off');
          //   console.log(beMenu[i]);
        })
      }
    }

    // getPORTRAIT() {
    //     if(this.PORTRAIT) { // 判斷是否有值傳過來
    //         return this.PORTRAIT
    //     }
    //     return '' //沒有傳值的預設值
    // }
  },

  created() {
  },


  mounted() {
    this.togglebutton;

    
    // this.abc = this.PORTRAIT;
  }
}



</script>