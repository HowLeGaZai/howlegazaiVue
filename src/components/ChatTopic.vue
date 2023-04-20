<template >
    <article class="chat-article" v-for="(chatTopic,index) in chatTopics" :key="index">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                    <div :class="['tag', 'tag-mini', addClass(chatTopic.CATEGORY)]">{{chatTopic.CATEGORY}}</div>
                    <h5 class="post_d">{{chatTopic.CREATE_TIME}}</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img :src="require(`@/assets/img/${chatTopic.PORTRAIT}`)" alt="">
                      </div>
                      <h5 class="poster_name">{{chatTopic.NICKNAME}}</h5>
                    </div>
                   
                  </div>
                  
                  <!-- <h2><router-link :to="{name:'chat_info'}">{{chatTopic.TITLE}}</router-link></h2> -->
                  <h2>{{chatTopic.TITLE}}</h2>
                  <p>{{chatTopic.CONTENT}}</p>
              </section>
              <div class="image list_pic">
                  <img :src="require(`@/assets/img/${chatTopic.PIC}`)" alt="">
              </div>
          </section>
        </article> 
            
</template>

<script>

export default {
    data(){
        return {
            
          chatTopics: [
            {
                "ID": 123,
                "CATEGORY": "美食討論",
                "TITLE": "最近吃到大湖里超好吃飯糰",
                "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
                "PIC": "c_1_food.jpg",
                "CREATE_TIME": "2023-04-05",

                "USER_ID": 56677,
                "PORTRAIT": "user_pic6.png",
                "NICKNAME": "櫻桃爺爺",

                "COMMENT_ID": "",
                "COMMENT_TIME": "",
                "STATUS": "",
            },
            //  {
            //     "ID": 123,
            //     "CATEGORY": "美食討論",
            //     "TITLE": "最近吃到大湖里超好吃飯糰",
            //     "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-05",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic6.png",
            //     "NICKNAME": "櫻桃爺爺",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            //  {
            //     "ID": 456,
            //     "CATEGORY": "二手交易",
            //     "TITLE": "想轉賣飯糰",
            //     "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-05",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic3.png",
            //     "NICKNAME": "櫻桃",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            //  {
            //     "ID": 123,
            //     "CATEGORY": "其他",
            //     "TITLE": "想找桃太郎飯糰",
            //     "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-01",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic.png",
            //     "NICKNAME": "櫻桃小姐",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            // {
            //     "ID": 123,
            //     "CATEGORY": "我要抱怨",
            //     "TITLE": "巷口有人亂丟飯糰",
            //     "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-01",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic5.png",
            //     "NICKNAME": "櫻桃媽",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            //  {
            //     "ID": 123,
            //     "CATEGORY": "美食討論",
            //     "TITLE": "最近吃到大湖里超好吃飯糰",
            //     "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-05",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic6.png",
            //     "NICKNAME": "櫻桃爺爺",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            // {
            //     "ID": 123,
            //     "CATEGORY": "美食討論",
            //     "TITLE": "最近吃到大湖里超好吃飯糰",
            //     "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-05",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic6.png",
            //     "NICKNAME": "櫻桃爺爺",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            // {
            //     "ID": 123,
            //     "CATEGORY": "我要抱怨",
            //     "TITLE": "桃太郎飯糰根本就沒有用",
            //     "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-01",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic5.png",
            //     "NICKNAME": "櫻桃媽",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            //  {
            //     "ID": 123,
            //     "CATEGORY": "里民閒聊",
            //     "TITLE": "為什麼大家一直在討論飯糰",
            //     "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-24",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic3.png",
            //     "NICKNAME": "櫻桃子",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            //  {
            //     "ID": 123,
            //     "CATEGORY": "美食討論",
            //     "TITLE": "最近吃到大湖里超好吃飯糰",
            //     "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-05",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic6.png",
            //     "NICKNAME": "櫻桃爺爺",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            //  {
            //     "ID": 123,
            //     "CATEGORY": "美食討論",
            //     "TITLE": "最近吃到大湖里超好吃飯糰",
            //     "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-05",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic6.png",
            //     "NICKNAME": "櫻桃爺爺",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            //   {
            //     "ID": 123,
            //     "CATEGORY": "團購討論",
            //     "TITLE": "為什麼為什麼為什麼為什麼為什麼",
            //     "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
            //     "PIC": "c_1_food.jpg",
            //     "CREATE_TIME": "2023-04-24",

            //     "USER_ID": 56677,
            //     "PORTRAIT": "user_pic3.png",
            //     "NICKNAME": "櫻桃子",

            //     "COMMENT_ID": "",
            //     "COMMENT_TIME": "",
            //     "STATUS": "",
            // },
            ],
            
        }
    },
    methods: {
        addClass(i){
            switch(i){
                case "美食討論":
                    return "tag-pink";
                case "二手交易":
                    return "tag-orange";
                case "里民閒聊":
                    return "tag-blue";
                case "團購討論":
                    return "tag-sky";
                case "我要抱怨":
                    return "tag-green";
                case "其他":
                    return "tag-yellow";
            }
        },
    },
           
    mounted() {
    },
}
</script>