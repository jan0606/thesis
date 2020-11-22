<!DOCTYPE html>

<html lang = "eng">
	<head>

		<title>Covid-19 PUM and PUI MONITORING SYSTEM</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = "shortcut icon" href = "../images/imahe.png" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/jquery.dataTables.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/customize.css" />
	
	</head>
<body>
	

	<div id = "center-content">
	
		
		<div  id = "add_itr" class = "panel panel-success">	
			<div class = "panel-heading" align ="center" >
			<div class="form-inline" align ="left"><button style = "width:5pc;margin-right:20px;margin-top:10px;background-color: #e7e7e7;" class  = "btn btn-success form-control"><a href="index.php"> <span class = "glyphicon glyphicon-log-in"></span>Login</a></button></div>
			<label style ="font-size: 20px;" >Case Investigation Form</label>
			
				
				
			</div>
			<div class = "panel-body" style = "margin-left:8%">
				<form id = "form_covid" method = "POST" enctype = "multipart/form-data"  onSubmit="alert('Thank you for your!');">
					<div style = "float:left;" class = "form-inline">
						
						<input class = "form-control" size = "3" min = "0" type = "hidden" name = "itr_no"> 
					</div> 
					
				
					<div class="form-inline" align = "right" style ="margin-right:10px;">
                        <div class="col-md">
                      <label for = "dateadded" >Date :</label>
                          <input class="form-control input-sm" id="dateadded" name="dateadded" style = "width:15%;"  type="Date" required >  
                       
                      </div>
                      <br />
                    </div>
					<br />
					<div class = "form-inline">
						<label for = "firstname">Firstname:</label>
						<input class = "form-control" name = "firstname" type = "text" required = "required" >
						&nbsp;&nbsp;&nbsp;
						<label for = "middlename">Middle Name:</label>
						<input class = "form-control" name = "middlename" placeholder = "(Optional)" type = "text" >
						&nbsp;&nbsp;&nbsp;
						<label for = "lastname">Lastname:</label>
						<input class = "form-control" name = "lastname" type = "text" required = "required" >
					</div>
					<br />
					<div class = "form-group">
						<label for = "birthdate" style = "float:left;">Birthdate:</label>
						<br style = "clear:both;" />
						<select name = "month" style = "width:15%; float:left;" class = "form-control" required = "required" >
							<option value = "">Select a month</option>
							<option value = "01">January</option>
							<option value = "02">February</option>
							<option value = "03">March</option>
							<option value = "04">April</option>
							<option value = "05">May</option>
							<option value = "06">June</option>
							<option value = "07">July</option>
							<option value = "08">August</option>
							<option value = "09">September</option>
							<option value = "10">October</option>
							<option value = "11">November</option>
							<option value = "12">December</option>
						</select>
						<select name = "day" class = "form-control" style = "width:13%; float:left;" required = "required">
							<option value = "">Select a day</option>
							<option value = "01">01</option>
							<option value = "02">02</option>
							<option value = "03">03</option>
							<option value = "04">04</option>
							<option value = "05">05</option>
							<option value = "06">06</option>
							<option value = "07">07</option>
							<option value = "08">08</option>
							<option value = "09">09</option>	
							<?php
								$a = 10;
								while($a <= 31){
									echo "<option value = '".$a."'>".$a++."</option>";
								}
								
							?>
						</select>
						<select name = "year" class = "form-control" style = "width:15%; float:left;" required = "required">
							<option value = "">Select a year</option>
							<?php
								$a = date(Y);
								while(1965 <= $a){
									echo "<option value = '".$a."'>".$a--."</option>";
								}
							?>
						</select>
						<br style = "clear:both;"/>
						<br /><div class =  "form-inline">
						<label for = "email">Email:</label>
						<input name = "email" placeholder = "email@gmail.com" style = "width:30%;" class = "form-control" type = "text" >
						<label for = "pass">Password:</label>
						<input name = "pass" placeholder = "********" style = "width:15%;" class = "form-control" type = "password" required = "required" >
						<label for = "phone" style = "margin-left:10px;" >Mobile no :</label>
						<input name = "phone" class = "form-control" placeholder = "091234567890" name = "phone" style = "width:15%; margin-left:10px;" type = "number"  required = "required" ></div>
						<br />
						<label for = "address">Address:</label>
						<input style ="width:80%" class = "form-control" name = "address" type = "text" required = "required" >
						<br />
						<label for = "age">Age:</label>
						<input class = "form-control" style = "width:20%;" min = "0" max = "999" name = "age" type = "number" >
						<br />
						<label for = "civil_status">Civil Status:</label>
						<select style = "width:22%;" class = "form-control" name = "civil_status" required = "required" >
							<option value = "">--Please select an option--</option>
							<option value = "Single">Single</option>
							<option value = "Married">Married</option>
						</select>
						<br />
						<label for = "gender">Gender:</label>
						<select style = "width:22%;" class = "form-control" name = "gender" required = "required" >
							<option value = "">--Please select an option--</option>
							<option value = "Male">Male</option>
							<option value = "Female">Female</option>
						</select>
					</div>
					<br />
					<div class = "form-inline">
						<label for = "bp">Blood Pressure:</label>
						<input class = "form-control" name = "bp" type = "text"  required = "required" >
						&nbsp;&nbsp;&nbsp;
						<label for = "temp">Temperature:</label>
						<input class = "form-control" name = "temp" type = "number" max = "999" min = "0" size = "15" required = "required" ><label>&deg;C</label>
						&nbsp;&nbsp;&nbsp;
						<label for = "pr">Pulse Rate:</label>
						<input class = "form-control" name = "pr" type = "text"  required = "required" >
						<br />
						<br />
						<label for = "rr">Respiration Rate:</label>
						<input class = "form-control" name = "rr" type = "text"  required = "required" >
						&nbsp;&nbsp;&nbsp;
						<label for = "wt">Weight:</label>
						<input class = "form-control" name = "wt" style = "width:10%;" type = "number"  required = "required" ><label>kg</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label for = "ht">Height:</label>
						<input class = "form-control" name = "ht" style = "margin-right:10px;" type = "text"  required = "required" >
					</div>
					<br />
					<div class = "form-inline">
						<button  class = "btn btn-primary" name = "save_patient" ><span class = "glyphicon glyphicon-save"></span> SAVE</button>
						
					</div>
				</form>
			</div>	
		</div>	
	<?php require 'add_patient.php'?>
		
			
			
			</div>
			
				<br />
				<br />
				<table id = "table" class = "display" width = "100%" cellspacing = "0">
					
					<tbody>
					<?php
						$conn = new mysqli("localhost", "root", "", "hcpms") or die(mysqli_error());
						$query = $conn->query("SELECT * FROM `itr` ORDER BY `itr_no` DESC") or die(mysqli_error());
						while($fetch = $query->fetch_array()){
						$id = $fetch['itr_no'];
					
					?>
						
					<?php
						}
						$conn->close();
					?>
					</tbody>
					</table>
			</div>
		</div>

	
		
		
	</div>
	<div id = "footer">
		<label class = "footer-title">&copy; Copyright Covid-19 PUM and PUI MONITORING SYSTEM 2020</label>
	</div>
	


<?php include("script.php"); ?>
<script type = "text/javascript">
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>	
</body>
</html>