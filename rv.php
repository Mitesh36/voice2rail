<?php
 $host="127.0.0.1";
 $user="root";
 $pass="";
 $db="hackathon"; 
 
$email = $_POST['email'];
$ticket = $_POST['ticket'];
$date = $_POST['date'];
$category = $_POST['category'];
$state = $_POST['state'];
$city = $_POST['city'];
$idea =$_POST['idea'];
setcookie("ticket", $ticket); 
$conn=mysqli_connect($host,$user,$pass,$db);
 if($conn==null)
 {
	 die("ERROR IN CONNECTION".mysqli_connect());
 }
$q="INSERT INTO reg(email,ticket_no,cdate,ccat,zone,city,complaint) values ('$email' , '$ticket' , '$date' , '$category' , '$state' , '$city','$idea')";
$q1="INSERT INTO status(curr_status,Complaint_no) values ('pending' , '$ticket')";
$conn->query($q1);
if ($conn->query($q) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}



$emailid="$email";
$message = "Your Complaint has been registered successfully. Your Complaint id is <h2>Your complaint id is: $ticket</h2>";

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
		$mail->AddReplyTo($emailid);
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
			
  <!--<meta http-equiv="refresh" content="3;url=trc.html" />
  <script>function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null}; 
  </script> -->
	</head>
	
<h1 align='center' color='blue'>THANK YOU FOR  REGISTERING YOUR PROBLEM</h1>
<h1>Redirecting to home page in 3 seconds...</h1>
</html>
<?php
echo "<h2>Your complaint id is: $ticket</h2>";
?>