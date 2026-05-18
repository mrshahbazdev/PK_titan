<?php $this->load->view('widgets/head') }}
  <div id="app" data-v-app="">
    <div class="n-config-provider">
      <!---->
      <!---->
      <div class="n-layout n-layout--absolute-positioned layout" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: #fff; --n-text-color: rgb(51, 54, 57);">
        <div class="n-layout-scroll-container" style="display: flex; flex-flow: row; width: 100%;">
          <!-- aside -->
          <?php $this->load->view('widgets/aside') }}
          <!---->
          <div class="n-layout n-layout--static-positioned" inverted="true" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: #fff; --n-text-color: rgb(51, 54, 57);">
            <div class="n-layout-scroll-container">
              <div class="n-layout-header n-layout-header--absolute-positioned" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: rgb(0, 20, 40); --n-text-color: #FFF; --n-border-color: rgb(0, 20, 40);"> 

                <?php $this->load->view('widgets/header') }} 
               </div>
              <div class="n-layout-content n-layout n-layout--static-positioned layout-content layout-default-background" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-color: #fff; --n-text-color: rgb(51, 54, 57);">
                <div class="n-layout-scroll-container">
                  <div class="layout-content-main layout-content-main-fix" data-v-d9b27248="">
                    <div class="main-view main-view-fix" data-v-d9b27248="">
                      <div data-v-d9b27248="" class="">
  <div class="n-card n-card--bordered" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-border-radius: 3px; --n-color: #fff; --n-color-modal: #fff; --n-color-popover: #fff; --n-color-target: #2d8cf0; --n-text-color: rgb(51, 54, 57); --n-line-height: 1.6; --n-action-color: rgb(250, 250, 252); --n-title-text-color: rgb(31, 34, 37); --n-title-font-weight: 500; --n-close-color: rgba(122, 122, 122, 1); --n-close-color-hover: rgba(89, 89, 89, 1); --n-close-color-pressed: rgba(149, 149, 149, 1); --n-border-color: rgb(239, 239, 245); --n-box-shadow: 0 1px 2px -2px rgba(0, 0, 0, .08), 0 3px 6px 0 rgba(0, 0, 0, .06), 0 5px 12px 4px rgba(0, 0, 0, .04); --n-padding-top: 19px; --n-padding-bottom: 20px; --n-padding-left: 24px; --n-font-size: 14px; --n-title-font-size: 18px; --n-close-size: 18px;">
    <!---->
    <div class="n-card-header">
      <div class="n-card-header__main" role="heading">
        <div role="none" class="n-space" style="display: flex; flex-flow: wrap; justify-content: flex-start; margin-top: -4px; margin-bottom: -4px; align-items: center;">
          <div role="none" style="max-width: 100%; margin-right: 12px; padding-top: 4px; padding-bottom: 4px;">
            <a href="member/list">
            <button class="n-button n-button--success-type n-button--medium-type" tabindex="0" type="button" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-ripple-duration: .6s; --n-opacity-disabled: 0.5; --n-wave-opacity: 0.6; font-weight: 400; --n-color: #0000; --n-color-hover: rgba(46, 51, 56, .09); --n-color-pressed: rgba(46, 51, 56, .13); --n-color-focus: rgba(46, 51, 56, .09); --n-color-disabled: #0000; --n-ripple-color: #0000; --n-text-color: #18a058; --n-text-color-hover: #18a058; --n-text-color-pressed: #18a058; --n-text-color-focus: #18a058; --n-text-color-disabled: #18a058; --n-border: 1px solid #18a058; --n-border-hover: 1px solid #36ad6a; --n-border-pressed: 1px solid #0c7a43; --n-border-focus: 1px solid #36ad6a; --n-border-disabled: 1px solid #18a058; --n-width: initial; --n-height: 34px; --n-font-size: 14px; --n-padding: 0 14px; --n-icon-size: 18px; --n-icon-margin: 6px; --n-border-radius: 3px;">
              <!---->
              <!---->
              <span class="n-button__content">&lt; Back to list</span>
              <div aria-hidden="true" class="n-base-wave"></div>
              <!---->
              <!---->
            </button>
            </a>
          </div>
          <div role="none" style="max-width: 100%; padding-top: 4px; padding-bottom: 4px;">
            <h2>Current user:<?php echo $user->username; ?></h2>
          </div>
        </div>
      </div>
      <!---->
      <!---->
    </div>
    <div class="n-card__content" role="none">
      <form class="n-form py-4" id="continuousorder">
        <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
          <label class="n-form-item-label" style="width: 280px;">Current Balance:
            <!---->
            <!---->
          </label>
          <div class="n-form-item-blank">
            <div class="n-input-number">
              <div class="n-input n-input--disabled n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
                <div class="n-input-wrapper">
                  
                  <div class="n-input__input">
                    <input type="text" class="n-input__input-el totals" placeholder="Current number of orders made" disabled="disabled" size="20" style="" name="totaldss" value="<?php echo $user->balance; ?>">
                  
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
          <label class="n-form-item-label" style="width: 280px;">Current number of orders made:
            <!---->
            <!---->
          </label>
          <div class="n-form-item-blank">
            <div class="n-input-number">
              <div class="n-input n-input--disabled n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
                <div class="n-input-wrapper">
                  <!---->
                  <?php 
                   $total =  $this->db->where('userId', $user->id)->get('todayreward')->num_rows();
                   ?>
                  <div class="n-input__input">
                    <input type="text" class="n-input__input-el totals" placeholder="Current number of orders made" disabled="disabled" size="20" style="" name="totals" value="<?php echo $total; ?>">
                    <input type="hidden" name="userid" value="<?php echo $user->id; ?>">
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
          <label class="n-form-item-label" style="width: 280px;">Orders received today:
            <!---->
            <!---->
          </label>
          <div class="n-form-item-blank">
            <div class="n-input-number">
              <div class="n-input n-input--disabled n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
                <div class="n-input-wrapper">
                  <!---->
                  <div class="n-input__input">
                    <input type="text" class="n-input__input-el" placeholder="Orders received today" value="<?php echo $user->takeTodayOrders; ?>" disabled="" size="20" style="">
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
          <label class="n-form-item-label" style="width: 280px;">Maximum orders received by level:
            <!---->
            <!---->
          </label>
          <div class="n-form-item-blank">
            <div class="n-input-number">
              <div class="n-input n-input--disabled n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
                <div class="n-input-wrapper">
                  <!---->
                  <div class="n-input__input">
                    <input type="text" class="n-input__input-el" placeholder="Maximum orders received by level" disabled="" size="20" style="" value="<?php echo $user->avalibleDailyOrders; ?>">
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
          <label class="n-form-item-label" style="width: 280px;">Start continuous orders after several orders:
            <!---->
            <!---->
          </label>
          <div class="n-form-item-blank">
            <div class="n-input-number">
              <div class="n-input n-input--resizable n-input--stateful" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-count-text-color: rgb(118, 124, 130); --n-color: rgba(255, 255, 255, 1); --n-font-size: 14px; --n-border-radius: 3px; --n-height: 34px; --n-padding-left: 12px; --n-padding-right: 8px; --n-text-color: rgb(51, 54, 57); --n-caret-color: #2d8cf0; --n-text-decoration-color: rgb(51, 54, 57); --n-border: 1px solid rgb(224, 224, 230); --n-border-disabled: 1px solid rgb(224, 224, 230); --n-border-hover: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-placeholder-color: rgba(194, 194, 194, 1); --n-placeholder-color-disabled: rgba(209, 209, 209, 1); --n-icon-size: 16px; --n-line-height-textarea: 1.6; --n-color-disabled: rgb(250, 250, 252); --n-color-focus: rgba(255, 255, 255, 1); --n-text-color-disabled: rgba(194, 194, 194, 1); --n-box-shadow-focus: 0 0 0 2px rgba(45, 140, 240, 0.2); --n-loading-color: #2d8cf0; --n-caret-color-warning: #f0a020; --n-color-focus-warning: rgba(255, 255, 255, 1); --n-box-shadow-focus-warning: 0 0 0 2px rgba(240, 160, 32, 0.2); --n-border-warning: 1px solid #f0a020; --n-border-focus-warning: 1px solid #fcb040; --n-border-hover-warning: 1px solid #fcb040; --n-loading-color-warning: #f0a020; --n-caret-color-error: #d03050; --n-color-focus-error: rgba(255, 255, 255, 1); --n-box-shadow-focus-error: 0 0 0 2px rgba(208, 48, 80, 0.2); --n-border-error: 1px solid #d03050; --n-border-focus-error: 1px solid #de576d; --n-border-hover-error: 1px solid #de576d; --n-loading-color-error: #d03050; --n-clear-color: rgba(194, 194, 194, 1); --n-clear-size: 16px; --n-clear-color-hover: rgba(146, 146, 146, 1); --n-clear-color-pressed: rgba(175, 175, 175, 1); --n-icon-color: rgba(194, 194, 194, 1); --n-icon-color-hover: rgba(146, 146, 146, 1); --n-icon-color-pressed: rgba(175, 175, 175, 1); --n-icon-color-disabled: rgba(209, 209, 209, 1); --n-suffix-text-color: rgb(51, 54, 57);">
                <div class="n-input-wrapper">
                  <!---->
                  <div class="n-input__input">
                    <input type="text" class="n-input__input-el continuous" placeholder="Set continuous orders after several orders" size="20" style="" name="continuous">
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
          <label class="n-form-item-label" style="width: 280px;">Products:
            <!---->
            <!---->
          </label>
          <div class="n-form-item-blank">
            <input type="hidden" id="tagInput" placeholder="Type and press Enter">
            <input type="hidden" id="pids" name="pids" placeholder="Type and press Enter">
            <div id="tagContainer">
    
</div>



            <div class="w-full"></div>
          </div>
          <div class="n-form-item-feedback-wrapper">
            <!---->
          </div>
        </div>
        <div class="n-form-item __form-item-1mawhsm-ml n-form-item--medium-size n-form-item--left-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: right; --n-label-height: 26px; --n-label-padding: 0 12px 0 0; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
          <label class="n-form-item-label" style="width: 280px;">
            <!---->
            <!---->
          </label>
          <div class="n-form-item-blank">
            <button class="n-button n-button--primary-type n-button--medium-type ok" tabindex="0" type="button" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-ripple-duration: .6s; --n-opacity-disabled: 0.5; --n-wave-opacity: 0.6; font-weight: 400; --n-color: #2d8cf0; --n-color-hover: #3c9bff; --n-color-pressed: #3c9bff; --n-color-focus: #3c9bff; --n-color-disabled: #2d8cf0; --n-ripple-color: #2d8cf0; --n-text-color: #FFF; --n-text-color-hover: #FFF; --n-text-color-pressed: #FFF; --n-text-color-focus: #FFF; --n-text-color-disabled: #FFF; --n-border: 1px solid #2d8cf0; --n-border-hover: 1px solid #3c9bff; --n-border-pressed: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-border-disabled: 1px solid #2d8cf0; --n-width: initial; --n-height: 34px; --n-font-size: 14px; --n-padding: 0 14px; --n-icon-size: 18px; --n-icon-margin: 6px; --n-border-radius: 3px;">
              <!---->
              <!---->
              <span class="n-button__content">OK</span>
              <div aria-hidden="true" class="n-base-wave"></div>
              <div aria-hidden="true" class="n-button__border"></div>
              <div aria-hidden="true" class="n-button__state-border"></div>
            </button>
            <button class="n-button n-button--error-type n-button--medium-type ml-2 reset" data-user-id="<?php echo $user->id; ?>" tabindex="0" type="button" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-ripple-duration: .6s; --n-opacity-disabled: 0.5; --n-wave-opacity: 0.6; font-weight: 400; --n-color: #d03050; --n-color-hover: #de576d; --n-color-pressed: #ab1f3f; --n-color-focus: #de576d; --n-color-disabled: #d03050; --n-ripple-color: #d03050; --n-text-color: #FFF; --n-text-color-hover: #FFF; --n-text-color-pressed: #FFF; --n-text-color-focus: #FFF; --n-text-color-disabled: #FFF; --n-border: 1px solid #d03050; --n-border-hover: 1px solid #de576d; --n-border-pressed: 1px solid #ab1f3f; --n-border-focus: 1px solid #de576d; --n-border-disabled: 1px solid #d03050; --n-width: initial; --n-height: 34px; --n-font-size: 14px; --n-padding: 0 14px; --n-icon-size: 18px; --n-icon-margin: 6px; --n-border-radius: 3px;">
              <!---->
              <!---->
              <span class="n-button__content">Reset continuous orders</span>
              <div aria-hidden="true" class="n-base-wave"></div>
              <div aria-hidden="true" class="n-button__border"></div>
              <div aria-hidden="true" class="n-button__state-border"></div>
            </button>
          </div>
          <div class="n-form-item-feedback-wrapper">
            <!---->
          </div>
        </div>
      </form>
    </div>
    <!---->
    <!---->
  </div>
  <div class="table-container">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
              <?php $check = $this->db->where('userId', $_GET['uid'])->where('status','0')->get('continuousorders');
        if ($check->num_rows() > 0) {
          foreach ($check->result() as $key => $value) {
          $pprice = $this->db->where('id',$value->productId)->get('products')->row();
              
       ?>
                <tr>
                    <td><?php echo $value->continuous; ?></td>
                    <td><?php echo $pprice->productPrice; ?></td>
                </tr>
                <?php } } ?>
            </tbody>
        </table>
    </div>
  <div class="n-card n-card--bordered mt-2" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-border-radius: 3px; --n-color: #fff; --n-color-modal: #fff; --n-color-popover: #fff; --n-color-target: #2d8cf0; --n-text-color: rgb(51, 54, 57); --n-line-height: 1.6; --n-action-color: rgb(250, 250, 252); --n-title-text-color: rgb(31, 34, 37); --n-title-font-weight: 500; --n-close-color: rgba(122, 122, 122, 1); --n-close-color-hover: rgba(89, 89, 89, 1); --n-close-color-pressed: rgba(149, 149, 149, 1); --n-border-color: rgb(239, 239, 245); --n-box-shadow: 0 1px 2px -2px rgba(0, 0, 0, .08), 0 3px 6px 0 rgba(0, 0, 0, .06), 0 5px 12px 4px rgba(0, 0, 0, .04); --n-padding-top: 19px; --n-padding-bottom: 20px; --n-padding-left: 24px; --n-font-size: 14px; --n-title-font-size: 18px; --n-close-size: 18px;">
    <!---->
    <div class="n-card-header">
      <div class="n-card-header__main" role="heading">Product List</div>
      <!---->
      <!---->
    </div>
    <div class="n-card__content" role="none">
      <div role="none" class="n-space" style="display: flex; flex-flow: wrap; justify-content: flex-start; margin-top: -4px; margin-bottom: -4px;">
        <div role="none" style="max-width: 100%; padding-top: 4px; padding-bottom: 4px;">
          <form class="n-form n-form--inline" id="price">
            <div class="n-form-item __form-item-1mawhsm-mt n-form-item--medium-size n-form-item--top-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: flex-start; --n-label-height: 26px; --n-label-padding: 0 0 8px 2px; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
              <!---->
              <div class="n-form-item-blank">
                <div class="n-input-number">
                  
                      <!---->
                      <div class="form-control">
                        <input type="text" class="n-input__input-el" placeholder="Lowest Price" size="20" style="" name="lowprice">
                        
                  </div>
                </div>
              </div>
              <div class="n-form-item-feedback-wrapper">
                <!---->
              </div>
            </div>
            <div class="n-form-item __form-item-1mawhsm-mt n-form-item--medium-size n-form-item--top-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: flex-start; --n-label-height: 26px; --n-label-padding: 0 0 8px 2px; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
              <!---->
              <div class="n-form-item-blank">
                <div class="n-input-number">
                  
                      <!---->
                      <div class="form-control">
                        <input type="text" class="n-input__input-el" placeholder="Highest Price" name="highprice" size="20" style="">
                        
                    <!---->
                    <!---->
                    <!---->
                  </div>
                </div>
              </div>
              <div class="n-form-item-feedback-wrapper">
                <!---->
              </div>
            </div>
            <div class="n-form-item __form-item-1mawhsm-mt n-form-item--medium-size n-form-item--top-labelled" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-line-height: 1.6; --n-blank-height: 34px; --n-label-font-size: 14px; --n-label-text-align: flex-start; --n-label-height: 26px; --n-label-padding: 0 0 8px 2px; --n-asterisk-color: #d03050; --n-label-text-color: rgb(31, 34, 37); --n-feedback-padding: 4px 0 0 2px; --n-feedback-font-size: 14px; --n-feedback-height: 24px; --n-feedback-text-color: rgb(118, 124, 130); --n-feedback-text-color-warning: #f0a020; --n-feedback-text-color-error: #d03050;">
              <!---->
              <div class="n-form-item-blank">
                <button class="n-button n-button--primary-type n-button--small-type screen" tabindex="0" type="button" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-bezier-ease-out: cubic-bezier(0, 0, .2, 1); --n-ripple-duration: .6s; --n-opacity-disabled: 0.5; --n-wave-opacity: 0.6; font-weight: 400; --n-color: #2d8cf0; --n-color-hover: #3c9bff; --n-color-pressed: #3c9bff; --n-color-focus: #3c9bff; --n-color-disabled: #2d8cf0; --n-ripple-color: #2d8cf0; --n-text-color: #FFF; --n-text-color-hover: #FFF; --n-text-color-pressed: #FFF; --n-text-color-focus: #FFF; --n-text-color-disabled: #FFF; --n-border: 1px solid #2d8cf0; --n-border-hover: 1px solid #3c9bff; --n-border-pressed: 1px solid #3c9bff; --n-border-focus: 1px solid #3c9bff; --n-border-disabled: 1px solid #2d8cf0; --n-width: initial; --n-height: 28px; --n-font-size: 14px; --n-padding: 0 10px; --n-icon-size: 18px; --n-icon-margin: 6px; --n-border-radius: 3px;">
                  <!---->
                  <!---->
                  <span class="n-button__content">Screening</span>
                  <div aria-hidden="true" class="n-base-wave"></div>
                  <div aria-hidden="true" class="n-button__border"></div>
                  <div aria-hidden="true" class="n-button__state-border"></div>
                </button>
              </div>
              <div class="n-form-item-feedback-wrapper">
                <!---->
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="n-data-table n-data-table--bordered n-data-table--single-line w-full" style="--n-font-size: 14px; --n-th-padding: 12px; --n-td-padding: 12px; --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-border-radius: 3px; --n-line-height: 1.6; --n-border-color: rgba(239, 239, 245, 1); --n-border-color-modal: rgba(239, 239, 245, 1); --n-border-color-popover: rgba(239, 239, 245, 1); --n-th-color: rgba(250, 250, 252, 1); --n-th-color-hover: rgba(243, 243, 247, 1); --n-th-color-modal: rgba(250, 250, 252, 1); --n-th-color-hover-modal: rgba(243, 243, 247, 1); --n-th-color-popover: rgba(250, 250, 252, 1); --n-th-color-hover-popover: rgba(243, 243, 247, 1); --n-td-color: #fff; --n-td-color-hover: rgba(247, 247, 250, 1); --n-td-color-modal: #fff; --n-td-color-hover-modal: rgba(247, 247, 250, 1); --n-td-color-popover: #fff; --n-td-color-hover-popover: rgba(247, 247, 250, 1); --n-th-text-color: rgb(31, 34, 37); --n-td-text-color: rgb(51, 54, 57); --n-th-font-weight: 500; --n-th-button-color-hover: rgba(0, 0, 100, 0.03); --n-th-icon-color: rgba(194, 194, 194, 1); --n-th-icon-color-active: #2d8cf0; --n-filter-size: 15px; --n-pagination-margin: 12px 0 0 0; --n-empty-padding: 48px 0; --n-box-shadow-before: inset -12px 0 8px -12px rgba(0, 0, 0, .18); --n-box-shadow-after: inset 12px 0 8px -12px rgba(0, 0, 0, .18); --n-sorter-size: 15px; --n-loading-size: 28px; --n-loading-color: #2d8cf0; --n-opacity-loading: 0.5; --n-td-color-striped: rgba(250, 250, 252, 1); --n-td-color-striped-modal: rgba(250, 250, 252, 1); --n-td-color-striped-popover: rgba(250, 250, 252, 1);">
        <div class="n-data-table-wrapper">
          <div class="n-data-table-base-table">
            <!---->
            <div class="n-data-table-base-table-body n-scrollbar" role="none" style="--n-scrollbar-bezier: cubic-bezier(.4, 0, .2, 1); --n-scrollbar-color: rgba(0, 0, 0, 0.25); --n-scrollbar-color-hover: rgba(0, 0, 0, 0.4); --n-scrollbar-border-radius: 5px; --n-scrollbar-width: 5px; --n-scrollbar-height: 5px;">
              <div role="none" class="n-scrollbar-container">
                <div role="none" class="n-scrollbar-content" style="width: fit-content; min-width: 100%;">
                  <table class="n-data-table-table" style="table-layout: auto;">
                    <colgroup>
                      <col>
                      <col>
                      <col>
                    </colgroup>
                    <thead class="n-data-table-thead" data-n-id="535b5efe">
                      <tr class="n-data-table-tr">
                        <th colspan="1" rowspan="1" data-col-key="name" class="n-data-table-th">
                          <!---->
                          <!---->
                        </th>
                        <th colspan="1" rowspan="1" data-col-key="price" class="n-data-table-th">
                          <!---->
                          <!---->
                        </th>
                        <th colspan="1" rowspan="1" data-col-key="name" class="n-data-table-th n-data-table-th--last">
                          <!---->
                          <!---->
                        </th>
                      </tr>
                    </thead>
                    <tbody data-n-id="535b5efe" class="n-data-table-tbody prolist">
                    <?php 
                    $query = $this->db->order_by('productPrice', 'ASC')->get('products');
                      if ($query->num_rows() > 0) {
                        foreach ($query->result() as $key => $value) {
                        
                     ?>
                      <tr class="n-data-table-tr" id="<?php echo $value->id; ?>">
                        <td colspan="1" rowspan="1" data-col-key="name" class="n-data-table-td n-data-table-td--last-row pname">
                          <?php echo $value->productName; ?>
                        </td>
                        <td colspan="1" rowspan="1" data-col-key="price" class="n-data-table-td n-data-table-td--last-row pprice">
                          <?php echo $value->productPrice; ?>
                        </td>
                        <td colspan="1" rowspan="1" data-col-key="name" class="n-data-table-td n-data-table-td--last-col n-data-table-td--last-row">
                        
                            <button class="n-button n-button--info-type n-button--medium-type add" data-user-id="<?php echo $value->id; ?>" tabindex="0" type="button" >
                              <!---->
                              <!---->
                              <span class="n-button__content">Add to Continuous Order</span>
                              <div aria-hidden="true" class="n-base-wave"></div>
                              <div aria-hidden="true" class="n-button__border"></div>
                              <div aria-hidden="true" class="n-button__state-border"></div>
                            </button>
                            
                        </td>
                      </tr>
                    <?php } } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="n-scrollbar-rail n-scrollbar-rail--vertical n-scrollbar-rail--disabled" aria-hidden="true" style="z-index: 3;">
                <!---->
              </div>
              <div class="n-scrollbar-rail n-scrollbar-rail--horizontal n-scrollbar-rail--disabled" aria-hidden="true" style="z-index: 3;">
                <!---->
              </div>
            </div>
          </div>
        </div>
        <!---->
        <!---->
      </div>
    </div>
    <!---->
    <!---->
  </div>
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
  $('.ok').click(function () {
    var pval = $('#pids').val().trim();
    if(pval !== ''){
      var continuous = $('.continuous').val().trim();
      if(continuous !== ''){
        $('.totals').prop('disabled', false);
        var formData = $('#continuousorder').serialize();
          $.ajax({
              type: 'POST',
              url: 'member/continuousOrderSubmit', 
              data: formData,
              dataType : 'json',
              success: function(response) {
                $('.totals').prop('disabled', true);
                if(response.status == false){
                  Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                }
                if(response.status == true){
                  setTimeout(function() {
                location.reload();
            },2000);
                  Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                }
              },
              error: function(xhr, status, error) {
                console.error(xhr.responseText); // Log error
              }
      });
      }else{
           Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Please enter continuous number',
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
      }
    }else{
      Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'please select products',
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
    }
  })
    $('.prolist').on('click', '.add', function() { 
              var pid = $(this).data('user-id');
              $('#pids').val(pid);
              var pname = $('#'+pid+' .pname').text();
              var pprice = $('#'+pid+' .pprice').text();
              $('#tagInput').val('('+pid+') '+pprice +' '+pname);
              var inputValue = $('#tagInput').val().trim();
              if (inputValue !== '') {
                var tag = $('<div class="tag">' + inputValue + '<span class="tag-close">&#10006;</span></div>');
                $('#tagContainer').html(tag);
              }
            })
$('.screen').click(function() {
  var formData = $('#price').serialize();
  $.ajax({
        type: 'POST',
        url: 'member/get_product_with_price', 
        data: formData,
        dataType : 'json',
        success: function(products) {
          if(products.status == true){
            $('.prolist').html('');
            $.each(products.prod, function(index, product) {
                    var row = '<tr class="n-data-table-tr" id="' + product.id + '">' +
                                  '<td colspan="1" rowspan="1" data-col-key="name" class="n-data-table-td n-data-table-td--last-row pname">' + product.productName + '</td>' +
                                  '<td colspan="1" rowspan="1" data-col-key="name" class="n-data-table-td n-data-table-td--last-row pprice">' + product.productPrice + '</td>' +
                                  '<td colspan="1" rowspan="1" data-col-key="name" class="n-data-table-td n-data-table-td--last-row "><button  class="n-button n-button--info-type n-button--medium-type add" data-user-id="' + product.id + '" tabindex="0" type="button" ><span class="n-button__content">Add to Continuous Order</span><div aria-hidden="true" class="n-base-wave"></div><div aria-hidden="true" class="n-button__border"></div><div aria-hidden="true" class="n-button__state-border"></div></button></td>' +
                                 
                                  // Add more table cells for additional product data
                              '</tr>';
                    $('.prolist').append(row);
                }); // Display response message
          }
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText); // Log error
        }
      });
})


           
           
            
    $('#tagContainer').on('click', '.tag-close', function() {
        $(this).parent().remove();
        $('#tagInput').val('');
        $('#pids').val('');
    });
});
$('.reset').click(function () {
  var id = $(this).data('user-id');
     $.ajax({
              url: 'member/orderReset/' + id,
              type: 'GET',
              dataType: 'json',
              success: function(response) {
                  if(response.status == 'false'){
                    Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                    setTimeout(function() {
                location.reload();
            }, 2000);
                  }
                  if(response.status == 'true'){
                    Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 2000 // Automatically close after 1.5 seconds
                          });
                    setTimeout(function() {
                location.reload();
            }, 2000);
                  }
         }
    });
})
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
                  </style><style>
  .tag {
    display: inline-flex;
    background-color: rgb(21 175 92);
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    margin-right: 5px;
}

.tag-close {
    cursor: pointer;
}
.table-container {
    width: 100%;
    overflow-x: auto;
}

.responsive-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.responsive-table thead {
    background-color: #f2f2f2;
}

.responsive-table th,
.responsive-table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

@media screen and (max-width: 600px) {
    .responsive-table thead {
        display: none;
    }

    .responsive-table, .responsive-table tbody, .responsive-table tr, .responsive-table td {
        display: block;
        width: 100%;
    }

    .responsive-table tr {
        margin-bottom: 15px;
    }

    .responsive-table td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    .responsive-table td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: bold;
        text-align: left;
    }
}
</style>