<?php

function addTestimonial($conn,$name,$message)
{
$date=date('Y-m-d');	
$token=md5($date.$message.time());
$sql="INSERT INTO `testimonials`(`testmess`, `added_date`, `testname`, `status`,`token`) VALUES ('$message','$date','$name','1','$token')";
		if ($conn->query($sql) === TRUE)
		 {
    		$last_id = $conn->insert_id;
    		return $last_id;
		 }
		 else
		 {
    		return "0";
   		 }
}

function deleteTestimonial($conn,$id)
{
	$sqlDelM = "UPDATE `testimonials` SET `status`='0' WHERE `token`='$id'";
		if ($conn->query($sqlDelM))
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

function allTestimonial($conn)
{
	$data="";
	$sql="SELECT * FROM `testimonials` WHERE `status` <> '0' ORDER BY `added_date` DESC ";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
    	  while($row = $result->fetch_assoc())
    	  {
    	  	 $data.="<tr><td>".$row['testname']." </td><td>".$row['added_date']."</td><td>".$row['testmess']."</td><td><form action='' method='post'> <input type='hidden' name='idTESTi' value='".$row['token']."'><input type='submit' name='updateTEST' value='Delete Item' class='btn btn-danger'></form></td></tr>";	
    	  }
    	}
    	else
    	{
    		$data.="<tr><td colspan='4'> No Testimonail Added.</td></tr>";
    	}

    	return $data;
}


?>