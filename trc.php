<!DOCTYPE html>
<html lang="en">

<head>

	
	<style>
		.mar{margin-left:50px};
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
    <meta charset="utf-8">
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

 
 
 <style>
 
 .mar{
		margin-left:150px;
 
 }
 .ma{
		margin-top:150px;
 
 }
 
 </style>
 </head>

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
                        <a href="RV.html">Register Compliant &nbsp; <span class="glyphicon glyphicon-pencil"></span> </a>
						
                    </li>
                    <li>
                        <a href="suggestion.html">Suggestion &nbsp;  <span class="glyphicon glyphicon-thumbs-up"></span></a>
                    </li>
                    
					<li>
                        <a href="help.html">Help &nbsp; <span class="glyphicon glyphicon-question-sign"></span></a>
                    </li>
					<li>
                        <a href="contact.html">About us &nbsp; <span class="glyphicon glyphicon-info-sign"></span></a>
                    </li>

                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   

    <!-- Page Content -->
     <div align="center" class="ma"><b><font size="8" >Check Your Complaint Status</font></b><br><br>
  	 
	<!--size=12 maxlength=10 value=""  onkeypress="Javascript:if ((event.keyCode<48) || (event.keyCode>57)) {event.keyCode=false; alert('Enter Numeric Value');this.focus();}" title="Enter Complaint No"-->

                
               
		<div class="container mar">
             <div class="form-group">
				   <form name='cform'  method="post">
                    <label for="Name" class="col-sm-3 control-label ">Complaint No: </label>
                    <div class="col-sm-3">
                        <input type="text" maxlength="10" id="cmpno" name="co" pattern="[a-zA-Z]{4}[0-9]{6}" placeholder="For e.g cmpn220317" class="form-control"  title="Enter Complaint No" required>
						</div>					
					</br></br>
                </br>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <input type="submit" class="btn btn-primary btn-md" value="COMPLAINT STATUS" ></button>
                    </div>
                </div>
				</form>
			</div>	
		</div>
		<br>
		
		<div class="container">
			<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
			
			<div class="jumbotron">
			<?php

					 $host="127.0.0.1";
					 $user="root";
					 $pass="";
					 $db="hackathon"; 
					 
					 $com = $_POST['co'];
					 //$tno =$_COOKIE['ticket'];
					$conn=mysqli_connect($host,$user,$pass,$db);
					if($conn==null)
					{
						 die("ERROR IN CONNECTION".mysqli_connect());
					 }
					 //$w='cmpn123456';
					 $q="SELECT * FROM status where Complaint_no='$com'";
						
					 
					$res=mysqli_query($conn,$q);
					while($s=mysqli_fetch_array($res))
					{	
						echo "<h3><kbd>$s[1]</kbd></h3>";
						if($s[1]=='pending'){
						echo "<br>Station Master still not consider your problem as Genuine...";
						}
						else if($s[1]=='approved'){
						echo "<br>Your Register Problem will solve within 15 days of Approved date.";	
						}
						else{
							echo "<br>Your Problem is <b>Solved</b>...";	
						}
					}

					
			?>
				</div>
				</div>
			</div>
		   </div>
		</div>


	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>

</body>

</html>

