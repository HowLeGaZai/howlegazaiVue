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
              <tr>
                <td class="activity-label">
                  <div class="tag tag-pink">藝文</div>
                </td>
                <td class="activity-name">
                  大湖里新春書法體驗
                </td>
                <td class="activity-num">
                  12人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>
              <tr>
                <td class="activity-label">
                  <div class="tag tag-blue">活動</div>
                </td>
                <td class="activity-name">
                  新春旅遊賞櫻趣
                </td>
                <td class="activity-num">
                  24人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>

              <tr>
                <td class="activity-label">
                  <div class="tag tag-green">健康</div>
                </td>
                <td class="activity-name">
                  銀髮健眠舒壓講座
                </td>
                <td class="activity-num">
                  84人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>

              <tr>
                <td class="activity-label">
                  <div class="tag tag-green">里民服務</div>
                    </td>
                <td class="activity-name">
                  銀髮運動拉筋趣
                </td>
                <td class="activity-num">
                  19人
                </td>
                <td class="activity-date">
                  2023/12/11
                </td>
              </tr>







            </table>
          </div>
        </div>

        <!------ 待辦事項 ------>
        <div class="admin-todolist">
          <p>待辦事項</p>
          <div class="displayflex">
            <router-link :to="{name:'backend_account_new'}">
              <button type="button" class="btn-be-dash btn-color-green">
                <div class=" text-ali font-13">新申請<br>戶長帳號 (2)<i class="bi bi-arrow-right-circle-fill btn-i"></i></div>
              </button>
            </router-link>
            <router-link :to="{name:'backend_space_reservation'}">
              <button type="button" class="btn-be-dash btn-color-green opacity-4">
                <div class=" text-ali font-13">待批准<br>空間預約 (0)</div>
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
            大湖里成員統計
          </p>



          <div class="account-dashboard">
            <table>
              <tr>
                <td class="family">
                  <div class="family-num">
                    <h1>{{ population }}</h1>
                    <h2>大湖里戶數</h2>
                  </div>
                  <p class="positive">↑12%</p>
                </td>
                <!-- <td>
                  <h1>2000</h1>
                </td> -->

                <td class="area-number">
                  <div class="family-num">
                    <h1>{{ home_num }}</h1>
                    <h2>大湖里人口數</h2>
                  </div>
                  <p class="positive">↑2%</p>
                </td>

                <td class="area-number">
                  <div class="family-num">
                    <h1>147</h1>
                    <h2>網站註冊戶數</h2>
                  </div>
                  <p class="positive">↑6%</p>
                </td>
                <td class="area-number">
                  <div class="family-num">
                    <h1>147</h1>
                    <h2>網站註冊人數</h2>
                  </div>
                  <p class="negative">↓2%</p>
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
      <div class="nosupport">
            <main>
                <section class="noSupport">
                    <a href="#">
                        <div>     
                            <img class="LiIcon" src="../assets/img/LiIcon.png" alt="">
                            <h1>歹勢！後台目前不支援手機</h1>
                            <img class="cat" src="../assets/img/Cat.png" alt="">
                            <p>下班請休息，我們明天再忙！</p>
                        </div>
                    </a>
                </section>
            </main>
         
      </div>
    <!------ 補這裡：不支援手機畫面 ------>
  </div>
  <Footer></Footer>
    
  <!-- </main> -->
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'
import Footer from './Footer.vue';


export default {
  data() {
    return {
      population : '',
      home_num: '',
    }
  },
  components: {
      backendNavbar,Footer,backCalender,BackLeftNav
    },
    methods: {
        webhp(){
          this.population = this.jsonData[this.jsonData.length-1].POPULATION ;
          this.home_num = this.jsonData[this.jsonData.length-1].HOME_NUM ;
        },
    },
    mounted() {

      axios
        .post('http://localhost/TGD104G1/public/API/people.php',{})
        .then(response => {
            this.jsonData = response.data;
            // alert(response.data)
            // console.log(this.jsonData[this.jsonData.length-1].FULLNAME);
            this.webhp();
            // console.log(this.jsonData.length);
            // console.log(this.jsonData);
        })
        .catch(error => {
            // console.log(error);
        });  


    $('#resizable').resizable({});
    $('#datepicker').datepicker({
        monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],
          dayNamesMin: [ "週日", "週一", "週二", "週三", "週四", "週五", "週六" ], 
          dateFormat: "yy/mm/dd",
          
          onSelect: function(){
            var selected = $(this).val();
            $('.selectedD').html(`日期:&nbsp` + selected);
            // console.log(selected);

            // let dayNamesMin = $(this).datepicker( "option", "dayNamesMin" );
            // console.log(dayNamesMin);
        }
    });
   
  //  ＝＝＝＝＝＝側欄選單的JS＝＝＝＝＝＝
  // let beMenu = document.querySelectorAll(".be-menu");
  //  let beMenuOn = document.querySelectorAll(".be-nav-on");
  //   // let beMenu = document.querySelectorAll("be-nav");
  //   // console.log(beMenu);

  // for(let i = 0; i < beMenu.length; i++){
  //   beMenu[i].addEventListener("click",function(){
  //     beMenuOn[i].classList.toggle('be-nav-off');
  //   //   console.log(beMenu[i]);
  //   })
  // }

  //  ＝＝＝＝＝＝側欄選單的JS end＝＝＝＝＝＝

    
  },
 
  

  
}
</script>