<template>
    <div id="lightbox" class="none">
      <article>
    <div class="popup_content">
      <button type="button" class="btn-cir-m  btn-color-white btn_modal_close changeposition"><i class="bi bi-caret-left-fill"></i></button>
      <h3>申請取消</h3>
      <div class="apply_cancel">
            <div class="cancelreason">
                <h5>取消原因:</h5>
                <select name="" id="" class="f-select col1 width70percentage">
                <option value="1">-選擇-</option>
                <option value="2">其他</option>
                <option value="3">交通</option>
                <option value="3">設施</option>
                </select>
            </div>
            <div class="remark">
            <h5>備註:</h5>
            <textarea name="" id="" cols="30" rows="10" style="resize:none" class="f-text width70percentage" placeholder="回覆討論" ></textarea>
            </div>
      </div>
    <h6>空間預約取消須知：請於預約日三日前取消，若超過日期需取消，請聯繫里辦取消預約</h6>
      <button type="button" class="btn-m btn-color-green">同意取消</button>
    </div>
  </article>
</div>
</template>