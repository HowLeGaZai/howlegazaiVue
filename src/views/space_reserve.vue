<template>

<navbar></navbar>

    <main class="front-space">
       <section>
        <h1 class="title_space">預約空間</h1>
        <div class="reserve-time">
          <h4>預約時間/場地:</h4>
          <h5>{{date}} {{time}}</h5>
          <!-- <button type="button" class="btn-m btn-color-gray">修改</button> -->
        </div>
        
        <div class="space nobtn">
          <div class="image space-pic">
              <img src="../assets/img/s_1.png" alt="">
          </div>
          <div class="space-info">
              <h3 class="space-title">A102教室</h3>
              <h5 class="space-type">活動及表演</h5>
              <h5 class="space-size">空間大小：<span>20</span>坪</h5>
              <h5 class="space-add">地址：花蓮縣大湖里南京東路三段219號4樓</h5>
          </div>
        </div>
      </section>
            <table class="green-table">
                <thead>
                    <tr>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row left">
                        <td>
                            <h4>申請資料</h4>
                        </td>
                    </tr>
                    <tr class="row left">
                        <td>
                            <label class="f-checkbox">同申請者
                                <input type="checkbox" name="multichoice">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-12">
                            <label for="name" class="f-label">姓名</label>
                            <input type="text" class="f-text" id="name" v-model="name">
                        </td>
                        <td class="col-12">
                            <label for="inputState" class="f-label">稱謂</label>
                            <select id="inputState" class="f-select" v-model="inputState">
                            <option selected>先生</option>
                            <option>女士</option>
                            </select>
                        </td>
                        <td class="col-12">
                            <label for="phone" class="f-label">電話</label>
                            <input type="text" class="f-text" id="phone" v-model="phone">
                        </td>
                        <td class="col-12">
                            <label for="mail" class="f-label"> Email</label>
                            <input type="email" class="f-text" id="mail" v-model="mail">
                        </td>
                        <td class="col-12">
                            <label for="mail" class="f-label"> 申請用途</label>
                            <textarea v-model="apply" name="" id="tarea" cols="30" rows="10" class="f-text" placeholder="請填寫申請用途" ></textarea>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                </tfoot>
        </table>
      <div class="confirm-btn">
          <router-link to="/space_info" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-gray" @click="navigate" role="link">返回上一步</button>
            </router-link>
             <!-- <router-link to="/space_reserve_check" custom v-slot="{ navigate }"> -->
                          <button class="btn-m btn-color-green" @click="navigate2" >填寫完成，下一步</button>
            <!-- </router-link> -->
        <!-- <button type="button" class="btn-m btn-color-gray" onclick="location.href='/space_info'">返回上一步</button>
        <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_reserve_check'">填寫完成，下一步</button> -->
      </div>
    </main>
    <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';
import axios from 'axios';

export default {
  data () {
    return {
        date:'',
        time:'',
        onlydate:'',
        start:'',
        end:'',

        // 申請資料
        name:'',
        inputState:'', //稱謂
        phone:'',
        mail:'',
        apply:'',
        
    }
  },  
  components: {
      navbar,Footer,
    },
    mounted(){
         this.date = sessionStorage.getItem('date');
         this.time = sessionStorage.getItem('time');
         this.start = sessionStorage.getItem('start');
         this.end = sessionStorage.getItem('end');
         this.onlydate = sessionStorage.getItem('onlydate');

         
    },
    methods:{
        navigate2(){

            const formData = new FormData()
            formData.append('date', this.onlydate)
            formData.append('start', this.start)
            formData.append('end', this.end)
            formData.append('APPLY_NAME', this.name)
            formData.append('APPLY_TITLE', this.inputState)
            formData.append('APPLY_MAIL', this.mail)
            formData.append('APPLY_PHONE', this.phone)
            formData.append('PURPOSE', this.apply)

            axios
            .post('http://localhost/howlegazaiVue2/public/API/spaceInfo.php', formData)
            .then(response => {
                // this.jsonData = response.data;
                console.log(response.data);
            })
            .catch(error => {
                console.log(error);
            });
            this.$router.push('/space_reserve_check')
        },
        
    }
}
</script>