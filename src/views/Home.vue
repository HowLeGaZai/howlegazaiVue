<template>
  <navbar :isLoggedIn="isLoggedIn"></navbar>
  <main class="home">
    <!-- 村里封面照片 -->
    <section class="home-cover">
      <div class="image home_banner">
        <img src="../assets/img/home_banner.jpg" alt="" />
        <div class="villagename"><h1>花蓮縣 緯育里</h1></div>
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
          <NewsListHome v-for="i in 5" :key="i"></NewsListHome>
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
        <template v-for="i in 9" :key="i">
          <swiper-slide v-for="eventCard in eventCards">
            <div class="card">
              <a href="#">
                <img
                  :src="require(`@/assets/img/${eventCard.CONTENT_PIC}`)"
                  alt=""
                  class="image event_pic"
                />
              </a>
              <div
                :class="['tag', 'card-tag', addTagClass(eventCard.CATEGORY)]"
              ></div>
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
        <ChatTopic v-for="i in 5" :key="i"></ChatTopic>
      </div>
      <div class="more-text">
        <router-link :to="{ name: 'chat' }">
          <i class="bi bi-plus"></i>看更多<i class="bi bi-plus"></i>
        </router-link>
      </div>
    </section>

    <!-- 團購區 -->
    <!-- <section class="home-product">
      <h1 class="title_space">團購區</h1> -->

    <!-- Swiper -->
    <!-- <swiper
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
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
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
    </section> -->

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
          <div class="smart_center">里民服務</div>
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
      isLoggedIn: false,
      eventCards: [
        {
          BANNER: 0,
          CATEGORY: "藝文",
          CONTENT: "跟里長一起看電影",
          CONTENT_PIC: "e1_calligraphy.png",
          END_DATE: "2023-06-30",
          END_TIME: "23:59:59",
          ID: 1,
          LOCATION: "里長家",
          MAX_PPL: 60,
          PRICE: 300,
          REG_END: "2023-02-20",
          REG_START: "2023-02-01",
          START_DATE: "2023-03-01",
          START_TIME: "00:00:01",
          TITLE: "新春書法體驗課",
          URL: "#/activity_info",
        },
        {
          BANNER: 0,
          CATEGORY: "藝文",
          CONTENT: "跟里長一起看電影",
          CONTENT_PIC: "e1_calligraphy.png",
          END_DATE: "2023-06-30",
          END_TIME: "23:59:59",
          ID: 1,
          LOCATION: "里長家",
          MAX_PPL: 60,
          PRICE: 300,
          REG_END: "2023-02-20",
          REG_START: "2023-02-01",
          START_DATE: "2023-03-01",
          START_TIME: "00:00:01",
          TITLE: "游泳課體驗課",
          URL: "#/activity_info",
        },
      ],
    };
  },
  beforeCreate() {
    axios.post('http://localhost/howlegazaiVue/public/API/checklogin.php')
      .then(response => {
        console.log(response.data);
        // this.isLoggedIn = JSON.parse(response.data.isLoggedIn); // 根據後端回應更新isLoggedIn的值
        // console.log(response.data);
      })
      .catch(error => {
        console.error(error);
      });
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
  },
  
  mounted() {},
};
</script>
