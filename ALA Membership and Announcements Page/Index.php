<!doctype>
<html>
<head>
	<title> ALA Membership and Announcements Page </title>
	<meta charset = "UTF-8">
	<script>
		function x(){
			document.getElementById("login").style.top = "-1100px";
		}
		function log(){
			document.getElementById("login").style.top = "180px";
		}
	</script>
	<style>
		body{
			background-color: rgb(222, 200, 95);					
		}
		#login{
			width: 280px;
			padding: 30px;
			background-color: rgb(239, 228, 176);
			position: absolute;
			top: -1100px;
			left:  500px;
			transition: all 0.7s ease-in-out;
			border-radius: 10px;
		}
		#x{
			background-color: rgb(239, 228, 176);
			border: none;
			color: red;
			font-weight: bold;
			font-size: 18px;
			position : relative;
			top: -23px;
			left: 283px;
			cursor: pointer;
		}
		#log{
			position: relative;
			top: 10px;
			left: 210px;
		}
		#body{
			background-color: rgb(222, 200, 95);
			width: 1000px;
			margin: auto;
			margin-top: 10px;
		}
		#header{
			font-size: 60px;
			font-weight: bold;
			text-align: center;
		}
		#in{
			font-size: 25px;
			font-weight: bold;
			text-align: center;
			position: absolute;
			top: 15px;
			left: 1250px;
		}
		#list a{
			text-decoration: none;
			color: black;
			font-size: 25px;
			font-weight: bold;
		}
		#list{
			background-color: rgb(239, 228, 176);
			text-align: center;
			width: 200px;
			padding: 10px;
			position: absolute;
			top: 500px;
			left: 1090px;
		}
	</style>
	<?php
		session_start();
		
		$_SESSION["ALAList"] = file("ALAList.txt");
		$_SESSION["ALADesc"] = file("ALADescription.txt");
		$_SESSION["m"] = 1;
	?>
</head>
<body>
	<p> <button onClick = "log()" id = "in">Log In</button> </p>
	<div id = "body">
		<p id = "Header"> Alternative Learning Activities </p>
		<p id = "description"> &lt; -----------------------------------------------------------------------Input description here------------------------------------------------------------------------------------- &gt; </p>
	</div>
	<p id = "list"><a href = "List.php">List of ALA's</a></p>
	<div id = "login">
		<button id = "x" onClick = "x()">x</button>
		<form action = "LogIn.php" method = "post">
			<p> ALA: <select id = "ala" name = "ala">
				<option value = ""> </option>
				<?php
					foreach($_SESSION["ALAList"] as $ala){
						echo '<option value = "'.$ala.'">'.$ala.'</option>';
					}
				?>
			</select> </p>
			<p> Username: <input type = "text" name = "uname"> </p>
			<p> Password: <input type = "password" name = "pword"> </p>
			<p> <input id = "Log" type = "submit" name = "login" value = "Submit"> </p>
		</form>
	</div>
</body>
</html>