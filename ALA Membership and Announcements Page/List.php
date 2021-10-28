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
		.AlaName{
			width: 330px;
			height: 100px;
			text-align: center;
			float: left;
			margin: 10px;
			padding: 10px;
			background-color: rgb(239, 228, 176);
			border-radius: 10px;
			font-size:30px;
			font-weight: bold;
		}
		a{
			color: black;
			text-decoration: none;
		}
	</style>
	<?php
		session_start();
		if(!isset($_SESSION["m"])){
			header('location:Index.php');
		}
	?>
</head>
<body>
	<div id = "body">
		<p id = "Header"> List of ALA's</p>
		<?php
			foreach($_SESSION["ALAList"] as $ala){
				echo '<p class = "AlaName"><a href = "ALA.php?name='.$ala.'">'.$ala.'</a></p>';
			}
		?>
	</div>
</body>
</html>