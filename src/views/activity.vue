<template>
    <navbar></navbar>
    <main class="activity_page">
        <div class="front-space">
            <div class="smart-bar">
                <div class="btn-member-block">
                    <button type="button" class="btn-member btn-color-green" onclick="location.href='#/activity'">
                        <i class="bi bi-calendar2-event-fill"></i>
                    </button>
                    <p class="btn-mem-p btn-font-color-green">活動總覽</p>
                </div>
                
                <div class="btn-member-block">
                    <button type="button" class="btn-member btn-color-gray">
                    <i class="bi bi-basket-fill"></i>
                    </button>
                    <p class="btn-mem-p btn-font-color-gray">團購</p>
                </div>
                
                <div class="btn-member-block">
                    <button type="button" class="btn-member btn-color-gray" onclick="location.href='#/space'">
                    <i class="bi bi-door-open-fill"></i>
                    </button>
                    <p class="btn-mem-p btn-font-color-gray">空間預約</p>
                </div>
                
                
                <div class="btn-member-block">
                    <button type="button" class="btn-member btn-color-gray ">
                    <i class="bi bi-fire"></i>
                    </button>
                    <p class="btn-mem-p btn-font-color-gray">瓦斯表回報</p>
                </div>
                
                <div class="btn-member-block">
                    <button type="button" class="btn-member btn-color-gray">
                    
                    <i class="bi bi-hammer"></i>
                    </button>
                    <p class="btn-mem-p btn-font-color-gray">維修通報</p>
                </div>
                
                
                <div class="btn-member-block">
                    <button type="button" class="btn-member btn-color-gray ">
                
                    <i class="bi bi-shield-fill-check"></i>
                    
                    </button>
                    <p class="btn-mem-p btn-font-color-gray">守望相助</p>
                </div>


            </div>
            <h1 class="title_space">活動總覽</h1>
            <h4>與里長 鬥陣氣頭</h4>
        </div>

        <div class="searchTool row">
            <div class="col-6 col-md-3 activity-toolbar">
                <label for="activity-dday" class="f-label">截止日期</label>
                <input type="date" class="f-text" id="activity-dday" style:="background-color:white" value="">
            </div>
            <div class="col-6 col-md-3 activity-toolbar">
                <label for="activity-price" class="f-label">價格</label>
                <!-- <input type="text" class="f-text" id="activity-price" placeholder="全部"> -->
                <select name="" id="activity-price" class="f-select">
                <option value="1">免費</option>
                <option value="2">1000以下</option>
                <option value="3">2000以下</option>
                <option value="4">5000以下</option>
            </select>
            </div>    
            
            <div class="col-12 col-md-6 ac-search-bar">
                <div class="search">
                    <input type="" class="f-text f-round" placeholder="&#xF52A" style="font-family:bootstrap-icons"/>
                    <button type="button" class="btn-m btn-color-green">搜尋</button>
                </div>
                <!-- <input type="" class="f-text f-round tag-round" placeholder="&#xF52A" style="font-family:bootstrap-icons">
                <button class="btn-s btn-color-green ">搜尋</button> -->
            </div> 
        </div>

        <!-- 分類 -->
        <div class="desktop-filter">
            <button class="tag tag-round tag-main tag-btn tag-btn-selected">全部</button>
            <button class="tag tag-round tag-sky tag-btn ">旅遊</button>
            <button class="tag tag-round tag-green tag-btn ">健康</button>
            <button class="tag tag-round tag-pink tag-btn">藝文</button>
            <button class="tag tag-round tag-orange tag-btn ">其他</button>
        </div>
        <div class="mobile-filter">
            <label for="chattype" class="f-label">分類</label>
            <select name="" id="chattype" class="f-select">
                <option value="1">旅遊</option>
                <option value="2">健康</option>
                <option value="3">藝文</option>
                <option value="4">其他</option>
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
         <div  class="activity_content">   
                <event-card></event-card>
            
        </div>
    </main>

    <!-- ---footer---- -->
    <footer>
        <div class="main">
            <!-- 後台頁尾的網址請各位記得修改，不然連不回首頁 -->
            <section class="footer-img">
                <a href="/index.html">
                    <img src="../assets/img/logo2.svg" alt="">
                </a>
                <h3>我們，一直都在</h3>
                <h5>TGD104 - Group1</h5>
            </section>
            <section class="statement">
                <p>
                    本網站為緯育TibaMe_前端工程師專業技術養成班第82期學員專題成果作品，本平台僅供學習、展示之用。
                    <br>
                    若有抵觸有關著作權，或有第三人主張侵害智慧財產權等情事，均由學員負法律上責任，緯育公司概不負責。
                    <br>
                    若有侵權疑慮，請私訊[緯育TibaMe]，後續會由專人協助處理。
                </p>
            </section>
        </div>
    </footer>

</template>

<script>

import EventCard from '../components/EventCard.vue';
import navbar from './navbar.vue';

export default {

    components:{
        EventCard,
        navbar,
    },

     
}
</script>