<template>
  <backendNavbar></backendNavbar>

  <div class="body-sec">
    <main class="backpadding">
      <backCalender></backCalender>

      <!-- <div class="container-date">
  
          <p>西曆：2023 年 03 月 11 日</p>  
          <p>農曆：癸卯年 乙卯月 戊辰日 二月二十</p>    
        </div> -->

      <section class="container-main">
        <!------- 補這裡：後台側欄選單 ------->
        <BackLeftNav></BackLeftNav>
        <!------- 補這裡：後台側欄選單 ------->



        <section class="section_right">
          <!--近期活動總覽＆日曆 -->
          <div class="date-overview">
            <div class="bk-datepicker">
              <!--datepicker 日曆 -->
              <div id="datepicker"></div>
            </div>
            <div class="recent-activities">
              <p>近期活動</p>
              <table class="activity-list">
                <tr v-for="(activity, index) in activityData" :key="index" v-show="index < activityNum">
                  <td class="activity-label">
                    <div :class="['tag', addTagClass(activity.CATEGORY)]">{{ activity.CATEGORY }}</div>
                  </td>
                  <td class="activity-name">
                    {{ activity.TITLE }}
                  </td>
                  <!-- <td class="activity-num">
                    12人{{ }}
                  </td> -->
                  <td class="activity-date">
                    {{ activity.START_DATE }}
                  </td>
                </tr>

              </table>
            </div>
          </div>

          <!------ 待辦事項 ------>
          <div class="admin-todolist">
            <p>待辦事項</p>
            <div class="displayflex">
              <router-link :to="{ name: 'backend_account_new' }">
                <button type="button" class="btn-be-dash btn-color-green" :class="{ opacity6: accountNew < 1 }">
                  <div class=" text-ali font-13">新申請<br>戶長帳號({{ accountNew }})


                  </div>
                </button>
              </router-link>
              <router-link :to="{ name: 'backend_space_reservation' }">
                <button type="button" class="btn-be-dash btn-color-green" :class="{ opacity6: spaceNew < 1 }">
                  <div class=" text-ali font-13">待批准<br>空間預約({{ spaceNew }})</div>

                </button>
              </router-link>
              <router-link :to="{}">
                <button type="button" class="btn-be-dash btn-color-green opacity-4 btn-color-unopened">
                  <div class=" text-ali font-13">待追蹤<br>維修通報 (0)</div>
                </button>
              </router-link>
            </div>

          </div>


          <!------大湖里成員 dashboard------>
          <div class="member-account">
            <p>
              {{ town }}成員統計
            </p>


            <div class="account-dashboard">
              <table>
                <tr>
                  <td class="family">
                    <div class="family-num">
                      <h1>{{ population }}</h1>
                      <h2>{{ town }}戶數</h2>
                    </div>
                    <p class="positive" :class="{ fontred: homeNumPercentage < 0, fontgreen: homeNumPercentage > 0 }">
                      {{ homeNumPercentage  + "%" }}</p>
                  </td>
                  <!-- <td>
                  <h1>2000</h1>
                </td> -->

                  <td class="area-number">
                    <div class="family-num">
                      <h1>{{ homeNum }}</h1>
                      <h2>{{ town }}人口數</h2>
                    </div>
                    <p class="positive"
                      :class="{ fontred: populationPercentage < 0, fontgreen: populationPercentage > 0 }">
                      {{ populationPercentage + "%" }}</p>
                  </td>

                  <td class="area-number">
                    <div class="family-num">
                      <h1>{{ webFamily }}</h1>
                      <h2>網站註冊戶數</h2>
                    </div>
                  </td>

                  <td class="area-number">
                    <div class="family-num">
                      <h1>{{ account }}</h1>

                      <h2>網站註冊人數</h2>
                    </div>
                  </td>





                </tr>




              </table>

            </div>



          </div>


          <!--各頁資料放這裡 -->
        </section>
      </section>



    </main>
    <!------ 補這裡：不支援手機畫面 ------>
    <mobileNotSupport></mobileNotSupport>
    <!------ 補這裡：不支援手機畫面 ------>
  </div>
  <Footer></Footer>

  <!-- </main> -->
</template>

<script>

import backendNavbar from '../components/backendNavbar.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import mobileNotSupport from '@/components/mobileNotSupport.vue';
import Footer from '../components/Footer.vue';
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'
import { BIconMailbox } from 'bootstrap-icons-vue';


export default {
  components: {
    backendNavbar, Footer, backCalender, BackLeftNav,mobileNotSupport
  },

  data() {
    return {
      webData:[],
      town:'',

      activityData: [],// 活動資訊
      activityNum: 4,
      accountNew: '', //待審核戶長
      spaceNew: '', //待審核空間


      villageData: [],
      population: '',//人口數
      populationPercentage: '', //人口計算成長率
      homeNum: '', // 戶數
      homeNumPercentage: '',//戶數計算成長率


      accountData: [],
      familyData: [], //家庭資料
      familyData: [], //家庭資料
      webFamily: '', //網站戶數 
      account: '', //網站註冊數（且審核通過）T_STATUS＝1||2 && USER_STATUS =1


    }
  },


  methods: {

    addTagClass(category) {
      return {
        "tag-green": category === "藝文",
        "tag-orange": category === "旅遊",
        "tag-pink": category === "健康",
        "tag-yellow": category === "其他",

      };
    },


    //取得大湖里人員統計

    countvillage() {
      this.population = this.villageData[this.villageData.length - 1].POPULATION;
      this.homeNum = this.villageData[this.villageData.length - 1].HOME_NUM;

      //（最新 - 上次 /上次人口）＊100%
      this.populationPercentage = ((this.villageData[this.villageData.length - 1].POPULATION
        - this.villageData[this.villageData.length - 2].POPULATION)
        / this.villageData[this.villageData.length - 2].POPULATION).toFixed(2);

        this.populationPercentage = this.populationPercentage * 100;
        this.populationPercentage = this.populationPercentage .toFixed(2);

        console.log(this.populationPercentage + "百分比");


      //取
      this.homeNumPercentage = ((this.villageData[this.villageData.length - 1].HOME_NUM
        - this.villageData[this.villageData.length - 2].HOME_NUM)
        / this.villageData[this.villageData.length - 2].HOME_NUM);
        
        this.homeNumPercentage = this.homeNumPercentage * 100;
        this.homeNumPercentage = this.homeNumPercentage.toFixed(2);

        console.log(this.homeNumPercentage + "戶數百分比");

      // console.log("最新人口數" + this.population);
      // console.log("最新戶數" + this.homeNum);
    },







  },





  mounted() {


    $('#resizable').resizable({});
    $('#datepicker').datepicker({
      monthNames: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
      dayNamesMin: ["週日", "週一", "週二", "週三", "週四", "週五", "週六"],
      dateFormat: "yy/mm/dd",

      onSelect: function () {
        var selected = $(this).val();
        $('.selectedD').html(`日期:&nbsp` + selected);
      }
    });


    //撈取網站資料
    axios
      .post('http://localhost/TGD104G1/public/API/home.php',{})
      .then(response => {
        this.webData = response.data[response.data.length-1];
        this.town = this.webData.TOWN;

        // this.town = response.data[3]; 
        // console.log(this.webData.TOWN);
       
      })
      .catch(error => {
        // console.log(error);
      });


    //撈取活動
    axios
      .post('http://localhost/TGD104G1/public/API/activity.php', {})
      .then(response => {
        this.activityData = response.data;
        // console.log(this.activityData);
      })
      .catch(error => {
        console.log(error);
      });



    //待審核戶長數
    axios
      .post('http://localhost/TGD104G1/public/API/accountNew.php', {})
      .then(response => {
        this.accountNew = response.data.length;
        // if (this.accountNew = undefined) {
        //   this.accountNew = 0
        // }
        // else {
        //   this.accountNew = this.accountNew
        // }
        console.log(this.accountNew + '待審核戶長數')
      })
      .catch(error => {
        console.log(error);
      });


    //待審核空間預約
    axios
      .get('http://localhost/TGD104G1/public/API/backend_space_reservation.php')
      // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
      .then(response => {
        this.spaceNew = response.data.length;
        // console.log(this.spaceNew);

      })
      .catch(error => {
        // console.log(error);
      });





    //人口數與戶數
    axios
      .post('http://localhost/TGD104G1/public/API/people.php', {})
      .then(response => {
        this.villageData = response.data;
        // alert(response.data)
        // console.log(this.villageData[this.villageData.length-1].POPULATION);//最新人口數
        // console.log(this.villageData[this.villageData.length-1].HOME_NUM);//最新戶數
        //計算人口相關加總數
        this.countvillage();

      })
      .catch(error => {
        console.log(error);
      });


    //網站戶數與註冊數
    axios
      .post('http://localhost/TGD104G1/public/API/account_count.php', {})
      .then(response => {
        this.accountData = response.data;
        // this.countaccount()
        this.account = this.accountData.length; //計算帳戶數量

        console.log(this.account + "已註冊人口數");

      })
      .catch(error => {
        console.log(error);
      });



    axios
      .post('http://localhost/TGD104G1/public/API/family_count.php', {})
      .then(response => {
        this.familyData = response.data;
        // this.countaccount()
        this.webFamily = this.familyData.length + 1; //計算戶數數量

        console.log(this.webFamily + "已註冊戶數");

      })
      .catch(error => {
        console.log(error);
      });





  },




}
</script>