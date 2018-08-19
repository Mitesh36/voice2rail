<?php

 $host="127.0.0.1";
 $user="root";
 $pass="";
 $db="hackathon"; 
 
 //$com = $_POST['co'];
 //$tno =$_COOKIE['ticket'];
$conn=mysqli_connect($host,$user,$pass,$db);
if($conn==null)
{
	 die("ERROR IN CONNECTION".mysqli_connect());
 }
 //$w='cmpn123456';
$q1="SELECT * FROM reg where ccat='Booking Tickets'";   

$res1=mysqli_query($conn,$q1);

$num_rows1 = mysqli_num_rows($res1);


?>

<!DOCTYPE html>
<!-- saved from url=(0039)file:///D:/voice/index%20-%20Copy.html? -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Railway Voice</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript --
    <script src="js/bootstrap.min.js"></script>
	
	 <!-- Bootstrap Validation JavaScript -->
      <script src="js/bootstrapValidator.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>
<script>
		

</script><style>
		.border{border-radius: 5px;}
		.huge {
  font-size: 40px;
 
}
.tp{
	margin-top:50px;
}
.tpm{
	margin-top:100px;
	margin-left:250px;;
}

.lft{margin-left:10px}
		.mar{margin-top:50px};
		.marm{margin-top:10px};
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
</style></head>




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
                        <a href="#">Booking Tickets<span class="badge"><?php echo "$num_rows1";?></span></a>
                    </li>
					
					
					<li>
                        <a href="admlogin.html">Logout &nbsp; <span class="glyphicon glyphicon-log-out"></span></a>
                    </li>

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
<?php /* if(isset($_REQUEST['Submit']))
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
									echo "<script>location.href='admin.php';</script>";
								 }
								 else
								 {
									 echo "<script>location.href='s1.html';</script>";
								 }
									//$_SESSION['UserName']=$_REQUEST['txtUserName'];
										
								}
								else
								{
									echo "Invalid Login..";	
								}
		*/						

								
function del()
{
	
	echo"deleted";
}								
}?>

	
	
	
	
	

	
	<div class="tpm">
	<?php 
	while($s=mysqli_fetch_array($res1))
	{ ?>
	<form >	
		<div class=" col-sm-3 col-md-10 ">
				<div class=" col-sm-3 col-md-10 ">
				 <div class="panel panel-info border" >
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-left">
                                    <div ><b>Email:</b><?php	echo  "$s[1]"; ?></div>
                                </div>
                            </div
                        </div>
						</div>
						<p class="lft ">
						
						<b>Comaplint:<br></b><?php echo  "$s[7]"; ?>
						</p>
				   </div>
				
		        </div>
				<div>
				 <div class="col-sm-3 btn-group  ">
                        <button type="button" class="btn btn-primary" onclick="del()">Approved</button>
						<button type="button" class="btn btn-primary">Solved</button><br><br><br><br>
                    </div>
                </div>
		</div>
			
		</form>
		
	<?php echo"<br><br>";} ?>		

	</div>
	
		
   </form>
   </div>
</body>
</html>