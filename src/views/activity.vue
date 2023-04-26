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
            <button class="tag tag-round tag-main tag-btn tag-btn-selected">全部</button>
            <button class="tag tag-round tag-sky tag-btn ">旅遊</button>
            <button class="tag tag-round tag-yellow tag-btn ">健康</button>
            <button class="tag tag-round tag-pink tag-btn">藝文</button>
            <button class="tag tag-round tag-orange tag-btn ">其他</button>
        </div>
        <div class="mobile-filter">
            <label for="chattype" class="f-label">分類</label>
            <select name="" id="chattype" class="f-select">
                <option value="">全部活動</option>
                <option value="旅遊">旅遊</option>
                <option value="健康">健康</option>
                <option value="藝文">藝文</option>
                <option value="其他">其他</option>
            </select>
        </div>

        <!-- =========== 原 HTML card =========== -->
    
        <!-- <div class="card" v-for="event in events">

            <img class="image event_pic" src="{{event.contentPic}}" alt="">
            <div class="tag tag-pink card-tag">{{event.category}}</div>
            <div class="card-line"></div>
            <div class="">
                    <h3 class="card-title">{{event.title}}</h3> -->
                <!-- <div class="card-person">
                    <div class="image user_pic">
                        <img src="./img/user_pic.png" alt="">
                    </div>
                    <p>Emma</p>
                </div> -->
            
                <!-- <p class="card-content">櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺</p> -->
                <!-- <h5 class="card-date">活動日期：<span>{{event.startDate}}</span></h5>
                <h3 class="card-price">{{event.price}}</h3>
                <a class="card-link" href="#/activity_info"><h5> 活動詳情<i class="bi bi-arrow-right"></i></h5></a>
            </div>
        </div> -->
        
        <!-- =========== Vue HTML card =========== -->
        <!-- <div id="app" class="activity_content"> -->
        <div>   
            <eventCard></eventCard>
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

    components:{
        eventCard,
        navbar,
        Footer,
        smartbar
    },

     
}
</script>