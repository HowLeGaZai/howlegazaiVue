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
            ><span>（第一）</span>{{mainphone}}</a
          >
          <a href="tel:+886-912345678" target="_blank"
            ><span>（第二）</span>{{ secphone }}</a
          >
        </li>

        <li class="email">
          <i class="bi bi-envelope-fill"></i>
          <h2>里辦信箱</h2>
          <p>
            <a href="mailto:abcd@gmail.com" target="_blank">{{ email }}</a>
          </p>
        </li>

        <li class="address">
          <i class="bi bi-geo-alt-fill"></i>
          <h2>里辦地址</h2>
          <p>
            <a
              target="_blank"
              >{{ adress }}</a
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
          <h3>{{ fullname }}</h3>
          <ul>
            <li>性別：<span>{{ gender }}</span></li>
            <li>選舉屆次：<span>{{ electionyear }}</span></li>
            <li>學歷：<span>{{ degree }}</span></li>
          </ul>
          <div>
           {{autobiography}}
          </div>
        </div>
        <div class="image contact_pic_chief">
          <img :src="pic1" alt="" />
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
              <img :src="pic2" alt="" />
            </div>
            <h2>{{ title1 }}</h2>
            <div class="summary">
              {{ content1 }}
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div>
            <div class="image contact_pic_banner">
              <img :src="pic3" alt="" />
            </div>
            <h2>{{ title2 }}</h2>
            <div class="summary">
              {{ content2 }}
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div>
            <div class="image contact_pic_banner">
              <img :src="pic4" alt="" />
            </div>
            <h2>{{ title3 }}</h2>
            <div class="summary">
              {{ content3 }}
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
              >{{ question1 }}<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content">
              {{ answer1 }}
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad2" name="radio" />
            <label class="collapsible-item-label" for="rad2"
              >{{ question2 }}<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content">
              {{ answer2 }}
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad3" name="radio" />
            <label class="collapsible-item-label" for="rad3"
              >{{ question3 }}<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content" id="collapsible-item-content">
              {{ answer3 }}
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad4" name="radio" />
            <label class="collapsible-item-label" for="rad4"
              >{{ question4 }}<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content" id="collapsible-item-content">
              {{ answer4 }}
            </div>
          </div>
        </div>

        <div class="collapsible-accordion">
          <div class="collapsible-item">
            <input type="radio" id="rad5" name="radio" />
            <label class="collapsible-item-label" for="rad5"
              >{{ question5 }}<i
                class="bi bi-caret-down-fill"
              ></i
            ></label>
            <div class="collapsible-item-content">
              {{ answer5 }}
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
  data() {
    return {
      fullname : '',
      mainphone : '',
      email : '',
      secphone : '',
      electionyear : '',
      degree : '',
      adress : '',
      pic1 : '',
      gender : '',
      autobiography : '',

      //特色輪播
      pic2 : '',
      title1 : '',
      title2 : '',
      title3 : '',
      pic3 : '',
      pic4 : '',
      content1 : '',
      content2 : '',
      content3 : '',
      //QA 問答
      question1 : '',
      question2 : '',
      question3 : '',
      question4 : '',
      question5 : '',
      answer1 : '',
      answer2 : '',
      answer3 : '',
      answer4 : '',
      answer5 : '',
    }
  },
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
  methods: {

    // 上半段資訊
    webInfo(){
      
      this.fullname = this.jsonData[this.jsonData.length-1].FULLNAME ;
      // console.log(this.fullname);
      this.email = this.jsonData[this.jsonData.length-1].EMAIL ;
      // console.log(this.email);
      this.mainphone = this.jsonData[this.jsonData.length-1].MAINPHONE ;
      this.secphone = this.jsonData[this.jsonData.length-1].SECPHONE ;
      this.electionyear = this.jsonData[this.jsonData.length-1].ELECTIONYEAR ;
      this.degree = this.jsonData[this.jsonData.length-1].DEGREE ;
      this.adress = this.jsonData[this.jsonData.length-1].ADDRESS ;
      this.pic1 = this.jsonData[this.jsonData.length-1].PORTRAIT ;
      this.gender = this.jsonData[this.jsonData.length-1].GENDER ;
      this.autobiography = this.jsonData[this.jsonData.length-1].AUTOBIOGRAPHY ;

    },

    // 特色輪播
    webSwiper(){
      this.title1 = this.jsonData[this.jsonData.length-1].FEATURE_TITLE_1 ;
      console.log(this.title1)
      this.title2 = this.jsonData[this.jsonData.length-1].FEATURE_TITLE_2 ;
      this.title3 = this.jsonData[this.jsonData.length-1].FEATURE_TITLE_3 ;
      this.content1 = this.jsonData[this.jsonData.length-1].FEATURE_CONTENT_1 ;
      this.content2 = this.jsonData[this.jsonData.length-1].FEATURE_CONTENT_2 ;
      this.content3 = this.jsonData[this.jsonData.length-1].FEATURE_CONTENT_3 ;
      this.pic2 = this.jsonData[this.jsonData.length-1].PIC1 ;
      this.pic3 = this.jsonData[this.jsonData.length-1].PIC2 ;
      this.pic4 = this.jsonData[this.jsonData.length-1].PIC3 ;
    },

    // QA 問答
    webQA(){
      this.question1 = this.jsonData[this.jsonData.length-1].QUESTION_1 ;
      this.question2 = this.jsonData[this.jsonData.length-1].QUESTION_2 ;
      this.question3 = this.jsonData[this.jsonData.length-1].QUESTION_3 ;
      this.question4 = this.jsonData[this.jsonData.length-1].QUESTION_4 ;
      this.question5 = this.jsonData[this.jsonData.length-1].QUESTION_5 ;
      this.answer1 = this.jsonData[this.jsonData.length-1].ANSWER_1 ;
      this.answer2 = this.jsonData[this.jsonData.length-1].ANSWER_2 ;
      this.answer3 = this.jsonData[this.jsonData.length-1].ANSWER_3 ;
      this.answer4 = this.jsonData[this.jsonData.length-1].ANSWER_4 ;
      this.answer5 = this.jsonData[this.jsonData.length-1].ANSWER_5 ;
    },
  },
  mounted() {
    //上半部資訊 axios
    axios
        .post('http://localhost/TGD104G1/public/API/Connection.php',{})
        .then(response => {
            this.jsonData = response.data;
            // alert(response.data)
            // console.log(this.jsonData[this.jsonData.length-1].FULLNAME);
            this.webInfo();
            // console.log(this.jsonData.length);
            // console.log(this.jsonData);
        })
        .catch(error => {
            // console.log(error);
        });
    //中半部輪播 axios
        axios
        .post('http://localhost/TGD104G1/public/API/feature.php',{})
        .then(response => {
            this.jsonData = response.data;
            // alert(response.data)
            // console.log(this.jsonData[this.jsonData.length-1].FULLNAME);
            this.webSwiper();
            // console.log(this.jsonData.length);
            // console.log(this.jsonData);
        })
        .catch(error => {
            // console.log(error);
        });

    // 下半部輪播 axios     
        axios
            .post('http://localhost/TGD104G1/public/API/QAdata.php',{})
            .then(response => {
                this.jsonData = response.data;
                // alert(response.data)
                // console.log(this.jsonData[this.jsonData.length-1].FULLNAME);
                this.webQA();
                // console.log(this.jsonData.length);
                // console.log(this.jsonData);
            })
            .catch(error => {
                // console.log(error);
            });


      

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
