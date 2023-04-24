<template>
<navbar></navbar>
    <main class="activity_info">
        <div class="info_topic">
            <h1>報名資訊填寫</h1>
            <h2>{{ activityData.TITLE }}</h2>
        </div>

        <div class="threesteps">
          <div class="steps">
              <div class="steps-circle">1</div>
              <h5>填寫資料</h5>
          </div>
          <div class="line notyet"></div>
          <div class="steps">
              <div class="steps-circle">2</div>
              <h5>確認資料</h5>
          </div>
          <div class="line notyet"></div>
          <div class="steps">
              <div class="steps-circle">3</div>
              <h5>報名完成</h5>
          </div>
      </div>

        <div class="info-article">
           
            <table class="green-table">
              <thead>
                  <tr>
                      <th colspan="4">活動資訊</th>
                  </tr>
              </thead>
              <tbody>
                  <tr class="row">
                      <td class="col-6">活動名稱</td>
                      <td class="col-2">單價</td>
                      <td class="col-2">數量</td>
                      <td class="col-2">總計</td>
                  </tr>
                  <tr class="row">
                      <td class="col-6">
                          <div class="image event_pic">
                              <img src="../assets/img/e1_calligraphy.png" alt="">
                          </div>
                          <span>{{ activityData.TITLE }}</span>
                      </td>
                      <td class="col-2">NT$ {{ activityData.PRICE }}</td>
                      <td class="col-2">
                          <input class="f-text" type="number" id="register_num2" v-model="inputValue" @input="multiplyInput">人
                          <!-- <button class="btnUp"><i class="bi bi-caret-up-fill"></i></button> -->
                          <!-- <button class="btnDown"><i class="bi bi-caret-down-fill"></i></button> -->
                      </td>
                      <td class="col-2">NT$ {{ result }}</td>
                  </tr>
              </tbody>
              <tfoot>
                  <tr>
                      <td colspan="4"></td>
                  </tr>
              </tfoot>
          </table>
          

          <form action="" class="">
            <table class="green-table">
                <thead>
                    <tr>
                        <th colspan="4">報名人資料 （報名人資料將作為聯繫代表人）</th>
                    </tr>
                </thead>
                <tbody>      
                    <tr class="row left">
                        <td>
                            <h4>參加人1</h4>
                        </td>
                    </tr>
                    <tr class="row left">
                        <td>
                            <label class="f-checkbox">同報名者
                                <input type="checkbox" name="multichoice">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-md-2">
                            <label for="name" class="f-label">姓名</label>
                            <input type="text" class="f-text" id="name" value="">
                        </td>
                        <td class="col-md-2">
                            <label for="inputState" class="f-label">稱謂</label>
                            <select id="inputState" class="f-select">
                                <option selected>先生</option>
                                <option>女士</option>
                            </select>
                        </td>
                        <td class="col-md-4">
                            <label for="phone" class="f-label">電話</label>
                            <input type="text" class="f-text" id="phone" value="">
                        </td>
                        <td class="col-md-4">
                            <label for="mail" class="f-label"> Email</label>
                            <input type="email" class="f-text" id="mail" value="">
                        </td>
                    </tr>    
                </tbody>
                <tbody>
                    <tr class="row left">
                        <td>
                            <button class="btn-10-m btn-color-greenborder"><i class="bi bi-plus"></i>新增參加人</button>
                        </td>
                    </tr>
                    <tr class="row right">
                        <td>報名單價:NT$ <span>{{ activityData.PRICE }}</span></td>
                    </tr>
                    <tr class="row right">
                        <td>報名人數: <span>{{ inputValue }}</span>人</td>
                    </tr>
                    <tr class="row right">
                        <td>費用共計:NT$<span>{{ result }}</span></td>
                    </tr>
    
                    <tr class="row right">
                        <td>
                            <p class="alert">注意：若經查證後參加者非本里住民，將取消參加資格。</p>
                        </td>
                    </tr>
                    <tr class="row right">
                        <td><button class="btn-m btn-color-white">取消</button></td> 
                        <td><router-link :to="{name:'activity_registStep3'}" ><button class="btn-m btn-color-green">確認付款</button></router-link></td>                  
                    </tr>       
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                </tfoot>
            </table>
        </form>


        <!-- img的容器設定為原大小的95% --> 
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
            activityJsonData:[],
            activityData:[],
            jsonData:[],
            inputValue: '',
            result: '',
            data:[],
        }
    },
    
    components: {
        navbar,
        Footer,

    },
    setup() {
        return {
            modules: [Navigation],
        };
    },
    // mounted() {

    //     this.getActivityData();
    // },
    mounted(){
        this.getActivityData();
    },  
    computed: {
        result() {
            if (this.inputValue !== null) {
                return this.inputValue * this.activityData.PRICE
            }
            return 0
        }
    },  
    methods:{
        async getActivityData() {
            await  axios
            //  htdocs的環境下測試
            .get(`${process.env.VUE_APP_AJAX_URL}activity.php`)
            .then(response => {
                this.activityJsonData = response.data;
                console.log('abc',this.activityJsonData);
            })
            .catch(error => {
                // console.log(error);
            });


            let activity = sessionStorage.getItem("activity");
                        

            for(let i = 0; i < this.activityJsonData.length; i++){
                // console.log(i,this.spaceJsonData[i]);
                if(activity == this.activityJsonData[i][1]){
                    // console.log('空間資料',this.spaceJsonData[i]);
                    this.activityData = this.activityJsonData[i];
                    console.log('活動資料',this.activityData);


                    // 從sessionStorage中取得inputValue和result的值
            const inputValue = sessionStorage.getItem('inputValue')
            console.log(inputValue);
            const sessionResult = sessionStorage.getItem('result')

            // 將取得的值設定到data中
            if (inputValue !== null) {
                this.inputValue = inputValue
            }
            if (sessionResult !== null) {
                this.sessionResult = sessionResult
            }

                }else{

                }
            }
        },

        getFromSessionStorage() {
            // 從sessionStorage中取得inputValue和result的值
            const inputValue = sessionStorage.getItem('inputValue')
            console.log(inputValue);
            const result = sessionStorage.getItem('result')

            // 將取得的值設定到data中
            if (inputValue !== null) {
            this.inputValue = inputValue
            }
            if (result !== null) {
            this.result = result
            }
        },


    },
}
</script>