<template>
    <!-- <div class="swiper-slide" v-for="eventCard in eventCards">
        <div class="card">
            <a href="{{eventCard.URL}}">
                <img :src="require(`@/assets/img/${eventCard.CONTENT_PIC}`)" alt="" class="image event_pic">
            </a>
            <div :class="['tag','card-tag', addTagClass(eventCard.CATEGORY)]"></div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">{{eventCard.TITLE}}</h3>
              <h5 class="card-date">活動日期：<span>{{eventCard.START_DATE}}</span></h5>
              <h3 class="card-price">NT{{eventCard.PRICE}}</h3>
              <a class="card-link" href="{{eventCard.URL}}"
                ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
        </div> -->
        <swiper-slide v-for="eventCard in eventCards">
            <div class="card">
                <a href="{{eventCard.URL}}">
                    <img :src="require(`@/assets/img/${eventCard.CONTENT_PIC}`)" alt="" class="image event_pic">
                </a>
                <div :class="['tag','card-tag', addTagClass(eventCard.CATEGORY)]"></div>
                <div class="card-line"></div>
                <div class="">
                <h3 class="card-title">{{eventCard.TITLE}}</h3>
                <h5 class="card-date">活動日期：<span>{{eventCard.START_DATE}}</span></h5>
                <h3 class="card-price">NT{{eventCard.PRICE}}</h3>
                <a class="card-link" href="{{eventCard.URL}}"
                    ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
                ></a>
                </div>
            </div>

            <slot></slot>
    </swiper-slide>

</template>

<!-- <swiper-slide>
    <div class="card">
      <a href="{{eventCard.URL}}">
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
        <a class="card-link" href="{{eventCard.URL}}"
          ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
        ></a>
      </div>
    </div>
  </swiper-slide> -->

<script>
export default {
  data() {
    return {
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
          URL:"#/activity_info",
        },
      ],
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
  },
  mounted() {
    //axios
    //axios.get('event.json').then(res => this.events = res.data)
    // axios.get('PHP/activity.json').then(res => this.events = res.data)
    // axios.get('PHP/activity.json').then((res) => {
    //     console.log(res.data)
    // })
  },
};
</script>
