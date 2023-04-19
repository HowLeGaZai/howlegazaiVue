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
                                <router-link :to="{name:'backend_space_reservation'}">
                                <button class="be-nav be-nav btn-font-color-green">待審核預約</button>
                                </router-link>
                                <router-link :to="{name:'backend_space_management'}">
                                <button class="be-nav be-nav btn-font-color-gray">預約列表</button>
                                </router-link>
                                <router-link :to="{name:'backend_space_list'}">
                                    <button class="be-nav btn-font-color-gray">空間總覽</button>
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
                    <!-- 待審核預約 -->
                    <div class="w90percentage accounttable bk-space-reservation">
                    <h1>待審核預約</h1>

                    <div class="">
                        <table class=" back-table-2 back-table-space-reservation">
                            <tbody>
                            <tr>
                                <td>待審核</td>
                                <td>訂單號碼</td>
                                <!-- <td>申請單位</td> -->
                                <td>預約人</td>
                                <td>預約空間</td>
                                <td>預約原因</td>
                            </tr>
                            <tr v-for="(order,index) in jsonData" :key="index">
                                <td><i class="bi bi-check" @click="confirm(index)"> </i><i class="bi bi-x" @click="cancel(index)"></i></td>
                                <!-- 按下 X <i class="bi bi-x"></i> 會跳出彈跳視窗強制填寫取消原因，這個頁面不知道在哪裡 -->
                                <td>{{order.ID}}</td>
                                <!-- <td>美安</td> -->
                                <td>{{order.APPLY_NAME}}</td>
                                <td>{{order.NAME}}</td>
                                <td>{{order.PURPOSE}}</td> 
                                <!-- <td>001</td>
                                <td>美安</td>
                                <td>張迪生</td>
                                <td>大湖里A102室</td>
                                <td>辦理直銷活動</td>-->
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
    data(){
        return{
            jsonData:[],
        };
    },
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

    axios
        .get('http://localhost/TGD104G1/public/API/backend_space_reservation.php')
            // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
            .then(response => {
                this.jsonData = response.data;
                console.log(response.data);

            })
            .catch(error => {
                // console.log(error);
            });

            
        
    },
    methods:{
        confirm(index){

            const formData = new FormData()
            formData.append('ID',this.jsonData[index].ID )

            axios
            .post('http://localhost/TGD104G1/public/API/backend_space_reservation_confirm.php', formData)
            // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
            .then(response => {
                // console.log(response.data);
            })
            .catch(error => {
                // console.log(error);
            });

            location.reload();

        },
        cancel(index){
            const formData = new FormData()
            formData.append('ID',this.jsonData[index].ID )

            axios
            .post('http://localhost/TGD104G1/public/API/backend_space_reservation_cancel.php', formData)
            // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
            .then(response => {
                // console.log(response.data);
            })
            .catch(error => {
                // console.log(error);
            });

            location.reload();
        },






    }
}
</script>