<template>
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
            <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="index.html">
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
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='backend_websiteinfo.html'">網站基本設定</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='backend_officeinfo.html'">聯絡里辦資訊</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='backend_faq.html'">常見問題設定</button>
            </div>
          </li>

          <li>
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">帳戶管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off">
              <button class="be-nav btn-font-color-gray " onclick="window.location.href='account_overview.html'">帳戶總列表</button>
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
            <a class="be-nav btn-color-white be-menu">
              <div class="width-3 text-left">活動管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on " id="beMenuOn">
              <button class="be-nav btn-font-color-green "  onclick="window.location.href='activity.html'">活動列表</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='activity_input.html'">新增活動</button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">空間管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>

            <div class="be-nav-on be-nav-off ">
              <button class="be-nav btn-font-color-green"  onclick="window.location.href='space_list.html'">空間列表</button>
              <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href='space_management.html'">預約管理</button>
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
      <section class="section_right">
        <!-- 活動總覽 -->
        <div class="w90percentage accounttable bk-activity-member">
          <button class="btn-prepage font-green">
            <i class=" bi bi-caret-left-fill font-green"></i>返回【活動總覽】</button>
          <h1>樂採櫻桃 參加名單</h1>

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
                <button type="button" class="btn-10-s btn-color-green">
                  <i class="bi bi-cloud-arrow-down-fill"></i> 匯出資料
                </button>
  
              </div>
  
            </div>

        </div>
        <div class="bk-activity-member-list">

          <table class=" back-table-2">

            <tbody>
              <tr>
                
                <td>報名序號</td>
                <td>報名日期</td>
                <td>身份</td>
                <td>聯絡電話</td>
                <td>電子信箱</td>
                <td>刪除</td>

              </tr>
              <tr>
                
                <td>QA149229195</td>
                <td>2022-03-12</td>
                <td>報名人：李戶長 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>

              <tr>
                
                <td>QA149229195</td>
                <td>2022-03-12</td>
                <td>參加人：李中巴 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>

              <tr>
                
                <td>QA149229195</td>
                <td>2022-03-12</td>
                <td>參加人：李上巴 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>

              <tr>
                
                <td>QA149229195</td>
                <td>2022-03-12</td>
                <td>參加人：李下巴 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>

              <tr>
                
                <td>QA149229194</td>
                <td>2022-03-12</td>
                <td>報名人：李維 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>

              <tr>
                
                <td>QA149229194</td>
                <td>2022-03-12</td>
                <td>參加人：李維 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>
              <tr>
                
                <td>QA149229193</td>
                <td>2022-03-12</td>
                <td>報名人：陳妙麗 小姐</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>
              <tr>
                
                <td>QA149229193</td>
                <td>2022-03-12</td>
                <td>參加人：陳哈利 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>

              <tr>
                
                <td>QA149229193</td>
                <td>2022-03-12</td>
                <td>參加人：李榮恩 先生</td>
                <td>0919440299</td>

                <td>zxc140zxc140@gmail.com</td>

                <td><button type="button" class="btn-icon">
                  <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                </button>
                </td>

              </tr>





            </tbody>

          </table>

        </div>

        

       



      </section>
    </section>






    
  </main>
</template>

<script>

import backendNavbar from './backendNavbar.vue';


export default {
  components: {
      backendNavbar,
    },
    mounted() {
    // ======nav的收合======
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