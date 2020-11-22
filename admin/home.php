<!DOCTYPE html>
<?php
	require_once 'logincheck.php';
	$date = date("Y", strtotime("+ 8 HOURS"));
	$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
	$qcovid = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `year` = '$date' GROUP BY `itr_no`") or die(mysqli_error());
	$fcovid = $qcovid->fetch_array();
	
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
		<?php require 'script.php'?>
		
		
	<meta name="viewport" content="width=device-width, initial-scale=1.0"  
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maps.google.com/maps/api/js?v=3&amp;sensor=false&amp;libraries=adsense&amp;key=AIzaSyAjLbMMKNhb9asisquPMenEicfv5KktqEk"></script>
    <script src="js/maps.js"></script>
    <script src="js/leaflet-0.7.5/leaflet.js"></script>
    <script src="js/leaflet-plugins/google.js"></script>
    <script src="js/leaflet-plugins/bing.js"></script>
    <link rel="stylesheet" href="js/leaflet-0.7.5/leaflet.css">
    <link rel="stylesheet" href="css/styles.css">
		
	</head>
<body>
	<div class = "navbar navbar-default navbar-fixed-top">
		<img src = "../images/imahe.png" style = "float:left;" height = "55px" /><label class = "navbar-brand">Covid-19 PUM and PUI MONITORING SYSTEM</label>
		<?php 
			$q = $conn->query("SELECT * FROM `admin` WHERE `admin_id` = $_SESSION[admin_id]") or die(mysqli_error());
			$f = $q->fetch_array();
		?>
			<ul class = "nav navbar-right">	
				<li class = "dropdown">
					<a class = "user dropdown-toggle" data-toggle = "dropdown" href = "#">
						<span class = "glyphicon glyphicon-user"></span>
						<?php 
							echo $f['firstname']." ".$f['lastname'];
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
					</ul>
				</li>
				<li><li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient</a></li></li>
				<li><a href = ""><i class = "glyphicon glyphicon-folder-close"></i> Records</a>
					<ul>
						<li><a href = "covid.php"><i class = "glyphicon glyphicon-folder-open"></i> PUI/PUM</a></li>
					
					</ul>
				</li> 
				<li><a href = "form.php"><i class = "glyphicon glyphicon-home"></i> Send Email</a></li>
			</ul>
	</div>
	<div id = "content">
		<br />
		<br />
		<br />
		<div class = "well">
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-4" id="toplogo">
                <img id="halimage" src="images/gpstracker-man-37.png">GpsTracker
            </div>
            <div class="col-sm-8" id="messages"></div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="mapdiv">
                <div id="map-canvas"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="selectdiv">
                <select id="routeSelect" tabindex="1"></select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 deletediv">
                <input type="button" id="delete" value="Delete" tabindex="2" class="btn btn-primary">
            </div>
            <div class="col-sm-3 autorefreshdiv">
                <input type="button" id="autorefresh" value="Auto Refresh Off" tabindex="3" class="btn btn-primary">
            </div>
            <div class="col-sm-3 refreshdiv">
                <input type="button" id="refresh" value="Refresh" tabindex="4" class="btn btn-primary">
            </div>
            <div class="col-sm-3 viewalldiv">
                <input type="button" id="viewall" value="View All" tabindex="5" class="btn btn-primary">
            </div>
        </div>
    </div>
		</div>
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Covid-19 PUM and PUI MONITORING SYSTEM 2020</label>
	</div>
		
</body>
</html>