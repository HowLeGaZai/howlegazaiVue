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
                        <!-- 後台管理首頁 -->
                        <li>
                            <router-link :to="{name:'backend_index'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
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
                        <!-- 帳戶管理 -->
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
                        <!-- 最新消息管理 -->
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
                        <!-- 討論區列表 -->
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
                        <!-- 活動管理 -->
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
                        <!-- 空間管理 -->
                        <li>
                            <a class="be-nav btn-color-white be-menu">
                            <div class="width-3 text-left">空間管理</div>
                            <i class="bi bi-caret-down-fill i-s"></i>
                            </a>
                            <div class="be-nav-on">
                            <router-link :to="{name:'backend_space_list'}">
                                <button class="be-nav btn-font-color-gray">空間列表</button>
                            </router-link>
                            <router-link :to="{name:'backend_space_management'}">
                            <button class="be-nav be-nav btn-font-color-green">預約管理</button>
                            </router-link>
                            <!-- <button class="be-nav btn-font-color-gray"  onclick="window.location.href='''">空間列表</button>
                            <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href=''">預約管理</button> -->
                            </div>
                        </li>
                        <!-- 團購網管理 -->
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
                        <!-- 維修通報 -->
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
                        <!-- 守望相助 -->
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
                        <!-- 瓦斯表數據 -->
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
                    <!-- 空間總覽 -->
                    <div class="w90percentage accounttable bk-space-management">
                    <h1>預約管理</h1>
                    <div class="displayflex justifycontent">

                        <div class="displayflex textalignleft">
                        <!-- <div class="marginright20">
                            <label for="selecte" class="f-label">分類</label>
                            <select name="" id="selecte" class="f-select">
                            <option value="1">全部</option>
                            <option value="2">旅遊</option>
                            <option value="3">健康</option>
                            <option value="4">藝文</option>
                            <option value="5">其他</option>
                            </select>
                        </div> -->
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

                        <table class=" back-table-2 bk-space-management-table">

                        <tbody>
                            <tr>
                            <td>單號</td>
                            <td>預約人</td>
                            <td>預約空間</td>
                            <td>狀態</td>
                            <td>查看</td>
                            <td>刪除</td>
                            
                            </tr>
                            <tr>
                            <td>001</td>
                            <td>張迪生</td>
                            <td>大湖里A102室</td>
                            <td>等待審核</td>
                            <td><button type="button" class="btn-icon">
                                <i class="bi bi-eye btn-font-color-green"></i>
                            </button>
                            </td>

                            <td><button type="button" class="btn-icon">
                                <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                                </button>
                            </td>
                            
                            </tr>
                            
                        </tbody>

                        </table>

                    </div>

                    <!-- 頁碼還沒寫完 -->

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