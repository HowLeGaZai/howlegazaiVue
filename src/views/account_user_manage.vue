<template>
   

    <div class="backend">
        <navbar></navbar>
    <div class="background_image">
    <main>
        <section class="account-border">
            <div class="account">
                <Accountsidebar :PORTRAIT="PORTRAIT"></Accountsidebar>
                <section class="account-content">
                    <h1 class="marginbottom30">成員管理</h1>
                
                  <!-- <div class="row"></div> -->
                      <!-- <div class="col-md-6 col-12"></div> -->
                      <!-- <div class="col-12"></div> -->
                  
                      <!-- <div class="row account_row">
                        <div class="col-md-6 col-12">
                            <h4>出生 年/月/日</h4>
                            <input type="text" class="f-text nomargin" id="name" v-model="birthdate" placeholder="YYYY/MM/DD">
                        </div>
                      </div> -->
                  
                      <table class="account-table w90percentage marginbottom20">
                        <tr>
                            <th v-for="datasTr in datasTrs" >{{datasTr}}</th>
                        </tr>
                        <tr v-for="(data,index) in datas" :key="index">
                            <td data-label="No.">
                              {{index+1}}
                              <!-- <button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button>
                              <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button> -->
                            </td>
                            <td data-label="姓名">{{data[1]}}</td>
                            <td data-label="帳號">{{data[2]}}</td>
                            <td data-label="電子信箱">{{data[3]}}</td>
                            <!-- <td data-label="編輯">
                              <button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button>
                              <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button>
                            </td> -->
                            <td data-label="刪除">
                                <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button></td>
                        </tr>
                    
                      </table>  

                      <button class="btn-m btn-color-green marginbottom20"  @click="showChild = !showChild">新增</button>
                      
                      <add-member v-if="showChild" :show="booleenforShow"  @value-update="getValFromChild"></add-member>

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
import addMember from './addMember.vue';

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

                    showChild:false,
                    booleenforShow:true,

                    datasTrs:[
                        'No.', '姓名', '帳號', '電子信箱', '刪除'
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

                getValFromChild({data,toggleShow}) {
                this.inputValFromChild = JSON.parse(data);
                let dataNew = JSON.parse(data);
                
                // console.log({"0":'3',"1": data2.first_name+data2.last_name,"2":data2.Account,"3":data2.email});
                let dataAdd = {"0":'3',"1": dataNew.first_name+dataNew.last_name,"2":dataNew.Account,"3":dataNew.email};
                this.datas.push(dataAdd);


                console.log(toggleShow);

                this.showChild = toggleShow;
               
                },
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
               computed: {},
               components:{navbar,addMember,Accountsidebar}
              
}

    </script>