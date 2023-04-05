<template>

<backendNavbar></backendNavbar>
     <main class="body-sec">
    <div class="container-date">
      <!-- 需渲染資料區塊 -->
      <p>西曆：2023 年 03 月 11 日</p>
      <p>農曆：癸卯年 乙卯月 戊辰日 二月二十</p>
      <!-- 需渲染資料區塊 -->
    </div>


      <!-- ----------後台nav------------ -->
      <!-- 使用說明：此使用的後台nav的css 使用方式 -->
      <!-- 想要綠框白底：class 加上 "btn-color-white" -->
      <!-- 想要灰底：class 加上 "btn-color-darkgray＋ opacity-6" -->
      <!-- 想要展開選單：在選單的div class 加上 "be-nav-on" -->
      <!-- 想要縮起選單：在選單的div class 刪除 "be-nav-off" -->
      <!-- 想要選單裡的字變綠色： 在該選單的字的class 加上 "btn-font-color-green" -->
      <!-- 想要選單裡的字變灰色： 在該選單的字的class 加上 "btn-font-color-gray" -->
      

    <div class="container-main">
      <div class="backend-nav">
        <ul class="">
          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="index.html">
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
              <button class="be-nav btn-font-color-green" onclick="window.location.href='backend_websiteinfo.html'">網站基本設定</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='backend_officeinfo.html'">聯絡里辦資訊</button>
              <button class="be-nav btn-font-color-gray" onclick="window.location.href='backend_faq.html'">常見問題設定</button>
            </div>
          </li>

          <li>
            <a class="be-nav  opacity-6 btn-color-darkgray be-menu" >
              <div class="width-3 text-left">帳戶管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>
            <div class="be-nav-on be-nav-off">
              <button class="be-nav btn-font-color-gray " onclick="window.location.href='account_overview.html'">帳戶總列表</button>
              <button class="be-nav be-nav btn-font-color-gray">待審核清單</button>
              <button class="be-nav btn-font-color-gray">已刪除帳戶</button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="news.html">
              <div class="width-3 text-left">最新消息管理</div>
              <i class="bi bi-caret-down-fill i-s opacity-0"></i>
            </a>
            <div class="be-nav-on"></div>
          </li>
          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu" href="chat_list.html">
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
              <button class="be-nav btn-font-color-gray "  onclick="window.location.href='activity.html'">活動列表</button>
              <button class="be-nav be-nav btn-font-color-gray" onclick="window.location.href='activity_input.html'">新增活動</button>
            </div>
          </li>

          <li>
            <a class="be-nav opacity-6 btn-color-darkgray be-menu">
              <div class="width-3 text-left">空間管理</div>
              <i class="bi bi-caret-down-fill i-s"></i>
            </a>

            <div class="be-nav-on be-nav-off ">
              <button class="be-nav btn-font-color-green"  onclick="window.location.href='space_list.html'">空間列表</button>
              <button class="be-nav be-nav btn-font-color-gray"  onclick="window.location.href='space_management.html'">預約管理</button>
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
        <h2>網站基本資訊</h2>
        <section>
            <h5>村里設定</h5>
            <div class="row">
                <div class="col-4">
                    <label for="city" class="f-label">縣市</label>
                    <input type="text" class="f-text" id="city" placeholder="範例：花蓮縣">
                </div>
                <div class="col-4">
                    <label for="district" class="f-label">鄉鎮市區</label>
                    <input type="text" class="f-text" id="district" placeholder="範例：花蓮市">
                </div>
                <div class="col-4">
                    <label for="village" class="f-label">村里</label>
                    <input type="text" class="f-text" id="village" placeholder="範例：大湖里">
                </div>
            </div>
            <button type="button" class="savebtn btn-10-s btn-color-green">儲存 </button>
        </section>
        <section>
            <h5>村里人口數</h5>
            <div class="row">
                <div class="col-6">
                    <label for="household" class="f-label">戶數</label>
                    <input type="text" class="f-text" id="household" placeholder="範例：1,500">
                </div>
                <div class="col-6">
                    <label for="population" class="f-label">人口數</label>
                    <input type="text" class="f-text" id="population" placeholder="範例：3,200">
                </div>
            </div>
            <button type="button" class="savebtn btn-10-s btn-color-green">儲存 </button>
        </section>
        <section>
            <div class="pic-upload">
                <div id = "dropzone"> 
                    <label class="uploadpic" for="customFileInput">
                        <input id="customFileInput" type="file"/>
                        <div><i class="bi bi-cloud-arrow-up"></i></div>
                    </label>
                    <h5>上傳圖片</h5>
                    <h6>請點選圖片上傳，或直接拖曳圖片至此</h6>
                    <p>設計最佳建議：1440 x 400 像素，且大小不得超過 100 KB 的圖檔</p>
                    <img id = "bannerimg">
                </div>
                <h6><i class="bi bi-image"></i><span id = "fileName"></span></h6>
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
</template>

<script>

import backendNavbar from './backendNavbar.vue';


export default {
  components: {
      backendNavbar,
    },
    mounted() {
    
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
    
function doFirst(){
            document.getElementById('dropzone').ondragover = dragOver
            document.getElementById('dropzone').ondrop = dropped

            document.getElementById('customFileInput').onchange = fileChange

        }
        function dragOver(e){
            e.preventDefault()
        }
        function dropped(e){
            e.preventDefault()
            
            let file = e.dataTransfer.files[0]
            // console.log(file)

            fileName.innerText = file.name

            let readFile = new FileReader()
            readFile.readAsDataURL(file)
            readFile.addEventListener('load',function(){
              let image = document.getElementById('bannerimg')
                image.src = readFile.result
                image.style.width = '100%'
                image.style.height = '100%'
                image.style.maxWidth = '1200px'
                image.style.maxHeight = '400px'

            })    
        }

        function fileChange(){
            let file = document.getElementById('customFileInput').files[0]


            fileName.innerText = file.name
            // let message = ``
            // message += `File Name: ${file.name}\n`
            // message += `File Type: ${file.type}\n`
            // message += `File size: ${file.size} byte\n`
            // message += `Last modified: ${file.lastModifiedDate}\n`

            // document.getElementById('fileInfo').value = message

            let readFile = new FileReader()
            readFile.readAsDataURL(file)
            readFile.addEventListener('load',function(){
                let image = document.getElementById('bannerimg')
                image.src = readFile.result

                image.style.width = '100%'
                image.style.height = '100%'
                image.style.maxWidth = '1200px'
                image.style.maxHeight = '400px'
            })
        }


        window.addEventListener('load',doFirst)




  },
 
  

  
}
</script>