<?php

 function addPickup($conn,$fname,$lname,$email,$contact,$addLine,$city,$state,$pincode,$pickup,$pickIn,$hereUS,$mess)
 {
 		$date=date('Y-m-d');
	   	$time=date('h:m:s');
	   	$token=md5("PNf(9"."PIcKUt|".$email.$contact.time());
	   	$sql="INSERT INTO `pickupdetails`(`userFName`, `userLname`, `userEmail`, `userNumber`, `userAddLine`, `userCity`, `userPin`, `userState`, `message`, `hereUs`, `pickUpPoint`, `pickInDate`, `added_date`, `added_time`, `token`, `status`) VALUES ('$fname','$lname','$email','$contact','$addLine','$city','$pincode','$state','$mess','$hereUS','$pickup','$pickIn','$date','$time','$token','1')";
	   	if ($conn->query($sql) === TRUE)
		 {
    		$last_id = 1;
    		return $last_id;
		 }
		 else
		 {
    		return "0";
   		 }
 }
 	

 function FetchAll($conn)
 {
 		$data="";
		$sql="SELECT * FROM `pickupdetails` WHERE `status` <> '0'";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			$count=1;
    	  while($row = $result->fetch_assoc())
    	  {
    	  	$data.=" <tr>
                              <td>".$count."</td>
                              <td>".$row['userFName']." ".$row['userLname']." </td>
                              <td>".$row['userEmail']."</td>
                              <td>".$row['userNumber']."</td>
                              <td>".$row['added_date']."</td>
                              <td>".$row['userAddLine'] .", ".$row['userCity'].", ".$row['userState']."- ".$row['userPin']."</td>
                              <td>".$row['pickUpPoint']."</td>
                              <td>".$row['pickInDate']."</td>
                              <td>".$row['message']."</td>
                          </tr>";
                    $count++;      
    	  	
    	  }
    	}
    	else
    	{
    		$data.="<tr><td colspan='9'> No Pickup Request Maided</td></tr>";
    	}
    	return $data;

	}

?>