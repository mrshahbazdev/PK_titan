<style cssr-id="n-divider">
      .n-divider {
        position: relative;
        display: flex;
        width: 100%;
        box-sizing: border-box;
        font-size: 16px;
        color: var(--n-text-color);
        transition:
          color .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
      }

      .n-divider:not(.n-divider--vertical) {
        margin-top: 24px;
        margin-bottom: 24px;
      }

      .n-divider:not(.n-divider--vertical):not(.n-divider--no-title) {
        display: flex;
        align-items: center;
      }

      .n-divider .n-divider__title {
        display: flex;
        align-items: center;
        margin-left: 12px;
        margin-right: 12px;
        white-space: nowrap;
        font-weight: var(--n-font-weight);
      }

      .n-divider.n-divider--title-position-left .n-divider__line.n-divider__line--left {
        width: 28px;
      }

      .n-divider.n-divider--title-position-right .n-divider__line.n-divider__line--right {
        width: 28px;
      }

      .n-divider.n-divider--dashed .n-divider__line {
        background-color: #0000;
        height: 0px;
        width: 100%;
        border-style: dashed;
        border-width: 1px 0 0;
      }

      .n-divider.n-divider--vertical {
        display: inline-block;
        height: 1em;
        margin: 0 8px;
        vertical-align: middle;
        width: 1px;
      }

      .n-divider .n-divider__line {
        border: none;
        transition: background-color .3s var(--n-bezier), border-color .3s var(--n-bezier);
        height: 1px;
        width: 100%;
        margin: 0;
      }

      .n-divider:not(.n-divider--dashed) .n-divider__line {
        background-color: var(--n-color);
      }

      .n-divider.n-divider--dashed .n-divider__line {
        border-color: var(--n-color);
      }

      .n-divider.n-divider--vertical {
        background-color: var(--n-color);
      }
    </style>
    <style cssr-id="vueuc/virtual-list">
      .v-vl {
        max-height: inherit;
        height: 100%;
        overflow: auto;
        min-width: 1px;
      }

      .v-vl:not(.v-vl--show-scrollbar) {
        scrollbar-width: none;
      }

      .v-vl:not(.v-vl--show-scrollbar)::-webkit-scrollbar,
      .v-vl:not(.v-vl--show-scrollbar)::-webkit-scrollbar-track-piece,
      .v-vl:not(.v-vl--show-scrollbar)::-webkit-scrollbar-thumb {
        width: 0;
        height: 0;
        display: none;
      }
    </style>
    <style cssr-id="n-internal-select-menu">
      .n-base-select-menu {
        line-height: 1.5;
        outline: none;
        z-index: 0;
        position: relative;
        border-radius: var(--n-border-radius);
        transition:
          background-color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier);
        background-color: var(--n-color);
      }

      .n-base-select-menu.n-base-select-menu--multiple .n-base-select-option {
        padding-right: 28px;
      }

      .n-base-select-menu .n-scrollbar {
        max-height: var(--n-height);
      }

      .n-base-select-menu .n-virtual-list {
        max-height: var(--n-height);
      }

      .n-base-select-menu .n-base-select-option {
        min-height: var(--n-option-height);
        font-size: var(--n-option-font-size);
        display: flex;
        align-items: center;
      }

      .n-base-select-menu .n-base-select-option .n-base-select-option__content {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
      }

      .n-base-select-menu .n-base-select-group-header {
        min-height: var(--n-option-height);
        font-size: .93em;
        display: flex;
        align-items: center;
      }

      .n-base-select-menu .n-base-select-menu-option-wrapper {
        position: relative;
        width: 100%;
      }

      .n-base-select-menu .n-base-select-menu__loading,
      .n-base-select-menu .n-base-select-menu__empty {
        display: flex;
        padding: 12px 32px;
        flex: 1;
        justify-content: center;
      }

      .n-base-select-menu .n-base-select-menu__loading {
        color: var(--n-loading-color);
        font-size: var(--n-loading-size);
      }

      .n-base-select-menu .n-base-select-menu__action {
        padding: 8px var(--n-option-padding-left);
        font-size: var(--n-option-font-size);
        transition:
          color .3s var(--n-bezier);
        border-color .3s var(--n-bezier);
        border-top: 1px solid var(--n-action-divider-color);
        color: var(--n-action-text-color);
      }

      .n-base-select-menu .n-base-select-group-header {
        position: relative;
        cursor: default;
        padding: var(--n-option-padding);
        color: var(--n-group-header-text-color);
      }

      .n-base-select-menu .n-base-select-option {
        cursor: pointer;
        position: relative;
        padding: var(--n-option-padding);
        transition:
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier),
          opacity .3s var(--n-bezier);
        box-sizing: border-box;
        color: var(--n-option-text-color);
        opacity: 1;
      }

      .n-base-select-menu .n-base-select-option:active {
        color: var(--n-option-text-color-pressed);
      }

      .n-base-select-menu .n-base-select-option.n-base-select-option--grouped {
        padding-left: calc(var(--n-option-padding-left) * 1.5);
      }

      .n-base-select-menu .n-base-select-option.n-base-select-option--pending {
        background-color: var(--n-option-color-pending);
      }

      .n-base-select-menu .n-base-select-option.n-base-select-option--selected {
        color: var(--n-option-text-color-active);
        background-color: var(--n-option-color-active);
      }

      .n-base-select-menu .n-base-select-option.n-base-select-option--disabled {
        cursor: not-allowed;
      }

      .n-base-select-menu .n-base-select-option.n-base-select-option--disabled:not(.n-base-select-option--selected) {
        color: var(--n-option-text-color-disabled);
      }

      .n-base-select-menu .n-base-select-option.n-base-select-option--disabled.n-base-select-option--selected {
        opacity: var(--n-option-opacity-disabled);
      }

      .n-base-select-menu .n-base-select-option .n-base-select-option__check {
        font-size: 16px;
        position: absolute;
        right: 8px;
        top: calc(50% - 7px);
        color: var(--n-option-check-color);
        transition: color .3s var(--n-bezier);
      }

      .n-base-select-menu .n-base-select-option .n-base-select-option__check.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-base-select-menu .n-base-select-option .n-base-select-option__check.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-base-select-menu .n-base-select-option .n-base-select-option__check.fade-in-scale-up-transition-enter-from,
      .n-base-select-menu .n-base-select-option .n-base-select-option__check.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(0.5);
      }

      .n-base-select-menu .n-base-select-option .n-base-select-option__check.fade-in-scale-up-transition-leave-from,
      .n-base-select-menu .n-base-select-option .n-base-select-option__check.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }
    </style>
    <style cssr-id="n-base-close">
      .n-base-close {
        cursor: pointer;
        color: var(--n-close-color);
      }

      .n-base-close:hover {
        color: var(--n-close-color-hover);
      }

      .n-base-close:active {
        color: var(--n-close-color-pressed);
      }

      .n-base-close.n-base-close--disabled {
        cursor: not-allowed !important;
        color: var(--n-close-color-disabled);
      }
    </style>
    <style cssr-id="n-dialog">
      .n-dialog {
        line-height: var(--n-line-height);
        position: relative;
        background: var(--n-color);
        color: var(--n-text-color);
        box-sizing: border-box;
        margin: auto;
        border-radius: var(--n-border-radius);
        padding: var(--n-padding);
        transition:
          border-color .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
      }

      .n-dialog .n-dialog__icon {
        color: var(--n-icon-color);
      }

      .n-dialog.n-dialog--bordered {
        border: var(--n-border);
      }

      .n-dialog.n-dialog--icon-top .n-dialog__close {
        margin: var(--n-close-margin);
      }

      .n-dialog.n-dialog--icon-top .n-dialog__icon {
        margin: var(--n-icon-margin);
      }

      .n-dialog.n-dialog--icon-top .n-dialog__content {
        text-align: center;
      }

      .n-dialog.n-dialog--icon-top .n-dialog__title {
        justify-content: center;
      }

      .n-dialog.n-dialog--icon-top .n-dialog__action {
        justify-content: center;
      }

      .n-dialog.n-dialog--icon-left .n-dialog__icon {
        margin: var(--n-icon-margin);
      }

      .n-dialog .n-dialog__close {
        font-size: var(--n-close-size);
        position: absolute;
        right: 0;
        top: 0;
        margin: var(--n-close-margin);
        transition: .3s color var(--n-bezier);
        z-index: 1;
      }

      .n-dialog .n-dialog__content {
        font-size: var(--n-font-size);
        margin: var(--n-content-margin);
        position: relative;
        word-break: break-word;
      }

      .n-dialog .n-dialog__content.n-dialog__content--last {
        margin-bottom: 0;
      }

      .n-dialog .n-dialog__action {
        display: flex;
        justify-content: flex-end;
      }

      .n-dialog .n-dialog__action>*:not(:last-child) {
        margin-right: var(--n-action-space);
      }

      .n-dialog .n-dialog__icon {
        font-size: var(--n-icon-size);
        transition: color .3s var(--n-bezier);
      }

      .n-dialog .n-dialog__title {
        transition: color .3s var(--n-bezier);
        display: flex;
        align-items: center;
        font-size: var(--n-title-font-size);
        font-weight: var(--n-title-font-weight);
        color: var(--n-title-text-color);
      }

      .n-dialog .n-dialog-icon-container {
        display: flex;
        justify-content: center;
      }

      .n-modal .n-dialog,
      .n-drawer .n-dialog {
        width: 446px;
        max-width: calc(100vw - 32px);
      }

      .n-dialog.n-modal {
        width: 446px;
        max-width: calc(100vw - 32px);
      }
    </style>
    <style cssr-id="n-modal">
      .n-modal-container {
        position: fixed;
        left: 0;
        top: 0;
        height: 0;
        width: 0;
        display: flex;
      }

      .n-modal-mask {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, .4);
      }

      .n-modal-mask.fade-in-transition-enter-active {
        transition: all .25s var(--n-bezier-ease-out) !important;
      }

      .n-modal-mask.fade-in-transition-leave-active {
        transition: all .25s var(--n-bezier-ease-out) !important;
      }

      .n-modal-mask.fade-in-transition-enter-from,
      .n-modal-mask.fade-in-transition-leave-to {
        opacity: 0;
      }

      .n-modal-mask.fade-in-transition-leave-from,
      .n-modal-mask.fade-in-transition-enter-to {
        opacity: 1;
      }

      .n-modal-body-wrapper {
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: visible;
      }

      .n-modal-body-wrapper .n-modal-scroll-content {
        min-height: 100%;
        display: flex;
        position: relative;
      }

      .n-modal {
        align-self: center;
        color: var(--n-text-color);
        margin: auto;
        box-shadow: var(--n-box-shadow);
      }

      .n-modal.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .25s cubic-bezier(.4, 0, 1, 1), transform .25s cubic-bezier(.4, 0, 1, 1);
      }

      .n-modal.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .25s cubic-bezier(0, 0, .2, 1), transform .25s cubic-bezier(0, 0, .2, 1);
      }

      .n-modal.fade-in-scale-up-transition-enter-from,
      .n-modal.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(.5);
      }

      .n-modal.fade-in-scale-up-transition-leave-from,
      .n-modal.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }
    </style>
    <style cssr-id="n-pagination">
      .n-pagination {
        display: flex;
        vertical-align: middle;
        font-size: var(--n-item-font-size);
        flex-wrap: nowrap;
      }

      .n-pagination .n-pagination-prefix {
        display: flex;
        align-items: center;
        margin: var(--n-prefix-margin);
      }

      .n-pagination .n-pagination-suffix {
        display: flex;
        align-items: center;
        margin: var(--n-suffix-margin);
      }

      .n-pagination>*:not(:first-child) {
        margin: var(--n-item-margin);
      }

      .n-pagination .n-select {
        width: var(--n-select-width);
      }

      .n-pagination.transition-disabled .n-pagination-item {
        transition: none !important;
      }

      .n-pagination .n-pagination-quick-jumper {
        white-space: nowrap;
        display: flex;
        color: var(--n-jumper-text-color);
        transition: color .3s var(--n-bezier);
        align-items: center;
        font-size: var(--n-jumter-font-size);
      }

      .n-pagination .n-pagination-quick-jumper .n-input {
        margin: var(--n-input-margin);
        width: var(--n-input-width);
      }

      .n-pagination .n-pagination-item {
        position: relative;
        cursor: pointer;
        user-select: none;
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        min-width: var(--n-item-size);
        height: var(--n-item-size);
        padding: var(--n-item-padding);
        background-color: var(--n-item-color);
        color: var(--n-item-text-color);
        border-radius: var(--n-item-border-radius);
        border: var(--n-item-border);
        fill: var(--n-button-icon-color);
        transition:
          color .3s var(--n-bezier),
          border-color .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          fill .3s var(--n-bezier);
      }

      .n-pagination .n-pagination-item.n-pagination-item--button {
        background: var(--n-button-color);
        color: var(--n-button-icon-color);
        border: var(--n-button-border);
      }

      .n-pagination .n-pagination-item.n-pagination-item--button .n-base-icon {
        font-size: var(--n-button-icon-size);
      }

      .n-pagination .n-pagination-item:not(.n-pagination-item--disabled):hover {
        background: var(--n-item-color-hover);
        color: var(--n-item-text-color-hover);
        border: var(--n-item-border-hover);
      }

      .n-pagination .n-pagination-item:not(.n-pagination-item--disabled):hover.n-pagination-item--button {
        background: var(--n-button-color-hover);
        border: var(--n-button-border-hover);
        color: var(--n-button-icon-color-hover);
      }

      .n-pagination .n-pagination-item:not(.n-pagination-item--disabled):active {
        background: var(--n-item-color-pressed);
        color: var(--n-item-text-color-pressed);
        border: var(--n-item-border-pressed);
      }

      .n-pagination .n-pagination-item:not(.n-pagination-item--disabled):active.n-pagination-item--button {
        background: var(--n-button-color-pressed);
        border: var(--n-button-border-pressed);
        color: var(--n-button-icon-color-pressed);
      }

      .n-pagination .n-pagination-item:not(.n-pagination-item--disabled).n-pagination-item--active {
        background: var(--n-item-color-active);
        color: var(--n-item-text-color-active);
        border: var(--n-item-border-active);
      }

      .n-pagination .n-pagination-item:not(.n-pagination-item--disabled).n-pagination-item--active:hover {
        background: var(--n-item-color-active-hover);
      }

      .n-pagination .n-pagination-item.n-pagination-item--disabled {
        cursor: not-allowed;
        color: var(--n-item-text-color-disabled);
      }

      .n-pagination .n-pagination-item.n-pagination-item--disabled.n-pagination-item--active,
      .n-pagination .n-pagination-item.n-pagination-item--disabled.n-pagination-item--button {
        background-color: var(--n-item-color-disabled);
        border: var(--n-item-border-disabled);
      }

      .n-pagination.n-pagination--disabled {
        cursor: not-allowed;
      }

      .n-pagination.n-pagination--disabled .n-pagination-quick-jumper {
        color: var(--n-jumper-text-color-disabled);
      }
    </style>
    <style cssr-id="n-empty">
      .n-empty {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-size: var(--n-font-size);
      }

      .n-empty .n-empty__icon {
        width: var(--n-icon-size);
        height: var(--n-icon-size);
        font-size: var(--n-icon-size);
        line-height: var(--n-icon-size);
        color: var(--n-icon-color);
        transition:
          color .3s var(--n-bezier);
      }

      .n-empty .n-empty__icon+.n-empty__description {
        margin-top: 8px;
      }

      .n-empty .n-empty__description {
        transition: color .3s var(--n-bezier);
        color: var(--n-text-color);
      }

      .n-empty .n-empty__extra {
        text-align: center;
        transition: color .3s var(--n-bezier);
        margin-top: 12px;
        color: var(--n-extra-text-color);
      }
    </style>
    <style cssr-id="n-data-table">
      .n-data-table {
        width: 100%;
        font-size: var(--n-font-size);
        display: flex;
        flex-direction: column;
        position: relative;
        --n-merged-th-color: var(--n-th-color);
        --n-merged-td-color: var(--n-td-color);
        --n-merged-border-color: var(--n-border-color);
        --n-merged-th-color-hover: var(--n-th-color-hover);
        --n-merged-td-color-hover: var(--n-td-color-hover);
        --n-merged-td-color-striped: var(--n-td-color-striped);
      }

      .n-data-table .n-data-table-wrapper {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
      }

      .n-data-table.n-data-table--flex-height>.n-data-table-wrapper>.n-data-table-base-table {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
      }

      .n-data-table.n-data-table--flex-height>.n-data-table-wrapper>.n-data-table-base-table>.n-data-table-base-table-body {
        flex-basis: 0;
      }

      .n-data-table.n-data-table--flex-height>.n-data-table-wrapper>.n-data-table-base-table>.n-data-table-base-table-body:last-child {
        flex-grow: 1;
      }

      .n-data-table>.n-base-loading {
        color: var(--n-loading-color);
        font-size: var(--n-loading-size);
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
        transition: color .3s var(--n-bezier);
      }

      .n-data-table>.n-base-loading.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-data-table>.n-base-loading.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-data-table>.n-base-loading.fade-in-scale-up-transition-enter-from,
      .n-data-table>.n-base-loading.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: translateX(-50%) translateY(-50%) scale(.9);
      }

      .n-data-table>.n-base-loading.fade-in-scale-up-transition-leave-from,
      .n-data-table>.n-base-loading.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: translateX(-50%) translateY(-50%) scale(1);
      }

      .n-data-table .n-data-table-expand-trigger {
        cursor: pointer;
      }

      .n-data-table .n-data-table-expand-placeholder {
        margin-right: 8px;
        display: inline-block;
        width: 16px;
        height: 1px;
      }

      .n-data-table .n-data-table-indent {
        display: inline-block;
        height: 1px;
      }

      .n-data-table .n-data-table-expand-trigger {
        margin-right: 8px;
        cursor: pointer;
        font-size: 16px;
        vertical-align: -0.2em;
        position: relative;
        width: 16px;
        height: 16px;
        color: var(--n-td-text-color);
        transition: color .3s var(--n-bezier);
      }

      .n-data-table .n-data-table-expand-trigger .n-base-loading {
        color: var(--n-loading-color);
        transition: color .3s var(--n-bezier);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }

      .n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-enter-from,
      .n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-leave-to {
        transform: scale(0.75);
        left: 0;
        top: 0;
        opacity: 0;
      }

      .n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-enter-to,
      .n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-leave-from {
        transform: scale(1);
        left: 0;
        top: 0;
        opacity: 1;
      }

      .n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-enter-active,
      .n-data-table .n-data-table-expand-trigger .n-base-loading.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 0;
        top: 0;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-data-table .n-data-table-expand-trigger .n-data-table-expand-trigger__icon {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }

      .n-data-table .n-data-table-expand-trigger .n-data-table-expand-trigger__icon.icon-switch-transition-enter-from,
      .n-data-table .n-data-table-expand-trigger .n-data-table-expand-trigger__icon.icon-switch-transition-leave-to {
        transform: scale(0.75);
        left: 0;
        top: 0;
        opacity: 0;
      }

      .n-data-table .n-data-table-expand-trigger .n-data-table-expand-trigger__icon.icon-switch-transition-enter-to,
      .n-data-table .n-data-table-expand-trigger .n-data-table-expand-trigger__icon.icon-switch-transition-leave-from {
        transform: scale(1);
        left: 0;
        top: 0;
        opacity: 1;
      }

      .n-data-table .n-data-table-expand-trigger .n-data-table-expand-trigger__icon.icon-switch-transition-enter-active,
      .n-data-table .n-data-table-expand-trigger .n-data-table-expand-trigger__icon.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 0;
        top: 0;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-data-table .n-data-table-thead {
        transition: background-color .3s var(--n-bezier);
        background-color: var(--n-merged-th-color);
      }

      .n-data-table .n-data-table-tr {
        box-sizing: border-box;
        background-clip: padding-box;
        transition: background-color .3s var(--n-bezier);
      }

      .n-data-table .n-data-table-tr.n-data-table-tr--striped {
        background-color: var(--n-merged-td-color-striped);
      }

      .n-data-table .n-data-table-tr.n-data-table-tr--striped .n-data-table-td {
        background-color: var(--n-merged-td-color-striped);
      }

      .n-data-table .n-data-table-tr:not(.n-data-table-tr--summary):hover {
        background-color: var(--n-merged-td-color-hover);
      }

      .n-data-table .n-data-table-tr:not(.n-data-table-tr--summary):hover .n-data-table-td {
        background-color: var(--n-merged-td-color-hover);
      }

      .n-data-table .n-data-table-th {
        padding: var(--n-th-padding);
        position: relative;
        text-align: start;
        box-sizing: border-box;
        background-color: var(--n-merged-th-color);
        border-color: var(--n-merged-border-color);
        border-bottom: 1px solid var(--n-merged-border-color);
        color: var(--n-th-text-color);
        transition:
          border-color .3s var(--n-bezier),
          color .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
        font-weight: var(--n-th-font-weight);
      }

      .n-data-table .n-data-table-th.n-data-table-th--filterable {
        padding-right: 36px;
      }

      .n-data-table .n-data-table-th.n-data-table-th--fixed-left {
        left: 0;
        position: sticky;
        z-index: 2;
      }

      .n-data-table .n-data-table-th.n-data-table-th--fixed-left::after {
        pointer-events: none;
        content: "";
        width: 36px;
        display: inline-block;
        position: absolute;
        top: 0;
        bottom: -1px;
        transition: box-shadow .2s var(--n-bezier);
        right: -36px;
      }

      .n-data-table .n-data-table-th.n-data-table-th--fixed-right {
        right: 0;
        position: sticky;
        z-index: 1;
      }

      .n-data-table .n-data-table-th.n-data-table-th--fixed-right::before {
        pointer-events: none;
        content: "";
        width: 36px;
        display: inline-block;
        position: absolute;
        top: 0;
        bottom: -1px;
        transition: box-shadow .2s var(--n-bezier);
        left: -36px;
      }

      .n-data-table .n-data-table-th.n-data-table-th--selection {
        padding: 0;
        text-align: center;
        line-height: 0;
        z-index: 3;
      }

      .n-data-table .n-data-table-th .n-data-table-th__ellipsis {
        display: inline-block;
        vertical-align: bottom;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        max-width: 100%;
      }

      .n-data-table .n-data-table-th.n-data-table-th--hover {
        background-color: var(--n-merged-th-color-hover);
      }

      .n-data-table .n-data-table-th.n-data-table-th--sortable {
        cursor: pointer;
      }

      .n-data-table .n-data-table-th.n-data-table-th--sortable .n-data-table-th__ellipsis {
        max-width: calc(100% - 18px);
      }

      .n-data-table .n-data-table-th.n-data-table-th--sortable:hover {
        background-color: var(--n-merged-th-color-hover);
      }

      .n-data-table .n-data-table-th .n-data-table-sorter {
        height: var(--n-sorter-size);
        width: var(--n-sorter-size);
        margin-left: 4px;
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        vertical-align: -0.2em;
        color: var(--n-th-icon-color);
        transition: color .3s var(--n-bezier);
      }

      .n-data-table .n-data-table-th .n-data-table-sorter .n-base-icon {
        transition: transform .3s var(--n-bezier)
      }

      .n-data-table .n-data-table-th .n-data-table-sorter.n-data-table-sorter--desc .n-base-icon {
        transform: rotate(0deg);
      }

      .n-data-table .n-data-table-th .n-data-table-sorter.n-data-table-sorter--asc .n-base-icon {
        transform: rotate(-180deg);
      }

      .n-data-table .n-data-table-th .n-data-table-sorter.n-data-table-sorter--asc,
      .n-data-table .n-data-table-th .n-data-table-sorter.n-data-table-sorter--desc {
        color: var(--n-th-icon-color-active);
      }

      .n-data-table .n-data-table-th .n-data-table-filter {
        position: absolute;
        z-index: auto;
        right: 0;
        width: 36px;
        top: 0;
        bottom: 0;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        transition:
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
        font-size: var(--n-filter-size);
        color: var(--n-th-icon-color);
      }

      .n-data-table .n-data-table-th .n-data-table-filter:hover {
        background-color: var(--n-th-button-color-hover);
      }

      .n-data-table .n-data-table-th .n-data-table-filter.n-data-table-filter--show {
        background-color: var(--n-th-button-color-hover);
      }

      .n-data-table .n-data-table-th .n-data-table-filter.n-data-table-filter--active {
        background-color: var(--n-th-button-color-hover);
        color: var(--n-th-icon-color-active);
      }

      .n-data-table .n-data-table-td {
        padding: var(--n-td-padding);
        text-align: start;
        box-sizing: border-box;
        border: none;
        background-color: var(--n-merged-td-color);
        color: var(--n-td-text-color);
        border-bottom: 1px solid var(--n-merged-border-color);
        transition:
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          border-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
      }

      .n-data-table .n-data-table-td.n-data-table-td--last-row {
        border-bottom: 0 solid var(--n-merged-border-color);
      }

      .n-data-table .n-data-table-td.n-data-table-td--last-row::after {
        bottom: 0 !important;
      }

      .n-data-table .n-data-table-td.n-data-table-td--last-row::before {
        bottom: 0 !important;
      }

      .n-data-table .n-data-table-td.n-data-table-td--summary {
        background-color: var(--n-merged-th-color);
      }

      .n-data-table .n-data-table-td.n-data-table-td--hover {
        background-color: var(--n-merged-td-color-hover);
      }

      .n-data-table .n-data-table-td.n-data-table-td--ellipsis {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
      }

      .n-data-table .n-data-table-td.n-data-table-td--selection,
      .n-data-table .n-data-table-td.n-data-table-td--expand {
        text-align: center;
        padding: 0;
        line-height: 0;
      }

      .n-data-table .n-data-table-td.n-data-table-td--fixed-left {
        left: 0;
        position: sticky;
        z-index: 2;
      }

      .n-data-table .n-data-table-td.n-data-table-td--fixed-left::after {
        pointer-events: none;
        content: "";
        width: 36px;
        display: inline-block;
        position: absolute;
        top: 0;
        bottom: -1px;
        transition: box-shadow .2s var(--n-bezier);
        right: -36px;
      }

      .n-data-table .n-data-table-td.n-data-table-td--fixed-right {
        right: 0;
        position: sticky;
        z-index: 1;
      }

      .n-data-table .n-data-table-td.n-data-table-td--fixed-right::before {
        pointer-events: none;
        content: "";
        width: 36px;
        display: inline-block;
        position: absolute;
        top: 0;
        bottom: -1px;
        transition: box-shadow .2s var(--n-bezier);
        left: -36px;
      }

      .n-data-table .n-data-table-empty {
        box-sizing: border-box;
        padding: var(--n-empty-padding);
        flex-grow: 1;
        flex-shrink: 0;
        opacity: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity .3s var(--n-bezier);
      }

      .n-data-table .n-data-table-empty.n-data-table-empty--hide {
        opacity: 0;
      }

      .n-data-table .n-data-table__pagination {
        margin: var(--n-pagination-margin);
        display: flex;
        justify-content: flex-end;
      }

      .n-data-table .n-data-table-wrapper {
        position: relative;
        opacity: 1;
        transition: opacity .3s var(--n-bezier), border-color .3s var(--n-bezier);
        border-top-left-radius: var(--n-border-radius);
        border-top-right-radius: var(--n-border-radius);
        line-height: var(--n-line-height);
      }

      .n-data-table.n-data-table--loading .n-data-table-wrapper {
        opacity: var(--n-opacity-loading);
        pointer-events: none;
      }

      .n-data-table.n-data-table--single-column .n-data-table-td {
        border-bottom: 0 solid var(--n-merged-border-color);
      }

      .n-data-table.n-data-table--single-column .n-data-table-td::after,
      .n-data-table.n-data-table--single-column .n-data-table-td::before {
        bottom: 0 !important;
      }

      .n-data-table:not(.n-data-table--single-line) .n-data-table-th {
        border-right: 1px solid var(--n-merged-border-color);
      }

      .n-data-table:not(.n-data-table--single-line) .n-data-table-th.n-data-table-th--last {
        border-right: 0 solid var(--n-merged-border-color);
      }

      .n-data-table:not(.n-data-table--single-line) .n-data-table-td {
        border-right: 1px solid var(--n-merged-border-color);
      }

      .n-data-table:not(.n-data-table--single-line) .n-data-table-td.n-data-table-td--last-col {
        border-right: 0 solid var(--n-merged-border-color);
      }

      .n-data-table.n-data-table--bordered .n-data-table-wrapper {
        border: 1px solid var(--n-merged-border-color);
        border-bottom-left-radius: var(--n-border-radius);
        border-bottom-right-radius: var(--n-border-radius);
        overflow: hidden;
      }

      .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled .n-data-table-th::after,
      .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled .n-data-table-th::before {
        transition: none;
      }

      .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled .n-data-table-td::after,
      .n-data-table .n-data-table-base-table.n-data-table-base-table--transition-disabled .n-data-table-td::before {
        transition: none;
      }

      .n-data-table.n-data-table--bottom-bordered .n-data-table-td.n-data-table-td--last-row {
        border-bottom: 1px solid var(--n-merged-border-color);
      }

      .n-data-table .n-data-table-table {
        font-variant-numeric: tabular-nums;
        width: 100%;
        word-wrap: break-word;
        word-break: break-all;
        transition: background-color .3s var(--n-bezier);
        border-collapse: separate;
        border-spacing: 0;
        background-color: var(--n-merged-td-color);
      }

      .n-data-table .n-data-table-base-table-header {
        border-top-left-radius: calc(var(--n-border-radius) - 1px);
        border-top-right-radius: calc(var(--n-border-radius) - 1px);
        z-index: 3;
        overflow: scroll;
        flex-shrink: 0;
        transition: border-color .3s var(--n-bezier);
        scrollbar-width: none;
      }

      .n-data-table .n-data-table-base-table-header::-webkit-scrollbar {
        width: 0;
        height: 0;
      }

      .n-data-table .n-data-table-check-extra {
        transition: color .3s var(--n-bezier);
        color: var(--n-th-icon-color);
        position: absolute;
        font-size: 14px;
        right: -4px;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;
      }

      .n-data-table-filter-menu .n-scrollbar {
        max-height: 240px;
      }

      .n-data-table-filter-menu .n-data-table-filter-menu__group {
        display: flex;
        flex-direction: column;
        padding: 12px 12px 0 12px;
      }

      .n-data-table-filter-menu .n-data-table-filter-menu__group .n-checkbox {
        margin-bottom: 12px;
        margin-right: 0;
      }

      .n-data-table-filter-menu .n-data-table-filter-menu__group .n-radio {
        margin-bottom: 12px;
        margin-right: 0;
      }

      .n-data-table-filter-menu .n-data-table-filter-menu__action {
        padding: var(--n-action-padding);
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-evenly;
        border-top: 1px solid var(--n-action-divider-color);
      }

      .n-data-table-filter-menu .n-data-table-filter-menu__action .n-button:not(:last-child) {
        margin: var(--n-action-button-margin);
      }

      .n-data-table-filter-menu .n-data-table-filter-menu__action .n-button:last-child {
        margin-right: 0;
      }

      .n-data-table-filter-menu .n-divider {
        margin: 0 !important;
      }

      .n-modal .n-data-table,
      .n-drawer .n-data-table {
        --n-merged-th-color: var(--n-th-color-modal);
        --n-merged-td-color: var(--n-td-color-modal);
        --n-merged-border-color: var(--n-border-color-modal);
        --n-merged-th-color-hover: var(--n-th-color-hover-modal);
        --n-merged-td-color-hover: var(--n-td-color-hover-modal);
        --n-merged-td-color-striped: var(--n-td-color-striped-modal);
      }

      .n-popover:not(.n-tooltip) .n-data-table {
        --n-merged-th-color: var(--n-th-color-popover);
        --n-merged-td-color: var(--n-td-color-popover);
        --n-merged-border-color: var(--n-border-color-popover);
        --n-merged-th-color-hover: var(--n-th-color-hover-popover);
        --n-merged-td-color-hover: var(--n-td-color-hover-popover);
        --n-merged-td-color-striped: var(--n-td-color-striped-popover);
      }
    </style>
    <style cssr-id="n-base-clear">
      .n-base-clear {
        flex-shrink: 0;
        height: 1em;
        width: 1em;
        position: relative;
      }

      .n-base-clear>.n-base-clear__clear {
        font-size: var(--n-clear-size);
        cursor: pointer;
        color: var(--n-clear-color);
        transition: color .3s var(--n-bezier);
      }

      .n-base-clear>.n-base-clear__clear:hover {
        color: var(--n-clear-color-hover) !important;
      }

      .n-base-clear>.n-base-clear__clear:active {
        color: var(--n-clear-color-pressed) !important;
      }

      .n-base-clear>.n-base-clear__placeholder {
        display: flex;
      }

      .n-base-clear>.n-base-clear__clear,
      .n-base-clear>.n-base-clear__placeholder {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
      }

      .n-base-clear>.n-base-clear__clear.icon-switch-transition-enter-from,
      .n-base-clear>.n-base-clear__placeholder.icon-switch-transition-enter-from,
      .n-base-clear>.n-base-clear__clear.icon-switch-transition-leave-to,
      .n-base-clear>.n-base-clear__placeholder.icon-switch-transition-leave-to {
        transform: translateX(-50%) translateY(-50%) scale(0.75);
        left: 50%;
        top: 50%;
        opacity: 0;
      }

      .n-base-clear>.n-base-clear__clear.icon-switch-transition-enter-to,
      .n-base-clear>.n-base-clear__placeholder.icon-switch-transition-enter-to,
      .n-base-clear>.n-base-clear__clear.icon-switch-transition-leave-from,
      .n-base-clear>.n-base-clear__placeholder.icon-switch-transition-leave-from {
        transform: scale(1) translateX(-50%) translateY(-50%);
        left: 50%;
        top: 50%;
        opacity: 1;
      }

      .n-base-clear>.n-base-clear__clear.icon-switch-transition-enter-active,
      .n-base-clear>.n-base-clear__placeholder.icon-switch-transition-enter-active,
      .n-base-clear>.n-base-clear__clear.icon-switch-transition-leave-active,
      .n-base-clear>.n-base-clear__placeholder.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 50%;
        top: 50%;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }
    </style>
    <style cssr-id="n-base-loading">
      @keyframes loading-container-rotate {
        to {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }

      @keyframes loading-layer-rotate {
        12.5% {
          -webkit-transform: rotate(135deg);
          transform: rotate(135deg);
        }

        25% {
          -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
        }

        37.5% {
          -webkit-transform: rotate(405deg);
          transform: rotate(405deg);
        }

        50% {
          -webkit-transform: rotate(540deg);
          transform: rotate(540deg);
        }

        62.5% {
          -webkit-transform: rotate(675deg);
          transform: rotate(675deg);
        }

        75% {
          -webkit-transform: rotate(810deg);
          transform: rotate(810deg);
        }

        87.5% {
          -webkit-transform: rotate(945deg);
          transform: rotate(945deg);
        }

        100% {
          -webkit-transform: rotate(1080deg);
          transform: rotate(1080deg);
        }
      }

      @keyframes loading-left-spin {
        from {
          -webkit-transform: rotate(265deg);
          transform: rotate(265deg);
        }

        50% {
          -webkit-transform: rotate(130deg);
          transform: rotate(130deg);
        }

        to {
          -webkit-transform: rotate(265deg);
          transform: rotate(265deg);
        }
      }

      @keyframes loading-right-spin {
        from {
          -webkit-transform: rotate(-265deg);
          transform: rotate(-265deg);
        }

        50% {
          -webkit-transform: rotate(-130deg);
          transform: rotate(-130deg);
        }

        to {
          -webkit-transform: rotate(-265deg);
          transform: rotate(-265deg);
        }
      }

      .n-base-loading {
        position: relative;
        line-height: 0;
        width: 1em;
        height: 1em;
      }

      .n-base-loading .n-base-loading__transition-wrapper {
        position: absolute;
        width: 100%;
        height: 100%;
      }

      .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-enter-from,
      .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-leave-to {
        transform: scale(0.75);
        left: 0;
        top: 0;
        opacity: 0;
      }

      .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-enter-to,
      .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-leave-from {
        transform: scale(1);
        left: 0;
        top: 0;
        opacity: 1;
      }

      .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-enter-active,
      .n-base-loading .n-base-loading__transition-wrapper.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 0;
        top: 0;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-base-loading .n-base-loading__container {
        display: inline-flex;
        position: relative;
        direction: ltr;
        line-height: 0;
        animation: loading-container-rotate 1568.2352941176ms linear infinite;
        font-size: 0;
        letter-spacing: 0;
        white-space: nowrap;
        opacity: 1;
        width: 100%;
        height: 100%;
      }

      .n-base-loading .n-base-loading__container .n-base-loading__svg {
        stroke: var(--n-text-color);
        fill: transparent;
        position: absolute;
        height: 100%;
        overflow: hidden;
      }

      .n-base-loading .n-base-loading__container .n-base-loading__container-layer {
        position: absolute;
        width: 100%;
        height: 100%;
        animation: loading-layer-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
      }

      .n-base-loading .n-base-loading__container .n-base-loading__container-layer .n-base-loading__container-layer-left {
        display: inline-flex;
        position: relative;
        width: 50%;
        height: 100%;
        overflow: hidden;
      }

      .n-base-loading .n-base-loading__container .n-base-loading__container-layer .n-base-loading__container-layer-left .n-base-loading__svg {
        animation: loading-left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        width: 200%;
      }

      .n-base-loading .n-base-loading__container .n-base-loading__container-layer .n-base-loading__container-layer-patch {
        position: absolute;
        top: 0;
        left: 47.5%;
        box-sizing: border-box;
        width: 5%;
        height: 100%;
        overflow: hidden;
      }

      .n-base-loading .n-base-loading__container .n-base-loading__container-layer .n-base-loading__container-layer-patch .n-base-loading__svg {
        left: -900%;
        width: 2000%;
        transform: rotate(180deg);
      }

      .n-base-loading .n-base-loading__container .n-base-loading__container-layer .n-base-loading__container-layer-right {
        display: inline-flex;
        position: relative;
        width: 50%;
        height: 100%;
        overflow: hidden;
      }

      .n-base-loading .n-base-loading__container .n-base-loading__container-layer .n-base-loading__container-layer-right .n-base-loading__svg {
        animation: loading-right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;
        left: -100%;
        width: 200%;
      }

      .n-base-loading .n-base-loading__placeholder {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translateX(-50%) translateY(-50%);
      }

      .n-base-loading .n-base-loading__placeholder.icon-switch-transition-enter-from,
      .n-base-loading .n-base-loading__placeholder.icon-switch-transition-leave-to {
        transform: translateX(-50%) translateY(-50%) scale(0.75);
        left: 50%;
        top: 50%;
        opacity: 0;
      }

      .n-base-loading .n-base-loading__placeholder.icon-switch-transition-enter-to,
      .n-base-loading .n-base-loading__placeholder.icon-switch-transition-leave-from {
        transform: scale(1) translateX(-50%) translateY(-50%);
        left: 50%;
        top: 50%;
        opacity: 1;
      }

      .n-base-loading .n-base-loading__placeholder.icon-switch-transition-enter-active,
      .n-base-loading .n-base-loading__placeholder.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 50%;
        top: 50%;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }
    </style>
    <style cssr-id="n-internal-selection">
      .n-base-selection {
        position: relative;
        z-index: auto;
        box-shadow: none;
        width: 100%;
        max-width: 100%;
        display: inline-block;
        vertical-align: bottom;
        border-radius: var(--n-border-radius);
        min-height: var(--n-height);
        line-height: 1.5;
        font-size: var(--n-font-size);
      }

      .n-base-selection .n-base-loading {
        color: var(--n-loading-color);
      }

      .n-base-selection .n-base-selection-tags {
        min-height: var(--n-height);
      }

      .n-base-selection .n-base-selection__border,
      .n-base-selection .n-base-selection__state-border {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        pointer-events: none;
        border: var(--n-border);
        border-radius: inherit;
        transition:
          box-shadow .3s var(--n-bezier),
          border-color .3s var(--n-bezier);
      }

      .n-base-selection .n-base-selection__state-border {
        z-index: 1;
        border-color: #0000;
      }

      .n-base-selection .n-base-suffix {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        right: 10px;
      }

      .n-base-selection .n-base-suffix .n-base-suffix__arrow {
        font-size: var(--n-arrow-size);
        color: var(--n-arrow-color);
        transition: color .3s var(--n-bezier);
      }

      .n-base-selection .n-base-selection-overlay {
        display: flex;
        align-items: center;
        white-space: nowrap;
        pointer-events: none;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: var(--n-padding-single);
        transition: color .3s var(--n-bezier);
      }

      .n-base-selection .n-base-selection-overlay .n-base-selection-overlay__wrapper {
        flex-basis: 0;
        flex-grow: 1;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .n-base-selection .n-base-selection-placeholder {
        color: var(--n-placeholder-color);
      }

      .n-base-selection .n-base-selection-tags {
        cursor: pointer;
        outline: none;
        box-sizing: border-box;
        position: relative;
        z-index: auto;
        display: flex;
        padding: var(--n-padding-multiple);
        flex-wrap: wrap;
        align-items: center;
        width: 100%;
        vertical-align: bottom;
        background-color: var(--n-color);
        border-radius: inherit;
        transition:
          color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
      }

      .n-base-selection .n-base-selection-label {
        height: var(--n-height);
        display: inline-flex;
        width: 100%;
        vertical-align: bottom;
        cursor: pointer;
        outline: none;
        z-index: auto;
        box-sizing: border-box;
        position: relative;
        transition:
          color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
        border-radius: inherit;
        background-color: var(--n-color);
        align-items: center;
      }

      .n-base-selection .n-base-selection-label .n-base-selection-input {
        line-height: inherit;
        outline: none;
        cursor: pointer;
        box-sizing: border-box;
        border: none;
        width: 100%;
        padding: var(--n-padding-single);
        background-color: #0000;
        color: var(--n-text-color);
        transition: color .3s var(--n-bezier);
        caret-color: var(--n-caret-color);
      }

      .n-base-selection .n-base-selection-label .n-base-selection-input .n-base-selection-input__content {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
      }

      .n-base-selection .n-base-selection-label .n-base-selection-label__render-label {
        color: var(--n-text-color);
      }

      .n-base-selection:not(.n-base-selection--disabled):hover .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-hover);
        border: var(--n-border-hover);
      }

      .n-base-selection:not(.n-base-selection--disabled).n-base-selection--focus .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-focus);
        border: var(--n-border-focus);
      }

      .n-base-selection:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-active);
        border: var(--n-border-active);
      }

      .n-base-selection:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection-label {
        background-color: var(--n-color-active);
      }

      .n-base-selection:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection-tags {
        background-color: var(--n-color-active);
      }

      .n-base-selection.n-base-selection--disabled {
        cursor: not-allowed;
      }

      .n-base-selection.n-base-selection--disabled .n-base-selection__arrow {
        color: var(--n-arrow-color-disabled);
      }

      .n-base-selection.n-base-selection--disabled .n-base-selection-label {
        cursor: not-allowed;
        background-color: var(--n-color-disabled);
      }

      .n-base-selection.n-base-selection--disabled .n-base-selection-label .n-base-selection-input {
        cursor: not-allowed;
        color: var(--n-text-color-disabled);
      }

      .n-base-selection.n-base-selection--disabled .n-base-selection-label .n-base-selection-label__render-label {
        color: var(--n-text-color-disabled);
      }

      .n-base-selection.n-base-selection--disabled .n-base-selection-tags {
        cursor: not-allowed;
        background-color: var(--n-color-disabled);
      }

      .n-base-selection.n-base-selection--disabled .n-base-selection-placeholder {
        cursor: not-allowed;
        color: var(--n-placeholder-color-disabled);
      }

      .n-base-selection .n-base-selection-input-tag {
        height: calc(var(--n-height) - 6px);
        line-height: calc(var(--n-height) - 6px);
        outline: none;
        display: none;
        position: relative;
        margin-bottom: 3px;
        max-width: 100%;
        vertical-align: bottom;
      }

      .n-base-selection .n-base-selection-input-tag .n-base-selection-input-tag__input {
        min-width: 1px;
        padding: 0;
        background-color: #0000;
        outline: none;
        border: none;
        max-width: 100%;
        overflow: hidden;
        width: 1em;
        line-height: inherit;
        cursor: pointer;
        color: var(--n-text-color);
        caret-color: var(--n-caret-color);
      }

      .n-base-selection .n-base-selection-input-tag .n-base-selection-input-tag__mirror {
        position: absolute;
        left: 0;
        top: 0;
        white-space: pre;
        visibility: hidden;
        user-select: none;
        opacity: 0;
      }

      .n-base-selection.n-base-selection--warning-status .n-base-selection__state-border {
        border: var(--n-border-warning);
      }

      .n-base-selection.n-base-selection--warning-status:not(.n-base-selection--disabled):hover .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-hover-warning);
        border: var(--n-border-hover-warning);
      }

      .n-base-selection.n-base-selection--warning-status:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-active-warning);
        border: var(--n-border-active-warning);
      }

      .n-base-selection.n-base-selection--warning-status:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection-label {
        background-color: var(--n-color-active-warning);
      }

      .n-base-selection.n-base-selection--warning-status:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection-tags {
        background-color: var(--n-color-active-warning);
      }

      .n-base-selection.n-base-selection--warning-status:not(.n-base-selection--disabled).n-base-selection--focus .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-focus-warning);
        border: var(--n-border-focus-warning);
      }

      .n-base-selection.n-base-selection--error-status .n-base-selection__state-border {
        border: var(--n-border-error);
      }

      .n-base-selection.n-base-selection--error-status:not(.n-base-selection--disabled):hover .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-hover-error);
        border: var(--n-border-hover-error);
      }

      .n-base-selection.n-base-selection--error-status:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-active-error);
        border: var(--n-border-active-error);
      }

      .n-base-selection.n-base-selection--error-status:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection-label {
        background-color: var(--n-color-active-error);
      }

      .n-base-selection.n-base-selection--error-status:not(.n-base-selection--disabled).n-base-selection--active .n-base-selection-tags {
        background-color: var(--n-color-active-error);
      }

      .n-base-selection.n-base-selection--error-status:not(.n-base-selection--disabled).n-base-selection--focus .n-base-selection__state-border {
        box-shadow: var(--n-box-shadow-focus-error);
        border: var(--n-border-focus-error);
      }

      .n-base-selection-popover {
        margin-bottom: -3px;
        display: flex;
        flex-wrap: wrap;
      }

      .n-base-selection-tag-wrapper {
        max-width: 100%;
        display: inline-flex;
        padding: 0 7px 3px 0;
      }

      .n-base-selection-tag-wrapper:last-child {
        padding-right: 0;
      }

      .n-base-selection-tag-wrapper .n-tag {
        font-size: 14px;
        max-width: 100%;
      }

      .n-base-selection-tag-wrapper .n-tag .n-tag__content {
        line-height: 1.25;
        text-overflow: ellipsis;
        overflow: hidden;
      }
    </style>
    <style cssr-id="n-select">
      .n-select {
        z-index: auto;
        outline: none;
        width: 100%;
        position: relative;
      }

      .n-select-menu {
        margin: 4px 0;
        box-shadow: var(--n-menu-box-shadow);
      }

      .n-select-menu.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-select-menu.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-select-menu.fade-in-scale-up-transition-enter-from,
      .n-select-menu.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(.9);
      }

      .n-select-menu.fade-in-scale-up-transition-leave-from,
      .n-select-menu.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }
    </style>
    <style cssr-id="n-checkbox">
      .n-checkbox {
        line-height: var(--n-label-line-height);
        font-size: var(--n-font-size);
        outline: none;
        cursor: pointer;
        display: inline-flex;
        flex-wrap: nowrap;
        align-items: flex-start;
        word-break: break-word;
        --n-merged-color-table: var(--n-color-table);
      }

      .n-checkbox:hover .n-checkbox-box .n-checkbox-box__border {
        border: var(--n-border-checked);
      }

      .n-checkbox:focus:not(:active) .n-checkbox-box .n-checkbox-box__border {
        border: var(--n-border-focus);
        box-shadow: var(--n-box-shadow-focus);
      }

      .n-checkbox.n-checkbox--inside-table .n-checkbox-box {
        background-color: var(--n-merged-color-table);
      }

      .n-checkbox.n-checkbox--checked .n-checkbox-box {
        background-color: var(--n-color-checked);
      }

      .n-checkbox.n-checkbox--checked .n-checkbox-box .n-checkbox-icon .check-icon {
        opacity: 1;
        transform: scale(1);
      }

      .n-checkbox.n-checkbox--indeterminate .n-checkbox-box .n-checkbox-icon .check-icon {
        opacity: 0;
        transform: scale(.5);
      }

      .n-checkbox.n-checkbox--indeterminate .n-checkbox-box .n-checkbox-icon .line-icon {
        opacity: 1;
        transform: scale(1);
      }

      .n-checkbox.n-checkbox--checked:focus:not(:active) .n-checkbox-box .n-checkbox-box__border,
      .n-checkbox.n-checkbox--indeterminate:focus:not(:active) .n-checkbox-box .n-checkbox-box__border {
        border: var(--n-border-checked);
        box-shadow: var(--n-box-shadow-focus);
      }

      .n-checkbox.n-checkbox--checked .n-checkbox-box,
      .n-checkbox.n-checkbox--indeterminate .n-checkbox-box {
        background-color: var(--n-color-checked);
        border-left: 0;
        border-top: 0;
      }

      .n-checkbox.n-checkbox--checked .n-checkbox-box .n-checkbox-box__border,
      .n-checkbox.n-checkbox--indeterminate .n-checkbox-box .n-checkbox-box__border {
        border: var(--n-border-checked);
      }

      .n-checkbox.n-checkbox--disabled {
        cursor: not-allowed;
      }

      .n-checkbox.n-checkbox--disabled.n-checkbox--checked .n-checkbox-box {
        background-color: var(--n-color-disabled-checked);
      }

      .n-checkbox.n-checkbox--disabled.n-checkbox--checked .n-checkbox-box .n-checkbox-box__border {
        border: var(--n-border-disabled-checked);
      }

      .n-checkbox.n-checkbox--disabled.n-checkbox--checked .n-checkbox-box .n-checkbox-icon .check-icon,
      .n-checkbox.n-checkbox--disabled.n-checkbox--checked .n-checkbox-box .n-checkbox-icon .line-icon {
        fill: var(--n-check-mark-color-disabled-checked);
      }

      .n-checkbox.n-checkbox--disabled .n-checkbox-box {
        background-color: var(--n-color-disabled);
      }

      .n-checkbox.n-checkbox--disabled .n-checkbox-box .n-checkbox-box__border {
        border: var(--n-border-disabled);
      }

      .n-checkbox.n-checkbox--disabled .n-checkbox-box .n-checkbox-icon .check-icon,
      .n-checkbox.n-checkbox--disabled .n-checkbox-box .n-checkbox-icon .line-icon {
        fill: var(--n-check-mark-color-disabled);
      }

      .n-checkbox.n-checkbox--disabled .n-checkbox__label {
        color: var(--n-text-color-disabled);
      }

      .n-checkbox .n-checkbox-box-wrapper {
        position: relative;
        width: var(--n-size);
        flex-shrink: 0;
        flex-grow: 0;
      }

      .n-checkbox .n-checkbox-box {
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        height: var(--n-size);
        width: var(--n-size);
        display: inline-block;
        box-sizing: border-box;
        border-radius: var(--n-border-radius);
        background-color: var(--n-color);
        transition: background-color 0.3s var(--n-bezier);
      }

      .n-checkbox .n-checkbox-box .n-checkbox-box__border {
        transition:
          border-color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier);
        border-radius: inherit;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        border: var(--n-border);
      }

      .n-checkbox .n-checkbox-box .n-checkbox-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        left: 1px;
        right: 1px;
        top: 1px;
        bottom: 1px;
      }

      .n-checkbox .n-checkbox-box .n-checkbox-icon .check-icon,
      .n-checkbox .n-checkbox-box .n-checkbox-icon .line-icon {
        width: 100%;
        fill: var(--n-check-mark-color);
        opacity: 0;
        transform: scale(0.5);
        transform-origin: center;
        transition:
          fill 0.3s var(--n-bezier),
          transform 0.3s var(--n-bezier),
          opacity 0.3s var(--n-bezier),
          border-color 0.3s var(--n-bezier);
      }

      .n-checkbox .n-checkbox-box .n-checkbox-icon.icon-switch-transition-enter-from,
      .n-checkbox .n-checkbox-box .n-checkbox-icon.icon-switch-transition-leave-to {
        transform: scale(0.75);
        left: 1px;
        top: 1px;
        opacity: 0;
      }

      .n-checkbox .n-checkbox-box .n-checkbox-icon.icon-switch-transition-enter-to,
      .n-checkbox .n-checkbox-box .n-checkbox-icon.icon-switch-transition-leave-from {
        transform: scale(1);
        left: 1px;
        top: 1px;
        opacity: 1;
      }

      .n-checkbox .n-checkbox-box .n-checkbox-icon.icon-switch-transition-enter-active,
      .n-checkbox .n-checkbox-box .n-checkbox-icon.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 1px;
        top: 1px;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-checkbox .n-checkbox__label {
        color: var(--n-text-color);
        transition: color .3s var(--n-bezier);
        user-select: none;
        padding: var(--n-label-padding);
      }

      .n-checkbox .n-checkbox__label:empty {
        display: none;
      }

      .n-modal .n-checkbox,
      .n-drawer .n-checkbox {
        --n-merged-color-table: var(--n-color-table-modal);
      }

      .n-popover:not(.n-tooltip) .n-checkbox {
        --n-merged-color-table: var(--n-color-table-popover);
      }
    </style>
    <style cssr-id="n-back-top">
      .n-back-top {
        position: fixed;
        right: 40px;
        bottom: 40px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--n-text-color);
        transition:
          color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
        border-radius: var(--n-border-radius);
        height: var(--n-height);
        min-width: var(--n-width);
        box-shadow: var(--n-box-shadow);
        background-color: var(--n-color);
      }

      .n-back-top.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-back-top.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-back-top.fade-in-scale-up-transition-enter-from,
      .n-back-top.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(.9);
      }

      .n-back-top.fade-in-scale-up-transition-leave-from,
      .n-back-top.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }

      .n-back-top.n-back-top--transition-disabled {
        transition: none !important;
      }

      .n-back-top .n-base-icon {
        font-size: var(--n-icon-size);
        color: var(--n-icon-color);
        transition: color .3s var(--n-bezier);
      }

      .n-back-top svg {
        pointer-events: none;
      }

      .n-back-top:hover {
        box-shadow: var(--n-box-shadow-hover);
      }

      .n-back-top:hover .n-base-icon {
        color: var(--n-icon-color-hover);
      }

      .n-back-top:active {
        box-shadow: var(--n-box-shadow-pressed);
      }

      .n-back-top:active .n-base-icon {
        color: var(--n-icon-color-pressed);
      }
    </style>
    <style cssr-id="n-switch">
      .n-switch {
        height: var(--n-height);
        min-width: var(--n-width);
        vertical-align: middle;
        user-select: none;
        display: inline-flex;
        outline: none;
        justify-content: center;
        align-items: center;
      }

      .n-switch .n-switch__children-placeholder {
        height: var(--n-rail-height);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        pointer-events: none;
        visibility: hidden;
      }

      .n-switch .n-switch__rail-placeholder {
        display: flex;
        flex-wrap: none;
      }

      .n-switch .n-switch__button-placeholder {
        width: calc(1.75 * var(--n-rail-height));
        height: var(--n-rail-height);
      }

      .n-switch .n-base-loading {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        font-size: calc(var(--n-button-width) - 4px);
        color: var(--n-loading-color);
        transition: color .3s var(--n-bezier);
      }

      .n-switch .n-base-loading.icon-switch-transition-enter-from,
      .n-switch .n-base-loading.icon-switch-transition-leave-to {
        transform: translateX(-50%) translateY(-50%) scale(0.75);
        left: 0;
        top: 0;
        opacity: 0;
      }

      .n-switch .n-base-loading.icon-switch-transition-enter-to,
      .n-switch .n-base-loading.icon-switch-transition-leave-from {
        transform: scale(1) translateX(-50%) translateY(-50%);
        left: 0;
        top: 0;
        opacity: 1;
      }

      .n-switch .n-base-loading.icon-switch-transition-enter-active,
      .n-switch .n-base-loading.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 0;
        top: 0;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-switch .n-switch__checked,
      .n-switch .n-switch__unchecked {
        transition: color .3s var(--n-bezier);
        color: var(--n-text-color);
        box-sizing: border-box;
        position: absolute;
        white-space: nowrap;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        line-height: 1;
      }

      .n-switch .n-switch__checked {
        right: 0;
        padding-right: calc(1.25 * var(--n-rail-height) - var(--n-offset));
      }

      .n-switch .n-switch__unchecked {
        left: 0;
        justify-content: flex-end;
        padding-left: calc(1.25 * var(--n-rail-height) - var(--n-offset));
      }

      .n-switch:focus .n-switch__rail {
        box-shadow: var(--n-box-shadow-focus);
      }

      .n-switch.n-switch--round .n-switch__rail {
        border-radius: calc(var(--n-rail-height) / 2);
      }

      .n-switch.n-switch--round .n-switch__rail .n-switch__button {
        border-radius: calc(var(--n-button-height) / 2);
      }

      .n-switch:not(.n-switch--disabled):not(.n-switch--icon).n-switch--pressed .n-switch__rail .n-switch__button {
        max-width: var(--n-button-width-pressed);
      }

      .n-switch:not(.n-switch--disabled):not(.n-switch--icon) .n-switch__rail:active .n-switch__button {
        max-width: var(--n-button-width-pressed);
      }

      .n-switch:not(.n-switch--disabled):not(.n-switch--icon).n-switch--active.n-switch--pressed .n-switch__rail .n-switch__button {
        left: calc(100% - var(--n-offset) - var(--n-button-width-pressed));
      }

      .n-switch:not(.n-switch--disabled):not(.n-switch--icon).n-switch--active .n-switch__rail:active .n-switch__button {
        left: calc(100% - var(--n-offset) - var(--n-button-width-pressed));
      }

      .n-switch.n-switch--active .n-switch__rail .n-switch__button {
        left: calc(100% - (var(--n-rail-height) + var(--n-button-width)) / 2);
      }

      .n-switch .n-switch__rail {
        overflow: hidden;
        height: var(--n-rail-height);
        min-width: var(--n-rail-width);
        border-radius: var(--n-rail-border-radius);
        cursor: pointer;
        position: relative;
        transition:
          background .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier);
        background-color: var(--n-rail-color);
      }

      .n-switch .n-switch__rail .n-switch__button-icon {
        color: var(--n-icon-color);
        transition: color .3s var(--n-bezier);
        font-size: calc(var(--n-button-height) - 4px);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        line-height: 1;
      }

      .n-switch .n-switch__rail .n-switch__button-icon.icon-switch-transition-enter-from,
      .n-switch .n-switch__rail .n-switch__button-icon.icon-switch-transition-leave-to {
        transform: scale(0.75);
        left: 0;
        top: 0;
        opacity: 0;
      }

      .n-switch .n-switch__rail .n-switch__button-icon.icon-switch-transition-enter-to,
      .n-switch .n-switch__rail .n-switch__button-icon.icon-switch-transition-leave-from {
        transform: scale(1);
        left: 0;
        top: 0;
        opacity: 1;
      }

      .n-switch .n-switch__rail .n-switch__button-icon.icon-switch-transition-enter-active,
      .n-switch .n-switch__rail .n-switch__button-icon.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 0;
        top: 0;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-switch .n-switch__rail .n-switch__button {
        align-items: center;
        top: var(--n-offset);
        left: var(--n-offset);
        height: var(--n-button-width);
        width: var(--n-button-width-pressed);
        max-width: var(--n-button-width);
        border-radius: var(--n-button-border-radius);
        background-color: var(--n-button-color);
        box-shadow: var(--n-button-box-shadow);
        box-sizing: border-box;
        cursor: inherit;
        content: "";
        position: absolute;
        transition:
          background-color .3s var(--n-bezier),
          left .3s var(--n-bezier),
          opacity .3s var(--n-bezier),
          max-width .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier);
      }

      .n-switch.n-switch--active .n-switch__rail {
        background-color: var(--n-rail-color-active);
      }

      .n-switch.n-switch--disabled .n-switch__rail {
        cursor: not-allowed;
        opacity: .5;
      }

      .n-switch.n-switch--loading .n-switch__rail {
        pointer-events: none;
      }
    </style>
    <style cssr-id="n-base-icon">
      .n-base-icon {
        height: 1em;
        width: 1em;
        line-height: 1em;
        text-align: center;
        display: inline-block;
        position: relative;
        fill: currentColor;
        transform: translateZ(0);
      }

      .n-base-icon svg {
        height: 1em;
        width: 1em;
      }
    </style>
    <style cssr-id="n-time-picker">
      .n-time-picker {
        z-index: auto;
        position: relative;
      }

      .n-time-picker .n-time-picker-icon {
        color: var(--n-icon-color);
        transition: color .3s var(--n-bezier);
      }

      .n-time-picker.n-time-picker--disabled .n-time-picker-icon {
        color: var(--n-icon-color-disabled);
      }

      .n-time-picker-panel {
        transition:
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
        outline: none;
        font-size: var(--n-item-font-size);
        border-radius: var(--n-border-radius);
        margin: 4px 0;
        min-width: 104px;
        overflow: hidden;
        background-color: var(--n-panel-color);
        box-shadow: var(--n-panel-box-shadow);
      }

      .n-time-picker-panel.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-time-picker-panel.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-time-picker-panel.fade-in-scale-up-transition-enter-from,
      .n-time-picker-panel.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(.9);
      }

      .n-time-picker-panel.fade-in-scale-up-transition-leave-from,
      .n-time-picker-panel.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }

      .n-time-picker-panel .n-time-picker-actions {
        padding: var(--n-panel-action-padding);
        align-items: center;
        display: flex;
        justify-content: space-evenly;
      }

      .n-time-picker-panel .n-time-picker-cols {
        height: calc(var(--n-item-height) * 6);
        display: flex;
        position: relative;
        transition: border-color .3s var(--n-bezier);
        border-bottom: 1px solid var(--n-panel-divider-color);
      }

      .n-time-picker-panel .n-time-picker-col {
        flex-grow: 1;
        min-width: var(--n-item-width);
        height: calc(var(--n-item-height) * 6);
        flex-direction: column;
        transition: box-shadow .3s var(--n-bezier);
      }

      .n-time-picker-panel .n-time-picker-col.n-time-picker-col--transition-disabled .n-time-picker-col__item {
        transition: none;
      }

      .n-time-picker-panel .n-time-picker-col.n-time-picker-col--transition-disabled .n-time-picker-col__item::before {
        transition: none;
      }

      .n-time-picker-panel .n-time-picker-col .n-time-picker-col__padding {
        height: calc(var(--n-item-height) * 5);
      }

      .n-time-picker-panel .n-time-picker-col:first-child {
        min-width: calc(var(--n-item-width) + 4px);
      }

      .n-time-picker-panel .n-time-picker-col:first-child .n-time-picker-col__item::before {
        left: 4px;
      }

      .n-time-picker-panel .n-time-picker-col .n-time-picker-col__item {
        cursor: pointer;
        height: var(--n-item-height);
        display: flex;
        align-items: center;
        justify-content: center;
        transition:
          color .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          opacity .3s var(--n-bezier),
          text-decoration-color .3s var(--n-bezier);
        background: #0000;
        text-decoration-color: #0000;
        color: var(--n-item-text-color);
        z-index: 0;
        box-sizing: border-box;
        padding-top: 4px;
        position: relative;
      }

      .n-time-picker-panel .n-time-picker-col .n-time-picker-col__item::before {
        content: "";
        transition: background-color .3s var(--n-bezier);
        z-index: -1;
        position: absolute;
        left: 0;
        right: 4px;
        top: 4px;
        bottom: 0;
        border-radius: var(--n-item-border-radius);
      }

      .n-time-picker-panel .n-time-picker-col .n-time-picker-col__item:not(.n-time-picker-col__item--disabled):hover::before {
        background-color: var(--n-item-color-hover);
      }

      .n-time-picker-panel .n-time-picker-col .n-time-picker-col__item.n-time-picker-col__item--active {
        color: var(--n-item-text-color-active);
      }

      .n-time-picker-panel .n-time-picker-col .n-time-picker-col__item.n-time-picker-col__item--active::before {
        background-color: var(--n-item-color-hover);
      }

      .n-time-picker-panel .n-time-picker-col .n-time-picker-col__item.n-time-picker-col__item--disabled {
        opacity: var(--n-item-opacity-disabled);
        cursor: not-allowed;
      }

      .n-time-picker-panel .n-time-picker-col.n-time-picker-col--invalid .n-time-picker-col__item.n-time-picker-col__item--active {
        text-decoration: line-through;
        text-decoration-color: var(--n-item-text-color-active);
      }
    </style>
    <style cssr-id="n-slider">
      .n-slider {
        display: block;
        padding: calc((var(--n-handle-size) - var(--n-rail-height)) / 2) 0;
        position: relative;
        z-index: 0;
        width: 100%;
        cursor: pointer;
        user-select: none;
      }

      .n-slider.n-slider--reverse .n-slider-handles .n-slider-handle {
        transform: translate(50%, -50%);
      }

      .n-slider.n-slider--reverse .n-slider-dots .n-slider-dot {
        transform: translateX(50%, -50%);
      }

      .n-slider.n-slider--reverse.n-slider--vertical .n-slider-handles .n-slider-handle {
        transform: translate(-50%, -50%);
      }

      .n-slider.n-slider--reverse.n-slider--vertical .n-slider-marks .n-slider-mark {
        transform: translateY(calc(-50% + var(--n-dot-height) / 2));
      }

      .n-slider.n-slider--reverse.n-slider--vertical .n-slider-dots .n-slider-dot {
        transform: translateX(-50%) translateY(0);
      }

      .n-slider.n-slider--vertical {
        padding: 0 calc((var(--n-handle-size) - var(--n-rail-height)) / 2);
        width: var(--n-rail-width-vertical);
        height: 100%;
      }

      .n-slider.n-slider--vertical .n-slider-handles {
        top: calc(var(--n-handle-size) / 2);
        right: 0;
        bottom: calc(var(--n-handle-size) / 2);
        left: 0;
      }

      .n-slider.n-slider--vertical .n-slider-handles .n-slider-handle {
        top: unset;
        left: 50%;
        transform: translate(-50%, 50%);
      }

      .n-slider.n-slider--vertical .n-slider-rail {
        height: 100%;
      }

      .n-slider.n-slider--vertical .n-slider-rail .n-slider-rail__fill {
        top: unset;
        right: 0;
        bottom: unset;
        left: 0;
      }

      .n-slider.n-slider--vertical.n-slider--with-mark {
        width: var(--n-rail-width-vertical);
        margin: 0 32px 0 8px;
      }

      .n-slider.n-slider--vertical .n-slider-marks {
        top: calc(var(--n-handle-size) / 2);
        right: unset;
        bottom: calc(var(--n-handle-size) / 2);
        left: 22px;
      }

      .n-slider.n-slider--vertical .n-slider-marks .n-slider-mark {
        transform: translateY(50%);
        white-space: nowrap;
      }

      .n-slider.n-slider--vertical .n-slider-dots {
        top: calc(var(--n-handle-size) / 2);
        right: unset;
        bottom: calc(var(--n-handle-size) / 2);
        left: 50%;
      }

      .n-slider.n-slider--vertical .n-slider-dots .n-slider-dot {
        transform: translateX(-50%) translateY(50%);
      }

      .n-slider.n-slider--disabled {
        cursor: not-allowed;
        opacity: var(--n-opacity-disabled);
      }

      .n-slider.n-slider--disabled .n-slider-handle {
        cursor: not-allowed;
      }

      .n-slider.n-slider--with-mark {
        width: 100%;
        margin: 8px 0 32px 0;
      }

      .n-slider:hover .n-slider-rail {
        background-color: var(--n-rail-color-hover);
      }

      .n-slider:hover .n-slider-rail .n-slider-rail__fill {
        background-color: var(--n-fill-color-hover);
      }

      .n-slider:hover .n-slider-handle {
        box-shadow: var(--n-handle-box-shadow-hover);
      }

      .n-slider.n-slider--active .n-slider-rail {
        background-color: var(--n-rail-color-hover);
      }

      .n-slider.n-slider--active .n-slider-rail .n-slider-rail__fill {
        background-color: var(--n-fill-color-hover);
      }

      .n-slider.n-slider--active .n-slider-handle {
        box-shadow: var(--n-handle-box-shadow-hover);
      }

      .n-slider .n-slider-marks {
        position: absolute;
        top: 18px;
        left: calc(var(--n-handle-size) / 2);
        right: calc(var(--n-handle-size) / 2);
      }

      .n-slider .n-slider-marks .n-slider-mark {
        position: absolute;
        transform: translateX(-50%);
      }

      .n-slider .n-slider-rail {
        width: 100%;
        position: relative;
        height: var(--n-rail-height);
        background-color: var(--n-rail-color);
        transition: background-color .3s var(--n-bezier);
        border-radius: calc(var(--n-rail-height) / 2);
      }

      .n-slider .n-slider-rail .n-slider-rail__fill {
        position: absolute;
        top: 0;
        bottom: 0;
        border-radius: calc(var(--n-rail-height) / 2);
        transition: background-color .3s var(--n-bezier);
        background-color: var(--n-fill-color);
      }

      .n-slider .n-slider-handles {
        position: absolute;
        top: 0;
        right: calc(var(--n-handle-size) / 2);
        bottom: 0;
        left: calc(var(--n-handle-size) / 2);
      }

      .n-slider .n-slider-handles .n-slider-handle {
        outline: none;
        height: var(--n-handle-size);
        width: var(--n-handle-size);
        border-radius: 50%;
        transition: box-shadow .2s var(--n-bezier), background-color .3s var(--n-bezier);
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
        cursor: pointer;
        background-color: var(--n-handle-color);
        box-shadow: var(--n-handle-box-shadow);
      }

      .n-slider .n-slider-handles .n-slider-handle:hover {
        box-shadow: var(--n-handle-box-shadow-hover);
      }

      .n-slider .n-slider-handles .n-slider-handle:hover:focus {
        box-shadow: var(--n-handle-box-shadow-active);
      }

      .n-slider .n-slider-handles .n-slider-handle:focus {
        box-shadow: var(--n-handle-box-shadow-focus);
      }

      .n-slider .n-slider-dots {
        position: absolute;
        top: 50%;
        left: calc(var(--n-handle-size) / 2);
        right: calc(var(--n-handle-size) / 2);
      }

      .n-slider .n-slider-dots.n-slider-dots--transition-disabled .n-slider-dot {
        transition: none;
      }

      .n-slider .n-slider-dots .n-slider-dot {
        transition:
          border-color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
        position: absolute;
        transform: translate(-50%, -50%);
        height: var(--n-dot-height);
        width: var(--n-dot-width);
        border-radius: var(--n-dot-border-radius);
        overflow: hidden;
        box-sizing: border-box;
        border: var(--n-dot-border);
        background-color: var(--n-dot-color);
      }

      .n-slider .n-slider-dots .n-slider-dot.n-slider-dot--active {
        border: var(--n-dot-border-active);
      }

      .n-slider-handle-indicator {
        font-size: var(--n-font-size);
        padding: 6px 10px;
        border-radius: var(--n-indicator-border-radius);
        color: var(--n-indicator-text-color);
        background-color: var(--n-indicator-color);
        box-shadow: var(--n-indicator-box-shadow);
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-enter-from,
      .n-slider-handle-indicator.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(.9);
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-leave-from,
      .n-slider-handle-indicator.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }

      .n-slider-handle-indicator {
        font-size: var(--n-font-size);
        padding: 6px 10px;
        border-radius: var(--n-indicator-border-radius);
        color: var(--n-indicator-text-color);
        background-color: var(--n-indicator-color);
        box-shadow: var(--n-indicator-box-shadow);
      }

      .n-slider-handle-indicator.n-slider-handle-indicator--top {
        margin-bottom: 12px;
      }

      .n-slider-handle-indicator.n-slider-handle-indicator--right {
        margin-left: 12px;
      }

      .n-slider-handle-indicator.n-slider-handle-indicator--bottom {
        margin-top: 12px;
      }

      .n-slider-handle-indicator.n-slider-handle-indicator--left {
        margin-right: 12px;
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-enter-from,
      .n-slider-handle-indicator.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(.9);
      }

      .n-slider-handle-indicator.fade-in-scale-up-transition-leave-from,
      .n-slider-handle-indicator.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }

      .n-modal .n-slider .n-slider-dot,
      .n-drawer .n-slider .n-slider-dot {
        background-color: var(--n-dot-color-modal);
      }

      .n-popover:not(.n-tooltip) .n-slider .n-slider-dot {
        background-color: var(--n-dot-color-popover);
      }
    </style>
    <style cssr-id="n-input-number">
      .n-input-number-suffix {
        display: inline-block;
        margin-right: 10px;
      }
    </style>
    <style cssr-id="n-input">
      .n-input {
        max-width: 100%;
        cursor: text;
        line-height: 1.5;
        z-index: auto;
        outline: none;
        box-sizing: border-box;
        position: relative;
        display: inline-flex;
        border-radius: var(--n-border-radius);
        background-color: var(--n-color);
        transition: background-color .3s var(--n-bezier);
        font-size: var(--n-font-size);
        --n-padding-vertical: calc((var(--n-height) - 1.5 * var(--n-font-size)) / 2);
      }

      .n-input .n-input__input,
      .n-input .n-input__textarea {
        overflow: hidden;
        flex-grow: 1;
        position: relative;
      }

      .n-input .n-input__input-el,
      .n-input .n-input__textarea-el,
      .n-input .n-input__input-mirror,
      .n-input .n-input__textarea-mirror,
      .n-input .n-input__separator,
      .n-input .n-input__placeholder {
        box-sizing: border-box;
        font-size: inherit;
        line-height: 1.5;
        font-family: inherit;
        border: none;
        outline: none;
        background-color: #0000;
        text-align: inherit;
        transition:
          caret-color .3s var(--n-bezier),
          color .3s var(--n-bezier),
          text-decoration-color .3s var(--n-bezier);
      }

      .n-input .n-input__input-el,
      .n-input .n-input__textarea-el {
        -webkit-appearance: none;
        scrollbar-width: none;
        width: 100%;
        min-width: 0;
        text-decoration-color: var(--n-text-decoration-color);
        color: var(--n-text-color);
        caret-color: var(--n-caret-color);
        background-color: transparent;
      }

      .n-input .n-input__input-el::-webkit-scrollbar,
      .n-input .n-input__textarea-el::-webkit-scrollbar,
      .n-input .n-input__input-el::-webkit-scrollbar-track-piece,
      .n-input .n-input__textarea-el::-webkit-scrollbar-track-piece,
      .n-input .n-input__input-el::-webkit-scrollbar-thumb,
      .n-input .n-input__textarea-el::-webkit-scrollbar-thumb {
        width: 0;
        height: 0;
        display: none;
      }

      .n-input .n-input__input-el::placeholder,
      .n-input .n-input__textarea-el::placeholder {
        color: #0000;
      }

      .n-input .n-input__input-el:-webkit-autofill~.n-input__placeholder,
      .n-input .n-input__textarea-el:-webkit-autofill~.n-input__placeholder {
        display: none;
      }

      .n-input.n-input--round:not(.n-input--textarea) {
        border-radius: calc(var(--n-height) / 2);
      }

      .n-input .n-input__placeholder {
        pointer-events: none;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        overflow: hidden;
        color: var(--n-placeholder-color);
      }

      .n-input .n-input__placeholder span {
        width: 100%;
        display: inline-block;
      }

      .n-input.n-input--textarea .n-input__placeholder {
        overflow: visible;
      }

      .n-input:not(.n-input--autosize) {
        width: 100%;
      }

      .n-input.n-input--autosize .n-input__textarea-el,
      .n-input.n-input--autosize .n-input__input-el {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
      }

      .n-input .n-input-wrapper {
        overflow: hidden;
        display: inline-flex;
        flex-grow: 1;
        position: relative;
        padding-left: var(--n-padding-left);
        padding-right: var(--n-padding-right);
      }

      .n-input .n-input__input-mirror {
        padding: 0;
        height: var(--n-height);
        overflow: hidden;
        visibility: hidden;
        position: static;
        white-space: nowrap;
        pointer-events: none;
      }

      .n-input .n-input__input-el {
        padding: 0;
        height: var(--n-height);
        line-height: var(--n-height);
      }

      .n-input .n-input__input-el+.n-input__placeholder {
        display: flex;
        align-items: center;
      }

      .n-input:not(.n-input--textarea) .n-input__placeholder {
        white-space: nowrap;
      }

      .n-input .n-input__eye {
        transition: color .3s var(--n-bezier);
      }

      .n-input.n-input--textarea {
        width: 100%;
      }

      .n-input.n-input--textarea .n-input-word-count {
        position: absolute;
        right: var(--n-padding-right);
        bottom: var(--n-padding-vertical);
      }

      .n-input.n-input--textarea.n-input--resizable .n-input-wrapper {
        resize: vertical;
        min-height: var(--n-height);
      }

      .n-input.n-input--textarea .n-input__textarea {
        position: static;
      }

      .n-input.n-input--textarea .n-input__textarea-el,
      .n-input.n-input--textarea .n-input__textarea-mirror,
      .n-input.n-input--textarea .n-input__placeholder {
        height: 100%;
        left: var(--n-padding-left);
        right: var(--n-padding-right);
        padding-left: 0;
        padding-right: 0;
        padding-top: var(--n-padding-vertical);
        padding-bottom: var(--n-padding-vertical);
        word-break: break-word;
        display: inline-block;
        vertical-align: bottom;
        box-sizing: border-box;
        line-height: var(--n-line-height-textarea);
        margin: 0;
        resize: none;
        white-space: pre-wrap;
      }

      .n-input.n-input--textarea .n-input__textarea-mirror {
        width: 100%;
        pointer-events: none;
        overflow: hidden;
        visibility: hidden;
        position: static;
        white-space: pre-wrap;
        overflow-wrap: break-word;
      }

      .n-input.n-input--pair .n-input__input-el,
      .n-input.n-input--pair .n-input__placeholder {
        text-align: center;
      }

      .n-input.n-input--pair .n-input__separator {
        display: flex;
        align-items: center;
        transition: color .3s var(--n-bezier);
        color: var(--n-text-color);
      }

      .n-input.n-input--pair .n-input__separator .n-icon {
        color: var(--n-icon-color);
      }

      .n-input.n-input--pair .n-input__separator .n-base-icon {
        color: var(--n-icon-color);
      }

      .n-input.n-input--disabled {
        cursor: not-allowed;
        background-color: var(--n-color-disabled);
      }

      .n-input.n-input--disabled .n-input__border {
        border: var(--n-border-disabled);
      }

      .n-input.n-input--disabled .n-input__input-el,
      .n-input.n-input--disabled .n-input__textarea-el {
        cursor: not-allowed;
        color: var(--n-text-color-disabled);
        text-decoration-color: var(--n-text-color-disabled);
      }

      .n-input.n-input--disabled .n-input__placeholder {
        color: var(--n-placeholder-color-disabled);
      }

      .n-input.n-input--disabled .n-input__separator {
        color: var(--n-text-color-disabled);
      }

      .n-input.n-input--disabled .n-input__separator .n-icon {
        color: var(--n-icon-color-disabled);
      }

      .n-input.n-input--disabled .n-input__separator .n-base-icon {
        color: var(--n-icon-color-disabled);
      }

      .n-input.n-input--disabled .n-input__suffix,
      .n-input.n-input--disabled .n-input__prefix {
        color: var(--n-text-color-disabled);
      }

      .n-input.n-input--disabled .n-input__suffix .n-icon,
      .n-input.n-input--disabled .n-input__prefix .n-icon {
        color: var(--n-icon-color-disabled);
      }

      .n-input.n-input--disabled .n-input__suffix .n-internal-icon,
      .n-input.n-input--disabled .n-input__prefix .n-internal-icon {
        color: var(--n-icon-color-disabled);
      }

      .n-input:not(.n-input--disabled) .n-input__eye {
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--n-icon-color);
        cursor: pointer;
      }

      .n-input:not(.n-input--disabled) .n-input__eye:hover {
        color: var(--n-icon-color-hover);
      }

      .n-input:not(.n-input--disabled) .n-input__eye:active {
        color: var(--n-icon-color-pressed);
      }

      .n-input:not(.n-input--disabled) .n-input__eye .n-icon:hover {
        color: var(--n-icon-color-hover);
      }

      .n-input:not(.n-input--disabled) .n-input__eye .n-icon:active {
        color: var(--n-icon-color-pressed);
      }

      .n-input:not(.n-input--disabled):hover .n-input__state-border {
        border: var(--n-border-hover);
      }

      .n-input:not(.n-input--disabled).n-input--focus {
        background-color: var(--n-color-focus);
      }

      .n-input:not(.n-input--disabled).n-input--focus .n-input__state-border {
        border: var(--n-border-focus);
        box-shadow: var(--n-box-shadow-focus);
      }

      .n-input .n-input__border,
      .n-input .n-input__state-border {
        box-sizing: border-box;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        pointer-events: none;
        border-radius: inherit;
        border: var(--n-border);
        transition:
          box-shadow .3s var(--n-bezier),
          border-color .3s var(--n-bezier);
      }

      .n-input .n-input__state-border {
        border-color: #0000;
        z-index: 1;
      }

      .n-input .n-input__prefix {
        margin-right: 4px;
      }

      .n-input .n-input__suffix {
        margin-left: 4px;
      }

      .n-input .n-input__suffix,
      .n-input .n-input__prefix {
        transition: color .3s var(--n-bezier);
        flex-wrap: nowrap;
        flex-shrink: 0;
        line-height: var(--n-height);
        white-space: nowrap;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: var(--n-suffix-text-color);
      }

      .n-input .n-input__suffix .n-base-loading,
      .n-input .n-input__prefix .n-base-loading {
        font-size: var(--n-icon-size);
        margin: 0 2px;
        color: var(--n-loading-color);
      }

      .n-input .n-input__suffix .n-base-clear,
      .n-input .n-input__prefix .n-base-clear {
        font-size: var(--n-icon-size);
      }

      .n-input .n-input__suffix .n-base-clear .n-base-clear__placeholder .n-base-icon,
      .n-input .n-input__prefix .n-base-clear .n-base-clear__placeholder .n-base-icon {
        transition: color .3s var(--n-bezier);
        color: var(--n-icon-color);
        font-size: var(--n-icon-size);
      }

      .n-input .n-input__suffix>.n-icon,
      .n-input .n-input__prefix>.n-icon {
        transition: color .3s var(--n-bezier);
        color: var(--n-icon-color);
        font-size: var(--n-icon-size);
      }

      .n-input .n-input__suffix .n-base-icon,
      .n-input .n-input__prefix .n-base-icon {
        font-size: var(--n-icon-size);
      }

      .n-input .n-input-word-count {
        pointer-events: none;
        line-height: 1.5;
        font-size: .85em;
        color: var(--n-count-text-color);
        transition: color .3s var(--n-bezier);
        margin-left: 4px;
        font-variant: tabular-nums;
      }

      .n-input.n-input--warning-status:not(.n-input--disabled) .n-base-loading {
        color: var(--n-loading-color-warning)
      }

      .n-input.n-input--warning-status:not(.n-input--disabled) .n-input__input-el,
      .n-input.n-input--warning-status:not(.n-input--disabled) .n-input__textarea-el {
        caret-color: var(--n-caret-color-warning);
      }

      .n-input.n-input--warning-status:not(.n-input--disabled) .n-input__state-border {
        border: var(--n-border-warning);
      }

      .n-input.n-input--warning-status:not(.n-input--disabled):hover .n-input__state-border {
        border: var(--n-border-hover-warning);
      }

      .n-input.n-input--warning-status:not(.n-input--disabled):focus {
        background-color: var(--n-color-focus-warning);
      }

      .n-input.n-input--warning-status:not(.n-input--disabled):focus .n-input__state-border {
        box-shadow: var(--n-box-shadow-focus-warning);
        border: var(--n-border-focus-warning);
      }

      .n-input.n-input--warning-status:not(.n-input--disabled).n-input--focus {
        background-color: var(--n-color-focus-warning);
      }

      .n-input.n-input--warning-status:not(.n-input--disabled).n-input--focus .n-input__state-border {
        box-shadow: var(--n-box-shadow-focus-warning);
        border: var(--n-border-focus-warning);
      }

      .n-input.n-input--error-status:not(.n-input--disabled) .n-base-loading {
        color: var(--n-loading-color-error)
      }

      .n-input.n-input--error-status:not(.n-input--disabled) .n-input__input-el,
      .n-input.n-input--error-status:not(.n-input--disabled) .n-input__textarea-el {
        caret-color: var(--n-caret-color-error);
      }

      .n-input.n-input--error-status:not(.n-input--disabled) .n-input__state-border {
        border: var(--n-border-error);
      }

      .n-input.n-input--error-status:not(.n-input--disabled):hover .n-input__state-border {
        border: var(--n-border-hover-error);
      }

      .n-input.n-input--error-status:not(.n-input--disabled):focus {
        background-color: var(--n-color-focus-error);
      }

      .n-input.n-input--error-status:not(.n-input--disabled):focus .n-input__state-border {
        box-shadow: var(--n-box-shadow-focus-error);
        border: var(--n-border-focus-error);
      }

      .n-input.n-input--error-status:not(.n-input--disabled).n-input--focus {
        background-color: var(--n-color-focus-error);
      }

      .n-input.n-input--error-status:not(.n-input--disabled).n-input--focus .n-input__state-border {
        box-shadow: var(--n-box-shadow-focus-error);
        border: var(--n-border-focus-error);
      }
    </style>
    <style cssr-id="n-form-item">
      .n-form-item {
        display: grid;
        line-height: var(--n-line-height);
      }

      .n-form-item .n-form-item-label {
        grid-area: label;
        align-items: center;
        line-height: 1.25;
        text-align: var(--n-label-text-align);
        font-size: var(--n-label-font-size);
        height: var(--n-label-height);
        padding: var(--n-label-padding);
        color: var(--n-label-text-color);
        transition: color .3s var(--n-bezier);
        box-sizing: border-box;
      }

      .n-form-item .n-form-item-label .n-form-item-label__asterisk {
        color: var(--n-asterisk-color);
        transition: color .3s var(--n-bezier);
      }

      .n-form-item .n-form-item-label .n-form-item-label__asterisk-placeholder {
        visibility: hidden;
      }

      .n-form-item .n-form-item-blank {
        grid-area: blank;
        min-height: var(--n-blank-height);
      }

      .n-form-item.n-form-item--left-labelled {
        grid-template-areas:
          "label blank"
          "label feedback";
        grid-template-columns: auto minmax(0, 1fr);
      }

      .n-form-item.n-form-item--left-labelled .n-form-item-label {
        height: var(--n-blank-height);
        line-height: var(--n-blank-height);
        box-sizing: border-box;
        white-space: nowrap;
        flex-shrink: 0;
        flex-grow: 0;
      }

      .n-form-item.n-form-item--top-labelled {
        grid-template-areas:
          "label"
          "blank"
          "feedback";
        grid-template-rows: var(--n-label-height) 1fr;
        grid-template-columns: minmax(0, 100%);
      }

      .n-form-item.n-form-item--top-labelled.n-form-item--no-label {
        grid-template-areas:
          "blank"
          "feedback";
        grid-template-rows: 1fr;
      }

      .n-form-item.n-form-item--top-labelled .n-form-item-label {
        display: flex;
        align-items: flex-end;
        justify-content: var(--n-label-text-align);
      }

      .n-form-item .n-form-item-blank {
        box-sizing: border-box;
        display: flex;
        align-items: center;
        position: relative;
      }

      .n-form-item .n-form-item-feedback-wrapper {
        grid-area: feedback;
        box-sizing: border-box;
        min-height: var(--n-feedback-height);
        font-size: var(--n-feedback-font-size);
        line-height: 1.25;
        transform-origin: top left;
      }

      .n-form-item .n-form-item-feedback-wrapper:not(:empty) {
        padding: var(--n-feedback-padding);
      }

      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback {
        transition: color .3s var(--n-bezier);
        color: var(--n-feedback-text-color);
      }

      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.n-form-item-feedback--warning {
        color: var(--n-feedback-text-color-warning);
      }

      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.n-form-item-feedback--error {
        color: var(--n-feedback-text-color-error);
      }

      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.fade-down-transition-enter-from,
      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.fade-down-transition-leave-to {
        opacity: 0;
        transform: translateY(-3px);
      }

      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.fade-down-transition-enter-to,
      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.fade-down-transition-leave-from {
        opacity: 1;
        transform: translateY(0);
      }

      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.fade-down-transition-leave-active {
        transition: opacity .2s cubic-bezier(.4, 0, .2, 1), transform .2s cubic-bezier(.4, 0, .2, 1);
      }

      .n-form-item .n-form-item-feedback-wrapper .n-form-item-feedback.fade-down-transition-enter-active {
        transition: opacity .3s cubic-bezier(.4, 0, .2, 1), transform .3s cubic-bezier(.4, 0, .2, 1);
      }
    </style>
    <style cssr-id="n-form">
      .n-form.n-form--inline {
        width: 100%;
        display: inline-flex;
        align-items: flex-start;
        align-content: space-around;
      }

      .n-form.n-form--inline .n-form-item {
        width: auto;
        margin-right: 18px;
      }

      .n-form.n-form--inline .n-form-item:last-child {
        margin-right: 0;
      }
    </style>
    <style cssr-id="n-base-wave">
      .n-base-wave {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        border-radius: inherit;
      }
    </style>
    <style cssr-id="n-button">
      .n-button {
        margin: 0;
        font-weight: var(--n-font-weight);
        line-height: 1;
        font-family: inherit;
        padding: var(--n-padding);
        height: var(--n-height);
        font-size: var(--n-font-size);
        border-radius: var(--n-border-radius);
        color: var(--n-text-color);
        background-color: var(--n-color);
        width: var(--n-width);
        white-space: nowrap;
        outline: none;
        position: relative;
        z-index: auto;
        border: none;
        display: inline-flex;
        flex-wrap: nowrap;
        flex-shrink: 0;
        align-items: center;
        justify-content: center;
        user-select: none;
        text-align: center;
        cursor: pointer;
        text-decoration: none;
        transition:
          color .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          opacity .3s var(--n-bezier),
          border-color .3s var(--n-bezier);
      }

      .n-button.n-button--color .n-button__border {
        border-color: var(--n-border-color);
      }

      .n-button.n-button--color.n-button--disabled .n-button__border {
        border-color: var(--n-border-color-disabled);
      }

      .n-button.n-button--color:not(.n-button--disabled):focus .n-button__state-border {
        border-color: var(--n-border-color-focus);
      }

      .n-button.n-button--color:not(.n-button--disabled):hover .n-button__state-border {
        border-color: var(--n-border-color-hover);
      }

      .n-button.n-button--color:not(.n-button--disabled):active .n-button__state-border {
        border-color: var(--n-border-color-pressed);
      }

      .n-button.n-button--color:not(.n-button--disabled).n-button--pressed .n-button__state-border {
        border-color: var(--n-border-color-pressed);
      }

      .n-button.n-button--disabled {
        background-color: var(--n-color-disabled);
        color: var(--n-text-color-disabled);
      }

      .n-button.n-button--disabled .n-button__border {
        border: var(--n-border-disabled);
      }

      .n-button:not(.n-button--disabled):focus {
        background-color: var(--n-color-focus);
        color: var(--n-text-color-focus);
      }

      .n-button:not(.n-button--disabled):focus .n-button__state-border {
        border: var(--n-border-focus);
      }

      .n-button:not(.n-button--disabled):hover {
        background-color: var(--n-color-hover);
        color: var(--n-text-color-hover);
      }

      .n-button:not(.n-button--disabled):hover .n-button__state-border {
        border: var(--n-border-hover);
      }

      .n-button:not(.n-button--disabled):active {
        background-color: var(--n-color-pressed);
        color: var(--n-text-color-pressed);
      }

      .n-button:not(.n-button--disabled):active .n-button__state-border {
        border: var(--n-border-pressed);
      }

      .n-button:not(.n-button--disabled).n-button--pressed {
        background-color: var(--n-color-pressed);
        color: var(--n-text-color-pressed);
      }

      .n-button:not(.n-button--disabled).n-button--pressed .n-button__state-border {
        border: var(--n-border-pressed);
      }

      .n-button.n-button--loading {
        pointer-events: none;
      }

      .n-button .n-base-wave {
        pointer-events: none;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        animation-iteration-count: 1;
        animation-duration: var(--n-ripple-duration);
        animation-timing-function: var(--n-bezier-ease-out), var(--n-bezier-ease-out);
      }

      .n-button .n-base-wave.n-base-wave--active {
        z-index: 1;
        animation-name: button-wave-spread, button-wave-opacity;
      }

      .n-button .n-button__border,
      .n-button .n-button__state-border {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        border-radius: inherit;
        transition: border-color .3s var(--n-bezier);
        pointer-events: none;
      }

      .n-button .n-button__border {
        border: var(--n-border);
      }

      .n-button .n-button__state-border {
        border: var(--n-border);
        border-color: #0000;
        z-index: 1;
      }

      .n-button .n-button__icon {
        margin: var(--n-icon-margin);
        margin-left: 0;
        height: var(--n-icon-size);
        width: var(--n-icon-size);
        max-width: var(--n-icon-size);
        font-size: var(--n-icon-size);
        position: relative;
        flex-shrink: 0;
      }

      .n-button .n-button__icon .n-icon-slot {
        height: var(--n-icon-size);
        width: var(--n-icon-size);
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
      }

      .n-button .n-button__icon .n-icon-slot.icon-switch-transition-enter-from,
      .n-button .n-button__icon .n-icon-slot.icon-switch-transition-leave-to {
        transform: translateY(-50%) scale(0.75);
        left: 0;
        top: 50%;
        opacity: 0;
      }

      .n-button .n-button__icon .n-icon-slot.icon-switch-transition-enter-to,
      .n-button .n-button__icon .n-icon-slot.icon-switch-transition-leave-from {
        transform: scale(1) translateY(-50%);
        left: 0;
        top: 50%;
        opacity: 1;
      }

      .n-button .n-button__icon .n-icon-slot.icon-switch-transition-enter-active,
      .n-button .n-button__icon .n-icon-slot.icon-switch-transition-leave-active {
        transform-origin: center;
        position: absolute;
        left: 0;
        top: 50%;
        transition: all .3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-button .n-button__icon.fade-in-width-expand-transition-leave-from,
      .n-button .n-button__icon.fade-in-width-expand-transition-enter-to {
        opacity: 1;
      }

      .n-button .n-button__icon.fade-in-width-expand-transition-leave-to,
      .n-button .n-button__icon.fade-in-width-expand-transition-enter-from {
        opacity: 0 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
      }

      .n-button .n-button__icon.fade-in-width-expand-transition-leave-active {
        overflow: hidden;
        transition:
          opacity .2s cubic-bezier(.4, 0, .2, 1),
          max-width .2s cubic-bezier(.4, 0, .2, 1) .1s,
          margin-left .2s cubic-bezier(.4, 0, .2, 1) .1s,
          margin-right .2s cubic-bezier(.4, 0, .2, 1) .1s;
      }

      .n-button .n-button__icon.fade-in-width-expand-transition-enter-active {
        overflow: hidden;
        transition:
          opacity .2s cubic-bezier(.4, 0, .2, 1) .1s,
          max-width .2s cubic-bezier(.4, 0, .2, 1),
          margin-left .2s cubic-bezier(.4, 0, .2, 1),
          margin-right .2s cubic-bezier(.4, 0, .2, 1);
      }

      .n-button .n-button__content {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
      }

      .n-button .n-button__content~.n-button__icon {
        margin: var(--n-icon-margin);
        margin-right: 0;
      }

      .n-button.n-button--block {
        display: flex;
        width: 100%;
      }

      .n-button.n-button--dashed .n-button__border,
      .n-button.n-button--dashed .n-button__state-border {
        border-style: dashed !important;
      }

      .n-button.n-button--disabled {
        cursor: not-allowed;
        opacity: var(--n-opacity-disabled);
      }

      @keyframes button-wave-spread {
        from {
          box-shadow: 0 0 0.5px 0 var(--n-ripple-color);
        }

        to {
          box-shadow: 0 0 0.5px 4.5px var(--n-ripple-color);
        }
      }

      @keyframes button-wave-opacity {
        from {
          opacity: var(--n-wave-opacity);
        }

        to {
          opacity: 0;
        }
      }
    </style>
    <style cssr-id="n-card">
      .n-card {
        font-size: var(--n-font-size);
        line-height: var(--n-line-height);
        display: flex;
        flex-direction: column;
        width: 100%;
        box-sizing: border-box;
        position: relative;
        border-radius: var(--n-border-radius);
        background-color: var(--n-color);
        color: var(--n-text-color);
        transition:
          color .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier),
          border-color .3s var(--n-bezier);
      }

      .n-card.n-card--hoverable:hover {
        box-shadow: var(--n-box-shadow);
      }

      .n-card.n-card--content-segmented>.n-card__content {
        padding-top: var(--n-padding-bottom);
      }

      .n-card.n-card--content-soft-segmented>.n-card__content {
        margin: 0 var(--n-padding-left);
        padding: var(--n-padding-bottom) 0;
      }

      .n-card.n-card--footer-segmented>.n-card__footer {
        padding-top: var(--n-padding-bottom);
      }

      .n-card.n-card--footer-soft-segmented>.n-card__footer {
        padding: var(--n-padding-bottom) 0;
        margin: 0 var(--n-padding-left);
      }

      .n-card>.n-card-header {
        box-sizing: border-box;
        display: flex;
        align-items: center;
        font-size: var(--n-title-font-size);
        padding:
          var(--n-padding-top) var(--n-padding-left) var(--n-padding-bottom) var(--n-padding-left);
      }

      .n-card>.n-card-header .n-card-header__main {
        font-weight: var(--n-title-font-weight);
        transition: color .3s var(--n-bezier);
        flex: 1;
        color: var(--n-title-text-color);
      }

      .n-card>.n-card-header .n-card-header__extra {
        display: flex;
        align-items: center;
        font-size: var(--n-font-size);
        font-weight: 400;
        transition: color .3s var(--n-bezier);
        color: var(--n-text-color);
      }

      .n-card>.n-card-header .n-card-header__close {
        font-size: var(--n-close-size);
        transition: color .3s var(--n-bezier);
      }

      .n-card>.n-card__action {
        box-sizing: border-box;
        transition:
          background-color .3s var(--n-bezier),
          border-color .3s var(--n-bezier);
        background-clip: padding-box;
        background-color: var(--n-action-color);
      }

      .n-card>.n-card__content {
        flex: 1;
      }

      .n-card>.n-card__content,
      .n-card>.n-card__footer {
        box-sizing: border-box;
        padding: 0 var(--n-padding-left) var(--n-padding-bottom) var(--n-padding-left);
        font-size: var(--n-font-size);
      }

      .n-card>.n-card__content:first-child,
      .n-card>.n-card__footer:first-child {
        padding-top: var(--n-padding-bottom);
      }

      .n-card>.n-card__action {
        background-color: var(--n-action-color);
        padding: var(--n-padding-bottom) var(--n-padding-left);
        border-bottom-left-radius: var(--n-border-radius);
        border-bottom-right-radius: var(--n-border-radius);
      }

      .n-card .n-card-cover {
        overflow: hidden;
        width: 100%;
        border-radius: var(--n-border-radius) var(--n-border-radius) 0 0;
      }

      .n-card .n-card-cover img {
        display: block;
        width: 100%;
      }

      .n-card.n-card--bordered {
        border: 1px solid var(--n-border-color);
      }

      .n-card.n-card--bordered:target {
        border-color: var(--n-color-target);
      }

      .n-card.n-card--action-segmented>.n-card__action:not(:first-child) {
        border-top: 1px solid var(--n-border-color);
      }

      .n-card.n-card--content-segmented>.n-card__content,
      .n-card.n-card--content-soft-segmented>.n-card__content {
        transition: border-color 0.3s var(--n-bezier);
      }

      .n-card.n-card--content-segmented>.n-card__content:not(:first-child),
      .n-card.n-card--content-soft-segmented>.n-card__content:not(:first-child) {
        border-top: 1px solid var(--n-border-color);
      }

      .n-card.n-card--footer-segmented>.n-card__footer,
      .n-card.n-card--footer-soft-segmented>.n-card__footer {
        transition: border-color 0.3s var(--n-bezier);
      }

      .n-card.n-card--footer-segmented>.n-card__footer:not(:first-child),
      .n-card.n-card--footer-soft-segmented>.n-card__footer:not(:first-child) {
        border-top: 1px solid var(--n-border-color);
      }

      .n-modal .n-card,
      .n-drawer .n-card {
        background: var(--n-color-modal);
      }

      .n-popover:not(.n-tooltip) .n-card {
        background: var(--n-color-popover);
      }

      .n-card.n-modal {
        background: var(--n-color-modal);
      }
    </style>
    <style cssr-id="n-avatar">
      .n-avatar {
        width: var(--n-merged-size);
        height: var(--n-merged-size);
        color: #FFF;
        font-size: var(--n-font-size);
        display: inline-flex;
        position: relative;
        overflow: hidden;
        text-align: center;
        border: var(--n-border);
        border-radius: var(--n-border-radius);
        --n-merged-color: var(--n-color);
        background-color: var(--n-merged-color);
        transition:
          border-color .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
      }

      .n-avatar .n-modal,
      .n-avatar .n-drawer {
        --n-merged-color: var(--n-color-modal);
      }

      .n-avatar .n-popover:not(.n-tooltip) {
        --n-merged-color: var(--n-color-popover);
      }

      .n-avatar img {
        width: 100%;
        height: 100%;
      }

      .n-avatar .n-avatar__text {
        white-space: nowrap;
        display: inline-block;
        position: absolute;
        left: 50%;
        top: 50%;
      }

      .n-avatar .n-icon {
        vertical-align: bottom;
        font-size: calc(var(--n-merged-size) - 6px);
      }

      .n-avatar .n-avatar__text {
        line-height: 1.25
      }
    </style>
    <style cssr-id="n-dropdown">
      .n-dropdown-menu {
        transform-origin: inherit;
        padding: var(--n-padding);
        background-color: var(--n-color);
        border-radius: var(--n-border-radius);
        box-shadow: var(--n-box-shadow);
        transition:
          background-color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier);
      }

      .n-dropdown-menu.fade-in-scale-up-transition-leave-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-dropdown-menu.fade-in-scale-up-transition-enter-active {
        transform-origin: inherit;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-dropdown-menu.fade-in-scale-up-transition-enter-from,
      .n-dropdown-menu.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: scale(.9);
      }

      .n-dropdown-menu.fade-in-scale-up-transition-leave-from,
      .n-dropdown-menu.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: scale(1);
      }

      .n-dropdown-menu .n-dropdown-option {
        position: relative;
      }

      .n-dropdown-menu .n-dropdown-option a {
        text-decoration: none;
        color: inherit;
      }

      .n-dropdown-menu .n-dropdown-option a::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body {
        display: flex;
        cursor: pointer;
        height: var(--n-option-height);
        line-height: var(--n-option-height);
        font-size: var(--n-font-size);
        color: var(--n-option-text-color);
        transition:
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--pending:not(.n-dropdown-option-body--disabled) {
        color: var(--n-option-text-color-hover);
        background-color: var(--n-option-color-hover);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--pending .n-dropdown-option-body__prefix,
      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--pending .n-dropdown-option-body__suffix {
        color: var(--n-option-text-color-hover);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--active:not(.n-dropdown-option-body--disabled) {
        color: var(--n-option-text-color-active);
        background-color: var(--n-option-color-active);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--active .n-dropdown-option-body__prefix,
      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--active .n-dropdown-option-body__suffix {
        color: var(--n-option-text-color-active);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--disabled {
        cursor: not-allowed;
        opacity: var(--n-option-opacity-disabled);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--child-active {
        color: var(--n-option-text-color-child-active);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--child-active .n-dropdown-option-body__prefix,
      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--child-active .n-dropdown-option-body__suffix {
        color: var(--n-option-text-color-child-active);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--group {
        font-size: calc(var(--n-font-size) - 1px);
        color: var(--n-group-header-text-color);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--group .n-dropdown-option-body__prefix {
        width: calc(var(--n-option-prefix-width) / 2);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body.n-dropdown-option-body--group .n-dropdown-option-body__prefix.n-dropdown-option-body__prefix--show-icon {
        width: calc(var(--n-option-icon-prefix-width) / 2);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__prefix {
        width: var(--n-option-prefix-width);
        display: flex;
        justify-content: center;
        align-items: center;
        color: var(--n-prefix-color);
        transition: color .3s var(--n-bezier);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__prefix.n-dropdown-option-body__prefix--show-icon {
        width: var(--n-option-icon-prefix-width);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__prefix .n-icon {
        font-size: var(--n-option-icon-size);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__label {
        white-space: nowrap;
        flex: 1;
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__suffix {
        box-sizing: border-box;
        flex-grow: 0;
        flex-shrink: 0;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        min-width: var(--n-option-suffix-width);
        padding: 0 8px;
        transition: color .3s var(--n-bezier);
        color: var(--n-suffix-color);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__suffix.n-dropdown-option-body__suffix--has-submenu {
        width: var(--n-option-icon-suffix-width);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-option-body__suffix .n-icon {
        font-size: var(--n-option-icon-size);
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-option-body .n-dropdown-menu {
        pointer-events: all;
      }

      .n-dropdown-menu .n-dropdown-option .n-dropdown-offset-container {
        pointer-events: none;
        position: absolute;
        left: 0;
        right: 0;
        top: -4px;
        bottom: -4px;
      }

      .n-dropdown-menu .n-dropdown-divider {
        transition: background-color .3s var(--n-bezier);
        background-color: var(--n-divider-color);
        height: 1px;
        margin: 4px 0;
      }

      .n-dropdown-menu .n-dropdown-menu-wrapper {
        transform-origin: inherit;
        width: fit-content;
      }
    </style>
    <style cssr-id="vueuc/binder">
      .v-binder-follower-container {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        height: 0;
        pointer-events: none;
        z-index: auto;
      }

      .v-binder-follower-content {
        position: absolute;
        z-index: auto;
      }

      .v-binder-follower-content>* {
        pointer-events: all;
      }
    </style>
    <style cssr-id="n-popover">
      .n-popover {
        transition:
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
        transform-origin: inherit;
        position: relative;
        font-size: var(--n-font-size);
        color: var(--n-text-color);
        box-shadow: var(--n-box-shadow);
      }

      .n-popover.popover-transition-enter-from,
      .n-popover.popover-transition-leave-to {
        opacity: 0;
        transform: scale(.85);
      }

      .n-popover.popover-transition-enter-to,
      .n-popover.popover-transition-leave-from {
        transform: scale(1);
        opacity: 1;
      }

      .n-popover.popover-transition-enter-active {
        transition:
          opacity .15s var(--n-bezier-ease-out),
          transform .15s var(--n-bezier-ease-out);
      }

      .n-popover.popover-transition-leave-active {
        transition:
          opacity .15s var(--n-bezier-ease-in),
          transform .15s var(--n-bezier-ease-in);
      }

      .n-popover:not(.n-popover--raw) {
        background-color: var(--n-color);
        border-radius: var(--n-border-radius);
      }

      .n-popover:not(.n-popover--raw):not(.n-popover--show-header) {
        padding: var(--n-padding);
      }

      .n-popover .n-popover__header {
        padding: var(--n-padding);
        border-bottom: 1px solid var(--n-divider-color);
        transition: border-color .3s var(--n-bezier);
      }

      .n-popover .n-popover__content {
        padding: var(--n-padding);
      }

      .n-popover .n-popover-arrow-wrapper {
        position: absolute;
        overflow: hidden;
        pointer-events: none;
      }

      .n-popover .n-popover-arrow-wrapper .n-popover-arrow {
        transition: background-color .3s var(--n-bezier);
        position: absolute;
        display: block;
        width: calc(var(--n-arrow-height) * 1.414);
        height: calc(var(--n-arrow-height) * 1.414);
        box-shadow: 0 0 8px 0 rgba(0, 0, 0, .12);
        transform: rotate(45deg);
        background-color: var(--n-color);
        pointer-events: all;
      }

      [v-placement="top-start"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-bottom: var(--n-space);
      }

      [v-placement="top-start"]>.n-popover.n-popover--show-arrow {
        margin-bottom: var(--n-space-arrow);
      }

      [v-placement="top-start"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="top-start"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        top: calc(100% - 1px);
        bottom: auto;
        height: var(--n-space-arrow);
      }

      [v-placement="top-start"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        top: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        left: calc(var(--n-arrow-offset) - var(--v-offset-left));
      }

      [v-placement="top"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-bottom: var(--n-space);
      }

      [v-placement="top"]>.n-popover.n-popover--show-arrow {
        margin-bottom: var(--n-space-arrow);
      }

      [v-placement="top"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="top"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        top: calc(100% - 1px);
        bottom: auto;
        height: var(--n-space-arrow);
      }

      [v-placement="top"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        top: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        transform: translateX(calc(var(--n-arrow-height) * 1.414 / -2)) rotate(45deg);
        left: 50%;
      }

      [v-placement="top-end"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-bottom: var(--n-space);
      }

      [v-placement="top-end"]>.n-popover.n-popover--show-arrow {
        margin-bottom: var(--n-space-arrow);
      }

      [v-placement="top-end"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="top-end"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        top: calc(100% - 1px);
        bottom: auto;
        height: var(--n-space-arrow);
      }

      [v-placement="top-end"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        top: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        right: calc(var(--n-arrow-offset) + var(--v-offset-left));
      }

      [v-placement="bottom-start"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-top: var(--n-space);
      }

      [v-placement="bottom-start"]>.n-popover.n-popover--show-arrow {
        margin-top: var(--n-space-arrow);
      }

      [v-placement="bottom-start"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="bottom-start"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        bottom: calc(100% - 1px);
        top: auto;
        height: var(--n-space-arrow);
      }

      [v-placement="bottom-start"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        bottom: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        left: calc(var(--n-arrow-offset) - var(--v-offset-left));
      }

      [v-placement="bottom"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-top: var(--n-space);
      }

      [v-placement="bottom"]>.n-popover.n-popover--show-arrow {
        margin-top: var(--n-space-arrow);
      }

      [v-placement="bottom"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="bottom"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        bottom: calc(100% - 1px);
        top: auto;
        height: var(--n-space-arrow);
      }

      [v-placement="bottom"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        bottom: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        transform: translateX(calc(var(--n-arrow-height) * 1.414 / -2)) rotate(45deg);
        left: 50%;
      }

      [v-placement="bottom-end"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-top: var(--n-space);
      }

      [v-placement="bottom-end"]>.n-popover.n-popover--show-arrow {
        margin-top: var(--n-space-arrow);
      }

      [v-placement="bottom-end"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="bottom-end"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        bottom: calc(100% - 1px);
        top: auto;
        height: var(--n-space-arrow);
      }

      [v-placement="bottom-end"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        bottom: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        right: calc(var(--n-arrow-offset) + var(--v-offset-left));
      }

      [v-placement="left-start"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-right: var(--n-space);
      }

      [v-placement="left-start"]>.n-popover.n-popover--show-arrow {
        margin-right: var(--n-space-arrow);
      }

      [v-placement="left-start"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="left-start"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        left: calc(100% - 1px);
        right: auto;
        width: var(--n-space-arrow);
      }

      [v-placement="left-start"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        left: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        top: calc(var(--n-arrow-offset-vertical) - var(--v-offset-top));
      }

      [v-placement="left"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-right: var(--n-space);
      }

      [v-placement="left"]>.n-popover.n-popover--show-arrow {
        margin-right: var(--n-space-arrow);
      }

      [v-placement="left"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="left"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        left: calc(100% - 1px);
        right: auto;
        width: var(--n-space-arrow);
      }

      [v-placement="left"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        left: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        transform: translateY(calc(var(--n-arrow-height) * 1.414 / -2)) rotate(45deg);
        top: 50%;
      }

      [v-placement="left-end"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-right: var(--n-space);
      }

      [v-placement="left-end"]>.n-popover.n-popover--show-arrow {
        margin-right: var(--n-space-arrow);
      }

      [v-placement="left-end"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="left-end"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        left: calc(100% - 1px);
        right: auto;
        width: var(--n-space-arrow);
      }

      [v-placement="left-end"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        left: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        bottom: calc(var(--n-arrow-offset-vertical) + var(--v-offset-top));
      }

      [v-placement="right-start"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-left: var(--n-space);
      }

      [v-placement="right-start"]>.n-popover.n-popover--show-arrow {
        margin-left: var(--n-space-arrow);
      }

      [v-placement="right-start"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="right-start"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        right: calc(100% - 1px);
        left: auto;
        width: var(--n-space-arrow);
      }

      [v-placement="right-start"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        right: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        top: calc(var(--n-arrow-offset-vertical) - var(--v-offset-top));
      }

      [v-placement="right"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-left: var(--n-space);
      }

      [v-placement="right"]>.n-popover.n-popover--show-arrow {
        margin-left: var(--n-space-arrow);
      }

      [v-placement="right"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="right"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        right: calc(100% - 1px);
        left: auto;
        width: var(--n-space-arrow);
      }

      [v-placement="right"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        right: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        transform: translateY(calc(var(--n-arrow-height) * 1.414 / -2)) rotate(45deg);
        top: 50%;
      }

      [v-placement="right-end"]>.n-popover:not(.n-popover--manual-trigger) {
        margin-left: var(--n-space);
      }

      [v-placement="right-end"]>.n-popover.n-popover--show-arrow {
        margin-left: var(--n-space-arrow);
      }

      [v-placement="right-end"]>.n-popover.n-popover--overlap {
        margin: 0;
      }

      [v-placement="right-end"]>.n-popover>.n-popover-arrow-wrapper {
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        right: calc(100% - 1px);
        left: auto;
        width: var(--n-space-arrow);
      }

      [v-placement="right-end"]>.n-popover>.n-popover-arrow-wrapper .n-popover-arrow {
        right: calc(var(--n-arrow-height) * 1.414 / -2 + 1px);
        bottom: calc(var(--n-arrow-offset-vertical) + var(--v-offset-top));
      }

      [v-placement="right-start"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        top: calc(max(calc((var(--v-target-height, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset-vertical)) - var(--v-offset-top));
      }

      [v-placement="left-start"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        top: calc(max(calc((var(--v-target-height, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset-vertical)) - var(--v-offset-top));
      }

      [v-placement="top-end"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        right: calc(max(calc((var(--v-target-width, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset)) + var(--v-offset-left));
      }

      [v-placement="bottom-end"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        right: calc(max(calc((var(--v-target-width, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset)) + var(--v-offset-left));
      }

      [v-placement="right-end"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        bottom: calc(max(calc((var(--v-target-height, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset-vertical)) + var(--v-offset-top));
      }

      [v-placement="left-end"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        bottom: calc(max(calc((var(--v-target-height, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset-vertical)) + var(--v-offset-top));
      }

      [v-placement="top-start"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        left: calc(max(calc((var(--v-target-width, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset)) - var(--v-offset-left));
      }

      [v-placement="bottom-start"]>.n-popover.n-popover--center-arrow .n-popover-arrow {
        left: calc(max(calc((var(--v-target-width, 0px) - var(--n-arrow-height) * 1.414) / 2), var(--n-arrow-offset)) - var(--v-offset-left));
      }
    </style>
    <style cssr-id="n-icon">
      .n-icon {
        height: 1em;
        width: 1em;
        line-height: 1em;
        text-align: center;
        display: inline-block;
        position: relative;
        fill: currentColor;
        transform: translateZ(0);
      }

      .n-icon.n-icon--color-transition {
        transition: color .3s var(--n-bezier);
      }

      .n-icon.n-icon--depth {
        color: var(--n-color);
      }

      .n-icon.n-icon--depth svg {
        opacity: var(--n-opacity);
        transition: opacity .3s var(--n-bezier);
      }

      .n-icon svg {
        height: 1em;
        width: 1em;
      }
    </style>
    <style cssr-id="n-base-slot-machine">
      @keyframes n-base-slot-machine-fade-up-in {
        from {
          transform: translateY(60%);
          opacity: 0;
        }

        to {
          transform: translateY(0);
          opacity: 1;
        }
      }

      @keyframes n-base-slot-machine-fade-down-in {
        from {
          transform: translateY(-60%);
          opacity: 0;
        }

        to {
          transform: translateY(0);
          opacity: 1;
        }
      }

      @keyframes n-base-slot-machine-fade-up-out {
        from {
          transform: translateY(0%);
          opacity: 1;
        }

        to {
          transform: translateY(-60%);
          opacity: 0;
        }
      }

      @keyframes n-base-slot-machine-fade-down-out {
        from {
          transform: translateY(0%);
          opacity: 1;
        }

        to {
          transform: translateY(60%);
          opacity: 0;
        }
      }

      .n-base-slot-machine {
        overflow: hidden;
        white-space: nowrap;
        display: inline-block;
        height: 18px;
        line-height: 18px;
      }

      .n-base-slot-machine .n-base-slot-machine-number {
        display: inline-block;
        position: relative;
        height: 18px;
        width: .6em;
        max-width: .6em;
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-up-width-expand-transition-leave-active {
        transition:
          opacity .2s cubic-bezier(0, 0, .2, 1),
          max-width .2s cubic-bezier(0, 0, .2, 1),
          transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-up-width-expand-transition-enter-active {
        transition:
          opacity .2s cubic-bezier(0, 0, .2, 1),
          max-width .2s cubic-bezier(0, 0, .2, 1),
          transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-up-width-expand-transition-enter-to {
        opacity: 1;
        transform: translateX(0) translateY(0);
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-up-width-expand-transition-enter-from {
        max-width: 0 !important;
        opacity: 0;
        transform: translateY(60%);
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-up-width-expand-transition-leave-from {
        opacity: 1;
        transform: translateY(0);
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-up-width-expand-transition-leave-to {
        max-width: 0 !important;
        opacity: 0;
        transform: translateY(60%);
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-in-width-expand-transition-leave-from,
      .n-base-slot-machine .n-base-slot-machine-number.fade-in-width-expand-transition-enter-to {
        opacity: 1;
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-in-width-expand-transition-leave-to,
      .n-base-slot-machine .n-base-slot-machine-number.fade-in-width-expand-transition-enter-from {
        opacity: 0 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-in-width-expand-transition-leave-active {
        overflow: hidden;
        transition:
          opacity .2s cubic-bezier(.4, 0, .2, 1),
          max-width .2s cubic-bezier(.4, 0, .2, 1) 0s,
          margin-left .2s cubic-bezier(.4, 0, .2, 1) 0s,
          margin-right .2s cubic-bezier(.4, 0, .2, 1) 0s;
      }

      .n-base-slot-machine .n-base-slot-machine-number.fade-in-width-expand-transition-enter-active {
        overflow: hidden;
        transition:
          opacity .2s cubic-bezier(.4, 0, .2, 1) 0s,
          max-width .2s cubic-bezier(.4, 0, .2, 1),
          margin-left .2s cubic-bezier(.4, 0, .2, 1),
          margin-right .2s cubic-bezier(.4, 0, .2, 1);
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-old-number {
        display: inline-block;
        opacity: 0;
        position: absolute;
        left: 0;
        right: 0;
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-old-number.n-base-slot-machine-old-number--top {
        transform: translateY(-100%);
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-old-number.n-base-slot-machine-old-number--bottom {
        transform: translateY(100%);
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-old-number.n-base-slot-machine-old-number--down-scroll {
        animation: n-base-slot-machine-fade-down-out .2s cubic-bezier(0, 0, .2, 1);
        animation-iteration-count: 1;
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-old-number.n-base-slot-machine-old-number--up-scroll {
        animation: n-base-slot-machine-fade-up-out .2s cubic-bezier(0, 0, .2, 1);
        animation-iteration-count: 1;
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-current-number {
        display: inline-block;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        opacity: 1;
        transform: translateY(0);
        width: .6em;
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-current-number.n-base-slot-machine-current-number--down-scroll {
        animation: n-base-slot-machine-fade-down-in .2s cubic-bezier(0, 0, .2, 1);
        animation-iteration-count: 1;
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-current-number.n-base-slot-machine-current-number--up-scroll {
        animation: n-base-slot-machine-fade-up-in .2s cubic-bezier(0, 0, .2, 1);
        animation-iteration-count: 1;
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-current-number .n-base-slot-machine-current-number__inner {
        display: inline-block;
        position: absolute;
        right: 0;
        top: 0;
        width: .6em;
      }

      .n-base-slot-machine .n-base-slot-machine-number .n-base-slot-machine-current-number .n-base-slot-machine-current-number__inner.n-base-slot-machine-current-number__inner--not-number {
        right: unset;
        left: 0;
      }
    </style>
    <style cssr-id="n-badge">
      @keyframes badge-wave-spread {
        from {
          box-shadow: 0 0 0.5px 0px var(--n-ripple-color);
          opacity: 0.6;
        }

        to {
          box-shadow: 0 0 0.5px 4.5px var(--n-ripple-color);
          opacity: 0;
        }
      }

      .n-badge {
        display: inline-flex;
        position: relative;
        vertical-align: middle;
        color: var(--n-color);
        font-family: var(--n-font-family);
      }

      .n-badge.n-badge--as-is .n-badge-sup {
        position: static;
        transform: translateX(0);
      }

      .n-badge.n-badge--as-is .n-badge-sup.fade-in-scale-up-transition-leave-active {
        transform-origin: left bottom;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-badge.n-badge--as-is .n-badge-sup.fade-in-scale-up-transition-enter-active {
        transform-origin: left bottom;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-badge.n-badge--as-is .n-badge-sup.fade-in-scale-up-transition-enter-from,
      .n-badge.n-badge--as-is .n-badge-sup.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: translateX(0) scale(.9);
      }

      .n-badge.n-badge--as-is .n-badge-sup.fade-in-scale-up-transition-leave-from,
      .n-badge.n-badge--as-is .n-badge-sup.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: translateX(0) scale(1);
      }

      .n-badge.n-badge--dot .n-badge-sup {
        height: 8px;
        width: 8px;
        padding: 0;
        min-width: 8px;
        left: 100%;
        bottom: calc(100% - 4px);
      }

      .n-badge.n-badge--dot .n-badge-sup ::before {
        border-radius: 4px;
      }

      .n-badge .n-badge-sup {
        background: var(--n-color);
        transition:
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
        color: #FFF;
        position: absolute;
        height: 18px;
        line-height: 18px;
        border-radius: 9px;
        padding: 0 6px;
        text-align: center;
        font-size: var(--n-font-size);
        transform: translateX(-50%);
        left: 100%;
        bottom: calc(100% - 9px);
        font-variant-numeric: tabular-nums;
        z-index: 1;
        display: flex;
        align-items: center;
      }

      .n-badge .n-badge-sup.fade-in-scale-up-transition-leave-active {
        transform-origin: left bottom;
        transition: opacity .2s cubic-bezier(.4, 0, 1, 1), transform .2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-badge .n-badge-sup.fade-in-scale-up-transition-enter-active {
        transform-origin: left bottom;
        transition: opacity .2s cubic-bezier(0, 0, .2, 1), transform .2s cubic-bezier(0, 0, .2, 1);
      }

      .n-badge .n-badge-sup.fade-in-scale-up-transition-enter-from,
      .n-badge .n-badge-sup.fade-in-scale-up-transition-leave-to {
        opacity: 0;
        transform: translateX(-50%) scale(.9);
      }

      .n-badge .n-badge-sup.fade-in-scale-up-transition-leave-from,
      .n-badge .n-badge-sup.fade-in-scale-up-transition-enter-to {
        opacity: 1;
        transform: translateX(-50%) scale(1);
      }

      .n-badge .n-badge-sup .n-base-wave {
        z-index: 1;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-delay: 1s;
        animation-timing-function: var(--n-ripple-bezier);
        animation-name: badge-wave-spread;
      }

      .n-badge .n-badge-sup::before {
        opacity: 0;
        transform: scale(1);
        border-radius: 9px;
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }
    </style>
    <style cssr-id="n-layout-header">
      .n-layout-header {
        transition:
          color .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          box-shadow .3s var(--n-bezier),
          border-color .3s var(--n-bezier);
        box-sizing: border-box;
        width: 100%;
        background-color: var(--n-color);
        color: var(--n-text-color);
      }

      .n-layout-header.n-layout-header--absolute-positioned {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
      }

      .n-layout-header.n-layout-header--bordered {
        border-bottom: solid 1px var(--n-border-color);
      }
    </style>
    <style cssr-id="n-drawer">
      .n-drawer {
        line-height: var(--n-line-height);
        position: absolute;
        pointer-events: all;
        box-shadow: var(--n-box-shadow);
        transition:
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
        background-color: var(--n-color);
        color: var(--n-text-color);
        box-sizing: border-box;
      }

      .n-drawer.slide-in-from-right-transition-leave-active {
        transition: transform 0.2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-drawer.slide-in-from-right-transition-enter-active {
        transition: transform 0.3s cubic-bezier(0, 0, .2, 1);
      }

      .n-drawer.slide-in-from-right-transition-enter-to {
        transform: translateX(0);
      }

      .n-drawer.slide-in-from-right-transition-enter-from {
        transform: translateX(100%);
      }

      .n-drawer.slide-in-from-right-transition-leave-from {
        transform: translateX(0);
      }

      .n-drawer.slide-in-from-right-transition-leave-to {
        transform: translateX(100%);
      }

      .n-drawer.slide-in-from-left-transition-leave-active {
        transition: transform 0.2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-drawer.slide-in-from-left-transition-enter-active {
        transition: transform 0.3s cubic-bezier(0, 0, .2, 1);
      }

      .n-drawer.slide-in-from-left-transition-enter-to {
        transform: translateX(0);
      }

      .n-drawer.slide-in-from-left-transition-enter-from {
        transform: translateX(-100%);
      }

      .n-drawer.slide-in-from-left-transition-leave-from {
        transform: translateX(0);
      }

      .n-drawer.slide-in-from-left-transition-leave-to {
        transform: translateX(-100%);
      }

      .n-drawer.slide-in-from-top-transition-leave-active {
        transition: transform 0.2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-drawer.slide-in-from-top-transition-enter-active {
        transition: transform 0.3s cubic-bezier(0, 0, .2, 1);
      }

      .n-drawer.slide-in-from-top-transition-enter-to {
        transform: translateY(0);
      }

      .n-drawer.slide-in-from-top-transition-enter-from {
        transform: translateY(-100%);
      }

      .n-drawer.slide-in-from-top-transition-leave-from {
        transform: translateY(0);
      }

      .n-drawer.slide-in-from-top-transition-leave-to {
        transform: translateY(-100%);
      }

      .n-drawer.slide-in-from-bottom-transition-leave-active {
        transition: transform 0.2s cubic-bezier(.4, 0, 1, 1);
      }

      .n-drawer.slide-in-from-bottom-transition-enter-active {
        transition: transform 0.3s cubic-bezier(0, 0, .2, 1);
      }

      .n-drawer.slide-in-from-bottom-transition-enter-to {
        transform: translateY(0);
      }

      .n-drawer.slide-in-from-bottom-transition-enter-from {
        transform: translateY(100%);
      }

      .n-drawer.slide-in-from-bottom-transition-leave-from {
        transform: translateY(0);
      }

      .n-drawer.slide-in-from-bottom-transition-leave-to {
        transform: translateY(100%);
      }

      .n-drawer.n-drawer--native-scrollbar .n-drawer-content-wrapper {
        overflow: auto;
        height: 100%;
      }

      .n-drawer .n-drawer-content-wrapper {
        box-sizing: border-box;
      }

      .n-drawer .n-drawer-content {
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .n-drawer .n-drawer-content.n-drawer-content--native-scrollbar .n-drawer-body-content-wrapper {
        height: 100%;
        overflow: auto;
      }

      .n-drawer .n-drawer-content .n-drawer-body {
        flex: 1 0 0;
        overflow: hidden;
      }

      .n-drawer .n-drawer-content .n-drawer-body-content-wrapper {
        box-sizing: border-box;
        padding: var(--n-body-padding);
      }

      .n-drawer .n-drawer-content .n-drawer-header {
        font-weight: var(--n-title-font-weight);
        line-height: 1;
        font-size: var(--n-title-font-size);
        color: var(--n-title-text-color);
        padding: var(--n-header-padding);
        transition: border .3s var(--n-bezier);
        border-bottom: 1px solid var(--n-divider-color);
        border-bottom: var(--n-header-border-bottom);
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .n-drawer .n-drawer-content .n-drawer-header .n-drawer-header__close {
        transition: color .3s var(--n-bezier);
        font-size: var(--n-close-size);
      }

      .n-drawer .n-drawer-content .n-drawer-footer {
        display: flex;
        justify-content: flex-end;
        border-top: var(--n-footer-border-top);
        transition: border .3s var(--n-bezier);
        padding: var(--n-footer-padding);
      }

      .n-drawer.n-drawer--right-placement {
        top: 0;
        bottom: 0;
        right: 0;
      }

      .n-drawer.n-drawer--left-placement {
        top: 0;
        bottom: 0;
        left: 0;
      }

      .n-drawer.n-drawer--top-placement {
        top: 0;
        left: 0;
        right: 0;
      }

      .n-drawer.n-drawer--bottom-placement {
        left: 0;
        bottom: 0;
        right: 0;
      }

      body>.n-drawer-container {
        position: fixed;
      }

      .n-drawer-container {
        position: relative;
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        pointer-events: none;
      }

      .n-drawer-container>* {
        pointer-events: all;
      }

      .n-drawer-mask {
        background-color: rgba(0, 0, 0, .3);
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }

      .n-drawer-mask.fade-in-transition-enter-active {
        transition: all 0.2s var(--n-bezier-in) !important;
      }

      .n-drawer-mask.fade-in-transition-leave-active {
        transition: all 0.2s var(--n-bezier-out) !important;
      }

      .n-drawer-mask.fade-in-transition-enter-from,
      .n-drawer-mask.fade-in-transition-leave-to {
        opacity: 0;
      }

      .n-drawer-mask.fade-in-transition-leave-from,
      .n-drawer-mask.fade-in-transition-enter-to {
        opacity: 1;
      }
    </style>
    <style cssr-id="n-menu">
      .n-menu {
        background-color: var(--n-color);
        color: var(--n-item-text-color);
        overflow: hidden;
        transition: background-color .3s var(--n-bezier);
        box-sizing: border-box;
        font-size: var(--n-font-size);
        padding-bottom: 6px;
      }

      .n-menu.n-menu--horizontal {
        display: inline-flex;
        padding-bottom: 0;
      }

      .n-menu.n-menu--horizontal .n-submenu {
        margin: 0;
      }

      .n-menu.n-menu--horizontal .n-menu-item {
        margin: 0;
      }

      .n-menu.n-menu--horizontal .n-menu-item-content {
        padding: 0 20px;
        border-bottom: 2px solid #0000;
      }

      .n-menu.n-menu--horizontal .n-menu-item-content::before {
        display: none;
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--selected {
        border-bottom: 2px solid var(--n-border-color-horizontal)
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content__icon {
        color: var(--n-item-icon-color-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content-header {
        color: var(--n-item-text-color-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content-header a {
        color: var(--n-item-text-color-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--child-active {
        border-bottom: 2px solid var(--n-border-color-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content-header {
        color: var(--n-item-text-color-child-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content-header a {
        color: var(--n-item-text-color-child-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-child-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content__icon {
        color: var(--n-item-icon-color-child-active-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content__icon,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content-header,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content-header {
        color: var(--n-item-text-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content-header a,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content-header .n-menu-item-content-header__extra,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content__icon,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content-header,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content-header {
        color: var(--n-item-text-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content-header a,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content-header .n-menu-item-content-header__extra,
      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-active-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover {
        border-bottom: 2px solid var(--n-border-color-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content-header {
        color: var(--n-item-text-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled):hover {
        border-bottom: 2px solid var(--n-border-color-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content-header {
        color: var(--n-item-text-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-hover-horizontal);
      }

      .n-menu.n-menu--horizontal .n-menu-item-content .n-menu-item-content-header a {
        color: var(--n-item-text-color-horizontal);
      }

      .n-menu.n-menu--collapsed .n-menu-item.n-menu-item--selected::before {
        background-color: var(--n-item-color-active-collapsed) !important;
      }

      .n-menu.n-menu--collapsed .n-menu-item-content .n-menu-item-content-header {
        opacity: 0;
      }

      .n-menu.n-menu--collapsed .n-menu-item-content .n-menu-item-content__arrow {
        opacity: 0;
      }

      .n-menu.n-menu--collapsed .n-menu-item-content .n-menu-item-content__icon {
        color: var(--n-item-icon-color-collapsed);
      }

      .n-menu .n-menu-item {
        height: var(--n-item-height);
        margin-top: 6px;
        position: relative;
      }

      .n-menu .n-menu-item-content {
        box-sizing: border-box;
        line-height: 1.75;
        height: 100%;
        display: grid;
        grid-template-areas: "icon content arrow";
        grid-template-columns: auto 1fr auto;
        align-items: center;
        cursor: pointer;
        position: relative;
        padding-right: 18px;
        transition:
          background-color .3s var(--n-bezier),
          padding-left .3s var(--n-bezier),
          border-color .3s var(--n-bezier);
      }

      .n-menu .n-menu-item-content>* {
        z-index: 1;
      }

      .n-menu .n-menu-item-content::before {
        z-index: auto;
        content: "";
        background-color: #0000;
        position: absolute;
        left: 8px;
        right: 8px;
        top: 0;
        bottom: 0;
        pointer-events: none;
        border-radius: var(--n-border-radius);
        transition: background-color .3s var(--n-bezier);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--disabled {
        opacity: .45;
        cursor: not-allowed;
      }

      .n-menu .n-menu-item-content.n-menu-item-content--collapsed .n-menu-item-content__arrow {
        transform: rotate(0);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--selected::before {
        background-color: var(--n-item-color-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content__arrow {
        color: var(--n-arrow-color-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content__icon {
        color: var(--n-item-icon-color-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content-header {
        color: var(--n-item-text-color-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content-header a {
        color: var(--n-item-text-color-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--selected .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content-header {
        color: var(--n-item-text-color-child-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content-header a {
        color: var(--n-item-text-color-child-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-child-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content__arrow {
        color: var(--n-arrow-color-child-active);
      }

      .n-menu .n-menu-item-content.n-menu-item-content--child-active .n-menu-item-content__icon {
        color: var(--n-item-icon-color-child-active);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content__arrow,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content__arrow {
        color: var(--n-arrow-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content__icon,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content-header,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content-header {
        color: var(--n-item-text-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content-header a,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover .n-menu-item-content-header .n-menu-item-content-header__extra,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active.n-menu-item-content--hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content__arrow,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content__arrow {
        color: var(--n-arrow-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content__icon,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content-header,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content-header {
        color: var(--n-item-text-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content-header a,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover .n-menu-item-content-header .n-menu-item-content-header__extra,
      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--child-active:hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected.n-menu-item-content--hover::before {
        background-color: var(--n-item-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--selected:hover::before {
        background-color: var(--n-item-color-active-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover::before {
        background-color: var(--n-item-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content__arrow {
        color: var(--n-arrow-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content-header {
        color: var(--n-item-text-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled).n-menu-item-content--hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled):hover::before {
        background-color: var(--n-item-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content__arrow {
        color: var(--n-arrow-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content__icon {
        color: var(--n-item-icon-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content-header {
        color: var(--n-item-text-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content-header a {
        color: var(--n-item-text-color-hover);
      }

      .n-menu .n-menu-item-content:not(.n-menu-item-content--disabled):hover .n-menu-item-content-header .n-menu-item-content-header__extra {
        color: var(--n-item-text-color-hover);
      }

      .n-menu .n-menu-item-content .n-menu-item-content__icon {
        grid-area: icon;
        color: var(--n-item-icon-color);
        transition:
          color .3s var(--n-bezier),
          font-size .3s var(--n-bezier),
          margin-right .3s var(--n-bezier);
        box-sizing: content-box;
        display: inline-flex;
        align-items: center;
        justify-content: center;
      }

      .n-menu .n-menu-item-content .n-menu-item-content__arrow {
        grid-area: arrow;
        font-size: 16px;
        color: var(--n-arrow-color);
        transform: rotate(180deg);
        opacity: 1;
        transition:
          color .3s var(--n-bezier),
          transform 0.2s var(--n-bezier),
          opacity 0.2s var(--n-bezier);
      }

      .n-menu .n-menu-item-content .n-menu-item-content-header {
        grid-area: content;
        transition:
          color .3s var(--n-bezier),
          opacity .3s var(--n-bezier);
        opacity: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        color: var(--n-item-text-color);
      }

      .n-menu .n-menu-item-content .n-menu-item-content-header a {
        text-decoration: none;
        transition: color .3s var(--n-bezier);
        color: var(--n-item-text-color);
      }

      .n-menu .n-menu-item-content .n-menu-item-content-header a::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }

      .n-menu .n-menu-item-content .n-menu-item-content-header .n-menu-item-content-header__extra {
        font-size: .93em;
        color: var(--n-group-text-color);
        transition: color .3s var(--n-bezier);
      }

      .n-menu .n-submenu {
        cursor: pointer;
        position: relative;
        margin-top: 6px;
      }

      .n-menu .n-submenu .n-menu-item-content {
        height: var(--n-item-height);
      }

      .n-menu .n-submenu .n-submenu-children {
        overflow: hidden;
        padding: 0;
      }

      .n-menu .n-submenu .n-submenu-children.fade-in-height-expand-transition-leave-from,
      .n-menu .n-submenu .n-submenu-children.fade-in-height-expand-transition-enter-to {
        opacity: 1;
      }

      .n-menu .n-submenu .n-submenu-children.fade-in-height-expand-transition-leave-to,
      .n-menu .n-submenu .n-submenu-children.fade-in-height-expand-transition-enter-from {
        opacity: 0;
        margin-top: 0 !important;
        margin-bottom: 0 !important;
      }

      .n-menu .n-submenu .n-submenu-children.fade-in-height-expand-transition-leave-active {
        overflow: hidden;
        transition:
          max-height .2s cubic-bezier(.4, 0, .2, 1) 0s,
          opacity .2s cubic-bezier(0, 0, .2, 1) 0s,
          margin-top .2s cubic-bezier(.4, 0, .2, 1) 0s,
          margin-bottom .2s cubic-bezier(.4, 0, .2, 1) 0s,
          padding-top .2s cubic-bezier(.4, 0, .2, 1) 0s,
          padding-bottom .2s cubic-bezier(.4, 0, .2, 1) 0s
      }

      .n-menu .n-submenu .n-submenu-children.fade-in-height-expand-transition-enter-active {
        overflow: hidden;
        transition:
          max-height .2s cubic-bezier(.4, 0, .2, 1),
          opacity .2s cubic-bezier(.4, 0, 1, 1),
          margin-top .2s cubic-bezier(.4, 0, .2, 1),
          margin-bottom .2s cubic-bezier(.4, 0, .2, 1),
          padding-top .2s cubic-bezier(.4, 0, .2, 1),
          padding-bottom .2s cubic-bezier(.4, 0, .2, 1)
      }

      .n-menu .n-menu-item-group .n-menu-item-group-title {
        margin-top: 6px;
        color: var(--n-group-text-color);
        cursor: default;
        font-size: .93em;
        height: 36px;
        display: flex;
        align-items: center;
        transition:
          padding-left .3s var(--n-bezier),
          color .3s var(--n-bezier);
      }

      .n-menu-tooltip a {
        color: inherit;
        text-decoration: none;
      }

      .n-menu-divider {
        transition: background-color .3s var(--n-bezier);
        background-color: var(--n-divider-color);
        height: 1px;
        margin: 6px 18px;
      }
    </style>
    <style cssr-id="n-scrollbar">
      .n-scrollbar {
        overflow: hidden;
        position: relative;
        z-index: auto;
        height: 100%;
        width: 100%;
      }

      .n-scrollbar>.n-scrollbar-container {
        width: 100%;
        overflow: scroll;
        height: 100%;
        max-height: inherit;
        scrollbar-width: none;
      }

      .n-scrollbar>.n-scrollbar-container::-webkit-scrollbar,
      .n-scrollbar>.n-scrollbar-container::-webkit-scrollbar-track-piece,
      .n-scrollbar>.n-scrollbar-container::-webkit-scrollbar-thumb {
        width: 0;
        height: 0;
        display: none;
      }

      .n-scrollbar>.n-scrollbar-container>.n-scrollbar-content {
        box-sizing: border-box;
        min-width: 100%;
      }

      .n-scrollbar>.n-scrollbar-rail {
        position: absolute;
        pointer-events: none;
        user-select: none;
      }

      .n-scrollbar>.n-scrollbar-rail.n-scrollbar-rail--horizontal {
        left: 2px;
        right: 2px;
        bottom: 4px;
        height: var(--n-scrollbar-height);
      }

      .n-scrollbar>.n-scrollbar-rail.n-scrollbar-rail--horizontal>.n-scrollbar-rail__scrollbar {
        height: var(--n-scrollbar-height);
        border-radius: var(--n-scrollbar-border-radius);
        right: 0;
      }

      .n-scrollbar>.n-scrollbar-rail.n-scrollbar-rail--vertical {
        right: 4px;
        top: 2px;
        bottom: 2px;
        width: var(--n-scrollbar-width);
      }

      .n-scrollbar>.n-scrollbar-rail.n-scrollbar-rail--vertical>.n-scrollbar-rail__scrollbar {
        width: var(--n-scrollbar-width);
        border-radius: var(--n-scrollbar-border-radius);
        bottom: 0;
      }

      .n-scrollbar>.n-scrollbar-rail.n-scrollbar-rail--disabled>.n-scrollbar-rail__scrollbar {
        pointer-events: none;
      }

      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar {
        position: absolute;
        cursor: pointer;
        pointer-events: all;
        background-color: var(--n-scrollbar-color);
        transition: background-color .2s var(--n-scrollbar-bezier);
      }

      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar.fade-in-transition-enter-active {
        transition: all 0.2s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar.fade-in-transition-leave-active {
        transition: all 0.2s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar.fade-in-transition-enter-from,
      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar.fade-in-transition-leave-to {
        opacity: 0;
      }

      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar.fade-in-transition-leave-from,
      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar.fade-in-transition-enter-to {
        opacity: 1;
      }

      .n-scrollbar>.n-scrollbar-rail>.n-scrollbar-rail__scrollbar:hover {
        background-color: var(--n-scrollbar-color-hover);
      }
    </style>
    <style cssr-id="n-layout-sider">
      .n-layout-sider {
        flex-shrink: 0;
        box-sizing: border-box;
        position: relative;
        z-index: 1;
        color: var(--n-text-color);
        transition:
          color .3s var(--n-bezier),
          border-color .3s var(--n-bezier),
          min-width .3s var(--n-bezier),
          max-width .3s var(--n-bezier),
          transform .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
        background-color: var(--n-color);
        display: flex;
        justify-content: flex-end;
      }

      .n-layout-sider.n-layout-sider--bordered .n-layout-sider__border {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 1px;
        background-color: var(--n-border-color);
        transition: background-color .3s var(--n-bezier);
      }

      .n-layout-sider .n-layout-sider__left-placement.n-layout-sider__left-placement--bordered .n-layout-sider__border {
        right: 0;
      }

      .n-layout-sider.n-layout-sider--right-placement {
        justify-content: flex-start;
      }

      .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--bordered .n-layout-sider__border {
        left: 0;
      }

      .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--collapsed .n-layout-toggle-button .n-base-icon {
        transform: rotate(180deg);
      }

      .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--collapsed .n-layout-toggle-bar:hover .n-layout-toggle-bar__top {
        transform: rotate(-12deg) scale(1.15) translateY(-2px);
      }

      .n-layout-sider.n-layout-sider--right-placement.n-layout-sider--collapsed .n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom {
        transform: rotate(12deg) scale(1.15) translateY(2px);
      }

      .n-layout-sider.n-layout-sider--right-placement .n-layout-toggle-button {
        left: 0;
        transform: translateX(-50%) translateY(-50%);
      }

      .n-layout-sider.n-layout-sider--right-placement .n-layout-toggle-button .n-base-icon {
        transform: rotate(0);
      }

      .n-layout-sider.n-layout-sider--right-placement .n-layout-toggle-bar {
        left: -28px;
        transform: rotate(180deg);
      }

      .n-layout-sider.n-layout-sider--right-placement .n-layout-toggle-bar:hover .n-layout-toggle-bar__top {
        transform: rotate(12deg) scale(1.15) translateY(-2px);
      }

      .n-layout-sider.n-layout-sider--right-placement .n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom {
        transform: rotate(-12deg) scale(1.15) translateY(2px);
      }

      .n-layout-sider.n-layout-sider--collapsed .n-layout-toggle-bar:hover .n-layout-toggle-bar__top {
        transform: rotate(-12deg) scale(1.15) translateY(-2px);
      }

      .n-layout-sider.n-layout-sider--collapsed .n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom {
        transform: rotate(12deg) scale(1.15) translateY(2px);
      }

      .n-layout-sider.n-layout-sider--collapsed .n-layout-toggle-button .n-base-icon {
        transform: rotate(0);
      }

      .n-layout-sider .n-layout-toggle-button {
        transition:
          color .3s var(--n-bezier),
          right .3s var(--n-bezier),
          left .3s var(--n-bezier),
          border-color .3s var(--n-bezier),
          background-color .3s var(--n-bezier);
        cursor: pointer;
        width: 24px;
        height: 24px;
        position: absolute;
        top: 50%;
        right: 0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        color: var(--n-toggle-button-icon-color);
        border: var(--n-toggle-button-border);
        background-color: var(--n-toggle-button-color);
        box-shadow: 0 2px 4px 0px rgba(0, 0, 0, .06);
        transform: translateX(50%) translateY(-50%);
        z-index: 1;
      }

      .n-layout-sider .n-layout-toggle-button .n-base-icon {
        transition: transform .3s var(--n-bezier);
        transform: rotate(180deg);
      }

      .n-layout-sider .n-layout-toggle-bar {
        cursor: pointer;
        height: 72px;
        width: 32px;
        position: absolute;
        top: calc(50% - 36px);
        right: -28px;
      }

      .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__top,
      .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__bottom {
        position: absolute;
        width: 4px;
        border-radius: 2px;
        height: 38px;
        left: 14px;
        transition:
          background-color .3s var(--n-bezier),
          transform .3s var(--n-bezier);
      }

      .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__bottom {
        position: absolute;
        top: 34px;
      }

      .n-layout-sider .n-layout-toggle-bar:hover .n-layout-toggle-bar__top {
        transform: rotate(12deg) scale(1.15) translateY(-2px);
      }

      .n-layout-sider .n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom {
        transform: rotate(-12deg) scale(1.15) translateY(2px);
      }

      .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__top,
      .n-layout-sider .n-layout-toggle-bar .n-layout-toggle-bar__bottom {
        background-color: var(--n-toggle-bar-color);
      }

      .n-layout-sider .n-layout-toggle-bar:hover .n-layout-toggle-bar__top,
      .n-layout-sider .n-layout-toggle-bar:hover .n-layout-toggle-bar__bottom {
        background-color: var(--n-toggle-bar-color-hover);
      }

      .n-layout-sider .n-layout-sider__border {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 1px;
        transition: background-color .3s var(--n-bezier);
      }

      .n-layout-sider .n-layout-sider-scroll-container {
        flex-grow: 1;
        flex-shrink: 0;
        box-sizing: border-box;
        height: 100%;
        opacity: 0;
        transition: opacity .3s var(--n-bezier);
        max-width: 100%;
      }

      .n-layout-sider.n-layout-sider--show-content .n-layout-sider-scroll-container {
        opacity: 1;
      }

      .n-layout-sider.n-layout-sider--absolute-positioned {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
      }
    </style>
    <style cssr-id="n-layout">
      .n-layout {
        color: var(--n-text-color);
        background-color: var(--n-color);
        box-sizing: border-box;
        position: relative;
        z-index: auto;
        flex: auto;
        overflow: hidden;
        transition:
          box-shadow .3s var(--n-bezier),
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier);
      }

      .n-layout .n-layout-scroll-container {
        overflow-x: hidden;
        box-sizing: border-box;
        height: 100%;
      }

      .n-layout.n-layout--absolute-positioned {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
      }
    </style>
    <style cssr-id="n-notification">
      .n-notification-container {
        z-index: 4000;
        position: fixed;
        overflow: visible;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
      }

      .n-notification-container>.n-scrollbar {
        width: initial;
        overflow: visible;
        height: -moz-fit-content !important;
        height: fit-content !important;
        max-height: 100vh !important;
      }

      .n-notification-container>.n-scrollbar>.n-scrollbar-container {
        height: -moz-fit-content !important;
        height: fit-content !important;
        max-height: 100vh !important;
      }

      .n-notification-container>.n-scrollbar>.n-scrollbar-container .n-scrollbar-content {
        padding-top: 12px;
        padding-bottom: 33px;
      }

      .n-notification-container.n-notification-container--top-right .n-notification,
      .n-notification-container.n-notification-container--bottom-right .n-notification {
        margin-left: 28px;
        margin-right: 16px;
      }

      .n-notification-container.n-notification-container--top-left .n-notification,
      .n-notification-container.n-notification-container--bottom-left .n-notification {
        margin-left: 16px;
        margin-right: 28px;
      }

      .n-notification-container.n-notification-container--top-right {
        right: 0;
        top: 12px;
      }

      .n-notification-container.n-notification-container--top-right .n-notification.notification-transition-enter-from,
      .n-notification-container.n-notification-container--top-right .n-notification.notification-transition-leave-to {
        transform: translate(calc(100%), 0);
      }

      .n-notification-container.n-notification-container--top-right .n-notification.notification-transition-leave-from,
      .n-notification-container.n-notification-container--top-right .n-notification.notification-transition-enter-to {
        transform: translate(0, 0);
      }

      .n-notification-container.n-notification-container--top-left {
        left: 0;
        top: 12px;
      }

      .n-notification-container.n-notification-container--top-left .n-notification.notification-transition-enter-from,
      .n-notification-container.n-notification-container--top-left .n-notification.notification-transition-leave-to {
        transform: translate(calc(-100%), 0);
      }

      .n-notification-container.n-notification-container--top-left .n-notification.notification-transition-leave-from,
      .n-notification-container.n-notification-container--top-left .n-notification.notification-transition-enter-to {
        transform: translate(0, 0);
      }

      .n-notification-container.n-notification-container--bottom-right {
        right: 0;
        bottom: 12px;
      }

      .n-notification-container.n-notification-container--bottom-right .n-notification.notification-transition-enter-from,
      .n-notification-container.n-notification-container--bottom-right .n-notification.notification-transition-leave-to {
        transform: translate(calc(100%), 0);
      }

      .n-notification-container.n-notification-container--bottom-right .n-notification.notification-transition-leave-from,
      .n-notification-container.n-notification-container--bottom-right .n-notification.notification-transition-enter-to {
        transform: translate(0, 0);
      }

      .n-notification-container.n-notification-container--bottom-left {
        left: 0;
        bottom: 12px;
      }

      .n-notification-container.n-notification-container--bottom-left .n-notification.notification-transition-enter-from,
      .n-notification-container.n-notification-container--bottom-left .n-notification.notification-transition-leave-to {
        transform: translate(calc(-100%), 0);
      }

      .n-notification-container.n-notification-container--bottom-left .n-notification.notification-transition-leave-from,
      .n-notification-container.n-notification-container--bottom-left .n-notification.notification-transition-enter-to {
        transform: translate(0, 0);
      }

      .n-notification-container.n-notification-container--scrollable.n-notification-container--top-right {
        top: 0;
      }

      .n-notification-container.n-notification-container--scrollable.n-notification-container--top-left {
        top: 0;
      }

      .n-notification-container.n-notification-container--scrollable.n-notification-container--bottom-right {
        bottom: 0;
      }

      .n-notification-container.n-notification-container--scrollable.n-notification-container--bottom-left {
        bottom: 0;
      }

      .n-notification-container .n-notification.notification-transition-enter-from,
      .n-notification-container .n-notification.notification-transition-leave-to {
        opacity: 0;
        margin-bottom: 0 !important;
      }

      .n-notification-container .n-notification.notification-transition-leave-from,
      .n-notification-container .n-notification.notification-transition-enter-to {
        opacity: 1;
      }

      .n-notification-container .n-notification.notification-transition-leave-active {
        transition:
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier),
          opacity .3s var(--n-bezier),
          transform .3s var(--n-bezier-ease-in),
          max-height .3s var(--n-bezier),
          margin-bottom .3s linear,
          box-shadow .3s var(--n-bezier);
      }

      .n-notification-container .n-notification {
        background-color: var(--n-color);
        color: var(--n-text-color);
        transition:
          background-color .3s var(--n-bezier),
          color .3s var(--n-bezier),
          opacity .3s var(--n-bezier),
          transform .3s var(--n-bezier-ease-out),
          max-height .3s var(--n-bezier),
          margin-bottom .3s linear,
          box-shadow .3s var(--n-bezier);
        font-family: inherit;
        font-size: var(--n-font-size);
        font-weight: 400;
        position: relative;
        display: flex;
        overflow: hidden;
        flex-shrink: 0;
        margin-bottom: 12px;
        padding-left: var(--n-padding-left);
        padding-right: var(--n-padding-right);
        width: var(--n-width);
        border-radius: var(--n-border-radius);
        box-shadow: var(--n-box-shadow);
        box-sizing: border-box;
        opacity: 1;
      }

      .n-notification-container .n-notification .n-notification__avatar .n-icon {
        color: var(--n-icon-color);
      }

      .n-notification-container .n-notification .n-notification__avatar .n-base-icon {
        color: var(--n-icon-color);
      }

      .n-notification-container .n-notification.n-notification--show-avatar .n-notification-main {
        margin-left: 40px;
        width: calc(100% - 40px);
      }

      .n-notification-container .n-notification.n-notification--closable .n-notification-main>*:first-child {
        padding-right: 20px;
      }

      .n-notification-container .n-notification.n-notification--closable .n-notification__close {
        position: absolute;
        top: 0;
        right: 0;
        margin: var(--n-close-margin);
        font-size: var(--n-close-size);
        transition: color .3s var(--n-bezier);
      }

      .n-notification-container .n-notification .n-notification__avatar {
        position: absolute;
        top: var(--n-padding-top);
        left: var(--n-padding-left);
        width: 28px;
        height: 28px;
        font-size: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .n-notification-container .n-notification .n-notification__avatar .n-icon {
        transition: color .3s var(--n-bezier);
      }

      .n-notification-container .n-notification .n-notification-main {
        padding-top: var(--n-padding-top);
        padding-bottom: var(--n-padding-bottom);
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        margin-left: 8px;
        width: calc(100% - 8px);
      }

      .n-notification-container .n-notification .n-notification-main .n-notification-main-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 12px;
      }

      .n-notification-container .n-notification .n-notification-main .n-notification-main-footer .n-notification-main-footer__meta {
        font-size: 12px;
        transition: color .3s var(--n-bezier-ease-out);
        color: var(--n-description-text-color);
      }

      .n-notification-container .n-notification .n-notification-main .n-notification-main-footer .n-notification-main-footer__action {
        cursor: pointer;
        transition: color .3s var(--n-bezier-ease-out);
        color: var(--n-action-text-color);
      }

      .n-notification-container .n-notification .n-notification-main .n-notification-main__header {
        font-weight: var(--n-title-font-weight);
        font-size: 16px;
        transition: color .3s var(--n-bezier-ease-out);
        color: var(--n-title-text-color);
      }

      .n-notification-container .n-notification .n-notification-main .n-notification-main__description {
        margin-top: 8px;
        font-size: 12px;
        transition: color .3s var(--n-bezier-ease-out);
        color: var(--n-description-text-color);
      }

      .n-notification-container .n-notification .n-notification-main .n-notification-main__content {
        line-height: var(--n-line-height);
        margin: 12px 0 0 0;
        font-family: inherit;
        white-space: pre-wrap;
        word-wrap: break-word;
        transition: color .3s var(--n-bezier-ease-out);
        color: var(--n-text-color);
      }

      .n-notification-container .n-notification .n-notification-main .n-notification-main__content:first-child {
        margin: 0;
      }
    </style>
    <style cssr-id="n-global">
      body {
        margin: 0;
        font-size: 14px;
        font-family: v-sans, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        line-height: 1.6;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent;
      }

      body input {
        font-family: inherit;
        font-size: inherit;
      }
    </style>
    <style cssr-id="n-loading-bar">
      .n-loading-bar-container {
        z-index: 5999;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
      }

      .n-loading-bar-container.fade-in-transition-enter-active {
        transition: all 0.3s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-loading-bar-container.fade-in-transition-leave-active {
        transition: all 0.8s cubic-bezier(.4, 0, .2, 1) !important;
      }

      .n-loading-bar-container.fade-in-transition-enter-from,
      .n-loading-bar-container.fade-in-transition-leave-to {
        opacity: 0;
      }

      .n-loading-bar-container.fade-in-transition-leave-from,
      .n-loading-bar-container.fade-in-transition-enter-to {
        opacity: 1;
      }

      .n-loading-bar-container .n-loading-bar {
        width: 100%;
        transition:
          max-width 4s linear,
          background .2s linear;
        height: var(--n-height);
      }

      .n-loading-bar-container .n-loading-bar.n-loading-bar--starting {
        background: var(--n-color-loading);
      }

      .n-loading-bar-container .n-loading-bar.n-loading-bar--finishing {
        background: var(--n-color-loading);
        transition:
          max-width .2s linear,
          background .2s linear;
      }

      .n-loading-bar-container .n-loading-bar.n-loading-bar--error {
        background: var(--n-color-error);
        transition:
          max-width .2s linear,
          background .2s linear;
      }
    </style>