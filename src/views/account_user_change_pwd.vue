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
                    <h1 class="marginbottom30">變更密碼</h1>
                
                  <div class="changePwd_Content">
                    <div class="row account_row account_row2">
                      <div class="col-md-3 col-12">
                         
                      </div>
                      <div class="col-md-6 col-12">
                          <h4>目前的密碼* (英文+數字6-8字)</h4>
                          <input type="text" class="f-text nomargin" id="pwd" v-model="pwd" placeholder="請輸入目前的密碼" >
                      </div>
                      <div class="col-md-3 col-12">
                          
                      </div>
                    </div>
                    <div class="row account_row account_row2">
                      <div class="col-md-3 col-12">
                         
                      </div>
                      <div class="col-md-6 col-12">
                          <h4>新密碼* (英文+數字6-8字)</h4>
                          <input type="text" class="f-text nomargin" id="newpwd" v-model="newpwd" placeholder="請輸入密碼" >
                      </div>
                      <div class="col-md-3 col-12">
                          
                      </div>
                    </div>
                    <div class="row account_row account_row2">
                      <div class="col-md-3 col-12">
                         
                      </div>
                      <div class="col-md-6 col-12">
                          <h4>目前的密碼* (英文+數字6-8字)</h4>
                          <input type="text" class="f-text nomargin" id="newpwd2" v-model="newpwd2" placeholder="請再次輸入密碼" >
                      </div>
                      <div class="col-md-3 col-12">
                          
                      </div>
                    </div>

                    <button class="btn-m btn-color-green marginbottom20">送出修改</button>
                     
                  </div>  
                     
                      



                      

               

                

                      
              
                  





                </section>
            </div>
        </section>
    </main>
    </div>
    </div>
</template>

<script>

import navbar from './navbar.vue';
export default {
     data(){
                   return {
                    name:'',
                    nickname:'',   
                    gender:'',
                    IDnumber:'',
                    birthdate:'',
                    email:'',
                    phonenumber:'',

                    // isShow:false,

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
                        'No.', '姓名', '帳號', '電子信箱', '編輯',  '刪除'
                    ],

                    datas:[
                        {"0": 1, "1": "王一明", "2": "w1account123", "3": "q1w2e3r4@email.com"},
                        {"0": 2, "1": "王二明", "2": "leeaccount1231111", "3": "zxcvb1245@mailbox.com"},
                    ],

                    content:'',
                inputValFromChild: [{}],
               
                   }

                   

                   },
                    components:{navbar,} 
}
</script>