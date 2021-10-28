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
		form{
			background-color: rgb(239, 228, 176);
			width: 300px;
			height: 250px;
			margin: auto;
			margin-top: 70px;
			border-radius: 15px;
			padding: 10px;
		}
		#submit{
			text-align: right;
			margin-right: 50px;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		$ala = $_GET["name"];
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
		<form action = "Register.php" method = "post">
			<p>ALA: <input type = "text" name = "ala" value = "<?php echo $ala; ?>"></p>
			<p>Last Name: <input type = "text" name = "lname"></p>
			<p>Section: <input type = "text" name = "section"></p>
			<p>Username: <input type = "text" name = "uname"></p>
			<p>Password: <input type = "password" name = "pword"></p>
			<p id = "submit"><input type = "submit" name = "Submit" value = "Submit"></p>
		</form>
	</div>
</body>
</html>