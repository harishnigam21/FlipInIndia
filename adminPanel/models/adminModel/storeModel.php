<?php



function getShopDetails($conn,$userAccess,$userId,$userToken)
{
	$data="";
	$data=getAdminStore($conn);
	return $data;
}
function updateAdminDetails($conn, $email, $number,$address,$mailing,$address2)
{
	$sql="UPDATE `website_details` SET `contact`='$number',`email`='$email',`address`='$address',`mailingEmails`='$mailing',`address2`='$address2'";
	if ($conn->query($sql))
		 {
    		return "1";
    		exit();
		 }
		 else
		 {
    		return "0";
    		exit();
   		 }
}
function getAdminStore($conn)
{
 $sql="SELECT `contact`, `email`, `address`,`mailingEmails` FROM `website_details`";
	$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
    	  while($row = $result->fetch_assoc())
    	  {
    	  	$data['storeNumber']=$row['contact'];
    	  	$data['storeEmail']=$row['email'];
    	  	$data['storeAddress']=$row['address'];
    	  	$data['mailingEmails']=$row['mailingEmails'];
    	  	$data['error']='0';
    	  }
    	}
		else
		{
			$data['error']='1';
		}

    	return $data;
}

function allTestimonial($conn)
{
	
	$sql="SELECT * FROM `testimonials` WHERE `status` <> '0' ORDER BY `added_date` DESC LIMIT 3";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			$count=1;
    	  while($row = $result->fetch_assoc())
    	  {
    	  	 $data['name'.$count]=$row['testname'];
    	  	 $data['mess'.$count]=$row['testmess'];
    	  	 $data['date'.$count]=$row['added_date'];
    	  	 $count++;
    	  }
    	}
    	return $data;
}


function getBanners($conn)
{
	
	$sql="SELECT `sliderBanner1`,`sliderBanner2`,`sliderBanner3` FROM `website_details` ";

	$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
    	  while($row = $result->fetch_assoc())
    	  {
    	  	$data['image1']=$row['sliderBanner1'];
    	  	$data['image2']=$row['sliderBanner2'];
    	  	$data['image3']=$row['sliderBanner3'];
    	  	$data['error']='0';
    	  }
    	}
		else
		{
			$data['error']='1';
		}

    	return $data;
}

function addBanner1($conn,$imageName)
{

	$sql="UPDATE `website_details` SET `sliderBanner1`='$imageName'";
	if ($conn->query($sql))
		 {
    		return "1";
    		exit();
		 }
		 else
		 {
    		return "0";
    		exit();
   		 }
}

function addBanner2($conn,$imageName)
{
	$sql="UPDATE `website_details` SET `sliderBanner2`='$imageName'";
	if ($conn->query($sql))
		 {
    		return "1";
    		exit();
		 }
		 else
		 {
    		return "0";
    		exit();
   		 }
}

function addBanner3($conn,$imageName)
{

	$sql="UPDATE `website_details` SET `sliderBanner3`='$imageName'";
	if ($conn->query($sql))
		 {
    		return "1";
    		exit();
		 }
		 else
		 {
    		return "0";
    		exit();
   		 }
}



?>