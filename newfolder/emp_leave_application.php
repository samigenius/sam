<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'config/commonJS.php'; ?>
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
					
							<form method="post" action="emp_leave_application.php">
							
							   <center>
									<table class="tbl" width="600px" height="500px">
									
										<tr>
											<td><b>Employee ID :</b></td>
											<td><input type="text" name="eid"></td>
										</tr>
									
										<tr>
											<td><b>Employee Name :</b></td>
											<td><input type="text" name="ename"></td>
										</tr>
					
										<tr>
											<td><b>Leave Type :</b></td>
											<td><select name="leavetype" id="leavetype">
													<option>--Select Type--</option>
													<option value="cleave">Casual Leave</option>
													<option value="hpleave">Half Paid Leave</option>
													<option value="mleave">Medical Leave</option>
												</select>
											</td>
										</tr>
										
										<tr>
											<td><b>Start Date :</b></td>
											<td><input type="date"  name="sdate" data-date-inline-picker="true"/></td>
										</tr>
										
										<tr>
											<td><b>Ending Date :</b></td>
											<td><input type="date"  name="edate" data-date-inline-picker="true"/></td>
										</tr>
										
										<tr>
											<td><b>No of Days :</b></td>
											<td><input type="text" name="noofdays"></td>
										</tr>
						
										<tr>
											<td><b>Purpose :</b></td>
											<td><input type="text" name="purpose"></td>
										</tr>
										
										<tr>
											<td></td>
											<td><input type="submit" name="submit" value="Submit"></td>
										</tr>
										
									</table>
								</center>
								
							</form>
					
					
				</div>
			</div>
			
            <!--footer starts here-->
            <?php @require_once '../menu/footer.php'; ?>
            <!-- wrap ends here -->
        </div>
    </body>
</html> 


<?php

include('../class/db_p.php');


// Connect to server and select database.
$con=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db($con, $db_name)or die("cannot select DB");


// Get values from form 
$eid=$_POST['eid'];
$ename=$_POST['ename'];
$leavetype=$_POST['leavetype'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$noofdays=$_POST['noofdays'];
$purpose=$_POST['purpose'];


if(isset($_POST['submit'])){


// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO leaveapplication (EmpID, EmpName, LeaveType, StartDate, EndDate, NoDays, Purpose) VALUES('$eid', '$ename', '$leavetype', '$sdate', '$edate', '$noofdays', '$purpose')");

// if successfully insert data into database, displays message "Successful".

if($sql){
	echo "<script type='text/javascript'>";
	echo "alert('Data has saved')"; 
	echo "</script>";
}
}
?>
