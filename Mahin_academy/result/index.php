<?php
include('connection.php');
session_start();
 ?>
<html>
	<head>
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="css/bootstrap.css"/>
		<script src="js/jquery_library.js"></script>
                <script src="js/bootstrap.min.js"></script>
	</head>
	<body>
<div  style=" margin-top:50px; margin-left:385px;margin-right:500px;">
  <div class="container">
    <ul class="nav navbar-nav navbar-center">
      <li style="background-color: gold"><a href="index.php?option=New_user"><span class="glyphicon glyphicon-user"></span><b> Sign Up</b></a></li>
      <li style="background-color: gold"><a href="index.php?option=login"><span class="glyphicon glyphicon-log-in"></span><b> Login</b></a></a></li>
<li style="background-color: gold"><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><b> Home</b></a></a></li>
    </ul>
</div>
</div>
</br>
</br>

<div style=" margin-top: 150x;">
<div class="container">
	<div class="row">
	<!-- container -->
		<div class="col-sm-8">
		<?php
		@$opt=$_GET['option'];

		if($opt!="")
		{

			if($opt=="New_user")
			{
			include('registration.php');
			}


			else if($opt=="login")
			{
			include('login.php');
			}
		}
		?>
		</div>
	</div>
</div>
</div>



<br/>
<br/>
<br/>
<br/>

	</body>
</html>
