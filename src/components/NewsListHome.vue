<template>
  <tr v-for="newsHome in jsonNews">
    
  
    <td>
      <div :class="['tag', addTagClass(newsHome.CATEGORY)]">{{ newsHome.CATEGORY }}
      </div>
      <router-link :to="{ name: 'news_info', params: { Id: newsHome.ROUTER_ID }}" > <span>{{new Date(newsHome.CREATE_TIME).toLocaleDateString()}}</span>
      {{ newsHome.TITLE }}  </router-link>
    </td>
    <td>{{new Date(newsHome.CREATE_TIME).toLocaleDateString()}}</td>

  </tr>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      jsonNews: [],
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
  created() {
    axios
      .post('http://localhost/TGD104G1/public/API/index_news.php',{})
      .then(response => {
        this.jsonNews = response.data;
      })
      .catch(error => {
        console.log(error);
      });
  },
};
</script>
