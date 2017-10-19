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
            <?php @require_once 'menu/emp_menu.php'; ?>
			
			<div id="content-wrap">
                <div id="main">
					<?php echo $_SESSION['Msg']; ?>
					
					
							<form method="post" action="emp_add_student.php">
							
							   <center>
									<table class="tbl" width="500px" height="450px">
									
										<tr>
											<td><b>Student ID :</b></td>
											<td><input type="text" name="stuid"></td>
										</tr>
									
										<tr>
											<td><b>Student Name :</b></td>
											<td><input type="text" name="stuname"></td>
										</tr>
										
										<tr>
											<td><b>Batch No :</b></td>
											<td><select name="batchno" id="batchno">
												<option>--Select Batch No--</option>
												<option value="15-10">15-10</option>
												<option value="15-20">15-20</option>
												<option value="15-30">15-30</option>
												</select></td>
										</tr>
										
										<tr>
											<td><b>Batch Catagory :</b></td>
											<td><select name="batchcatagory" id="batchcatagory">
												<option>--Select Batch Catagory--</option>
												<option value="Graphics Design">Graphics Design</option>
												<option value="Web Design And Developer">Web Design & Developer</option>
											</select></td>
										</tr>
										
										<tr>
											<td><b>Time :</b></td>
											<td><select name="time" id="time">
													<option>--Select Time--</option>
													<option value="3.00 - 4.00">3.00 - 4.00</option>
													<option value="4.00 - 5.00">4.00 - 5.00</option>
												</select>
											</td>
										</tr>
										
										<tr>
											<td><b>Mobile No :</b></td>
											<td><input type="text" name="stucontact"></td>
										</tr>
										
										<tr>
											<td><b>Email :</b></td>
											<td><input type="text" name="stuemail"></td>
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
$stuid=$_POST['stuid'];
$stuname=$_POST['stuname'];
$batch=$_POST['batch'];
$batchcatagory=$_POST['batchcatagory'];
$time=$_POST['time'];
$stucontact=$_POST['stucontact'];
$stuemail=$_POST['stuemail'];



if(isset($_POST['submit'])){


// Insert data into mysql 
$sql=mysqli_query($con, "INSERT INTO student VALUES('$stuid', '$stuname', '$batch', '$batchcatagory', '$time', '$stucontact', '$stuemail')");

//$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".

if($sql){
	echo "<script type='text/javascript'>";
	echo "alert('Data has saved')"; 
	echo "</script>";
}
}
?>
