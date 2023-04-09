<template>
<navbar></navbar>
    <main class="chat">
   
        <h1 class="title_space">討論區</h1>
        <div class="search-filter">
          <div class="search">
            <input type="" class="f-text f-round" placeholder="&#xF52A" style="font-family:bootstrap-icons"/>
            <button type="button" class="btn-m btn-color-green">搜尋</button>
          </div>
          <div class="add-chat">
            <router-link to="/chat_new" custom v-slot="{ navigate }">
              <button class="btn-m btn-color-green" @click="navigate" role="link">發起討論</button>
            </router-link>
          </div>
          <!-- <div class="desktop-filter" id="chat-desktop-filter">
            <button class="tag tag-main tag-btn tag-btn-selected" value="All">所有話題</button>
            <button class="tag tag-pink tag-btn" value="美食討論">美食討論</button>
            <button class="tag tag-orange tag-btn" value="二手交易">二手交易</button>
            <button class="tag tag-blue tag-btn" value="里民閒聊">里民閒聊</button>
            <button class="tag tag-sky tag-btn" value="團購討論">團購討論</button>
            <button class="tag tag-green tag-btn" value="我要抱怨">我要抱怨</button>
            <button class="tag tag-yellow tag-btn" value="其他">其他</button>
          </div>    -->
          
          <div class="desktop-filter" id="chat-desktop-filter">
            <button
              class="tag tag-main tag-btn"
              :class="{ 'tag-btn-selected': selectedCategory === '所有話題' }"
              @click="selectedCategory = '所有話題'"
              value="所有話題"
            >
              所有話題
            </button>
            <button
              class="tag tag-pink tag-btn"
              :class="{ 'tag-btn-selected': selectedCategory === '美食討論' }"
              @click="selectedCategory = '美食討論'"
              value="美食討論"
            >
              美食討論
            </button>
            <button
              class="tag tag-orange tag-btn"
              :class="{ 'tag-btn-selected': selectedCategory === '二手交易' }"
              @click="selectedCategory = '二手交易'"
              value="二手交易"
            >
              二手交易
            </button>
            <button
              class="tag tag-blue tag-btn"
              :class="{ 'tag-btn-selected': selectedCategory === '里民閒聊' }"
              @click="selectedCategory = '里民閒聊'"
              value="里民閒聊"
            >
              里民閒聊
            </button>
            <button
              class="tag tag-sky tag-btn"
              :class="{ 'tag-btn-selected': selectedCategory === '團購討論' }"
              @click="selectedCategory = '團購討論'"
              value="團購討論"
            >
              團購討論
            </button>
            <button
              class="tag tag-green tag-btn"
              :class="{ 'tag-btn-selected': selectedCategory === '我要抱怨' }"
              @click="selectedCategory = '我要抱怨'"
              value="我要抱怨"
            >
              我要抱怨
            </button>
            <button
              class="tag tag-yellow tag-btn"
              :class="{ 'tag-btn-selected': selectedCategory === '其他' }"
              @click="selectedCategory = '其他'"
              value="其他"
            >
              其他
            </button>
          </div>
          <div class="mobile-filter">
            <label for="chattype" class="f-label">分類</label>
            <select name="" id="chattype" class="f-select">
                <option value="所有話題">所有話題</option>
                <option value="美食討論">美食討論</option>
                <option value="二手交易">二手交易</option>
                <option value="里民閒聊">里民閒聊</option>
                <option value="團購討論">團購討論</option>
                <option value="我要抱怨">我要抱怨</option>
                <option value="其他">其他</option>
            </select>
        </div>
        </div>
<!-- 舊的
        <article class="chat-article">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                    <div class="tag tag-pink tag-mini">美食討論</div>
                    <h5 class="post_d">5小時前</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img src="../assets/img/user_pic.png" alt="">
                      </div>
                      <h5 class="poster_name">櫻桃爺爺</h5>
                    </div>
                   
                  </div>
                  
                  <h2><router-link :to="{name:'chat_info'}">最近吃到大湖里超好吃飯糰</router-link></h2>
                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
              </div>
          </section>
        </article>

        <article class="chat-article">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                    <div class="tag tag-yellow tag-mini">其他</div>
                    <h5 class="post_d">23小時前</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img src="../assets/img/user_pic.png" alt="">
                      </div>
                      <h5 class="poster_name">櫻桃</h5>
                    </div>
                   
                  </div>
                  <h2><router-link :to="{name:'chat_info'}">想找桃太郎飯糰</router-link></h2>
                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
              </div>
          </section>
        </article>

        <article class="chat-article">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                    <div class="tag tag-green tag-mini">我要抱怨</div>
                    <h5 class="post_d">2023-04-06</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img src="../assets/img/user_pic.png" alt="">
                      </div>
                      <h5 class="poster_name">櫻桃媽</h5>
                    </div>
                   
                  </div>
                  <h2><router-link :to="{name:'chat_info'}">巷口有人亂丟飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
              </div>
          </section>
        </article>

        <article class="chat-article">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                    <div class="tag tag-blue tag-mini">里民閒聊</div>
                    <h5 class="post_d">2023-04-05</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img src="../assets/img/user_pic.png" alt="">
                      </div>
                      <h5 class="poster_name">櫻桃爸</h5>
                    </div>
                    
                  </div>
                  <h2><router-link :to="{name:'chat_info'}">為什麼大家一直在討論飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
              </div>
          </section>
        </article>

        <article class="chat-article">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                    <div class="tag tag-pink tag-mini">美食討論</div>
                    <h5 class="post_d">2023-04-09</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img src="../assets/img/user_pic.png" alt="">
                      </div>
                      <h5 class="poster_name">桃姨</h5>
                    </div>
                  </div>
                  <h2><router-link :to="{name:'chat_info'}">最近吃到大湖里超好吃飯糰飯糰飯糰飯糰飯糰飯糰飯糰飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
              </div>
          </section>
        </article>

        <article class="chat-article">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                
                    <div class="tag tag-orange tag-mini">二手交易</div>
                    <h5 class="post_d">2023-04-09</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img src="../assets/img/user_pic.png" alt="">
                      </div>
                      <h5 class="poster_name">爺爺</h5>
                    </div>
                    
                  </div>
                  <h2><router-link :to="{name:'chat_info'}">想轉賣飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
              </div>
          </section>
        </article>

        <article class="chat-article">
          <section>
              <section class="chat_news ">
                  <div class="chat_info">
                   
                    <div class="tag tag-green tag-mini">我要抱怨</div>
                    <h5 class="post_d">2023-04-09</h5>
                    <div class="poster">
                      <div class="image user_pic">
                        <img src="../assets/img/user_pic.png" alt="">
                      </div>
                      <h5 class="poster_name">櫻桃爺爺的爺</h5>
                    </div>
                    
                  </div>
                  <h2><router-link :to="{name:'chat_info'}">最近吃到大湖里超難吃飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
              </div>
          </section>
        </article>
 -->

        <!-- <chat-topic></chat-topic> -->

        <article class="chat-article" v-for="(chatTopic,index) in displayedTopics" :key="index" >
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
                  
                  <h2><router-link :to="{name:'chat_info'}">{{chatTopic.TITLE}}</router-link></h2>
                  <p>{{chatTopic.CONTENT}}</p>
              </section>
              <div class="image list_pic">
                  <img :src="require(`@/assets/img/${chatTopic.PIC}`)" alt="">
              </div>
          </section>
        </article>     

        <div class="watch-more">
          <button type="button" class="btn-m btn-color-greenborder">看更多</button>
        </div>

      </main>
      <Footer></Footer>
</template>

<script>


import ChatTopic from '../components/ChatTopic.vue'
import navbar from './navbar.vue';
import Footer from './Footer.vue';
// import { BootstrapIconsPlugin } from 'bootstrap-icons-vue';




export default {
   data(){
        return {
            selectedCategory: "所有話題",
            categories: [
              "所有話題",
              "美食討論",
              "二手交易",
              "里民閒聊",
              "團購討論",
              "我要抱怨",
              "其他",
            ],
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
             {
                "ID": 456,
                "CATEGORY": "二手交易",
                "TITLE": "想轉賣飯糰",
                "CONTENT": "大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐",
                "PIC": "c_1_food.jpg",
                "CREATE_TIME": "2023-04-05",

                "USER_ID": 56677,
                "PORTRAIT": "user_pic3.png",
                "NICKNAME": "櫻桃",

                "COMMENT_ID": "",
                "COMMENT_TIME": "",
                "STATUS": "",
            },
             {
                "ID": 123,
                "CATEGORY": "其他",
                "TITLE": "想找桃太郎飯糰",
                "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
                "PIC": "c_1_food.jpg",
                "CREATE_TIME": "2023-04-01",

                "USER_ID": 56677,
                "PORTRAIT": "user_pic.png",
                "NICKNAME": "櫻桃小姐",

                "COMMENT_ID": "",
                "COMMENT_TIME": "",
                "STATUS": "",
            },
            {
                "ID": 123,
                "CATEGORY": "我要抱怨",
                "TITLE": "巷口有人亂丟飯糰",
                "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
                "PIC": "c_1_food.jpg",
                "CREATE_TIME": "2023-04-01",

                "USER_ID": 56677,
                "PORTRAIT": "user_pic5.png",
                "NICKNAME": "櫻桃媽",

                "COMMENT_ID": "",
                "COMMENT_TIME": "",
                "STATUS": "",
            },
            {
                "ID": 123,
                "CATEGORY": "我要抱怨",
                "TITLE": "桃太郎飯糰根本就沒有用",
                "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
                "PIC": "c_1_food.jpg",
                "CREATE_TIME": "2023-04-01",

                "USER_ID": 56677,
                "PORTRAIT": "user_pic5.png",
                "NICKNAME": "櫻桃媽",

                "COMMENT_ID": "",
                "COMMENT_TIME": "",
                "STATUS": "",
            },
             {
                "ID": 123,
                "CATEGORY": "里民閒聊",
                "TITLE": "為什麼大家一直在討論飯糰",
                "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
                "PIC": "c_1_food.jpg",
                "CREATE_TIME": "2023-04-24",

                "USER_ID": 56677,
                "PORTRAIT": "user_pic3.png",
                "NICKNAME": "櫻桃子",

                "COMMENT_ID": "",
                "COMMENT_TIME": "",
                "STATUS": "",
            },
              {
                "ID": 123,
                "CATEGORY": "團購討論",
                "TITLE": "為什麼為什麼為什麼為什麼為什麼",
                "CONTENT": "最近，我突然對桃太郎飯糰產生了極大的興趣。我在網上看到一些照片和評論",
                "PIC": "c_1_food.jpg",
                "CREATE_TIME": "2023-04-24",

                "USER_ID": 56677,
                "PORTRAIT": "user_pic3.png",
                "NICKNAME": "櫻桃子",

                "COMMENT_ID": "",
                "COMMENT_TIME": "",
                "STATUS": "",
            },
            ],
        }
    },
    methods: {
        addClass(category){
          return {
            'tag-main': category === '所有話題',
            'tag-pink': category === '美食討論',
            'tag-orange': category === '二手交易',
            'tag-blue': category === '里民閒聊',
            'tag-sky': category === '團購討論',
            'tag-green': category === '我要抱怨',
            'tag-yellow': category === '其他',
          }
        },
    },

 computed: {
    displayedTopics() {
      if (this.selectedCategory === "所有話題") {
        return this.chatTopics;
      } else {
        return this.chatTopics.filter(
          (chatTopic) => chatTopic.CATEGORY === this.selectedCategory
        );
      }
    },
  },
  components: {
      navbar,Footer,ChatTopic,
    },
}
</script>