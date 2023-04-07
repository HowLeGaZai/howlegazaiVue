<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">
      <div class="container-date">
        <!-- 需渲染資料區塊 -->
        <p>西曆：2023 年 03 月 11 日</p>
        <p>農曆：癸卯年 乙卯月 戊辰日 二月二十</p>
        <!-- 需渲染資料區塊 -->
      </div>

      <section class="container-main">
      <!------- 補這裡：後台側欄選單 ------->
      <div class="backend-nav">
        <ul class="">
          <li>
            <router-link :to="{name:'backend_index'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">後台管理首頁</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav btn-color-white be-menu" href="#/backend_index">
            </a> -->
            <div class="be-nav-on be-nav-off"></div>
          </li>
          <li>
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">網站管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off">
              <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_websiteinfo'">網站基本設定</button> -->
              <!-- <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_officeinfo'">聯絡里辦資訊</button> -->
              <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_faq'">常見問題設定</button> -->
              <router-link :to="{name:'backend_websiteinfo'}">
                <button class="be-nav btn-font-color-gray">網站基本設定</button>
              </router-link>
              <router-link :to="{name:'backend_officeinfo'}">
                <button class="be-nav btn-font-color-gray">聯絡里辦資訊</button>
              </router-link>
              <router-link :to="{name:'backend_faq'}">
                <button class="be-nav btn-font-color-gray">常見問題設定</button>
              </router-link>
            </div>
          </li>

          <li>
            <a class="be-nav  opacity-6 be-menu btn-color-white" >
              <div class="width-3 text-left">帳戶管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on">
              <!-- <button class="be-nav btn-font-color-gray " onclick="window.location.href='#/backend_websiteinfo'">帳戶總列表</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_new'">待審核清單</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_cancel'">已刪除帳戶</button> -->
              <router-link :to="{name:'backend_account_new'}">
                <button class="be-nav btn-font-color-green">待審核清單</button>
              </router-link>
              <router-link :to="{name:'backend_account_overview'}">
                <button class="be-nav btn-font-color-gray">帳戶總列表</button>
              </router-link>
              <router-link :to="{name:'backend_account_cancel'}">
                <button class="be-nav btn-font-color-gray">已刪除帳戶</button>
              </router-link>
            </div>
          </li>

          <li>
            <router-link :to="{name:'backend_news'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
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
          <li>
            <router-link :to="{name:'backend_chat_list'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">討論區列表</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_chat_list">
              <div class="width-3 text-left">討論區列表</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>
          <li>
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">活動管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off" id="beMenuOn">
              <router-link :to="{name:'backend_activity'}">
                <button class="be-nav btn-font-color-gray ">活動列表</button>
            </router-link>
            <router-link :to="{name:'backend_activity_input'}">
              <button class="be-nav be-nav btn-font-color-gray">新增活動</button>
            </router-link>
              <!-- <button class="be-nav btn-font-color-gray "  onclick="window.location.href='#/backend_activity'">活動列表</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_activity_input'">新增活動</button> -->
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">空間管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off ">
              <router-link :to="{name:'backend_space_list'}">
                <button class="be-nav btn-font-color-gray">空間總覽</button>
            </router-link>
            <router-link :to="{name:'backend_space_management'}">
              <button class="be-nav be-nav btn-font-color-gray">預約管理</button>
            </router-link>
              <!-- <button class="be-nav btn-font-color-gray"  onclick="window.location.href='''">空間列表</button>
              <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href=''">預約管理</button> -->
            </div>
          </li>
          <li>
            <router-link :to="{name:''}" class="be-nav opacity-6 btn-color-unopened be-menu">
              <div class="width-3 text-left">團購網管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
              <div class="width-3 text-left">團購網管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>
          <li>
            <router-link :to="{name:''}" class="be-nav opacity-6 btn-color-unopened be-menu">
              <div class="width-3 text-left">維修通報</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
              <div class="width-3 text-left">維修通報</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a> -->
            <div class="be-nav-on"></div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-unopened be-menu " href="#">
              <div class="width-3 text-left">守望相助</div>
              <i class="bi bi-caret-down-fill i-s "></i>
            </a>
            <div class="be-nav-on be-nav-off be-menu">
              <router-link :to="{name:''}">
                <button class="be-nav btn-font-color-green">守望隊管理</button>
              </router-link>
              <router-link :to="{name:''}">
                <button class="be-nav btn-font-color-gray">簽到列表</button>
              </router-link>
              <!-- <button class="be-nav btn-font-color-green">守望隊管理</button>
              <button class="be-nav be-nav btn-font-color-gray">簽到列表</button> -->
            </div>
          </li>

          <li>
            <router-link :to="{name:''}" class="be-nav opacity-6 be-menu btn-color-unopened">
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
      <!------- 補這裡：後台側欄選單 ------->

        <section class="section_right">
          <!-- 待審核清單 -->
          <div class="w90percentage accounttable bk-account-new">
            <div>
              <h1>待審核清單</h1>

              <div class="displayflex maxheight">
                <table class="back-table-2">
                  <tbody>
                    <tr>
                      <td>通過審核</td>
                      <td>編號</td>
                      <td>姓名</td>
                      <td>帳號</td>
                      <td>地址</td>
                      <!-- <td>展開</td> -->
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>台北市內湖區大湖里碧山路255巷7號</td>
                      <!-- <td><i class="bi bi-caret-down-fill" id="openBtn"></i></td> -->
                    </tr>

                    <tr class="hidden-row">
                      <!-- <td>
                      <ul>
                        <li>aaa</li>
                        <li>aaa</li>
                        <li>aaa</li>
                        <li>aaa</li>
                      </ul>
                    </td> -->
                      <!-- <td>
              <table>
                <tbody>
                  <tr>
                    <td>出生年月日</td>
                    <td>性別</td>
                    <td>暱稱</td>
                    <td>email</td>
                    <td>電話號碼</td>
                    <td>身分證影本</td>
                  </tr>
                  <tr>
                    <td>1989/7/4</td>
                    <td>男</td>
                    <td>五星上將</td>
                    <td>ismail123@mail.com</td>
                    <td>0912345678</td>
                    <td>
                      <img src="" alt="">
                      <img src="" alt="">
                  </td>
                </tr>
                </tbody>
              </table>
            </td> -->
                    </tr>

                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>台北市內湖區大湖里碧山路255巷7號</td>
                      <!-- <td><i class="bi bi-caret-down-fill"></i></td> -->
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>台北市內湖區大湖里碧山路255巷7號</td>
                      <!-- <td><i class="bi bi-caret-down-fill"></i></td> -->
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>台北市內湖區大湖里碧山路255巷7號</td>
                      <!-- <td><i class="bi bi-caret-down-fill"></i></td> -->
                    </tr>
                    <tr>
                      <td>
                        <i class="bi bi-check"> </i><i class="bi bi-x"></i>
                      </td>
                      <td>001</td>
                      <td>王小明</td>
                      <td>myaccount123@gmail.com</td>
                      <td>台北市內湖區大湖里碧山路255巷7號</td>
                      <!-- <td><i class="bi bi-caret-down-fill"></i></td> -->
                    </tr>
                  </tbody>
                </table>
                <!-- 頁碼 -->
                <ul class="btn-page-block">
                  <li>
                    <button class="btn-page btn-color-white">
                      <i class="bi bi-caret-left-fill"></i>
                    </button>
                  </li>
                  <li><button class="btn-page btn-color-green">1</button></li>
                  <li><button class="btn-page btn-color-white">2</button></li>
                  <li><button class="btn-page btn-color-white">3</button></li>
                  <li>
                    <button class="btn-page btn-color-white">
                      <i class="bi bi-caret-right-fill"></i>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </section>
    </main>
    <!------ 補這裡：不支援手機畫面 ------>
    <div :class="bodyClass" class="nosupport">
      <main>
        <section class="noSupport">
          <a href="#">
            <div>
              <img class="LiIcon" src="../assets/img/LiIcon.png" alt="" />
              <h1>歹勢！後台目前不支援手機</h1>
              <img class="cat" src="../assets/img/Cat.png" alt="" />
              <p>下班請休息，我們明天再忙！</p>
            </div>
          </a>
        </section>
      </main>
    </div>
    <!------ 補這裡：不支援手機畫面 ------>
  </div>

  <Footer></Footer>
</template>

<script>
import backendNavbar from "./backendNavbar.vue";
import Footer from "./Footer.vue";

// 測欄開合
import $ from "jquery";
import "jquery-ui-dist/jquery-ui";
import "jquery-ui-dist/jquery-ui.min.css";

export default {
  components: {
    backendNavbar,
    Footer,
  },
  mounted() {
    $("#resizable").resizable({});
    $("#datepicker").datepicker({
      monthNames: [
        "一月",
        "二月",
        "三月",
        "四月",
        "五月",
        "六月",
        "七月",
        "八月",
        "九月",
        "十月",
        "十一月",
        "十二月",
      ],
      dayNamesMin: ["週日", "週一", "週二", "週三", "週四", "週五", "週六"],
      dateFormat: "yy/mm/dd",

      onSelect: function () {
        var selected = $(this).val();
        $(".selectedD").html(`日期:&nbsp` + selected);
        // console.log(selected);

        // let dayNamesMin = $(this).datepicker( "option", "dayNamesMin" );
        // console.log(dayNamesMin);
      },
    });

    //  ＝＝＝＝＝＝側欄選單的JS＝＝＝＝＝＝
    let beMenu = document.querySelectorAll(".be-menu");
    let beMenuOn = document.querySelectorAll(".be-nav-on");
    // let beMenu = document.querySelectorAll("be-nav");
    // console.log(beMenu);

    for (let i = 0; i < beMenu.length; i++) {
      beMenu[i].addEventListener("click", function () {
        beMenuOn[i].classList.toggle("be-nav-off");
        //   console.log(beMenu[i]);
      });
    }

    //  ＝＝＝＝＝＝側欄選單的JS end＝＝＝＝＝＝

    // 手風琴開合 //
    // let openBtn = document.getElementById("openBtn");
    // let hiddenRow = document.querySelector(".hidden-row");
    // openBtn.addEventListener("click", () => {
    //   hiddenRow.classList.toggle("show-row");
    // });
  },
};
</script>
