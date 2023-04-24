<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">
      <backCalender></backCalender>

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
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="" v-model="question1"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text" v-model="answer1"
                      placeholder=""></textarea>
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
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="" v-model="question2"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="" v-model="answer2" ></textarea>
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
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="" v-model="question3"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text" 
                      placeholder="" v-model="answer3"></textarea>
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
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="" v-model="question4"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="" v-model="answer4"></textarea>
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
                    <textarea name="" id="tarea" cols="30" class="f-text" placeholder="" v-model="question5"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <label for="tarea" class="f-label qalabel">答案</label>
                    <textarea name="" id="tarea" cols="30" rows="5" class="f-text"
                      placeholder="" v-model="answer5"></textarea>
                  </div>
                </div>
              </div>
            </div>


            <button type="button" class="savebtn btn-10-s btn-color-green" @click="saveqa">儲存 </button>
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
import axios from 'axios';




export default {
  data() {
    return {
      question1:'',
      question2:'',
      question3:'',
      question4:'',
      question5:'',
      answer1 :'',
      answer2 :'',
      answer3 :'',
      answer4 :'',
      answer5 :'',
    }
  },

  //存問題答案的from data
  methods: {
    saveqa(){
      const formData = new FormData()
      formData.append('question1', this.question1)
      formData.append('question2', this.question2)
      formData.append('question3', this.question3)
      formData.append('question4', this.question4)
      formData.append('question5', this.question5)
      formData.append('answer1', this.answer1)
      formData.append('answer2', this.answer2)
      formData.append('answer3', this.answer3)
      formData.append('answer4', this.answer4)
      formData.append('answer5', this.answer5)

      axios
        .post('http://localhost/TGD104G1/public/API/QA.php', formData)
        // .post('https://tibamef2e.com/tgd104/g1/webinfo.php', formData)
        .then(response => {
            this.jsonData = response.data;
            console.log(response.data);
        })
        .catch(error => {
            console.log(error);
        });

      alert("儲存成功")
    },
  },
  components: {
    backendNavbar, Footer, backCalender, BackLeftNav,
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