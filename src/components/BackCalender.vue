<template>
  <div class="container-date">
    <!-- 需渲染資料區塊 -->
    <p>西曆：{{ nowdate }}</p>
    <!-- <p>農曆：癸卯年 乙卯月 戊辰日 二月二十 </p> -->
    <p>農曆：{{ lunordate }} </p>
    <!-- 需渲染資料區塊 -->
  </div>
</template>

<script>

// import axios from 'axios';


import { getLunar } from 'chinese-lunar-calendar';

export default {
  data() {
    return {
      nowdate: '',
      lunordate: '',

    }
  },
  methods: {
    getDate() {
      //取得西歷
      const now = new Date();
      const year = now.getFullYear();
      const month = now.getMonth() + 1;
      const day = now.getDate() - 8;
      this.nowdate = `${year} 年 ${month.toString().padStart(2, '0')} 月 ${day.toString().padStart(2, '0')} 日`;
      // console.log(this.nowdate);

      //取得農曆與節氣
      const lunordateOrigin = getLunar(year, month, day);
      console.log(lunordateOrigin);
      const solarTerm = lunordateOrigin.solarTerm ? (' — ' + lunordateOrigin.solarTerm) : ' ';

      this.lunordate = (lunordateOrigin.lunarYear) + ' ' +
                      ((lunordateOrigin.lunarMonth).toString().padStart(2, '0')) + ' 月 ' +
                      ((lunordateOrigin.lunarDate).toString().padStart(2, '0')) + ' 日' + '  '
                       + solarTerm;
      // console.log(lunordate);

    }
  },



  mounted() {

    this.getDate();
    //
    // axios
    //   .get('/lunar_calendar.json')
    //   .then((result) => {
    //       this.lunordate= result[0];
    //         console.log(this.lunordate); 
    //     })
    //   .catch((err) => {
    //         console.log("error")
    //     });
    // },


  }

}


</script>