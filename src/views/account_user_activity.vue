<template>
 <div class="backend">
        <navbar></navbar>
    <div class="background_image">
         <main>
        <section class="account-border">
            <div class="account">
              <Accountsidebar :localPORTRAIT="localPORTRAIT"></Accountsidebar>

                <section class="account-content">
                    <h1 class="marginbottom30">活動報名紀錄</h1>
                      <div class="check_activity_content bgcolordarkgreen">
                        <div class="displayflex content_row1">
                          <h4 class="fontsize20">活動日期</h4>
                          <h4 class="fontsize20 forSecondColumn">報名項目</h4>
                        </div>

                        <div class=" content_row borderBottomLightgray" v-for="(data,index) in datas" :key="index">
                          <div class="displayflex">
                            <h4 class="fontsize20" >{{ data.START_DATE}}</h4>
                            <h4 class="fontsize20 forSecondColumn"><router-link class="titlelink" :to="{ name: 'activity_info', params: { Id: ACTIVITY_ID } }">
                                {{data.TITLE}}
                                </router-link></h4>
                            <button type="button" class="btn-cir-s btn-color-white collapse collapseBtn">
                              <i class="bi bi-caret-down-fill openBtn" id="openBtn" @click="info(index)"></i></button>
                            
                          </div>
                          <div class="attendDetail hidden">

                            <h4>訂單編號 : {{ data[0] }}</h4>
                            <h4>已付金額 : {{ data.PAYMENT }} 元</h4>
                            <h4>活動時間 : {{ data.START_DATE }} {{ formattedStartTime(data.START_TIME) }}~{{ data.END_DATE }} {{ formattedEndTime(data.END_TIME) }}</h4>
                            <h4>活動地點 : {{ data.LOCATION }}</h4>
                            <h4>參加人數 : {{ getAttendeeCount(data) }} 位</h4>

                            <div class="attendDetail2">
                              <div class="attendMember" v-for="attendee in getAttend(data)" :key="attendee.i">
                                <h4>參加人({{ index + 1 }}) : {{ attendee.ATTEND_NAME }}</h4>
                                <h4>聯絡電話 : {{ attendee.ATTEND_PHONE }}</h4>
                                <h4>電子信箱 : {{ attendee.ATTEND_MAIL }}</h4>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                </section>
            </div>
        </section>
    </main>
    </div>
    </div>
</template>

<script>

import $ from 'jquery'
import navbar from './navbar.vue';
import Accountsidebar from '@/components/Accountsidebar.vue';

export default {
    data(){
        return {
          START_DATE:'',
          TITLE:'',
          ID:'',
          PAYMENT:'',
          START_TIME:'',
          END_DATE:'',
          END_TIME:'',
          LOCATION:'',
          ATTEND_NAME:'',
          ATTEND_PHONE:'',
          ATTEND_MAIL:'',
          localPORTRAIT:"",

          datas:[
              // {"0": '2023-03-04', "1": "新春書法體驗課"},
              // {"0": '2023-02-28', "1": "慶元宵發燈籠活動"},
              // {"0": '2023-02-04', "1": "112年第一次工作會報"},
              // {"0": '2023-01-11', "1": "打擊詐騙訊息，從你我開始"},
              // {"0": '2022-12-14', "1": "電影旅遊講座"},
              
          ],
        }
    },
 
    mounted(){
        this.localPORTRAIT = localStorage.getItem("portrait");
        // $(function(){
        // $(".collapse").click(function(){
        //     $(this).parents('.content_row').find('.attendDetail').slideToggle("slow");
        //     $("#openBtn").toggleClass('changeButton');
        // });});

        const userId = this.getCookieValue("id");
        const url = "http://localhost/TGD104G1/public/API/account_activity.php";
        const data = new FormData();
        data.append('user_id', userId)
        
        axios
            .post(url, data)
            .then((response) => {
                const data = response.data;
                this.datas = data;
            })
            .catch((error) => {
                console.error(error);
            });

        // this.ID = this.datas[index][0];
        // console.log(ID)
    },

    methods: {
      getCookieValue(cookieName) {
          const cookies = document.cookie.split("; ");
          for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].split("=");
            if (cookie[0] === cookieName) {
              return cookie[1];
            }
          }
          return null;
      },

      //vue寫法的開合
      info(index){
        let openBtns = document.querySelectorAll(".openBtn");
        let hiddenRows = document.querySelectorAll(".hidden");
        let hiddenRow = hiddenRows[index];
        let openBtn = openBtns[index];
          if (hiddenRow.style.maxHeight) {
            hiddenRow.style.maxHeight = null;
            openBtn.classList.remove("rotate");
          } else {
            hiddenRow.style.maxHeight = hiddenRow.scrollHeight + "px";
            openBtn.classList.add("rotate");
          };

       
      },

      getAttend(data) {
        const ATTEND_NAME = data.ATTEND_NAME.slice(1, -1).split(",");
        const ATTEND_MAIL = data.ATTEND_MAIL.slice(1, -1).split(",");
        const ATTEND_PHONE = data.ATTEND_PHONE.slice(1, -1).split(",");

        return ATTEND_NAME.map((name, i) => {
          return {
            ATTEND_NAME: ATTEND_NAME[i],
            ATTEND_MAIL: ATTEND_MAIL[i],
            ATTEND_PHONE: ATTEND_PHONE[i]
          };
        });
      },

      getAttendeeCount(data) {
        const ATTEND_NAME = data.ATTEND_NAME.slice(1, -1).split(",");
        return ATTEND_NAME.length;
      },

      formatTime(timeString) {
            const [hour, minute] = timeString.split(":");
            return `${hour}:${minute}`;
      },
      formattedStartTime(startTime) {
          return this.formatTime(startTime);
      },
      formattedEndTime(endTime) {
          return this.formatTime(endTime);
      },

    },
    components:{navbar,Accountsidebar
    },

    computed: {
    },

}
</script>