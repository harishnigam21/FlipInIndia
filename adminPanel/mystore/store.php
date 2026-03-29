<?php  
   require_once(realpath(dirname(__FILE__)."/../config/sessionManager.php"));
   $sessData=userAccess();
    $title = "mystore";
    $dir="mystore";
    $dirFile ="store";
      include_once("../structure/header.php");
      include_once("../structure/leftBar.php");
      require_once(realpath(dirname(__FILE__)."/../config/database.php"));
      require_once(realpath(dirname(__FILE__)."/../models/adminModel/storeModel.php"));
      $mess='';
    

    
    if(isset($_POST['updateAdDetails']))
    {   
      $email =  mysqli_real_escape_string ($conn,$_POST['userEmail']);
      $number =  mysqli_real_escape_string ($conn,$_POST['userNum']);
      $address =  mysqli_real_escape_string ($conn,$_POST['useradd']);
      $address2 =  mysqli_real_escape_string ($conn,$_POST['useradd2']);
      $mailing =  mysqli_real_escape_string ($conn,$_POST['mailing']);
    if($email != "" && $number != "" && $address != "")
    {
      $errorCode=updateAdminDetails($conn, $email, $number,$address,$mailing, $address2);
      if($errorCode=="1")
      {
        $mess="Details Updated Successfully";
      }
      else
      {
        $mess="Error, Please Try Agian";
      }
    }
    else
    {
      $mess="Provide Details First";
    }
   }


$userData=getAdminStore($conn);
     
?>


    <!-- MAIN CONTENT -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">


            <div class="row top2">

              <div class="col-md-12">

                <h2>Profile Panel </h2>
                <hr class="hr-div">
                
              </div>
              
            </div>
            <div class="row">
             <div class="col-md-6">
              
                 <table class="table table-striped table-bordered table-advance table-hover">
                    <thead>
                        <tr>
                        <th colspan="4">
                         <h3><b> Your Basic Details </b></h3>
                        </th>
 
                        </tr>
                    </thead>
                    <tbody>
                     
                      <tr>
                      <td class="noborder" >Email ID :  </td>
                      <td class="noborder" colspan="3"><?php echo $userData['storeEmail']; ?></td>
                     </tr>
                      <tr>
                      <td class="noborder">Number : </td>
                      <td class="noborder" colspan="3"><?php echo $userData['storeNumber']; ?></td>
                      </tr>
                      <tr>
                      <td class="noborder">Primary Address : </td>
                      <td class="noborder" colspan="3"><?php echo $userData['storeAddress']; ?></td>
                      </tr>
                       <td class="noborder">Secondry Address : </td>
                      <td class="noborder" colspan="3"><?php echo $userData['storeAddress2']; ?></td>
                      </tr>
                      <tr>
                      <td class="noborder">Mailing Emails : </td>
                      <td class="noborder" colspan="3"><?php echo $userData['mailingEmails']; ?></td>
                      </tr>
                      </tbody>
                    </table>
                </div>
              
              <div class="col-md-6">
                  <!-- Nav tabs -->
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
                            <ul class="nav nav-tabs" style="border-bottom: 0;">
                                <li><a href="#blk" data-toggle="tab" class="active "></a>
                                </li>
                                <li><a href="#addCat" data-toggle="tab" class="btn btn-primary">Updated Details</a>
                                </li>
                                
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="blk">
                                </div>
                                <div class="tab-pane fade in" id="addCat">
                                    <h4 style="margin-left: 10%;">Update Details</h4>
                                    <form method="post" action="">
                                    <table class="table table-striped table-bordered" style="width: 80%;margin-left: 10%;">
                                      <tr>
                                        <td><input type="text" class="form-control" name="userNum" value="<?php echo $userData['storeNumber']; ?>" placeholder="Enter Store Number" required=""></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" class="form-control" name="userEmail" value="<?php echo $userData['storeEmail']; ?>" placeholder="Enter Store Email" required=""></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" class="form-control" name="useradd" value="<?php echo $userData['storeAddress']; ?>" placeholder="Enter Primary Address" required=""></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" class="form-control" name="useradd2" value="<?php echo $userData['storeAddress2']; ?>" placeholder="Enter Secondry Address" required=""></td>
                                      </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="mailing" value="<?php echo $userData['mailingEmails']; ?>" placeholder="Enter Mailing Address" required=""></td>
                                      </tr>

                                      <tr>
                                        <td><input type="submit" name="updateAdDetails" value="Update Details" class="btn btn-primary"></td>
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