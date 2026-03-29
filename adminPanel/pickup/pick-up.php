<?php
require_once(realpath(dirname(__FILE__)."/../config/sessionManager.php"));

   $sessData=userAccess();
    $title = "All Pick Up Points ".$sessData['loggedAs']; 
    $dir="pickup"; 
    $dirFile ="pick-up"; 
      include_once("../structure/header.php");
      include_once("../structure/leftBar.php");
      require_once(realpath(dirname(__FILE__)."/../config/database.php"));
      require_once(realpath(dirname(__FILE__)."/../models/adminModel/pickupModel.php"));
     
      $data= FetchAll($conn);
?>


    <!-- MAIN CONTENT -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">


            <div class="row">

              <div class="col-md-12">

                <h2>All Pick Up Points Details </h2>
                <hr class="hr-div">
                
              </div>
              
            </div>

          <div class="row dtrow">
              <div class="col-md-12 top2">
                 <table id="REpresntDATA" class="table table-bordered table-striped table-condensed" style="width:100%">
                      <thead>
                          <tr>
                              <th>S.No</th>
                              <th>Name </th>
                              <th>Email</th>
                              <th>Number</th>
                              <th>Date</th>
                              <th>Address</th>
                              <th>Pick-up</th>
                              <th>Pick-In</th>
                              <th>Message</th>
                          </tr>
                      </thead>
                      <tbody>
                              <?php
                              echo $data;
                              ?>
                          </tr>
                          
                      </tbody>
                     
                  </table>
              </div>
            
          </div>


    <?php  
   // Including all the head, css and other section of the page 
      include_once("../structure/footer.php");
   ?>


   