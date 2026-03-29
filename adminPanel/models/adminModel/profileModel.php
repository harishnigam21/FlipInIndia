<?php

	function getAdminDetails($conn)
	{
		$sqlDetails="SELECT * FROM `admin_details`";
		$result=$conn->query($sqlDetails);
		if ($result->num_rows > 0) 
		{
    	  while($row = $result->fetch_assoc())
    	  {
          	$data['name']=$row['admin_uesrname'];
          	$data['email']=$row['admin_email'];
          	$data['number']=$row['admin_number'];	         	
          }
		}
		else
		{
			$data['error']='1';
		}
		return $data; 
	}

	

	function updateAdminDetails($conn, $name, $email, $number, $user_Id)
	{
		$sqlAddM = "UPDATE `admin_details` SET`admin_uesrname`='$name',`admin_email`='$email',`admin_number`='$number' WHERE `admin_id`='$user_Id'";
		echo $sqlAddM;
		if ($conn->query($sqlAddM))
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


	function updateAdminPassword($conn, $old, $new ,$user_Id)
	{	
		$newhash =md5($new);
		$oldhash =md5($old);
		$chkPass="SELECT * FROM `admin_details` WHERE `admin_password`='$oldhash' AND `admin_id`='$user_Id'";
		
		$result1=$conn->query($chkPass);
		if ($result1->num_rows > 0) 
		{
			$sqlAddM = "UPDATE `admin_details` SET `admin_password`='$newhash' WHERE `admin_id`='$user_Id' AND `admin_password` = '$oldhash'";
		
		if ($conn->query($sqlAddM))
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
		else{
			return "2";
			exit();
		}
		
	}

	

?>