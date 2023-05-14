<template>
    <header class="backend-header">
    <nav class="main">
      <div class="leftnav">
        <!-- logo -->
        <a class="brand" href="/backend_index">
          <img src="../assets/img/logo_backend.svg" alt="" />
        </a>
        <div class="midnav">
           <!-- 天氣 emoji -->
           <!-- 雨、晴、陰 -->
           <i class="bi" :class="{
              'bi-cloud-drizzle': Weather.includes('雨'),
              'bi-clouds': Weather.includes('陰') && !Weather.includes('雨'),
              'bi-sun': Weather.includes('晴') && !Weather.includes('雨') && !Weather.includes('陰')
            }"></i>
          歡迎登入<div>{{dataTOWN}}</div>
        </div>
      </div>

      <!-- 里長名稱與頭像 -->
      <div class="admin-account">
        <p>里長好</p>
        <!-- 頭像 -->
        <a href="#" class="userbtn">
          <img src="../assets/img/admin_icon.png" alt="" class="user_pic">
        </a>
      </div>
    </nav>
  </header>
</template>


<script>

export default {
    data(){
        return {
            dataCity:'',
            dataDistrict:'',
            dataTOWN:'',

            Weather:'',
            currentTime:'',

            jsonData:[],
        }
    },

    mounted(){
        
        // 網站城市資訊
        axios
        .post('http://localhost/TGD104G1/public/API/home.php', {})
        .then(response => {
          this.jsonData = response.data;
          this.webInfo();
          this.getWeather(this.dataCity);
        })
        .catch(error => {
          // console.log(error);
        });
                
    },
    methods: {

      webInfo() {

        this.dataCity = this.jsonData[this.jsonData.length - 1].CITY;
        this.dataDistrict = this.jsonData[this.jsonData.length - 1].DISTRICT;
        this.dataTOWN = this.jsonData[this.jsonData.length - 1].TOWN;

        this.sendDataToParent1();
      },
      
      sendDataToParent1() {
        const webInfo = {
          dataCity: this.dataCity,
          dataTOWN: this.dataTOWN
        }

        this.$emit('webInfo', webInfo);
        // console.log(webInfo)
      },

      
      // 取得氣象局資訊
      getWeather(){
        
        axios
        .get(`https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-718714D0-D294-4636-BB1A-B29B43F5E281&format=JSON&locationName=${this.dataCity}&elementName=Wx`, {})
        .then(response => {
          this.jsonData = response.data;
          console.log(this.jsonData);

          this.getCurrentTime();
          
        })
        .catch(error => {
          console.log(error);
        }); 
      },
      
      // 取得現在時間
      getCurrentTime() {
        const now = new Date();
        const timeZoneOffset = now.getTimezoneOffset() * 60000; // 毫秒
        const formattedTime = new Date(now.getTime() - timeZoneOffset).toISOString().slice(0, 19).replace('T',' ');

        this.currentTime = formattedTime;

        this.getParameterName(this.currentTime);
      },

      // 比對時間段內天氣敘述
      getParameterName(){

        // console.log(this.jsonData.records.location[0].weatherElement[0].time);
        this.currentTime = "2023-05-15 18:00:00"

        // 篩選出在現在時間範圍內的資料
        const weatherData = this.jsonData.records.location[0].weatherElement[0].time.filter(time => {
          return time.endTime >= this.currentTime && this.currentTime >= time.startTime;
        });

        // 取得篩選後的資料中的 parameterName 與 parameterValue
        const weatherDescription = weatherData[0].parameter.parameterName;
        
        // console.log(weatherDescription);
        this.Weather = weatherDescription

        console.log(this.Weather);
      },

    },
    components:{
       
    },
    computed: {

    },
    watch: {
  },
        
}
</script>
