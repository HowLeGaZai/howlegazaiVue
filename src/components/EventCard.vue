<template>
        <div class="activity_content">            
            <div class="card" v-for='(activity,index) in jsonData' :key="index">
                <!-- <img class="image event_pic" :src="jsonData.BANNER" alt=""> -->
                <img class="image event_pic" :src="activity.BANNER ? activity.BANNER :require(`@/assets/img/default.jpg`)">
                <div :class="['tag', 'card-tag','tag-round', addClass(activity.CATEGORY)]">{{ activity.CATEGORY }}</div>

                <div class="card-line"></div>
                <div class="">
                    <h3 class="card-title">{{activity.TITLE}}</h3>

                    <h5 class="card-date">活動日期：<span>{{activity.START_DATE}}</span></h5>
                    <h3 class="card-price">{{ activity.PRICE == 0 ? '免費' : activity.PRICE + "元" }}</h3>
                    <!-- <a class="card-link" href="#/activity_info"><h5> 活動詳情<i class="bi bi-arrow-right"></i></h5></a> -->
                    <!-- <a class="card-link" @click="activityInfo(index)" role="link"><h5> 活動詳情<i class="bi bi-arrow-right"></i></h5></a> -->
                    <router-link class="card-link" :to="{ name: 'activity_info', params: { Id: activity.ID } }">
                        <h5> 活動詳情<i class="bi bi-arrow-right"></i></h5>
                    </router-link>
                    <!-- <button class="btn-m btn-color-green" @click="navigate" role="link">活動詳情</button> -->
                </div>
            </div>
        </div>
        <!-- <div>
            <p>Loading...</p>
        </div> -->
</template>

<script>

import axios from 'axios';

export default {
    data() {
        return {
        jsonData: [],
        }
    },
    methods: {
        activityInfo(index){
            this.$router.push('/activity_info')
            // alert(index);
            console.log(this.jsonData[index]);
            console.log('活動的名稱是',this.jsonData[index][1]);
            sessionStorage.setItem("activity", this.jsonData[index][1]);
        },
          addClass(category) {
            return {
                "tag-pink": category === "藝文",
                "tag-orange": category === "其他",
                "tag-sky": category === "旅遊",
                "tag-yellow ": category === "健康",
      };
    },
    },
    mounted() {
        axios
        .get('http://localhost/TGD104G1/public/API/activity.php')
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            //console.log(error);
        });
    }
}
</script>

<!---------- Origin ------------>

<!-- <template>
    <div class="card" v-for="(event,index) in events" :key="index">

                    <img class="image event_pic" :src="require(`@/assets/img/${event.CONTENT_PIC}`)" alt="">
                    <div class="tag tag-pink card-tag">{{event.CATEGORY}}</div>
                    <div class="card-line"></div>
                    <div class="">
                        <h3 class="card-title">{{event.TITLE}}</h3>

                        <h5 class="card-date">活動日期：<span>{{event.START_DATE}}</span></h5>
                        <h3 class="card-price">{{event.PRICE}}元</h3>
                        <a class="card-link" href="#/activity_info"><h5> 活動詳情<i class="bi bi-arrow-right"></i></h5></a>
                    </div>
    </div>
</template>

<script>



export default {
    data(){
                return {
                    
                    events: [{
        "BANNER": 0,
        "CATEGORY": "藝文",
        "CONTENT": "跟里長一起看電影",
        "CONTENT_PIC": "e1_calligraphy.png",
        "END_DATE": "2023-06-30",
        "END_TIME": "23:59:59",
        "ID": 1,
        "LOCATION": "里長家",
        "MAX_PPL": 60,
        "PRICE": 300,
        "REG_END": "2023-02-20",
        "REG_START": "2023-02-01",
        "START_DATE": "2023-03-01",
        "START_TIME": "00:00:01",
        "TITLE": "新春書法體驗課"
    },
    {
        "BANNER": 0,
        "CATEGORY": "藝文",
        "CONTENT": "跟里長一起做瑜伽",
        "CONTENT_PIC": "e3_doctor.png",
        "END_DATE": "2023-06-30",
        "END_TIME": "23:59:59",
        "ID": 1,
        "LOCATION": "里長家",
        "MAX_PPL": 10,
        "PRICE": 300,
        "REG_END": "2023-02-20",
        "REG_START": "2023-02-01",
        "START_DATE": "2023-03-01",
        "START_TIME": "00:00:01",
        "TITLE": "新春瑜伽體驗課"
    },
    {
        "BANNER": 0,
        "CATEGORY": "藝文",
        "CONTENT": "跟里長一起去爬山",
        "CONTENT_PIC": "default.jpg",
        "END_DATE": "2023-06-30",
        "END_TIME": "23:59:59",
        "ID": 1,
        "LOCATION": "里長後山",
        "MAX_PPL": 50,
        "PRICE": 300,
        "REG_END": "2023-02-20",
        "REG_START": "2023-02-01",
        "START_DATE": "2023-03-01",
        "START_TIME": "00:00:01",
        "TITLE": "新春爬山"
    }],
                }
            },
            methods: {
                
            },
            mounted() {
                //axios
                //axios.get('event.json').then(res => this.events = res.data) 
                // axios.get('PHP/activity.json').then(res => this.events = res.data) 
                // axios.get('PHP/activity.json').then((res) => {
                //     console.log(res.data)
                // })

            },
}
</script> -->