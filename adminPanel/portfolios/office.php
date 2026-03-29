<?php  
   require_once(realpath(dirname(__FILE__)."/../config/sessionManager.php"));
   $sessData=userAccess();
    $title = "Add Office's Portfolios";
    $dir="portfolios";
    $dirFile ="office";
      include_once("../structure/header.php");
      include_once("../structure/leftBar.php");
      require_once(realpath(dirname(__FILE__)."/../config/database.php"));
     require_once(realpath(dirname(__FILE__)."/../models/adminModel/portfolioModel.php"));
      $mess='';
    
    
    if(isset($_POST['AddNEWComIMG']))
         {
          $main =  mysqli_real_escape_string ($conn,$_POST['MainCat']);
          $sub =  mysqli_real_escape_string ($conn,$_POST['subCat']);
          $post_photo=$_FILES["newImage"]["name"];
          $post_photo_tmp=$_FILES["newImage"]["tmp_name"];
          
          if($post_photo != '')
            {      
              $raw = explode(".", $_FILES["newImage"]["name"]);
              $newname = round(microtime(true))  .'.' . end($raw);
              $target_file_pro = constant("PORT_RES").$newname; 
              if (file_exists($target_file_pro)) 
                {
                  $uploadOK = 0;
                  $url=constant("PORT_RES").$target_file;
                }
              else
                {
                  $uploadOK = 1;
                }
              $ext = pathinfo($post_photo, PATHINFO_EXTENSION);  // getting image extension 
              if($uploadOK == 1)
                {
                  if( $ext=='png' || $ext=='PNG' || $ext=='jpg' || $ext=='jpeg' || $ext=='JPG' || $ext=='JPEG')
                {       
              if($ext=='jpg' || $ext=='jpeg' || $ext=='JPG' || $ext=='JPEG')
                {   
                  $src=imagecreatefromjpeg($post_photo_tmp);
                }
              if($ext=='png' || $ext=='PNG')
                {   
                  $src=imagecreatefrompng($post_photo_tmp);
                }
              if($ext=='gif' || $ext=='GIF')
                {   
                  $src=imagecreatefromgif($post_photo_tmp);
                }
              list($width_min,$height_min)=getimagesize($post_photo_tmp);
              $newwidth_min=$width_min; 
              $newheight_min=($height_min / $width_min) * $newwidth_min;
              $tmp_min = imagecreatetruecolor($newwidth_min, $newheight_min);  
              imagecopyresampled($tmp_min, $src, 0,0,0,0,$newwidth_min, $newheight_min, $width_min, $height_min);
              imagejpeg($tmp_min,'../assets/img/portfolio/office/'.$newname,100);
              }
            else
              {
              $error='Only JPG,PNG,JPEG,GIF Image File Please'; 
              }
          }
        else
          { 
            $error='File Allready Exist';
          }
          $status=addPortfolio($conn,$main,$sub,$newname,"office");
            if($status=="0")
            {
               $mess="<div style='margin-bottom: 2%;'><span style='background: red;color: white;padding: 1.5% 15% 1.5% 15%;margin-left: 15%;'>Error, Please try Agian </span></div>";
            }
            else
            {
              $mess="<div style='margin-bottom: 2%;'><span style='background: green;color: white;padding: 1.5% 15% 1.5% 15%;margin-left: 15%;'>Image Added Successfully</span></div>";
             }

         }

         }

         if(isset($_POST['updateTEST']))
        {
          $mess =  mysqli_real_escape_string ($conn,$_POST['idTESTi']);
          $stat=deletePortfolio($conn,$mess);
          if($stat=="1")
          {
            $mess="<div style='margin-bottom: 2%;'><span style='background: green;color: white;padding: 1.5% 15% 1.5% 15%;margin-left: 15%;'>Image Deleted Successfully</span></div>";
          }
          else
          {
            $mess="<div style='margin-bottom: 2%;'><span style='background: red;color: white;padding: 1.5% 15% 1.5% 15%;margin-left: 15%;'>Error, Please try Agian </span></div>";
          }
         }

          $data=AllPortfolio($conn,"office");

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
                         echo $mess; 
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
                    <button class="btn btn-primary" data-toggle="modal" data-target="#updateStatus" style="float: right;margin: 2%;"> Add Portfolio </button>
                </div>
              </div>
            
          </div>


 <div id="updateStatus" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 50%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Vendor's Statu</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="" enctype='multipart/form-data'>
        <table class="table table-striped">
          <tr>
            <td> <span>Image : </span></td>
            <td> <input type="file" name="newImage" class="form-control"> </td>
          </tr>
          <tr>
            <td> <span> Category : </span></td>
            <td> <input type="text" name="MainCat" placeholder="Enter Category" class="form-control"> </td>
          </tr>
          <tr>
          <tr>
            <td> <span> Sub Category : </span></td>
            <td> <input type="text" name="subCat" placeholder="Enter Sub Category" class="form-control"> </td>
          </tr>
          <tr>
          <tr>
            <td colspan="2" align="right">
              <input type="submit" name="AddNEWComIMG" value="Update Details" class="btn btn-primary">
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