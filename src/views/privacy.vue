<template>
  <navbar></navbar>
  <main>
    <section class="privacy">
      <h1 class="title_space">網站隱私權聲明</h1>
      <div>
        好里家在（以下簡稱本站）基於網站開發測試為目的，依個人資料保護法（以下簡稱個資法）第八條規定，告知下列事項，請您詳閱。
      </div>

      <h2>隱私權聲明適用範圍</h2>
      <ul>
        <li>本隱私權聲明（以下簡稱本聲明），適用於您在瀏覽或使用本網站提供之服務時，所涉及的個人資料蒐集、處理、利用與保護，但不適用於與本站功能連結之外部網站，外部網站均有其專屬之隱私權聲明，本站不負任何連帶責任。
        </li>
      </ul>

      <h2>蒐集個人資料之目的</h2>
      <ul>
        <li>本站為執行網站開發測試所需，蒐集您的個人資料。</li>
      </ul>

      <h2>蒐集個人資料之類別</h2>
      <ol>
        <li>承上，本站蒐集您的個人資料包括中文姓名、國民身分證統一編號、連絡電話與地址、電子郵件地址、活動報名紀錄、商品買賣紀錄、文章留言發布紀錄、GPS 定位等，詳如本站操作紀錄。
        </li>
        <li>本站及金流服務商將進行各項網路資源服務之管理及記錄，包括蒐集
          Cookies、IP 位址、瀏覽網頁、使用檔案及時間等軌跡資料。
        </li>
      </ol>

      <h2>個人資料利用之期間、地區、對象與方式</h2>
      <ol>
        <li>本站於蒐集目的之存續期間或因執行業務所需保存期間內，得於中華民國領域合理利用您的個人資料。</li>
        <li>本站利用您的個人資料於蒐集目的宣告之各項業務執行，包括因業務執行所必須之各項聯繫與通知。</li>
        <li>本站利用各項網路資源服務使用紀錄，進行總體流量、使用行為研究及加值應用，以提昇網站服務品質，不針對個別使用者分析</li>
      </ol>

      <h2>個人資料之提供</h2>
      <ol>
        <li>您可自由選擇是否提供相關個人資料，惟若拒絕提供個人資料，建議使用<router-link :to="{name:'welcome'}">測試入口</router-link>進行相關服務。
        </li>
        <li>若您提供錯誤、過時、不完整或具誤導性的資料，而損及您的相關權益，本站將不負相關賠償責任。</li>
      </ol>

      <h2>當事人就個人資料得行使之權利</h2>
      <ul>
          <li>您可依個資法第三條規定，就本站保有您的個人資料行使查詢、閱覽、複本、補充、更正、停止蒐集、處理、利用或請求刪除。</li>
      </ul>

      <h2>告知聲明之修訂</h2>
      <ul>
          <li>本站保有修訂本告知聲明之權利，本站於修訂本告知聲明內容後將透過您所提供的聯絡方式或於網站上以公告的方式通知您，如您未提出異議或繼續使用本站相關服務，表示您已同意本站所更改之內容。</li>
      </ul>
    </section>
  </main>
  <Footer></Footer>
</template>

<script>
// import required modules
import navbar from "../components/navbar.vue";
import Footer from "../components/Footer.vue";

export default {
  data() {
    return {};
  },
  components: {
    navbar,
    Footer,
  },
  setup() {
    return {};
  },
};
</script>
