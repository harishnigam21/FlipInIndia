<?php  
	session_start();
	$accessFor=$_SESSION['DMINRAYssess@DECOrIn']['loggedAs'];
	session_destroy();
	header('Location: adminLogin');
?>