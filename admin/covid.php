<!DOCTYPE html>
<?php
	require_once 'logincheck.php';
	$year = date("Y", strtotime("+8 HOURS"));
	$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
	$qjan = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Jan' && `year` = '$year'") or die(mysqli_error());
	$fjan = $qjan->fetch_array();
	$qfeb = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Feb' && `year` = '$year'") or die(mysqli_error());
	$ffeb = $qfeb->fetch_array();
	$qmar = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Mar' && `year` = '$year'") or die(mysqli_error());
	$fmar = $qmar->fetch_array();
	$qapr = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Apr' && `year` = '$year'") or die(mysqli_error());
	$fapr = $qapr->fetch_array();
	$qmay = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'May' && `year` = '$year'") or die(mysqli_error());
	$fmay = $qmay->fetch_array();
	$qjun = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Jun' && `year` = '$year'") or die(mysqli_error());
	$fjun = $qjun->fetch_array();
	$qjul = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Jul' && `year` = '$year'") or die(mysqli_error());
	$fjul = $qjul->fetch_array();
	$qaug = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Aug' && `year` = '$year'") or die(mysqli_error());
	$faug = $qaug->fetch_array();
	$qsep = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Sept' && `year` = '$year'") or die(mysqli_error());
	$fsep = $qsep->fetch_array();
	$qoct = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Oct' && `year` = '$year'") or die(mysqli_error());
	$foct = $qoct->fetch_array();
	$qnov = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Nov' && `year` = '$year'") or die(mysqli_error());
	$fnov = $qnov->fetch_array();
	$qdec = $conn->query("SELECT COUNT(*) as total FROM `covid` WHERE `month` = 'Dec' && `year` = '$year'") or die(mysqli_error());
	$fdec = $qdec->fetch_array();
	$year = date("Y");
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
		<script src = "../js/jquery.canvasjs.min.js"></script>
		<script type="text/javascript"> 
		window.onload = function(){ 
			$(".chartContainer").CanvasJSChart({ 
				title: { 
					text: "Monthly PUI and PUM Patient <?php echo $year?>" 
				}, 
				axisY: { 
					title: "Total Population", 
					includeZero: false 
				}, 
				data: [ 
				{ 
					type: "column", 
					toolTipContent: "{label}: {y}", 
					dataPoints: [ 
						{ label: "January", y: <?php echo $fjan['total']?> },
						{ label: "Febuary", y: <?php echo $ffeb['total']?> },
						{ label: "March", y: <?php echo $fmar['total']?> },
						{ label: "April", y: <?php echo $fapr['total']?> },
						{ label: "May", y: <?php echo $fmay['total']?> },
						{ label: "June", y: <?php echo $fjun['total']?> },
						{ label: "July", y: <?php echo $fjul['total']?> },
						{ label: "August", y: <?php echo $faug['total']?> },
						{ label: "September", y: <?php echo $fsep['total']?> },
						{ label: "October", y: <?php echo $foct['total']?> },
						{ label: "November", y: <?php echo $fnov['total']?> },
						{ label: "December", y: <?php echo $fdec['total']?> }
					] 
				} 
				] 
			}); 
		}
</script>
	</head>
<body>
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
						<!-- <li><a href = "user.php"><i class = "glyphicon glyphicon-cog"></i> User</a></li> -->
					</ul>
				</li>
				<li><li><a href = "patient.php"><i class = "glyphicon glyphicon-user"></i> Patient</a></li></li>
				<li><a href = ""><i class = "glyphicon glyphicon-folder-close"></i> Records</a>
					<ul>
						
						<li><a href = "covid.php"><i class = "glyphicon glyphicon-folder-open"></i> PUI/PUM</a></li>
						
					</ul>
				</li>
			</ul>
	</div>
	<div id = "content">
		<br />
		<br />
		<br />
		<div id = "ta" class = "well">
			<div class="chartContainer" style="height: 300px; width: 100%"></div>	
		</div>
		<button id = "s_target" class = "btn btn-success"><span class = "glyphicon glyphicon-eye-open"></span> Show Record</button>
		<button id = "h_target" style = "display:none;" class = "btn btn-danger"><span class = "glyphicon glyphicon-eye-close"></span> Hide Record</button>
		<br />
		<br />
		<div id = "target">
			<div class = "alert alert-info">PUI and PUI Records</div>
			<table id = "table" cellspacing = "0" class = "display">
				<thead>
					<tr>
						<th>ITR No</th>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Address</th>
						<th><center>Action</center></th>
					</tr>
				</thead>
				<tbody>
				<?php
						$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `itr` ORDER BY `itr_no` DESC") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
						$id = $fetch['itr_no'];
					
					?>
						<tr>
							<td><?php echo $fetch['itr_no']?></td>
							<td><?php echo $fetch['firstname']." ".$fetch['lastname']?></td>
							<td><?php echo $fetch['age']?></td>				
							<td><?php echo $fetch['gender']?></td>				
							<td><?php echo $fetch['address']?></td>
							<td><?php echo $fetch['civil_status']?></td>
						
					<?php
					}
				?>		
				</tbody>
			</table>
		</div>
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Covid-19 PUM and PUI MONITORING SYSTEM 2020</label>
	</div>
	<script type = "text/javascript">
		$(document).ready(function(){
			$("#target").hide();
			$("#s_target").click(function(){
				$("#target").fadeIn();
				$("#s_target").hide();
				$("#ta").slideUp();
				$("#h_target").show();
			});
			$("#h_target").click(function(){
				$("#target").fadeOut();
				$("#s_target").show();
				$("#h_target").hide();
				$("#ta").slideDown();
			});
		});
	</script>
</body> 
</html>