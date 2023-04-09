<template>
  <a href="#" v-for="(news, index) in news" :key="index">
    <article class="news_item">
      <section>
        <section class="article_news">
          <!-- <div class="tag tag-orange">{{ news.CATEGORY }}</div> -->
          <div :class="['tag',addTagClass(news.CATEGORY)]">{{ news.CATEGORY }}</div>

          <p class="rwd-newsdate">{{ news.CREATE_TIME }}</p>
          <h2>{{ news.TITLE }}</h2>
          <h5>{{ news.CREATE_TIME }}</h5>
        </section>
        <div class="image list_pic">
          <img :src="require(`@/assets/img/${news.PIC}`)" alt="">
        </div>
      </section>
    </article>
  </a>
</template>

<script>



export default {
  data() {
    return {
      news: [
        {
          "CATEGORY": "公告",
          "CREATE_TIME": "2023-03-02",
          "TITLE": "清明期間 大湖里第一公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "宣導",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "大湖里反詐騙宣導：為避免輕易上當，請撥165反詐騙電話",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "里民服務",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "清明期間 大湖里第二公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "新聞分享",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "清明期間 大湖里第二公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
        {
          "CATEGORY": "會議記錄",
          "CREATE_TIME": "2023-03-11",
          "TITLE": "清明期間 大湖里第二公墓管制出入",
          "PIC": "c_1_food.jpg",
        },
      ],
    }
  },
  methods: {
    addTagClass(i){
      switch(i){
        case "公告": return "tag-orange";
        case "宣導": return "tag-pink";
        case "里民服務": return "tag-yellow";
        case "新聞分享": return "tag-blue";
        case "會議記錄": return "tag-green";

      }
    }

  },
  mounted() {



  },
}
</script>