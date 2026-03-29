<?php

function adminLogin($passsword,$username,$conn)
{
	
	$hashPass=md5($passsword);
	$adminSql="SELECT `admin_id`, `admin_uesrname`, `admin_token` FROM `admin_details` WHERE `admin_email` ='$username' AND `admin_password` ='$hashPass' AND `status` ='1' LIMIT 1";

	echo "SQL :" .$adminSql;
	$result = $conn->query($adminSql);
	if ($result->num_rows > 0) 
	{
    while($row = $result->fetch_assoc()) 
     {

     	$data['name']=$row["admin_uesrname"];
     	$data['token']=$row["admin_token"];
     	$data['user_Id']=$row["admin_id"];
     	$data['userAccess']=0;
     	$data['error']="0";
       
     }
	} 
	else 
	{
		$data['error']="1";
	}
	return $data;
}

?>