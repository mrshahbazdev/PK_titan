<?php $this->load->view('widgets/head'); ?>
  <div id="app" data-v-app="">
    <div class="n-config-provider">
      <!---->
      <!---->
      <div class="n-layout n-layout--absolute-positioned layout" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: #fff; --n-text-color: rgb(51, 54, 57);">
        <div class="n-layout-scroll-container" style="display: flex; flex-flow: row; width: 100%;">
          <!-- aside -->
          <?php $this->load->view('widgets/aside'); ?>
          <!---->
          <div class="n-layout n-layout--static-positioned" inverted="true" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: #fff; --n-text-color: rgb(51, 54, 57);">
            <div class="n-layout-scroll-container">
              <div class="n-layout-header n-layout-header--absolute-positioned" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: rgb(0, 20, 40); --n-text-color: #FFF; --n-border-color: rgb(0, 20, 40);"> 

                <?php $this->load->view('widgets/header'); ?> 
               </div>
              <div class="n-layout-content n-layout n-layout--static-positioned layout-content layout-default-background" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: #fff; --n-text-color: rgb(51, 54, 57);">
                <div class="n-layout-scroll-container">
                  <div class="layout-content-main layout-content-main-fix" data-v-d9b27248="">
                    <div class="main-view main-view-fix" data-v-d9b27248="">
                      <div data-v-d9b27248="" class="">
                        
                        

                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="n-back-top-placeholder" aria-hidden="true" data-v-d9b27248="" style="display: none;"></div>
            </div>
          </div>
        </div>
      </div>
      <!---->
      <!---->
    </div>
    <!---->
  </div>
  <script>
    var globalThis = window;
  </script>
  <!---->
  <div class="n-loading-bar-container" style="display: none;">
    <div class="n-loading-bar n-loading-bar--finishing" style="--n-height: 2px; --n-color-loading: #2d8cf0; --n-color-error: #d03050; max-width: 100%;"></div>
  </div>
  <!---->
  <div id="v-binder-view-measurer" style="position: fixed; inset: 0px; pointer-events: none; visibility: hidden;"></div>
  <div role="none" class="n-modal-container" style="--n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-box-shadow: 0 6px 16px -9px rgba(0, 0, 0, .08), 0 9px 28px 0 rgba(0, 0, 0, .05), 0 12px 48px 16px rgba(0, 0, 0, .03); --n-color: #fff; --n-text-color: rgb(51, 54, 57); z-index: 2000;">
    <!---->
    <!---->
  </div>
  <div class="v-binder-follower-container" style="z-index: 2000;">
    <div class="v-binder-follower-content" v-placement="bottom-end" style="--v-target-width: 18px; --v-target-height: 64px; --v-offset-left: 0px; --v-offset-top: 0px; transform: translateX(915px) translateY(64px) translateX(-100%); transform-origin: right top;">
      <!---->
    </div>
  </div>
  <div class="n-drawer-container" role="none" style="--n-line-height: 1.6; --n-color: #fff; --n-text-color: rgb(51, 54, 57); --n-box-shadow: 0 6px 16px -9px rgba(0, 0, 0, .08), 0 9px 28px 0 rgba(0, 0, 0, .05), 0 12px 48px 16px rgba(0, 0, 0, .03); --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-out: cubic-bezier(0, 0, .2, 1); --n-bezier-in: cubic-bezier(.4, 0, 1, 1); --n-header-padding: 16px 24px; --n-body-padding: 16px 24px; --n-footer-padding: 16px 24px; --n-title-text-color: rgb(31, 34, 37); --n-title-font-size: 18px; --n-title-font-weight: 500; --n-header-border-bottom: 1px solid rgb(239, 239, 245); --n-footer-border-top: 1px solid rgb(239, 239, 245); --n-close-color: rgba(122, 122, 122, 1); --n-close-color-hover: rgba(89, 89, 89, 1); --n-close-color-pressed: rgba(149, 149, 149, 1); --n-close-size: 18px; z-index: 2001;">
    <!---->
    <!---->
  </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.delete-button').click(function(e){
        e.preventDefault();
        
        var userId = $(this).attr('id');
        
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, proceed with delete action
                 $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('custormerservicelist/delete_user'); ?>",
                    data: {userId: userId},
                    success: function(response){
                      $('tbody #'+userId).remove();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.trim(),
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });

                    },
                    error: function(xhr, status, error){
                        // Handle error
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
});

  $(document).ready(function () {
    $('.status').click(function () {
        var userID = $(this).data('user-id');
        var currentStatus = $(this).data('status');
        var newStatus = currentStatus == 'Enable' ? 'Disable' : 'Enable';
        $(this).data('status', newStatus);
        if (newStatus !== 'Enable') {
          $(this).css({ 'background-color': '#d03050' });
        }else{
          $(this).css({ 'background-color': '#2d8cf0' });
        }
        $(this).find('.n-button__content').text(newStatus);
      $.get("<?php echo base_url('custormerservicelist/changeStatus/'); ?>" + userID, function(response) {
            // Handle response
            // Assuming you want to update the UI after status change
            Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.trim(),
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
        });
    })
   $('#addnew').click(function () {
     $('.addnews').show();
   })
   $('.addnews #close, .addnews .n-dialog__close, .addupdate #close, .addupdate .n-dialog__close').click(function () {
     $('.addnews, .addupdate').hide();
   })
   $('.addnews #addok').click(function () {
     var formData = $('#addDataForm').serialize();
        
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('custormerservicelist/add_data'); ?>",
            data: formData,
            success: function(response){
                // Handle success response
                console.log(response);
                $('#formMessage').html(response); // Display response message
                if (response.trim() === "Data added successfully") {
                    // Clear form
                     Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.trim(),
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                     $('.addnews').hide();
                    $('#addDataForm')[0].reset();
                    setTimeout(function () {
                      location.reload();
                    },2000);
                }
            },
            error: function(xhr, status, error){
                // Handle error
                $('#formMessage').html(xhr.responseText);
                console.error(xhr.responseText);
            }
        });
   })
  })
      /**=====================
    Sweet-alert Start
==========================**/

        $(document).ready(function() {
         

          $('#ok').on('click', function(event) {
                event.preventDefault();
                
                // Get form data
                var formData = $('#updateForm').serialize();

                // AJAX request
                $.ajax({
                    url: 'custormerservicelist/update_user', // Update with your controller method URL
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                       $('.addupdate').hide();
                         Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                           var ids = $('#id').val();
                          $('#'+ids+' .username').text($('#username').val());
                          $('#'+ids+' .mobileNumber').text($('#mobileNumber').val());
                          $('#'+ids+' .qq').text($('#qq').val());
                          $('#'+ids+' .weChat').text($('#wechat').val());
                          $('#'+ids+' .link').text($('#link').val());
                          $('#'+ids+' .workTime').text($('#worktime').val());
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                        alert('Error updating data. Please try again.');
                    }
                });
            });
            $('.edit-user').on('click', function() {
               
                var userId = $(this).data('user-id');
                // var activeOption = $('<option>').val('1').text('Active');
                // var inactiveOption = $('<option>').val('0').text('Inactive');
                // $('#statusSelect').append(activeOption, inactiveOption);
                // Assuming you have an AJAX call to fetch user data by ID
                $.ajax({
                    url: 'custormerservicelist/get_user_data/' + userId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('.addupdate').show();
                        $.each(response, function(index, user) {
                        $('#username').val(user.username);
                        $('#mobileNumber').val(user.mobileNumber);
                        $('#qq').val(user.qq);
                        $('#wechat').val(user.weChat);
                        $('#link').val(user.link);
                        $('#worktime').val(user.workTime);
                        $('#id').val(user.id);
                        // var status = user.status;
                        // $('#statusSelect').val(status);
                        // Populate other form fields similarl
                    });
                  }
              });
            });
            
          });

  
</script>



<style type="text/css">
                    .n-form-item--left-labelled{
                      --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;
                    }
                    .n-input--stateful{
                      --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 12px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);
                    }
                    button{
                      --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-ripple-duration: .6s; --n-opacity-disabled: 0.5; --n-wave-opacity: 0.6; font-weight: 400; --n-color: #0000; --n-color-hover: #0000; --n-color-pressed: #0000; --n-color-focus: #0000; --n-color-disabled: #0000; --n-ripple-color: #2d8cf0; --n-text-color: rgb(51, 54, 57); --n-text-color-hover: #3c9bff; --n-text-color-pressed: #3c9bff; --n-text-color-focus: #3c9bff; --n-text-color-disabled: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-pressed: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-border-disabled: 1px solid rgb(224, 224, 230); --n-width: initial; --n-height: 34px; --n-font-size: 14px; --n-padding: 0 14px; --n-icon-size: 18px; --n-icon-margin: 6px; --n-border-radius: 3px;
                    }
                  </style>