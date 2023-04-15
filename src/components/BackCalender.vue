<template>
  <div class="container-date">
    <!-- 需渲染資料區塊 -->
    <p>西曆：{{ nowdate }}</p>
    <!-- <p>農曆：癸卯年 乙卯月 戊辰日 二月二十 </p> -->
    <p>農曆：{{ lunordate }} {{ solarterm }} </p>
    <!-- <p>農曆：{{ lunordate }}</p> -->

    <!-- 需渲染資料區塊 -->
  </div>
</template>

<script>

import { getLunar } from 'chinese-lunar-calendar';


export default {
  data() {
    return {
      nowdate: '',
      lunordate: '',
      solarterm :'',
      solartermList:[],
    }
  },

  methods: {
    getDate() {
      //取得西歷
      const now = new Date();
      const year = now.getFullYear();
      const month = now.getMonth() + 1;
      const day = now.getDate() ;
      this.nowdate = `${year} 年 ${month.toString().padStart(2, '0')} 月 ${day.toString().padStart(2, '0')} 日`;
      // console.log(this.nowdate);
      //取得農曆與節氣
      const lunordateOrigin = getLunar(year, month, day);
      // console.log(lunordateOrigin);
     
      this.lunordate = (lunordateOrigin.lunarYear) + ' ' +
                      ((lunordateOrigin.lunarMonth).toString().padStart(2, '0')) + ' 月 ' +
                      ((lunordateOrigin.lunarDate).toString().padStart(2, '0')) + ' 日' + '  ';
      // console.log(lunordate);
    },



    // 取得節氣&轉換簡繁
    async getSolarTerm() {
      await axios 
      .get('/solarTermsTrans.json')
      .then((result) => {
        this.solartermList = result.data;
        // console.log(this.solartermList);
      })
      // console.log(this.solartermList);
 
      // 簡繁對照
      // this.solarTerm = lunordateOrigin.solarTerm ? (' — ' + lunordateOrigin.solarTerm) : ' ';    
      const now = new Date();
      const year = now.getFullYear();
      const month = now.getMonth() + 1;
      const day = now.getDate() ;
      const lunordateOrigin = getLunar(year, month, day);
      
      const a = lunordateOrigin.solarTerm; //當下時間的節氣字串
      
      const solarTermFilter = this.solartermList; 
      // console.log(solarTermFilter);
      // const targetSolarTermKey = Object.values(solarTermFilter); //繁體array
      // const solarTermFilterKey = Object.keys(solarTermFilter); //簡體array
      const searchKey = Object.keys(solarTermFilter).find((key) => {
        return key.includes(a);
      });
      // console.log(searchKey);
      

      if (searchKey) {
        this.solarterm = solarTermFilter[searchKey];
      } else {
        this.searchResult = "";
      }
      
}


      
  },
    //掛載前執行撈取資料
  created() {

  },
  
  mounted() {
    this.getDate(); 
    this.getSolarTerm() ;

  }
}






</script>