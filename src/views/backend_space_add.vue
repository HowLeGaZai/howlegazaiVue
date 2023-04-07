<template>
    <backendNavbar></backendNavbar>

    <div class="body-sec">
        <main class="backpadding">
            <div class="container-date">
                <!-- 需渲染資料區塊 -->
                <p>西曆：2023 年 03 月 11 日</p>
                <p>農曆：癸卯年 乙卯月 戊辰日 二月二十</p>
                <!-- 需渲染資料區塊 -->
            </div>

            <section class="container-main">
                <div class="backend-nav">
                    <ul class="">
                        <!-- 後台管理首頁 -->
                        <li>
                            <router-link :to="{name:'backend_index'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
                                <div class="width-3 text-left">後台管理首頁</div>
                                <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </router-link>
                            <div class="be-nav-on be-nav-off"></div>
                        </li>
                        <!-- 網站管理 -->
                        <li>
                            <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
                                <div class="width-3 text-left">網站管理</div>
                                <i class="bi bi-caret-down-fill i-s"></i>
                            </a>
                            <div class="be-nav-on be-nav-off">
                            <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_websiteinfo'">網站基本設定</button> -->
                            <!-- <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_officeinfo'">聯絡里辦資訊</button> -->
                            <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_faq'">常見問題設定</button> -->
                            <router-link :to="{name:'backend_websiteinfo'}">
                                <button class="be-nav btn-font-color-gray">網站基本設定</button>
                            </router-link>
                            <router-link :to="{name:'backend_officeinfo'}">
                                <button class="be-nav btn-font-color-gray">聯絡里辦資訊</button>
                            </router-link>
                            <router-link :to="{name:'backend_faq'}">
                                <button class="be-nav btn-font-color-gray">常見問題設定</button>
                            </router-link>
                            </div>
                        </li>
                        <!-- 帳戶管理 -->
                        <li>
                            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
                            <div class="width-3 text-left">帳戶管理</div>
                            <i class="bi bi-caret-down-fill i-s"></i>
                            </a>
                            <div class="be-nav-on be-nav-off">
                            <!-- <button class="be-nav btn-font-color-gray " onclick="window.location.href='#/backend_websiteinfo'">帳戶總列表</button>
                            <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_new'">待審核清單</button>
                            <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_account_cancel'">已刪除帳戶</button> -->
                            <router-link :to="{name:'backend_account_new'}">
                                <button class="be-nav btn-font-color-gray">待審核清單</button>
                            </router-link>
                            <router-link :to="{name:'backend_account_overview'}">
                                <button class="be-nav btn-font-color-gray">帳戶總列表</button>
                            </router-link>
                            <router-link :to="{name:'backend_account_cancel'}">
                                <button class="be-nav btn-font-color-gray">已刪除帳戶</button>
                            </router-link>
                            </div>
                        </li>
                        <!-- 最新消息管理 -->
                        <li>
                            <router-link :to="{name:''}" class="be-nav opacity-6 btn-color-darkgray be-menu">
                            <!-- <router-link :to="{name:'backend_news'}" class="be-nav opacity-6 btn-color-darkgray be-menu"> --> 
                            <div class="width-3 text-left">最新消息管理</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </router-link>
                            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
                            <div class="width-3 text-left">最新消息管理</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a> -->
                            <div class="be-nav-on"></div>
                        </li>
                        <!-- 討論區列表 -->
                        <li>
                            <router-link :to="{name:'backend_chat_list'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
                            <div class="width-3 text-left">討論區列表</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </router-link>
                            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_chat_list">
                            <div class="width-3 text-left">討論區列表</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a> -->
                            <div class="be-nav-on"></div>
                        </li>
                        <!-- 活動管理 -->
                        <li>
                            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
                            <div class="width-3 text-left">活動管理</div>
                            <i class="bi bi-caret-down-fill i-s"></i>
                            </a>
                            <div class="be-nav-on be-nav-off" id="beMenuOn">
                            <router-link :to="{name:'backend_activity'}">
                                <button class="be-nav btn-font-color-gray ">活動列表</button>
                            </router-link>
                            <router-link :to="{name:'backend_activity_input'}">
                            <button class="be-nav be-nav btn-font-color-gray">新增活動</button>
                            </router-link>
                            <!-- <button class="be-nav btn-font-color-gray "  onclick="window.location.href='#/backend_activity'">活動列表</button>
                            <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_activity_input'">新增活動</button> -->
                            </div>
                        </li>
                        <!-- 空間管理 -->
                        <li>
                            <a class="be-nav btn-color-white be-menu">
                            <div class="width-3 text-left">空間管理</div>
                            <i class="bi bi-caret-down-fill i-s"></i>
                            </a>
                            <div class="be-nav-on">
                            <router-link :to="{name:'backend_space_list'}">
                                <button class="be-nav btn-font-color-green">空間列表</button>
                            </router-link>
                            <router-link :to="{name:'backend_space_management'}">
                            <button class="be-nav be-nav btn-font-color-gray">預約管理</button>
                            </router-link>
                            <!-- <button class="be-nav btn-font-color-gray"  onclick="window.location.href='''">空間列表</button>
                            <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href=''">預約管理</button> -->
                            </div>
                        </li>
                        <!-- 團購網管理 -->
                        <li>
                            <router-link :to="{name:''}" class="be-nav opacity-6 btn-color-unopened be-menu">
                            <div class="width-3 text-left">團購網管理</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </router-link>
                            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                            <div class="width-3 text-left">團購網管理</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a> -->
                            <div class="be-nav-on"></div>
                        </li>
                        <!-- 維修通報 -->
                        <li>
                            <router-link :to="{name:''}" class="be-nav opacity-6 btn-color-unopened be-menu">
                            <div class="width-3 text-left">維修通報</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </router-link>
                            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
                            <div class="width-3 text-left">維修通報</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a> -->
                            <div class="be-nav-on"></div>
                        </li>
                        <!-- 守望相助 -->
                        <li>
                            <a class="be-nav opacity-6 btn-color-unopened be-menu " href="#">
                            <div class="width-3 text-left">守望相助</div>
                            <i class="bi bi-caret-down-fill i-s "></i>
                            </a>
                            <div class="be-nav-on be-nav-off be-menu">
                            <router-link :to="{name:''}">
                                <button class="be-nav btn-font-color-green">守望隊管理</button>
                            </router-link>
                            <router-link :to="{name:''}">
                                <button class="be-nav btn-font-color-gray">簽到列表</button>
                            </router-link>
                            <!-- <button class="be-nav btn-font-color-green">守望隊管理</button>
                            <button class="be-nav be-nav btn-font-color-gray">簽到列表</button> -->
                            </div>
                        </li>
                        <!-- 瓦斯表數據 -->
                        <li>
                            <router-link :to="{name:''}" class="be-nav opacity-6 be-menu btn-color-unopened">
                            <div class="width-3 text-left">瓦斯表數據</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </router-link>

                            <!-- <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#">
                            <div class="width-3 text-left">瓦斯表數據</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a> -->
                            <div class="be-nav-on"></div>
                        </li>
                    </ul>
                </div>
                <section class="section_right ">
                    <!-- 新增空間 -->
                    <div class="bk-activity-add">
                        <h1>新增空間</h1>
                        <form action="" name="activity-add">

                            <!-- 空間名稱 -->
                            <section>
                                <!-- <h5>空間名稱</h5> -->
                                <div class="row">
                                    <div class="col-12">
                                        <label for="spaceName" class="f-label">空間名稱</label>
                                        <input type="text" class="f-text" id="spaceName" placeholder="範例：多媒體影音室">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <label for="spaceName" class="f-label">開放時間</label>
                                        
                                        <div class="row bk_spaceDate">
                                            <label class="f-checkbox">全選
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期一
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期二
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期三
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="f-checkbox">星期四
                                                <input type="checkbox" name="multichoice">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 時間 -->
                                <div class="row bk_spaceTime">
                                    <div class="col-3">
                                        <label for="spaceTimeStart" class="f-label">時間</label>
                                        <input type="text" class="f-text" id="spaceTimeStart" placeholder="範例：08:00">
                                    </div>
                                    <div class="col-1">
                                        <label class="f-label to">至</label>
                                    </div>
                                    <div class="col-3">
                                        <label for="spaceTimeStart" class="f-label">&nbsp;</label>
                                        <input type="text" class="f-text" id="spaceTimeStart" placeholder="範例：22:00">
                                    </div>
                                </div>
                            </section>

                            <section>
                                <h5>空間地點</h5>
                                <div class="row">
                                    <div class="col-2">
                                        <label for="city" class="f-label">縣市</label>
                                        <input type="text" class="f-text" id="city" placeholder="範例：花蓮縣">
                                    </div>
                                    <div class="col-2">
                                        <label for="district" class="f-label">鄉鎮區</label>
                                        <input type="text" class="f-text" id="district" placeholder="範例：國安鄉">
                                    </div>
                                    <div class="col-2">
                                        <label for="village" class="f-label">里</label>
                                        <input type="text" class="f-text" id="village" placeholder="範例：大湖里">
                                    </div>
                                    <div class="col-6">
                                        <label for="village" class="f-label">詳細地址</label>
                                        <input type="text" class="f-text" id="village" placeholder="範例：幸福路123號3樓">
                                    </div>
                                </div>
                            </section>

                            <!-- 場地資訊 -->
                            <section>
                                <h5>場地資訊</h5>
                                <div class="row">
                                    <div class="col-12">
                                        <label for="type" class="f-label">性質</label>
                                        <input type="text" class="f-text" id="type" placeholder="範例：閱讀教室、會議">
                                    </div>
                                    <div class="col-6">
                                        <label for="district" class="f-label">坪數</label>
                                        <input type="text" class="f-text" id="district" placeholder="範例：14坪">
                                    </div>
                                    <div class="col-6">
                                        <label for="village" class="f-label">空間容納人數上限</label>
                                        <input type="text" class="f-text" id="village" placeholder="範例：200人">
                                    </div>     
                                </div>
                            </section>

                            <!-- 管理人資訊 -->
                            <section>
                            <h5>管理人資訊</h5>
                            <div class="row">
                                <div class="col-4">
                                    <label for="city" class="f-label">管理人姓名</label>
                                    <input type="text" class="f-text" id="city" placeholder="範例：李上巴">
                                </div>
                                <div class="col-4">
                                    <label for="district" class="f-label">聯絡電話</label>
                                    <input type="text" class="f-text" id="district" placeholder="範例：09128123125">
                                </div>
                                <div class="col-4">
                                    <label for="village" class="f-label">備用聯絡電話</label>
                                    <input type="text" class="f-text" id="village" placeholder="範例：0919426284">
                                </div>     
                            </div>
                        </section>

                        <!-- 預約須知 -->
                        <section>
                            <h5>預約須知</h5>
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="" id="" cols="30" rows="10" class="f-text" placeholder=""></textarea>
                                </div>
                            </div>
                        </section>

                        <!-- 空間照片 -->
                        <section>
                            <h5>空間照片</h5>
                            <div class="row">
                                <input type="file" class="f-file">
                            </div>
                        </section>

                        <!-- 送出按鈕-->
                        <button type="submit" class="btn-m btn-color-gray" onclick="location.href='./activity.html'">取消</button>
                        <!-- 是否有預覽頁-->
                        <button type="submit" class="btn-m btn-color-green" onclick="location.href='./activity.html'">送出</button>
                    </form>
                </div>
                </section>
            </section>
        </main>
    </div>
    <Footer></Footer>
</template>

<script>

    import backendNavbar from './backendNavbar.vue';
    import Footer from './Footer.vue';

    export default {
        components: {
            backendNavbar, Footer
        },
        mounted() {
            // ======nav的收合======
            let beMenu = document.querySelectorAll(".be-menu");
            let beMenuOn = document.querySelectorAll(".be-nav-on");
            // let beMenu = document.querySelectorAll("be-nav");
            // console.log(beMenu);

            for (let i = 0; i < beMenu.length; i++) {
                beMenu[i].addEventListener("click", function () {
                    beMenuOn[i].classList.toggle('be-nav-off');
                    //   console.log(beMenu[i]);
                })
            }
        },
    }
</script>