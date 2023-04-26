<template>
    <navbar></navbar>
    <main class="activity_page">
        <div class="front-space">
            <smartbar></smartbar>
            <h1 class="title_space">活動總覽</h1>
            <h4>與里長 鬥陣氣頭</h4>
        </div>
        <!-- <div class="searchTool row">
            <div class="col-6 col-md-3 activity-toolbar">
                <label for="activity-dday" class="f-label">截止日期</label>
                <input type="date" class="f-text" id="activity-dday" style:="background-color:white" value="">
            </div>
             <div class="col-6 col-md-3 activity-toolbar">
                <label for="activity-price" class="f-label">價格</label>
                <input type="text" class="f-text" id="activity-price" placeholder="全部">
                <select name="" id="activity-price" class="f-select">
                <option value="1">免費</option>
                <option value="2">1000以下</option>
                <option value="3">2000以下</option>
                <option value="4">5000以下</option>
            </select>
            </div> 
            
            <div class="col-12 col-md-6 ac-search-bar">
                <div class="search">
                    <input type="" class="f-text f-round" placeholder="&#xF52A;" style="font-family:bootstrap-icons"/>
                    <button type="button" class="btn-m btn-color-green">搜尋</button>
                </div>
                <input type="" class="f-text f-round tag-round" placeholder="&#xF52A" style="font-family:bootstrap-icons">
                <button class="btn-s btn-color-green ">搜尋</button>
            </div> 
        </div> -->

        <!-- 分類 -->
        <div class="desktop-filter">
            <button class="tag tag-round tag-main tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '全部活動'}"
            @click="selectedCategory = '全部活動'" value="">全部活動</button>
            <button class="tag tag-round tag-sky tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '旅遊'}"
            @click="selectedCategory = '旅遊'" value="旅遊">旅遊</button>
            <button class="tag tag-round tag-yellow tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '健康'}"
            @click="selectedCategory = '健康'" value="健康">健康</button>
            <button class="tag tag-round tag-pink tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '藝文' }"
            @click="selectedCategory = '藝文'" value="藝文">藝文</button>
            <button class="tag tag-round tag-orange tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '其他' }"
            @click="selectedCategory = '其他'" value="其他">其他</button>
        </div>
        <div class="mobile-filter">
            <label for="chattype" class="f-label">分類</label>
            <select name="" id="chattype" class="f-select" v-model="selectedCategory">
                <option value="">全部活動</option>
                <option value="旅遊">旅遊</option>
                <option value="健康">健康</option>
                <option value="藝文">藝文</option>
                <option value="其他">其他</option>
            </select>
        </div>
        <!-- =========== 原 HTML card =========== -->


        <div>
            <div class="activity_content">            
            <div class="card" v-for='(activity,index) in displayedTopics' :key="index">
          
                <img class="image event_pic" :src="activity.BANNER ? activity.BANNER :require(`@/assets/img/default.jpg`)">
                <div :class="['tag', 'card-tag','tag-round', addClass(activity.CATEGORY)]">{{ activity.CATEGORY }}</div>

                <div class="card-line"></div>
                <div class="">
                    <h3 class="card-title">{{activity.TITLE}}</h3>
                    <h5 class="card-date">活動日期：<span>{{activity.START_DATE}}</span></h5>
                    <h3 class="card-price">{{ activity.PRICE == 0 ? '免費' : activity.PRICE + "元" }}</h3>
                    <router-link class="card-link" :to="{ name: 'activity_info', params: { Id: activity.ROUTERID } }">
                        <h5> 活動詳情<i class="bi bi-arrow-right"></i></h5>
                    </router-link>
                    
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- ---footer---- -->
    <Footer></Footer>
</template>

<script>

import eventCard from '../components/EventCard.vue';
import navbar from '../components/navbar.vue';
import Footer from '../components/Footer.vue';
import smartbar from '@/components/smartbar.vue';

export default {

    components: {
        eventCard,
        navbar,
        Footer,
        smartbar
    },


    data() {
        return {
            activitydata: [],
            // activityTopics:[],
            selectedCategory: "全部活動",
            categories: [
                "全部活動",
                "旅遊",
                "健康",
                "藝文",
                "其他",
            ],
        }
    },

    methods: {
        addClass(category) {
            return {
                "tag-main": category === "全部活動",
                "tag-sky": category === "旅遊",
                "tag-yellow": category === "健康",
                "tag-pink": category === "藝文",
                "tag-orange": category === "其他",
            };
        },

    },

    computed: {
        displayedTopics() {
            if (this.selectedCategory === "全部活動") {
                //要return EventCard.vue裡的events 
                return this.activitydata;
                // return this.chatTopics;
            } else {
                return this.activitydata.filter(
                    (activitydata) => activitydata.CATEGORY === this.selectedCategory
                );
            }
        }
    },

    mounted() {
        axios
        .get('http://localhost/TGD104G1/public/API/activity.php')
        .then(response => {
            this.activitydata = response.data;
            console.log(this.activitydata);
        })
        .catch(error => {
            //console.log(error);
        });
    }



    

}

</script>