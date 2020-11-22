<!DOCTYPE html>
<html lang = "eng">
	<head>
		<title>Covid-19 PUM and PUI MONITORING SYSTEM</title>
		<meta charset = "utf-8" />
		<link rel = "shortcut icon" href = "../images/imahe.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
	</head>
<body>
	<div class = "navbar navbar-default">
		<img src = "../images/imahe.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Covid-19 PUM and PUI MONITORING SYSTEM</label>
		<div class="form-inline" align ="right"><button style = "width:5pc;margin-right:20px;margin-top:10px;" class  = "btn btn-success form-control"><a href="../index.php"> <span class = "glyphicon glyphicon-log-in"></span>User</a></button></div>
	</div>
	<div id = "top" class = "login">
		<div class = "panel panel-primary">
			<div class = "panel-heading">
				<center><h1 class = "panel-title">Administrator</h1></center>
			</div>
			<div class = "panel-body">
				<form enctype = "multipart/form-data" action = "login.php" role = "form" method = "POST">
					<div class = "form-group">
						<label for = "username">Username</label>
						<input class = "form-control" name = "username" placeholder = "Username" type = "text" required = "required" >
					</div>
					<div class = "form-group">
						<label for = "password">Password</label>
						<input class = "form-control" name = "password" placeholder = "Password" type = "password" required = "required" >
					</div>
					<div class = "form-group">
						<button class = "btn btn-block btn-success"  name = "login"><span class = "glyphicon glyphicon-log-in"></span> Login</button>
					</div>
				</form>
			</div>
		</div>	
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Covid-19 PUM and PUI MONITORING SYSTEM 2020</label>
	</div>
</body>
<?php
	include("script.php");
?>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>
</html>