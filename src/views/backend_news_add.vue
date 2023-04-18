<template>
  <backendNavbar></backendNavbar>
  <div class="body-sec">
    <main class="backpadding">
      <backCalender></backCalender>

    <section class="container-main">
      <!------- 補這裡：後台側欄選單 ------->
      <BackLeftNav></BackLeftNav>
      <!------- 補這裡：後台側欄選單 ------->
    
      <div class="section_right">
                    <div class="news_title">
                        <h2>新增消息</h2>
                    </div> 
                        <section>
                            <label for="electionyear" class="f-label"><h5>文章標題</h5></label>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" class="f-text" id="lastname" placeholder="範例：王">
                                </div>
                            
                                <div class="col-2">
                                    <label for="electionyear" class="f-label"><h5>文章分類</h5></label>
                                    <div>
                                        <select name="" id="selecte" class="f-select">
                                            <option value="1">-選擇-</option>
                                            <option value="2">宣傳</option>
                                            <option value="3">經費 </option>
                                            <option value="4">里民 </option>
                                            
                                        </select>
                                    </div>
                                
                                </div>
                                <div class="col-10">
                                    <label for="electionyear" class="f-label" ><h5 style="margin-bottom:5px">文章縮圖</h5></label>
                                    <div>
                                      <picture-crop></picture-crop>

                                        <!-- <div class="uploading">
                                            <label class="uploadpic" for="vrep-pic">
                                                <input id="vrep-pic" type="file" />
                                                <div class="btn-10-s btn-color-green ">
                                                    <i class="bi bi-arrow-bar-up"></i>上傳圖片
                                                </div>
                                            </label>
                                            <div class="pic-area">
                                                <div class="pic-area-box">
                                                    <img id = "vrepimg">
                                                    <span id = "fileName"></span>
                                                    <button class="trash"><i class="bi bi-trash3"></i></button>
                                                </div>
                                                <p>設計最佳建議：1000 x 1000 像素，且大小不得超過 100 KB 的圖檔</p>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <h5>文章內容</h5>
                        
                            <div id="container">
                                <!-- <div id="editor">
                                </div> -->
                                <Tinymce></Tinymce>
                                <div>
        <ckeditor :editor="editor" v-model="content" />
      </div>
                            </div>
                
                            <button type="button" class="savebtn btn-10-s btn-color-green">預覽</button>
                        </section>
                </div>
    </section>



    </main>
    <!------ 補這裡：不支援手機畫面 ------>
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
    <!------ 補這裡：不支援手機畫面 ------>
    </div>
    <Footer></Footer>
</template>

<script>

import backendNavbar from './backendNavbar.vue';
import backCalender from '../components/BackCalender.vue';
import BackLeftNav from '../components/BackLeftNav.vue';
import $ from 'jquery'
import 'jquery-ui-dist/jquery-ui'
import 'jquery-ui-dist/jquery-ui.min.css'
import Footer from './Footer.vue';
import Tinymce from "@/components/Tinymce.vue";

import PictureCrop from '../components/PictureCrop.vue';

export default {
  components: {
      backendNavbar,Footer,PictureCrop,Tinymce,backCalender,BackLeftNav
    },
     data() {
    return {
    };
  },
    mounted() {
    $('#resizable').resizable({});
    $('#datepicker').datepicker({
        monthNames: [ "一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月" ],
          dayNamesMin: [ "週日", "週一", "週二", "週三", "週四", "週五", "週六" ], 
          dateFormat: "yy/mm/dd",
          
          onSelect: function(){
            var selected = $(this).val();
            $('.selectedD').html(`日期:&nbsp` + selected);
            // console.log(selected);

            // let dayNamesMin = $(this).datepicker( "option", "dayNamesMin" );
            // console.log(dayNamesMin);
        }
    });


    
  },
 
  

  
}
</script>
