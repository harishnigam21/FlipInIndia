<?php
	
	require_once(realpath(dirname(__FILE__)."/config/sessionManager.php"));
    $message="";
    if (isset($_POST['ADMINsce']))
    {   	
    	require_once(realpath(dirname(__FILE__)."/config/database.php"));
    	require_once(realpath(dirname(__FILE__)."/models/adminModel/adminAccess.php"));	
    	$username =  mysqli_real_escape_string ($conn,$_POST['adminUserName']);
    	$password =  mysqli_real_escape_string ($conn,$_POST['AdminPassword']);    	
    	if(!empty($username) && !empty($password))
   		  {
   		  	echo " Hello This si";
   		  	$data=adminLogin($password,$username,$conn);
   		  
   		  	 if ($data['error']==0) 
   			 {
			 createAdminSession($data['name'],$data['token'],$data['user_Id'] ,$data['userAccess']);
		     header('Location: dashboard');
			 }
    		else
    		 {
      			$message="Sorry Incorrect Details";
    		 }
   		  }
   		  else
   		  {
   		  	$message="Please Enter Details";
   		  }
    }
	adminExist();
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <title>UWM Admin - Sign In </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="" method="post">
		        <h2 class="form-login-heading" style="background-color: #0a0a0b;">Admin sign in now</h2>
		        <table class="table">
		        	 <?php 
                        if($message!="")
                        {
                      ?>
                        <tr>
                         <td>
                           <span style="background: red;color: white;padding: 6px 25% 8px 25%;">
                           	<?php echo $message; ?>
                           	</span> 
                      	 </td>
                      	</tr>  
                      <?php
                         }
                      ?>
		        	<tr>
		        		<td style="border-top: 0;">
		        			<input type="text" class="form-control" placeholder="Admin Email" autofocus name="adminUserName">
		        		</td>
		        	</tr>
		        	<tr>
		        		<td style="border-top: 0;">
		        			<input type="password" class="form-control" placeholder="Password" name="AdminPassword">
		        		</td>
		        	</tr>
		        	<tr>
		        		<td style="border-top: 0;">
		        			<input class="btn btn-block"  type="submit" name="ADMINsce" value="SIGN IN" />
		        		</td>
		        	</tr>
		        </table>
		       </form>

 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		
		      	  	
	  	
	  	</div>
	  </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
