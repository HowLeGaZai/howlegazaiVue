<!-- 身分證 -->

<template>
  <div class="iduploading">
       <button class="uploadbtn">
              <span><i class="bi bi-cloud-arrow-up"></i>點擊上傳</span>
              <input
              ref="uploadInput"
              type="file"
              accept="image/jpg, image/jpeg, image/png, image/gif"
              @change="selectFile"
              />
      </button>
      <div class="pic-area" >
          <div class="pic-area-box" v-if="result.dataURL">
              <img :src="result.dataURL" ref="watermarkedImg"/>
          </div>
          <p>建議：450 x 285 像素，且大小不得超過 100 KB 的圖檔</p>
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
              aspectRatio: 45/28,
              cropBoxResizable:true,
            }"
            :presetMode="{
              mode:'fixedSize',
              width:450,
              height:285,
            }"
            @ready="ready"
          />
        </div>
      </div>
    </div>
  </div>

</template>

<script>
import VuePictureCropper, { cropper } from 'vue-picture-cropper'

export default{
components: {
  VuePictureCropper,
},
data() {
  return {
    isShowModal: false,
    pic: '',
    watermarkpic:'',
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
  }
  },

  /**
   * Get cropping results
   */
  //  async getResult() {
  //     if (!cropper) return;
  //     const base64 = cropper.getDataURL();
  //     const blob = await cropper.getBlob();
  //     if (!blob) return;
  //     console.log({ base64, blob });
  //     this.result.dataURL = base64;
  //     this.result.blobURL = URL.createObjectURL(blob);;
  //     this.isShowModal = false;
  //     },

  /**
   * Get cropping results + watermark results
   */
   async getResult() {
    if (!cropper) return;
    const base64 = cropper.getDataURL();
    const blob = await cropper.getBlob();
    if (!blob) return;

    const img = new Image(); // load original image to new Image object
    img.src = base64;
    img.onload = () => {
      const canvas = document.createElement('canvas');
      const ctx = canvas.getContext('2d');
      const watermark = '花蓮縣大湖里辦公室';
      const x = -50; // x coordinate of the watermark
      const y = 10; // y coordinate of the watermark
      const size = 20; // font size of the watermark
      const color = 'rgba(200, 200, 200, 0.40)'; // color of the watermark

      // canvas 畫布大小 = 上傳圖片大小
      canvas.width = img.width;
      canvas.height = img.height;

      // canvas drawImage
      ctx.drawImage(img, 0, 0);
      ctx.rotate((-15 * Math.PI) / 180);
      // ctx.textAlign = "left";
      // ctx.textBaseline = "middle";
      ctx.font = `${size}px sans-serif`;
      ctx.fillStyle = color;

      // 畫出多個浮水印
      const numWatermarks = 50;
      const spacing = 50;
      for (let i = 0; i < numWatermarks; i++) {
        const xPos = x;
        const yPos = y + i * spacing;
        ctx.fillText(watermark, xPos, yPos);
      }
      for (let j = 0; j < numWatermarks; j++) {
        const xPos2 = x + 200;
        const yPos2 = y + j * spacing;
        ctx.fillText(watermark, xPos2, yPos2);
      }
      for (let n = 0; n < numWatermarks; n++) {
        const xPos3 = x + 400;
        const yPos3 = y + n * spacing;
        ctx.fillText(watermark, xPos3, yPos3);
      }
      this.$refs.watermarkedImg.src = canvas.toDataURL();
      // // 增加浮水印
      // ctx.fillText(watermark, canvas.width / 8, canvas.height / 2);
      // ctx.fillText(watermark, canvas.width / 8, canvas.height / 1.7);
      // ctx.fillText(watermark, canvas.width / 8, canvas.height / 1.4);
      // ctx.fillText(watermark, canvas.width / 8, canvas.height / 1.1);

      // 移除原先上傳圖片
      // const parent = document.querySelector('.pic-area-box');
      // const originalImg = parent.querySelector('img');
      // parent.removeChild(originalImg);

      // 建立新 canvas 圖片
      // const watermarkedImg = new Image();
      // watermarkedImg.src = canvas.toDataURL();
      // parent.insertBefore(watermarkedImg, parent.firstChild);
    };

    // canvas 圖片 = 上傳裁切後的圖片網址
    this.result.dataURL = base64;
    this.result.blobURL = URL.createObjectURL(blob);
    this.isShowModal = false;
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
},
}

// 利用 canvas 印上浮水印的功能
  // addWatermark() {
  //   const canvas = document.createElement('canvas');
  //   const context = canvas.getContext('2d');
  //   const img = new Image();
  //   img.src = this.result.dataURL;
  //   img.onload = () => {
  //     // Set canvas dimensions same as the image
  //     canvas.width = img.width;
  //     canvas.height = img.height;

  //     // Draw the image on the canvas
  //     context.drawImage(img, 0, 0);

  //     // Add watermark text
  //     context.font = 'bold 24px Arial';
  //     context.fillStyle = 'rgba(255, 255, 255, 0.5)';
  //     context.fillText('Watermark Text', 20, 50);

  //     // Get the dataURL of the canvas
  //     const dataURL = canvas.toDataURL('image/png');

  //     // Update the result with the watermarked image
  //     this.result.dataURL = dataURL;
  //   };
  // },
</script>