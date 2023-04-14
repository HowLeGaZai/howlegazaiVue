
<template>
    <div class="newuploading">
         <button class="uploadbtn">
                <span><i class="bi bi-arrow-bar-up"></i>上傳圖片</span>
                <input
                ref="uploadInput"
                type="file"
                accept="image/jpg, image/jpeg, image/png, image/gif"
                @change="selectFile"
                />
        </button>
            <!-- <label for="upload-file-6" class="uploadpic" >
            <input ref="uploadInput" type="file" id="upload-file-6" style="display:none" accept="image/jpg, image/jpeg, image/png, image/gif"
          @change="selectFile">
            <div class="btn-10-s btn-color-green "><i class="bi bi-arrow-bar-up"></i>上傳圖片</div>
        </label> -->
            <div class="pic-area" >
                <div class="pic-area-box" v-if="result.dataURL">
                <img :src="result.dataURL"/>
                </div>
                 <!-- <div class="pic-area-box" v-if="result.blobURL">
                <img :src="result.blobURL"/>

                </div> -->
                <p>設計最佳建議：1400 x 400 像素，且大小不得超過 100 KB 的圖檔</p>
            </div>
    </div>


    <!-- A Popup for cropping -->
    <!-- You can replace it with the framework's Modal component -->
    <div class="modal-wrap" v-if="isShowModal">
      <div class="modal-mask"></div>
      <div class="modal-scroll-view">
        <div class="modal">
          <div class="modal-title">
            <span class="m-title">圖片剪裁</span>
            <div class="m-tools">
              <button class="m-btn" @click="isShowModal = false">取消</button>
              <!-- <button class="m-btn" @click="clear">清除</button> -->
              <button class="m-btn" @click="reset">重置</button>
              <button class="m-btn prim" @click="getResult">剪裁</button>
            </div>
          </div>

          <div class="modal-content">
            <!-- The component imported from `vue-picture-cropper` plugin -->
            <VuePictureCropper
              :boxStyle="{
                width: '100%',
                height: '100%',
                backgroundColor: '#f8f8f8',
                margin: 'auto',
              }"
              :img="pic"
              :options="{
                viewMode: 1,
                dragMode: 'move',
                aspectRatio: 14/4,
                cropBoxResizable:false,
              }"
              :presetMode="{
                mode:'fixedSize',
                width:1400,
                height:400,
              }"
              @ready="ready"
            />
          </div>
        </div>
      </div>
    </div>

</template>

<script>
import VuePictureCropper, { cropper } from 'vue-picture-cropper';
import axios from 'axios';

export default{
  components: {
    VuePictureCropper,
  },
  data() {
    return {
      isShowModal: false,
      pic: '',
      result: {
        dataURL: '',
        blobURL: '',
      },
    }
  },
  methods: {
    /**
     * Select the picture to be cropped
     */
    
    selectFile(e) {
      // Reset last selection and results
      this.pic = ''
      this.result.dataURL = ''
      this.result.blobURL = ''
    // Get selected files
    //   const files = e.target instanceof HTMLInputElement
    //   if (files == null || files.length == 0) {
    //     return;
    //     }
        const file = e.target.files[0];
        if (file.type.startsWith('image/')) {
          
      // Convert to dataURL and pass to the cropper component
    //   const file = files[0]
      const reader = new FileReader()
      reader.readAsDataURL(file)
      reader.onload = () => {
        // Update the picture source of the `img` prop
        this.pic = String(reader.result)
        
        // Show the modal
        this.isShowModal = true
        // Clear selected files of input element
        if (!this.$refs.uploadInput) return
        this.$refs.uploadInput.value = ''
      }
      
      // this.sendData();
    }

    
    

    },

    
    /**
     * Get cropping results
     */
        async getResult() {
        if (!cropper) return;
        const base64 = cropper.getDataURL();
        const blob = await cropper.getBlob();
        console.log(base64);
        console.log('分隔線');
        console.log(blob);
        if (!blob) return;
        console.log({ base64, blob });
        this.result.dataURL = base64;
        
        this.result.blobURL = URL.createObjectURL(blob);;
        this.isShowModal = false;
        // console.log(this.result.dataURL);
        // alert(this.result.dataURL);
        this.sendData();
        },
    
    /**
     * Clear the crop box
     */
    clear() {
      if (!cropper) return
      cropper.clear()
    },
    /**
     * Reset the default cropping area
     */
    reset() {
      if (!cropper) return
      cropper.reset()
    },
    /**
     * The ready event passed to Cropper.js
     */
    ready() {
      console.log('Cropper is ready.')
    },

    sendData(){
        this.$emit('pic',this.pic)
    },
    
  },
}
</script>