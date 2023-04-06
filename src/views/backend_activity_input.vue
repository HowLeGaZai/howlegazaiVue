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
              <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="backend_index">
                <div class="width-3 text-left">後台管理首頁</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
              </a>
              <div class="be-nav-on be-nav-off"></div>
            </li>
            <li>
              <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
                <div class="width-3 text-left">網站管理</div>
                <i class="bi bi-caret-down-fill i-s"></i>
              </a>
              <div class="be-nav-on be-nav-off">
                <button class="be-nav btn-font-color-gray"
                  onclick="window.location.href='./backend/backend_websiteinfo.html'">網站基本設定</button>
                <button class="be-nav be-nav btn-font-color-gray"
                  onclick="window.location.href='./backend/backend_officeinfo.html'">聯絡里辦資訊</button>
                <button class="be-nav btn-font-color-gray"
                  onclick="window.location.href='./backend/backend_faq.html'">常見問題設定</button>
              </div>
            </li>

            <li>
              <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
                <div class="width-3 text-left">帳戶管理</div>
                <i class="bi bi-caret-down-fill i-s"></i>
              </a>
              <div class="be-nav-on be-nav-off">
                <button class="be-nav btn-font-color-gray "
                  onclick="window.location.href='account_overview.html'">帳戶總列表</button>
                <button class="be-nav be-nav btn-font-color-gray">待審核清單</button>
                <button class="be-nav btn-font-color-gray">已刪除帳戶</button>
              </div>
            </li>

            <li>
              <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="news.html">
                <div class="width-3 text-left">最新消息管理</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
              </a>
              <div class="be-nav-on"></div>
            </li>
            <li>
              <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="chat_list.html">
                <div class="width-3 text-left">討論區列表</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
              </a>
              <div class="be-nav-on"></div>
            </li>
            <li>
              <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                <div class="width-3 text-left">團購網管理</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
              </a>
              <div class="be-nav-on"></div>
            </li>
            <li>
              <a class="be-nav   btn-color-white be-menu">
                <div class="width-3 text-left">活動管理</div>
                <i class="bi bi-caret-down-fill i-s"></i>
              </a>
              <div class="be-nav-on " id="beMenuOn">
                <button class="be-nav btn-font-color-gray " onclick="window.location.href='activity.html'">活動列表</button>
                <button class="be-nav be-nav btn-font-color-green"
                  onclick="window.location.href='activity_input.html'">新增活動</button>
              </div>
            </li>

            <li>
              <a class="be-nav opacity-6 btn-color-darkgray be-menu">
                <div class="width-3 text-left">空間管理</div>
                <i class="bi bi-caret-down-fill i-s"></i>
              </a>

              <div class="be-nav-on be-nav-off ">
                <button class="be-nav btn-font-color-green" onclick="window.location.href='space_list.html'">空間列表</button>
                <button class="be-nav be-nav btn-font-color-gray"
                  onclick="window.location.href='space_management.html'">預約管理</button>
              </div>
            </li>

            <li>
              <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                <div class="width-3 text-left">維修通報</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
              </a>
              <div class="be-nav-on"></div>
            </li>

            <li>
              <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                <div class="width-3 text-left">守望相助</div>
                <i class="bi bi-caret-down-fill i-s "></i>
              </a>
              <div class="be-nav-on be-nav-off be-menu">
                <button class="be-nav btn-font-color-green">守望隊管理</button>
                <button class="be-nav be-nav btn-font-color-gray">簽到列表</button>
              </div>
            </li>

            <li>
              <a class="be-nav opacity-6 btn-color-darkgray be-menu" href>
                <div class="width-3 text-left">瓦斯表數據</div>
                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
              </a>
              <div class="be-nav-on"></div>
            </li>

          </ul>




        </div>

        <section class="section_right ">
          <!-- 新增活動 -->
          <div class="bk-activity-add">
            <h1>新增活動</h1>
            <form action="" name="activity-add">
              <div class="activity-area1">
                <label for="activity-name" class="f-label">活動名稱</label>
                <input type="text" class="f-text" id="activity-name" placeholder="歡樂同樂摘櫻桃">
              </div>
              <!-- 分類下拉選單&活動banner-->
              <div class="activity-area2 input-grid-2">
                <!-- 分類下拉選單 -->
                <div class="f-input-2">
                  <label for="selecte" class="f-label">類別</label>
                  <select name="" id="selecte" class="f-select">
                    <option value="1">-選擇-</option>
                    <option value="2">藝文</option>
                    <option value="3">旅遊</option>
                    <option value="4">健康</option>
                    <option value="5">其他</option>
                  </select>
                </div>
                <!-- 活動banner -->
                <div class="activity-banner f-input-2">
                  <label for="activity-banner" class="f-label">活動首圖</label>
                  <input type="file" class="f-file" id="activity-banner" placeholder="櫻桃活動宣傳圖.jpg">
                </div>
              </div>

              <!-- 開放報名時間與活動舉辦時間-->
              <div class="activity-area3 input-grid-2">
                <div class="activity-reg f-input-2">
                  <label for="activity-reg" class="f-label">開放報名時間</label>
                  <input type="text" class="f-text" id="activity-reg" placeholder="開放報名時間">
                  <p>至</p>
                  <input type="text" class="f-text" id="activity-reg" placeholder="截止報名時間">
                </div>

                <div class="activity-start f-input-2">
                  <label for="activity-start" class="f-label">活動舉辦時間</label>
                  <input type="text" class="f-text" id="activity-start" placeholder="2022-05-12">
                </div>

              </div>

              <!-- 活動地點-->
              <div class="activity-area4">
                <div class="activity-located">
                  <label for="activity-located" class="f-label">活動地點</label>
                  <input type="text" class="f-text" id="activity-located" placeholder="花蓮市內湖鄉大湖里態勢路124號">
                </div>
              </div>


              <!-- 活動人數上限-->
              <div class="activity-membermax">
                <label for="activity-membermax" class="f-label">活動人數上限</label>
                <input type="number" class="f-text" id="activity-membermax" placeholder="100">
              </div>

              <!-- 活動費用-->
              <div class="activity-cost">
                <label for="activity-cost" class="f-label">活動費用</label>
                <div class="activity-cost-block">
                  <input type="number" class="f-text" id="activity-cost" placeholder="3,400">
                  <label class="f-checkbox free-cost">免收取費用
                    <input type="checkbox" name="multichoice">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>

              <!-- 活動說明內文-->
              <div class="activity-cost">
                <label for="activity-cost" class="f-label">活動詳細內容</label>
                <textarea name="" id="" cols="30" rows="10" class="f-text" placeholder="這裡之後要改成文字編輯器"></textarea>

              </div>

              <!-- 送出按鈕-->
              <button type="submit" class="btn-m btn-color-gray" onclick="location.href='./activity.html'">取消</button>
              <!-- 是否有預覽頁-->
              <button type="submit" class="btn-m btn-color-green" onclick="location.href='./activity.html'">送出</button>

            </form>


          </div>



        </section>
      </section>






    </main>
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

    var btnContainer = document.getElementById("selected");
    var btns = btnContainer.getElementsByClassName("timeslot");

    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");

        if (current.length > 0) {
          current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
      });
    }



  },




}
</script>