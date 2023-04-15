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

                        <!-- <li v-for="accountNav in accountNavs"><a :href="accountNav.con">{{accountNav.nav}}</a></li> -->
                        <li><router-link :to="{name:'account_user'}" class="">個人資訊</router-link></li>
                        <!-- <li><a href="#" class="a-select">個人資訊</a></li> -->
                        <li><router-link :to="{name:'account_user_manage'}" class="">成員管理</router-link></li>
                        
                        <!-- <li><a href="#">成員管理</a></li> -->
                        <!-- <li><a href="#">貼文刊登紀錄</a></li> -->
                        <li><router-link :to="{name:'account_user_chat'}" class="a-select">貼文刊登紀錄</router-link></li>
                        
                        <!-- <li><a href="#">空間預約紀錄</a></li> -->
                        <li><router-link :to="{name:'account_user_space'}" class="">空間預約紀錄</router-link></li>

                        <!-- <li><a href="#">活動報名紀錄</a></li> -->
                        <li><router-link :to="{name:'account_user_activity'}" class="">活動報名紀錄</router-link></li>
                        
                        <!-- <li><a href="#">變更密碼</a></li> -->
                        <li><router-link :to="{name:'account_user_change_pwd'}" class="">變更密碼</router-link></li>

                        <li><router-link :to="{name:'home'}" class="" @click="clearCookies">登出</router-link></li>

                        

                    </ul>
                </section>
                <section class="account-content">
                    <h1 class="marginbottom30">貼文刊登紀錄</h1>
                
                  <!-- <div class="row"></div> -->
                      <!-- <div class="col-md-6 col-12"></div> -->
                      <!-- <div class="col-12"></div> -->
                  
                      <!-- <div class="row account_row">
                        <div class="col-md-6 col-12">
                            <h4>出生 年/月/日</h4>
                            <input type="text" class="f-text nomargin" id="name" v-model="birthdate" placeholder="YYYY/MM/DD">
                        </div>
                      </div> -->
                  
                      <table class="account-table w90percentage marginbottom20 account-table_chat">
                        <tr>
                            <th v-for="datasTr in datasTrs" >{{datasTr}}</th>
                        </tr>
                        <tr v-for="data in datas" >
                            <td data-label="發布日期">{{data[0]}}</td>
                            <td data-label="貼文標題 :">{{data[1]}}</td>
                            <td data-label="編輯"><button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button></td>
                            
                        </tr>
                    
                      </table>  

                
                     
                      

               

                

                      
              
                  





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
                        '發布日期', '貼文標題', '編輯'
                    ],

                    datas:[
                        {"0": '2023-03-03', "1": "最近吃到7-11超好吃飯糰"},
                        {"0": '2023-02-01', "1": "在我們社區中經營一家小生意，是怎樣的體驗？"},
                        {"0": '2023-01-13', "1": "我們社區的公共設施，有哪些需要改進？"},
                        {"0": '2022-12-30', "1": "這些問題影響著我們社區的生活品質，你有甚麼想法？"},
                        {"0": '2022-11-15', "1": "探索我們社區的公共藝術，感受藝術之美"},
                    ],

                    
               
                   }
                   },
                     methods: {
                        clearCookies() {
                        // 取得目前的 cookie 字串
                        let cookies = document.cookie;
                        // 將 cookie 字串分割成每個 cookie
                        let cookieArr = cookies.split("; ");
                        // 迭代 cookieArr，將每個 cookie 都設置過期時間為過去的日期，使其被刪除
                        for (let i = 0; i < cookieArr.length; i++) {
                        let cookie = cookieArr[i];
                        let eqPos = cookie.indexOf("=");
                        let name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                        document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/`;
                        }
                    },
                    },
                components:{navbar,}
}
</script>