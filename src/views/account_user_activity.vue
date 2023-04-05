<template>
 <div class="backend">
        <navbar></navbar>
    <div class="background_image">
         <main>
        <section class="account-border">
            <div class="account">
                <section class="account-menu-pc">
                    <h1 >帳戶管理</h1>
                    <div class="image user_pic"><img src="../assets/img/user_pic.png" alt=""></div>
                    <ul>

                        <li v-for="accountNav in accountNavs"><a :href="accountNav.con">{{accountNav.nav}}</a></li>
                        <!-- <li><a href="#">個人資訊</a></li>
                        <li><a href="#">成員管理</a></li>
                        <li><a href="#">貼文刊登紀錄</a></li>
                        
                        <li><a href="#">空間預約紀錄</a></li>
                        <li><a href="#">活動報名紀錄</a></li>
                        
                        <li><a href="#">變更密碼</a></li> -->
                        

                    </ul>
                </section>
                <section class="account-content">
                    <h1 class="marginbottom30">活動報名紀錄</h1>
                
                  <!-- <div class="row"></div> -->
                      <!-- <div class="col-md-6 col-12"></div> -->
                      <!-- <div class="col-12"></div> -->
                  
                      <!-- <div class="row account_row">
                        <div class="col-md-6 col-12">
                            <h4>出生 年/月/日</h4>
                            <input type="text" class="f-text nomargin" id="name" v-model="birthdate" placeholder="YYYY/MM/DD">
                        </div>
                      </div> -->
                  
                      <!-- <table class="account-table w90percentage marginbottom20 account-table_gas">
                        <tr>
                            <th v-for="datasTr in datasTrs" >{{datasTr}}</th>
                        </tr>
                        <tr v-for="data in datas" >
                            <td data-label="活動日期">{{data[0]}}</td>
                            <td data-label="報名項目">{{data[1]}}</td>
                            <td data-label=""><button type="button" class="btn-cir-s btn-color-white"><i class="bi bi-caret-down-fill i-s"></i></button></td>
                        </tr>
                    
                      </table>   -->

                      <div class="check_activity_content bgcolordarkgreen">
                        <div class="displayflex content_row1">
                          <h4 class="fontsize20"> 活動日期</h4>
                          <h4 class="fontsize20 forSecondColumn"> 報名項目</h4>
                        </div>
                        <div class="displayflex content_row borderBottomLightgray">
                          <h4 class="fontsize20"> 2023-03-04</h4>
                          <h4 class="fontsize20 forSecondColumn"> 新春書法體驗課</h4>
                          <button type="button" class="btn-cir-s btn-color-white"><i class="bi bi-caret-down-fill i-s"></i></button>
                        </div>
                        <div class=" content_row borderBottomLightgray">
                          <div class="displayflex">
                            <h4 class="fontsize20"> 2023-02-28</h4>
                            <h4 class="fontsize20 forSecondColumn"> 慶元宵發燈籠活動</h4>
                            <button type="button" class="btn-cir-s btn-color-white collapse"><i class="bi bi-caret-down-fill i-s"></i></button>
                          </div>
                          <div class="attendDetail displayNone">

                            <h4>報名序號 : QA149229195</h4>
                            <h4>已付金額 : 150元</h4>
                            <h4>活動時間 : 2023-03-04 (六) 15:00~18:00</h4>
                            <h4>活動地點 : 台北市大湖區大湖里大湖路大湖街66號 快樂公園教室B</h4>
                            <h4>參加人數 : 2人</h4>

                            <div class="attendDetail2">
                              <div class="attendMember">
                                <h4>參加人(1) : 李上巴</h4>
                                <h4>聯絡電話 : 0966166166</h4>
                                <h4>電子信箱 : zxc123zxc123@gmail.com</h4>
                              </div>
                              <div class="attendDetail2-row displayflex">

                                  <div class="attendMember">
                                    <h4>參加人(2) : 李中巴</h4>
                                    <h4>聯絡電話 : 0916166166</h4>
                                    <h4>電子信箱 : zxc456zxc456@gmail.com</h4>
                                  </div>
                                <button type="button" class="btn-m btn-color-green ">搜尋</button>

                              </div>
                            </div>
                             
                          </div>
                        </div>
                       
                        <div class=" content_row borderBottomLightgray">
                          <div class="displayflex">
                            <h4 class="fontsize20"> 2023-02-28</h4>
                            <h4 class="fontsize20 forSecondColumn"> 慶元宵發燈籠活動</h4>
                            <button type="button" class="btn-cir-s btn-color-white collapse"><i class="bi bi-caret-down-fill i-s"></i></button>
                          </div>
                          <div class="attendDetail displayNone">

                            <h4>報名序號 : QA149229195</h4>
                            <h4>已付金額 : 150元</h4>
                            <h4>活動時間 : 2023-03-04 (六) 15:00~18:00</h4>
                            <h4>活動地點 : 台北市大湖區大湖里大湖路大湖街66號 快樂公園教室B</h4>
                            <h4>參加人數 : 2人</h4>

                            <div class="attendDetail2">
                              <div class="attendMember">
                                <h4>參加人(1) : 李上巴</h4>
                                <h4>聯絡電話 : 0966166166</h4>
                                <h4>電子信箱 : zxc123zxc123@gmail.com</h4>
                              </div>
                              <div class="attendDetail2-row displayflex">

                                  <div class="attendMember">
                                    <h4>參加人(2) : 李中巴</h4>
                                    <h4>聯絡電話 : 0916166166</h4>
                                    <h4>電子信箱 : zxc456zxc456@gmail.com</h4>
                                  </div>
                                <button type="button" class="btn-m btn-color-green ">搜尋</button>

                              </div>
                            </div>
                             
                          </div>
                        </div>

                        <div class=" content_row borderBottomLightgray">
                          <div class="displayflex">
                            <h4 class="fontsize20"> 2023-02-28</h4>
                            <h4 class="fontsize20 forSecondColumn"> 慶元宵發燈籠活動</h4>
                            <button type="button" class="btn-cir-s btn-color-white collapse"><i class="bi bi-caret-down-fill i-s"></i></button>
                          </div>
                          <div class="attendDetail displayNone">

                            <h4>報名序號 : QA149229195</h4>
                            <h4>已付金額 : 150元</h4>
                            <h4>活動時間 : 2023-03-04 (六) 15:00~18:00</h4>
                            <h4>活動地點 : 台北市大湖區大湖里大湖路大湖街66號 快樂公園教室B</h4>
                            <h4>參加人數 : 2人</h4>

                            <div class="attendDetail2">
                              <div class="attendMember">
                                <h4>參加人(1) : 李上巴</h4>
                                <h4>聯絡電話 : 0966166166</h4>
                                <h4>電子信箱 : zxc123zxc123@gmail.com</h4>
                              </div>
                              <div class="attendDetail2-row displayflex">

                                  <div class="attendMember">
                                    <h4>參加人(2) : 李中巴</h4>
                                    <h4>聯絡電話 : 0916166166</h4>
                                    <h4>電子信箱 : zxc456zxc456@gmail.com</h4>
                                  </div>
                                <button type="button" class="btn-m btn-color-green ">搜尋</button>

                              </div>
                            </div>
                             
                          </div>
                        </div>

                        <div class=" content_row borderBottomLightgray">
                          <div class="displayflex">
                            <h4 class="fontsize20"> 2023-02-28</h4>
                            <h4 class="fontsize20 forSecondColumn"> 慶元宵發燈籠活動</h4>
                            <button type="button" class="btn-cir-s btn-color-white collapse"><i class="bi bi-caret-down-fill i-s"></i></button>
                          </div>
                          <div class="attendDetail displayNone">

                            <h4>報名序號 : QA149229195</h4>
                            <h4>已付金額 : 150元</h4>
                            <h4>活動時間 : 2023-03-04 (六) 15:00~18:00</h4>
                            <h4>活動地點 : 台北市大湖區大湖里大湖路大湖街66號 快樂公園教室B</h4>
                            <h4>參加人數 : 2人</h4>

                            <div class="attendDetail2">
                              <div class="attendMember">
                                <h4>參加人(1) : 李上巴</h4>
                                <h4>聯絡電話 : 0966166166</h4>
                                <h4>電子信箱 : zxc123zxc123@gmail.com</h4>
                              </div>
                              <div class="attendDetail2-row displayflex">

                                  <div class="attendMember">
                                    <h4>參加人(2) : 李中巴</h4>
                                    <h4>聯絡電話 : 0916166166</h4>
                                    <h4>電子信箱 : zxc456zxc456@gmail.com</h4>
                                  </div>
                                <button type="button" class="btn-m btn-color-green ">搜尋</button>

                              </div>
                            </div>
                             
                          </div>
                        </div>
                        
                      </div>

                
                     
                      

               

                

                      
              
                  





                </section>
            </div>
        </section>
    </main>
    </div>
    </div>
</template>

<script>

import $ from 'jquery'
import navbar from './navbar.vue';

export default {
    data(){
                   return {
                      

                    

                    accountNavs:[{nav:'個人資訊',con:'./account_user.html'},
                    {nav:'成員管理',con:'./account_user_manage_3.html'},
                    {nav:'貼文刊登紀錄',con:'./account_user_chat.html'},
                    {nav:'瓦斯錶回報紀錄',con:'./account_user_gas.html'},
                    {nav:'空間預約紀錄'},
                    {nav:'活動報名紀錄'},
                    {nav:'團購管理'},
                    {nav:'變更密碼'}],


                    mainMenus:[{nav:'聯絡里辦',con:'./contact.html'},
                    {nav:'最新消息',con:'./news.html'},
                    {nav:'討論區',con:'./chat.html'},
                    // {nav:'智慧里民',con:'#'},
                    ],

                    datasTrs:[
                        '活動日期', '報名項目', ''
                    ],

                    datas:[
                        {"0": '2023-03-04', "1": "新春書法體驗課"},
                        {"0": '2023-02-28', "1": "慶元宵發燈籠活動"},
                        {"0": '2023-02-04', "1": "112年第一次工作會報"},
                        {"0": '2023-01-11', "1": "打擊詐騙訊息，從你我開始"},
                        {"0": '2022-12-14', "1": "電影旅遊講座"},
                        
                    ],

                    
               
                   }
                   },
 
              mounted(){
                        $(function(){
          $(".collapse").click(function(){
          $(this).parents('.content_row').find('.attendDetail').slideToggle("slow");
          $(this).toggleClass('changeButton');

      });});
                   },
               methods: {

               }, 
               components:{navbar,}  
}
</script>