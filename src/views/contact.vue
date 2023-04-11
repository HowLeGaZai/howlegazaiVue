<template>
  <navbar></navbar>

  <main class="contact">
    <!-- 里辦聯絡資訊 -->
    <section class="office">
      <h1 class="title_space"><span>大湖里</span>聯絡資訊</h1>
      <ul>
        <li class="telephone">
          <i class="bi bi-telephone-fill"></i>
          <h2>里辦電話</h2>
          <a href="tel:+886-2-9111234" target="_blank"
            ><span>（第一）</span>(02) 2911-1234</a
          >
          <a href="tel:+886-912345678" target="_blank"
            ><span>（第二）</span>0912-345-678</a
          >
        </li>

        <li class="email">
          <i class="bi bi-envelope-fill"></i>
          <h2>里辦信箱</h2>
          <p>
            <a href="mailto:abcd@gmail.com" target="_blank">abcd@gmail.com</a>
          </p>
        </li>

        <li class="address">
          <i class="bi bi-geo-alt-fill"></i>
          <h2>里辦地址</h2>
          <p>
            <a
              href="https://www.google.com/search?q=花蓮縣國安鄉大湖里忠孝路12巷3號"
              target="_blank"
              >花蓮縣國安鄉大湖里忠孝路12巷3號</a
            >
          </p>
        </li>
      </ul>
    </section>

    <!-- 里長簡介 -->
    <section class="chef">
      <h1 class="title_space">里長簡介</h1>
      <section>
        <div class="content">
          <h3>鄭成功</h3>
          <ul>
            <li>性別：<span>111年大湖里村里長選舉</span></li>
            <li>選舉屆次：<span>男</span></li>
            <li>學歷：<span>大湖理工大學</span></li>
          </ul>
          <div>
            鄭成功，1912年3月4日出生於花蓮縣，鄭成功小時為棒球好手，曾為朴子少棒隊捕手。就讀朴子國小和東石國中，在畢業後，同時考取大湖理工大學資工系。雖然家人希望他從醫，但鄭成功看了《JavaScript》一書之後，希望成為排名第一的「邏輯」的碼農，期待學成返鄉後促成偏鄉數位轉型。
            於大湖理工大學資畢業後，就繼續進修，獲得大湖理工大學都市規劃、企業管理雙碩士學位，並獲取大湖理工大學土地規劃與都市管理博士學位
          </div>
        </div>
        <div class="image contact_pic_chief">
          <img src="../assets/img/c_chief1.jpg" alt="" />
        </div>
      </section>
    </section>

    <!-- 村里文化特色 -->
    <section class="village-introduce">
      <h1 class="title_space"><span>大湖里</span>文化特色</h1>
      <swiper
        :navigation="{
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }"
        :modules="modules"
        class="mySwiper"
        :pagination="{ clickable: true }"
      >
        <swiper-slide>
          <div>
            <div class="image contact_pic_banner">
              <img src="../assets/img/c_banner.png" alt="" />
            </div>
            <h2>文化</h2>
            <div class="summary">
              大湖里風光明媚，從昔日國會山莊所在的山頭，逐漸往五指山系這一帶綿延發展，成為新興住宅與舊系紅磚老宅混搭的社區
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div>
            <div class="image contact_pic_banner">
              <img src="../assets/img/c_banner.png" alt="" />
            </div>
            <h2>歷史</h2>
            <div class="summary">
              大湖里風光明媚，從昔日國會山莊所在的山頭，逐漸往五指山系這一帶綿延發展，成為新興住宅與舊系紅磚老宅混搭的社區
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div>
            <div class="image contact_pic_banner">
              <img src="../assets/img/c_banner.png" alt="" />
            </div>
            <h2>文化資產</h2>
            <div class="summary">
              大湖里風光明媚，從昔日國會山莊所在的山頭，逐漸往五指山系這一帶綿延發展，成為新興住宅與舊系紅磚老宅混搭的社區
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
    </section>

    <!-- 常見問題 -->
    <section class="faq">
      <h1 class="title_space">常見問題</h1>
      <section>
        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad1" name="radio" />
            <label class="collapsible-item-label" for="rad1"
              >花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content">
              大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad2" name="radio" />
            <label class="collapsible-item-label" for="rad2"
              >花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content">
              大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad3" name="radio" />
            <label class="collapsible-item-label" for="rad3"
              >花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content" id="collapsible-item-content">
              大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad4" name="radio" />
            <label class="collapsible-item-label" for="rad4"
              >花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content" id="collapsible-item-content">
              大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad5" name="radio" />
            <label class="collapsible-item-label" for="rad5"
              >花蓮縣大湖里跟苗栗大湖一樣有產草莓嗎？<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content">
              大湖里有美男里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！美女里長，好山好水好無聊！
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>
  <Footer></Footer>
</template>

<script>
// import required modules
import navbar from './navbar.vue';
import Footer from './Footer.vue';
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import { Navigation } from "swiper";

export default {
  components: {
    Footer,
    navbar,
    Swiper,
      SwiperSlide,
  },
  setup() {
    return {
 modules: [Navigation],
    };
  },
  mounted() {
      let labels = document.querySelectorAll('.collapsible-item-label');
      let contents = document.querySelectorAll('.collapsible-item-content');

      labels.forEach((label, index) => {
          label.addEventListener('click', () => {

              // 檢查是否已經打開
              let isOpen = label.classList.contains('open-item-label');
              let content = contents[index];
              let isContentOpen = content.classList.contains('open-item-content');

              // 移除所有元素上已經打開的樣式
              labels.forEach(label => label.classList.remove('open-item-label'));
              contents.forEach(content => content.classList.remove('open-item-content'));

              // 添加或移除打開的樣式
              if (!isOpen && !isContentOpen) {
                label.classList.add('open-item-label');
                content.classList.add('open-item-content');
              }
          });
      });
  },
};
</script>
