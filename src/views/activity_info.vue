<template>
<navbar></navbar>
    <main class="activity_info">
        <div class="info_topic">
            <h1>活動資訊</h1>
            
            <div class="activity_typeAndTime">
                <div class="tag tag-round tag-pink tag-btn tag-btn-selected">藝文</div>
                <h4>發布日期：5小時前</h4>
            </div>
        </div>

        <div class="info-article">
            <h1>電影旅遊講座《北印度 PK 南印度》用電影神遊印度</h1>

            <div class="userTag" id="">
                <img src="../assets/img/user_pic2.png" alt="" class="userPic" />
                <h4>里長伯</h4>
            </div>
            
            <!-- img的容器設定為原大小的95% -->
            <div class="activityContent">
                <div class="actInfo">
                    <p>活動時間：</p>
                    <p>2023-03-04  （六） 15:00～18:00</p>
                </div>
                <div class="actInfo">
                    <p>地點：</p>
                    <p>新北市三重區幸福路和平街66號 快樂公園教室Ｂ</p>
                </div>
                <div class="actInfo">
                    <p>報名人數限制：</p>
                    <p>40人</p>
                </div>
                <div class="actInfo">
                    <p>報名截止時間：</p>
                    <p>2023-02-15（五）24:00</p>
                </div>
                <div class="actPrice">
                    <p>200</p>
                    <p>元/人</p>
                </div>
            </div>

            <div class="regist">
                <div class="peopleCount">
                    <label for="name" class="f-label">人數</label>
                    <input type="text" class="f-text" id="name" placeholder="">
                </div>
                <div class="confirm-btn">
                    <button type="button" class="btn-m btn-color-green">點我報名</button>
                </div>
            </div>
        </div>

        <div class="info_discript">
            <h1>活動介紹</h1>
            
            <div class="image act-img">
                <img src="../assets/img/e1_calligraphy.png" alt="">
            </div>
            <div class="infoText">

                <p class="col-12">
                    如果你喜歡吃方便又美味的食物，那麼7-11的炙燒雪花牛御飯糰絕對是一個值得推薦的選擇。這款美食融合了經典的日式御飯糰和台灣炙燒牛肉的口味，簡單便捷卻又不失美味。炙燒雪花牛御飯糰的製作非常獨特。先用炭火烤焦牛肉的外層，再切成薄片。然後把軟糯的米飯和醬汁混合後，包裹著烤好的牛肉片，讓每一口都充滿了口感和層次。
                    <br>
                    <br>這款美食的味道非常豐富，每一口都能夠感受到烤焦的牛肉口感和米飯的香氣。醬汁的味道也很獨特，酸酸甜甜的味道讓整道美食更加美味可口。此外，7-11的炙燒雪花牛御飯糰非常方便。它可以在7-11便利店裡輕鬆購買，隨時可以享受到這款美食。而且因為是包裝好的御飯糰，所以也非常適合帶著外出或上班時享用。
                    <br>
                    <br>總體來說，7-11的炙燒雪花牛御飯糰是一款非常值得推薦的美食。它不僅味道美味，而且方便易食。不論你是在路邊走走停停或是工作中需要短暫休息，都能夠輕鬆地享受到這款美食帶來的美好體驗。
                </p>

            </div>
        </div>
    </main>
</template>

<script>

import navbar from './navbar.vue';

export default {
  components: {
      navbar,
    },
}
</script>