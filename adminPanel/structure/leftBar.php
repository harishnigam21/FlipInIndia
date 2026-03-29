</head>
  <body>
  <section id="container" >
      <header class="header blue-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="<?php echo constant("BASE_URL_ADMIN") ?>dashboard" class="logo"><b><?php echo $sessData['loggedAs'];?> Account</b></a>
         <div class="top-menu">
            	<ul class="nav pull-right top-menu" style="margin-top: 1%;">
                    <li class=" dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                        <i class="material-icons" style="margin-top: 5px;margin-right: -25px;">person</i> 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li> <?php echo "<span style='color: black;font-size: 1.25em;margin-left: 15%;'> Hi. ".$sessData['name']."</span>"; ?></li>
                         <li class="divider"></li>
                        <li><a href="<?php echo constant("BASE_URL_ADMIN")?>profile/myProfile "><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="<?php echo constant("BASE_URL_ADMIN")?>profile/myProfile "><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo constant("BASE_URL_ADMIN") ?>logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            	</ul>

            </div>
      </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
               	
                  <li class="mt">
                      <a <?php echo ($dirFile == 'dashboard' ? $errorH : '' ); ?> href="<?php echo constant("BASE_URL_ADMIN") ?>dashboard">
                          <i class="material-icons mat-menu">dashboard</i> 
                          <span class="menu-font">Dashboard</span>
                      </a>
                  </li>  
                  <li  class="sub-menu">
                      <a <?php echo ($dir == 'profile' ? $errorH : '' ); ?> href="<?php echo constant("BASE_URL_ADMIN")?>profile/myProfile ">
                          <i class="material-icons mat-menu">account_circle</i> 
                          <span class="menu-font">Profile</span>
                      </a>
                  </li>
                  <li  class="sub-menu">
                      <a <?php echo ($dir == 'testimonial' ? $errorH : '' ); ?> href="<?php echo constant("BASE_URL_ADMIN")?>testimonial/testimonial ">
                          <i class="fa fa-quote-left" aria-hidden="true"></i> 
                          <span class="menu-font">Testimonial</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a <?php echo ($dir == 'mystore' ? $errorH : '' ); ?> href="javascript:;" >
                          <i class="material-icons mat-menu">reorder</i>
                          <span class="menu-font">Updates Website </span>
                      </a>
                      <ul class="sub">
                          <li <?php echo ($dirFile == 'store' ? $errorH : '' ); ?>>
                            <a  href="<?php echo constant("BASE_URL_ADMIN") ?>mystore/store">
                              <i class="material-icons mat-submenu">done_all</i>
                              <span class="submenu-font">Contact Details</span>
                            </a>
                          </li>
                          <li <?php echo ($dirFile == 'storeBanners' ? $errorH : '' ); ?>>
                            <a  href="<?php echo constant("BASE_URL_ADMIN") ?>mystore/storeBanners">
                              <i class="material-icons mat-submenu">photo</i>
                              <span class="submenu-font">Slider Banner</span>
                            </a>
                          </li>
                        </ul>
                  </li>
                 
                   <li  class="sub-menu">
                      <a <?php echo ($dir == 'pickup' ? $errorH : '' ); ?> href="<?php echo constant("BASE_URL_ADMIN")?>pickup/pick-up">
                          <i class="material-icons mat-menu">place</i> 
                          <span class="menu-font">Pickup Point</span>
                      </a>
                  </li>
                 
                  <li  class="sub-menu">
                      <a <?php echo ($dir == 'contact' ? $errorH : '' ); ?> href="<?php echo constant("BASE_URL_ADMIN")?>contact/contact-us">
                          <i class="material-icons mat-menu">phone</i> 
                          <span class="menu-font">Contact Us</span>
                      </a>
                  </li>



              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->