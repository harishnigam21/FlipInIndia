
<?php 
$title="Contact Us || Flipin India Pvt. Ltd.";
$dir="contact";
include('structure/header.php'); 
?>
<!-- End of Header -->

<?php 
  $mess="";
    if(isset($_POST['sendMSGCOnatcv']))
    {
    include('adminPanel/config/database.php');
    include('adminPanel/models/adminModel/contactModel.php');

      $name =  mysqli_real_escape_string ($conn,$_POST['userName']);
      $num =  mysqli_real_escape_string ($conn,$_POST['userNumber']);
      $email =  mysqli_real_escape_string ($conn,$_POST['userEmail']);
      $mess= mysqli_real_escape_string ($conn,$_POST['userMEss']);
      if($num != "" && $name != "" && $email != "" && $mess != "" )
      {
        $errorCode=addContact($conn,$name,$num,$email,$mess);
          if($errorCode=="1")
            {
             $mess="<span> <p style='background-color: green;color: white;padding: 5px 2px 1% 5%;'> Thank You For Contacting. </p> </span>";
            }
            else
            {
             $mess="<span> <p style='background-color: red;color: white;padding: 5px 2px 1% 5%;'>Error Please try Again. </p> </span>";
            }
      }
      else
      {
        $mess="<span> <p style='background-color: red;color: white;padding: 5px 2px 1% 5%;'>Error Please Provide Details. </p> </span>";
      }
    }

?>
<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->

       <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                    get in touch
                </h3>
            </div>
        </section><!--page-tree end here-->

        <div class="space-70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4 class="heading-mini">We’d Love to Hear From You</h4>
                 	 <p><b>Get in touch using the contact details below:</b></p>
                    <p> <b> Address :  </b> <?php echo $website['storeAddress']; ?> </p>
                  	<hr>
                    
                    <p>	<b> Phone:   </b><?php echo $website['storeNumber']; ?></p>
                    
                    <p> <b> Email:   </b><?php echo $website['storeEmail']; ?></p>
                 </div>
                <div class="col-md-6 ml-auto">
                    <h4 class="heading-mini">Contact us</h4>
                    <?php
                    if($mess != "")
                    echo $mess; 
                    ?>
                    <div class="my-contact-form">
                        <form  method="post" action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-sm-12 controls">

                                            <input type="text" class="form-control" placeholder="Name*" id="name" name="userName" required="">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="row control-group">
                                        <div class="form-group col-sm-12 controls">                   
                                            <input type="email" name="userEmail" class="form-control" placeholder="Email Address*"  required="">
                                            <p class="help-block"></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-sm-12">
                                    <input type="text" class="form-control" name="userNumber" placeholder="Contact Number*" required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-sm-12 controls">
                                    <textarea rows="5" class="form-control" name="userMEss" placeholder="Message*" required=""></textarea>
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-sm-12 text-right" style="margin-top: -15px;">
                                    <button type="submit" name="sendMSGCOnatcv" class="btn theme-btn-color btn-lg">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--contact page end-->

        <div class="space-70"></div>
        <!--google map-->
        
			<div class="row">
                <div class="col-md-6">
                  <h4 align="center"> Head Office:</h4>
        <iframe height="450" frameborder="0" style="border:0;width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1749.7771183873256!2d77.27121435183814!3d28.702978179435284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xad685aa266553df1%3A0x30a7c05086bcfbae!2sFLIPIN%20INDIA%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1752572689225!5m2!1sen!2sin" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
             <div class="col-md-6">
               <h4 align="center"> Factory:</h4>
        <!--<iframe height="450" frameborder="0" style="border:0;width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1700.7915343781935!2d77.56750512945455!3d28.652023633443072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjjCsDM5JzA5LjUiTiA3N8KwMzQnMDQuMyJF!5e0!3m2!1sen!2sin!4v1538127956890" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
        <iframe height="450" frameborder="0" style="border:0;width:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3497.5981296278137!2d77.2527908825321!3d28.76141321530694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfee3d6fb4cdb%3A0x436ed39f03167e7c!2s9%2C%20Shaheed%20Bhagat%20Singh%20Marg%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201102!5e0!3m2!1sen!2sin!4v1758545091711!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
 <!--google map end-->
<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->
