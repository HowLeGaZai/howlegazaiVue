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
            <router-link :to="{name:'backend_chat_list'}" class="be-nav opacity-6 btn-color-white be-menu">
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
        <section class="section_right">
          <!-- 活動總覽 -->
          <div class="w90percentage accounttable bk-chat">
            <h1>討論區列表</h1>
            <div class="displayflex justifycontent bk-filter">

              <div class="displayflex textalignleft">
                <div class="marginright20">
                  <label for="selecte" class="f-label">分類</label>
                  <select name="" id="selecte" class="f-select">
                    <option value="1">所有話題</option>
                    <option value="2">美食討論</option>
                    <option value="3">二手交易</option>
                    <option value="4">里民閒聊</option>
                    <option value="5">團購討論</option>
                    <option value="5">我要抱怨</option>
                    <option value="5">其他</option>
                  </select>
                </div>
                <div class="marginright20 push-date">
                  <label for="selecte" class="f-label">發布日期</label>
                  <input type="text" class="f-text" id="name4" placeholder="">
                </div>
                <!-- <div>
              <label for="selecte" class="f-label">上架狀態</label>
              <select name="" id="selecte" class="f-select">
                <option value="1">全部</option>
                <option value="2">上架中</option>
                <option value="3">已下架 </option>
              </select>
            </div> -->
              </div>


            </div>
            <div class="">

              <table class=" back-table-2 bk-table-chat">

                <tbody>
                  <tr>
                    <td class="bk-chat-type">分類</td>
                    <td class="bk-chat-title">文章標題</td>
                    <td class="bk-chat-date">發佈日期</td>
                    <td class="bk-chat-account">發佈用戶</td>
                    <td class="bk-chat-link">連結</td>
                    <td class="bk-chat-state">上架狀態</td>

                  </tr>
                  <tr>
                    <td>美食</td>
                    <td>最近吃到超好吃飯糰</td>
                    <td>2022-01-03</td>
                    <td>李小明</td>
                    <td><button type="button" class="btn-icon" onclick="window.open('#/chat_info', '_blank')">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>二手交易</td>
                    <td>小孩已長大，售幼兒可愛包屁衣多款</td>
                    <td>2022-01-03</td>
                    <td>張迪生</td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td>
                      <div class="test-label">
                        <label class="switch">
                          <input type="checkbox">
                          <span class="slider"></span>
                        </label>
                      </div>
                    </td>
                  </tr>

                  <tr>
                    <td>我要抱怨</td>
                    <td>某社區的半夜還在唱來去高雄 = =</td>
                    <td>2022-01-03</td>
                    <td>車干可可</td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>里民閒聊</td>
                    <td>最近半夜都有怪人騷擾女生</td>
                    <td>2022-01-03</td>
                    <td>廖老大</td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>美食</td>
                    <td>誰知道這附近最好喝的摩卡是哪家咖啡廳</td>
                    <td>2022-03-03</td>
                    <td>張因心</td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>里民閒聊</td>
                    <td>家裡漏水，有沒有推薦的水電師傅</td>
                    <td>2022-03-03</td>
                    <td>潘湯米</td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>美食</td>
                    <td>誰知道711前的豆花伯的營業時間？</td>
                    <td>2022-03-03</td>
                    <td>郭蜜莉</td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>里民閒聊</td>
                    <td>河堤旁遛小孩</td>
                    <td>2022-03-03</td>
                    <td>櫻桃爺爺</td>
                    <td><button type="button" class="btn-icon">
                        <i class="bi bi-link-45deg btn-font-color-green"></i>
                      </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>





                </tbody>

              </table>

            </div>
            <!-- 頁碼 -->
            <ul class="btn-page-block">
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
              <li><button class="btn-page btn-color-white">1</button></li>
              <li><button class="btn-page btn-color-green">2</button></li>
              <li><button class="btn-page btn-color-white">3</button></li>
              <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
            </ul>


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
                                <img class="LiIcon" src="../assets/img/LiIcon.png" alt="">
                                <h1>歹勢！後台目前不支援手機</h1>
                                <img class="cat" src="../assets/img/Cat.png" alt="">
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

import backendNavbar from './backendNavbar.vue';
import Footer from './Footer.vue';


export default {
  components: {
    backendNavbar, Footer
  },
  mounted() {

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