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
      default: 'quickbars emoticons table image',
    },
    toolbar: {
      type: [String, Array],
      default:
        ' bold italic underline strikethrough | fontsizeselect | forecolor backcolor | alignleft aligncenter alignright alignjustify|bullist numlist |outdent indent blockquote | undo redo | axupimgs | table | image | emoticons | removeformat',
    },
  },
  emits: ['update:modelValue'],
  components: {
    Editor,
  },
  data() {
    return {
      init: {
        language: 'zh_TW',
        height: 500,
        menubar: false,
        content_css: false,
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
        images_upload_url: '/demo/upimg.php',
        images_upload_base_path: '/demo',
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
  methods:{

  }
};
</script>