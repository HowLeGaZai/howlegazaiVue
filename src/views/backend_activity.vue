<template>
  <backendNavbar></backendNavbar>

  <div class="body-sec">
    <main>
      <div class="container-date">
        <!-- 需渲染資料區塊 -->
        <p>西曆：2023 年 03 月 11 日</p>
        <p>農曆：癸卯年 乙卯月 戊辰日 二月二十</p>
        <!-- 需渲染資料區塊 -->
      </div>

      <section class="container-main">
        <div class="backend-nav">
        <ul class="">
          <li>
            <router-link :to="{name:'backend_index'}" class="be-nav btn-color-darkgray opacity-6 be-menu">
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
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">帳戶管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off">
              <!-- <button class="be-nav btn-font-color-gray " onclick="window.location.href='#/backend_websiteinfo'">帳戶總列表</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_new'">待審核清單</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_cancel'">已刪除帳戶</button> -->
              <router-link :to="{name:'backend_account_new'}">
                <button class="be-nav btn-font-color-gray">待審核清單</button>
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
            <a class="be-nav   btn-color-white be-menu" >
              <div class="width-3 text-left">活動管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on" id="beMenuOn">
             <router-link :to="{name:'backend_activity'}">
                <button class="be-nav btn-font-color-green ">活動列表</button>
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

        <section class="section_right">
          <!-- 活動總覽 -->
          <div class="w90percentage accounttable bk-activity">
            <h1>活動列表</h1>
            <div class="displayflex justifycontent">

              <div class="displayflex textalignleft">
                <div class="marginright20">
                  <label for="selecte" class="f-label">分類</label>
                  <select name="" id="selecte" class="f-select">
                    <option value="1">全部</option>
                    <option value="2">旅遊</option>
                    <option value="3">健康</option>
                    <option value="4">藝文</option>
                    <option value="5">其他</option>
                  </select>
                </div>
                <div>
                  <label for="selecte" class="f-label">上架狀態</label>
                  <select name="" id="selecte" class="f-select">
                    <option value="1">全部</option>
                    <option value="2">上架中</option>
                    <option value="3">已下架 </option>

                  </select>
                </div>
              </div>
              <div class="displayflex margintop18">
                <button type="button" class="btn-10-s btn-color-green"
                  onclick="window.location.href='activity_input.html'">
                  <i class="bi bi-plus-lg"></i>新增活動
                </button>

              </div>

            </div>
            <div class="">

              <table class=" back-table-2 bk-activity-table">

                <tbody>
                  <tr>
                    <td>編號</td>
                    <td>分類</td>
                    <td>活動名稱</td>
                    <td>費用</td>
                    <td>上架狀態</td>
                    <td>報名數</td>
                    <td>置頂</td>
                    <td>名單</td>
                    <td>編輯</td>
                  </tr>
                  <tr>
                    <td>001</td>
                    <td>藝文</td>
                    <td>清明畫出漂亮書法</td>
                    <td>免費</td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                    <td>14</td>
                    <td><label class="f-checkbox">
                        <input type="checkbox" name="multichoice" checked>
                        <span class="checkmark"></span>
                      </label></td>
                    <td><button type="button" class="btn-icon" onclick="window.location.href='#/backend_activity_input'">
                        <i class="bi bi-file-earmark-bar-graph btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-pencil-square btn-font-color-green"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>002</td>
                    <td>課程</td>
                    <td>DIY造龍舟教學</td>
                    <td>NT$ 200</td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                    <td>14</td>
                    <td><label class="f-checkbox">
                        <input type="checkbox" name="multichoice" checked>
                        <span class="checkmark"></span>
                      </label></td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-file-earmark-bar-graph btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-pencil-square btn-font-color-green"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>003</td>
                    <td>課程</td>
                    <td>教你包出美味肉粽</td>
                    <td>NT$ 100</td>
                    <td><label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                      </label>
                    </td>
                    <td>14</td>
                    <td><label class="f-checkbox">
                        <input type="checkbox" name="multichoice">
                        <span class="checkmark"></span>
                      </label></td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-file-earmark-bar-graph btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-pencil-square btn-font-color-green"></i>
                      </button>
                    </td>
                  </tr>

                  <tr>
                    <td>004</td>
                    <td>旅遊</td>
                    <td>歡樂草莓採摘去</td>
                    <td>免費</td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                    <td>14</td>
                    <td><label class="f-checkbox">
                        <input type="checkbox" name="multichoice">
                        <span class="checkmark"></span>
                      </label></td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-file-earmark-bar-graph btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-pencil-square btn-font-color-green"></i>
                      </button>
                    </td>
                  </tr>




                </tbody>

              </table>

            </div>
            <!-- 頁碼 -->
            <ul class="btn-page-block">
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
              <li><button class="btn-page btn-color-green">1</button></li>
              <li><button class="btn-page btn-color-white">2</button></li>
              <li><button class="btn-page btn-color-white">3</button></li>
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
            </ul>

          </div>



        </section>
      </section>


    </main>
    <div :class="bodyClass" class="nosupport">
            <main>
                <section class="noSupport">
                    <a href="#">
                        <div>     
                            <img class="LiIcon" src="../assets/img/LiIcon.png" alt="">
                            <h1>歹勢！後台目前不支援手機</h1>
                            <img class="cat" src="../assets/img/Cat.png" alt="">
                            <p>下班請休息，我們明天再忙！</p>
                        </div>
                    </a>
                </section>
            </main>
         
      </div>
  </div>
  <Footer></Footer>
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import Footer from './Footer.vue';



export default {
  components: {
    backendNavbar, Footer
  },
  mounted() {
    // ======nav的收合======
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





  },




}
</script>