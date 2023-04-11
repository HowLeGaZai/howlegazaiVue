<template>
    <div class="comment-list">
        <div class="chat-commit" v-for="(comment,index) in jsonData" :key="index">
        <div class="chat-commit-title"> 
            <div class="image user_pic"> 
                <img class="image event_pic" :src="require(`@/assets/img/${comment.USER_PORTRAIT}`)" alt="">
            </div>
            <h5 class="commit-user">{{comment.USER_NICKNAME}}</h5>
            <h5 class="commit-date">{{comment.CREATE_TIME}}</h5>
        </div>
        <div class="chat-commit-content">
          {{comment.CONTENT}}
        </div>

      </div>
    </div>
</template>


<script>
import axios from 'axios';

export default {
  props:['message1'],
    data(){
        return{
        //     comments:[
        //   {
        //   "USER_ID":1,
        //   "USER_PORTRAIT":"user_pic.png",
        //   "USER_NICKNAME":"李奧",
        //   "CREATE_TIME":"2023-04-04",
        //   "CONTENT":"這款御飯糰看起來真的很好吃！我平常也很愛吃這種綜合了多種口味的美食，尤其是烤焦的牛肉片搭配米飯，讓人垂涎欲滴。謝謝你的分享，我會去7-11試試看這款美食！",
        //   },
        //   {
        //   "USER_ID":2,
        //   "USER_PORTRAIT":"user_pic.png",
        //   "USER_NICKNAME":"奧納多",
        //   "CREATE_TIME":"2023-04-06",
        //   "CONTENT":"我一直覺得便利店的食物都是很不健康的選擇，但看完你的推薦文，我對7-11的炙燒雪花牛御飯糰產生了興趣。聽起來這款美食的口感和層次非常豐富，讓人忍不住想去嚐一口。謝謝你的分享，我會去買一個試試看！",
        //   },
        //   {
        //   "USER_ID":3,
        //   "USER_PORTRAIT":"user_pic.png",
        //   "USER_NICKNAME":"皮卡丘",
        //   "CREATE_TIME":"2023-04-07",
        //   "CONTENT":"我之前吃過類似的御飯糰，但是口感並不是很好，還有些乾。不過看起來7-11的炙燒雪花牛御飯糰的口感非常不錯，也很新鮮。謝謝你的分享，我會去7-11試試看這款美食！",
        //   },
        //   {
        //   "USER_ID":4,
        //   "USER_PORTRAIT":"user_pic.png",
        //   "USER_NICKNAME":"李迪卡",
        //   "CREATE_TIME":"2023-04-07",
        //   "CONTENT":"我以前就在7-11工作過，當時就很喜歡他們的御飯糰。尤其是炙燒雪花牛御飯糰，每次上班都會買來當午餐。這款美食的口感真的非常豐富，而且非常方便易食。謝謝你的分享，帶我回到了那段美好的回憶！",
        //   },
        //   {
        //   "USER_ID":5,
        //   "USER_PORTRAIT":"user_pic.png",
        //   "USER_NICKNAME":"皮歐",
        //   "CREATE_TIME":"2023-04-07",
        //   "CONTENT":" 我最近也在尋找新的便利店美食，看起來7-11的炙燒雪花牛御飯糰是個不錯的選擇。特別是因為它可以隨時購買，方便食用。謝謝你的分享，我會在下次去7-11的時候買一個嚐嚐看！",
        //   },
        // ],
        jsonData: null,
        }
    },
    mounted(){
      axios
        .get('/commentlist.json')
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });
    },
}
</script>