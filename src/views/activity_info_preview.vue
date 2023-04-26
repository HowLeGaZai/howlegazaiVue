<template>
    <div class="preview_toolbar">
    <p>
      **** 此為預覽頁面，請記得點擊<a
        @click="publish"
        class="a-select"
        >發布討論區文章</a
      >完成刊登，或<a @click="goback">返回上一頁</a> ****
    </p>
  </div>
    <navbar></navbar>
    <main class="activity_info">
        <div class="info_topic">
            <!-- <h1>活動資訊</h1>
             -->
            <div class="activity_typeAndTime">
                <div class="tag tag-round tag-pink tag-btn tag-btn-selected">{{ category }}</div>
                <!-- <h4>發布日期：5小時前</h4> -->
            </div>
        </div>

        <div class="info-article">
            <h2>{{ activity_name}}</h2>

            <div class="userTag-2" id="">
                <img src="../assets/img/user_pic2.png" alt="" class="userPic" />
                <h6>里長伯</h6>
            </div>
            
            <!-- img的容器設定為原大小的95% -->
            <table class="activityContent-2">
                <tr class="actInfo-2">
                    <td>活動時間：</td>
                    <td>{{ activity_open }}  {{ activity_opentime }}</td>
                </tr>
                <tr class="actInfo-2">
                    <td>地點：</td>
                    <td>{{ activity_address }}</td>
                </tr>
                <tr class="actInfo-2">
                    <td>報名人數限制：</td>
                    <td>{{ max_ppl }}</td>
                </tr>
                <tr class="actInfo-2">
                    <td>報名截止時間：</td>
                    <td>{{ regist_close }}</td>
                </tr>
                <tr rowspan="2" class="actPrice-2">
                    <td>{{ fee }} 元/人</td>
                    <!-- <td>元/人</td> -->
                </tr>
            </table>

            <div class="regist">
                <!-- <div class="peopleCount">
                    <label for="name" class="f-label">人數</label>
                    <input type="text" class="f-text" id="name" placeholder="">
                </div> -->
                <div class="confirm-btn"> 
                    <button type="button" class="btn-m btn-color-green btn_regist">點我報名</button>
                </div>
            </div>
        </div>

        <div class="info_discript">
            <h1>活動介紹</h1>
            
            <div class="image act-img">
                <!-- <img src="../assets/img/e1_calligraphy.png" alt=""> -->
                <img :src="pic" alt="">
            </div>
            <div class="infoText">

                <!-- <p class="infoText-p">{{ activityData.CONTENT }}</p> -->
                <p class="infoText-p">{{ content }}</p>

            </div>
        </div>
    </main>
    <lightBox>

        <div id="lightbox" class="none">
            <article>
                <div class="popup_content">
                    <button type="button" class="btn-cir-m  btn-color-white btn_modal_close"><i class="bi bi-caret-left-fill"></i></button>
                <br><br><br>
                <div class="g1234">
                    <h2>確認參加人數</h2>
                </div>
                <br><br>

                <h3>{{ activityData.TITLE }}</h3>
                <br>
                <hr size="5" color="#27B096">
                <br>
                <br>
                <div class="activity_pop">
                    <h4>參加人數</h4>
                    <input type="number" max="20" min="1" oninput="if(value.length>2)value=value.slice(1,2)" v-model="inputValue" @input="multiplyInput">
                    <h3>人</h3>
                </div>
                <br><br>
                <hr size="5" color="#27B096">

                <br><br>
                <div class="activity_pop2">
                    <h6>活動單價 NT$ {{ fee }} ，費用共計 NT$ {{ result }}</h6>
                    <br><br>
                    <h6 style="color: red;">注意：若經查證後參加者非本里住民，將取消參加資格。</h6>
                    <br><br>
                </div>
                <button type="button" class="btn-m btn-color-green" @click="activityRegistInfo(index)">填寫報名資料</button>
                <h6>活動取消須知：於活動開始前四日（含）取消，免費取消，
                    若於活動前二日，將退返報名費用之50%
                    若於活動前一日取消，將不予退費。</h6>
                <br>

                </div>
        </article>
        </div>

    </lightBox>

    <Footer></Footer>
</template>


<script>

import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';
import axios from 'axios';
//import lightBox from '../components/lightBox_activity.vue';

export default {

    data () {
        return {
        activityJsonData:[],
        activityData:[],
        jsonData:[],

        data:[],

        inputValue: null,

        activity_name:'',
        category:'',
        regist_open:'',
        regist_close:'',
        activity_open:'',
        activity_close:'',
        activity_address:'',
        max_ppl:'',
        fee:'',
        content:'',
        pic:'',
        activity_opentime:'',
        activity_closetime:'',

        routerid:'',
        }
    },
    computed: {
        result() {
            if (this.inputValue !== null) {
                return this.inputValue * this.fee
            }
            return 0
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

        //lightBox_activity的JS
        let lightbox_el = document.getElementById("lightbox");
        let btnRegist = document.querySelectorAll(".btn_regist")[0];
        let btn_modal_close = document.getElementsByClassName("btn_modal_close")[0];
        
        btnRegist.addEventListener("click",function(e){
            lightbox_el.classList.remove("none");
        });

        btn_modal_close.addEventListener("click", function(){
            lightbox_el.classList.add("none");
        });

        this.routerid = this.$route.params.Id;

        this.activity_name = sessionStorage.getItem('activity_name');
        this.category = sessionStorage.getItem('category');
        this.regist_open = sessionStorage.getItem('regist_open');
        this.regist_close = sessionStorage.getItem('regist_close');
        this.activity_open = sessionStorage.getItem('activity_open');
        this.activity_close = sessionStorage.getItem('activity_close');
        this.activity_opentime = sessionStorage.getItem('activity_opentime');
        this.activity_closetime = sessionStorage.getItem('activity_closetime');
        this.activity_address = sessionStorage.getItem('activity_address');
        this.max_ppl = sessionStorage.getItem('max_ppl');
        if(sessionStorage.getItem('nofee') == 'true'){
            this.fee= 0;
        }else{
            this.fee = sessionStorage.getItem('fee');
        }
        this.content = sessionStorage.getItem('content');
        this.pic = sessionStorage.getItem('pic');
        
    },    
    methods:{
        async getActivityData() {
            await  axios
            //  htdocs的環境下測試
            .get('http://localhost/TGD104G1/public/API/activity.php')
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
                }else{

                }
            }
        },

        activityRegistInfo(index){
            this.$router.push('/activity_registStep1')
            // alert(index);
            sessionStorage.setItem('inputValue', this.inputValue)
            sessionStorage.setItem('result', this.result)
        },

        publish(){

         if(sessionStorage.getItem('edit') == this.$route.params.Id){

            const formData = new FormData()
            formData.append('routerid', this.routerid)
            formData.append('TITLE', this.activity_name)
            formData.append('BANNER', this.pic)
            formData.append('START_DATE', this.activity_open)
            formData.append('START_TIME', this.activity_opentime)
            formData.append('END_DATE', this.activity_close)
            formData.append('END_TIME', this.activity_closetime)
            formData.append('CATEGORY', this.category)
            formData.append('LOCATION', this.activity_address)
            formData.append('MAX_PPL', this.max_ppl)
            formData.append('PRICE', this.fee)
            formData.append('CONTENT', this.content)
            formData.append('REG_START', this.regist_open )
            formData.append('REG_END', this.regist_close )

            axios
            //  htdocs的環境下測試
            .post('http://localhost/TGD104G1/public/API/republishactivity.php',formData)
            .then(response => {
                
            })
            .catch(error => {
                // console.log(error);
            });

            this.$router.push('/backend_activity')

         }else{
            const formData = new FormData()
            formData.append('routerid', this.routerid)
            formData.append('TITLE', this.activity_name)
            formData.append('BANNER', this.pic)
            formData.append('START_DATE', this.activity_open)
            formData.append('START_TIME', this.activity_opentime)
            formData.append('END_DATE', this.activity_close)
            formData.append('END_TIME', this.activity_closetime)
            formData.append('CATEGORY', this.category)
            formData.append('LOCATION', this.activity_address)
            formData.append('MAX_PPL', this.max_ppl)
            formData.append('PRICE', this.fee)
            formData.append('CONTENT', this.content)
            formData.append('REG_START', this.regist_open )
            formData.append('REG_END', this.regist_close )


            axios
            //  htdocs的環境下測試
            .post('http://localhost/TGD104G1/public/API/activity_add.php',formData)
            .then(response => {
                
            })
            .catch(error => {
                // console.log(error);
            });

            this.$router.push('/backend_activity')

         }    

            

        },

        goback(){
            const Id = this.$route.params.Id;
            this.$router.push({ name: "backend_activity_input", params: { Id: Id } });
        }

        
    },
}
</script>