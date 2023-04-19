<template>

    <div v-if="show">
    <div class="row account_row account_row2">
        <div class="col-md-3 col-12">
          
        </div>
        <div class="col-md-6 col-12">
            <h4>帳號*</h4>
            <input type="text" class="f-text nomargin" id="account" v-model="account" placeholder="帳號" >
        </div>
        <div class="col-md-3 col-12">
            
        </div>
    </div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>密碼*</h4>
      <input type="text" class="f-text nomargin" id="password" v-model="password" placeholder="密碼" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>確認密碼*</h4>
      <input type="text" class="f-text nomargin" id="password" v-model="password" placeholder="確認密碼" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>姓</h4>
      <input type="text" class="f-text nomargin" id="first_name" v-model="first_name" placeholder="姓" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>名</h4>
      <input type="text" class="f-text nomargin" id="last_name" v-model="last_name" placeholder="名" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>  

<div class="row account_row">
  <div class="col-md-3 col-12">
     
    </div>
  <div class="col-md-6 col-12">
      <h4>電子信箱</h4>
      <input type="text" class="f-text nomargin" id="email" v-model="email" placeholder="電子信箱" >
  </div>
  <div class="col-md-3 col-12">
     
    </div>
</div>  

<!-- <button type="submit" class="btn-m btn-color-green" @click.self.prevent="dataSavetoObject">送出</button> -->
<button type="submit" class="btn-m btn-color-green" @click="dataSavetoObject">送出</button>


</div>

</template>

<script>
export default {
    props:["show"],
    data() {
            return {
                account: "",
                password: "",
                first_name:"",
                last_name:"",
                email:"",
                
              }
             },

            methods: {
            
            dataSavetoObject(){
              const data = JSON.stringify({
                Account: this.account,
                password:this.password,
                first_name:this.first_name,
                last_name:this.last_name,
                email:this.email,
                Information: this.information

                
              })


              this.$emit("value-update", {data:data, toggleShow:!this.show});
              
                
            },
          
            }

}
</script>