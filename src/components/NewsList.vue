<template>
    <a href="#">
      <article class="news_item">
        <section>
          <section class="article_news">
            <div class="tag tag-orange">{{news.CATEGORY}} 公告</div>
            <p class="rwd-newsdate">{{news.CREATE_TIME}} 2022-03-11</p>
            <h2>{{news.TITLE}}清明期間 大湖里第一公墓管制出入</h2>
            <h5>{{news.CREATE_TIME}}2022-01-01</h5>
          </section>
          <div class="image list_pic">
            <!-- <img :src="require(`../assets/img/${news.PIC}`)" alt=""> -->
          </div>
        </section>
      </article>
    </a>
</template>

<script>


export default {
    data(){
        return {                 
            news: [{
            "CATEGORY": "公告",
            "CREATE_TIME": "2023-03-02",
            "TITLE": "清明期間 大湖里第一公墓管制出入",
            "PIC": "c_1_food.jpg"
            }],
        }
            },
            methods: {
                
            },
            mounted() {
         
        

            },
}
</script>