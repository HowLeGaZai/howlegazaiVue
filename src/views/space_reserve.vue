<template>

<navbar></navbar>

    <main class="front-space">
       <section>
        <h1 class="title_space">預約空間</h1>
        <div class="reserve-time">
          <h4>預約時間/場地:</h4>
          <h5>{{date}} {{time}}</h5>
          <!-- <button type="button" class="btn-m btn-color-gray">修改</button> -->
        </div>
        
        <div class="space nobtn">
          <div class="image space-pic">
              <!-- <img src="../assets/img/s_1.png" alt=""> -->
              <img :src="spaceData.SPACE_PIC" alt="">
          </div>
          <div class="space-info">
              <h3 class="space-title">{{spaceData.NAME}}</h3>
              <h5 class="space-type">{{spaceData.CATEGORY}}</h5>
              <h5 class="space-size">空間大小：<span>{{spaceData.SPACE_SIZE}}</span>坪</h5>
              <h5 class="space-add">地址：{{spaceData.ADDRESS}}</h5>
          </div>
        </div>
      </section>
            <table class="green-table">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row left">
                        <td>
                            <h4>申請資料</h4>
                        </td>
                    </tr>
                    <tr class="row left">
                        <td>
                            <label class="f-checkbox">同申請者
                                <input type="checkbox" name="multichoice" v-model="isChecked" @change="handleChange">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-12">
                            <label for="name" class="f-label">姓名</label>
                            <input type="text" class="f-text" id="name" v-model="name">
                        </td>
                        <td class="col-12">
                            <label for="inputState" class="f-label">稱謂</label>
                            <select id="inputState" class="f-select" v-model="inputState">
                            <option selected value="male">先生</option>
                            <option value="female">女士</option>
                            </select>
                        </td>
                        <td class="col-12">
                            <label for="phone" class="f-label">電話</label>
                            <input type="text" class="f-text" id="phone" v-model="phone">
                        </td>
                        <td class="col-12">
                            <label for="mail" class="f-label"> Email</label>
                            <input type="email" class="f-text" id="mail" v-model="mail">
                        </td>
                        <td class="col-12">
                            <label for="mail" class="f-label"> 申請用途</label>
                            <textarea v-model="apply" name="" id="tarea" cols="30" rows="10" class="f-text" placeholder="請填寫申請用途" ></textarea>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                </tfoot>
        </table>
      <div class="confirm-btn">
          <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-gray" @click="navigate" role="link">返回上一步</button>
            </router-link>
             <!-- <router-link to="/space_reserve_check" custom v-slot="{ navigate }"> -->
            <button class="btn-m btn-color-green" @click="navigate2" >填寫完成，下一步</button>
            <!-- </router-link> -->
        <!-- <button type="button" class="btn-m btn-color-gray" onclick="location.href='/space_info'">返回上一步</button>
        <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_reserve_check'">填寫完成，下一步</button> -->
      </div>
    </main>
    <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';
import axios from 'axios';

export default {
  data () {
    return {
        spaceData:[],

        date:'',
        time:'',
        onlydate:'',
        start:'',
        end:'',

        // 申請資料
        name:'',
        inputState:'', //稱謂
        phone:'',
        mail:'',
        apply:'',
        
        isChecked:false,
        jsonData:[],
        
    }
  },  
  components: {
      navbar,Footer,
    },
    mounted(){

        //  sessionStorage.setItem("USER_ID", id);

         this.date = sessionStorage.getItem('date');
         this.time = sessionStorage.getItem('time');
         this.start = sessionStorage.getItem('start');
         this.end = sessionStorage.getItem('end');
         this.onlydate = sessionStorage.getItem('onlydate');

         this.getSpaceData();

         

        
         
    },
    methods:{
        async getSpaceData() {
              await  axios
                    .get('http://localhost/TGD104G1/public/API/space.php')

                    .then(response => {
                        this.spaceJsonData = response.data;
                        console.log('abc',this.spaceJsonData);
                    })
                    .catch(error => {
                        // console.log(error);
                    });

                    let space = sessionStorage.getItem("space");
                    
                    for(let i=0;i<this.spaceJsonData.length;i++){

                      if(space == this.spaceJsonData[i][1]){

                        this.spaceData = this.spaceJsonData[i];
                        console.log('空間資料',this.spaceData);
                      }else{

                      }
                    }

                    

    },


        navigate2(){
            sessionStorage.setItem("APPLY_NAME", this.name);
            sessionStorage.setItem("APPLY_TITLE", this.inputState);
            sessionStorage.setItem("APPLY_PHONE", this.phone);
            sessionStorage.setItem("APPLY_MAIL", this.mail);
            sessionStorage.setItem("PURPOSE", this.apply);

            this.$router.push({ name: 'space_reserve_check', params: { Id: this.$route.params.Id } })
        },

        handleChange(){

            if(this.isChecked){

                const formData = new FormData()
                formData.append('user_id',this.getCookieValue('id') )
                axios
                    .post('http://localhost/TGD104G1/public/API/account_user.php', formData)
                    .then(response => {
                    this.jsonData = response.data;
                    // console.log(this.jsonData[0]);
                    this.name = this.jsonData[0].FULL_NAME;
                    this.phone = this.jsonData[0].PHONE;
                    this.mail = this.jsonData[0].EMAIL;
                    this.inputState = this.jsonData[0].GENDER;

                    })
                    .catch(error => {
                    console.log(error);
                    });
            }else{
                
            }
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
        
    }
}
</script>