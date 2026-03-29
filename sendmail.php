<?php
if(isset($token) && $token=="pickup" )
{
    $message='<table width="500" border="0" align="center" cellpadding="0" cellspacing="10" style="font-family:Arial, Helvetica, sans-serif; background-color:#e9e8e8; border:1px solid #cfcfcf;">
        <tr>
          <td colspan="2" style="font-size:16px; background-color:#172e50; color:#fff; padding:4px 10px;"><strong> New Pick Up  Details </strong></td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">First Name : '.$fname.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Last Name : '.$lname.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>  
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Phone Number : '.$num.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Email ID : '.$email.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">State : '.$state.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>  
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">City : '.$city.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Pincode : '.$pincode.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>
         <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Address : '.$add.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>

        <tr>
          <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Message  : '.$mess.'</td>
          <td style="font-size:11px;">&nbsp;</td>
        </tr>         
      </table>';

      	
      	$subject="New Pickup Point Details";
      	 
}
elseif(isset($token) && $token=="contact" )
{

  $message='<table width="500" border="0" align="center" cellpadding="0" cellspacing="10" style="font-family:Arial, Helvetica, sans-serif; background-color:blue; border:1px solid #cfcfcf;">
      <tr>
        <td colspan="2" style="font-size:16px; background-color:#172e50; color:#fff; padding:4px 10px;"><strong>Registered New User Details </strong></td>
      </tr>
      <tr>
        <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Name : '.$name.'</td>
        <td style="font-size:11px;">&nbsp;</td>
      </tr>
      
       <tr>
        <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Phone Number : '.$num.'</td>
        <td style="font-size:11px;">&nbsp;</td>
      </tr>
       <tr>
        <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Email ID : '.$email.'</td>
        <td style="font-size:11px;">&nbsp;</td>
      </tr>
      <tr>
        <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Message : '.$mess.'</td>
        <td style="font-size:11px;">&nbsp;</td>
              
    </table>';

      $subject="New User Contact Us";
      
}
 elseif(isset($token) && $token=="sub" )
{

 $message='<table width="500" border="0" align="center" cellpadding="0" cellspacing="10" style="font-family:Arial, Helvetica, sans-serif; background-color:#e9e8e8; border:1px solid #cfcfcf;">
     <tr>
    <td colspan="2" style="font-size:16px; background-color:#172e50; color:#fff; padding:4px 10px;"><strong> New Subscribe Details </strong></td>
  </tr>
  <tr>
    <td style="font-size:12px; font-weight:bold; padding:0px 0px 0px 10px;">Email : '.$emial.'</td>
    <td style="font-size:11px;">&nbsp;</td>
  </tr>         
   </table>';

   $subject="New Subscribe ";

}
else
  {
   echo "<script>
    window.location='index.php';
     </script>";
    exit();
  }

  $to="atulrai71.ar@gmail.com";
  $from="atulrai71.ar@gmail.com";
  $headers  = "MIME-Version: 1.0\r\n";
  $headers  .= "Content-type: text/html;\r\n";
  $headers  .= "From: ".$to."\r\n";
  $headers  .= "Reply-To:".$from."\r\n";
  //ini_set("SMTP","localhost");
   //ini_set("smtp_port","25");
  $redirect=true;
  mail( $to,$subject,$message,$headers );  

?>