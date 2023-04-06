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

        <div class="container-main">
            <div class="backend-nav">
                <ul class="">
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_index">
                      <div class="width-3 text-left">後台管理首頁</div>
                      <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                    </a>
                    <div class="be-nav-on be-nav-off"></div>
                  </li>
                  <li>
                    <a class="be-nav btn-color-white  be-menu" >
                      <div class="width-3 text-left">網站管理</div>
                      <i class="bi bi-caret-down-fill i-s"></i>
                    </a>
                    <div class="be-nav-on">
                      <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend_websiteinfo'">網站基本設定</button>
                      <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_officeinfo'">聯絡里辦資訊</button>
                      <button class="be-nav btn-font-color-green" onclick="window.location.href='#/backend_faq'">常見問題設定</button>
                    </div>
                  </li>
        
                  <li>
                    <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
                      <div class="width-3 text-left">帳戶管理</div>
                      <i class="bi bi-caret-down-fill i-s"></i>
                    </a>
                    <div class="be-nav-on be-nav-off">
                      <button class="be-nav btn-font-color-gray " onclick="window.location.href='#/backend/account/overview'">帳戶總列表</button>
                      <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend/account/new'">待審核清單</button>
                      <button class="be-nav btn-font-color-gray" onclick="window.location.href='#/backend/account/cancel'">已刪除帳戶</button>
                    </div>
                  </li>
        
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_news">
                      <div class="width-3 text-left">最新消息管理</div>
                      <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                    </a>
                    <div class="be-nav-on"></div>
                  </li>
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="#/backend_chat_list">
                      <div class="width-3 text-left">討論區列表</div>
                      <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                    </a>
                    <div class="be-nav-on"></div>
                  </li>
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                      <div class="width-3 text-left">團購網管理</div>
                      <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                    </a>
                    <div class="be-nav-on"></div>
                  </li>
                  <li>
                    <a class="be-nav  opacity-6 btn-color-darkgray be-menu">
                      <div class="width-3 text-left">活動管理</div>
                      <i class="bi bi-caret-down-fill i-s"></i>
                    </a>
                    <div class="be-nav-on be-nav-off" id="beMenuOn">
                      <button class="be-nav btn-font-color-gray "  onclick="window.location.href='#/backend_activity'">活動列表</button>
                      <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='#/backend_activity_input'">新增活動</button>
                    </div>
                  </li>
        
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu">
                      <div class="width-3 text-left">空間管理</div>
                      <i class="bi bi-caret-down-fill i-s"></i>
                    </a>
        
                    <div class="be-nav-on be-nav-off ">
                      <button class="be-nav btn-font-color-green"  onclick="window.location.href='#/backend_space_list'">空間列表</button>
                      <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href='#/backend_space_management'">預約管理</button>
                    </div>
                  </li>
        
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                      <div class="width-3 text-left">維修通報</div>
                      <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                    </a>
                    <div class="be-nav-on"></div>
                  </li>
        
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="">
                      <div class="width-3 text-left">守望相助</div>
                      <i class="bi bi-caret-down-fill i-s "></i>
                    </a>
                    <div class="be-nav-on be-nav-off be-menu">
                      <button class="be-nav btn-font-color-green">守望隊管理</button>
                      <button class="be-nav be-nav btn-font-color-gray">簽到列表</button>
                    </div>
                  </li>
        
                  <li>
                    <a class="be-nav opacity-6 btn-color-darkgray be-menu" href>
                      <div class="width-3 text-left">瓦斯表數據</div>
                      <i class="bi bi-caret-down-fill i-s opacity-0"></i>
                    </a>
                    <div class="be-nav-on"></div>
                  </li>
        
                </ul>
        
        
        
        
              </div>

            <div class="section_right">
                <h2>常見問題設置</h2>
                <section>
                    <div class="frame">
                        <button type="button" class="qabutton">常見問題一</button>
                        <div class="content">
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">問題</label>
                                    <textarea name="" id="tarea" cols="30" class="f-text"
                                        placeholder="">大湖里為什麼叫大湖里</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">答案</label>
                                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                        placeholder="">因為民國57年7月1日，改隸院轄臺北市後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <button type="button" class="qabutton">常見問題二</button>
                        <div class="content">
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">問題</label>
                                    <textarea name="" id="tarea" cols="30" class="f-text"
                                        placeholder="">大湖里為什麼叫大湖里</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">答案</label>
                                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                        placeholder="">因為民國57年7月1日，改隸院轄臺北市後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <button type="button" class="qabutton">常見問題三</button>
                        <div class="content">
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">問題</label>
                                    <textarea name="" id="tarea" cols="30" class="f-text"
                                        placeholder="">大湖里為什麼叫大湖里</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">答案</label>
                                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                        placeholder="">因為民國57年7月1日，改隸院轄臺北市後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <button type="button" class="qabutton">常見問題四</button>
                        <div class="content">
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">問題</label>
                                    <textarea name="" id="tarea" cols="30" class="f-text"
                                        placeholder="">大湖里為什麼叫大湖里</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">答案</label>
                                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                        placeholder="">因為民國57年7月1日，改隸院轄臺北市後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <button type="button" class="qabutton">常見問題五</button>
                        <div class="content">
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">問題</label>
                                    <textarea name="" id="tarea" cols="30" class="f-text"
                                        placeholder="">大湖里為什麼叫大湖里</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="tarea" class="f-label">答案</label>
                                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                                        placeholder="">因為民國57年7月1日，改隸院轄臺北市後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                                </div>
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
 
 var qabtn = document.getElementsByClassName("qabutton");
    var i;
    
    for (i = 0; i < qabtn.length; i++) {
        qabtn[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }



  },
 
  

  
}
</script>