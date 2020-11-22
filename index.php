<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Covid-19 PUM and PUI MONITORING SYSTEM</title>
		<meta charset = "utf-8" />
		<link rel = "shortcut icon" href = "images/imahe.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	</head>
<body>
	<div class = "navbar navbar-default navtop">
		<img src = "images/imahe.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Covid-19 PUM and PUI MONITORING SYSTEM</label>
		
		<div class="form-inline" align ="right"><button style = "width:5pc;margin-right:20px;margin-top:10px;background-color: #e7e7e7;" class  = "btn btn-success form-control"><a href="admin/index.php"> <span class = "glyphicon glyphicon-log-in"></span>Admin</a></button></div>
	</div>
		<div id = "sidelogin">
			<form action = "login.php" enctype = "multipart/form-data" method = "POST" >
				<label class = "lbllogin">Please Login Here...</label>
			
				<hr /style = "border:1px dotted #000;">
				
				<div class = "form-group">
					<label for = "username">Email</label>
					<input class = "form-control" type = "text" name = "username"  required = "required"/>
				</div>
			
				<div class = "form-group">
					<label for = "password">Password</label>
					<input class = "form-control" type = "password" name = "password" required = "required" />
				</div>
				
				<div class = "form-group">
					<button class  = "btn btn-success form-control" type = "submit" name = "login" ><span class = "glyphicon glyphicon-log-in"></span> Login</button>
				</div>
				
				
			</form>
			<button class  = "btn btn-success form-control"><a href="patient.php"> <span class = "glyphicon glyphicon-log-in"></span>Register</a></button>
		</div>	
		<img src = "images/covid.jpg" class = "background" style ="marging-bottom:50px">			
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Covid-19 PUM and PUI MONITORING SYSTEM 2020</label>
	</div>
</body>
<?php
	include("script.php");
?>
</html>