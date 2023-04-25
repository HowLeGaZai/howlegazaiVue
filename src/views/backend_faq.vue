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
    <mobileNotSupport></mobileNotSupport>
  </div>
  <Footer></Footer>
</template>

<script>

import backendNavbar from '../components/backendNavbar.vue';
import Footer from '../components/Footer.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import backCalender from '../components/BackCalender.vue';
import axios from 'axios';
import mobileNotSupport from '@/components/mobileNotSupport.vue';




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

        // QA 問答
    webQA(){
      this.question1 = this.jsonData[this.jsonData.length-1].QUESTION_1 ;
      this.question2 = this.jsonData[this.jsonData.length-1].QUESTION_2 ;
      this.question3 = this.jsonData[this.jsonData.length-1].QUESTION_3 ;
      this.question4 = this.jsonData[this.jsonData.length-1].QUESTION_4 ;
      this.question5 = this.jsonData[this.jsonData.length-1].QUESTION_5 ;
      this.answer1 = this.jsonData[this.jsonData.length-1].ANSWER_1 ;
      this.answer2 = this.jsonData[this.jsonData.length-1].ANSWER_2 ;
      this.answer3 = this.jsonData[this.jsonData.length-1].ANSWER_3 ;
      this.answer4 = this.jsonData[this.jsonData.length-1].ANSWER_4 ;
      this.answer5 = this.jsonData[this.jsonData.length-1].ANSWER_5 ;
    },

  },
  components: {
    backendNavbar, Footer, backCalender, BackLeftNav,mobileNotSupport
  },
  mounted() {
      // 最後QA問答 axios     
      axios
            .post('http://localhost/TGD104G1/public/API/QAdata.php',{})
            .then(response => {
                this.jsonData = response.data;
                // alert(response.data)
                // console.log(this.jsonData[this.jsonData.length-1].FULLNAME);
                this.webQA();
                // console.log(this.jsonData.length);
                // console.log(this.jsonData);
            })
            .catch(error => {
                // console.log(error);
            });

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