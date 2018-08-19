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
	$i = $_GET['id'];
	$em = $_GET['email'];
	$ticket = $_GET['ticket'];
	
	$qr="DELETE FROM reg WHERE id='$i' and  email='$em'";
	$rs = mysqli_query($conn,$qr);
	if($rs)
	{
		
		$message = "You Compaint is Denied... Please give a Valid or Genieune Reason of Problem <h2>Your complaint id is: $ticket</h2>";

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
		$mail->Subject    = "Your Complaint is Denied ";
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->MsgHTML($message);

		$mail->Send();
			
		echo "Email sent successfully";
		
		
		function redirect()
		{
			$msg="Email Sent Successfully.";
			//header("Location:trc.html?msg=$msg");
		}
		redirect();

		echo "<script>location.href='admin1.php';</script>";
	}
}





 
 ?>