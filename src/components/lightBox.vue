<template>
    <div id="lightbox" class="none">
      <article>
    <div class="popup_content">
      <button type="button" class="btn-cir-m  btn-color-white btn_modal_close changeposition" @click="hideLightBox"><i class="bi bi-caret-left-fill"></i></button>
      <h3>{{ title }}</h3>
      <div class="apply_cancel">
            <div class="cancelreason">
                <h5>取消原因:</h5>
                <select v-model="selectedOption" name="" id="" class="f-select col1 width70percentage">
                  <option value="" disabled selected>-選擇-</option>
                  <option v-for="option in categoryOptions" :key="option" :value="option">{{ option }}</option>
                </select>
            </div>
            <div class="remark">
            <h5>備註:</h5>
            <textarea name="" id="" cols="30" rows="10" style="resize:none" class="f-text width70percentage" placeholder="請輸入原因" v-model="textareaValue"></textarea>
            </div>
          </div>
      <h6>注意事項：<br>{{ note }}</h6>
      <button type="button" class="btn-m btn-color-green" @click="sendDataToParent1">{{ btn }}</button>
    </div>
  </article>
</div>
</template>

<script>
export default {
  props: {
    title: String,
    CANCEL: String,
    note: String,
    btn: String,
    category: {
      type: Array,
      default: () => []
    }
  },

  data(){
        return {
          selectedOption: '',
          textareaValue: '',
        }
  },
  methods: {

    hideLightBox() {
      let lightbox_el = document.getElementById("lightbox");
      lightbox_el.classList.add("none");
    },

    sendDataToParent1() {
      const cancelData = {
        selectValue: this.selectedOption,
        textareaValue: this.textareaValue
      }
      this.$emit('updatedCANCEL', cancelData);

      this.hideLightBox();
      this.selectedOption = '';
      this.textareaValue ='';
    }

  },
  computed: {
    categoryOptions() {
      return this.category || []
    },
  },     
};
</script>