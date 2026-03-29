<?php  
   require_once(realpath(dirname(__FILE__)."/../config/sessionManager.php"));
   $sessData=userAccess();
    $title = "Add Testimonial's";
    $dir="testimonial";
    $dirFile ="testimonial";
      include_once("../structure/header.php");
      include_once("../structure/leftBar.php");
      require_once(realpath(dirname(__FILE__)."/../config/database.php"));
      require_once(realpath(dirname(__FILE__)."/../models/adminModel/testimonialModel.php"));
      $mess='';
    
    
    if(isset($_POST['ADDVNSTOREStatus']))
    {   
      $mess =  mysqli_real_escape_string ($conn,$_POST['newMess']);
      $name =  mysqli_real_escape_string ($conn,$_POST['NameNew']);
    if($name != "" && $mess != "" )
    {
      $errorCode=addTestimonial($conn,$name,$mess);
      if($errorCode=="1")
      {
        $mess="Details Updated Successfully";
      }
      else
      {
        $mess="Details Updated Successfully";
      }
    }
    else
    {
      $mess="Provide Details First";
    }
   }

   if(isset($_POST['updateTEST']))
   {
   	      $mess =  mysqli_real_escape_string ($conn,$_POST['idTESTi']);
   	      $stat=deleteTestimonial($conn,$mess);
   	      if($stat=="1")
      		{
        		$mess="Details Deleted Successfully";
      		}
      	  else
      		{
        		$mess="Error, Please Try Agian";
      		}

   }
          
         $data=allTestimonial($conn);
      

?>


    <!-- MAIN CONTENT -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">


            <div class="row top2">

              <div class="col-md-12">

                <h2>Testimonial's Panel </h2>
                <hr class="hr-div">
                
              </div>
              
            </div>
            <div class="row dtrow">
              <div class="col-md-9 top2">
              	<?php 
                        if($mess!="")
                        {
                      ?>
                      <div style="margin-bottom: 2%;">
                            <span style="background: green;color: white;padding: 1.5% 15% 1.5% 15%;margin-left: 15%;"><?php echo $mess; ?></span> 
                      </div>
                      
                      <?php
                         }
                      ?>
                 <table id="REpresntDATA" class="table table-bordered table-striped table-condensed" style="width:100%">
                      <thead>
                          <tr>
                              <th>Name </th>
                              <th>Date</th>
                              <th>Message</th>
                              <th>Manage</th>
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
              <div class="col-md-3">
              	<div>
                                          <button class="btn btn-primary" data-toggle="modal" data-target="#updateStatus" style="float: right;margin: 2%;"> Add Testimonials </button>
                                          
                                        </div>
              </div>
            
          </div>


 <div id="updateStatus" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 50%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Testimonial</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="">
        <table class="table table-striped">
          <tr>
            <td> <span>User Name : </span></td>
            <td> <input type="text" name="NameNew"  class="form-control"> </td>
          </tr>
          
          <tr>
            <td> <span>Message : </span></td>
            <td> <input type="text" name="newMess" value="" class="form-control"> </td>
          </tr>
          
          <tr>
            <td colspan="2" align="right">
              <input type="submit" name="ADDVNSTOREStatus" value="Add Testimonial" class="btn btn-primary">
            </td>
          </tr>
        </table>
      </form>
      </div>
    </div>

  </div>
</div>

    <?php  
   // Including all the head, css and other section of the page 
      include_once("../structure/footer.php");
   ?>