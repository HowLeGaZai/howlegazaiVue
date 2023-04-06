<template>
    <backendNavbar></backendNavbar>

    <div class="body-sec">
      <main>
        <!-- <main> -->
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
            <a class="be-nav btn-color-white be-menu" href="#/backend_index">
              <div class="width-3 text-left">後台管理首頁</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
            <div class="be-nav-on be-nav-off"></div>
          </li>
          <li>
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">網站管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off">
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_websiteinfo'">網站基本設定</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_officeinfo'">聯絡里辦資訊</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_faq'">常見問題設定</button>
            </div>
          </li>

          <li>
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">帳戶管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off">
              <button class="be-nav btn-font-color-gray " onclick="window.location.href='#/backend_websiteinfo'">帳戶總列表</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_new'">待審核清單</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_cancel'">已刪除帳戶</button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
              <div class="width-3 text-left">最新消息管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
            <div class="be-nav-on"></div>
          </li>
          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_chat_list">
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
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">活動管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off" id="beMenuOn">
              <button class="be-nav btn-font-color-gray "  onclick="window.location.href='#/backend_activity'">活動列表</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_activity_input'">新增活動</button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">空間管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>

            <div class="be-nav-on be-nav-off ">
              <button class="be-nav btn-font-color-gray"  onclick="window.location.href='''">空間列表</button>
              <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href=''">預約管理</button>
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
              <button class="be-nav btn-font-color-gray">守望隊管理</button>
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
      <section class="section_right">
        <!--近期活動總覽＆日曆 -->
        <div class="date-overview">
          <div class="bk-datepicker">
            <!--datepicker 日曆 -->
            <div id="datepicker"></div>
          </div>
          <div class="recent-activities">
            <p>近期活動</p>
            <table class="activity-list">
              <tr>
                <td class="activity-label">
                  <div class="tag tag-pink">藝文</div>
                </td>
                <td class="activity-name">
                  大湖里新春書法體驗
                </td>
                <td class="activity-num">
                  12人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>
              <tr>
                <td class="activity-label">
                  <div class="tag tag-blue">活動</div>
                </td>
                <td class="activity-name">
                  新春旅遊賞櫻趣
                </td>
                <td class="activity-num">
                  24人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>

              <tr>
                <td class="activity-label">
                  <div class="tag tag-green">健康</div>
                </td>
                <td class="activity-name">
                  銀髮健眠舒壓講座
                </td>
                <td class="activity-num">
                  84人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>

              <tr>
                <td class="activity-label">
                  <div class="tag tag-green">里民服務</div>
                    </td>
                <td class="activity-name">
                  銀髮運動拉筋趣
                </td>
                <td class="activity-num">
                  19人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>







            </table>
          </div>
        </div>

        <!------ 待辦事項 ------>
        <div class="admin-todolist">
          <p>待辦事項</p>
          <button type="button" class="btn-be-dash btn-color-green">
            <div class=" text-ali font-13">新申請<br>戶長帳號 (2)<i class="bi bi-arrow-right-circle-fill btn-i"></i></div>
          </button>
          <button type="button" class="btn-be-dash btn-color-green opacity-4">
            <div class=" text-ali font-13">待批准<br>空間預約 (0)</div>
          </button>
          <button type="button" class="btn-be-dash btn-color-green opacity-4">
            <div class=" text-ali font-13">待追蹤<br>維修通報 (0)</div>
          </button>

        </div>


        <!------大湖里成員 dashboard------>
        <div class="member-account">
          <p>
            大湖里成員統計
          </p>



          <div class="account-dashboard">
            <table>
              <tr>
                <td class="family">
                  <div class="family-num">
                    <h1>127</h1>
                    <h2>大湖里戶數</h2>
                  </div>
                  <p>↑12%</p>
                </td>
                <!-- <td>
                  <h1>2000</h1>
                </td> -->

                <td class="area-number">
                  <div class="family-num">
                    <h1>231</h1>
                    <h2>大湖里人口數</h2>
                  </div>
                  <p>↑2%</p>
                </td>

                <td class="area-number">
                  <div class="family-num">
                    <h1>147</h1>
                    <h2>網站註冊人數</h2>
                  </div>
                  <p>↑6%</p>
                </td>
              </tr>

              

            </table>

          </div>



        </div>


        <!--各頁資料放這裡 -->
      </section>
    </section>



    </main>
  </div>
  
  <Footer></Footer>
    
  <!-- </main> -->
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'
import Footer from './Footer.vue';

export default {
  components: {
      backendNavbar,Footer
    },
    mounted() {
    $('#resizable').resizable({});
    $('#datepicker').datepicker({
        monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],
          dayNamesMin: [ "週日", "週一", "週二", "週三", "週四", "週五", "週六" ], 
          dateFormat: "yy/mm/dd",
          
          onSelect: function(){
            var selected = $(this).val();
            $('.selectedD').html(`日期:&nbsp` + selected);
            // console.log(selected);

            // let dayNamesMin = $(this).datepicker( "option", "dayNamesMin" );
            // console.log(dayNamesMin);
        }
    });
   let beMenu = document.querySelectorAll(".be-menu");
   let beMenuOn = document.querySelectorAll(".be-nav-on");
  // let beMenu = document.querySelectorAll("be-nav");
  // console.log(beMenu);

  for(let i = 0; i < beMenu.length; i++){
    beMenu[i].addEventListener("click",function(){
      beMenuOn[i].classList.toggle('be-nav-off');
    //   console.log(beMenu[i]);
    })
  }
    
  },
 
  

  
}
</script>