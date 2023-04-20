<template>
    <div class="backend">
        <navbar></navbar>
    <div class="background_image">
        <main>
        <section class="account-border">
            <div class="account">
                <Accountsidebar :PORTRAIT="PORTRAIT"></Accountsidebar>
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
import Accountsidebar from '@/components/Accountsidebar.vue';
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
                    components:{navbar,Accountsidebar} 
}
</script>