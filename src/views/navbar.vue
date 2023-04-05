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
                <router-link :to="{name:'contact'}">聯絡里辦</router-link>
              </li>
              <li>
                
                <router-link :to="{name:'news'}">最新消息</router-link>
              </li>
              <li>
                
                <router-link :to="{name:'chat'}">討論區</router-link>
              </li>
              <li class="smart-service">
                <a href="#" id="navbarDropdown">
                  智慧里民<span><i class="bi bi-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" id="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="/activity">活動報名</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="/space">空間預約</a>
                  </li>
                  <!-- <li> -->
                    <!-- <a class="dropdown-item" href="/space">空間預約</a> -->
                    <!-- <router-link :to="{name:'space'}" class="dropdown-item">空間預約</router-link> -->
                  <!-- </li> -->
                  <li><a class="dropdown-item" href="#">里民團購</a></li>
                  <li><a class="dropdown-item" href="#">守望相助</a></li>
                  <li><a class="dropdown-item" href="#">維修通報</a></li>
                  <li><a class="dropdown-item" href="#">瓦斯錶回報</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <div class="rightnav">
          <button type="button" class="btn rad-2 font-1 color-green">
            登入 / 註冊
          </button>
          <ul>
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
                    <p><span>Edison Chang</span></p>
                    <!-- 會員大頭貼 -->
                    <a href="#" class="userbtn">
                      <img src="../assets/img/user_pic.png" alt="" class="user_pic" />
                    </a>
                  </li>
                  <li><a href="#">個人資訊</a></li>
                  <li><a href="#">成員管理</a></li>
                  <li class="user-record">
                    <a href="#"
                      >管理紀錄
                      <i class="bi bi-chevron-down bi-rotate"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">貼文刊登紀錄</a>
                      </li>
                      <!-- <li><a class="dropdown-item" href="#">瓦斯錶回報紀錄</a></li> -->
                      <li>
                        <a class="dropdown-item" href="#">空間預約紀錄</a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="#">活動報名紀錄</a>
                      </li>
                    </ul>
                  </li>
                  <!-- <li><a class="dropdown-item" href="#">團購管理</a></li> -->
                  <li><hr class="dropdown-line" /></li>
                  <li>
                    <a href="/account_user_change_pwd.html">變更密碼</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
</template>

<script>
export default {
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

      userBtn.onclick = function () {
        accountMenu.classList.add("accountshow");
        if (window.innerWidth > 1400) {
          userBtn.href = "/account_user"; // 修改 href 屬性值為 #
        }
      };

      menuClose.onclick = function () {
        accountMenu.classList.remove("accountshow");
      };
    },
}
</script>