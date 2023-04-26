<template>
  <div class="backend-nav">
    <ul class="">
      <!-- 後台管理首頁 -->
      <li>
        <router-link :to="{ name: 'backend_index' }" class="be-nav be-menu"
          :class="{ ['be-nav-active']: $route.name === 'backend_index' }">
          <div class="width-3 text-left">後台管理首頁</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <div class="be-nav-on be-nav-off"></div>
      </li>
      <!-- 網站管理 -->
      <li>
        <a class="be-nav be-menu"
          :class="{ ['be-nav-active']: $route.name === 'backend_websiteinfo' || $route.name === 'backend_officeinfo' || $route.name === 'backend_faq' }">
          <div class="width-3 text-left">網站管理</div>
          <i class="bi bi-caret-down-fill i-s"></i>
        </a>
        <div class="be-nav-on"
          :class="{ ['be-nav-off']: $route.name !== 'backend_websiteinfo' && $route.name !== 'backend_officeinfo' && $route.name !== 'backend_faq' }">
          <router-link :to="{ name: 'backend_websiteinfo' }"
            :class="{ ['btn-font-color-green']: $route.name === 'backend_websiteinfo' }">
            <button class="be-nav " :class="{ ['be-nav-active']: $route.name === 'backend_websiteinfo' }">網站基本設定</button>
          </router-link>
          <router-link :to="{ name: 'backend_officeinfo' }">
            <button class="be-nav " :class="{ ['be-nav-active']: $route.name === 'backend_officeinfo' }">聯絡里辦資訊</button>
          </router-link>
          <router-link :to="{ name: 'backend_faq' }">
            <button class="be-nav" :class="{ ['be-nav-active']: $route.name === 'backend_faq' }">常見問題設定</button>
          </router-link>
        </div>
      </li>
      <!-- 帳戶管理 -->
      <li>
        <a class="be-nav be-menu"
          :class="{ ['be-nav-active']: $route.name === 'backend_account_new' || $route.name === 'backend_account_overview' || $route.name === 'backend_account_cancel' }">
          <div class="width-3 text-left">帳戶管理</div>
          <i class="bi bi-caret-down-fill i-s"></i>
        </a>
        <div class="be-nav-on"
          :class="{ ['be-nav-off']: $route.name !== 'backend_account_new' && $route.name !== 'backend_account_overview' && $route.name !== 'backend_account_cancel' }">
          <router-link :to="{ name: 'backend_account_new' }">
            <button class="be-nav " :class="{ ['be-nav-active']: $route.name === 'backend_account_new' }">待審核清單</button>
          </router-link>
          <router-link :to="{ name: 'backend_account_overview' }">
            <button class="be-nav" :class="{ ['be-nav-active']: $route.name === 'backend_account_overview' }">帳戶總列表</button>
          </router-link>
          <router-link :to="{ name: 'backend_account_cancel' }">
            <button class="be-nav" :class="{ ['be-nav-active']: $route.name === 'backend_account_cancel' }">已刪除帳戶</button>
          </router-link>
        </div>
      </li>
      <!-- 最新消息管理 -->
      <li>
        <router-link :to="{ name: 'backend_news' }" class="be-nav be-menu"
          :class="{ ['be-nav-active']: $route.name === 'backend_news'||  $route.name === 'backend_news_add'}">
          <div class="width-3 text-left">最新消息管理</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <div class="be-nav-on"></div>
      </li>
      <!-- 討論區列表 -->
      <li>
        <router-link :to="{ name: 'backend_chat_list' }" class="be-nav be-menu"
          :class="{ ['be-nav-active']: $route.name === 'backend_chat_list' }">
          <div class="width-3 text-left">討論區列表</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <div class="be-nav-on"></div>
      </li>
      <!-- 活動管理 -->
      <li>
        <router-link class="be-nav" :to="{ name: 'backend_activity' }"
          :class="{ ['be-nav-active']: $route.name === 'backend_activity' || $route.name === 'backend_activity_input' ||$route.name === 'backend_activity_memberlist'}">
          <div class="width-3 text-left">活動管理</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
      </li>
      <!-- 空間管理 -->
      <li>
        <a class="be-nav  be-menu"
          :class="{ ['be-nav-active']: $route.name === 'backend_space_list' || $route.name === 'backend_space_management' || $route.name === 'backend_space_reservation' }">
          <div class="width-3 text-left">空間管理</div>
          <i class="bi bi-caret-down-fill i-s"></i>
        </a>
        <div class="be-nav-on"
          :class="{ ['be-nav-off']: $route.name !== 'backend_space_list' && $route.name !== 'backend_space_management' && $route.name !== 'backend_space_reservation' }">
          <router-link :to="{ name: 'backend_space_list' }"
            >
            <button class="be-nav" :class="{ ['be-nav-active']: $route.name === 'backend_space_list' }">空間列表</button>
          </router-link>
          <router-link :to="{ name: 'backend_space_management' }">
          <button class="be-nav" :class="{ ['be-nav-active']: $route.name === 'backend_space_management' }">預約列表</button>
          </router-link>
          <router-link :to="{ name: 'backend_space_reservation' }">
            <button class="be-nav" :class="{ ['be-nav-active']: $route.name === 'backend_space_reservation' }">待審核預約</button>
          </router-link>
        </div>
      </li>
        <li>
         <div class="be-nav" @click="clearCookies">
          <div class="width-3 text-left">登出後台</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </div>
      </li>
      <!-- 團購網管理 -->
      <!-- <li>
        <div class="be-nav-unopen ">
          <div class="width-3 text-left">團購網管理</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </div> -->
        <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                <div class="width-3 text-left">團購網管理</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                </a> -->
        <!-- <div class="be-nav-on"></div>
      </li> -->
      <!-- 維修通報 -->
      <!-- <li> -->
        <!-- <router-link :to="{ name: '' }" class="be-nav btn-color-unopened be-menu"> -->
        <!-- <div class="be-nav-unopen ">

          <div class="width-3 text-left">維修通報</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i> -->
          <!-- </router-link> -->
        <!-- </div>
        <div class="be-nav-on"></div> -->
      <!-- </li> -->
      <!-- 守望相助 -->
      <!-- <li> -->

        <!-- <div class=" be-nav-unopen">
          <div class="width-3 text-left">守望相助</div>
          <i class="bi bi-caret-down-fill i-s "></i>
        </div> -->
        <!-- <div class="be-nav-on be-nav-off be-menu">
          <router-link :to="{ name: '' }">
            <button class="be-nav btn-font-color-green">守望隊管理</button>
          </router-link>
          <router-link :to="{ name: '' }">
            <button class="be-nav btn-font-color-gray">簽到列表</button>
          </router-link>
        </div> -->
      <!-- </li> -->
      <!-- 瓦斯表數據 -->
      <!-- <li>
        <div class=" be-nav-unopen ">
          <div class="width-3 text-left">瓦斯表數據</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </div>
        <div class=""></div>
      </li> -->
    </ul>
  </div>
</template>

<script>



export default {
  data() {
    return {

    }
  },
  methods: {
    // 變換tag顏色與樣式
    addTagClass() {

    },
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
            document.cookie = `${name}=;expires=Thu, 01 Jan 1970 00:00:00 GMT`;

            // document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; domain=tibamef2e.com; path=/tgd104/g1/dist/`;
          }
          window.location.reload();
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

    


  },

  created() {

  },


  mounted() {
    this.togglebutton;
  }



}



</script>