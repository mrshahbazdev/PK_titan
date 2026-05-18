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
                        


<div class="n-card n-card--content-segmented mt-4 proCard" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-border-radius: 3px; --n-color: #fff; --n-color-modal: #fff; --n-color-popover: #fff; --n-color-target: #2d8cf0; --n-text-color: rgb(51, 54, 57); --n-line-height: 1.6; --n-action-color: rgb(250, 250, 252); --n-title-text-color: rgb(31, 34, 37); --n-title-font-weight: 500; --n-close-color: rgba(122, 122, 122, 1); --n-close-color-hover: rgba(89, 89, 89, 1); --n-close-color-pressed: rgba(149, 149, 149, 1); --n-border-color: rgb(239, 239, 245); --n-box-shadow: 0 1px 2px -2px rgba(0, 0, 0, .08), 0 3px 6px 0 rgba(0, 0, 0, .06), 0 5px 12px 4px rgba(0, 0, 0, .04); --n-padding-top: 19px; --n-padding-bottom: 20px; --n-padding-left: 24px; --n-font-size: 14px; --n-title-font-size: 18px; --n-close-size: 18px;">
  <!---->
  <div class="n-card-header">
    <div class="n-card-header__main" role="heading">
      <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">System Settings</font>
      </font>
    </div>
    <!---->
    <!---->
  </div>
  <?php foreach ($users as $user): ?>
  <div class="n-card__content" role="none">
    <form class="n-form" id="insertForm" method="post" action="<?php echo base_url();?>systems/insert_setting_data">
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Site Title</font>
          </font>
          <!---->
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input n-input--resizable n-input--stateful" >
            <div class="n-input-wrapper">
              <!---->
              <div class="n-input__input">
                <input type="text" class="n-input__input-el" placeholder="Please enter site title" size="20" value=" <?= $user['siteTitle'] ?>" name="siteTitle">
               
                <!---->
              </div>
              <!---->
            </div>
            <!---->
            <!---->
            <div class="n-input__border"></div>
            <div class="n-input__state-border"></div>
            <!---->
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Upper Level Member Trading Commission</font>
          </font>
          <span class="n-form-item-label__asterisk">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">&nbsp;*</font>
            </font>
          </span>
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input-number w-full">
            <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="text" class="n-input__input-el" placeholder="Upper Level Member Trading Commission" value=" <?= $user['level1commission'] ?>" name="level1commission" size="20" style="">
                  <!---->
                  <!---->
                </div>
                <div class="n-input__suffix">
                  <!---->
                  <!---->
                  <!---->
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">%</font>
                  </font>
                  <!---->
                  <!---->
                </div>
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Upper Level 2 Member Trading Commission</font>
          </font>
          <span class="n-form-item-label__asterisk">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">&nbsp;*</font>
            </font>
          </span>
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input-number w-full">
            <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="text" class="n-input__input-el" placeholder="Upper Level 2 Member Trading Commission" value=" <?= $user['level2commission'] ?>" name="level2commission" size="20" style="">
                  <!---->
                  <!---->
                </div>
                <div class="n-input__suffix">
                  <!---->
                  <!---->
                  <!---->
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">%</font>
                  </font>
                  <!---->
                  <!---->
                </div>
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Upper Level 3 Member Trading Commission</font>
          </font>
          <span class="n-form-item-label__asterisk">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">&nbsp;*</font>
            </font>
          </span>
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input-number w-full">
            <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="text" class="n-input__input-el" placeholder="Upper Level 3 Member Trading Commission" value=" <?= $user['level3commission'] ?>" name="level3commission" size="20" style="">
                  <!---->
                  <!---->
                </div>
                <div class="n-input__suffix">
                  <!---->
                  <!---->
                  <!---->
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">%</font>
                  </font>
                  <!---->
                  <!---->
                </div>
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Upper Level 4 Member Trading Commission</font>
          </font>
          <span class="n-form-item-label__asterisk">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">&nbsp;*</font>
            </font>
          </span>
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input-number w-full">
            <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="text" class="n-input__input-el" placeholder="Upper Level 4 Member Trading Commission" value=" <?= $user['level4commission'] ?>" name="level4commission" size="20" style="">
                  <!---->
                  <!---->
                </div>
                <div class="n-input__suffix">
                  <!---->
                  <!---->
                  <!---->
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">%</font>
                  </font>
                  <!---->
                  <!---->
                </div>
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Upper Level 5 Member Trading Commission</font>
          </font>
          <span class="n-form-item-label__asterisk">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">&nbsp;*</font>
            </font>
          </span>
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input-number w-full">
            <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="text" class="n-input__input-el" placeholder="Upper Level 5 Member Trading Commission" value=" <?= $user['level5commission'] ?>" name="level5commission" size="20" style="">
                  <!---->
                  <!---->
                </div>
                <div class="n-input__suffix">
                  <!---->
                  <!---->
                  <!---->
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">%</font>
                  </font>
                  <!---->
                  <!---->
                </div>
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Registration Gift Amount</font>
          </font>
          <!---->
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input-number w-full">
            <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="text" class="n-input__input-el" placeholder="Registration Gift Amount" name="gift" value=" <?= $user['gift'] ?>" size="20" style="">
                  <!---->
                  <!---->
                </div>
                <!---->
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Order Payment Waiting Time</font>
          </font>
          <span class="n-form-item-label__asterisk">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">&nbsp;*</font>
            </font>
          </span>
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-input-number w-full">
            <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="text" class="n-input__input-el" placeholder="$t('settings.label[7]')" size="20" value=" <?= $user['orderPaymentWaitingTime'] ?>" name="orderPaymentWaitingTime" style="">
                  <!---->
                  <!---->
                </div>
                <div class="n-input__suffix">
                  <!---->
                  <!---->
                  <!---->
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">S</font>
                  </font>
                  <!---->
                  <!---->
                </div>
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
     
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Withdrawal Time</font>
          </font>
          <!---->
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-time-picker" style="--n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-bezier: cubic-bezier(.4, 0, .2, 1);">
            <div class="n-input n-input--resizable n-input--stateful" tabindex="0" >
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="time" class="n-input__input-el" tabindex="-1" placeholder="start time" size="12" value="<?php echo date('H:i', strtotime($user['WithdrawalTimeStart'])); ?>" name="WithdrawalTimeStart" style="">
                  <!---->
                  <!---->
                </div>
                
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
            <!---->
          </div>
          <span class="mx-2">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">-</font>
            </font>
          </span>
          <div class="n-time-picker" style="--n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-bezier: cubic-bezier(.4, 0, .2, 1);">
            <div class="n-input n-input--resizable n-input--stateful" tabindex="0" >
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="time" class="n-input__input-el" tabindex="-1" placeholder="end time" size="12" value="<?php echo date('H:i', strtotime($user['WithdrawalTimeEnd'])); ?>" name="WithdrawalTimeEnd" style="">
                  <!---->
                  <!---->
                </div>
               
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
            <!---->
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Top-up Time</font>
          </font>
          <!---->
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-time-picker" style="--n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-bezier: cubic-bezier(.4, 0, .2, 1);">
            <div class="n-input n-input--resizable n-input--stateful" tabindex="0" >
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="time" class="n-input__input-el" tabindex="-1" placeholder="start time" value="<?php echo date('H:i', strtotime($user['TopupTimeStart'])); ?>" name="TopupTimeStart" size="12" style="">
                  <!---->
                  <!---->
                </div>
                
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
            <!---->
          </div>
          <span class="mx-2">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">-</font>
            </font>
          </span>
          <div class="n-time-picker" style="--n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-bezier: cubic-bezier(.4, 0, .2, 1);">
            <div class="n-input n-input--resizable n-input--stateful" tabindex="0" >
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="time" class="n-input__input-el" tabindex="-1" placeholder="end time" value="<?php echo date('H:i', strtotime($user['TopupTimeEnd'])); ?>" name="TopupTimeEnd" size="12" style="">
                  <!---->
                  <!---->
                </div>
               
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
            <!---->
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Order Grabbing Time</font>
          </font>
          <!---->
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div class="n-time-picker" style="--n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-bezier: cubic-bezier(.4, 0, .2, 1);">
            <div class="n-input n-input--resizable n-input--stateful" tabindex="0" >
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="time" class="n-input__input-el" tabindex="-1" placeholder="start time" name="OrderGrabbingTimeStart" value="<?php echo date('H:i', strtotime($user['OrderGrabbingTimeStart'])); ?>" size="12" style="">
                  <!---->
                  <!---->
                </div>
                
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
            <!---->
          </div>
          <span class="mx-2">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">-</font>
            </font>
          </span>
          <div class="n-time-picker" style="--n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-bezier: cubic-bezier(.4, 0, .2, 1);">
            <div class="n-input n-input--resizable n-input--stateful" tabindex="0" style="">
              <div class="n-input-wrapper">
                <!---->
                <div class="n-input__input">
                  <input type="time" class="n-input__input-el" tabindex="-1" placeholder="end time" value="<?php echo date('H:i', strtotime($user['OrderGrabbingTimeEnd'])); ?>" name="OrderGrabbingTimeEnd" size="12" style="">
                  <!---->
                  <!---->
                </div>
               
              </div>
              <!---->
              <!---->
              <div class="n-input__border"></div>
              <div class="n-input__state-border"></div>
              <!---->
            </div>
            <!---->
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
        <label class="n-form-item-label" style="width: 320px;">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Mall Status</font>
          </font>
          <!---->
          <!---->
        </label>
        <div class="n-form-item-blank">
          <div role="switch" aria-checked="true" class="n-switch n-switch--active n-switch--round" tabindex="0" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-button-border-radius: 3px; --n-button-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.3), inset 0 0 1px 0 rgba(0, 0, 0, 0.05); --n-button-color: #FFF; --n-button-width: 18px; --n-button-width-pressed: 24px; --n-button-height: 18px; --n-height: 22px; --n-offset: 2px; --n-opacity-disabled: 0.5; --n-rail-border-radius: 3px; --n-rail-color: rgba(0, 0, 0, .14); --n-rail-color-active: #2d8cf0; --n-rail-height: 22px; --n-rail-width: 40px; --n-width: 40px; --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-text-color: white; --n-icon-color: rgb(118, 124, 130);">
            <div class="n-switch__rail" aria-hidden="true">
              <div aria-hidden="true" class="n-switch__children-placeholder">
                <div class="n-switch__rail-placeholder">
                  <div class="n-switch__button-placeholder"></div>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">on</font>
                  </font>
                </div>
                <div class="n-switch__rail-placeholder">
                  <div class="n-switch__button-placeholder"></div>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">off</font>
                  </font>
                </div>
              </div>
              <div class="n-switch__button">
                <!---->
                <div class="n-switch__checked">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">on</font>
                  </font>
                </div>
                <div class="n-switch__unchecked">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">off</font>
                  </font>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="n-form-item-feedback-wrapper">
          <!---->
        </div>
      </div>
      <div style="margin-left: 80px;">
        <div role="none" class="n-space" style="display: flex; flex-flow: wrap; justify-content: flex-start; margin-top: -4px; margin-bottom: -4px;">
          <div role="none" style="max-width: 100%; margin-right: 12px; padding-top: 4px; padding-bottom: 4px;">
            <button class="n-button n-button--primary-type n-button--medium-type" tabindex="0" type="submit" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-ripple-duration: .6s; --n-opacity-disabled: 0.5; --n-wave-opacity: 0.6; font-weight: 400; --n-color: #2d8cf0; --n-color-hover: #3c9bff; --n-color-pressed: #3c9bff; --n-color-focus: #3c9bff; --n-color-disabled: #2d8cf0; --n-ripple-color: #2d8cf0; --n-text-color: #FFF; --n-text-color-hover: #FFF; --n-text-color-pressed: #FFF; --n-text-color-focus: #FFF; --n-text-color-disabled: #FFF; --n-border: 1px solid #2d8cf0; --n-border-hover: 1px solid #3c9bff; --n-border-pressed: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-border-disabled: 1px solid #2d8cf0; --n-width: initial; --n-height: 34px; --n-font-size: 14px; --n-padding: 0 14px; --n-icon-size: 18px; --n-icon-margin: 6px; --n-border-radius: 3px;">
              <!---->
              <!---->
              <span class="n-button__content">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Submit</font>
                </font>
              </span>
              <div aria-hidden="true" class="n-base-wave"></div>
              <div aria-hidden="true" class="n-button__border"></div>
              <div aria-hidden="true" class="n-button__state-border"></div>
            </button>
          </div>
          <div role="none" style="max-width: 100%; padding-top: 4px; padding-bottom: 4px;">
            <button class="n-button n-button--default-type n-button--medium-type" tabindex="0" type="button" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-ripple-duration: .6s; --n-opacity-disabled: 0.5; --n-wave-opacity: 0.6; font-weight: 400; --n-color: #0000; --n-color-hover: #0000; --n-color-pressed: #0000; --n-color-focus: #0000; --n-color-disabled: #0000; --n-ripple-color: #2d8cf0; --n-text-color: rgb(51, 54, 57); --n-text-color-hover: #3c9bff; --n-text-color-pressed: #3c9bff; --n-text-color-focus: #3c9bff; --n-text-color-disabled: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-pressed: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-border-disabled: 1px solid rgb(224, 224, 230); --n-width: initial; --n-height: 34px; --n-font-size: 14px; --n-padding: 0 14px; --n-icon-size: 18px; --n-icon-margin: 6px; --n-border-radius: 3px;">
              <!---->
              <!---->
              <span class="n-button__content">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Reset</font>
                </font>
              </span>
              <div aria-hidden="true" class="n-base-wave"></div>
              <div aria-hidden="true" class="n-button__border"></div>
              <div aria-hidden="true" class="n-button__state-border"></div>
            </button>
          </div>
        </div>
      </div>
    </form>

  </div>
  <?php endforeach; ?>
  <!---->
  <!---->
  <div class="container">
    Upload Site Logo
  <?php echo validation_errors(); ?>
    <?php echo form_open_multipart('systems/do_upload'); ?>
    <input type="file" name="userfile" size="20" />
    <br /><br />
    <input type="submit" value="Upload" />
    </form>
</div>
</div>
<style>
  .container {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.input-file {
    display: none;
}

.file-label {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    display: inline-block;
}

.submit-btn {
    background-color: #2ecc71;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.submit-btn:hover {
    background-color: #27ae60;
}

</style>

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
  $(document).ready(function() {
    $('#insertForm').submit(function(e) {
       e.preventDefault(); // Prevent the form from submitting normally

        // Serialize the form data
        var formData = $(this).serialize();

        // Send AJAX request to your controller method
        $.ajax({
            url: '<?php echo base_url("systems/insert_setting_data"); ?>',
            type: 'post',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Handle success response from the server
                if (response.success) {
                     Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.success,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                    // Optionally, you can perform further actions here
                } else {
                    Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.success,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                }
            },
            error: function() {
                // Handle errors here
                alert('Error occurred while inserting data.');
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