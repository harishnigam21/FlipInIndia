<!-- including header secition -->
<?php $title="Pick Up || Flipin India Pvt. Ltd.";
include('structure/header.php'); ?>
<?php 
  $mess="";
  $token="";
    if(isset($_POST['PICKUPLOCTIOn']))
    {
    include('adminPanel/config/database.php');
    include('adminPanel/models/adminModel/pickupModel.php');

      $fname =  mysqli_real_escape_string ($conn,$_POST['fname']);
      $lname =  mysqli_real_escape_string ($conn,$_POST['lname']);
      $num =  mysqli_real_escape_string ($conn,$_POST['mobile']);
      $email =  mysqli_real_escape_string ($conn,$_POST['email']);
      $mess= mysqli_real_escape_string ($conn,$_POST['message']);

      $add =  mysqli_real_escape_string ($conn,$_POST['addressLine']);
      $city =  mysqli_real_escape_string ($conn,$_POST['city']);
      $pincode= mysqli_real_escape_string ($conn,$_POST['zipcode']);
      $state =  mysqli_real_escape_string ($conn,$_POST['state']);
      $pickUp =  mysqli_real_escape_string ($conn,$_POST['pickUpWITHIN']);
      $network= mysqli_real_escape_string ($conn,$_POST['network']);
      $source= mysqli_real_escape_string ($conn,$_POST['source']);
      if($num != "" && $fname != "" && $email != "" && $mess != "" )
      {
        $errorCode=addPickup($conn,$fname,$lname,$email,$num,$add,$city,$state,$pincode,$network,$pickUp,$source,$mess);
        
          if($errorCode=="1")
            {
             $token="pickup";
              
             include('sendmail.php');
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
<!-- End of Header -->


<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->

<!-- STart Of form -->

        <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                   Request A Pick Up Schedule 
                </h3>
            </div>
        </section><!--page-tree end here-->
        <div class="space-70"></div>

     <div class="container">
            <div class="row">

                <div class="col-lg-10 ml-auto mr-auto">
                    <div class="my-login-form" style="background-color: beige;">
                      <?php
                    if($mess != "")
                    echo $mess; 
                    ?>
                         <form action="" method="post">
                        <h3 class="text-uppercase"><b>Contact Information: </b></h3><hr>
                        <div class="row">
                            <div class="col-md-6 margin-btm-20">
                                <input type="text" class="form-control" name="fname" placeholder="First Name" required="">
                            </div>
                            <div class="col-md-6 margin-btm-20">
                                <input type="text" class="form-control" name="lname"  placeholder="Last Name" required="">
                            </div>
                            <div class="col-md-6 margin-btm-20">
                                <input type="email" required="" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-6 margin-btm-20">
                                <input type="text" required="" class="form-control" name="mobile" placeholder="Mobile">
                            </div>
                            <div class="col-md-12 margin-btm-20">
                                <input type="text" required="" class="form-control" name="addressLine" placeholder="Address">
                            </div>
                            <div class="col-md-6 margin-btm-20">
                                <input type="text" required="" class="form-control" name="city" placeholder="City">
                            </div>
                            <div class="col-md-6 margin-btm-20">
                                <input type="text" required="" class="form-control" name="zipcode" placeholder="Zipcode">
                            </div>
                            <div class="col-md-12 margin-btm-20">
                                
                                <select name=state class="form-control" required="">
                                    <option value="">------------Select State------------</option>
                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                    <option value="Daman and Diu">Daman and Diu</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Orissa">Orissa</option>
                                    <option value="Pondicherry">Pondicherry</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttaranchal">Uttaranchal</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select>
                            </div>
                            <h3 class="text-uppercase"><b>&nbsp;&nbsp;Our Networks: </b></h3><hr>
                            
                            <div class="col-md-12 margin-btm-20">   
                                <select name="network" required="" class="form-control">
                                    <option value="">--- Select Here ---</option>
                                    <option value="Ahmedabad">Ahmedabad</option>
                                    <option value="Baroda">Baroda</option>
                                    <option value="Bhubaneswar">Bhubaneswar</option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option value="Chennai">Chennai</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Faridabad">Faridabad</option>
                                    <option value="Ghaziabad">Ghaziabad</option>
                                    <option value="Guhati">Guhati</option>
                                    <option value="Gurgaun">Gurgaun</option>
                                    <option value="Hydrabad">Hydrabad</option>
                                    <option value="Indore">Indore</option>
                                    <option value="Jaipur">Jaipur</option>
                                    <option value="Jamshedpur">Jamshedpur</option>
                                    <option value="Kolkata">Kolkata</option>
                                    <option value="Lucknow">Lucknow</option>
                                    <option value="Mangalore">Mangalore</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Nagpur">Nagpur</option>
                                    <option value="Noida">Noida</option>
                                    <option value="Patna">Patna</option>
                                    <option value="Pune">Pune</option>
                                    <option value="Raipur">Raipur</option>
                                    <option value="Surat">Surat</option>
                                    <option value="Visakhapatnam">Visakhapatnam</option>
                                </select>
                            </div>

                            <div class="col-md-12 margin-btm-20">   
                                <select name="pickUpWITHIN" class="form-control" required="">
                                <option value="">How soon would you like to retire these items?</option>
                                <option value="immediate">Immediately</option>
                                <option value="30days">30 Days</option>
                                <option value="3month">3 Months</option>
                                <option value="6month">Within 6 Months</option>
                                </select>
                            </div>

                            <div class="col-md-12 margin-btm-20">  
                                <select name="source" class="form-control" required="">
                                <option value="">How did you hear about us?</option>
                                <option value="google">Google</option>
                                <option value="newspaper">Newspaper</option>
                                <option value="magzine">Magzine</option>
                                <option value="social">Social Media</option>
                                </select>
                            </div>

                            <div class="col-md-12 margin-btm-20">
                                    <textarea name="message" class="form-control" cols="50"  required="" rows="5" placeholder="Message"></textarea>
                           </div>
                            
                            <div class="col-md-12 text-right">
                                <button type="submit" name="PICKUPLOCTIOn" class="btn theme-btn-color btn-lg">Pick Up</button>
                            </div>
                        </div>
                        <hr>
                    </form>
                    </div>
                </div>
            </div>
        </div>
<!-- /form -->


<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->