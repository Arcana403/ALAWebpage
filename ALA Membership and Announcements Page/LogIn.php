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
	</style>
</head>
<body>
	<?php
		session_start();
		$ala = $_POST["ala"];
		if(!isset($_SESSION["m"])){
			header('location:Index.php');
		}
		if($_POST["uname"] == "admin" && $_POST["pword"] == "admin"){
			header('location:Admin.php');
		}
		else{
			header('location:Announcements.php?ala='.$ala.'');
		}
	?>
	<p id = "header"></p>
</body>
</html>