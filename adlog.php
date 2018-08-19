<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Railway Voice</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


<style>
.c{ margin-top:150px;}
.input {
    border: 1px solid #ccc;
}

input:invalid {
    background: #fff3f3;
    border-color: #f66;
}

.comment{
margin-left: 20px;
box-shadow: 0 2px 0 #e6e6e6;
height: 40px;
padding-left: 10px;
width: 650px;
height: 200px;
}
.navbar-custom {
    background-color:#3b5998;
    color:#ffffff;
    border-radius:0;
}

.navbar-custom .navbar-nav > li > a {
    color:#fff;
}

.navbar-custom .navbar-nav > .active > a {
    color: #ffffff;
    background-color:transparent;
}

.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus,
.navbar-custom .navbar-nav > .open >a {
    text-decoration: none;
    background-color: #33aa33;
}

.navbar-custom .navbar-brand {
    color:#eeeeee;
}
.navbar-custom .navbar-toggle {
    background-color:#eeeeee;
}
.navbar-custom .icon-bar {
    background-color:#33aa33;
}
</style>


</head><script type="text/javascript" language="javascript">
	function frmValidation()
	{
		if(document.getElementById('uname').value =="")
		{
			alert("Please Enter User Name.");
			return false;
		}
		else if(document.getElementById('pass').value =="")
		{
			alert("Please Enter Password.");
			return false;
		}
		else
		{
			return true;	
		}
	}	
</script>
<?php
$host="127.0.0.1";
 $user="root";
 $pass="";
 $db="hackathon"; 

//$uname = $_REQUEST['uname'];
//$pass = $_REQUEST['pass'];
 
$conn=mysqli_connect($host,$user,$pass,$db);
 if($conn==null)
 {
	 die("ERROR IN CONNECTION".mysqli_connect());
 }
 ?>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">RAIL-Voice</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">&nbsp;<span class="glyphicon glyphicon-volume-up"></span> VOICE 2 RAILWAY <span class="glyphicon glyphicon-home"></span> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    					<li>
                        <a href="help.html">Help &nbsp; <span class="glyphicon glyphicon-question-sign pull-right"></span></a>
                    </li>
					<li>
                        <a href="aboutus.html">About us &nbsp; <span class="glyphicon glyphicon-info-sign"></span></a>
                    </li>

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php if(isset($_REQUEST['Submit']))
							{
								$str ="select * from tbladmin_user where Username='".$_REQUEST['uname'] ."' and Password='".$_REQUEST['pass']."'";
								//$str ="select * from tbladmin_user where Username='".$_REQUEST['uname'] ."' and Password='".$_REQUEST['pass']."' and  Category='".$_REQUEST['Cat']."'";
								//echo $str;
								//exit();
								//echo md5($_REQUEST['txtPassword']); exit();
								//echo ($_REQUEST['uname']);
								//echo ($_REQUEST['pass']);
								//echo ($_REQUEST['Cat']);
								
								$rs = mysqli_query($conn,$str);
								
								if(mysqli_num_rows($rs)>0)
								{
						
								 if($_REQUEST['Cat']=="City HeadMaster")
								 {
									echo "<script>location.href='admin1.php';</script>";
								 }
								 else
								 {
									 echo "<script>location.href='admin2.php';</script>";
								 }
									//$_SESSION['UserName']=$_REQUEST['txtUserName'];
										
								}
								else
								{
									echo "Invalid Login..";	
								}
								
								
							}?>
	<!-- LOGIN form area -->

   <div class="container c" align="center">
   <fieldset>
   
  <legend><h2>Login</h2></legend>
  
  <form class="form-inline" method="post" onsubmit="return frmValidation();">
  
			<div class="container">
			<b>Category:</b>
			<div class="form-group">
			  
			  <div class="col-sm-6 col-md-4">
				<select id="category" name="Cat" class="form-control" required>
				  <option>City HeadMaster</option>
				  <option>Zonal HeadMaster</option>
				</select> 
			  </div> 
			</div>
			</div>
			<br>

			<div class="input-group input-group-lg">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-user"></span>
					</span>
			<input class="form-control" id="uname" name="uname" type="text" placeholder="User Name" required >
			</div><br><p>&nbsp;</p>

			<div class="input-group input-group-lg">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
				  </span>
   		    <input class="form-control" type="password" id= "pass" name="pass" placeholder="Password" required>
			</div><br><p> </p>
			
			<div class="checkbox">
				<label><input type="checkbox" name="check"> Remember me</label>
			</div><br><br>
			<button type="submit" class="btn btn-primary" name="Submit">Submit</button> &nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn btn-primary">Reset</button>
   
  </div></form></fieldset>
</div>
       
   
   
   
   
   
   
   
   
   
   
   <!-- /.container -->

    <!-- jQuery -->
    <script src="./loginhtml_files/jquery.js.download"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./loginhtml_files/bootstrap.min.js.download"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>




</body></html>