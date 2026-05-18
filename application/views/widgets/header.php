<div class="layout-header" data-v-1c578b32="">
                    <div class="layout-header-left" data-v-1c578b32="">
                      <!---->
                      
                      <div role="menubar" class="n-menu n-menu--horizontal" data-v-6fa877b1="" data-v-1c578b32="" style="--n-divider-color: rgb(239, 239, 245); --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-font-size: 14px; --n-border-color-horizontal: #0000; --n-border-radius: 3px; --n-item-height: 42px; --n-group-text-color: #AAA; --n-color: #0000; --n-item-text-color: #BBB; --n-item-text-color-hover: #FFF; --n-item-text-color-active: #FFF; --n-item-text-color-child-active: #FFF; --n-item-text-color-active-hover: #FFF; --n-item-icon-color: #BBB; --n-item-icon-color-hover: #FFF; --n-item-icon-color-active: #FFF; --n-item-icon-color-active-hover: #FFF; --n-item-icon-color-child-active: #FFF; --n-item-icon-color-collapsed: #BBB; --n-item-text-color-horizontal: #BBB; --n-item-text-color-hover-horizontal: #FFF; --n-item-text-color-active-horizontal: #FFF; --n-item-text-color-child-active-horizontal: #FFF; --n-item-text-color-active-hover-horizontal: #FFF; --n-item-icon-color-horizontal: #BBB; --n-item-icon-color-hover-horizontal: #FFF; --n-item-icon-color-active-horizontal: #FFF; --n-item-icon-color-active-hover-horizontal: #FFF; --n-item-icon-color-child-active-horizontal: #FFF; --n-arrow-color: #BBB; --n-arrow-color-hover: #FFF; --n-arrow-color-active: #FFF; --n-arrow-color-active-hover: #FFF; --n-arrow-color-child-active: #FFF; --n-item-color-hover: #0000; --n-item-color-active: #2d8cf0; --n-item-color-active-hover: #2d8cf0; --n-item-color-active-collapsed: #2d8cf0;">
                        <?php if ($_SESSION['frontPage'] == 1) {
                        ?>
                        <a href="dashboard/console">
                        <div role="menuitem" class="n-menu-item">
                          <!---->
                          <div role="none" class="n-menu-item-content">
                            <!---->
                            <div class="n-menu-item-content-header" role="none">Home
                              <!---->
                            </div>
                            <!---->
                          </div>
                          <!---->
                        </div></a>
                        <?php }
                          
                         ?>
                        <a href="systems/setting">
                        <div role="menuitem" class="n-menu-item">
                          <?php $uri = $this->uri->segment(1); ?>
                          <div role="none" class="n-menu-item-content <?php if ($uri == 'systems') {
                          echo 'n-menu-item-content--selected';
                        } ?>">
                            <div class="n-menu-item-content__icon" role="none" style="width: 20px; height: 20px; font-size: 20px; margin-right: 8px;">
                              <i role="img" class="n-icon" style="--n-bezier: cubic-bezier(.4, 0, .2, 1);">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                                  <path d="M928 140H96c-17.7 0-32 14.3-32 32v496c0 17.7 14.3 32 32 32h380v112H304c-8.8 0-16 7.2-16 16v48c0 4.4 3.6 8 8 8h432c4.4 0 8-3.6 8-8v-48c0-8.8-7.2-16-16-16H548V700h380c17.7 0 32-14.3 32-32V172c0-17.7-14.3-32-32-32zm-40 488H136V212h752v416z" fill="currentColor"></path>
                                </svg>
                              </i>
                            </div>
                            <div class="n-menu-item-content-header" role="none">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">System Administration</font>
                              </font>
                              <!---->
                            </div>
                            <!---->
                          </div>
                          <!---->
                        </div></a>

                        <a href="mall/swiper">
                        <div role="menuitem" class="n-menu-item">
                          <!---->
                          <div role="none" class="n-menu-item-content <?php if ($uri == 'mall') {
                          echo 'n-menu-item-content--selected';
                        } ?>">
                            <div class="n-menu-item-content__icon" role="none" style="width: 20px; height: 20px; font-size: 20px; margin-right: 8px;">
                              <i role="img" class="n-icon" style="--n-bezier: cubic-bezier(.4, 0, .2, 1);">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                                  <path d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 0 0-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM512 196.7l271.1 197.2H240.9L512 196.7zM264 462h117v374H264V462zm189 0h117v374H453V462zm307 374H642V462h118v374z" fill="currentColor"></path>
                                </svg>
                              </i>
                            </div>
                            <div class="n-menu-item-content-header" role="none">Mall Management
                              <!---->
                            </div>
                            <!---->
                          </div>
                          <!---->
                        </div>
                        </a>
                      <?php 
                        $uri = $this->uri->segment(1);
                       ?>
                        <a href="member/list">
                        <div role="menuitem" class="n-menu-item">
                          <!---->
                          <div role="none" class="n-menu-item-content <?php if ($uri == 'member') {
                          echo 'n-menu-item-content--selected';
                        } ?>">
                            <div class="n-menu-item-content__icon" role="none" style="width: 20px; height: 20px; font-size: 20px; margin-right: 8px;">
                              <i role="img" class="n-icon" style="--n-bezier: cubic-bezier(.4, 0, .2, 1);">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                                  <path d="M824.2 699.9a301.55 301.55 0 0 0-86.4-60.4C783.1 602.8 812 546.8 812 484c0-110.8-92.4-201.7-203.2-200c-109.1 1.7-197 90.6-197 200c0 62.8 29 118.8 74.2 155.5a300.95 300.95 0 0 0-86.4 60.4C345 754.6 314 826.8 312 903.8a8 8 0 0 0 8 8.2h56c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5A226.62 226.62 0 0 1 612 684c60.9 0 118.2 23.7 161.3 66.8C814.5 792 838 846.3 840 904.3c.1 4.3 3.7 7.7 8 7.7h56a8 8 0 0 0 8-8.2c-2-77-33-149.2-87.8-203.9zM612 612c-34.2 0-66.4-13.3-90.5-37.5a126.86 126.86 0 0 1-37.5-91.8c.3-32.8 13.4-64.5 36.3-88c24-24.6 56.1-38.3 90.4-38.7c33.9-.3 66.8 12.9 91 36.6c24.8 24.3 38.4 56.8 38.4 91.4c0 34.2-13.3 66.3-37.5 90.5A127.3 127.3 0 0 1 612 612zM361.5 510.4c-.9-8.7-1.4-17.5-1.4-26.4c0-15.9 1.5-31.4 4.3-46.5c.7-3.6-1.2-7.3-4.5-8.8c-13.6-6.1-26.1-14.5-36.9-25.1a127.54 127.54 0 0 1-38.7-95.4c.9-32.1 13.8-62.6 36.3-85.6c24.7-25.3 57.9-39.1 93.2-38.7c31.9.3 62.7 12.6 86 34.4c7.9 7.4 14.7 15.6 20.4 24.4c2 3.1 5.9 4.4 9.3 3.2c17.6-6.1 36.2-10.4 55.3-12.4c5.6-.6 8.8-6.6 6.3-11.6c-32.5-64.3-98.9-108.7-175.7-109.9c-110.9-1.7-203.3 89.2-203.3 199.9c0 62.8 28.9 118.8 74.2 155.5c-31.8 14.7-61.1 35-86.5 60.4c-54.8 54.7-85.8 126.9-87.8 204a8 8 0 0 0 8 8.2h56.1c4.3 0 7.9-3.4 8-7.7c1.9-58 25.4-112.3 66.7-153.5c29.4-29.4 65.4-49.8 104.7-59.7c3.9-1 6.5-4.7 6-8.7z" fill="currentColor"></path>
                                </svg>
                              </i>
                            </div>
                            <div class="n-menu-item-content-header" role="none">Member Management
                              <!---->
                            </div>
                            <!---->
                          </div>
                          <!---->
                        </div>
                      </a>
                    
                        <a href="trade/withdraw">
                        <div role="menuitem" class="n-menu-item">
                          <!---->
                          <div role="none" class="n-menu-item-content <?php if ($uri == 'trade') {
                          echo 'n-menu-item-content--selected';
                        } ?>">
                            <div class="n-menu-item-content__icon" role="none" style="width: 20px; height: 20px; font-size: 20px; margin-right: 8px;">
                              <i role="img" class="n-icon" style="--n-bezier: cubic-bezier(.4, 0, .2, 1);">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                                  <path d="M342 472h342c.4 0 .9 0 1.3-.1c4.4-.7 7.3-4.8 6.6-9.2l-40.2-248c-.6-3.9-4-6.7-7.9-6.7H382.2c-3.9 0-7.3 2.8-7.9 6.7l-40.2 248c-.1.4-.1.9-.1 1.3c0 4.4 3.6 8 8 8zm91.2-196h159.5l20.7 128h-201l20.8-128zm2.5 282.7c-.6-3.9-4-6.7-7.9-6.7H166.2c-3.9 0-7.3 2.8-7.9 6.7l-40.2 248c-.1.4-.1.9-.1 1.3c0 4.4 3.6 8 8 8h342c.4 0 .9 0 1.3-.1c4.4-.7 7.3-4.8 6.6-9.2l-40.2-248zM196.5 748l20.7-128h159.5l20.7 128H196.5zm709.4 58.7l-40.2-248c-.6-3.9-4-6.7-7.9-6.7H596.2c-3.9 0-7.3 2.8-7.9 6.7l-40.2 248c-.1.4-.1.9-.1 1.3c0 4.4 3.6 8 8 8h342c.4 0 .9 0 1.3-.1c4.3-.7 7.3-4.8 6.6-9.2zM626.5 748l20.7-128h159.5l20.7 128H626.5z" fill="currentColor"></path>
                                </svg>
                              </i>
                            </div>
                            <div class="n-menu-item-content-header" role="none">Trade Management
                              <!---->
                            </div>
                            <!---->
                          </div>
                        </a>
                      <?php ?>
                          <!---->
                        </div>
                      </div>
                    </div>
                    <div class="dropdown btn btn-primary">
                        <div data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="dropdown-toggle" class="avatar" data-v-1c578b32=""><span class="n-avatar" data-v-1c578b32="" id="dropdownMenuButton"
                        data-mdb-toggle="dropdown"
                        aria-expanded="false" style="--n-font-size: 14px; --n-border: none; --n-border-radius: 50%; --n-color: rgba(204, 204, 204, 1); --n-color-modal: rgba(204, 204, 204, 1); --n-color-popover: rgba(204, 204, 204, 1); --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-merged-size: var(--n-avatar-size-override, 34px);"><span class="n-avatar__text" style="transform: translateX(-50%) translateY(-50%) scale(0.805263);"> </span></span></div>
                     
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Personal Setting</a></li>
                        <li><a class="dropdown-item" href="auth/logout">Logout</a></li>
                      </ul>
                    </div>
                   
                  </div>
                 
                  
<style>
  .n-layout-sider.n-layout-sider--absolute-positioned{
    position: relative !important;
  }
  .n-layout-header.n-layout-header--absolute-positioned{
    position: relative !important;
  }
  .dropdown, .dropdown-center, .dropend, .dropstart, .dropup, .dropup-center {
    position: absolute;
    right: 120px !important;
    top: 10px !important;
}
.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
                          /*Without this, clicking will make it sticky*/
 pointer-events: none;
 }

</style>