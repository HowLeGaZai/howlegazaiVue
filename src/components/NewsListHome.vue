<template>
  <tr v-for="newsHome in jsonData">
    <td>
      <div :class="['tag', addTagClass(newsHome.CATEGORY)]">{{ newsHome.CATEGORY }}
      </div>
      <span>{{ newsHome.CREATE_TIME }}</span>
      <a href="/news_info">{{ newsHome.TITLE }}</a>
    </td>
    <td>{{ newsHome.CREATE_TIME }}</td>
  </tr>
</template>

<script>
export default {
  props: {

  },
  data() {
    return {
      newsHomes: 
        {
          CATEGORY: "",
          CREATE_TIME: "",
          TITLE: "",
        },
      
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
    axios
        .post('http://localhost/TGD104G1/public/API/index_news.php',{})
        .then(response => {
            this.jsonData = response.data;
            // alert(response.data)
            // console.log(this.jsonData[this.jsonData.length-1].CITY);
        
            // console.log(this.jsonData.length);
            // console.log(this.jsonData);
        })
        .catch(error => {
            // console.log(error);
        });
  },
};
</script>
