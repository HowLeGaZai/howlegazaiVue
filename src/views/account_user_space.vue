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
                        <li><router-link :to="{name:'account_user_chat'}" class="">貼文刊登紀錄</router-link></li>
                        
                        <!-- <li><a href="#">空間預約紀錄</a></li> -->
                        <li><router-link :to="{name:'account_user_space'}" class="a-select">空間預約紀錄</router-link></li>

                        <!-- <li><a href="#">活動報名紀錄</a></li> -->
                        <li><router-link :to="{name:'account_user_activity'}" class="">活動報名紀錄</router-link></li>
                        
                        <!-- <li><a href="#">變更密碼</a></li> -->
                        <li><router-link :to="{name:'account_user_change_pwd'}" class="">變更密碼</router-link></li>

                        <li><router-link :to="{name:'home'}" class="" @click="clearCookies">登出</router-link></li>

                        

                    </ul>
                </section>
                <section class="account-content">
                    <h1 class="marginbottom30">空間預約紀錄</h1>
                
                  <!-- <div class="row"></div> -->
                      <!-- <div class="col-md-6 col-12"></div> -->
                      <!-- <div class="col-12"></div> -->
                  
                      <!-- <div class="row account_row">
                        <div class="col-md-6 col-12">
                            <h4>出生 年/月/日</h4>
                            <input type="text" class="f-text nomargin" id="name" v-model="birthdate" placeholder="YYYY/MM/DD">
                        </div>
                      </div> -->
                  
                      <table class="account-table w90percentage marginbottom20 account-table_space">
                        <tr>
                            <th v-for="datasTr in datasTrs" >{{datasTr}}</th>
                        </tr>
                        <tr v-for="data in datas" >
                            <td data-label="預約日期">{{data[0]}}</td>
                            <td data-label="預約空間">{{data[1]}}</td>
                            <td data-label="預約時間">{{data[2]}}</td>
                            <td data-label="狀態">{{data[3]}}</td>
                            <td data-label="取消"><button type="button" class="btn-m btn-color-green btn_cancel" >取消</button></td>
                        </tr>
                    
                      </table>  

                
                     <!-- popup -->
    <div id="lightbox" class="none">
      <article>
    <div class="popup_content">
      <button type="button" class="btn-cir-m  btn-color-white btn_modal_close changeposition"><i class="bi bi-caret-left-fill"></i></button>


      
      
      <h3>申請取消</h3>
      
      <div class="apply_cancel">
            <div class="cancelreason">
                <h5>取消原因:</h5>
                
                <select name="" id="" class="f-select col1 width70percentage">
                <option value="1">-選擇-</option>
                <option value="2">其他</option>
                <option value="3">交通</option>
                <option value="3">設施</option>
                </select>
            </div>

            
            <div class="remark">
            <h5>備註:</h5>
            
            <textarea name="" id="" cols="30" rows="10" style="resize:none" class="f-text width70percentage" placeholder="回覆討論" ></textarea>
            </div>
      </div>

    <h6>空間預約取消須知：請於預約日三日前取消，若超過日期需取消，請聯繫里辦取消預約</h6>
      <button type="button" class="btn-m btn-color-green">同意取消</button>
     
      
    </div>
  </article>
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
                        '預約日期', '預約空間', '預約時間', '狀態', '取消'
                    ],

                    datas:[
                        {"0": '2023-03-17 (五)', "1": "A101空間", "2": "13:00 - 13:59","3": "審核中"},
                        {"0": '2023-03-24 (二)', "1": "B101空間", "2": "13:00 - 13:59","3": "未通過"},
                        {"0": '2023-02-04 (二)', "1": "A101空間", "2": "13:00 - 13:59","3": "審核通過"},
                        {"0": '2023-01-16 (二)', "1": "B102空間", "2": "13:00 - 13:59","3": "審核中"},
                        {"0": '2023-01-02 (二)', "1": "A103空間", "2": "13:00 - 13:59","3": "審核中"},
                        {"0": '2022-12-27 (二)', "1": "A104空間", "2": "13:00 - 13:59","3": "審核中"},
                        
                    ],

                    
               
                   }
                   },
 
              mounted(){
                        let lightbox_el = document.getElementById("lightbox");
                        let btnCancel = document.querySelectorAll(".btn_cancel") ;
                        let btn_modal_close = document.getElementsByClassName("btn_modal_close")[0];
                        //    console.log(btnCancel);
                        for(let i = 0; i < btnCancel.length; i++){
                            btnCancel[i].addEventListener("click",function(e){
                            // console.log(e.target);
                            lightbox_el.classList.remove("none");
                        });

                        btn_modal_close.addEventListener("click", function(){
                        lightbox_el.classList.add("none");
                        });
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
            components:{navbar,},
               
}
</script>