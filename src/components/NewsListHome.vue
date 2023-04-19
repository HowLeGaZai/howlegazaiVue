<template>
  <tr v-for="newsHome in newsHomes">
    <td>
      <div :class="['tag', addTagClass(newsHome.CATEGORY)]">
        {{ newsHome.CATEGORY }}
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
      newsHomes: [
        {
          CATEGORY: "公告",
          CREATE_TIME: "2023-03-02",
          TITLE: "清明期間 大湖里第一公墓管制出入",
        },
        // {
        //   CATEGORY: "宣導",
        //   CREATE_TIME: "2023-03-11",
        //   TITLE: "大湖里反詐騙宣導：為避免輕易上當，請撥165反詐騙電話",
        // },
        // {
        //   CATEGORY: "里民服務",
        //   CREATE_TIME: "2023-03-11",
        //   TITLE: "清明期間 大湖里第二公墓管制出入",
        // },
        // {
        //   CATEGORY: "新聞分享",
        //   CREATE_TIME: "2023-03-11",
        //   TITLE: "清明期間 大湖里第二公墓管制出入",
        // },
        // {
        //   CATEGORY: "會議記錄",
        //   CREATE_TIME: "2023-03-11",
        //   TITLE: "清明期間 大湖里第二公墓管制出入",
        // },
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
  mounted() {},
};
</script>
