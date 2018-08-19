<?php

 $host="127.0.0.1";
 $user="root";
 $pass="";
 $db="hackathon"; 
 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$ticket =$_POST['ticket'];
$email = $_POST['email'];
$mno = $_POST['mno'];
$date =$_POST['date'];
$category = $_POST['category'];
$state = $_POST['state'];
$city = $_POST['city'];
$sugg =$_POST['sugg'];

$conn=mysqli_connect($host,$user,$pass,$db);
 if($conn==null)
 {
	 die("ERROR IN CONNECTION".mysqli_connect());
 }
$q="INSERT INTO sugg VALUES ('$fname' , '$lname' , '$ticket','$email', '$mno' , '$date' , '$category' , '$state' , '$city','$sugg')";
if ($conn->query($q) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}

$emailid="$email";
$message = "Thank You For Your VALUEABLE Suggestio. We are Happy to Server You.Indian Railways always welcomes your VALUEABLE Feedback.";

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

		
				
		$mail->AddAddress($emailid);
			

		$mail->Username   = "mitesh.parmar36@gmail.com";  // sender's GMAIL username
		$mail->Password   = "momdadjaimitesh";            // sender's GMAIL password
		$mail->SetFrom('kalravshahp@gmail.com', 'Voice2Rail');
		$mail->AddReplyTo("jgd.avinash@gmail.com","Admin");
		$mail->AddReplyTo("jgd.avinash@gmail.com","Admin");
		$mail->Subject    = "Your Registration is complete ";
		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->MsgHTML($message);

		$mail->Send();
			
		echo "Email sent successfully";
		
		
function redirect()
		{
			$msg="Email Sent Successfully.";
			header("Location:trc.html?msg=$msg");
		}
		redirect();




?>
<html>
 <head>
        <meta http-equiv="refresh" content="5;url=index.html" />
    </head>
<h1 align='center' color='blue'>THANK YOU FOR YOUR VALUEABLE SUGGSSION! </h1>
<h1>Redirecting to home page in 5 seconds...</h1>
if you are not redirected <a href='index.html'>click here</a>
</html>