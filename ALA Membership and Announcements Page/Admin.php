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
			width: 600px;
			margin: auto;
			margin-top: 10px;
		}
		#header{
			font-size: 60px;
			font-weight: bold;
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		session_start();
		
	?>
	<p id = "header">ADMIN</p>
	<div id = "body">
	<form action = "announce.php" method = "post">
		<p> ALA: <select id = "ala" name = "ala">
			<option value = ""> </option>
			<?php
				foreach($_SESSION["ALAList"] as $ala){
					echo '<option value = "'.$ala.'">'.$ala.'</option>';
				}
			?>
		</select> </p>
		<p><textarea id="notes" rows="20" cols="75" placeholder="Enter the announcement..."></textarea>
	</form>
	</div>
</body>
</html>