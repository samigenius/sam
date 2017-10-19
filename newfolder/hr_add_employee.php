<?php 
@require_once '../config/config.php';
@require_once '../config/session.php';
?>

<!DOCTYPE html>

<html>

    <head>
		<?php @require_once 'config/commonJS.php';?>
    </head>
	
    <body>
        <!-- wrap starts here -->
        <div id="wrap">

            <!--header -->
            <?php @require_once '../menu/header.php'; ?>

            <!-- navigation -->	
            <?php @require_once 'menu/hr_menu.php'; ?>
			
			<div id="content-wrap">
                <div id="main">
					<?php echo $_SESSION['Msg']; ?>
					
					
							<form method="post" action="hr_add_employee.php">
							
							   <center>
									<table class="tbl" width="600px" height="500px">
									
										<tr>
											<td><b>Employee ID</b></td>
											<td><input type="text" name="eid"></td>
										</tr>
									
										<tr>
											<td><b>Employee Name</b></td>
											<td><input type="text" name="ename"></td>
										</tr>
										
										
										<tr>
											<td><b>Address</b></td>
											<td><textarea rows="5" cols="30" name="address"></textarea></td>
										</tr>
										
										<tr>
											<td><b>Birth Date</b></td>
											<td><input type="date"  name="dob" data-date-inline-picker="true"/></td>
										</tr>
										
										<tr>
											<td><b>Gender</b></td>
											<td><input type="radio" name="gender" value="Male">Male  <input type="radio" name="gender" value="Female">Female </td>
										</tr>
										
										<tr>
											<td><b>Nationality</b></td>
											<td><input type="text" name="nationality"></td>
										</tr>
										
										<tr>
											<td><b>Blood Group</b></td>
											<td><select name="bloodgroup" id="bloodgroup">
													<option>--Select--</option>
													<option value="A+">A+</option>
													<option value="A-">A-</option>
													<option value="B+">B+</option>
													<option value="B-">B-</option>
													<option value="AB+">AB+</option>
													<option value="AB-">AB-</option>
													<option value="O+">O+</option>
													<option value="O-">O-</option>
												</select>
											</td>
										</tr>
										
										<tr>
											<td><b>Mobile No</b></td>
											<td><input type="text" name="mobile"></td>
										</tr>
										
										<tr>
											<td><b>Email</b></td>
											<td><input type="text" name="email"></td>
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
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];
$bloodgroup=$_POST['bloodgroup'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];



if(isset($_POST['submit'])){


// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO employee VALUES('$eid', '$ename', '$address', '$dob', '$gender', '$nationality', '$bloodgroup', '$mobile', '$email')");

//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
	echo "<script type='text/javascript'>";
	echo "alert('Data has saved')"; 
	echo "</script>";
}
}
?>
