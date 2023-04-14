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
                <router-link :to="{name:'contact'}" class="a-black">聯絡里辦</router-link>
              </li>
              <li>
                <router-link :to="{name:'news'}" class="a-black">最新消息</router-link>
              </li>
              <li>
                <router-link :to="{name:'chat'}" class="a-black">討論區</router-link>
              </li>
              <li class="smart-service">
                <a id="navbarDropdown">
                  智慧里民<span><i class="bi bi-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" id="dropdown-menu">
                  <li>
                    <router-link :to="{name:'activity'}" class="dropdown-item">活動報名</router-link>
                  </li>
                  <li>
                    <router-link :to="{name:'space'}" class="dropdown-item">空間預約</router-link>
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
              <p>歡迎 <span>Edison Chang</span></p>
              <!-- 會員大頭貼 -->
              <a href="#" class="userbtn tooltip" id="userBtn">
                <img src="../assets/img/user_pic.png" alt="" class="user_pic" />
              </a>
              <div id="navMenu">
                <ul class="account-menu" id="accountMenu">
                  <li>
                    <i class="bi bi-x-lg close" id="menuClose"></i>
                  </li>
                  <li class="user">
                    <!-- 會員姓名 -->
                    <p><span>{{userName}}</span></p>
                    <!-- 會員大頭貼 -->
                    <a href="#" class="userbtn">
                      <img src="../assets/img/user_pic.png" alt="" class="user_pic" />
                    </a>
                  </li>
                  <li><router-link :to="{name:'account_user'}">個人資訊</router-link></li>
                  <li><router-link :to="{name:'account_user_manage'}">成員管理</router-link></li>
                  <li class="user-record">
                    <a href="#"
                      >管理紀錄
                      <i class="bi bi-chevron-down bi-rotate"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <router-link :to="{name:'account_user_chat'}" class="dropdown-item">貼文刊登紀錄</router-link>
                      </li>
                      <!-- <li><router-link :to="{name:'account_user_gas'}" class="dropdown-item">瓦斯錶回報</router-link> -->
                      <li>
                        <router-link :to="{name:'account_user_space'}" class="dropdown-item">空間預約紀錄</router-link>
                      </li>
                      <li>
                        <router-link :to="{name:'account_user_activity'}" class="dropdown-item">活動報名紀錄</router-link>
                      </li>
                    </ul>
                  </li>
                  <!-- <li><router-link :to="{name:'account_user_product'}" class="dropdown-item">團購管理</router-link></li> -->
                  <li><hr class="dropdown-line" /></li>
                  <li>
                    <router-link :to="{name:'account_user_change_pwd'}">變更密碼</router-link>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
           <button v-else type="button" @click="goToLogin" class="btn rad-2 font-1 color-green">
            登入 / 註冊
          </button>
        </div>
      </nav>
    </header>
</template>

<script>

export default {
    data () {
      return {
        userName: "Edison Chang",
        }
    },
    props: {
      isLoggedIn: { 
        type: Boolean,
        required: true,
      }
    },
   methods: {
      goToLogin() {
        this.$router.push('login');
      }
    },
    mounted(){
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

      // userBtn.onclick = function (e) {
      //   accountMenu.classList.add("accountshow");
      //   if (window.innerWidth > 1400) {
      //     userBtn.href = "#/account_user"; // 修改 href 屬性值為 #
      //   }else{
      //     e.preventDefault();
      //   }
      // };

      // menuClose.onclick = function () {
      //   accountMenu.classList.remove("accountshow");
      // };

      // 該頁面時 nav 文字為綠色
      let navLinks = document.querySelectorAll('.a-black');

      navLinks.forEach(link => {
        link.addEventListener('click', function() {
          navLinks.forEach(link => link.classList.remove('active'));
          this.classList.add('active');
        });
      });

    },

    updated(){
    
      let userBtn = document.getElementById("userBtn");
    
      let accountMenu = document.getElementById("accountMenu");
      let menuClose = document.getElementById("menuClose");

      userBtn.onclick = function (e) {
        accountMenu.classList.add("accountshow");
        if (window.innerWidth > 1400) {
          userBtn.href = "#/account_user"; // 修改 href 屬性值為 #
        }else{
          e.preventDefault();
        }
      };

      menuClose.onclick = function () {
        accountMenu.classList.remove("accountshow");
      };

      // 該頁面時 nav 文字為綠色
      let navLinks = document.querySelectorAll('.a-black');

      navLinks.forEach(link => {
        link.addEventListener('click', function() {
          navLinks.forEach(link => link.classList.remove('active'));
          this.classList.add('active');
        });
      });
    },
}
</script>