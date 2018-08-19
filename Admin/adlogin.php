<?php
$host="127.0.0.1";
 $user="root";
 $pass="";
 $db="hackathon"; 

$uname = $_REQUEST['uname'];
$pass = $_REQUEST['pass'];
 
$conn=mysqli_connect($host,$user,$pass,$db);
 if($conn==null)
 {
	 die("ERROR IN CONNECTION".mysqli_connect());
 }

$qr1="SELECT * FROM tbladmin_user where username='$uname' and pass='pass'";   

$res1=mysqli_query($conn,$qr1);
if($res1!=NULL)
{
	echo"<script>location.href='admin.php';</script>";
}





?>