<template>
  <div class="backend-nav">
    <ul class="">
      <!-- 後台管理首頁 -->
      <li>
        <router-link :to="{ name: 'backend_index' }" class="be-nav opacity-6 btn-color-darkgray be-menu">
          <div class="width-3 text-left">後台管理首頁</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <div class="be-nav-on be-nav-off"></div>
      </li>
      <!-- 網站管理 -->
      <li>
        <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
          <div class="width-3 text-left">網站管理</div>
          <i class="bi bi-caret-down-fill i-s"></i>
        </a>
        <div class="be-nav-on be-nav-off">
          <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_websiteinfo'">網站基本設定</button> -->
          <!-- <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_officeinfo'">聯絡里辦資訊</button> -->
          <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_faq'">常見問題設定</button> -->
          <router-link :to="{ name: 'backend_websiteinfo' }">
            <button class="be-nav btn-font-color-gray">網站基本設定</button>
          </router-link>
          <router-link :to="{ name: 'backend_officeinfo' }">
            <button class="be-nav btn-font-color-gray">聯絡里辦資訊</button>
          </router-link>
          <router-link :to="{ name: 'backend_faq' }">
            <button class="be-nav btn-font-color-gray">常見問題設定</button>
          </router-link>
        </div>
      </li>
      <!-- 帳戶管理 -->
      <li>
        <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
          <div class="width-3 text-left">帳戶管理</div>
          <i class="bi bi-caret-down-fill i-s"></i>
        </a>
        <div class="be-nav-on be-nav-off">
          <!-- <button class="be-nav btn-font-color-gray " onclick="window.location.href='#/backend_websiteinfo'">帳戶總列表</button>
                <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_new'">待審核清單</button>
                <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_cancel'">已刪除帳戶</button> -->
          <router-link :to="{ name: 'backend_account_new' }">
            <button class="be-nav btn-font-color-gray">待審核清單</button>
          </router-link>
          <router-link :to="{ name: 'backend_account_overview' }">
            <button class="be-nav btn-font-color-gray">帳戶總列表</button>
          </router-link>
          <router-link :to="{ name: 'backend_account_cancel' }">
            <button class="be-nav btn-font-color-gray">已刪除帳戶</button>
          </router-link>
        </div>
      </li>
      <!-- 最新消息管理 -->
      <li>
        <router-link :to="{ name: 'backend_news' }" class="be-nav opacity-6 btn-color-darkgray be-menu">
          <!-- <router-link :to="{name:'backend_news'}" class="be-nav opacity-6 btn-color-darkgray be-menu"> -->
          <div class="width-3 text-left">最新消息管理</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
                <div class="width-3 text-left">最新消息管理</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                </a> -->
        <div class="be-nav-on"></div>
      </li>
      <!-- 討論區列表 -->
      <li>
        <router-link :to="{ name: 'backend_chat_list' }" class="be-nav opacity-6 btn-color-darkgray be-menu">
          <div class="width-3 text-left">討論區列表</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_chat_list">
                <div class="width-3 text-left">討論區列表</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                </a> -->
        <div class="be-nav-on"></div>
      </li>
      <!-- 活動管理 -->
      <li>
        <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
          <div class="width-3 text-left">活動管理</div>
          <i class="bi bi-caret-down-fill i-s"></i>
        </a>
        <div class="be-nav-on be-nav-off" id="beMenuOn">
          <router-link :to="{ name: 'backend_activity' }">
            <button class="be-nav btn-font-color-gray ">活動列表</button>
          </router-link>
          <router-link :to="{ name: 'backend_activity_input' }">
            <button class="be-nav be-nav btn-font-color-gray">新增活動</button>
          </router-link>
          <!-- <button class="be-nav btn-font-color-gray "  onclick="window.location.href='#/backend_activity'">活動列表</button>
                <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_activity_input'">新增活動</button> -->
        </div>
      </li>
      <!-- 空間管理 -->
      <li>
        <a class="be-nav btn-color-white be-menu">
          <div class="width-3 text-left">空間管理</div>
          <i class="bi bi-caret-down-fill i-s"></i>
        </a>
        <div class="be-nav-on">
          <router-link :to="{ name: 'backend_space_list' }">
            <button class="be-nav btn-font-color-green">空間列表</button>
          </router-link>
          <router-link :to="{ name: 'backend_space_management' }">
            <button class="be-nav be-nav btn-font-color-gray">預約管理</button>
          </router-link>
          <!-- <button class="be-nav btn-font-color-gray"  onclick="window.location.href='''">空間列表</button>
                <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href=''">預約管理</button> -->
        </div>
      </li>
      <!-- 團購網管理 -->
      <li>
        <router-link :to="{ name: '' }" class="be-nav opacity-6 btn-color-unopened be-menu">
          <div class="width-3 text-left">團購網管理</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                <div class="width-3 text-left">團購網管理</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                </a> -->
        <div class="be-nav-on"></div>
      </li>
      <!-- 維修通報 -->
      <li>
        <router-link :to="{ name: '' }" class="be-nav opacity-6 btn-color-unopened be-menu">
          <div class="width-3 text-left">維修通報</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>
        <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
                <div class="width-3 text-left">維修通報</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                </a> -->
        <div class="be-nav-on"></div>
      </li>
      <!-- 守望相助 -->
      <li>
        <a class="be-nav opacity-6 btn-color-unopened be-menu " href="#">
          <div class="width-3 text-left">守望相助</div>
          <i class="bi bi-caret-down-fill i-s "></i>
        </a>
        <div class="be-nav-on be-nav-off be-menu">
          <router-link :to="{ name: '' }">
            <button class="be-nav btn-font-color-green">守望隊管理</button>
          </router-link>
          <router-link :to="{ name: '' }">
            <button class="be-nav btn-font-color-gray">簽到列表</button>
          </router-link>
          <!-- <button class="be-nav btn-font-color-green">守望隊管理</button>
                <button class="be-nav be-nav btn-font-color-gray">簽到列表</button> -->
        </div>
      </li>
      <!-- 瓦斯表數據 -->
      <li>
        <router-link :to="{ name: '' }" class="be-nav opacity-6 be-menu btn-color-unopened">
          <div class="width-3 text-left">瓦斯表數據</div>
          <i class="bi bi-caret-down-fill i-s opacity-0"></i>
        </router-link>

        <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
                <div class="width-3 text-left">瓦斯表數據</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                </a> -->
        <div class="be-nav-on"></div>
      </li>
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
  },

  computed: {
    // 點擊展開
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