<template>
  <navbar></navbar>
  <main class="chat_info">
    <!-- <router-link to="/chat" custom v-slot="{ navigate }">
      <button class="btn-prepage font-green" @click="navigate" role="link">
        <i class="bi bi-caret-left-fill font-green"></i>返回【上一頁】
      </button>
    </router-link> -->
    <!-- <button class="btn-prepage font-green" onclick="location.href='./chat.html'">
          <i class=" bi bi-caret-left-fill font-green"></i>返回【上一頁】</button> -->
    <div class="chat_info_topic">
      <h1>{{ title }}</h1>
      <div class="add_inf">
        <div class="userbtn" id="">
          <img :src="portrait" alt="" class="user_pic" />
        </div>
        <h4>{{usernickname}}</h4>
        <h4>發布日期: 2023-04-26</h4>
      </div>
      <div :class="['tag','tag-mini', addTagClass(type)]">{{ type }}</div>
    </div>
    <div class="chat-article chat-article-new" v-html="tinymceContent"></div>
    <!-- <TinymceContent ref="TinymceContent"></TinymceContent> -->
    <!-- <div class="chat-article"> -->
    <!-- img的容器設定為原大小的95%
          <p class="chat-article-content">
            如果你喜歡吃方便又美味的食物，那麼7-11的炙燒雪花牛御飯糰絕對是一個值得推薦的選擇。這款美食融合了經典的日式御飯糰和台灣炙燒牛肉的口味，簡單便捷卻又不失美味。炙燒雪花牛御飯糰的製作非常獨特。先用炭火烤焦牛肉的外層，再切成薄片。然後把軟糯的米飯和醬汁混合後，包裹著烤好的牛肉片，讓每一口都充滿了口感和層次。
            <br>
            <br>這款美食的味道非常豐富，每一口都能夠感受到烤焦的牛肉口感和米飯的香氣。醬汁的味道也很獨特，酸酸甜甜的味道讓整道美食更加美味可口。此外，7-11的炙燒雪花牛御飯糰非常方便。它可以在7-11便利店裡輕鬆購買，隨時可以享受到這款美食。而且因為是包裝好的御飯糰，所以也非常適合帶著外出或上班時享用。
            <br>
            <br>總體來說，7-11的炙燒雪花牛御飯糰是一款非常值得推薦的美食。它不僅味道美味，而且方便易食。不論你是在路邊走走停停或是工作中需要短暫休息，都能夠輕鬆地享受到這款美食帶來的美好體驗。
          </p>
          <div class="image chat-img">
            <img src="../assets/img/chat-pic.png" alt="">
          </div> -->

    <!-- </div> -->

    <!-- <chat-comment   @message="addComment"></chat-comment> -->
    <!-- =========================================== -->
    <!-- <div class="comment-list">
          <div class="chat-commit">
            <div class="chat-commit-title">
              
              <div class="image user_pic">
                <img src="../assets/img/user_pic.png" alt="">
              </div>
              <h5 class="commit-user">李奧</h5>
              <h5 class="commit-date">2023/04/04</h5>
            </div>
            <div class="chat-commit-content">
              這款御飯糰看起來真的很好吃！我平常也很愛吃這種綜合了多種口味的美食，尤其是烤焦的牛肉片搭配米飯，讓人垂涎欲滴。謝謝你的分享，我會去7-11試試看這款美食！
            </div>
          </div>
          <div class="chat-commit" v-for="(comment,index) in comments" :key="index">
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
          <div class="chat-commit">
            <div class="chat-commit-title">
              
              <div class="image user_pic">
                <img src="../assets/img/user_pic.png" alt="">
              </div>
              <h5 class="commit-user">奧納多</h5>
              <h5 class="commit-date">2023/04/06</h5>
            </div>
            <div class="chat-commit-content">
              我一直覺得便利店的食物都是很不健康的選擇，但看完你的推薦文，我對7-11的炙燒雪花牛御飯糰產生了興趣。聽起來這款美食的口感和層次非常豐富，讓人忍不住想去嚐一口。謝謝你的分享，我會去買一個試試看！
            </div>
          </div>
          
          <div class="chat-commit">
            <div class="chat-commit-title">
              /* 會員大頭貼- image.scss */
              <div class="image user_pic">
                <img src="../assets/img/user_pic.png" alt="">
              </div>
              <h5 class="commit-user">皮卡丘</h5>
              <h5 class="commit-date">2小時前</h5>
            </div>
            <div class="chat-commit-content">
              我之前吃過類似的御飯糰，但是口感並不是很好，還有些乾。不過看起來7-11的炙燒雪花牛御飯糰的口感非常不錯，也很新鮮。謝謝你的分享，我會去7-11試試看這款美食！
            </div>
          </div>
          
          <div class="chat-commit">
            <div class="chat-commit-title">
              /* 會員大頭貼- image.scss */
              <div class="image user_pic">
                <img src="../assets/img/user_pic.png" alt="">
              </div>
              <h5 class="commit-user">李迪卡</h5>
              <h5 class="commit-date">2小時前</h5>
            </div>
            <div class="chat-commit-content">
              我以前就在7-11工作過，當時就很喜歡他們的御飯糰。尤其是炙燒雪花牛御飯糰，每次上班都會買來當午餐。這款美食的口感真的非常豐富，而且非常方便易食。謝謝你的分享，帶我回到了那段美好的回憶！
            </div>
          </div>
          <div class="chat-commit">
            <div class="chat-commit-title">
              /* 會員大頭貼- image.scss */
              <div class="image user_pic">
                <img src="../assets/img/user_pic.png" alt="">
              </div>
              <h5 class="commit-user">皮歐</h5>
              <h5 class="commit-date">1小時前</h5>
            </div>
            <div class="chat-commit-content">
              我最近也在尋找新的便利店美食，看起來7-11的炙燒雪花牛御飯糰是個不錯的選擇。特別是因為它可以隨時購買，方便食用。謝謝你的分享，我會在下次去7-11的時候買一個嚐嚐看！
            </div>
          </div>
        </div> -->
    <!-- <div class="comment-list">
      <div class="chat-commit" v-for="(comment,index) in comments" :key="index">
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
    </div> -->
    <!-- =========================================== -->
    <!-- <chat-commentlist :sendToList="data"></chat-commentlist> -->

    <div class="confirm-btn">
  
        <button class="btn-m btn-color-white" @click="goBackedit()" role="link">返回上一頁</button>
        <button class="btn-m btn-color-green" @click="publish()" role="link">發布</button>
      
      <!-- <button type="button" class="btn-m btn-color-green" onclick="location.href='./chat.html'">返回上一頁</button> -->
    </div>
  </main>
  <Footer></Footer>
</template>
    
    <script>
    
    import navbar from './navbar.vue';
    import Footer from './Footer.vue';
    import ChatComment from './ChatComment.vue';
    import ChatCommentlist from './ChatCommentlist.vue';
    // import TinymceContent from '@/components/TinymceContent.vue';
    
    export default {
      components: {
          navbar,Footer,ChatComment,ChatCommentlist,
        },
    
        data(){
          return{
            
            title:'',
            type:'',
            tinymceContent:'',
            textContent:'',
            usernickname:'',
            portrait:'',
            userid:'',
            routerid:'',
  
          }
        },
        methods:{
          getFormatDate(val) {
            return formatDate(val);
          },
          addComment(data){
              // console.log(message);
              this.data = data;
          },
          addTagClass(i){
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
        
          getCookieValue(cookieName) {
            // 讀取指定名稱的 Cookie 值
            const cookieStr = decodeURIComponent(document.cookie);
            const cookies = cookieStr.split("; ");
            for (let i = 0; i < cookies.length; i++) {
              const cookie = cookies[i].split("=");
              if (cookie[0] === cookieName) {
                return cookie[1] || null;
              }
            }
            return null;
          },
          publish(){
            const chatform = new FormData()
            
            chatform.append('category', this.type)
            chatform.append('title', this.title)
            chatform.append('content', this.tinymceContent)
            chatform.append('text', this.textContent)
            chatform.append('userid', this.userid)
            chatform.append('routerid', this.routerid)
            

            axios
              .post('http://localhost/TGD104G1/public/API/publishchat.php', chatform)
              .then(response => {
                  // this.jsonData = response.data;
                  console.log(response.data);
                  const Id = this.$route.params.Id;
                  this.$router.push({ name: 'chat_info', params: { Id: Id } });
              })
              .catch(error => {
                  console.log(error);
              });
            },
        },
    
        mounted(){
         this.title = sessionStorage.getItem('form-title');
         this.type = sessionStorage.getItem('form-type');
         this.tinymceContent = sessionStorage.getItem('form-tinymceContent');

          this.usernickname = this.getCookieValue('nickname');
          this.userid = this.getCookieValue('id');
          this.portrait = sessionStorage.getItem("portrait");
          this.routerid = this.$route.params.Id;
          this.textContent = this.tinymceContent.replace(/(<([^>]+)>)/gi, '').replace(/&[^;]+;/g, '');
    },
    
        
    }
    </script>
    
    
    
    
    