<template>
  <backendNavbar></backendNavbar>

  <div class="body-sec">
    <main class="backpadding">
      <backCalender></backCalender>

      <section class="container-main">
        <BackLeftNav></BackLeftNav>

        <section class="section_right">
          <!-- 活動總覽 -->
          <div class="w90percentage accounttable bk-activity">
            <h1>活動總覽</h1>
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
                <router-link :to="{name:'backend_activity_input'}">
                  <button type="button" class="btn-10-s btn-color-green">
                    <i class="bi bi-plus-lg"></i>新增活動
                  </button>
                </router-link>

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
                    <td>報名數</td>
                    <td>置頂</td>
                    <td>名單</td>
                    <td>編輯</td>
                    <td>上架狀態</td>
                  </tr>
                  <tr>
                    <td>001</td>
                    <td>藝文</td>
                    <td>清明畫出漂亮書法</td>
                    <td>免費</td>
                    <td>14</td>
                    <td><label class="f-checkbox">
                      <input type="checkbox" name="multichoice" checked>
                      <span class="checkmark"></span>
                    </label></td>
                    <td><button type="button" class="btn-icon" onclick="window.location.href='#/backend_activity_memberlist'">
                      <i class="bi bi-file-earmark-bar-graph btn-font-color-green"></i>
                    </button>
                    </td>
                    <td><button type="button" class="btn-icon">
                      <i class="bi bi-pencil-square btn-font-color-green"></i>
                    </button>
                    </td>
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>002</td>
                    <td>課程</td>
                    <td>DIY造龍舟教學</td>
                    <td>NT$ 200</td>
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
                    <td><label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                      </label>
                    </td>
                  </tr>

                  <tr>
                    <td>003</td>
                    <td>課程</td>
                    <td>教你包出美味肉粽</td>
                    <td>NT$ 100</td>
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
                    <td><label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                      </label>
                    </td>
              </tr>

                  <tr>
                    <td>004</td>
                    <td>旅遊</td>
                    <td>歡樂草莓採摘去</td>
                    <td>免費</td>
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

import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';

export default {
  components: {
    backendNavbar, Footer,backCalender,BackLeftNav
  },
  mounted() {
    // ======nav的收合======
  





  },




}
</script>