
<div class="reveal-modal-bg" id="login_window">
   <div class="reveal-modal reveal-modal_small"  >
        
         <div class="modal-body modal-body-sub" style="position: relative;">
                <button type="button" class="close_modalinner" onclick="modaljs(this,'close');" data-modal="#login_window" aria-hidden="true"> &times;</button>
                <div class="inner_modal_body">
                     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        @include("standart.auth.tabslSignedForm")
                     </div>
                  </div>
          </div>
    </div>
</div>