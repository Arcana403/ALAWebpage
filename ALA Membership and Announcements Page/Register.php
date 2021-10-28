<!doctype>
<html>
<head>
	<title> ALA Membership and Announcements Page </title>
	<meta charset = "UTF-8">
	<style>
		body{
			background-color: rgb(222, 200, 95);					
		}
		#body{
			background-color: rgb(222, 200, 95);
			width: 1200px;
			margin: auto;
			margin-top: 10px;
		}
		#header{
			font-size: 60px;
			font-weight: bold;
			text-align: center;
		}
		#form{
			background-color: rgb(239, 228, 176);
			width: 300px;
			height: 250px;
			margin: auto;
			margin-top: 70px;
			border-radius: 15px;
			padding: 10px;
			font-size:30px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		$ala = $_POST["ala"];
		$name = $_POST["lname"];
		$sec = $_POST["section"];
		$u = $_POST["uname"];
		$p = $_POST["pword"];
		if(!isset($_SESSION["m"])){
			header('location:Index.php');
		}
	?>
	<div id = "body">
		<p id = "header"> <?php echo $ala; ?></p>
		<p id = "description"> <?php 
			foreach($_SESSION["ALAList"] as $key => $alaName){
				if(strcmp($ala, $alaName) == -2 || strcmp($ala, $alaName) == 0){
					echo $_SESSION["ALADesc"][$key];
				}
			}
		?></p>		
		<div id = "form">
			<p>Successfully registered to <?php echo $ala; ?></p>
		</div>
	</div>
</body>
</html>