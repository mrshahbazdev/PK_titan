<aside class="n-layout-sider n-layout-sider--absolute-positioned n-layout-sider--left-placement n-layout-sider--show-content layout-sider" data-v-d9b27248="" style="--n-bezier: cubic-bezier(.4, 0, .2, 1); --n-toggle-button-color: #FFF; --n-toggle-button-border: 1px solid rgb(239, 239, 245); --n-toggle-bar-color: rgba(191, 191, 191, 1); --n-toggle-bar-color-hover: rgba(153, 153, 153, 1); --n-color: rgb(0, 20, 40); --n-text-color: #FFF; --n-border-color: rgb(0, 20, 40); --n-toggle-button-icon-color: rgb(51, 54, 57); max-width: 200px; width: 200px;">
              <div role="none" class="n-scrollbar" style="--n-scrollbar-bezier: cubic-bezier(.4, 0, .2, 1); --n-scrollbar-color: rgba(255, 255, 255, .3); --n-scrollbar-color-hover: rgba(255, 255, 255, .4); --n-scrollbar-border-radius: 5px; --n-scrollbar-width: 5px; --n-scrollbar-height: 5px;">
                <div role="none" class="n-scrollbar-container">
                  <div role="none" class="n-scrollbar-content">
                    <div class="logo" data-v-7db71d84="" data-v-d9b27248="">
                      <h2 class="title text-xl font-medium" data-v-7db71d84="">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;"><?php echo $_SESSION['roleName']; ?></font>
                        </font>
                      </h2>
                    </div>
                    <div role="menu" class="n-menu n-menu--vertical" data-v-6fa877b1="" data-v-d9b27248="" style="--n-divider-color: rgb(239, 239, 245); --n-bezier: cubic-bezier(.4, 0, .2, 1); --n-font-size: 14px; --n-border-color-horizontal: #0000; --n-border-radius: 3px; --n-item-height: 42px; --n-group-text-color: #AAA; --n-color: #0000; --n-item-text-color: #BBB; --n-item-text-color-hover: #FFF; --n-item-text-color-active: #FFF; --n-item-text-color-child-active: #FFF; --n-item-text-color-active-hover: #FFF; --n-item-icon-color: #BBB; --n-item-icon-color-hover: #FFF; --n-item-icon-color-active: #FFF; --n-item-icon-color-active-hover: #FFF; --n-item-icon-color-child-active: #FFF; --n-item-icon-color-collapsed: #BBB; --n-item-text-color-horizontal: #BBB; --n-item-text-color-hover-horizontal: #FFF; --n-item-text-color-active-horizontal: #FFF; --n-item-text-color-child-active-horizontal: #FFF; --n-item-text-color-active-hover-horizontal: #FFF; --n-item-icon-color-horizontal: #BBB; --n-item-icon-color-hover-horizontal: #FFF; --n-item-icon-color-active-horizontal: #FFF; --n-item-icon-color-active-hover-horizontal: #FFF; --n-item-icon-color-child-active-horizontal: #FFF; --n-arrow-color: #BBB; --n-arrow-color-hover: #FFF; --n-arrow-color-active: #FFF; --n-arrow-color-active-hover: #FFF; --n-arrow-color-child-active: #FFF; --n-item-color-hover: #0000; --n-item-color-active: #2d8cf0; --n-item-color-active-hover: #2d8cf0; --n-item-color-active-collapsed: #2d8cf0;">
                      <!---->
                      <div class="n-submenu" role="menuitem" aria-expanded="true">
                        <div role="none" class="n-menu-item-content n-menu-item-content--child-active" style="padding-left: 24px;">
                          <div class="n-menu-item-content__icon" role="none" style="width: 20px; height: 20px; font-size: 20px; margin-right: 8px;">
                            <i role="img" class="n-icon" style="--n-bezier: cubic-bezier(.4, 0, .2, 1);">
                              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1024 1024">
                                <path d="M928 140H96c-17.7 0-32 14.3-32 32v496c0 17.7 14.3 32 32 32h380v112H304c-8.8 0-16 7.2-16 16v48c0 4.4 3.6 8 8 8h432c4.4 0 8-3.6 8-8v-48c0-8.8-7.2-16-16-16H548V700h380c17.7 0 32-14.3 32-32V172c0-17.7-14.3-32-32-32zm-40 488H136V212h752v416z" fill="currentColor"></path>
                              </svg>
                            </i>
                          </div>
                          <div class="n-menu-item-content-header" role="none">System Administration
                            <!---->
                          </div>
                          <i class="n-base-icon n-menu-item-content__arrow" aria-hidden="true">
                            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.20041 5.73966C3.48226 5.43613 3.95681 5.41856 4.26034 5.70041L8 9.22652L11.7397 5.70041C12.0432 5.41856 12.5177 5.43613 12.7996 5.73966C13.0815 6.0432 13.0639 6.51775 12.7603 6.7996L8.51034 10.7996C8.22258 11.0668 7.77743 11.0668 7.48967 10.7996L3.23966 6.7996C2.93613 6.51775 2.91856 6.0432 3.20041 5.73966Z" fill="currentColor"></path>
                            </svg>
                          </i>
                        </div>
                        <div class="n-submenu-children" role="menu" style="">

                          <?php 
                            $ur = $this->uri->segment(1);
                            $uris = $this->uri->segment(2);
                            $this->db->where('name',$ur);
                            $query = $this->db->get('adminsidemenu');
                            if ($query->num_rows() > 0) {
                                $menus = $query->row()->menu;
                                $ar = json_decode($menus, TRUE);
                                foreach ($ar as $key => $value) {
                                  
                                
                           ?>
                          <a href="<?php echo $ur; ?>/<?php echo $key; ?>">
                          <div role="menuitem" class="n-menu-item">
                            <!---->
                            <div role="none" class="n-menu-item-content <?php if($key == $uris){
                              echo 'n-menu-item-content--selected';
                            } ?>" style="padding-left: 48px;">
                              <div class="n-menu-item-content__icon" role="none" style="width: 20px; height: 20px; font-size: 20px; margin-right: 8px;">
                                
                              </div>
                              <div class="n-menu-item-content-header" role="none">
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;"><?php echo $value; ?></font>
                                </font>
                                <!---->
                              </div>
                              <!---->
                            </div>
                            <!---->
                          </div>
                          </a>
                          <?php 

                            }
                          }
                           ?>

                        </div>
                      </div>
                      <!---->
                    </div>
                  </div>
                </div>
                <div class="n-scrollbar-rail n-scrollbar-rail--vertical n-scrollbar-rail--disabled" aria-hidden="true">
                  <!---->
                </div>
                <div class="n-scrollbar-rail n-scrollbar-rail--horizontal n-scrollbar-rail--disabled" aria-hidden="true">
                  <!---->
                </div>
              </div>
              <div class="n-layout-toggle-bar">
                <div class="n-layout-toggle-bar__top"></div>
                <div class="n-layout-toggle-bar__bottom"></div>
              </div>
              <!---->
            </aside>