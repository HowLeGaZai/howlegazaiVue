<template>

<navbar></navbar>
    <main class="front-space">
       
      <section> 
        <h1 class="title_space">預約{{spaceData.NAME}}</h1>
        
          <swiper  :navigation="{ nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }" :modules="modules" class="spaceSwiper" :slidesPerView="1">

             <swiper-slide>
              <div class="image space_pic">
                <!-- <img :src="require(`@/assets/img/${spaces.SPACE_PIC}`)" alt=""> -->
                <img :src="spaceData.SPACE_PIC" alt="">
              </div>
           </swiper-slide>
             <swiper-slide>
              <div class="image space_pic">
                <!-- <img :src="require(`@/assets/img/${spaces.SPACE_PIC}`)" alt=""> -->
                <img :src="spaceData.SPACE_PIC" alt="">
              </div>
              </swiper-slide>
             <swiper-slide>
              <div class="image space_pic">
                <!-- <img :src="require(`@/assets/img/${spaces.SPACE_PIC}`)" alt=""> -->
                <img :src="spaceData.SPACE_PIC" alt="">
              </div>
              </swiper-slide>
        </swiper>
         <div class="swiper-btn">
            <button type="button" class="btn-cir-m  btn-color-white swiper-button-prev"><i class="bi bi-caret-left-fill"></i></button>
            <button type="button" class="btn-cir-m btn-color-green swiper-button-next"><i class="bi bi-caret-right-fill "></i></button>
         </div>

      </section>

      <section>
        <h2 class="title_space">選擇預約時間</h2>
        <div class="datetime">
            <!-- <VueDatePicker v-model="date"></VueDatePicker> -->
          <div id="datepicker"></div>
          <div class="selected" id="selected">
            <h5><span class="selectedD">-請先選擇日期-</span></h5>
            <div class="timepick">
              <template v-for="(time,index) in data" :key="index">
                
              
                <!-- <button type="button" :class="time.value"  :value="time.time" @click="clickActive" v-if="time.time === '10:00-10:59' " >{{time.time}}</button> -->
                <button type="button" :class="time.value_about"  :value="time.time_about" @click="clickActive" :disabled="time.value_about === 'btn-m btn-color-white timeslot btn-color-gray'">{{time.time_about}}</button>
<!-- <button type="button" class="btn-m btn-color-white timeslot" v-else :value="time.time" >{{time.time}}</button> -->
              </template>
              
                <!-- <button type="button" class="btn-m btn-color-white timeslot" value="09:00 - 09:59">09:00 - 09:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="10:00 - 10:59">10:00 - 10:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="11:00 - 11:59">11:00 - 11:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="12:00 - 12:59">12:00 - 12:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="13:00 - 13:59">13:00 - 13:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="14:00 - 14:59">14:00 - 14:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="15:00 - 15:59">15:00 - 15:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="16:00 - 16:59">16:00 - 16:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="17:00 - 17:59">17:00 - 17:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="18:00 - 18:59">18:00 - 18:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="19:00 - 19:59">19:00 - 19:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="20:00 - 20:59">20:00 - 20:59</button>
                <button type="button" class="btn-m btn-color-white timeslot" value="21:00 - 21:59">21:00 - 21:59</button> -->
            </div>
          </div>
        </div>
        
        <div class="confirm-btn">
          <router-link to="/space" custom v-slot="{ navigate }">
            <button class="btn-m btn-color-gray" @click="navigate" role="link">返回空間總覽</button>
          </router-link>
          <!-- <router-link to="/space_reserve" custom v-slot="{ navigate }"> -->
            <button class="btn-m btn-color-green" @click="navigate2" role="link" id="spacerev">確認，下一步填寫資訊</button>
          <!-- </router-link> -->
          
          <!-- <button type="button" class="btn-m btn-color-gray" onclick="location.href='/space'">返回空間總覽</button>
          <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_reserve'">確認，下一步填寫資訊</button> -->
        </div>

      </section>

    <section>
    <h2 class="title_space">詳細資訊</h2>
        <div class="space-detail">
            <h3><i class="bi bi-dot"></i>空間資訊<i class="bi bi-dot"></i></h3>
            <ul>
                <li><i class="bi bi-dot"></i>開放時間：{{spaceData.OPEN_TIME}} - {{spaceData.CLOSE_TIME}}</li>
                <li><i class="bi bi-dot"></i>性質：{{spaceData.CATEGORY}}</li>
                <li><i class="bi bi-dot"></i>容納人數：{{spaceData.CAPACITY}}人</li>
                <li><i class="bi bi-dot"></i>坪數：{{spaceData.SPACE_SIZE}}</li>
                <li><i class="bi bi-dot"></i>場地設備：<span>2.5噸冷氣 / 會議桌 / 椅子</span></li>
            </ul>
    
            <h3><i class="bi bi-dot"></i>預約須知<i class="bi bi-dot"></i></h3>
            <ul>
                <li><i class="bi bi-dot"></i>{{spaceData.REMARK}}</li>
                <!-- <li><i class="bi bi-dot"></i>預約送出後，須待里辦公室審核預約申請，申請進度請至個人帳戶>預約空間紀錄查看。</li>
                <li><i class="bi bi-dot"></i>年節期間另行公告開放時間、若遇天災則視直轄單位宣布是否達停班停課標準。</li>
                <li><i class="bi bi-dot"></i>其他如公司行號、學校、機關團體預約或長期借用，請洽里辦公室。</li> -->
            </ul>
            <h3><i class="bi bi-dot"></i>管理人聯繫資訊<i class="bi bi-dot"></i></h3>
            <ul>
                <li><i class="bi bi-dot"></i>管理人：{{spaceData.MANAGER}}</li>
                <li><i class="bi bi-dot"></i>聯繫電話：{{spaceData.MANAGER_PHONE}}</li>
            </ul>
            
            <h3><i class="bi bi-dot"></i>空間地址<i class="bi bi-dot"></i></h3>
            <ul>
                <li class="address">{{spaceData.ADDRESS}}</li>
                <li>
                  <!-- https://www.google.com/maps/embed/v1/place?key=AIzaSyAwotM85aG1f4JdzyU7QVc9slACz2UuD1s&q={{spaces.ADDRESS}} -->
                    <div class="space-map">
                      <iframe :src="`https://www.google.com/maps/embed/v1/place?key=AIzaSyAwotM85aG1f4JdzyU7QVc9slACz2UuD1s&q=${spaceData.ADDRESS}`"
                        width="450"
                        height="250"
                        frameborder="0" style="border: 2px solid #27b096;border-radius: 5px;"
                        referrerpolicy="no-referrer-when-downgrade"
                        allowfullscreen>
                      </iframe>
                        <!-- <img :src="require(`@/assets/img/${spaces.MAP_PIC}`)" alt=""> -->
                    </div>
                </li>
            </ul>

        </div>
      </section>

    </main>
    <Footer></Footer>
</template>


<script>
import { Swiper, SwiperSlide } from 'swiper/vue';

  // Import Swiper styles
  import 'swiper/css';

  import 'swiper/css/navigation';

  import '../assets/css/style.css';

  // import required../components/navbar.vue
  import { Navigation } from 'swiper';


// import VueDatePicker from '@vuepic/vue-datepicker';
// import '@vuepic/vue-datepicker/dist/main.css'
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'
import navbar from '@/components/navbar.vue';
import Footer from "@/components/Footer.vue";
import axios from 'axios';

export default {
  name: 'HelloWorld',
  data () {
    return {
      spaceJsonData:[],
      spaceData:[],
      jsonData:[],
      timeRanges:[],
      data:[],
      selectDate:'',
      spaces: 
              {
              "ID": "1",
              "NAME": "A102教室",
              "CATEGORY": "教室 / 靜態會議活動 / 讀書會",
              "CAPACITY": 40,
              "SPACE_SIZE": 20,
              "NOTE": "",
              "MANAGER": "李上巴",
              "MANAGER_PHONE": "0919426289",
              "OPEN_DATE": "2023-06-30",
              "OPEN_TIME": "08：00",
              "CLOSE_TIME": "21：00",
              "ADDRESS": "高雄市前鎮區崗山南街277巷46",
              "REMARK": "請於使用日前7日預約，每人限定預約當日內2場次。預約送出後，須待里辦公室審核預約申請，申請進度請至個人帳戶>預約空間紀錄查看。年節期間另行公告開放時間、若遇天災則視直轄單位宣布是否達停班停課標準。其他如公司行號、學校、機關團體預約或長期借用，請洽里辦公室。",
              "SPACE_PIC": "s_1.png",
              "MAP_PIC":"space-map.png",
              },

      OPEN_TIME:'',
      CLOSE_TIME:'',
      OPEN_CLOSE_TIME:'',
      ID:'',
              
    }
  },
  components: {
      Swiper,
      SwiperSlide,
      navbar,
      Footer,
      
    },
    setup() {
      return {
        modules: [Navigation],
      };
    },

  
  mounted() {

    const self = this

    // this.getSpaceData();
    // console.log(this.getSpaceData);
    // this.OPEN_CLOSE_TIME = this.getSpaceData();
    // console.log("開放時間為",this.OPEN_CLOSE_TIME)
    this.showData();
    // console.log('abcdef',this.jsonData);
    $('#resizable').resizable({});
    $('#datepicker').datepicker({
      monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],
      dayNamesMin: [ "週日", "週一", "週二", "週三", "週四", "週五", "週六" ], 
      dateFormat: "yy/mm/dd",
      minDate: new Date(), 
      
      onSelect: function(dateText, inst){
        var selected = $(this).val();
        var dateObj = new Date(selected);
        var dayOfWeek = dateObj.getDay();
        var dayNamesMin = ["日", "一", "二", "三", "四", "五", "六"];
        var dayOfWeekText = dayNamesMin[dayOfWeek];
        
        $('.selectedD').html(`日期:&nbsp;` + selected + `&nbsp;(` + dayOfWeekText + `)`);
        sessionStorage.setItem("date", selected + `(` + dayOfWeekText + `)`);
        sessionStorage.setItem("onlydate", selected );
        this.selectDate = selected;
        self.getData(selected);
        // alert("確定預約這一天嗎");
        // alert(selected);
      }
    });
    // var btnContainer = document.getElementById("selected");
    // var btns = btnContainer.getElementsByClassName("timeslot");

    // console.log(btns);

    // for (var i = 0; i < btns.length; i++) {
    //   btns[i].addEventListener("click", function() {
    //     var selectedtime = this.value;
    //     // console.log(this.value);
    //     var current = document.getElementsByClassName("active");
        
    //     if (current.length > 0) {
    //       current[0].className = current[0].className.replace("active", "");
    //     }
    //     this.className += " active";
    //     sessionStorage.setItem("time", selectedtime);

    //     const timeStr = selectedtime;
    //     const [start, end] = timeStr.split(' - ');
    //     sessionStorage.setItem("start", start);
    //     sessionStorage.setItem("end", end);


   
        

    //   });
    // };
 
// console.log('預約的時段有', orderData);
  

  

 
  // console.log(this.jsonData);



// filteredData.forEach(data => {
//   data.class = 'btn-color-gray'
// })
 
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

                    });



                    
                    
                    for(let i=0;i<this.spaceJsonData.length;i++){

                      if(this.$route.params.Id == this.spaceJsonData[i][0]){

                        this.spaceData = this.spaceJsonData[i];

                        const timeArray = this.spaceData.OPEN_TIME.split(':');
                        this.spaceData.OPEN_TIME = timeArray[0] + ':' + timeArray[1];

                        const timeArray_CLOSE_TIME = this.spaceData.CLOSE_TIME.split(':');
                        this.spaceData.CLOSE_TIME = timeArray_CLOSE_TIME[0] + ':' + timeArray_CLOSE_TIME[1];
                        
                        this.OPEN_TIME = this.spaceJsonData[i].OPEN_TIME;
                        this.CLOSE_TIME = this.spaceJsonData[i].CLOSE_TIME;
                      }else{

                      }
                    }


                    return `${this.OPEN_TIME}-${this.CLOSE_TIME}`

    },
  async showData(){
    

    const OPEN_CLOSE_TIME = await this.getSpaceData();
    
    const space_timeRange =  OPEN_CLOSE_TIME;
    

    const [startTime, endTime] = space_timeRange.split('-')


    let startHour  = startTime.split(':')[0].trim();
    let endHour = endTime.split(':')[0].trim();

    const dataList= [];
    const dataList_about =[];
    for (let h = Number(startHour); h <= Number(endHour); h++) {

      const time = `${h}:00-${h}:59` // 產生時間範圍字串，例如 '8:00-8:59'
      if(h<10){
        const time_about = `0${h}:00-0${h}:59`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }else{
        const time_about = `${h}:00-${h}:59`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }




      const value ='btn-m btn-color-white timeslot'
      dataList.push({ time,value });
      
    }


    this.data = dataList_about;


},

async getData(date) {
    await axios
          .get('http://localhost/TGD104G1/public/API/spaceAfterOrder.php')
              
              .then(response => {
                  this.jsonData = response.data;
              })
              .catch(error => {

              });


    const OPEN_CLOSE_TIME = await this.getSpaceData();
    
    const space_timeRange =  OPEN_CLOSE_TIME;

    const [startTime, endTime] = space_timeRange.split('-')


    let startHour  = startTime.split(':')[0].trim();
    let endHour = endTime.split(':')[0].trim();

    const dataList= [];
    const dataList_about =[];
    for (let h = Number(startHour); h <= Number(endHour); h++) {

      const time = `${h}:00-${h}:59` // 產生時間範圍字串，例如 '8:00-8:59'
      if(h<10){
        const time_about = `0${h}:00-0${h}:59`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }else{
        const time_about = `${h}:00-${h}:59`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }
      

      const value ='btn-m btn-color-white timeslot'
      dataList.push({ time,value });
      
    }

    

    const formattedDate = date.replace(/\//g, '-');

    


    
  let spaceID = sessionStorage.getItem("spaceID");

    for(let i=0;i<this.jsonData.length;i++){
        this.jsonData[i][1] = this.jsonData[i][1].substring(0,5) + '-' + this.jsonData[i][1].substring(9,14);
        
        if(formattedDate == this.jsonData[i][0] ){
    
                for(let j =0; j<dataList_about.length;j++){
                  if(this.jsonData[i][1] == dataList_about[j].time_about && this.$route.params.Id == this.jsonData[i][2]){
                      dataList_about[j].value_about = 'btn-m btn-color-white timeslot btn-color-gray';

                  }else{

                  }
                }
                

            
        }
    }




    this.data = dataList_about;




},


    
    clickActive(event){
      const button = event.target;
      var selectedtime = button.value;
      console.log(selectedtime);
      var current = document.getElementsByClassName("active");

      if (current.length > 0) {
          current[0].className = current[0].className.replace("active", "");
        }

      
      
      button.className += " active";

      sessionStorage.setItem("time", selectedtime);

        const timeStr = selectedtime;
        const [start, end] = timeStr.split('-');
        sessionStorage.setItem("start", start);
        sessionStorage.setItem("end", end);


    },
        navigate2(){
            // sessionStorage.setItem("APPLY_NAME", this.name);
            sessionStorage.setItem("APPLY_TITLE", this.inputState);
            sessionStorage.setItem("APPLY_PHONE", this.phone);
            sessionStorage.setItem("APPLY_MAIL", this.mail);
            sessionStorage.setItem("PURPOSE", this.apply);
            sessionStorage.setItem("SPACE_ID", this.$route.params.Id);

            this.$router.push({ name: 'space_reserve', params: { Id: this.$route.params.Id } })
        },

        formatTime(timeString) {
            const [hour, minute] = timeString.split(":");
            return `${hour}:${minute}`;
        },


  },
   computed: {
    isInOrder(item) {
      return this.data.time.includes(item);
    }
  },

   updated(){
  },


  
  
}
</script>

