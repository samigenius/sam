<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
?>

<!DOCTYPE html>

<html>

<head>
     <?php require_once 'config/commonJS.php'; ?>
	 
	 <title>Student Attendance</title>
	
	<style>
	
		.up
		{ 
		text-align:center;
		padding:10px;
		}
		
		
			table, th, td {
			border: 1px solid black;
			padding: 5px;
			}
			table {
			border-spacing: 3px;
			}
			table#t01 {
			width: 100%;    
			background-color: #f1f1c1;
			}

	</style>
	 
</head>

<body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once '../menu/header.php'; ?>

            <!-- navigation -->	
            <?php @require_once 'menu/emp_menu.php'; ?>
			
			<div id="content-wrap">
                <div id="main">
					<?php echo $_SESSION['Msg']; ?>
					
					
						<div class="up">
						<center>
						<form action="#" method="post">
						<table>
						<tr>
											<td>Batch No</td>
											<td><select name="batchno" id="batchno">
												<option>--Select Batch No--</option>
												<option value="15-10">15-10</option>
												<option value="15-20">15-20</option>
												<option value="15-30">15-30</option>
												</select></td>
										</tr>
						
						<tr>
						<td><label for="name">Batch Catagory</label></td>
						<td><select name="batchcatagory" id="batchcatagory">
								<option>--Select Batch Catagory--</option>
								<option value="Graphics Design">Graphics Design</option>
								<option value="Web Design And Developer">Web Design & Developer</option>
							</select></td>
						</tr>
						
						<tr>
						<td><label for="name">Date</label></td>
						<td><input type="date" id="date" data-date-inline-picker="true"/></td>
						</tr>
						
						<tr>
						<td><label for="name">Time</label></td>
						<td><select name="time" id="time">
								<option>--Select Time--</option>
								<option value="time">3.00 - 4.00</option>
								<option value="time">4.00 - 5.00</option>
						</select>
						</td>
						</tr>
						</table>
						
								<br/>
										 
						<input type="submit" value="Submit"/></form>
						</center>
						</div>
						
						
						<h1 align="center">Student Attendance</h1>
						<br>
						
						<div class="down">
						<center>		   
						<table style="width:100%">
 
						<table id="t01">
						<tr>
							<th align="center" style="width:40px">SL.</th>
							<th align="center" style="width:80px">Student ID</th>		
							<th align="center" style="width:150px">Student Name</th>
							<th align="center" style="width:80px">Attendance</th>
							
						</tr>
						</table>
						</center>
						</div>	
					
				</div>
			</div>
			
            <!--footer starts here-->
            <?php @require_once '../menu/footer.php'; ?>
            <!-- wrap ends here -->
        </div>
    </body>
</html>
