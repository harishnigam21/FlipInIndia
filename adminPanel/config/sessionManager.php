<?php
session_start();
  function adminExist()
	{
		if (isset($_SESSION['DMINRAYssess@DECOrIn'])) 
		{
			$accessFor=$_SESSION['DMINRAYssess@DECOrIn']['loggedAs'];
			if($accessFor == "Admin")
			{
			   header('Location: dashboard');
			}	
			else
			{

			}
		}
		else
		{
			//header('Location: adminLogin');	
		}
	}


  function onlyAdmin()
	{
		if(isset($_SESSION['DMINRAYssess@DECOrIn']) != '')
		{
			
			$accessFor=$_SESSION['DMINRAYssess@DECOrIn']['loggedAs'];
			if($accessFor == "Admin")
			{
				$sessData['name']=$_SESSION['DMINRAYssess@DECOrIn']['name'];
				$sessData['token']=$_SESSION['DMINRAYssess@DECOrIn']['token'];
				$sessData['user_Id']=$_SESSION['DMINRAYssess@DECOrIn']['user_Id'];
				$sessData['userAccess']=$_SESSION['DMINRAYssess@DECOrIn']['userAccess'];
				$sessData['loggedAs']=$_SESSION['DMINRAYssess@DECOrIn']['loggedAs'];
				
			}	
			else
			{
				header('Location: dashboard');
			exit();
			}
		}
		else
		{
			header('Location: adminLogin');
			exit();
		}
		return $sessData;
	}


	function userAccess()
	{
		if (isset( $_SESSION['DMINRAYssess@DECOrIn']) != '') 
		{	
			
			$sessData['name']=$_SESSION['DMINRAYssess@DECOrIn']['name'];
			$sessData['token']=$_SESSION['DMINRAYssess@DECOrIn']['token'];
			$sessData['user_Id']=$_SESSION['DMINRAYssess@DECOrIn']['user_Id'];
			$sessData['userAccess']=$_SESSION['DMINRAYssess@DECOrIn']['userAccess'];
			$sessData['loggedAs']=$_SESSION['DMINRAYssess@DECOrIn']['loggedAs'];
		}
		else
		{
			header('Location: adminLogin');
			exit();
		}
		return $sessData;

	}


	function createAdminSession($name,$token, $user_Id, $userAccess)
	{

		$data['token']=$token;
		$data['user_Id']=$user_Id;
		$data['userAccess']=$userAccess;
		$data['name']=$name;
		$data['loggedAs']="Admin";
		$_SESSION['DMINRAYssess@DECOrIn']=$data;

	}
?>