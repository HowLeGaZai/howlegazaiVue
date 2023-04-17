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
        <BackLeftNav></BackLeftNav>

        <div class="section_right">
          <h2>常見問題設置</h2>
          <section>
            <div class="frame">
              <button type="button" class="qabutton">常見問題一</button>
              <div class="content">
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">問題</label>
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="">大湖里為什麼叫大湖里</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="">因為民國57年7月1日，改隸院轄花蓮縣後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame">
              <button type="button" class="qabutton">常見問題二</button>
              <div class="content">
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">問題</label>
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="">大湖里為什麼叫大湖里</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="">因為民國57年7月1日，改隸院轄花蓮縣後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame">
              <button type="button" class="qabutton">常見問題三</button>
              <div class="content">
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">問題</label>
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="">大湖里為什麼叫大湖里</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="">因為民國57年7月1日，改隸院轄花蓮縣後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame">
              <button type="button" class="qabutton">常見問題四</button>
              <div class="content">
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">問題</label>
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="">大湖里為什麼叫大湖里</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="">因為民國57年7月1日，改隸院轄花蓮縣後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="frame">
              <button type="button" class="qabutton">常見問題五</button>
              <div class="content">
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">問題</label>
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="">大湖里為什麼叫大湖里</textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="">因為民國57年7月1日，改隸院轄花蓮縣後，大湖村改名為「大湖里」， 沿用至今；於91年9月1日起，因區域內人口眾多而劃出秀湖里</textarea>
                  </div>
                </div>
              </div>
            </div>


            <button type="button" class="savebtn btn-10-s btn-color-green">儲存 </button>
          </section>
        </div>


      </div>

      <!-- 992以下顯示內容 -->
    </main>
    <div :class="bodyClass" class="nosupport">
      <main>
        <section class="noSupport">
          <a href="#">
            <div>
              <img class="LiIcon" src="../assets/img/LiIcon.png" alt="">
              <h1>歹勢！後台目前不支援手機</h1>
              <img class="cat" src="../assets/img/Cat.png" alt="">
              <p>下班請休息，我們明天再忙！</p>
            </div>
          </a>
        </section>
      </main>

    </div>
  </div>
  <Footer></Footer>
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import Footer from './Footer.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import backCalender from '../components/BackCalender.vue';




export default {
  components: {
    backendNavbar, Footer, backCalender, BackLeftNav
  },
  mounted() {
    // ======nav的收合======






    var qabtn = document.getElementsByClassName("qabutton");
    var i;

    for (i = 0; i < qabtn.length; i++) {
      qabtn[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        }
      });
    }



  },




}
</script>