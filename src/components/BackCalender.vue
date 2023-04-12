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
      const day = now.getDate() +8;
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
      console.log(this.solartermList);
 
      // 簡繁對照
      // this.solarTerm = lunordateOrigin.solarTerm ? (' — ' + lunordateOrigin.solarTerm) : ' ';    
      const solarTermFilter = this.solartermList; 
      const solarTermFilterKey = Object.key(solarTermFilter)
      // const targetSolarTermKey = Object.values(solarTermFilter)
      
      // return solarTermFilter[key] === lunordateOrigin.solarTerm[value] ;
      // if(solarTermFilterkey === "穀雨") {
      //   console.log('讚')
      // }

      
      // if (targetSolarTermKey) {
      //   this.solarTerm = " — " + targetSolarTermKey;
      // } else {
      //   this.solarTerm = "";
      //   }
      console.log(solarTermFilterKey)
}


      
  },

    //掛載前執行撈取資料
  created() {

  },
  
  mounted() {
    this.getDate(); 
    this.getSolarTerm() ;

    // axios
    //   .get('/solarTermsTrans.json')
    //   .then((result) => {
    //     this.solartermList = result.data;
    //     // console.log(this.solartermList);
    //   })
    //   .catch((err) => {
    //     console.log("error")
    //   });
    
     

    

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

// export default {
//   data() {
//     return {
//       nowdate: '',
//       // lunordate: '',
//       // solarterm: '',



//     }
//   },
//   methods: {
//     getDate() {
//       //取得西歷
//       const now = new Date();
//       const year = now.getFullYear();
//       const month = now.getMonth() + 1;
//       const day = now.getDate();
//       this.nowdate = `${year} 年 ${month.toString().padStart(2, '0')} 月 ${day.toString().padStart(2, '0')} 日`;
//       console.log(this.nowdate);
//       //取得農曆
//       // const lunordateOrigin = getLunar(year, month, day);
//       // console.log(lunordateOrigin);

//       // this.lunordate = (lunordateOrigin.lunarYear) + ' ' +
//       //   ((lunordateOrigin.lunarMonth).toString().padStart(2, '0')) + ' 月 ' +
//       //   ((lunordateOrigin.lunarDate).toString().padStart(2, '0')) + ' 日';
//       // console.log(lunordate);

//     },

//     // 取得節氣&轉換簡繁
//     // getSolarTerm() {
//     //   this.solarTerm = lunordateOrigin.solarTerm ? (' — ' + lunordateOrigin.solarTerm) : ' ';
      
//     //   function solarTermTrans() {
//     //     for (i = 0; i <= this.solarterm.lengnth; i++) {
//     //       console.log("good")
//     //     }

//     //   }


//     // },

//     //掛載前執行撈取資料
//     // created() {
//     //   axios
//     //     .get('/solarTermsTrans.json')
//     //     .then((result) => {
//     //       this.solarterm = result.data;
//     //       console.log(this.solarterm);
//     //     })
//     //     .catch((err) => {
//     //       console.log("error")
//     //     });
//     // },

//     mounted() {
//       this.getDate();
//       // this.getSolarTerm();
//       //
//     }
//    } }




</script>