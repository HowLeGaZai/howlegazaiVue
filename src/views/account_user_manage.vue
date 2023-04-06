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
                        <li><a href="#">個人資訊</a></li>
                        <li><a href="#">成員管理</a></li>
                        <li><a href="#">貼文刊登紀錄</a></li>
                        
                        <li><a href="#">空間預約紀錄</a></li>
                        <li><a href="#">活動報名紀錄</a></li>
                        
                        <li><a href="#">變更密碼</a></li>
                        

                    </ul>
                </section>
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
                        <tr v-for="data in datas" >
                            <td data-label="No.">
                              {{data[0]}}
                              <!-- <button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button>
                              <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button> -->
                            </td>
                            <td data-label="姓名">{{data[1]}}</td>
                            <td data-label="帳號">{{data[2]}}</td>
                            <td data-label="電子信箱">{{data[3]}}</td>
                            <td data-label="編輯">
                              <button type="button" class="btn-icon"><i class="bi bi-pencil-square btn-font-color-green"></i></button>
                              <button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button>
                            </td>
                            <td data-label="刪除"><button type="button" class="btn-icon"><i class="bi bi-x-circle-fill btn-font-color-green"></i></button></td>
                        </tr>
                    
                      </table>  

                
                     
                      <!-- <button @click="content='add-member'" @is_show-update="isShow" >新增</button> -->
                      <button class="btn-m btn-color-green marginbottom20"  @click="content='add-member'">新增</button>
                      



                      <component :is="content" @value-update="getValFromChild"></component>
                      <!-- <p>{{inputValFromChild}}</p> -->
                      <!-- <add-member @value-update="getValFromChild"></add-member> -->

               

                

                      
              
                  





                </section>
            </div>
        </section>
    </main>
    </div>
    </div>
</template>

<script>
import navbar from './navbar.vue';
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
    
    
                      
                  
              mounted(){
                       
                   },
               methods: {
                    
                  


                   
                    getValFromChild(data,val) {
                this.inputValFromChild = JSON.parse(data);
                let data2 = JSON.parse(data);
                // this.datas.push(data);
                // console.log({"0":'3',"1": data2.first_name+data2.last_name,"2":data2.Account,"3":data2.email});
                let data3 = {"0":'3',"1": data2.first_name+data2.last_name,"2":data2.Account,"3":data2.email};
                this.datas.push(data3);
                // console.log(this.datas);
                console.log(this.datas);
                // alert(val)
                      // alert('傳上來的'+data)
                      /*
                      // alert(val);
                      if (val) {
                            // console.log('111');
                      // this.isShow = true;
                    } else {
                      // console.log("Test");
                      // this.isShow = true;
                    }
                    */



                    }
               },   
               computed: {},
               components:{navbar,addMember,}
              
}

    </script>