
<?php

function allContent($conn)
{
	$data="";
	$sql="SELECT * FROM `contactus`";
		$result=$conn->query($sql);
		if ($result->num_rows > 0) 
		{
			$count=1;
    	  while($row = $result->fetch_assoc())
    	  {
    	  	 $data.="<tr><td>".$count."</td><td>".$row['clientName']." </td><td>".$row['clientEmail']." </td><td>".$row['clientNumber']." </td><td>".$row['added_date']."<small>".$row['added_time']."</small></td><td>".$row['clientMessage']."</td></tr>";
    	  	 $count++;	
    	  }
    	}
    	else
    	{
    		$data.="<tr><td colspan='4'> No Contact Exist.</td></tr>";
    	}

    	return $data;
}

function addContact($conn,$name,$num,$email,$mess)
{
        $date=date('Y-m-d');
        $time=date('h:m:s');
        $sql="INSERT INTO `contactus`( `clientName`, `clientEmail`, `clientNumber`, `clientMessage`, `added_date`, `added_time`) VALUES ('$name','$email','$num','$mess','$date','$time')";
        if ($conn->query($sql) === TRUE)
         {
            $last_id = $conn->insert_id;
            return "1";
         }
         else
         {
            return "0";
         }
}

?>