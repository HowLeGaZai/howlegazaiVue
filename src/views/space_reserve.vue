<template>

<navbar></navbar>

    <main class="front-space">
       <section>
        <h2 class="title_space">預約空間</h2>
        <div class="reserve-time">
          <h4>預約時間/場地:</h4>
          <h5>2023-03-05（日）13:00 - 13:59</h5>
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
                            <input type="text" class="f-text" id="name">
                        </td>
                        <td class="col-12">
                            <label for="inputState" class="f-label">稱謂</label>
                            <select id="inputState" class="f-select">
                            <option selected>先生</option>
                            <option>女士</option>
                            </select>
                        </td>
                        <td class="col-12">
                            <label for="phone" class="f-label">電話</label>
                            <input type="text" class="f-text" id="phone">
                        </td>
                        <td class="col-12">
                            <label for="mail" class="f-label"> Email</label>
                            <input type="email" class="f-text" id="mail">
                        </td>
                        <td class="col-12">
                            <label for="mail" class="f-label"> 申請用途</label>
                            <textarea name="" id="tarea" cols="30" rows="10" class="f-text" placeholder="請填寫申請用途"></textarea>
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
             <router-link to="/space_reserve_check" custom v-slot="{ navigate }">
                          <button class="btn-m btn-color-green" @click="navigate" role="link">填寫完成，下一步</button>
            </router-link>
        <!-- <button type="button" class="btn-m btn-color-gray" onclick="location.href='/space_info'">返回上一步</button>
        <button type="button" class="btn-m btn-color-green" onclick="location.href='/space_reserve_check'">填寫完成，下一步</button> -->
      </div>
    </main>
    <Footer></Footer>
</template>

<script>

import navbar from './navbar.vue';
import Footer from './Footer.vue';

export default {
  components: {
      navbar,Footer,
    },
}
</script>