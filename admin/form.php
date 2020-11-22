<!DOCTYPE html>
<?php
	require_once 'logincheck.php';
?>
<html lang = "eng">
	<head>
		<title>Covid-19 PUM and PUI MONITORING SYSTEM</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "../images/imahe.png" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/customize.css" />
	</head>
<body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
	
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "../images/imahe.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Covid-19 PUM and PUI MONITORING SYSTEM</label>
			<?php
				$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
				$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = '$_SESSION[admin_id]'") or die(mysqli_error());
				$f = $q->fetch_array();
			?>
			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						<?php
							echo $f['firstname']." ".$f['lastname'];
							$conn->close();
						?>
						<b class = "caret"></b>
					</a>
				<ul class = "dropdown-menu">
					<li>
						<a class = "me" href = "logout.php"><i class = "glyphicon glyphicon-log-out"></i> Logout</a>
					</li>
				</ul>
				</li>
			</ul>
	</div>
	<div id = "sidebar">
			<ul id = "menu" class = "nav menu">
				<li><a href = "home.php"><i class = "glyphicon glyphicon-home"></i> Dashboard</a></li>
				<li><a href = ""><i class = "glyphicon glyphicon-cog"></i> Accounts</a>
					<ul>
						<li><a href = "admin.php"><i class = "glyphicon glyphicon-cog"></i> Administrator</a></li>
						<!-- <li><a href = "user.php"><i class = "glyphicon glyphicon-cog"></i> User</a></li>-->
					</ul>
				</li>
				<li><li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient</a></li></li>
				<li><a href = ""><i class = "glyphicon glyphicon-folder-close"></i> Sections</a>
					<ul>
						<!--<li><a href = "fecalysis.php"><i class = "glyphicon glyphicon-folder-open"></i> Fecalysis</a></li>
						<li><a href = "maternity.php"><i class = "glyphicon glyphicon-folder-open"></i> Maternity</a></li>
						<li><a href = "hematology.php"><i class = "glyphicon glyphicon-folder-open"></i> Hematology</a></li> -->
						<li><a href = "covid.php"><i class = "glyphicon glyphicon-folder-open"></i> covid</a></li>
						<!--<li><a href = "xray.php"><i class = "glyphicon glyphicon-folder-open"></i> Xray</a></li>
						<li><a href = "rehabilitation.php"><i class = "glyphicon glyphicon-folder-open"></i> Rehabilitation</a></li>
						<li><a href = "sputum.php"><i class = "glyphicon glyphicon-folder-open"></i> Sputum</a></li>
						<li><a href = "urinalysis.php"><i class = "glyphicon glyphicon-folder-open"></i> Urinalysis</a></li> -->
					</ul>
				</li>
			</ul>
	</div>
	<div id = "content">
		<br />
		<br />
		<br />
		<div class = "panel panel-success">	
		
			<div class = "panel-heading">
				<label>Send Notification</label>
				<a href = "home.php" class = "btn btn-sm btn-info" style = "float:right; margin-top:-5px;"><span class = "glyphicon glyphicon-hand-right"></span> BACK</a>
			</div>
			<div class = "panel-body">
				<form id = "form_admin" method = "POST" enctype = "multi-part/form-data" >
					<div class = "panel panel-default" style = "width:60%; margin:auto;">
					
					<div class = "panel-body" align = "center">
					
						 <div class="contact-form" >
        
        <form class="contact" action="" method="post">
		<label for = "address">Name:</label><br />
          <input  type="text" name="name" class="text-box" placeholder="Your Name" required> <br />
		  <br />
		  <label for = "address">Email:</label><br />
          <input type="email" name="email" class="text-box" placeholder="Your Email" required><br />
		  <br /><div class = "form-inline">
						<label for = "message">Message:</label><br />
					
         <textarea  name="message"  placeholder="Your Message" style="width:50%;"   required></textarea></div>
		 <br />
          <input style = "margin-right:10px;" type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
	  
	  </div>
					   <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
								
					</div>
				</form>
			</div>	
		</div>	
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Covid-19 PUM and PUI MONITORING SYSTEM 2020</label>
	</div>
<?php require'script.php' ?>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>	
</body>
</html>