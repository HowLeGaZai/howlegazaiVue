<template>
<div>
     <header>
      <nav class="main">
        <div class="leftnav">
          <!-- 登入後 -->
          <button class="burger" id="burger"><i class="bi bi-list"></i></button>
          <!-- logo -->
          <a class="brand" href="./index.html">
            <img src="../img/logo.svg" alt="" />
          </a>
          <div class="nav-back" id="nav-back">
            <ul id="main-Menu">
              <li class="left-logo"><img src="../img/logo2.svg" alt="" /></li>
              <li>
                <a href="./contact.html">聯絡里辦</a>
              </li>
              <li>
                <a href="./news.html">最新消息</a>
              </li>
              <li>
                <a href="./chat.html">討論區</a>
              </li>
              <li class="smart-service">
                <a href="#" id="navbarDropdown">
                  智慧里民<span><i class="bi bi-chevron-down"></i></span>
                </a>
                <ul class="dropdown-menu" id="dropdown-menu">
                  <li><a class="dropdown-item" href="">活動報名</a></li>
                  <li><a class="dropdown-item" href="">空間預約</a></li>
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
                <img src="../img/user_pic.png" alt="" class="user_pic" />
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
                      <img src="../img/user_pic.png" alt="" class="user_pic" />
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
                    <a href="#">變更密碼</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main class="contact">
      
        <!-- 里辦聯絡資訊 -->
      <section class="office">
        <h1 class="title_space"><span>大湖里</span>聯絡資訊</h1>
        <ul>
            <li class="telephone">
                <i class="bi bi-telephone-fill"></i>
                <h2>里辦電話</h2>
                <a href="tel:+886-2-9111234" target="_blank"><span>（第一）</span>(02) 2911-1234</a>
                <a href="tel:+886-912345678" target="_blank"><span>（第二）</span>0912-345-678</a>
              </li>
    
              <li class="email">
                <i class="bi bi-envelope-fill"></i>
                <h2>里辦信箱</h2>
                <p><a href="mailto:abcd@gmail.com" target="_blank">abcd@gmail.com</a></p>
              </li>
    
              <li class="address">
                <i class="bi bi-geo-alt-fill"></i>
                <h2>里辦地址</h2>
                <p><a href="https://www.google.com/search?q=花蓮縣國安鄉大湖里忠孝路12巷3號" target="_blank">花蓮縣國安鄉大湖里忠孝路12巷3號</a></p>
              </li>
        </ul>  
            
      </section>

      <!-- 里長簡介 -->
      <section class="chef">
        <h1 class="title_space">里長簡介</h1>
        <section>
            <div class="content">
                <h3>鄭成功</h3>
                <ul>
                    <li>性別：<span>111年大湖里村里長選舉</span></li>
                    <li>選舉屆次：<span>男</span></li>
                    <li>學歷：<span>大湖理工大學</span></li>
                </ul>
                <div>鄭成功，1912年3月4日出生於花蓮縣，鄭成功小時為棒球好手，曾為朴子少棒隊捕手。就讀朴子國小和東石國中，在畢業後，同時考取大湖理工大學資工系。雖然家人希望他從醫，但鄭成功看了《JavaScript》一書之後，希望成為排名第一的「邏輯」的碼農，期待學成返鄉後促成偏鄉數位轉型。
                    於大湖理工大學資畢業後，就繼續進修，獲得大湖理工大學都市規劃、企業管理雙碩士學位，並獲取大湖理工大學土地規劃與都市管理博士學位</div>
            </div>
            <div class="image contact_pic_chief">
                <img src="/img/c_chief1 (2).jpg" alt="">
            </div>
        </section>
      </section>

        <!-- 村里文化特色 -->
        <section class="village-introduce">
            <h1 class="title_space"><span>大湖里</span>文化特色</h1>
            <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div>
                        <div class="image contact_pic_banner">
                            <img src="../img/c_banner.png" alt="">
                        </div>
                    <h2>文化</h2>
                    <div class="summary">
                        大湖里風光明媚，從昔日國會山莊所在的山頭，逐漸往五指山系這一帶綿延發展，成為新興住宅與舊系紅磚老宅混搭的社區
                    </div>                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <div class="image contact_pic_banner">
                            <img src="../img/c_banner.png" alt="">
                        </div>
                    <h2>文化</h2>
                    <div class="summary">
                        大湖里風光明媚，從昔日國會山莊所在的山頭，逐漸往五指山系這一帶綿延發展，成為新興住宅與舊系紅磚老宅混搭的社區
                    </div>                    </div>
                </div>
                <div class="swiper-slide">
                    <div>
                        <div class="image contact_pic_banner">
                            <img src="../img/c_banner.png" alt="">
                        </div>
                    <h2>文化</h2>
                    <div class="summary">
                        大湖里風光明媚，從昔日國會山莊所在的山頭，逐漸往五指山系這一帶綿延發展，成為新興住宅與舊系紅磚老宅混搭的社區
                    </div>
                    </div>
                </div>
              </div>  
            </div>
        <div class="swiper-button">
          <button type="button" class="btn-cir-m  btn-color-white swiper-button-prev"><i class="bi bi-caret-left-fill"></i></button>
          <button type="button" class="btn-cir-m btn-color-green swiper-button-next"><i class="bi bi-caret-right-fill"></i></button>
        </div>
    </section>

          <!-- 常見問題 -->
          <section class="faq">
            <h1 class="title_space">常見問題</h1>
            <div class="collapsible-accordion">
                <div class="collapsible-item">
                  <input type="radio" id="rad1" name="radio">
                  <label class="collapsible-item-label" for="rad1">花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i class="bi bi-caret-down-fill"></i></label>
                  <div class="collapsible-item-content">
                    大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！
                  </div>
                </div>
              </div>
              
              <div class="collapsible-accordion">
                <div class="collapsible-item">
                  <input type="radio" id="rad2" name="radio">
                  <label class="collapsible-item-label" for="rad2">花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i class="bi bi-caret-down-fill"></i></label>
                  <div class="collapsible-item-content">
                    <p>大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！</p>
                  </div>
                </div>
              </div>
              
              <div class="collapsible-accordion">
                <div class="collapsible-item">
                  <input type="radio" id="rad3" name="radio">
                  <label class="collapsible-item-label" for="rad3">花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i class="bi bi-caret-down-fill"></i></label>
                  <div class="collapsible-item-content">
                    <p>大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！</p>
                  </div>
                </div>
              </div>

              <div class="collapsible-accordion">
                <div class="collapsible-item">
                  <input type="radio" id="rad4" name="radio">
                  <label class="collapsible-item-label" for="rad4">花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i class="bi bi-caret-down-fill"></i></label>
                  <div class="collapsible-item-content">
                    <p>大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！</p>
                  </div>
                </div>
              </div>

              <div class="collapsible-accordion">
                <div class="collapsible-item">
                  <input type="radio" id="rad5" name="radio">
                  <label class="collapsible-item-label" for="rad5">花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i class="bi bi-caret-down-fill"></i></label>
                  <div class="collapsible-item-content">
                    <p>大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！</p>
                  </div>
                </div>
              </div>

          </section>
</main>
</div>
</template>

<script>
export default {
    data(){

    },
    methods:{

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

      userBtn.onclick = function () {
        accountMenu.classList.add("accountshow");
      };

      menuClose.onclick = function () {
        accountMenu.classList.remove("accountshow");
      };
    },
}
</script>