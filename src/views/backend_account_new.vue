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
            <a class="be-nav btn-color-white">
              <div class="width-3 text-left">後台管理首頁</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
          </li>
          <li>
            <a class="be-nav opacity-6 btn-color-darkgray" id="beMenu">
              <div class="width-3 text-left">網站管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off" id="beMenuOn">
              <button class="be-nav btn-font-color-green">網站基本設定</button>
              <button class="be-nav be-nav btn-font-color-gray">
                聯絡里辦資訊
              </button>
              <button class="be-nav btn-font-color-gray">常見問題設定</button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">帳戶管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
              <div class="be-nav-on be-nav-off" id="beMenuOn">
                <button class="be-nav btn-font-color-green">待審核清單</button>
                <button class="be-nav be-nav btn-font-color-gray">
                  帳戶總列表
                </button>
                <button class="text-ali be-nav btn-font-color-gray">
                  已刪除帳戶
                </button>
              </div>
            </a>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">最新消息管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
          </li>
          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">討論區列表</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
          </li>
          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">團購網管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
          </li>
          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">活動管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off" id="beMenuOn">
              <button class="be-nav btn-font-color-green">活動列表</button>
              <button class="be-nav be-nav btn-font-color-gray">
                新增活動
              </button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">空間管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>

            <div class="be-nav-on be-nav-off" id="beMenuOn">
              <button class="be-nav btn-font-color-green">空間列表</button>
              <button class="be-nav be-nav btn-font-color-gray">
                預約管理
              </button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">維修通報</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">守望相助</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off" id="beMenuOn">
              <button class="be-nav btn-font-color-green">守望隊管理</button>
              <button class="be-nav be-nav btn-font-color-gray">
                簽到列表
              </button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray">
              <div class="width-3 text-left">瓦斯表數據</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
          </li>
        </ul>
      </div>
      <section class="section_right">
        <!-- 帳戶總覽 -->
        <div class="w90percentage accounttable bk-account-new">
          <div>
            <h1>待審核戶長</h1>

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
                    <td><i class="bi bi-check"> </i><i class="bi bi-x"></i></td>
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
                    <td><i class="bi bi-check"> </i><i class="bi bi-x"></i></td>
                    <td>001</td>
                    <td>王小明</td>
                    <td>myaccount123@gmail.com</td>
                    <td>台北市內湖區大湖里碧山路255巷7號</td>
                    <!-- <td><i class="bi bi-caret-down-fill"></i></td> -->
                  </tr>
                  <tr>
                    <td><i class="bi bi-check"> </i><i class="bi bi-x"></i></td>
                    <td>001</td>
                    <td>王小明</td>
                    <td>myaccount123@gmail.com</td>
                    <td>台北市內湖區大湖里碧山路255巷7號</td>
                    <!-- <td><i class="bi bi-caret-down-fill"></i></td> -->
                  </tr>
                  <tr>
                    <td><i class="bi bi-check"> </i><i class="bi bi-x"></i></td>
                    <td>001</td>
                    <td>王小明</td>
                    <td>myaccount123@gmail.com</td>
                    <td>台北市內湖區大湖里碧山路255巷7號</td>
                    <!-- <td><i class="bi bi-caret-down-fill"></i></td> -->
                  </tr>
                  <tr>
                    <td><i class="bi bi-check"> </i><i class="bi bi-x"></i></td>
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
  </div>

  <Footer></Footer>  
</template>

<script>
import backendNavbar from "./backendNavbar.vue";
import Footer from './Footer.vue';
export default {
  components: {
    backendNavbar,
    Footer,
  },
  mounted() {
    let openBtn = document.getElementById('openBtn');
    let hiddenRow = document.querySelector('.hidden-row');
    openBtn.addEventListener('click', () => {
        hiddenRow.classList.toggle('show-row');
    });
  },
};
</script>