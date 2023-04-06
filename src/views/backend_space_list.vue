<template>
    <backendNavbar></backendNavbar>
        <div class="body-sec">
            <main>
            <div class="container-date">
                <!-- 需渲染資料區塊 -->
                <p>西曆：2023 年 03 月 11 日</p>
                <p>農曆：癸卯年 乙卯月 戊辰日 二月二十</p>
                <!-- 需渲染資料區塊 -->
            </div>
            <section class="container-main">
                <div class="backend-nav">
                    <ul class="">
                        <li>
                            <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="./backend/index.html">
                            <div class="width-3 text-left">後台管理首頁</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a>
                            <div class="be-nav-on be-nav-off"></div>
                        </li>
                        <li>
                            <a class="be-nav  opacity-6 btn-color-darkgray" id="beMenu">
                            <div class="width-3 text-left">網站管理</div>
                            <i class="bi bi-caret-down-fill i-s"></i>
                            </a>
                            <div class="be-nav-on be-nav-off" id="beMenuOn">
                            <button class="be-nav btn-font-color-green">網站基本設定</button>
                            <button class="be-nav be-nav btn-font-color-gray">聯絡里辦資訊</button>
                            <button class="be-nav btn-font-color-gray">常見問題設定</button>
                            </div>
                        </li>
                        <li>
                            <a class="be-nav opacity-6 btn-color-darkgray">
                            <div class="width-3 text-left">帳戶管理</div>
                            <i class="bi bi-caret-down-fill i-s"></i>
                            <div class="be-nav-on be-nav-off" id="beMenuOn">
                                <button class="be-nav btn-font-color-green">待審核清單</button>
                                <button class="be-nav be-nav btn-font-color-gray">帳戶總列表</button>
                                <button class="text-ali be-nav btn-font-color-gray">已刪除帳戶</button>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="be-nav opacity-6 btn-color-darkgray">
                            <div class="width-3 text-left">最新消息管理</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a>
                        </li>
                        <li>
                            <a class="be-nav opacity-6 btn-color-darkgray">
                            <div class="width-3 text-left">討論區列表</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a>
                        </li>
                        <li>
                            <a class="be-nav opacity-6 btn-color-darkgray">
                            <div class="width-3 text-left">團購網管理</div>
                            <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                            </a>
                        </li>
                        <li>
                            <a class="be-nav opacity-6 btn-color-darkgray">
                            <div class="width-3 text-left">活動管理</div>
                            <i class="bi bi-caret-down-fill i-s"></i>
                            </a>
                            <div class="be-nav-on be-nav-off" id="beMenuOn">
                            <button class="be-nav btn-font-color-green">活動列表</button>
                            <button class="be-nav be-nav btn-font-color-gray">新增活動</button>
                            </div>
                        </li>

                    <li>
                        <a class="be-nav btn-color-white be-menu">
                        <div class="width-3 text-left">空間管理</div>
                        <i class="bi bi-caret-down-fill i-s"></i>
                        </a>

                        <div class="be-nav-on" id="beMenuOn">
                        <button class="be-nav btn-font-color-green" onclick="window.location.href='backend_space_list.html'">空間列表</button>
                        <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='backend_space_management.html'">預約管理</button>
                        </div>
                    </li>

                    <li>
                        <a class="be-nav opacity-6 btn-color-darkgray">
                        <div class="width-3 text-left">維修通報</div>
                        <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                        </a>
                    </li>

                    <li>
                        <a class="be-nav opacity-6 btn-color-darkgray">
                        <div class="width-3 text-left">守望相助</div>
                        <i class="bi bi-caret-down-fill i-s "></i>
                        </a>
                        <div class="be-nav-on be-nav-off" id="beMenuOn">
                        <button class="be-nav btn-font-color-green">守望隊管理</button>
                        <button class="be-nav be-nav btn-font-color-gray">簽到列表</button>
                        </div>
                    </li>

                    <li>
                        <a class="be-nav opacity-6 btn-color-darkgray">
                        <div class="width-3 text-left">瓦斯表數據</div>
                        <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                        </a>
                    </li>

                    </ul>




                </div>
                <section class="section_right">
                    <!-- 空間總覽 -->
                    <div class="w90percentage accounttable bk-activity">
                        <h1>空間總覽</h1>
                        <div class="displayflex justifycontent">

                            <div class="displayflex textalignleft">
                            <!-- <div class="marginright20">
                                <label for="selecte" class="f-label">分類</label>
                                <select name="" id="selecte" class="f-select">
                                <option value="1">全部</option>
                                <option value="2">旅遊</option>
                                <option value="3">健康</option>
                                <option value="4">藝文</option>
                                <option value="5">其他</option>
                                </select>
                            </div> -->
                            <!-- <div>
                                <label for="selecte" class="f-label">上架狀態</label>
                                <select name="" id="selecte" class="f-select">
                                <option value="1">全部</option>
                                <option value="2">上架中</option>
                                <option value="3">已下架 </option>

                                </select>
                            </div> -->
                            </div>
                            <div class="displayflex margintop18">
                                <button type="button" class="btn-10-s btn-color-green marginright20 ">
                                    <i class="bi bi-plus-lg"></i> 新增空間
                                </button>
                            </div>
                        </div>
                        <div class="">

                            <table class=" back-table-2">

                                <tbody>
                                    <tr>
                                    <td>空間編號</td>
                                    <td>空間名稱</td>
                                    <td>狀態</td>
                                    <td>查看</td>
                                    <td>編輯</td>
                                    <td>刪除</td>
                                    
                                    </tr>
                                    <tr>
                                    <td>001</td>
                                    <td>大湖里A102室</td>
                                    <td>暫無預約</td>
                                    <td><button type="button" class="btn-icon">
                                        <i class="bi bi-eye btn-font-color-green"></i>
                                    </button>
                                    </td>
                                    
                                    <td><button type="button" class="btn-icon">
                                        <i class="bi bi-pencil-square btn-font-color-green"></i>
                                    </button>
                                    </td>

                                    <td><button type="button" class="btn-icon">
                                        <i class="bi bi-x-circle-fill btn-font-color-green"></i>
                                        </button>
                                    </td>
                                    
                                    </tr>
                                    




                                </tbody>

                            </table>
                        </div>

                        <!-- 頁碼 -->
                        <ul class="btn-page-block">
                            <li><button class="btn-page btn-color-white"><i class="bi bi-caret-left-fill"></i></button></li>
                            <li><button class="btn-page btn-color-green">1</button></li>
                            <li><button class="btn-page btn-color-white">2</button></li>
                            <li><button class="btn-page btn-color-white">3</button></li>
                            <li><button class="btn-page btn-color-white"><i class="bi bi-caret-right-fill"></i></button></li>
                        </ul>
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