/**

 * @desc 格式化日期字符串

 * @param { String} - 日期时间字符串

 * @returns { String } 格式化后的日期字符串

 */

export function formatDate(value) {


    let timestamp=new Date(value.replace(/-/g,"/")).getTime();


    let arrTimestamp = (timestamp + '').split('');

    for (let start = 0; start < 13; start++) {

      if (!arrTimestamp[start]) {

        arrTimestamp[start] = '0';

      }

    }

    timestamp = arrTimestamp.join('') * 1;

    let minute = 1000 * 60;

    let hour = minute * 60;

    let day = hour * 24;

    let month = day * 30;

    let now = new Date().getTime();

    let diffValue = now - timestamp;

    // 如果本地时间反而小于变量时间

    if (diffValue < 0) {

      return '不久前';

    }

    // 计算差异时间的量级

    let yearC = diffValue / (month*12);

    let monthC = diffValue / month;

    let weekC = diffValue / (7 * day);

    let dayC = diffValue / day;

    let hourC = diffValue / hour;

    let minC = diffValue / minute;

    // 数值补0方法

    let zero = function (value) {

      if (value < 10) {

        return '0' + value;

      }

      return value;

    };

    // 使用

    if (dayC >= 3) {

      // 超過3天直接顯示 YYYY-MM-DD

      return (function () {

        let date = new Date(timestamp);

        return date.getFullYear() + '-' + zero(date.getMonth() + 1) + '-' + zero(date.getDate());

      })();

    // } else if (monthC >= 1) {

    //     return (function () {

    //         let date = new Date(timestamp);
    
    //         return date.getFullYear() + '-' + zero(date.getMonth() + 1) + '-' + zero(date.getDate());
    
    //       })();

    // } else if (weekC >= 1) {

    //     return (function () {

    //         let date = new Date(timestamp);
    
    //         return date.getFullYear() + '-' + zero(date.getMonth() + 1) + '-' + zero(date.getDate());
    
    //       })();
    // } else if (dayC >= 4) {

    //     return (function () {

    //         let date = new Date(timestamp);
    
    //         return date.getFullYear() + '-' + zero(date.getMonth() + 1) + '-' + zero(date.getDate());
    
    //       })();

    } else if (dayC >= 1) {

      return parseInt(dayC) + '天前';

    } else if (hourC >= 1) {

      return parseInt(hourC) + '小時前';

    } else if (minC >= 1) {

      return parseInt(minC) + '分鐘前';

    }

    return '剛剛';

  }