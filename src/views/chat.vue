<template>
  <navbar></navbar>
  <main class="chat">

    <h1 class="title_space">討論區</h1>
    <div class="search-filter">
      <div class="search">
        <input type="text" v-model.lazy.trim="searchChat" class="f-text f-round" placeholder="&#xF52A" style="font-family:bootstrap-icons" />
        <button class="btn-m btn-color-green" @click="postsearch">搜尋</button>
      </div>
      <div class="add-chat">
        <!-- <button class="btn-m btn-color-green" @click="preview()" role="link" >發起討論</button> -->
        <!-- <router-link :to="{ path: '/chat_new/' + id }"  > -->
          <button class="btn-m btn-color-green" @click="toNewChat">發起討論</button>
        <!-- </router-link> -->
      </div>

      <div class="desktop-filter" id="chat-desktop-filter">
        <button class="tag tag-main tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '所有話題' }"
          @click="selectedCategory = '所有話題'" value="所有話題">
          所有話題
        </button>
        <button class="tag tag-pink tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '美食討論' }"
          @click="selectedCategory = '美食討論'" value="美食討論">
          美食討論
        </button>
        <button class="tag tag-orange tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '二手交易' }"
          @click="selectedCategory = '二手交易'" value="二手交易">
          二手交易
        </button>
        <button class="tag tag-blue tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '里民閒聊' }"
          @click="selectedCategory = '里民閒聊'" value="里民閒聊">
          里民閒聊
        </button>
        <button class="tag tag-sky tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '團購討論' }"
          @click="selectedCategory = '團購討論'" value="團購討論">
          團購討論
        </button>
        <button class="tag tag-green tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '我要抱怨' }"
          @click="selectedCategory = '我要抱怨'" value="我要抱怨">
          我要抱怨
        </button>
        <button class="tag tag-yellow tag-btn" :class="{ 'tag-btn-selected': selectedCategory === '其他' }"
          @click="selectedCategory = '其他'" value="其他">
          其他
        </button>
      </div>
      <div class="mobile-filter">
        <label for="chattype" class="f-label">分類</label>
        <select name="" id="chattype" class="f-select" v-model="selectedCategory">
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

    <!-- <chat-topic></chat-topic> -->

    <article class="chat-article" v-for="(chatTopic, index) in displayedTopics" :key="index" v-show="index < num">
      <section>
        <section class="chat_news ">
          <div class="chat_info">
            <div :class="['tag', 'tag-mini', addClass(chatTopic.CATEGORY)]">{{ chatTopic.CATEGORY }}</div>
            <h5 class="post_d">{{ getFormatDate(chatTopic.CREATE_TIME) }}</h5>
            <div class="poster">
              <div class="image user_pic">
                <!-- <img :src="chatTopic.PORTRAIT" alt=""> -->
                <img :src="chatTopic.PORTRAIT!= ''? chatTopic.PORTRAIT :require(`@/assets/img/user_pic.png`)" alt="" class="user_pic" />
                
                <!-- <img :src="require('@/assets/img/user_pic.png')" alt=""> -->
              </div>
              <h5 class="poster_name">{{ chatTopic.NICKNAME }}</h5>
            </div>

          </div>

          <h2><router-link :to="{ name: 'chat_info', params: { Id: chatTopic.ID } }">{{ chatTopic.TITLE }}</router-link></h2>
          <!-- <h2>{{ chatTopic.TITLE }}</h2> -->
          <p>{{ chatTopic.TEXT }}</p>
        </section>
        <div class="image list_pic">
           <img :src="chatTopic.PIC ? chatTopic.PIC :require(`@/assets/img/default.jpg`)" alt="">
          <!-- <img :src="chatTopic.PIC" alt=""> -->
        </div>
      </section>
    </article>

    <div class="watch-more">
      <button type="button" class="btn-m btn-color-greenborder" id="lookmore" v-if="num < displayedTopics.length"
        @click="showmore">看更多</button>
    </div>

  </main>
  <Footer></Footer>
</template>

<script>
import ChatTopic from '@/components/ChatTopic.vue';
import navbar from '@/components/navbar.vue';
import Footer from "@/components/Footer.vue";

import { formatDate } from "../plugin/date";
import { v4 as uuidv4 } from 'uuid';

export default {
  data() {
    return {
      // isShow: true,
      // txt: "看更多",
      searchChat: '',
      num: 10,
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
      chatTopics: [],
      // displayedTopics:[],
      createChat: false,
      id: new Date().getTime() // 獲取當前時間的 ISO 字符串
    };
  },
  mounted() {
    axios
      .get("http://localhost/TGD104G1/public/API/chatlist.php")
      .then((response) => {
        const data = response.data;
        // console.log(response.data);

        this.chatTopics = data;
        console.log(this.chatTopics);
      })
      .catch((error) => {
        console.error(error);
      });

  },
  methods: {
   addClass(category) {
      return {
        "tag-main": category === "所有話題",
        "tag-pink": category === "美食討論",
        "tag-orange": category === "二手交易",
        "tag-blue": category === "里民閒聊",
        "tag-sky": category === "團購討論",
        "tag-green ": category === "我要抱怨",
        "tag-yellow": category === "其他",
      };
    },
    showmore() {
    
      this.num = this.num + 5;
      // console.log(this.chatTopics.length);
      if (this.num >= this.chatTopics.length) {
        // alert('顯示最多');
        let lookmore = document.getElementById("lookmore");
        // console.log(lookmore);
        lookmore.style.display = "none";
      } else {
      }
    },
     postsearch() {

      const formdata = new FormData()
      formdata.append('searchChat', this.searchChat)
      console.log(this.searchChat);
      axios.post('http://localhost/TGD104G1/public/API/search_chat.php', formdata)
        .then(response => {
          this.chatTopics = response.data;
          // console.log('123',response.data);
          // console.log('123');
        })
        .catch(error => {
          console.log(error);
        });

    },
    toNewChat(){
      this.$router.push({ path: '/chat_new/' + this.id });
    },

    getFormatDate(val) {
      return formatDate(val);
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
    navbar,
    Footer,
    ChatTopic,
  },
};
</script>