<?php

 $host="127.0.0.1";
 $user="root";
 $pass="";
 $db="hackathon"; 


$conn=mysqli_connect($host,$user,$pass,$db);
if($conn==null)
{
	die("ERROR IN CONNECTION".mysqli_connect());
	
}
else
{
	$ticket = $_GET['ticket'];
	$em = $_GET['email'];

	$qr="UPDATE status set curr_status = 'Done' where Complaint_no='$ticket'";
	$rs = mysqli_query($conn,$qr);
	if($rs)
	{
		
		$message = "You Compaint has Solved... Thank you for your Kindness... <h2>Your complaint id is: $ticket</h2>";

		require_once('Mail/phpmailer/class.phpmailer.php');

		$mail             = new PHPMailer();
		$mail->IsSMTP(); // telling the class to use SMTP
		$mail->Host       = "mail.yourdomain.com"; // SMTP server
		$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
												   // 1 = errors and messages
												   // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
		$mail->Port       = 465;                   // set the SMTP port for the GMAIL server

		
				
		$mail->AddAddress($em);
			

		$mail->Username   = "mitesh.parmar36@gmail.com";  // sender's GMAIL username
		$mail->Password   = "momdadjaimitesh";            // sender's GMAIL password
		$mail->SetFrom('mitesh.parmar36@gmail.com', 'Voice2Rail');
		$mail->AddReplyTo($em);
		$mail->Subject    = "Your Complaint Approved ";
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->MsgHTML($message);

		$mail->Send();
			
		//echo "Email sent successfully";
		
		
		function redirect()
		{
			//$msg="Email Sent Successfully.";
			//header("Location:trc.html?msg=$msg");
			echo "<script>location.href='admin1.php';</script>";
		}
		redirect();

		
		
	}
}





 
 