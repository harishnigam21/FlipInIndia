<?php  
   require_once(realpath(dirname(__FILE__)."/../config/sessionManager.php"));
   $sessData=userAccess();
    $title = "My Profile";
    $dir="profile";
    $dirFile ="myProfile";
      include_once("../structure/header.php");
      include_once("../structure/leftBar.php");
      require_once(realpath(dirname(__FILE__)."/../config/database.php"));
      require_once(realpath(dirname(__FILE__)."/../models/adminModel/profileModel.php"));
      $mess='';
    if(isset($_POST['reSetPass']))
    {   
      $old =  mysqli_real_escape_string ($conn,$_POST['olPASWord']);
      $new =  mysqli_real_escape_string ($conn,$_POST['NeWpAASs']);
      $retry =  mysqli_real_escape_string ($conn,$_POST['RetNePwA']);
      
    if($old != "" && $new != "" && $retry != "")
    {
      if($new == $retry)
      {

        if($sessData['userAccess']=='0')
        { 
          //echo "<script> alert('test value');</script>";
        $errorCode=updateAdminPassword($conn, $old, $new ,$sessData['user_Id']);
        }
        else
        {
      $errorCode=updateSellersPassword($conn, $old, $new ,$sessData['user_Id']);
        }
        if($errorCode=="1")
        {
         $mess="Password Updated Successfully";
        }
        elseif($errorCode=="2")
        {
         $mess="Incorrect Password";
        }
        else
         {
        $mess="Wrong Details !";
        }
      }
      else
      {
        $mess="New & Retry Password Not Matched";   
      } 
    }
    else
    {
      $mess="Provide Details First";
    }
   }

    
    if(isset($_POST['updateAdDetails']))
    {   
      $name =  mysqli_real_escape_string ($conn,$_POST['userName']);
      $email =  mysqli_real_escape_string ($conn,$_POST['userEmail']);
      $number =  mysqli_real_escape_string ($conn,$_POST['userNumber']);
    if($name != "" && $email != "" && $number != "")
    {
      $errorCode=updateAdminDetails($conn, $name, $email, $number,$sessData['user_Id']);
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


$userData=getAdminDetails($conn);
     
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
                      <td class="noborder">Name</td>
                      <td colspan="2" class="noborder"><?php echo $userData['name']; ?> </td>
                      <td class="noborder"> 
                     
                      </td>
                      </tr>
                      <tr>
                      <td class="noborder" >Email ID :  </td>
                      <td class="noborder" colspan="3"><?php echo $userData['email']; ?></td>
                     </tr>
                      <tr>
                      <td class="noborder">Number : </td>
                      <td class="noborder" colspan="3"><?php echo $userData['number']; ?></td>
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
                            <span style="background: red;color: white;padding: 1.5% 15% 1.5% 15%;margin-left: 15%;"><?php echo $mess; ?></span> 
                      </div>
                      
                      <?php
                         }
                      ?>
                            <ul class="nav nav-tabs" style="border-bottom: 0;">
                                <li><a href="#blk" data-toggle="tab" class="active "></a>
                                </li>
                                <li><a href="#addCat" data-toggle="tab" class="btn btn-primary">Updated Details</a>
                                </li>
                                <li><a href="#upCat" data-toggle="tab" class="btn btn-danger">Change Password</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="blk">
                                </div>
                                <div class="tab-pane fade in" id="addCat">
                                    <h4 style="margin-left: 10%;">			</h4>
                                    <form method="post" action="">
                                    <table class="table table-striped table-bordered" style="width: 80%;margin-left: 10%;">
                                      <tr>
                                        <td><input type="text" class="form-control" name="userName" value="<?php echo $userData['name']; ?>"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" class="form-control" name="userEmail" value="<?php echo $userData['email']; ?>"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="text" class="form-control" name="userNumber" value="<?php echo $userData['number']; ?>"></td>
                                      </tr>
                                    

                                      <tr>
                                        <td><input type="submit" name="updateAdDetails" value="Update" class="btn btn-primary"></td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>
                                <div class="tab-pane fade" id="upCat">
                                    <h4 style="margin-left: 10%;">Change Password</h4>
                                    <form method="post" action="">
                                    <table class="table table-striped table-bordered" style="width: 80%;margin-left: 10%;">
                                      <tr>
                                        <td><input type="password" class="form-control" name="olPASWord" placeholder="Enter Your Old Password"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="password" class="form-control" name="NeWpAASs" placeholder="Enter New Password "></td>
                                      </tr>
                                      <tr>
                                        <td><input type="password" class="form-control" name="RetNePwA" placeholder="Re-enter New Password"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="submit" name="reSetPass" value="Reset Password" class="btn btn-primary"></td>
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