
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
if(isset($_POST['name']))
{
	
date_default_timezone_set('Asia/Kolkata');
$date = date( 'Y-m-d h:i:s', time () );
	
$to="piyushagnihotry26@gmail.com";
$cc="rajputumesh117@gmail.com,anshulyadav202001@gmail.com";
$bcc="";
$from="piyushagnihotry26@gmail.com";
$subject="Query From anshu@gmail.com";
$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
;
$headers ="From:" . $from. "\r\n";
$headers .="Cc:" . $cc. "\r\n";
$headers .="Bcc:" . $bcc. "\r\n";
//while sending html content in mail
$headers .="MIME-Version: 1.0:". "\r\n";
$headers .="Content-type:text/html;charset+UTF-8". "\r\n";

$message="<table border=1 align=center>
			<tr>
				<td>Name</td>
				<td>".$name."</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>".$email."</td>
			</tr>
			<tr>
				<td>Message</td>
				<td>".$message."</td>
			</tr>
		
		 </table>";
			

		if(mail($to,$subject,$message,$headers))
		{
	    	echo "success";
		}

		else
		{
			echo "error";
		}
	die;
}
?>
