<template>
  <header>
    <nav class="main">
      <div class="leftnav">
        <!-- 登入後 -->
        <button class="burger" id="burger"><i class="bi bi-list"></i></button>
        
        <!-- logo -->
        <router-link :to="{name:'home'}" class="brand">
          <img src="../assets/img/logo.svg" alt="" />
        </router-link>
        <!-- </a> -->
        <div class="nav-back" id="nav-back">
          <ul id="main-Menu">
            <li class="left-logo"><img src="../assets/img/logo2.svg" alt="" /></li>
            <li>
              <router-link :to="{name:'contact'}" class="a-black" :class="{active: $route.name === 'contact'}">聯絡里辦</router-link>
            </li>
            <li>
              <router-link :to="{name:'news'}" class="a-black" :class="{active: $route.name === 'news'}">最新消息</router-link>
            </li>
            <li>
              <router-link :to="{name:'chat'}" class="a-black" :class="{active: $route.name === 'chat'}">討論區</router-link>
            </li>
            <li class="smart-service">
              <a id="navbarDropdown" :class="{active: $route.name === 'activity' || $route.name === 'space'}">
                智慧里民<span><i class="bi bi-chevron-down"></i></span>
              </a>
              <ul class="dropdown-menu" id="dropdown-menu">
                <li>
                  <router-link :to="{name:'activity'}" class="dropdown-item" :class="{active: $route.name === 'activity'}">活動報名</router-link>
                </li>
                <li>
                  <router-link :to="{name:'space'}" class="dropdown-item" :class="{active: $route.name === 'space'}">空間預約</router-link>
                </li>
                <li><a class="dropdown-item a-gray" href="#">里民團購</a></li>
                <li><a class="dropdown-item a-gray" href="#">守望相助</a></li>
                <li><a class="dropdown-item a-gray" href="#">維修通報</a></li>
                <li><a class="dropdown-item a-gray" href="#">瓦斯錶回報</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>

      <div class="rightnav">
        <ul v-if="isLoggedIn">
          <li>
            <!-- 會員姓名 -->
            <p>歡迎 <span>{{nickName}}</span></p>
            <!-- 會員大頭貼 -->
            <a class="userbtn tooltip" id="userBtn" @click="showNav">
                 <img :src="portrait != ''? portrait :require(`@/assets/img/user_pic.png`)" alt="" class="user_pic" />
            </a>
            <div id="navMenu">
              <ul class="account-menu" id="accountMenu">
                <li>
                  <i class="bi bi-x-lg close" id="menuClose" @click="closeNav"></i>
                </li>
                <li class="user">
                  <!-- 會員姓名 -->
                  <p><span>{{nickName}}</span></p>
                  <!-- 會員大頭貼 -->
                  <a href="" class="userbtn">
                    <img :src="portrait != ''? portrait :require(`@/assets/img/user_pic.png`)" alt="" class="user_pic" />
                    
                  </a>
                </li>
                <li><router-link :to="{name:'account_user'}" :class="{active: $route.name === 'account_user'}">個人資訊</router-link></li>
                <li><router-link :to="{name:'account_user_manage'}" :class="{active: $route.name === 'account_user_manage'}">成員管理</router-link></li>
                <li class="user-record">
                  <a href="#" :class="{active: $route.name === 'account_user_chat' || $route.name === 'account_user_space' || $route.name === 'account_user_activity'}"
                  >管理紀錄
                  <i class="bi bi-chevron-down bi-rotate"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <router-link :to="{name:'account_user_chat'}" class="dropdown-item" :class="{active: $route.name === 'account_user_chat'}">貼文刊登紀錄</router-link>
                  </li>
                  <!-- <li><router-link :to="{name:'account_user_gas'}" class="dropdown-item">瓦斯錶回報</router-link> -->
                    <li>
                      <router-link :to="{name:'account_user_space'}" class="dropdown-item" :class="{active: $route.name === 'account_user_space'}">空間預約紀錄</router-link>
                    </li>
                    <li>
                      <router-link :to="{name:'account_user_activity'}" class="dropdown-item" :class="{active: $route.name === 'account_user_activity'}">活動報名紀錄</router-link>
                    </li>
                  </ul>
                </li>
                <!-- <li><router-link :to="{name:'account_user_product'}" class="dropdown-item">團購管理</router-link></li> -->
                <li><hr class="dropdown-line" /></li>
                <li>
                  <router-link :to="{name:'account_user_change_pwd'}">變更密碼</router-link>
                </li>
                <li>
                  <a href="" @click="clearCookies">登出</a>
                </li>
                
              </ul>
            </div>
          </li>
        </ul>
        <div v-else>
         <button  type="button" @click="goToLogin" class="btn rad-2 font-1 color-green signupandlogin">
          登入 / 註冊
        </button>
        <button  type="button" @click="goToLogin" class="loginbtn">
        <i class="bi bi-person-circle"></i></button>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>

export default {
    data () {
      return {
        isLoggedIn: false,
        userName: "",
        portrait:"",
        nickName:"",
        }
    },
    // props: {
    //   isLoggedIn: { 
    //     type: Boolean,
    //     required: true,
    //   }
    // },
   methods: {
      goToLogin() {
        this.$router.push('/login');
      },
       getCookieValue(cookieName) {
        // 讀取指定名稱的 Cookie 值
        const cookieStr = decodeURIComponent(document.cookie);
        const cookies = cookieStr.split('; ');
        for (let i = 0; i < cookies.length; i++) {
          const cookie = cookies[i].split('=');
          if (cookie[0] === cookieName) {
            return cookie[1] || null;
          }
        }
        return null;
      },
      clearCookies() {
      localStorage.removeItem("portrait");
      // 取得目前的 cookie 字串
      let cookies = document.cookie;
      // 將 cookie 字串分割成每個 cookie
      let cookieArr = cookies.split("; ");
      // 迭代 cookieArr，將每個 cookie 都設置過期時間為過去的日期，使其被刪除
      for (let i = 0; i < cookieArr.length; i++) {
        let cookie = cookieArr[i];
        let eqPos = cookie.indexOf("=");
        let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = `${name}=;expires=Thu, 01 Jan 1970 00:00:00 GMT`;
      }
      this.$router.push('/');
    },

    // 判斷 right nav 開啟或直接進入
    showNav(e) {
      let accountMenu = document.getElementById("accountMenu");
      let userBtn = document.getElementById("userBtn");

      if (window.innerWidth > 1400) {
        // console.log(">1400")
        this.$router.push({ name: 'account_user' });
      } else {
        //關掉a連結的預設行為
        e.preventDefault();
       accountMenu.classList.add("accountshow");

      }
    },
     
    closeNav(e) {
      let accountMenu = document.getElementById("accountMenu");

       accountMenu.classList.remove("accountshow");
       e.preventDefault();

    },


    },
    mounted(){
      
      const cookieValue = this.getCookieValue('account');
      const uusername = this.getCookieValue('name');
      const unickname = this.getCookieValue('nickname');
      let uportrait = localStorage.getItem("portrait");
    
        // 判斷 Cookie 是否存在
        if (cookieValue !== null) {
          this.isLoggedIn = true;
          this.userName = uusername;
          this.nickName = unickname;
          this.portrait = uportrait;
          // Cookie 存在，執行相應的處理
          // console.log('Cookie 存在，值為: ' + cookieValue);
          // 在這裡執行 home.vue 中的相應函式或處理
        } else {
          // Cookie 不存在，執行相應的處理
          // console.log('Cookie 不存在');
          this.isLoggedIn = false;
          // 在這裡執行 home.vue 中的相應函式或處理
        };


    let burgerBtn = document.getElementById("burger");
    let mainMenu = document.getElementById("main-Menu");
    let dropList = document.getElementById("dropdown-menu");
    let dropBtn = document.getElementById("navbarDropdown");
    let navBack = document.getElementById("nav-back");
    let userBtn = document.getElementById("userBtn");
    let navMenu = document.getElementById("navMenu");
    let accountMenu = document.getElementById("accountMenu");
    let menuClose = document.getElementById("menuClose");

    burgerBtn.onclick = function () {
      navBack.classList.add("menushow");
      mainMenu.classList.add("menushow");
    };
    navBack.onclick = function () {
      navBack.classList.remove("menushow");
      mainMenu.classList.remove("menushow");
    };

    dropBtn.onclick = function (e) {
      e.stopPropagation();
      dropList.classList.toggle("show");
      dropBtn.classList.toggle("onoff");
    };
  },
}
</script>