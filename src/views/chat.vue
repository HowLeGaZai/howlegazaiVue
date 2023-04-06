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
          <div class="desktop-filter" id="chat-desktop-filter">
            <button class="tag tag-main tag-btn tag-btn-selected">所有話題</button>
            <button class="tag tag-pink tag-btn">美食討論</button>
            <button class="tag tag-orange tag-btn">二手交易</button>
            <button class="tag tag-blue tag-btn">里民閒聊</button>
            <button class="tag tag-sky tag-btn">團購討論</button>
            <button class="tag tag-green tag-btn">我要抱怨</button>
            <button class="tag tag-yellow tag-btn">其他</button>
          </div>
          <div class="mobile-filter">
            <label for="chattype" class="f-label">分類</label>
            <select name="" id="chattype" class="f-select">
                <option value="1">所有話題</option>
                <option value="2">美食討論</option>
                <option value="3">二手交易</option>
                <option value="4">里民閒聊</option>
                <option value="5">團購討論</option>
                <option value="6">我要抱怨</option>
                <option value="7">其他</option>
            </select>
        </div>
        </div>

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
                  <!-- <div class="tag tag-pink">美食討論</div> -->
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
                  
                  <!-- <h2><a href="./chat_info.html">想找桃太郎飯糰</a></h2> -->
                  <h2><router-link :to="{name:'chat_info'}">想找桃太郎飯糰</router-link></h2>
                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
                  <!-- <div class="tag tag-pink">美食討論</div> -->
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
                  
                  <!-- <h2><a href="/chat_info">巷口有人亂丟飯糰</a></h2> -->
                  <h2><router-link :to="{name:'chat_info'}">巷口有人亂丟飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
                  <!-- <div class="tag tag-pink">美食討論</div> -->
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
                  
                  <!-- <h2><a href="./chat_info.html">為什麼大家一直在討論飯糰</a></h2> -->
                  <h2><router-link :to="{name:'chat_info'}">為什麼大家一直在討論飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
                  <!-- <div class="tag tag-pink">美食討論</div> -->
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
                  <!-- <h2><a href="./chat_info.html">最近吃到大湖里超好吃飯糰飯糰飯糰飯糰飯糰飯糰飯糰飯糰</a></h2> -->
                  <h2><router-link :to="{name:'chat_info'}">最近吃到大湖里超好吃飯糰飯糰飯糰飯糰飯糰飯糰飯糰飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
                  <!-- <div class="tag tag-pink">美食討論</div> -->
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
                  
                  <!-- <h2><a href="./chat_info.html">想轉賣飯糰</a></h2> -->
                  <h2><router-link :to="{name:'chat_info'}">想轉賣飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
                  <!-- <div class="tag tag-pink">美食討論</div> -->
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
                  
                  <!-- <h2><a href="./chat_info.html">最近吃到大湖里超難吃飯糰</a></h2> -->
                  <h2><router-link :to="{name:'chat_info'}">最近吃到大湖里超難吃飯糰</router-link></h2>

                  <p>大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐</p>
                  <!-- <div class="tag tag-pink">美食討論</div> -->
              </section>
              <div class="image list_pic">
                  <img src="../assets/img/c_1_food.jpg" alt="">
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

import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  components: {
      navbar,Footer,
    },
  mounted(){
    var desktopfilter = document.getElementById("chat-desktop-filter");
    var btns = desktopfilter.getElementsByClassName("tag-btn");

    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName(" tag-btn-selected");

        if (current.length > 0) {
          current[0].className = current[0].className.replace(" tag-btn-selected", "");
        }
        this.className += " tag-btn-selected";
      });
    };
  }
}
</script>