<?php

function countAllpickup($conn)
	{
		$value=0;
		{
			$sqlCount="SELECT * FROM `pickupdetails`";
		}
		$result=$conn->query($sqlCount);
		if ($result->num_rows > 0) 
		{
    	  while($row = $result->fetch_assoc())
    	  {
    	  	$value++;
    	  }
    	}	
    	
		return $value;	
	}

function countAllContact($conn)
	{
		$value=0;
			$sqlCount="SELECT * FROM `contactus`";
		
		$result=$conn->query($sqlCount);
		if ($result->num_rows > 0) 
		{
    	  while($row = $result->fetch_assoc())
    	  {
    	  	$value++;
    	  }
    	}	
    	
		return $value;	
	}	
function countAlltesti($conn)
	{
		$value=0;
		$sqlCount="SELECT * FROM `testimonials` ";
		$result=$conn->query($sqlCount);
		if ($result->num_rows > 0) 
		{
    	  while($row = $result->fetch_assoc())
    	  {
    	  	$value++;
    	  }
    	}	
		return $value;	
	}	
	

?>