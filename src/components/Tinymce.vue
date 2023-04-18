<template>
  <editor v-model="editorValue" :init="init"></editor>
</template>

<script>

import { defineProps, defineEmits } from 'vue';
import Editor from '@tinymce/tinymce-vue';
import tinymce from 'tinymce/tinymce';

// 外觀
import "tinymce/themes/silver/theme.min";
import 'tinymce/skins/ui/oxide/skin.css';
import 'tinymce/themes/silver';

// Icon
import 'tinymce/icons/default';

// 用到的外掛
import 'tinymce/plugins/emoticons';
import 'tinymce/plugins/emoticons/js/emojis.js';
import 'tinymce/plugins/table';
import 'tinymce/plugins/quickbars';
import 'tinymce/plugins/image';
import 'tinymce/plugins/code';

// 語言包
import 'tinymce-i18n/langs5/zh_TW.js';
// import 'tinymce-i18n/langs/zh_Hans.js' (TinyMCE 6 的簡體中文)

export default {
  props: {
    modelValue: {
      type: String,
      default: '',
    },
    plugins: {
      type: [String, Array],
      default: 'quickbars emoticons table image code',
    },
    toolbar: {
      type: [String, Array],
      default:
        ' bold italic underline strikethrough | fontsizeselect | forecolor backcolor | alignleft aligncenter alignright alignjustify|bullist numlist |outdent indent blockquote | undo redo | axupimgs | table | image | emoticons | code | removeformat',
    },
  },
  emits: ['update:modelValue',],
  components: {
    Editor,
  },
  data() {
    return {
      init: {
        selector: 'textarea',
        placeholder: '請輸入內容...',
        language: 'zh_TW',
        height: 500,
        menubar: false,
        content_css: false,
        statusbar: false,
        mobile: {
          menubar: true,
        },
        content_style:
          "body { font-family: sans-serif, DFKai-SB, Arial,; }",
        skin: false,
        plugins: this.plugins,
        toolbar: this.toolbar,
        quickbars_insert_toolbar: false,
        branding: false,
        // images_upload_url: '/TGD104G1/dist/API/tinymce_uploadimg.php',
        images_upload_url: 'http://localhost/TGD104G1/public/API/tinymce_uploadimg.php',
        // images_upload_url: 'https://tibamef2e.com/tgd104/g1/tinymce_uploadimg.php',
        images_upload_base_path: 'http://localhost/TGD104G1/src/assets/img/',
        // images_upload_base_path: 'https://tibamef2e.com/tgd104/g1/dist/img/userupload',
        images_upload_credentials : true,
    //     images_upload_handler: function (blobInfo, succFun, failFun) {
    //     var xhr, formData;
    //     var file = blobInfo.blob();//转化为易于理解的file对象
    //     xhr = new XMLHttpRequest();
    //     xhr.withCredentials = false;
    //     xhr.open('POST', 'https://tibamef2e.com/tgd104/g1/tinymce_uploadimg.php');
    //     xhr.onload = function() {
    //         var json;
    //         if (xhr.status != 200) {
    //             failFun('HTTP Error: ' + xhr.status);
    //             return;
    //         }
    //         json = JSON.parse(xhr.responseText);
    //         if (!json || typeof json.location != 'string') {
    //             failFun('Invalid JSON: ' + xhr.responseText);
    //             return;
    //         }
    //         succFun(json.location);
    //     };
    //     formData = new FormData();
    //     formData.append('file', file, file.name );//此处与源文档不一样
    //     xhr.send(formData);
    // }
      },
      editorValue: this.modelValue,
    };
  },
  watch: {
    modelValue(newValue) {
      this.editorValue = newValue;
    },
    editorValue(newValue) {
      this.$emit('update:modelValue', newValue);
    },
  },
  methods: {
    // click(){
    //   console.log('click')
    //   this.$emit('tovalue')
    // }
    updateEditorValue(editorValue) {
    },

    sendEditorValue() {
      this.$emit("getEditorValue", this.$refs.editorValue);
    },

  
  // logEditorValue() {
  //   this.editorValue.getContent();
  //   console.log(this.editorValue);
  // },
  // emit(){
  //   console.log('emit-text');
  //   this.$emit('emit-text', this.text);
  // }
},
};
</script>

<style>

.tox .tox-button{
  background-color: #27b096;
  border-color: #27b096;
}
.tox .tox-button--secondary{
  background-color: #f0f0f0;
  border-color: #f0f0f0;
}
.tox .tox-button--naked{
  background-color: transparent;
  border-color: transparent;
}
.tox .tox-dialog__body-nav-item--active{
  color: #27b096;
  border-color: #27b096;
}

</style>