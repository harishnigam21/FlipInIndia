<?php
    require_once(realpath(dirname(__FILE__)."/../config/sessionManager.php"));

      $sessData=onlyAdmin();
      $title = "Store Banner";     
    $dir="mystore";  // Name of the File Main Directory
    $dirFile ="storeBanners"; // Name of the File  
$mess="";
    
    include_once("../structure/header.php");
      include_once("../structure/leftBar.php");
    require_once(realpath(dirname(__FILE__)."/../config/database.php"));
    require_once(realpath(dirname(__FILE__)."/../models/adminModel/storeModel.php"));

    if(isset($_POST['NewSUBmitIMG']))
         {

          $ban=$_POST['ban'];
          $post_photo=$_FILES["newImage"]["name"];
          $post_photo_tmp=$_FILES["newImage"]["tmp_name"];
         

          if($post_photo != '')
              {      
              $raw = explode(".", $post_photo);
              $newname = 'Banner-'.$ban.'-' .round(microtime(true)) .'.' . end($raw);
              $target_file_pro = constant("PRODUCT_BAN").$newname; 
              if (file_exists($target_file_pro)) 
                {
                  $uploadOK = 0;
                  $url=constant("PRODUCT_BAN").$target_file;
                }
              else
                {
                  $uploadOK = 1;
                }
              $ext = pathinfo($post_photo, PATHINFO_EXTENSION);
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
              imagejpeg($tmp_min,'../assets/img/banner/'.$newname,100);
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



            if($ban=="1")
            {
              $status=addBanner1($conn,$newname);
            }
            elseif($ban=="2")
            {
              $status=addBanner2($conn,$newname);
            }
            elseif($ban=="3")
            {
              $status=addBanner3($conn,$newname);
            }
            else
            {
              $status="0";
            }



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
$data=getBanners($conn);
//if($data['error']=="1")
         {
          //header("Location: ../dashboard"); /* Redirect browser */
          //exit();
         } 


?>


    <!-- MAIN CONTENT -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">


            <div class="row">

              <div class="col-md-12">

                <h2>Store Banner </h2>
                <hr class="hr-div">
                
              </div>
              
            </div>

               <div class="row">
            <div class="col-md-6">
              <h4>Banner Images</h4>
              <hr>
              <table class="table table-striped table-bordered">
                <tr>
                  <td align="center">Banner Images </td> 
                </tr>
              </table>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="<?php echo constant('PRODUCT_BAN').$data['image1']?>" style="width:100%;">
                </div>

                <div class="item">
                  <img src="<?php echo constant('PRODUCT_BAN').$data['image2']?>" style="width:100%;">
                </div>
                <div class="item">
                 <img src="<?php echo constant('PRODUCT_BAN').$data['image3']?>" style="width:100%;">
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                 <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
            <div class="col-md-6">
                
              <div class="panel-body">
                          <?php 
                        if($mess!="")
                        {
                      ?>
                      <div style="margin-bottom: 2%;">
                        <?php echo $mess; ?>
                      </div>
                      
                      <?php
                         }
                      ?>
                            <!-- Nav tabs -->
                             <ul class="nav nav-tabs">
                                <li class="active"><a href="#addban" data-toggle="tab">Add 1st Banner</a>
                                </li>
                                <li><a href="#addban2" data-toggle="tab">Add 2nd Banner</a>
                                </li>
                                <li><a href="#addban3" data-toggle="tab">Add 3rd Banner</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                             
                                <div class="tab-pane fade in active" id="addban">
                                    <h4>Add Banner Images</h4>
                                    <form method="post" action="" enctype="multipart/form-data">
                                      <input type="hidden" name="ban" value="1">
                                    <table class="table table-striped table-bordered">
                                      <tr>
                                        <td><input type="File" class="form-control" name="newImage"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="submit" value="Add Banner" class=" btn btn-success" name="NewSUBmitIMG">
                                        </td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>


<div class="tab-pane fade in " id="addban2">
                                    <h4>Add Banner Image</h4>
                                    <form method="post" action="" enctype="multipart/form-data">
                                      <input type="hidden" name="ban" value="2">  
                                    <table class="table table-striped table-bordered">
                                      <tr>
                                        <td><input type="File" class="form-control" name="newImage"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="submit" value="Add Banner" class=" btn btn-success" name="NewSUBmitIMG">
                                        </td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>


 
                                <div class="tab-pane fade in " id="addban3">
                                    <h4>Add 3rd Banner Image</h4>
                                    <form method="post" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="ban" value="3">
                                    <table class="table table-striped table-bordered">
                                      <tr>
                                        <td><input type="File" class="form-control" name="newImage"></td>
                                      </tr>
                                      <tr>
                                        <td><input type="submit" value="Add Banner" class=" btn btn-success" name="NewSUBmitIMG">
                                        </td>
                                      </tr>
                                    </table>
                                  </form>
                                </div>
                            </div>
                        </div>
            </div>
        </div> 



    <?php  
   // Including all the head, css and other section of the page 
      include_once("../structure/footer.php");
   ?>

