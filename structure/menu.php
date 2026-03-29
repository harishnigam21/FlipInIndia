</head>
    <body>
  
        
        <header class="header header-sticky header-light">
            <nav class="navbar navbar-expand-lg yamm">
                <div class="container" style="display:flex;">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                     <img src="assets/img/newLogo.jpg" style="top:0;aspect-ratio: auto;width: 10%;height:100%;" class="img-fluid logo-dark" alt=""> 
                    </a>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="width: 100%;">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="<?php echo ($dir == 'index' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                                <a href="index.php" class="nav-link" >Home</a> 
                            </li>
                            <li class="<?php echo ($dir == 'services' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                                <a href="services.php" class="nav-link" >Services</a>
                            </li>
                            <li class="<?php echo ($dir == 'innovations' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                                <a href="innovations.php" class="nav-link" >Our Team</a>
                            </li>
                          	<li  class="<?php echo ($dir == 'mission' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>" >
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Mission</a> 
                                <ul class="dropdown-menu">
                                    <li><a href="our-mission.php" class="dropdown-item">OUR MISSION</a></li>
                                    <li><a href="our-statement.php" class="dropdown-item">OUR STATEMENT</a></li>                        
                                </ul>
                            </li>
                             <!-- <li class="<?php //echo ($dir == 'mission' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                                <a href="mission.php" class="nav-link"> Our Mission</a>
                            </li> -->
                            <li class="<?php echo ($dir == 'clients' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                                <a href="our-clients.php" class="nav-link" >Clients</a>
                            </li>
                            <li class="<?php echo ($dir == 'gallery' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                                <a href="gallery.php" class="nav-link" >Gallery</a>
                            </li>
                            <li class="<?php echo ($dir == 'aboutus' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                               <a href="about-us.php" class="nav-link" >About Us</a>                                
                            </li>
                            <li class="<?php echo ($dir == 'contact' ? 'dropdown nav-item active' : ' dropdown nav-item' ); ?>">
                              <a href="contact-us.php" class="nav-link" >Contact Us</a>                                
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </nav><!--nav end-->
        </header>