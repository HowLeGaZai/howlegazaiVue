<template>

    <div class="activity_info">
           <router-link to="/activity" custom v-slot="{ navigate }">
            <button class="btn-prepage font-green" @click="navigate" role="link">
              <i class=" bi bi-caret-left-fill font-green"></i>返回【上一頁】
            </button>
        </router-link>
        <div class="info_topic">
            <!-- <h1>活動資訊</h1>
             -->
            <div class="activity_typeAndTime">
                <div class="tag tag-round tag-pink tag-btn tag-btn-selected">藝文</div>
                <h4>發布日期：5小時前</h4>
            </div>
        </div>

        <div class="info-article">
            <h2>{{activity.TITLE}}</h2>

            <div class="userTag-2" id="">
                <img src="../assets/img/user_pic2.png" alt="" class="userPic" />
                <h6>里長伯</h6>
            </div>
            
            <!-- img的容器設定為原大小的95% -->
            <table class="activityContent-2">
                <tr class="actInfo-2">
                    <td>活動時間：</td>
                    <td>2023-03-04  （六） 15:00～18:00</td>
                </tr>
                <tr class="actInfo-2">
                    <td>地點：</td>
                    <td>花蓮縣大湖里幸福路和平街66號 快樂公園教室Ｂ</td>
                </tr>
                <tr class="actInfo-2">
                    <td>報名人數限制：</td>
                    <td>40人</td>
                </tr>
                <tr class="actInfo-2">
                    <td>報名截止時間：</td>
                    <td>2023-02-15（五）24:00</td>
                </tr>
                <tr rowspan="2" class="actPrice-2">
                    <td>200元/人</td>
                    <!-- <td>元/人</td> -->
                </tr>
            </table>

            <div class="regist">
                <div class="peopleCount">
                    <label for="name" class="f-label">人數</label>
                    <input type="text" class="f-text" id="name" placeholder="">
                </div>
                <div class="confirm-btn"> 
                    <a href="#/activity_registStep1"><button type="button" class="btn-m btn-color-green">點我報名</button></a>
                </div>
            </div>
        </div>

        <div class="info_discript">
            <h1>活動介紹</h1>
            
            <div class="image act-img">
                <img src="../assets/img/e1_calligraphy.png" alt="">
            </div>
            <div class="infoText">

                <p class="infoText-p">
                今天我們要介紹一個獨特的旅遊主題——印度。印度是一個充滿神秘與色彩的國度，而電影更是印度文化的重要代表之一。在這個電影旅遊講座中，我們將介紹北印度和南印度，並透過電影帶領大家一同神遊印度。
                <br>
                <br>
                首先，我們會以北印度為起點。北印度是印度的政治、文化中心，也是印度最熱門的旅遊目的地之一。在這裡，我們將透過電影《三傻大闖關》、《印度合唱團》等，介紹北印度著名的景點如泰姬陵、德里紅堡等，還有北印度獨特的文化和飲食。
                <br><br>
                接著，我們轉往南印度。南印度是印度的文化、宗教、歷史中心之一，以其富饒的自然環境和悠久的歷史文化聞名。在這裡，我們將透過電影《巴霍巴利王》、《瘋狂印度》等，介紹南印度獨特的寺廟、海灘、自然風光等，還有南印度獨特的文化和美食。
                <br><br>
                這個電影旅遊講座不僅是一次視覺和文化的盛宴，也是一次了解印度旅遊的好機會。我們將通過電影的介紹，讓大家更深入地了解印度的文化和歷史，更好地體驗印度的旅遊魅力。
                <br><br>
                如果你對印度的文化和電影有興趣，或者你正在計劃前往印度旅遊，那麼這個電影旅遊講座是一個絕佳的選擇。讓我們一起用電影神遊印度，探索這個充滿神秘與色彩的國度吧！
                </p>

            </div>
        </div>
    </div>

</template>
  
<script>
import axios from 'axios';

export default {
    data() {
      return {
        spaceJsonData:[],
        spaceData:[],
        jsonData:[],
        timeRanges:[],
        data:[],
        selectDate:'',
        }
    },
    mounted() {
        axios
        
        .get('http://localhost/TGD104G1/public/API/activity.php', {})
        // .get('/API/activity.php')
        // .get('https://tibamef2e.com/tgd104/g1/activity.php')
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });
    },
    methods: {
        async getSpaceData() {
            await  axios
            //  htdocs的環境下測試
            .get('http://localhost/TGD104G1/public/API/activity.php')
                // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
            .then(response => {
                this.spaceJsonData = response.data;
                console.log('abc',this.spaceJsonData);
            })
            .catch(error => {
                // console.log(error);
            });


            let space = sessionStorage.getItem("space");
            

            for(let i=0;i<this.spaceJsonData.length;i++){
            // console.log(i,this.spaceJsonData[i]);
            if(space == this.spaceJsonData[i][1]){
                // console.log('空間資料',this.spaceJsonData[i]);
                this.spaceData = this.spaceJsonData[i];
                console.log('空間資料',this.spaceData);
                }else{

                }
            }
        },
    },
    methods:{
    async getSpaceData() {
              await  axios
                //  htdocs的環境下測試
                    .get('http://localhost/TGD104G1/public/API/space.php')
                        // .get('https://tibamef2e.com/tgd104/g1/accountOverview.php')
                    .then(response => {
                        this.spaceJsonData = response.data;
                        console.log('abc',this.spaceJsonData);
                    })
                    .catch(error => {
                        // console.log(error);
                    });


                    let space = sessionStorage.getItem("space");
                    

                    for(let i=0;i<this.spaceJsonData.length;i++){
                      // console.log(i,this.spaceJsonData[i]);
                      if(space == this.spaceJsonData[i][1]){
                        // console.log('空間資料',this.spaceJsonData[i]);
                        this.spaceData = this.spaceJsonData[i];
                        console.log('空間資料',this.spaceData);
                      }else{

                      }
                    }

                    

    },
  showData() {
    
    // console.log('abc',this.jsonData);

    const timeRange = '8:00-21:59';
    // console.log(timeRange);
    const [startTime, endTime] = timeRange.split('-')
    // console.log(startHour);
    // console.log(endHour);

    let startHour  = startTime.split(':')[0].trim();
    let endHour = endTime.split(':')[0].trim();
    // console.log(startHour);
    const dataList= [];
    const dataList_about =[];
    for (let h = Number(startHour); h <= Number(endHour); h++) {
      // console.log(h);
      const time = `${h}:00-${h}:59` // 產生時間範圍字串，例如 '8:00-8:59'
      if(h<10){
        const time_about = `0${h}:00:00-0${h}:59:00`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }else{
        const time_about = `${h}:00:00-${h}:59:00`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }
      // console.log('dataList_about',dataList_about);
      // console.log(time);
      const value ='btn-m btn-color-white timeslot'
      dataList.push({ time,value });
      
    }
// dataList_about.push(time_about);
    // console.log('調整格式',dataList_about);

    console.log('確定預約的',this.jsonData);
    this.data = dataList_about;


},

async getData(date) {
    await axios
          //  htdocs的環境下測試
          .get('http://localhost/TGD104G1/public/API/spaceAfterOrder.php')
              
              .then(response => {
                  this.jsonData = response.data;
                  
                  // console.log(this.jsonData);
              })
              .catch(error => {
                  // console.log(error);
              });
    // console.log('abc',this.jsonData);
    // alert(date);
    console.log('選擇的日期是',date);
    const timeRange = '8:00-21:59';
    // console.log(timeRange);
    const [startTime, endTime] = timeRange.split('-')
    // console.log(startHour);
    // console.log(endHour);

    let startHour  = startTime.split(':')[0].trim();
    let endHour = endTime.split(':')[0].trim();
    // console.log(startHour);
    const dataList= [];
    const dataList_about =[];
    for (let h = Number(startHour); h <= Number(endHour); h++) {
      // console.log(h);
      const time = `${h}:00-${h}:59` // 產生時間範圍字串，例如 '8:00-8:59'
      if(h<10){
        const time_about = `0${h}:00:00-0${h}:59:00`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }else{
        const time_about = `${h}:00:00-${h}:59:00`;
        const value_about = 'btn-m btn-color-white timeslot';
        dataList_about.push({ time_about,value_about});
      }
      
      // console.log(time);
      const value ='btn-m btn-color-white timeslot'
      dataList.push({ time,value });
      
    }
// dataList_about.push(time_about);
    // console.log('調整格式',dataList_about);

    console.log('確定預約的',this.jsonData);
    

    const formattedDate = date.replace(/\//g, '-');

    // alert(formattedDate);

    for(let i=0;i<this.jsonData.length;i++){
        
        if(formattedDate == this.jsonData[i][0] ){
          
            //加入日期判斷
              // console.log(i,this.jsonData[i][1]);
                for(let j =0; j<dataList_about.length;j++){
                  // console.log(j,dataList_about[j].time_about)
                  if(this.jsonData[i][1] == dataList_about[j].time_about){
                      
                      dataList_about[j].value_about = 'btn-m btn-color-white timeslot btn-color-gray';
                      // console.log(dataList_about[j].value_about);
                  }else{

                  }
                }
                

            
        }
    }



    console.log('dataList',dataList);
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


    }


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