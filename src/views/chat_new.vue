<template>
<navbar></navbar>
    <main class="new-chat">
        <h2 class="title_space">發起討論</h2>
        <div class="row">
            <div class="col-md-9 col-12">
                <label for="name" class="f-label">討論標題</label>
                <input type="text" class="f-text" id="name" placeholder="請輸入討論標題">
            </div>
            <div class="col-md-3 col-12">
                <label for="chat-type" class="f-label">討論分類</label>
                <select name="" id="chat-type" class="f-select">
                    <option value="1">-選擇-</option>
                    <option value="2">藝文</option>
                    <option value="3">旅遊</option>
                    <option value="4">美食</option>
                </select>
            </div>
        </div>

            <div id="container">
                
                   <textarea id="editor">
                        <p></p>
                   </textarea>
                   
                    
                
            </div>

            

            <div class="confirm-btn">
              <button type="button" class="btn-m btn-color-white" onclick="location.href='#/chat'">取消</button>
              <button type="button" class="btn-m btn-color-green" onclick="location.href='#/chat_info'">發布</button>
            </div>

       
    </main>
      <Footer></Footer>
</template>


<script>
 import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

import navbar from './navbar.vue';
import Footer from './Footer.vue';

 export default {
    components: {
      navbar,Footer,
    },
   mounted(){
    ClassicEditor
		.create( document.querySelector( '#editor' ) ,{ckfinder: {
        uploadUrl: '/api/upload' // 上傳圖片的接口路徑
      },
      // 配置uploadAdapter以實現圖片上傳
      // 在uploadAdapter中使用XMLHttpRequest或fetch等技術實現圖片上傳
      // 這裡僅提供一個示例uploadAdapter
      // 該uploadAdapter只是將圖片Base64編碼後返回給CKEditor
      // 實際上需要根據具體需求實現圖片上傳
      // 更多細節可參考CKEditor官方文檔：https://ckeditor.com/docs/ckeditor5/latest/features/image-upload/simple-upload-adapter.html
      simpleUpload: {
        uploadUrl: '/api/upload',
        headers: {
          'X-CSRF-TOKEN': 'CSRF-Token',
          Authorization: 'Bearer <JSON Web Token>'
        }
      }}
        // , {  toolbar: ['heading', '|', 'bold', 'italic', 'blockQuote', 'imageUpload', 'link', 'mediaEmbed', 'insterTable', 'undo', 'redo'] }
         )
		.then( editor => {
			window.editor = editor;
      
		} )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );


    
   },
   

    
}


</script>