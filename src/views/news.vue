<template>
  <navbar></navbar>

    <main class="news_page">
    <h1>最新消息</h1>
    <div class="search-bar">
      <input type="" class="f-text f-round" placeholder="&#xF52A" style="font-family:bootstrap-icons"/>
      <button class="btn-m btn-color-green ">搜尋</button>
    </div>
    <div class="desktop-filter">
      <div class="tag tag-btn tag-main tag-btn-selected">全部消息</div>
      <div class="tag tag-orange tag-btn">公告</div>
      <div class="tag tag-pink tag-btn">宣導</div>
      <div class="tag tag-yellow tag-btn">里民服務</div>
      <div class="tag tag-blue tag-btn">新聞分享</div>
      <div class="tag tag-green tag-btn">會議記錄</div>
      <!-- <div class="tag tag-sky opacity-6">經費報告</div> -->
    </div>
    <div class="mobile-filter">
      <label for="chattype" class="f-label">分類</label>
      <select name="" id="chattype" class="f-select">
        <option value="1">全部消息</option>
        <option value="2">公告</option>
        <option value="3">宣導</option>
        <option value="4">里民服務</option>
        <option value="5">新聞分享</option>
        <option value="6">會議記錄</option>
        <!-- <option value="7">經費報告</option> -->
      </select>
    </div>

    <div class="news_content">
      <a href="./news_info.html">
        <article class="news_item">
          <section>
            <section class="article_news">
              <div class="tag tag-pink">最新宣導</div>
              <p class="rwd-newsdate">2022-03-11</p>
              <h2>大湖里反詐騙宣導：為避免輕易上當，請撥165反詐騙電話</h2>
              <h5>2022-03-11</h5>
            </section>
            <div class="image list_pic">
              <img src="../assets/img/news_pic1.jpeg" alt="">
            </div>
          </section>
        </article>
      </a>
      <a href="#">
      <article class="news_item">
        <section>
          <section class="article_news">
            <div class="tag tag-orange">公告</div>
            <p class="rwd-newsdate">2022-03-11</p>
            <h2>清明期間 大湖里第一公墓管制出入</h2>
            <h5>2022-01-01</h5>
          </section>
          <div class="image list_pic">
            <img src="../assets/img/c_1_food.jpg" alt="">
          </div>
        </section>
      </article>
    </a>
    <a href="#">
      <article class="news_item">
        <section>
          <section class="article_news">
            <div class="tag tag-pink">宣導</div>
            <p class="rwd-newsdate">2022-03-11</p>
            <h2>清明期間返鄉祭祖，消防局禁止於空地燃燒廢草</h2>
            <h5>2022-03-11</h5>
          </section>
          <div class="image list_pic">
            <img src="../assets/img/c_1_food.jpg" alt="">
          </div>
        </section>
      </article>
    </a>
    <a href="#">
      <article class="news_item">
        <section>
          <section class="article_news">
            <div class="tag tag-orange">公告</div>
            <p class="rwd-newsdate">2022-03-11</p>
            <h2>清明期間 大湖里第二公墓管制出入</h2>
            <h5>2022-01-01</h5>
          </section>
          <div class="image list_pic">
            <img src="../assets/img/c_1_food.jpg" alt="">
          </div>
        </section>
      </article>
    </a>
    <a href="#">
      <article class="news_item">
        <section>
          <section class="article_news">
            <div class="tag tag-pink">宣導</div>
            <p class="rwd-newsdate">2022-03-11</p>
            <h2>大湖里反詐騙宣導：為避免輕易上當，請撥165反詐騙電話</h2>
            <h5>2022-03-11</h5>
          </section>
          <div class="image list_pic">
            <img src="../assets/img/c_1_food.jpg" alt="">
          </div>
        </section>
      </article>
    </a>
    <a href="#">
      <article class="news_item">
        <section>
          <section class="article_news">
            <div class="tag tag-orange">公告</div>
            <p class="rwd-newsdate">2022-03-11</p>
            <h2>清明期間 大湖里第二公墓管制出入</h2>
            <h5>2022-01-01</h5>
          </section>
          <div class="image list_pic">
            <img src="../assets/img/c_1_food.jpg" alt="">
          </div>
        </section>
      </article>
    </a>

    </div>

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
}
</script>