<template>
  <backendNavbar></backendNavbar>
  <main class="body-sec">
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
      <div class="nav_right w100percentage padding30">
     <!--各頁資料放這裡 -->
    
     <!-- 我的sass寫在 _back_table_scss -->
    <div class="w90percentage accounttable">
        <h1>最新消息管理</h1>
        <div class="displayflex justifycontent">
            <div class="displayflex textalignleft ">
                <div class="marginright20">
                  <label for="selecte" class="f-label">類別</label>
                  <select name="" id="selecte" class="f-select">
                      <option value="1">-選擇-</option>
                      <option value="2">公告</option>
                      <option value="3">宣導</option>
                      <option value="4">經費報告</option>
                  </select>
              </div>
              <div>
                  <label for="selecte" class="f-label">發布日期</label>
                  <select name="" id="selecte" class="f-select">
                      <option value="1">-選擇-</option>
                      <option value="2">最新至最舊</option>
                      <option value="3">最舊至最新 </option>
                      <!-- <option value="4">審核通過 </option> -->
                  </select>
              </div>
          </div>
          <div class="displayflex margintop18">
              <button type="button" class="btn-10-s btn-color-green marginright20 ">   
                <a href=""></a><i class="bi bi-plus-lg"></i> 新增消息       
              </button>
              <!-- <button type="button" class="btn-10-s btn-color-green">
                <i class="bi bi-cloud-arrow-down-fill"></i>匯出資料
              </button> -->
          </div>

     </div>
    <div class="">
      
        <table class=" back-table-3">
          
          <tbody>
              <tr>
                  <td>類別</td>
                  <td>消息標題</td>
                  <td>發布日期</td>
                  <td>置頂</td>
                  <td>編輯</td>
                  <td>下架</td>
                  <!-- <td>編輯</td>
                  <td>刪除</td> -->
              </tr>
              <tr>
                  <td>宣導</td>
                  <td>大湖里反詐騙宣導</td>
                  <td>2022-01-01</td>
                  <td><label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-pencil-square btn-font-color-green"></i>
                  </button></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                  </button></td>
              </tr>
              <tr>
                  <td>宣導</td>
                  <td>大湖里反詐騙宣導</td>
                  <td>2022-01-01</td>
                  <td><label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-pencil-square btn-font-color-green"></i>
                  </button></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                  </button></td>
              </tr>
              <tr>
                  <td>宣導</td>
                  <td>大湖里反詐騙宣導</td>
                  <td>2022-01-01</td>
                  <td><label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-pencil-square btn-font-color-green"></i>
                  </button></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                  </button></td>
              </tr>
              <tr>
                <td>宣導</td>
                <td>大湖里反詐騙宣導</td>
                <td>2022-01-01</td>
                <td><label class="switch">
                  <input type="checkbox">
                  <span class="slider"></span>
              </label></td>
                <td> <button type="button" class="btn-icon">
                  <i class="bi bi-pencil-square btn-font-color-green"></i>
                </button></td>
                <td> <button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button></td>
            </tr>
              <tr>
                  <td>宣導</td>
                  <td>大湖里反詐騙宣導</td>
                  <td>2022-01-01</td>
                  <td><label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-pencil-square btn-font-color-green"></i>
                  </button></td>
                  <td> <button type="button" class="btn-icon">
                    <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                  </button></td>
              </tr>
           </tbody>
          
      </table> 
      
  </div>
  <ul class="btn-page-block">
    <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
    <li><button class="btn-page btn-color-white">1</button></li>
    <li><button class="btn-page btn-color-green">2</button></li>
    <li><button class="btn-page btn-color-white">3</button></li>
    <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
  </ul>

  <!-- 頁碼還沒寫完 -->

      </div>
   

    </div>

     <!-- 992以下顯示內容 -->
     <div class="main rest-inf">
        不支援手機喔 
     </div>
    </section>
  </main>
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
