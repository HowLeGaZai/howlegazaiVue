<template>
    <div class="card" v-for='(event,index) in jsonData' :key="index">
        <!-- <img class="image event_pic" src="../assets/img/e1_calligraphy.png" alt=""> -->
        <img class="image event_pic" :src="require(`@/assets/img/${event.CONTENT_PIC}`)" alt="">
        <div class="tag tag-pink card-tag">{{index}}:{{event.CATEGORY}}</div>
        <div class="card-line"></div>
        <div class="">
            <h3 class="card-title">{{event.TITLE}}</h3>

            <h5 class="card-date">活動日期：<span>{{event.START_DATE}}</span></h5>
            <h3 class="card-price">{{event.PRICE}}元</h3>
            <a class="card-link" href="#/activity_info"><h5> 活動詳情<i class="bi bi-arrow-right"></i></h5></a>
        </div>        
    </div>   
</template>

<template>
        <div v-if="jsonData" class="activity_content">            
            <div class="card" v-for='(activity,index) in jsonData' :key="index">
                <!-- <img class="image event_pic" :src="jsonData.CONTENT_PIC" alt=""> -->
                <img class="image event_pic" :src="require(`@/assets/img/${activity.CONTENT_PIC}`)" alt="">
                <div class="tag tag-pink card-tag">{{activity.CATEGORY}}</div>
                <div class="card-line"></div>
                <div class="">
                    <h3 class="card-title">{{activity.TITLE}}</h3>

                    <h5 class="card-date">活動日期：<span>{{activity.START_DATE}}</span></h5>
                    <h3 class="card-price">{{activity.PRICE}}元</h3>
                    <a class="card-link" href="#/activity_info"><h5> 活動詳情<i class="bi bi-arrow-right"></i></h5></a>
                </div>
            </div>
        </div>
        <div v-else>
            <p>Loading...</p>
        </div>

</template>

<script>

import axios from 'axios';

export default {
    data() {
        return {
        jsonData: null
        }
    },
    mounted() {
        axios
        .get('/activity.json')
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });
    }
}
</script>