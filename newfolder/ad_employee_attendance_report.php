<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <?php require_once 'config/commonJS.php'; ?>
		
		<title>Employee Attendance Report</title>
		
		<style>
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
            <?php @require_once 'menu/admin_menu.php'; ?>
			
			
			<div id="content-wrap">
                <div id="main">
					<?php echo $_SESSION['Msg']; ?>
					
					<br>
					<h1 align="center">Employee Attendance Report</h1>
					<br>
					
					<form method="post" action="ad_employee_attendance_report.php">
					
					Employee ID: <input type="text" name="term" />
					 
					<input type="submit" name="submit" value="Search" />
					</form>
					
					<br></br>
					
					<table style="width:100%">
 
					<table id="t01">
					  <tr>
						<th align="center" style="width:60px">Emp. ID</th>
						<th align="center" style="width:150px">Employee Name</th>		
						<th align="center" style="width:100px">Date</th>
						<th align="center" style="width:100px">Entry Time</th>
						<th align="center" style="width:150px">Entry Status</th>
						<th align="center" style="width:100px">Exit Time</th>
						<th align="center" style="width:150px">Exit Status</th>
					  </tr>
					
						
					<?php			
						include('../class/db_p.php');


						// Connect to server and select database.
						$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
						mysqli_select_db($con, $db_name)or die("cannot select DB");  
				
						$term = $_POST['term'];
				
						if($term!=="")
				
						{		
						$sql = mysqli_query($con, "SELECT empcheckin.EmpID, empcheckin.EmpName, empcheckin.Date, empcheckin.EntryTime, empcheckin.EntryStatus, empcheckout.ExitTime, empcheckout.ExitStatus FROM empcheckin, empcheckout WHERE empcheckin.EmpID='$term' AND empcheckout.EmpID='$term'") 
						or die(mysql_error());

						while($row = mysqli_fetch_array( $sql )) {
							
							// echo out the contents of each row into a table
							echo "<tr>";
							echo '<td align="center">' . $row['EmpID'] . '</td>';
							echo '<td align="center">' . $row['EmpName'] . '</td>';
							echo '<td align="center">' . $row['Date'] . '</td>';
							echo '<td align="center">' . $row['EntryTime'] . '</td>';
							echo '<td align="center">' . $row['EntryStatus'] . '</td>';
							echo '<td align="center">' . $row['ExitTime'] . '</td>';
							echo '<td align="center">' . $row['ExitStatus'] . '</td>';
							echo "</tr>";  
							}

						}
						
						else{
							
							$sql1 = mysqli_query($con, "SELECT Date FROM empcheckin ORDER BY Date DESC LIMIT 1") 
						or die(mysql_error());
						
						while($row = mysqli_fetch_array( $sql1 )) {
							
							 $date=$row['Date'];
						}
						
						for($var=1;$var<50;$var++){
						$sql = mysqli_query($con, "SELECT empcheckin.EmpID, empcheckin.EmpName, empcheckin.Date, empcheckin.EntryTime, empcheckin.EntryStatus, empcheckout.ExitTime, empcheckout.ExitStatus FROM empcheckin, empcheckout WHERE empcheckin.EmpID='$var' AND empcheckout.EmpID='$var' AND empcheckout.Date='$date'") 
						or die(mysql_error());

						while($row = mysqli_fetch_array( $sql )) {
							
							// echo out the contents of each row into a table
							echo "<tr>";
							echo '<td align="center">' . $row['EmpID'] . '</td>';
							echo '<td align="center">' . $row['EmpName'] . '</td>';
							echo '<td align="center">' . $row['Date'] . '</td>';
							echo '<td align="center">' . $row['EntryTime'] . '</td>';
							echo '<td align="center">' . $row['EntryStatus'] . '</td>';
							echo '<td align="center">' . $row['ExitTime'] . '</td>';
							echo '<td align="center">' . $row['ExitStatus'] . '</td>';
							echo "</tr>";  
							}
						}
						}
						
					?>
						
					
					</table>
				</div>
			</div>
		
            <!--footer starts here-->
            <?php @require_once '../menu/footer.php'; ?>
            <!-- wrap ends here -->
		</div>	
    </body>
</html>
