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
 ?>