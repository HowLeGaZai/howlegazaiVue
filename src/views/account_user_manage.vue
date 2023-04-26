<template>
   

    <div class="backend">
        <navbar></navbar>
    <div class="background_image">
    <main>
        <section class="account-border">
            <div class="account">
                <Accountsidebar :localPORTRAIT="localPORTRAIT"></Accountsidebar>
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
                        <tr v-for="(member,index) in jsonData" :key="index">
                            <td data-label="No.">
                              {{index+1}}
                              <!-- <button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button>
                              <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button> -->
                            </td>
                            <td data-label="姓名">{{member.FULL_NAME}}</td>
                            <td data-label="帳號">{{member.ACCOUNT}}</td>
                            <td data-label="電子信箱">{{member.EMAIL}}</td>
                            <!-- <td data-label="編輯">
                              <button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button>
                              <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button>
                            </td> -->


                            <!-- 先把刪除隱藏 -->
                            <!-- <td data-label="刪除">
                                <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button></td> -->
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
import navbar from '../components/navbar.vue';
import Accountsidebar from '@/components/Accountsidebar.vue';
import addMember from './addMember.vue';

export default {
        data(){
            return {
                localPORTRAIT:"",
                jsonData:[],

                name:'',
                nickname:'',   
                gender:'',
                IDnumber:'',
                birthdate:'',
                email:'',
                phonenumber:'',

                USER_ID:'',

                showChild:false,
                booleenforShow:true,

                datasTrs:[
                    'No.', '姓名', '帳號', '電子信箱'
                    // , '刪除'
                    // 先把刪除隱藏
                ],

                // datas:[
                //     {"0": 1, "1": "王一明", "2": "w1account123", "3": "q1w2e3r4@email.com"},
                //     {"0": 2, "1": "王二明", "2": "leeaccount1231111", "3": "zxcvb1245@mailbox.com"},
                // ],

                content:'',
                inputValFromChild: [{}],
            
            }

        },
    
        methods: {

            getValFromChild({data,toggleShow}) {
                this.inputValFromChild = JSON.parse(data);
                let dataNew = JSON.parse(data);
                
                // console.log({"0":'3',"1": data2.first_name+data2.last_name,"2":data2.Account,"3":data2.email});
                // let dataAdd = {"FULL_NAME": dataNew.first_name+dataNew.last_name,"ACCOUNT":dataNew.Account,"EMAIL":dataNew.email};
                this.jsonData.push(dataNew);


                console.log(toggleShow);

                this.showChild = toggleShow;
            },
            getCookieValue(cookieName) {
                    // 讀取指定名稱的 Cookie 值
                    const cookieStr = decodeURIComponent(document.cookie);
                    const cookies = cookieStr.split('; ');
                    for (let i = 0; i < cookies.length; i++) {
                    const cookie = cookies[i].split('=');
                    if (cookie[0] === cookieName) {
                        return cookie[1] || null;
                    }
                    }
                    return null;
            },
        },   
        computed: {

        },
        mounted(){
            this.localPORTRAIT = localStorage.getItem("portrait");
            this.USER_ID = this.getCookieValue('id');
            // console.log(this.USER_ID);

            const formData = new FormData()
            formData.append('ID', this.USER_ID)
            axios
                .post('http://localhost/TGD104G1/public/API/account_user_family.php',formData)

                .then(response => {
                    this.jsonData = response.data;
                    console.log(response.data);
                    
                })
                .catch(error => {
                    // console.log(error);
                });
        },
        components:{
            navbar,addMember,Accountsidebar
        }           
}
</script>