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

        <div class="container-main">
            <div class="backend-nav">
        <ul class="">
          <li>
            <router-link :to="{name:'backend_index'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">後台管理首頁</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </router-link>
            <!-- <a class="be-nav btn-color-white be-menu" href="#/backend_index">
            </a> -->
            <div class="be-nav-on be-nav-off"></div>
          </li>
          <li>
            <a class="be-nav  opacity-6 btn-color-white be-menu">
              <div class="width-3 text-left">網站管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on">
              <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_websiteinfo'">網站基本設定</button> -->
              <!-- <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_officeinfo'">聯絡里辦資訊</button> -->
              <!-- <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_faq'">常見問題設定</button> -->
              <router-link :to="{name:'backend_websiteinfo'}">
                <button class="be-nav btn-font-color-gray">網站基本設定</button>
              </router-link>
              <router-link :to="{name:'backend_officeinfo'}">
                <button class="be-nav btn-font-color-green">聯絡里辦資訊</button>
              </router-link>
              <router-link :to="{name:'backend_faq'}">
                <button class="be-nav btn-font-color-gray">常見問題設定</button>
              </router-link>
            </div>
          </li>

          <li>
            <a class="be-nav  opacity-6 be-menu btn-color-darkgray" >
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

          <li>
            <router-link :to="{name:'backend_news'}" class="be-nav opacity-6 btn-color-darkgray be-menu">
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

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">空間管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off ">
              <router-link :to="{name:'backend_space_list'}">
                <button class="be-nav btn-font-color-gray">空間總覽</button>
            </router-link>
            <router-link :to="{name:'backend_space_management'}">
              <button class="be-nav be-nav btn-font-color-gray">預約管理</button>
            </router-link>
              <!-- <button class="be-nav btn-font-color-gray"  onclick="window.location.href='''">空間列表</button>
              <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href=''">預約管理</button> -->
            </div>
          </li>
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

            <div class="section_right">
                <h2>聯絡里辦資訊</h2>
                <section>
                    <h5>村里長簡介</h5>
                    <div class="row">
                        <div class="col-12 col-ml-6">
                            <label for="lastname" class="f-label">姓</label>
                            <input type="text" class="f-text" id="lastname" placeholder="範例：王">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="firstname" class="f-label">名字</label>
                            <input type="text" class="f-text" id="firstname" placeholder="範例：小明">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="singlechoice" class="f-label">性別</label>
                            <div class="gender">
                                <label class="f-checkbox">男
                                    <input type="radio" name="singlechoice">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="f-checkbox">女
                                    <input type="radio" name="singlechoice">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="f-checkbox">自行填寫:
                                    <input type="radio" name="singlechoice">
                                    <span class="checkmark"></span>
                                </label>
                                <input type="text" class="g-others f-text">
                            </div>
                        </div>
                        <div class="col-12 col-ml-2">
                            <label for="electionyear" class="f-label">選舉屆次</label>
                            <input type="text" class="f-text" id="electionyear" placeholder="範例：第21屆">
                        </div>
                        <div class="col-12 col-ml-4">
                            <label for="degree" class="f-label">學歷</label>
                            <input type="text" class="f-text" id="degree" placeholder="範例：台灣大學資工系">
                        </div>
                    </div>

                    <h5>村里長照片</h5>
                    <div class="uploading">
                        <label for="upload-file-1" class="uploadpic">
                          <input type="file" id="upload-file-1" style="display:none">
                          <div class="btn-10-s btn-color-green ">
                            <i class="bi bi-arrow-bar-up"></i>上傳圖片
                          </div>
                        </label>
                        <div class="pic-area">
                          <div class="pic-area-box">
                            <img src="" alt="">
                            <span></span>
                              <button class="trash"><i class="bi bi-trash3"></i></button>
                          </div>
                          <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                      </div>
                    </div>

                    <button type="button" class="savebtn btn-10-s btn-color-green">儲存 </button>
                </section>
                <section>
                    <h5>里辦資訊</h5>
                    <div class="row">
                        <div class="col-12 col-ml-6">
                            <label for="mainphone" class="f-label">主要聯絡電話</label>
                            <input type="text" class="f-text" id="mainphone"
                                placeholder="範例：02-2532-1453 / 0912-234-567">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="secphone" class="f-label">第二聯絡電話</label>
                            <input type="text" class="f-text" id="secphone"
                                placeholder="範例：02-2532-1453 / 0912-234-567">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="email" class="f-label">聯絡信箱</label>
                            <input type="text" class="f-text" id="email" placeholder="範例：123@abcd.com">
                        </div>
                        <div class="col-12 col-ml-6">
                            <label for="address" class="f-label">里辦地址</label>
                            <input type="text" class="f-text" id="address" placeholder="範例：花蓮縣花蓮市大湖里國安路1號1樓">
                        </div>
                    </div>
                    <button type="button" class="savebtn btn-10-s btn-color-green">儲存 </button>

                    <h5>村里特色介紹</h5>
                    <div class="frame">
                        <h5>輪播一</h5>
                        <div class="row">
                            <div class="col-12 col-ml-4">
                                <label for="address" class="f-label">標題</label>
                                <input type="text" class="f-text" id="address" placeholder="範例：村里文化">
                            </div>
                            <div class="uploading_2 col-12 col-ml-8">
                                <h6 class="f-label">圖片</h6>
                               
                                <div class="uploading upload_area">
                                    <label for="upload-file-2" class="uploadpic">
                                      <input type="file" id="upload-file-2" style="display:none">
                                      <div class="btn-10-s btn-color-green ">
                                        <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                      </div>
                                    </label>
                                    <div class="pic-area">
                                      <div class="pic-area-box">
                                        <img src="" alt="">
                                        <span></span>
                                          <button class="trash"><i class="bi bi-trash3"></i></button>
                                      </div>
                                      <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                                  </div>
                                </div>
                               
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="tarea" class="f-label">內容:</label>
                                <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                    placeholder="內容說明"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <h5>輪播二</h5>
                        <div class="row">
                            <div class="col-12 col-ml-4">
                                <label for="address" class="f-label">標題</label>
                                <input type="text" class="f-text" id="address" placeholder="範例：村里文化">
                            </div>
                            <div class="uploading_2 col-12 col-ml-8">
                                <h6 class="f-label">圖片</h6>
                           
                                <div class="uploading upload_area">
                                    <label for="upload-file-3" class="uploadpic">
                                      <input type="file" id="upload-file-3" style="display:none">
                                      <div class="btn-10-s btn-color-green ">
                                        <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                      </div>
                                    </label>
                                    <div class="pic-area">
                                      <div class="pic-area-box">
                                        <img src="" alt="">
                                        <span></span>
                                          <button class="trash"><i class="bi bi-trash3"></i></button>
                                      </div>
                                      <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                                  </div>
                                </div>
                               
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="tarea" class="f-label">內容:</label>
                                <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                    placeholder="內容說明"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <h5>輪播三</h5>
                        <div class="row">
                            <div class="col-12 col-ml-4">
                                <label for="address" class="f-label">標題</label>
                                <input type="text" class="f-text" id="address" placeholder="範例：村里文化">
                            </div>
                            <div class="uploading_2 col-12 col-ml-8">
                                <h6 class="f-label">圖片</h6>
                                <div class="uploading upload_area">
                                    <label for="upload-file-4" class="uploadpic">
                                      <input type="file" id="upload-file-4" style="display:none">
                                      <div class="btn-10-s btn-color-green ">
                                        <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                      </div>
                                    </label>
                                    <div class="pic-area">
                                      <div class="pic-area-box">
                                        <img src="" alt="">
                                        <span></span>
                                          <button class="trash"><i class="bi bi-trash3"></i></button>
                                      </div>
                                      <p>設計最佳建議：560 x 560 像素，且大小不得超過 100 KB 的圖檔</p>
                                  </div>
                                </div>
                               
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-12">
                                <label for="tarea" class="f-label">內容:</label>
                                <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                    placeholder="內容說明"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="savebtn btn-10-s btn-color-green">儲存 </button>
                </section>
            </div>


        </div>

        <!-- 992以下顯示內容 -->
        <div class="main rest-inf">
            不支援手機喔

        </div>
    </main>
   </div>
    <Footer></Footer>
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import Footer from './Footer.vue';



export default {
  components: {
      backendNavbar,Footer,
    },
    mounted() {
    // ======nav的收合======
   let beMenu = document.querySelectorAll(".be-menu");
   let beMenuOn = document.querySelectorAll(".be-nav-on");
  // let beMenu = document.querySelectorAll("be-nav");
  // console.log(beMenu);

  for(let i = 0; i < beMenu.length; i++){
    beMenu[i].addEventListener("click",function(){
      beMenuOn[i].classList.toggle('be-nav-off');
    //   console.log(beMenu[i]);
    })
  }
 
 const uploadButtons = document.querySelectorAll('input[type="file"]');
    
      
        uploadButtons.forEach(button => {
          button.addEventListener('change', event => {
           
            const uploadGroup = button.closest('.uploading');
    
            
            const picArea = uploadGroup.querySelector('.pic-area-box');
            const picImg = picArea.querySelector('img');
            const picName = picArea.querySelector('span');
    
            const file = event.target.files[0];
    
           
            if (file.type.startsWith('image/')) {
              const reader = new FileReader();
    

              reader.onload = () => {
                picImg.src = reader.result;
                picName.textContent = file.name;
    
                picImg.style.width = '100%'
                picImg.style.height = '100%'
                // picImg.style.maxWidth = '300px'
                picImg.style.maxHeight = '100px'
              }
    
              reader.readAsDataURL(file);
            } else {
           
              picImg.src = '';
              picName.textContent = file.name;
            }
          });
        });



  },
 
  

  
}
</script>