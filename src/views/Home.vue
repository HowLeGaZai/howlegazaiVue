<template>
  <navbar></navbar>
  <main class="home">
    <!-- 村里封面照片 -->
    <section class="home-cover">
      <div class="image home_banner">
        <img src="../assets/img/home_banner.jpg" alt="" />
        <div class="villagename"><h1>花蓮縣 大湖里</h1></div>
      </div>
    </section>

    <!-- 最新消息 -->
    <section class="home-news">
      <h1 class="title_space">最新消息</h1>
      <table>
        <thead>
          <tr>
            <th>標題</th>
            <th>發布日期</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <div class="tag tag-pink">藝文</div>
              <span>2022-01-01</span>
              <a href="#">大湖里反詐騙宣導</a>
            </td>
            <td>2022-01-01</td>
          </tr>
          <tr>
            <td>
              <div class="tag tag-orange">公告</div>
              <span>2022-01-01</span>
              <a href="#">大湖里112年3月21日(二)實施病媒蚊消毒噴灑作業</a>
            </td>
            <td class="table_right">2022-01-01</td>
          </tr>
          <tr>
            <td>
              <div class="tag tag-blue">經費報告</div>
              <span>2022-01-01</span>
              <a href="#">大湖里睦鄰互助聯誼活動補助費計畫表</a>
            </td>
            <td class="table_right">2022-01-01</td>
          </tr>
          <tr>
            <td>
              <div class="tag tag-orange">公告</div>
              <span>2022-01-01</span>
              <a href="#">大湖里112年3月21日(二)實施病媒蚊消毒噴灑作業</a>
            </td>
            <td class="table_right">2022-01-01</td>
          </tr>
          <tr>
            <td>
              <div class="tag tag-orange">公告</div>
              <span>2022-01-01</span>
              <a href="#">大湖里112年3月21日(二)實施病媒蚊消毒噴灑作業</a>
            </td>
            <td class="table_right">2022-01-01</td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- 活動 -->
    <section class="home-event">
      <h1 class="title_space">活動資訊</h1>
      <swiper
        :navigation="{
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }"
        :modules="modules"
        class="mySwiper"
        :slidesPerView="3"
        :spaceBetween="10"
        :pagination="{
          clickable: true,
        }"
        :breakpoints="{
          360: { slidesPerView: 1, spaceBetween: 0 },
          900: { slidesPerView: 2, spaceBetween: 5 },
          1280: { slidesPerView: 3, spaceBetween: 10 },
        }"
      >
        <swiper-slide
          ><div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/e1_calligraphy.png"
                alt=""
              />
            </a>
            <div class="tag tag-pink card-tag">藝文</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">新春書法體驗課</h3>
              <!-- <div class="card-person">
                            <div class="image user_pic">
                                <img src=".../assets/img/user_pic.png" alt="">
                            </div>
                            <p>Emma</p>
                        </div> -->

              <!-- <p class="card-content">櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺</p> -->
              <h5 class="card-date">活動日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">免費</h3>
              <a class="card-link" href="#"
                ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide
          ><div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/e1_calligraphy.png"
                alt=""
              />
            </a>
            <div class="tag tag-pink card-tag">藝文</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">新春書法體驗課</h3>
              <!-- <div class="card-person">
                            <div class="image user_pic">
                                <img src=".../assets/img/user_pic.png" alt="">
                            </div>
                            <p>Emma</p>
                        </div> -->

              <!-- <p class="card-content">櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺</p> -->
              <h5 class="card-date">活動日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">免費</h3>
              <a class="card-link" href="#"
                ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide
          ><div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/e1_calligraphy.png"
                alt=""
              />
            </a>
            <div class="tag tag-pink card-tag">藝文</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">新春書法體驗課</h3>
              <!-- <div class="card-person">
                            <div class="image user_pic">
                                <img src=".../assets/img/user_pic.png" alt="">
                            </div>
                            <p>Emma</p>
                        </div> -->

              <!-- <p class="card-content">櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺</p> -->
              <h5 class="card-date">活動日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">免費</h3>
              <a class="card-link" href="#"
                ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide
          ><div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/e1_calligraphy.png"
                alt=""
              />
            </a>
            <div class="tag tag-pink card-tag">藝文</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">新春書法體驗課</h3>
              <!-- <div class="card-person">
                            <div class="image user_pic">
                                <img src=".../assets/img/user_pic.png" alt="">
                            </div>
                            <p>Emma</p>
                        </div> -->

              <!-- <p class="card-content">櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺</p> -->
              <h5 class="card-date">活動日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">免費</h3>
              <a class="card-link" href="#"
                ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide
          ><div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/e1_calligraphy.png"
                alt=""
              />
            </a>
            <div class="tag tag-pink card-tag">藝文</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">新春書法體驗課</h3>
              <!-- <div class="card-person">
                            <div class="image user_pic">
                                <img src=".../assets/img/user_pic.png" alt="">
                            </div>
                            <p>Emma</p>
                        </div> -->

              <!-- <p class="card-content">櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺</p> -->
              <h5 class="card-date">活動日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">免費</h3>
              <a class="card-link" href="#"
                ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide
          ><div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/e1_calligraphy.png"
                alt=""
              />
            </a>
            <div class="tag tag-pink card-tag">藝文</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">新春書法體驗課</h3>
              <!-- <div class="card-person">
                            <div class="image user_pic">
                                <img src=".../assets/img/user_pic.png" alt="">
                            </div>
                            <p>Emma</p>
                        </div> -->

              <!-- <p class="card-content">櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺</p> -->
              <h5 class="card-date">活動日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">免費</h3>
              <a class="card-link" href="#"
                ><h5>活動詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <!-- <swiper-slide>Slide 2</swiper-slide><swiper-slide>Slide 3</swiper-slide>
            <swiper-slide>Slide 4</swiper-slide><swiper-slide>Slide 5</swiper-slide>
            <swiper-slide>Slide 6</swiper-slide><swiper-slide>Slide 7</swiper-slide>
            <swiper-slide>Slide 8</swiper-slide><swiper-slide>Slide 9</swiper-slide> -->
      </swiper>
      <div class="swiper-button">
        <button
          type="button"
          class="btn-cir-m btn-color-white swiper-button-prev"
        >
          <i class="bi bi-caret-left-fill"></i>
        </button>
        <button
          type="button"
          class="btn-cir-m btn-color-green swiper-button-next"
        >
          <i class="bi bi-caret-right-fill"></i>
        </button>
      </div>
    </section>

    <!-- 討論區 -->
    <section class="home-chat">
      <h1 class="title_space">討論區</h1>
      <div class="chat">
        <article class="chat-article">
          <section>
            <section class="chat_news">
              <div class="chat_info">
                <div class="tag tag-pink tag-mini">美食討論</div>
                <h5 class="post_d">5小時前</h5>
                <div class="poster">
                  <div class="image user_pic">
                    <img src="../assets/img/user_pic.png" alt="" />
                  </div>
                  <h5 class="poster_name">櫻桃爺爺</h5>
                </div>
              </div>

              <h2><a href="./chat_info.html">最近吃到大湖里超好吃飯糰</a></h2>
              <p>
                大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐
              </p>
              <!-- <div class="tag tag-pink">美食討論</div> -->
            </section>
            <div class="image list_pic">
              <img src="../assets/img/c_1_food.jpg" alt="" />
            </div>
          </section>
        </article>
        <article class="chat-article">
          <section>
            <section class="chat_news">
              <div class="chat_info">
                <div class="tag tag-pink tag-mini">美食討論</div>
                <h5 class="post_d">5小時前</h5>
                <div class="poster">
                  <div class="image user_pic">
                    <img src="../assets/img/user_pic.png" alt="" />
                  </div>
                  <h5 class="poster_name">櫻桃爺爺</h5>
                </div>
              </div>

              <h2><a href="./chat_info.html">最近吃到大湖里超好吃飯糰</a></h2>
              <p>
                大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐
              </p>
              <!-- <div class="tag tag-pink">美食討論</div> -->
            </section>
            <div class="image list_pic">
              <img src="../assets/img/c_1_food.jpg" alt="" />
            </div>
          </section>
        </article>
        <article class="chat-article">
          <section>
            <section class="chat_news">
              <div class="chat_info">
                <div class="tag tag-pink tag-mini">美食討論</div>
                <h5 class="post_d">5小時前</h5>
                <div class="poster">
                  <div class="image user_pic">
                    <img src="../assets/img/user_pic.png" alt="" />
                  </div>
                  <h5 class="poster_name">櫻桃爺爺</h5>
                </div>
              </div>

              <h2><a href="./chat_info.html">最近吃到大湖里超好吃飯糰</a></h2>
              <p>
                大湖里出產的飯糰米粒粒粒分明，調味也很好吃。超級好吃，100分的大湖里早餐
              </p>
              <!-- <div class="tag tag-pink">美食討論</div> -->
            </section>
            <div class="image list_pic">
              <img src="../assets/img/c_1_food.jpg" alt="" />
            </div>
          </section>
        </article>
      </div>
      <div class="watch-more">
        <router-link :to="{name:'chat'}" :scroll-behavior="{ x: 0, y: 0 }">
          <button type="button" class="btn-m btn-color-greenborder">
            看更多
          </button>
        </router-link>
      </div>
    </section>

    <!-- 團購區 -->
    <section class="home-product">
      <h1 class="title_space">團購區</h1>
      
      <!-- Swiper -->
      <swiper
        :navigation="{
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }"
        :modules="modules"
        class="mySwiper"
        :slidesPerView="3"
        :spaceBetween="10"
        :pagination="{
          clickable: true,
        }"
        :breakpoints="{
          360: { slidesPerView: 1, spaceBetween: 0 },
          900: { slidesPerView: 2, spaceBetween: 5 },
          1280: { slidesPerView: 3, spaceBetween: 10 },
        }"
      >
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="card">
            <a href="#">
              <img
                class="image event_pic"
                src="../assets/img/p1_cherry.jpg"
                alt=""
              />
            </a>
            <div class="tag tag-round tag-blue card-tag">食品</div>
            <div class="card-line"></div>
            <div class="">
              <h3 class="card-title">櫻桃妹子團購</h3>
              <div class="card-person">
                <div class="image user_pic">
                  <img src="../assets/img/user_pic.png" alt="" />
                </div>
                <p>Emma</p>
              </div>

              <p class="card-content">
                櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺櫻桃爺爺
              </p>
              <h5 class="card-date">團購截止日期：<span>2023-01-01</span></h5>
              <h3 class="card-price">100/盒</h3>
              <a class="card-link" href="#"
                ><h5>商品詳情<i class="bi bi-arrow-right"></i></h5
              ></a>
            </div>
          </div>
        </swiper-slide>
      </swiper>
      <div class="swiper-button">
        <button
          type="button"
          class="btn-cir-m btn-color-white swiper-button-prev"
        >
          <i class="bi bi-caret-left-fill"></i>
        </button>
        <button
          type="button"
          class="btn-cir-m btn-color-green swiper-button-next"
        >
          <i class="bi bi-caret-right-fill"></i>
        </button>
      </div>
    </section>

    <!-- 智慧里民 -->
    <section class="home-smartChief">
      <h1 class="title_space">智慧里民</h1>

      <section>
        <div class="left">
          <div class="">
            <a class="btn-s btn-color-green">活動報名</a>
          </div>
          <div>
            <a class="btn-s btn-color-green">公設預約</a>
          </div>
          <div>
            <a class="btn-s btn-color-green unopened">維修通報</a>
          </div>
        </div>
        <div class="galaxy">
          <div class="orbit">
            <div class="planet"></div>
          </div>
          <div class="smart_center">里民服務</div>
        </div>
        <div class="right">
          <div>
            <a class="btn-s btn-color-green unopened">瓦斯錶回報</a>
          </div>
          <div>
            <a class="btn-s btn-color-green unopened">團購區</a>
          </div>
          <div>
            <a class="btn-s btn-color-green unopened">守望相助</a>
          </div>
        </div>
      </section>
    </section>
  </main>

  <Footer></Footer>
</template>

<script>
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";

import "swiper/css/navigation";

import "../assets/css/style.css";

// import required modules
import { Navigation } from "swiper";

import navbar from "./navbar.vue";
import Footer from "./Footer.vue";

export default {
  components: {
    Swiper,
    SwiperSlide,
    navbar,
    Footer,
  },
  setup() {
    return {
      modules: [Navigation],
    };
  },
  mounted() {},
};
</script>
