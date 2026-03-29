<?php
	require_once(realpath(dirname(__FILE__)."/config/sessionManager.php"));
   	  $sessData=userAccess();
      $title = "Dashboard | ".$sessData['loggedAs'];  
      $dir="";
      $dirFile="dashboard";
      include_once("structure/header.php");
      include_once("structure/leftBar.php");
    require_once(realpath(dirname(__FILE__)."/config/database.php"));
    require_once(realpath(dirname(__FILE__)."/models/adminModel/dashboardModel.php"));
?>

      <section id="main-content">
          <section class="wrapper">

          	<div class="mt">
          	   <h3><i class="fa fa-angle-right"></i> Discover Your Panel</h3>
            	<hr class="hr-div">
           </div>

              <div class="row">
                  <div class="col-lg-12 main-chart" >
                  

                  	<?php 
                      if($sessData['loggedAs']=="Admin")
                      {
                   ?>
                  	  <div class="row ">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>TESTIMONIAL</h5>
                      			</div>
								
	                      		<div class="centered">
										<i class="fa fa-users" aria-hidden="true"></i>

	                      		</div>

	                      		<div class="row">
									
									<div class="col-md-12">
										<p class="small mt">VERIFIED </p>
										<p style="margin-top: -15px;">
											<?php
											  $count=0;
											  $count=countAlltesti($conn);
											  echo $count;
											?>
										</p>
									</div>
									
	                      		</div>
	                      	</div>
                      	</div><!-- /col-md-4-->
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn" style="background: black;">
                      			<div class="white-header">
						  			<h5>PICKUP REQUEST</h5>
                      			</div>
								
	                      		<div class="centered">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
	                      		</div>

	                      		<div class="row">
									
									
									<div class="col-md-12">
										<p class="small mt">PICKUP</p>
										<p style="margin-top: -6px;">
                                          <?php
											  $count=0;
											 $count=countAllpickup($conn);
											  echo $count;
											?></p>
									</div>
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->
                      	
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>TOTAL CONTACT </h5>
                      			</div>
								
	                      		<div class="centered">
										<i class="fa fa-phone" aria-hidden="true"></i>

	                      		</div>

	                      		<div class="row">
									
									<div class="col-md-12">
										<p class="small mt">TOTAL :</p>
										<p style="margin-top: -6px;"><?php
											  $count=0;
											  $count=countAllContact($conn);
											  echo $count;
											?></p>
									</div>
									
	                      		</div>
                      		</div>
						</div><!-- /col-md-4 -->
                       </div><!-- /row -->
                  	
                  <?php
                    }
                  ?>  
                    				
					
				</div><!-- /row -->	
             </div>     
          </div>
        </section>
     </section>
         <?php  
   // Including all the head, css and other section of the page 
      include_once("structure/footer.php");
   ?>