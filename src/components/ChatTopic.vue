<template >
    <article class="chat-article" v-for="(chatTopic, index) in chatTopics" :key="index">
          <section>
            <section class="chat_news ">
              <div class="chat_info">
                <div :class="['tag', 'tag-mini', addClass(chatTopic.CATEGORY)]">{{ chatTopic.CATEGORY }}</div>
                <h5 class="post_d">{{ getFormatDate(chatTopic.CREATE_TIME) }}</h5>
                <div class="poster">
                  <div class="image user_pic">
                    <img :src="chatTopic.PORTRAIT" alt="">
                  </div>
                  <h5 class="poster_name">{{ chatTopic.NICKNAME }}</h5>
                </div>
    
              </div>
    
              <h2><router-link :to="{ name: 'chat_info', params: { Id: chatTopic.ID } }">{{ chatTopic.TITLE }}</router-link></h2>
              <!-- <h2>{{ chatTopic.TITLE }}</h2> -->
              <p>{{ chatTopic.TEXT }}</p>
            </section>
            <div class="image list_pic">
              <img :src="chatTopic.PIC" alt="">
            </div>
          </section>
        </article>
                
    </template>
    
    <script>
    import { formatDate } from "../plugin/date";
    export default {
        
        data(){
            return {
                
              chatTopics: [],
                
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
              getFormatDate(val) {
                return formatDate(val);
                },
        },
               
     mounted() {
        axios
          .get("http://localhost/TGD104G1/public/API/chatlist.php")
          .then((response) => {
            const data = response.data;
            // console.log(response.data);
    
            this.chatTopics = data;
          })
          .catch((error) => {
            console.error(error);
          });
      },
    }
    </script>