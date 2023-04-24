<template>
  <navbar></navbar>
  <main class="home">
    <!-- 村里封面照片 -->
    <section class="home-cover">
      <div class="image home_banner">
        <!-- <img src="../assets/img/home_banner.jpg" alt="" /> -->
        <img :src="homeBanner" alt="" />

        <div class="villagename">
          <!-- <h1>花蓮縣 緯育里</h1> -->
          <h1>{{city}} {{town}}</h1>
          </div>
      </div>
    </section>

    <!-- 最新消息 -->
    
    <section class="home-news">
      <h1 class="title_space">最新消息</h1>
      <table>
        <thead>
          <tr>
            <th>標題</th>
            <th>發布日期</th>
          </tr>
        </thead>
        <tbody>
          <!-- 渲染 5 次 -->
          <NewsListHome   v-for="i in 1" :key="i">
          {{ newsHomes.CATEGORY }}
        </NewsListHome>
        </tbody>
      </table>
    </section>

    <!-- 活動 -->
    <section class="home-event">
      <h1 class="title_space">活動資訊</h1>

      <swiper
        :navigation="{
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }"
        :modules="modules"
        class="mySwiper"
        :slidesPerView="3"
        :spaceBetween="10"
        :pagination="{
          clickable: true,
        }"
        :breakpoints="{
          360: { slidesPerView: 1, spaceBetween: 0 },
          900: { slidesPerView: 2, spaceBetween: 5 },
          1280: { slidesPerView: 3, spaceBetween: 10 },
        }"
      >
        <!-- 渲染 9 次 swiper-slide -->
        <template v-for="i in 1" :key="i">
          <swiper-slide v-for="eventCard in jsonData">
            <div class="card">
              <a href="#">
                <img
                  :src="eventCard.BANNER"
                  alt=""
                  class="image event_pic"
                />
              </a>
              <!-- <div
                :class="['tag', 'card-tag', addTagClass(eventCard.CATEGORY)]"
              ></div> -->
              <div class="card-line"></div>
              <div class="">
                <h3 class="card-title">{{ eventCard.TITLE }}</h3>
                <h5 class="card-date">
                  活動日期：<span>{{ eventCard.START_DATE }}</span>
                </h5>
                <h3 class="card-price">NT{{ eventCard.PRICE }}</h3>
                <a class="card-link" href="#"
                  ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
                ></a>
              </div>
            </div>
          </swiper-slide>
        </template>

      </swiper>

      <div class="swiper-button">
        <button
          type="button"
          class="btn-cir-m btn-color-white swiper-button-prev"
        >
          <i class="bi bi-caret-left-fill"></i>
        </button>
        <button
          type="button"
          class="btn-cir-m btn-color-green swiper-button-next"
        >
          <i class="bi bi-caret-right-fill"></i>
        </button>
      </div>
    </section>

    <!-- 討論區 -->
    <section class="home-chat">
      <h1 class="title_space">討論區</h1>
      <div class="chat">
        <!-- 渲染 5 次-->
        <ChatTopic></ChatTopic>
      </div>
      <div class="more-text">
        <router-link :to="{ name: 'chat' }">
          <i class="bi bi-plus"></i>看更多<i class="bi bi-plus"></i>
        </router-link>
      </div>
    </section>


    <!-- 智慧里民 -->
    <section class="home-smartChief">
      <h1 class="title_space">智慧里民</h1>

      <section>
        <div class="left">
          <div class="">
            <a class="btn-s btn-color-green" href="#/activity">活動報名</a>
          </div>
          <div>
            <a class="btn-s btn-color-green" href="#/space">空間預約</a>
          </div>
          <div>
            <a class="btn-s btn-color-green unopened">維修通報</a>
          </div>
        </div>
        <div class="galaxy">
          <div class="orbit">
            <div class="planet"></div>
          </div>
          <router-link :to="{ name: 'chat' }"><div class="smart_center">  里民服務</div></router-link>
        </div>
        <div class="right">
          <div>
            <a class="btn-s btn-color-green unopened">瓦斯錶回報</a>
          </div>
          <div>
            <a class="btn-s btn-color-green unopened">團購區</a>
          </div>
          <div>
            <a class="btn-s btn-color-green unopened">守望相助</a>
          </div>
        </div>
      </section>
    </section>
  </main>

  <Footer></Footer>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";

// import required modules
import axios from 'axios';
import { Navigation } from "swiper";
import navbar from "./navbar.vue";
import Footer from "./Footer.vue";
import NewsListHome from "../components/NewsListHome.vue";
import ChatTopic from "@/components/ChatTopic.vue";
// import axios from 'axios';

export default {
  components: {
    Swiper,
    SwiperSlide,
    navbar,
    Footer,
    NewsListHome,
    ChatTopic,
  },
 
  setup() {
    return {
      modules: [Navigation],
    };
  },
  data() {
    return {
      // isLoggedIn: false,
      // 這裡是活動輪播的data
      eventCards: [
        {
          Titlepic : '',
          PRICE: '',
          START_DATE: "",
          TITLE: "",
        },
      ],
      jsonData: [],
      jsonDataBanner: [],
      jsonChat: [],
      city:'',
      district:'',
      town:'',
      homeBanner:'',     
    };
  },

  methods: {
    addTagClass(i) {
      switch (i) {
        case "公告":
          return "tag-orange";
        case "宣導":
          return "tag-pink";
        case "里民服務":
          return "tag-yellow";
        case "新聞分享":
          return "tag-blue";
        case "會議記錄":
          return "tag-green";
        case "經費報告":
          return "tag-cyan";
      }
    },  
    webInfo(){
      
      this.city = this.jsonData[this.jsonData.length-1].CITY ;
      this.district = this.jsonData[this.jsonData.length-1].DISTRICT ;
      this.town = this.jsonData[this.jsonData.length-1].TOWN ;
      console.log(this.city);

    },
    banner(){
        this.homeBanner = this.jsonDataBanner[this.jsonDataBanner.length-1].BANNER;
        // console.log('123',this.jsonDataBanner);
        // console.log('123', this.jsonDataBanner);
    },
    banner1(){
        this.Titlepic = this.jsonData[this.jsonData.length-1].BANNER;
        this.PRICE = this.jsonData[this.jsonData.length-1].PRICE;
        this.START_DATE = this.jsonData[this.jsonData.length-1].START_DATE;
        this.TITLE = this.jsonData[this.jsonData.length-1].TITLE;
    },
    chat(){
        this.ID = this.jsonData[this.jsonData.length-1].ID;
        this.CATEGORY = this.jsonData[this.jsonData.length-1].CATEGORY;
        this.TITLE = this.jsonData[this.jsonData.length-1].TITLE;
        this.PIC = this.jsonData[this.jsonData.length-1].PIC;
        this.CREATE_TIME = this.jsonData[this.jsonData.length-1].CREATE_TIME;
        this.PORTRAIT = this.jsonData[this.jsonData.length-1].PORTRAIT;
        this.NICKNAME = this.jsonData[this.jsonData.length-1].NICKNAME;
    },
   
  },
  mounted() {
    // 這裡是 縣市里
     axios
        .post('http://localhost/TGD104G1/public/API/home.php',{})
        .then(response => {
            this.jsonData = response.data;
            // alert(response.data)
            // console.log(this.jsonData[this.jsonData.length-1].CITY);
            this.webInfo();
            // console.log(this.jsonData.length);
            // console.log(this.jsonData);
        })
        .catch(error => {
            // console.log(error);
        });

    // Banner
      axios
        .post('http://localhost/TGD104G1/public/API/homeBanner.php',{})
        .then(response => {
            this.jsonDataBanner = response.data;
            // alert(response.data)
            // console.log(this.jsonDataBanner[this.jsonDataBanner.length-1].BANNER);
            
            // console.log(this.jsonData.length);
            // console.log(this.jsonData);
        })
        .catch(error => {
            // console.log(error);
        });

      // 活動輪播
      axios
        .post('http://localhost/TGD104G1/public/API/index_activity.php',{})
        .then(response => {
          this.jsonData = response.data;
          this.banner1();
            // console.log(this.jsonDataBanner[this.jsonDataBanner.length-1].BANNER);
            
            // console.log(this.jsonData.length);
            // console.log(this.jsonData);
        })
        .catch(error => {
            // console.log(error);
        });
        // 討論區
      // axios
      //   .post('http://localhost/TGD104G1/public/API/chatlist.php',{})
      //   .then(response => {
      //     this.jsonChat = response.data;
      //     this.chat();
      //     // console.log(response.data)
      //       // console.log(this.jsonDataBanner[this.jsonDataBanner.length-1].BANNER);
            
      //       // console.log(this.jsonData.length);
      //       // console.log(this.jsonData);
      //   })
      //   .catch(error => {
      //       // console.log(error);
      //   });

        
  },
  watch:{
    jsonDataBanner(){
        this.banner();
    }
  }
};
</script>
